<?php
namespace Admin\Controller;
use Think\Controller;
class AuthgroupController extends CommonController {
    
    public function auth_group()
    { 
      //1.实例化
      $group = M('auth_group');

      //搜索添加
      $wherelist = [];

      //判断管理组名
      if(!empty($_GET['title'])){
        $wherelist['title'] = array('like',"%{$_GET['title']}%");
      }

      //查询数据总条数
      $count = $group->where($wherelist)->count();

      //实例化page类
      $page = new \Think\Page($count,5);
      $page->setConfig('prev','上一页');
      $page->setConfig('next','下一页');
      $page->setConfig('first','首页');
      $page->setConfig('last','尾页');
      $page->setConfig('theme',"共 %TOTAL_ROW% 条记录 %FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END%");

      //展示页码 
      $this->assign('show',$page->show());
      //2.查询数据信息
      $data = $group->where($wherelist)->limit($page->firstRow,$page->lisRows)->select();
      // dump($data);
      // echo $group->_sql();

      //3.分配变量
      $this->assign('data',$data);

      //4.输出
      $this->display();
    }

    //添加分组页面
    Public function add_auth_group()
    {
      
      $this->display();

    }

    //执行添加操作
    public function insert()
    {
      //1.实例化
      $group = M('auth_group');

      //2.创建数据对象
      $res = $group->create();
      

      //3.判断
      if($res){
        //3.1执行添加操作
        $result = $group->add();
        // echo $group->_sql();
        //3.2判断
        if($result){
          // echo 'ok';
          $this->success('添加成功',U('Authgroup/auth_group'));
        }else{
          // echo 'no';
          $this->error('添加失败');
        }
      }else{
        $this->error($group->getError());
      }

    }

    //展示修改页面
    Public function edit()
    {
      //1.实例化
      $group = M('auth_group');
      // dump($_POST);
      //2.获取Id并执型查找
      $id = I('get.id',0,'intval');
      $data = $group->find($id);
      // echo $group->_sql();
      // echo $id;
      //分配变量
      $this->assign('data',$data);

      //4.输出
      $this->display();
    }

    //执行修改操作
    public function update()
    {
      //1.实例化
      $group = M('auth_group');

      //2.创建数据对象
      $res = $group->create();
      // dump($_POST);
      //3.判断
      if($res){
        //3.1执行修改
        $result = $group->save();
        //3.2判断
        if($result){
          // echo 'ok';
          $this->success('修改成功',U('Authgroup/auth_group'),1);
        }else{
          // echo 'no';
          $this->error('修改失败');
        }
      }else{
        $this->error($group->getError());
      }
    }

    //执行删除操作
    public function del()
    {
      //1.实例化
      $group = M('auth_group');

      //2.获取id并执行删除操作
      $id = I('get.id');

      $res = $group->delete($id);

      //3.判断
      if($res){
        // echo 'ok';
        $this->success('删除成功',U('Authgroup/auth_group'),1);
      }else{
        // echo 'no';
        $this->error('删除失败');
      }
    }

    //展示查看权限页面
    public function showedit()
    {   
        //1.实例化
        $group = M('auth_group');

        //2.获取id并查询数据
        $id = I('get.id');
        // echo $id;

        $data = $group -> find($id);
        // dump($data);

        //分配一下变量
        $this->assign('data',$data);
        
        $arr = explode(',',$data['rules']);
        
        // dump($arr);

        //3.分配模板并输出
        $this->assign('arr',$arr);

        //4.实例化权限类
        $rule = M('auth_rule');

        //5.查询所有权限
      
        $res = $rule->select();
        // dump($res);
       
        //6.分配模板
        $this->assign('res',$res);

        $this->display();

        
    }

    //执行查看修改权限操作
    public function showrule()
    {

      //1.实例化
      $group = M('auth_group');
   
      //2.创建数据对象
      $res = $group->create();

      // dump($res);
      $arr=$res['rules'];
      // dump($arr);

      $rule['rules'] = implode(',',$arr);
      // dump($rule);
      
      $where['id']=I('post.id');
      //3.判断
      if($res){
        //3.1执行修改操作
        $result = $group->where($where)->save($rule);
        // echo $group->_sql();
        //3.2判断
        if($result){
            // echo 'ok';
          $this->success('修改成功',U('Authgroup/auth_group'),1);
          }else{
            // echo 'no';
          $this->error('修改失败');
          } 
      }else{
          $this->error($group->getError());
        }
      
    }


    //展示用户组成员
    public function showgroups()
    {
      //1.接受数据
      $id = I('get.id');
      
      //2.实例化
      $model = M();

      //3.查询数据
      $data = $model->query("select * from meizu_auth_group where id={$id}");
      // dump($data);

      $data1 = $model->query("select * from meizu_admin ad, meizu_auth_group z,meizu_auth_group_access g where ad.id=g.uid and g.group_id=z.id and z.id={$id}");

      // dump($data1);
      $this->assign('data1',$data1);
      $this->assign('data',$data);
      $this->display("Authgroup/showgroups");

    }
}



