<?php 
namespace Home\Controller;

use Think\Controller;

class QuestionController extends Controller
{	


	//展示页面
	public function index()
	{	
		//1.实例化
		$question  = M('question');
		$qtype = M('qtype');

		//2.查询热门问题数据
		$data = $question->select();
		// dump($data);

		//3.查询问题分类数据
		$res = $qtype->select();
		// dump($res);
	
		//5.获取用户Id
		$uid = $_SESSION['id'];

		//6.分配变量
		$this->assign('uid',$uid);
		$this->assign('data',$data);
		$this->assign('res',$res);
		//7.输出
		$this->display();
	}

	//展示问题页面
	public function qpost()
	{
		//搜索条件
		if(!empty($_GET['title'])){
			$title = "and p.title like '%{$_GET['title']}%'";
		}else{
			$title='';
		}

		//1.实例化
		$qpost = M('qpost');
		$model = M();
		$qreply =M('qreply');
		$arr = [];
		$str = [];
		$tid = I('get.tid');
		$id = $_SESSION['id'];

		//查询数据总条数
		$count = $model->table('meizu_qtype t,meizu_qpost p ,meizu_user u')->where("t.id=p.tid and u.id=p.uid and p.tid={$tid} {$title}")->count();
		// dump($count);

		//实例化page类
		$page = new \Think\Page($count,5);

		$page->setConfig('prev','上一页');
		$page->setConfig('next','下一页');
		$page->setConfig('first','首页');
		$page->setConfig('last','尾页');
		$page->setConfig('theme',"共 %TOTAL_ROW% 条记录 %FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END%");

		$this->assign('show',$page->show());

		//2.查询数据
		$res =  $model->field('p.id,u.userName,p.title,p.ctime,p.tid,p.uid')->table('meizu_qtype t,meizu_qpost p ,meizu_user u')->where("t.id=p.tid and u.id=p.uid and p.tid={$tid} {$title}")->limit($page->firstRow,$page->listRows)->select();
	
		foreach ($res as $key => &$value) {
			$count=$qreply->where("pid={$value['id']}")->count();
			$time = $model->field('u.userName')->table('meizu_qreply r,meizu_user u')->where("r.uid=u.id and r.pid={$value['id']}")->order('r.rtime desc')->find();		

			$value['count'] = $count;
			$value['replayName'] = $time['userName'];
			
		}
		
		//3.分配变量
		$this->assign('id',$id);
		$this->assign('res',$res);

		//4.输出
		$this->display();
	}

	//执行添加操作
	public function fpost()
	{
		$this->display();
	}

	//执行添加操作
	public function demo()
	{
		//判断用户是否登录
		if(!empty($_SESSION['userName'])){
			//1.实例化

			$qpost = M('qpost');
		
			//2.获取当前时间
			$_POST['ctime']=time();
			$_POST['uid'] = $_SESSION['id'];

			//3.创建数据对象
			$res = $qpost->create();

			//4.判断
			if($res){
				//4.1执行添加
				$result = $qpost->add();

				//4.2判断
				if($result){
					// echo 'ok';
					$this->success('添加成功',U('Question/qpost',array('tid'=>$_POST['tid'])),1);
				}else{
					// echo 'no';
					$this->error('添加失败');
				}

			}else{
				$this->error($qpost->getError());
			}

		}else{
			$this->error('请您先登录后发帖');
		}
	}

	//添加回复
	public function qreply()
	{

		//1.实例化
		$model = M();
		$id = I('get.id');
		$tid = I('get.tid');
		// echo $tid;

		//2.数据查询
		$data = $model->field('u.userName,p.ctime,p.content,u.photo')->table('meizu_qpost p,meizu_user u')->where("p.uid=u.id and p.id={$id}")->find();

		$data1 = $model->field('u.userName,r.contents,r.rtime,u.photo')->table('meizu_qreply r,meizu_user u')->where("r.uid=u.id and r.pid={$id}")->select();

		//分配变量
		$this->assign('tid',$tid);
		$this->assign('data',$data);
		$this->assign('data1',$data1);

		//输出
		$this->display();
	}

	//执行添加回复
	public function doqreply()
	{
		if(!empty($_SESSION['userName'])){
			//1.实例化
			$qreply = M('qreply');

			//2.获取当前时间
			$_POST['rtime']=time();
			$_POST['uid']=$_SESSION['id'];

			//3.创建数据对象
			$res = $qreply->create();

			//4.判断
			if($res){
				//4.1执行添加
				$result = $qreply->add();

				//4.2判断
				if($result){
					// echo 'ok';
					$this->success('回复成功',U('Question/qreply',array('id'=>$_POST['pid'],'tid'=>$_POST['tid'])),1);
				}else{
					// echo 'no';
					$this->error('回复失败');
				}
			}else{
				$this->error($qreply->getError());
			}
		}else{

			$this->error('请您先登录后回复');
		}
		
	}



















	// public function qpost()
	// {
	// 	//1.接受Id并且实例化
	// 	$tid = I('get.tid');
	// 	$uid = I('get.id');		
	// 	echo $tid;
	// 	echo $uid;
	// 	//3.实例化
	// 	$model = M();
	// 		$res =  $model->field('p.id,u.userName,p.title,p.ctime,p.tid,p.uid')->table('meizu_qtype t,meizu_qpost p ,meizu_user u')->where("t.id=p.tid and u.id=p.uid and p.tid={$tid}")->select();
	// 	// echo $model->_sql();
	// 	dump($res);


	// 	//4.分配变量
	// 	$this->assign('uid',$uid);
	// 	$this->assign('tid',$tid);
	// 	$this ->assign('res',$res);

	// 	//5.输出
	// 	$this->display();
	// }

	// public function fpost()
	// {
	// 	//1.接受Id
	// 	$tid = I('post.tid');
	// 	echo $tid;
	// 	$uid = I('post.uid');
	// 	echo $uid;
	// 	//输出
	// 	$this->display();
	// }

	// public function demo()
	// {

	// 	//1.实例化
	// 	$qpost = M('qpost');
	// 	 dump($_POST);
	// 	//2.获取当前时间并放到$_POST中
	// 	// $ctime = time();

	// 	$_POST['ctime']=time();
	// 	// echo $ctime;

	// 	//3.获取用户信息并放到$_POST中
	// 	// $uid = I('post.uid');
	// 	// echo $uid;
	// 	// $_POST['uid']=$uid;
	// 	dump($_POST);

	// 	//4.创建数据对象
	// 	$res = $qpost->create();

	// 	//5.判断
	// 	if($res){
	// 		//5.1执行添加操作
	// 		$result = $qpost->add();
	// 		//5.2判断
	// 		if($result){
	// 			echo 'ok';
	// 			$this->success('发帖成功',U('Question/qpost',array('tid'=>$_POST['tid'],'uid'=>$uid)),1);
	// 		}else{
	// 			echo 'no';
	// 			$this->error('发帖失败');
	// 		}
	// 	}else{
	// 		$this->error($qpost->getError());
	// 	}
	// }


	// //回复
	// public function qreply()
	// {
	// 	//1.实例化去qpost
	// 	$model = M();
	// 	//2.接收Id
	// 	$pid = I('get.pid');
	// 	$uid = I('get.uid');

	// 	//2.查询数据
	// 	$data = $model->table('meizu_qpost p,meizu_user u')->where("p.uid=u.id and p.id={$pid}")->find();

	// 	$data1 = $model->table('meizu_qreply r,meizu_user u')->where("r.uid=u.id and r.pid={$pid}")->select();

	// 	dump($data);

	// 	dump($data1);

	// 	//3.分配变量
	// 	$this->assign('data',$data);
	// 	$this->assign('data1',$data1);
		
	// 	//4.输出
	// 	$this->display();
	// }

	// //添加回复
	// public function doqreply()
	// {
	// 	//1.实例化
		
	// 	$qreply = M('qreply');

	// 	//2.获取当前时间
	// 	$_POST['rtime']=time();
	// 	dump($_POST);
	// 	//2.创建数据对象
	// 	$res = $qreply->create();

	// 	//3.判断
	// 	if($res){
	// 		//3.1执行添加
	// 		$result = $qreply->add();
	// 		//3.2判断
	// 		if($result){
	// 			echo 'ok';
	// 			$this->success('回复成功',U('Question/qreply',array('pid'=>$_POST['pid'],'uid'=>$_POST['uid'])),1);
	// 		}else{
	// 			echo 'no';
	// 			$this->error('回复失败');
	// 		}
	// 	}else{
	// 		$this->error($qreply->getError());
	// 	}
	// }

}