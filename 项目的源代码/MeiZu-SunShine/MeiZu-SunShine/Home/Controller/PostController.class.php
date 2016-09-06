<?php
	namespace Home\Controller;
	use Think\Controller;
	class PostController extends Controller
	{	
		public function post()
		{	
			$arr=[];
			$str=[];
			$model=M();
			$user=M('user');
			$post=M('post');
			$reply=M('reply');
			$title=null;
			
			
			
			
			$res=$post->where('status=1')->count();//统计发帖总数
			
			
			//搜索方法
			 if (!empty($_GET['title'])) {
				$title =" and p.title like '%{$_GET['title']}%'";
			}else{
				$title='';
			}
			//分页展示方法
			 // 2.2 实例化Page类
            $page = new \Think\Page($res, 10);

            // 重新定义展示样式（必须超过11页才会显示首页和末页，92行注释）
            // $page->setConfig('header','个会员');
            $page->setConfig('prev','上一页');
            $page->setConfig('next','下一页');
            $page->setConfig('first','首页');
            $page->setConfig('last','尾页');
            $page->setConfig('theme',"共 %TOTAL_ROW% 条记录 %FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END%");

			//获取数据
			$data = $model->table('meizu_user u,meizu_post p')->where("u.id=p.uid {$title}  and p.status='1'")->limit($page->firstRow, $page->listRows)->order('p.top')->select();//查询数据信息
			
			
			
			//处理今天发帖总数
			foreach($data as $key=>$value){
				$arr[]=$value['time'];
				$str[]=$value['pid'];
			}
			
			//处理回帖总数
			foreach($str as $key=>$value){
				
				$count[]=$reply->where("pid={$value}")->count();
			}
			
			
			
			
			
			foreach($arr as $a=>$b){
				$beginToday=mktime(0,0,0,date('m'),date('d'),date('Y'));
 
				$endToday=mktime(0,0,0,date('m'),date('d')+1,date('Y'))-1;
				
				$where['time']=$b=array('between',array("{$beginToday}","{$endToday}"));
				
				$res1=$post->where($where)->count();
				
			}
			//分配数据
			$this->assign('count',$count);
			 // 2.3 展示页码
            $this->assign('show', $page->show());
			$this->assign('data1',$data1);
			$this->assign('res1',$res1);
			$this->assign('data',$data);
			$this->assign('res',$res);
			
			//输出模板
			$this->display();
		}
		
		public function add()
		{
			//实例化帖子类
			
			$post=M('post');
			
			//获取提交过来的数据
			
			$data['title']=I('post.title');
			$data['content']=I('post.content');
			
			$data['time']=time();
			
			$data['uid']=I('post.id');
			$data['cstatus']=isset($_POST['cstatus'])? '2' : '1';
			//创建数据对象
			
			$res=$post->create();
			
			if($res){
				$res1=$post->add($data);
				
				if($res1){
					//$this->success('评论成功','post');
					header("location:{$_SERVER['HTTP_REFERER']}");
				}else{
						$this->error('评论失败','post');
				}
			}else{
				$this->error($post->getError());
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
		//用户点赞
		public function like()
		{
			//获取帖子的id
			$pid=I('get.pid');
			//实例化
			$post=M('post');
			$count=$post->where("pid={$pid}")->getField('like');
			$data['like']=$count+1;
			$result=$post->where("pid={$pid}")->save($data);
			if($result){
				echo 'yes';
			}else{
				echo 'no';
			}
		}
	}
?>