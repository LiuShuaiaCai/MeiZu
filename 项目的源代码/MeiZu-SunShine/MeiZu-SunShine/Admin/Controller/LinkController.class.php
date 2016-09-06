<?php
namespace Admin\Controller;
use Think\Controller;
class LinkController extends Controller {
    
    //index ()方法
    public function index()
    {
        // 1.实例化Model类
        $link = M('link');

        // 2.接收搜索条件（判断对应的搜索条件是否存在）
        $wherelist = [];
        // 用户名
        if (!empty($_GET['linkname'])) {
            $wherelist['linkname'] = array('like',"%{$_GET['linkname']}%");
        }

        // 3.获取总条数
        $count = $link->where($wherelist)->count();
        // 实例化page类
        $page = new \Think\Page($count,3);
        // 展示页码
        $page->setConfig('prev','上一页');
            $page->setConfig('next','下一页');
            $page->setConfig('first','首页');
            $page->setConfig('last','尾页');
            $page->setConfig('theme',"共 %TOTAL_ROW% 条记录 %FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END%");
        $this->assign('show',$page->show());

        // 4.查询
        $data = $link->where($wherelist)->limit($page->firstRow,$page->listRows)->select();

        // 5.分配变量
        $this->assign('data',$data);

        // 6.输出模板
        $this->display();
    }

    // 添加页面
    public function add()
    {
        $this->display();
    }

    // 执行数据添加操作
    public function insert()
    {
        // 1.实例化Model类
        $link = M('link');

        // 2.创建数据对象
        $res = $link->create();    // 默认$_POST

        // 3.判断结果
        if ($res) {
            // 4.执行添加操作
            $result = $link->add();

            // 5.判断是否成功
            if ($result) {
                // echo 'ok';
                $this->success('添加成功',U('Link/index'));
            } else {
                // echo 'no';
                $this->error('添加失败');
            }
        } else {
            // 输出验证的错误信息
            // echo $user->getError();
            $this->error($link->getError());
        }
    }

    // 输出修改页面
    public function edit()
    {
        // 1.实例化model类
        $link = M('link');

        // 2.获取id并查询数据
        $id = I('get.id',0,'intval');
        $data = $link->find($id);
        // dump($data);

        // 3.分配
        $this->assign('data',$data);

        // 4.输出模板
        $this->display();
    }

    // 修改操作
    public function update()
    {
        //1.实例化model
        $link = M('link');

        // 2.创建数据对象
        $res = $link->create();

        // 3.判断
        if ($res) {
            // 4.执行修改操作
            $result = $link->save();

            // 5.判断修改结果
            if ($result) {
                $this->success('修改成功',U('Link/index'));
            } else {
                // echo 'no';
                $this->error('修改失败');
            }
        } else {
            // 失败
            $this->error($link->getError());
        }
    }

    // 执行删除操作
    public function del()
    {
        //1.实例化model
        $link = M('link');

        // 2.获取id并执行删除
        $id = I('get.id',0,'intval');
        $res = $link->delete($id);

        // 3.判断
        if ($res) {
            // echo 'ok';
            $this->success('删除成功',U('link/index'));
        } else {
            // echo 'no';
            $this->error('删除失败');
        }
    }

    //禁用用户
    public function enable(){

        $enable=M('link');

        $id=$_GET['id'];

        $arr['status']=$_GET['status']==1?'2':'1';

        $data=$enable->where("id={$id}")->save($arr);

        // $this->success('',U('User/index'),0);
        // $this->display('index');
        
        header('Location:'.$_SERVER['HTTP_REFERER']);
    }

}