<?php
	namespace Home\Controller;
	use Think\Controller;
	
	class DrawController extends Controller
	{
		public function draw()
		{	
			$id=I('get.id');
			$award=M('award');//实例化model类
			
			$data=$award->order('time desc')->select();//获取数据
			
			$this->assign('data',$data);
			
			$this->assign('id',$id);
			
			$this->display();
		}
		
		public function demo()
		{
			if(isset($_SESSION['id'])){
				echo 'yes';
			}else{
				echo 'no';
			}
		}
		//限制用户抽奖次数
		public function demo2()
		{
			$award=M('award');//实例化model类
			
			
			
			
			$beginToday=mktime(0,0,0,date('m'),date('d'),date('Y'));
 
			$endToday=mktime(0,0,0,date('m'),date('d')+1,date('Y'))-1;
			
			$where['time']=array('between',array("{$beginToday}","{$endToday}"));
			$where['uid']=I('get.id');
			$data=$award->where($where)->find();
			
			if($data){
				echo 'yes';
			}else{
				echo 'no';
			}
		}
		//执行用户抽奖积分减100
		public function demo3()
		{
			$user=M('user');//实例化model类
			
			$id=I('get.id');//获取用户id
			
			$res=$user->where("id={$id}")->find();
			
			$data['score']=$res['score']-50;
			
			//执行积分减50
			$result=$user->where("id={$id}")->save($data);
			
			
			
		}
	}
	
?>