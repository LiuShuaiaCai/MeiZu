<?php
    namespace Admin\Controller;
    use Think\Controller;
    class DropController extends Controller
    {
        public function drop(){
            // 1.实例化Model类
        $goods = M('goods');
        
         // 2.接收搜索条件（判断对应的搜索条件是否存在）
        $wherelist = [];
        $wherelist[]='dels=2';
        // 用户名

        if (!empty($_GET['gname'])) {
            $wherelist['gname'] = array('like',"%{$_GET['gname']}%");
        }
        
        // 3.获取总条数
        $count = $goods->where($wherelist)->count();
       
        // 实例化page类
        $page = new \Think\Page($count, 10);
        // 展示页码

        $page->setConfig('prev','上一页');
            $page->setConfig('next','下一页');
            $page->setConfig('first','首页');
            $page->setConfig('last','尾页');
            $page->setConfig('theme',"共 %TOTAL_ROW% 条记录 %FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END%");
        $this->assign('show',$page->show());
        // 4.查询
        
        $wherelist[]='t.id =g.tid';
        $data = $goods->table('meizu_type t,meizu_goods g')->where($wherelist)->limit($page->firstRow,$page->listRows)->select();
        //dump($data);
        // 5.分配变量
        $this->assign('data',$data);

        // 6.输出模板
        $this->display();
        }

        //加入回收站
        public function enable(){

        $enable=M('goods');

        $id=$_GET['id'];

        $arr['dels']=$_GET['dels']==1?'2':'1';

        $data=$enable->where("id={$id}")->save($arr);

        // $this->success('',U('User/index'),0);
        // $this->display('index');

        header('Location:'.$_SERVER['HTTP_REFERER']);
    }

    // 执行删除操作
    // public function del()
    // {
    //     //1.实例化model
    //     $type = M();
        
    //     // 2.获取id并执行删除
    //     $id = I('get.id',0,'intval');
        
    //     $res = $type ->query("delete from meizu_type t,meizu_goods g,meizu_details d,meizu_photo p where t.id=g.tid and g.tid=d.gid and d.gid=p.gid and t.id={$id}");
    //     echo $type->_sql();
    //     if($res){
    //        //$this->success('删除成功',U('Drop/drop')); 

    //     }else{
    //        //$this->error('删除失败');
    //     }
    //      echo 'no';
    // }

        public function del()
        {
            $type=M('type');
            $goods=M('goods');
            $details=M('details');
            $photo=M('photo');
            //$type=M();
            $id = I('get.id',0,'intval');
            //$SQL="delete user,userdetail from user left join userdetail on user.id=userdetail.id where user.id={$id}";

            //$res = $type->query("delete meizu_type,meizu_goods from meizu_type left join meizu_goods on meizu_type.id=meizu_goods.tid where meizu.id={$id}");
            $res = $type->query("delete from meizu_type where id={$id}");
            $res1 = $goods->query("delete from meizu_goods where tid={$id}");
            $res2 = $details->query("delete from meizu_details where gid={$id}");
            $res3 = $photo->query("delete from meizu_photo where gid={$id}");
            
        }
    }