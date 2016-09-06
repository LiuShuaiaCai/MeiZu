<?php
namespace Admin\Controller;
use Think\Controller;
class UserController extends Controller {
	//用户列表页
	public function index(){
		// 1、实例化Model类
		$model=M('user');
		// 2、设置搜索条件
		$where=[];
		if (!empty($_GET['userName'])) {
            $where['userName'] = array('like',"%{$_GET['userName']}%");
        }
        // dump($where);
		// 3、获取总条数
		$count=$model->where($where)->count();
		// 4、实例化Page类
		$page=new \Think\Page($count,5);
		// 5、展示分页
		$config=array(
				$page->setConfig('first','首页'),
				$page->setConfig('prev','上一页'),
				$page->setConfig('next','下一页'),
				$page->setConfig('last','未页'),
				$page->setConfig('theme',"共 %TOTAL_ROW% 条记录 %FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END%")
			);
		// 6、展示页码
		$show=$page->show();
		$this->assign('show',$show);
		// 7、执行查询
    	$data=$model->where($where)->limit($page->firstRow,$page->listRows)->order('id DESC')->select();
    	// echo $model->_sql();
    	$this->assign('data',$data);
    	$this->display();
	}

	//添加用户页面
	public function add(){
		$this->display();
	}
	//执行添加
	public function insert(){
		$add=M('user');
		$_POST['ztime']=time();
		$res=$add->create();
		if($res){
			$data=$add->add();
			if($data){
				//把分类ID添加到商品的tid
				$userdetail=M('userdetail');
				$uid['uid']=$data;
				$detail=$userdetail->add($uid);
				$this->success('添加成功',U('User/index'),2);
			}else{
				$this->error('添加失败!');
			}
		}else{
			$add->getError();
		}

	}


	//用户修改页面
	public function edit(){
		$edit=M('user');
		$id=intval($_GET['id']);
		$data=$edit->find($id);
		$this->assign('data',$data);
		$this->display();
	}
	//执行修改
	public function update(){
		$update=M('user');
		$_POST['password']=md5($_POST['password']);
		$res=$update->create();
		if($res){
			$data=$update->save();
			if($data){
				$this->success('修改成功',U('User/index'),2);
			}else{
				$this->error('修改失败');
			}
		}else{
			$update->getError();
		}
	}

	//删除操作
	public function delete(){
		$delete=M();
		$id=intval($_GET['id']);
		$data1=$delete->table('meizu_adress')->where("uid=$id")->delete();
		$data2=$delete->table('meizu_order')->where("uid=$id")->delete();
		$data3=$delete->table('meizu_post')->where("uid=$id")->delete();
		$data4=$delete->table('meizu_reply')->where("uid=$id")->delete();
		$data5=$delete->table('meizu_user')->where("id=$id")->delete();

		if($data1 || $data2 || $data3 || $data4 || $data5){
			$this->success('删除成功',U('User/index'),1);
		}else{
			$this->error('删除失败');
		}
	}

	//禁用用户
	public function enable(){
		$enable=M('user');
		$id=$_GET['id'];
		$arr['status']=$_GET['status']==1?'2':'1';
		$data=$enable->where("id={$id}")->save($arr);
		// $this->success('',U('User/index'),0);
		// $this->display('index');
		header('Location:'.$_SERVER['HTTP_REFERER']);
	}

	//验证用户是否存在
	public function finds(){
		$find=M('user');
		$user['userName']=I('post.userName');
		$data=$find->where($user)->find();
		if($data){
			$this->ajaxReturn('yes');
		}else{
			$this->ajaxReturn('no');
		}
	}

}