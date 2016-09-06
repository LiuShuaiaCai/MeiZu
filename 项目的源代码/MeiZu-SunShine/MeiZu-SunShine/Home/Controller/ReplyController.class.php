<?php
	namespace Home\Controller;
	use Think\Controller;
	class ReplyController extends Controller
	{
		public function reply()
		{
			
			$uid=I('get.uid');//获取帖子的uid
			$str=[];
			$attr=[];
			$pid=I('get.pid');//获取帖子的pid
			$reply=M('reply');
			$post=M('post');
			$revert=M('revert');
			
			$time=$post->where("pid={$pid}")->getField('time');
			
			$count=$reply->where("pid={$pid}")->count();
			$model=M();//实例化model类
			
			 $page = new \Think\Page($count, 10);
			 
			 $page->setConfig('prev','上一页');
            $page->setConfig('next','下一页');
            $page->setConfig('first','首页');
            $page->setConfig('last','尾页');
            $page->setConfig('theme',"共 %TOTAL_ROW% 条记录 %FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END%");
			//查询数据
			$data = $model->table('meizu_user u,meizu_post p')->where("u.id=p.uid {$title} and p.uid={$uid} and p.pid={$pid}")->limit($page->firstRow, $page->listRows)->find();//查询数据信息
			$data1=$model->table('meizu_user u,meizu_reply r')->where("u.id=r.uid and r.pid={$pid}")->limit($page->firstRow, $page->listRows)->order('rtime asc')->select();
			
			
			$Date_1 = date("Y-m-d");

			$Date_2 = date("Y-m-d",$time);
			
			$d1 = strtotime($Date_1);

			$d2 = strtotime($Date_2);

			$days = round(($d1-$d2)/3600/24);
			//分配数据
			
			$this->assign('show', $page->show());
			$this->assign('data',$data);
			$this->assign('data1',$data1);
			$this->assign('count',$count);
			$this->assign('days',$days);
			//dump($data1);
			
			$this->display();	
		}
		public	function add()
		{
			$reply=M('reply');
			$data['uid']=I('post.id');
			$data['pid']=I('post.pid');
			$data['rtime']=time();
			
			
			$data['content']=I('post.content');
			
			$res=$reply->add($data);
			if(res){
				$this->success('回复成功',"{$_SERVER['HTTP_REFERER']}");
			}else{
				$this->error('回复失败',"{$_SERVER['HTTP_REFERER']}");
			}
		}
		//判断用户是否登录
		public function demo()
		{
			if(isset($_SESSION['id'])){
				echo 'yes';
			}else{
				echo 'no';
			}
		}
		//判断楼主是否允许回帖
		public function demo2()
		{
			$pid=I('get.pid');
			
			//实例化model类
			$post=M('post');
			
			$status=$post->where("pid={$pid}")->find();
			
			
			$this->ajaxReturn($status);
			
			
			
		}
		
		public function like()
		{
			//获取帖子的id
			$id=I('get.id');
			//实例化
			$reply=M('reply');
			$count=$reply->where("id={$id}")->getField('like');
			$data['like']=$count+1;
			$result=$reply->where("id={$id}")->save($data);
			
			if($result){
				echo 'yes';
			}else{
				echo 'no';	
			}
		}
	}	
?>