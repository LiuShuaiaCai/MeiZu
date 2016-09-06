<?php
namespace Admin\Controller;
use Think\Controller;
header('content-type:text/html;charset=utf-8');
class AdressController extends Controller {
	//查询所有地址
    public function adress(){
    	$adress=M();

    	//搜索添件
    	$where=[];
    	if(!empty($_GET['userName'])){
    		$where['u.userName']=array('like',"%{$_GET['userName']}%");
    	}
    	$where['a.uid']=array('exp','=u.id');

    	//分页操作
    	//数据总条数
    	// $count=$adress->table('meizu_adress')->where($where)->count();
    	$count=$adress->table('meizu_adress a,meizu_user u')->where($where)->count();
    	// echo $adress->_sql();
    	//实例化Page类
    	$page=new \Think\Page($count,5);
    	//展示分页
    	$config=array(
				$page->setConfig('first','首页'),
				$page->setConfig('prev','上一页'),
				$page->setConfig('next','下一页'),
				$page->setConfig('last','尾页'),
				$page->setConfig('theme',"共 %TOTAL_ROW% 条记录 %FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END%")
			);

    	//页码展示
    	$show=$page->show();
    	$this->assign('show',$show);

		$data=$adress->field('a.*,u.userName')->table('meizu_adress a,meizu_user u')->where($where)->limit($page->firstRow,$page->listRows)->order('a.uid')->select();
		// echo $adress->_sql();
		$this->assign('data',$data);
		$this->display();
    }

   public function edit(){
	    $id['id']=I('get.id');
	    $edit=M('adress');
	    $data=$edit->where($id)->find();
	    $this->assign('data',$data);
	    $this->display();
	}

	// 修改地址
	public function city(){
		//接收puid
		$upid['upid']=I('post.upid');
		//实例化area
		$area=M('area');
		//选择数据
		$data=$area->where($upid)->select();
		//分配变量
		echo json_encode($data);
	}

	//执行修改
	public function update(){
		//实例化adress
		$update=M('adress');
		//接收id
		$id['id']=I('post.id');
		$province=$_POST['province'];
		$city=$_POST['city'];
		$county=$_POST['county'];
		$town=$_POST['town'];
		$area=M('area');
		$province=$area->field('name')->where("id=$province")->find();
		$city=$area->field('name')->where("id=$city")->find();
		$county=$area->field('name')->where("id=$county")->find();
		$town=$area->field('name')->where("id=$town")->find();

		$where['province']=$province['name'];
		$where['city']=$city['name'];
		$where['county']=$county['name'];
		$where['town']=$town['name'];
		$where['aphone']=$_POST['aphone'];
		$where['more']=$_POST['more'];

		//创建数据对象
		$res=$update->create($where);
		if($res){
			$data=$update->where($id)->save();
			if($data){
				$this->success('修改成功',U('Adress/adress'),3);
			}else{
				$this->error('修改失败');
			}
		}else{
			$update->getError();
		}
	}

	//删除地址
	public function delete(){
		$id['id']=I('get.id');
		$del=M('adress');
		$data=$del->where($id)->delete();
		if($data){
			header('location:'.$_SERVER['HTTP_REFERER']);
		}
	}
	
}