<?php
namespace Admin\Controller;
use Think\Controller;
header('content-type:text/html;charset=utf-8');
class OrderController extends Controller {
    public function order(){
        //实例化
    	$order=M();

        //配置搜索条件
        $where=[];
        if(!empty($_GET['userName'])){
            $where['u.userName']=array('like',"%{$_GET['userName']}%");
        }

        //分页
        // 查询数据总条数
        $count=$order->table('meizu_order o,meizu_user u')->where('o.uid=u.id')->where($where)->count();
        // dump($count);
        //实例化Page
        $page=new \Think\Page($count,5);
        //分页展示
        $config=array(
                $page->setConfig('first','首页'),
                $page->setConfig('prev','上一页'),
                $page->setConfig('next','下一页'),
                $page->setConfig('last','尾页'),
                $page->setConfig('theme',"共 %TOTAL_ROW% 条订单 %FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END%")
            );

        //展示页码
        $show=$page->show();
        $this->assign('show',$show);

        //执行查询
    	$data=$order->table('meizu_goods g,meizu_order o,meizu_user u')->field('g.gname,o.id,o.snum,o.number,o.status,u.userName')->where('o.gid=g.id and o.uid=u.id')->where($where)->limit($page->firstRow,$page->listRows)->select();
    	$this->assign('data',$data);
    	$this->display();
    }

    public function edit(){
    	$id=I('get.id');
    	$edit=M();
    	$data2=$edit->field('g.*,o.*,u.*,a.*,o.id as orderid')->table('meizu_goods g,meizu_order o,meizu_user u,meizu_adress a')->where("o.id=$id and o.gid=g.id and o.uid=u.id and o.aid=a.id")->find();
    	// dump($data2);
    	$this->assign('data2',$data2);
    	$this->display();
    }

    public function update(){
        //接收id
        $id['id']=$_POST['id'];
        $post=$_POST;
        $up=M('order');
        //创建对象
        $str=$up->create();
        if($str){
            $data=$up->save();
            // echo $up->_sql();
            if($data){
                $this->success('修改成功',U('Order/order'),3);
            }else{
                $this->error('修改失败');
            }
        }else{
            $up->getError();
        }
    }

    //删除订单
    public function delete(){
        $delete=M('order');
        $id['id']=I('get.id');
        $data=$delete->where($id)->delete();
        $this->redirect('Order/order');
    }

    //查看订单
    public function look(){
        $look=M();
        $id=I('get.id');
        $where['o.gid']=array('exp','=g.id');
        $where['o.uid']=array('exp','=u.id');
        $where['o.aid']=array('exp','=a.id');
        $where['o.id']=array('exp',"=$id");
        $data=$look->table('meizu_goods g,meizu_user u,meizu_order o,meizu_adress a')->where($where)->select();
        $this->assign('check',$data);
        $this->display();
    }
}