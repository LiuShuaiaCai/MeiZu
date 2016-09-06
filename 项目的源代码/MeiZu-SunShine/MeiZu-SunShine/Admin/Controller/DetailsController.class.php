<?php
namespace Admin\Controller;
use Think\Controller;
class DetailsController extends Controller {

    public function index()
    {
        // 1.实例化Model类
        $details = M('details');
        
        // 3.获取总条数
        $count = $details->where($wherelist)->count();
       
        // 实例化page类
        $page = new \Think\Page($count, 10);
        // 展示页码

        $page->setConfig('prev','上一页');
            $page->setConfig('next','下一页');
            $page->setConfig('first','首页');
            $page->setConfig('last','尾页');
            $page->setConfig('theme',"共 %TOTAL_ROW% 条记录 %FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END%");
        $this->assign('show',$page->show());

        //4.查询数据
        $wherelist[]='t.id=d.gid and g.tid=d.gid';
        $wherelist[]='dels=1';
        $data = $details->table('meizu_type t,meizu_details d,meizu_goods g')->where($wherelist)->limit($page->firstRow,$page->listRows)->select();
        
        // 5.分配变量
        $this->assign('data',$data);

        // 6.输出模板
        $this->display();
    }


    //详细列表修改页
    public function edit()
    {
        // 1.实例化model类
        $details = M('details');

        // 2.获取id并查询数据
        $id = I('get.id',0,'intval');
        $data = $details->where("gid={$id}")->find();
        
        // 3.分配
        $this->assign('data',$data);

        // 4.输出模板
        $this->display();
    }

    //执行修改
    public function update()
    {
        //1.实例化model
        $details = M('details');
        
        //2.创建数据
        $res = $details->create();
        
        // 3.判断
        if ($res) {
            // 4.执行修改操作
            $result = $details->save();

            // 5.判断修改结果
            if ($result) {
                //echo 'yes';
                $this->success('修改成功',U('Details/index'));

            } else {
                //echo 'no';
                $this->error('修改失败');
            }
        } else {
            // 失败
            $this->error($details->getError());
        }

       
    }
}