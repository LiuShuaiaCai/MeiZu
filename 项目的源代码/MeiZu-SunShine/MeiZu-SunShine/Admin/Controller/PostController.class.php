<?php
namespace Admin\Controller;
use Think\Controller;
class PostController extends Controller {
   
    	public function post()
		{	
			$arr=[];
			$str=[];
			$model=M();
			$user=M('user');
			$post=M('post');
			$reply=M('reply');
			$title=null;
			$res=$post->count();//统计发帖总数
			
			//搜索方法
			 if (!empty($_GET['title'])) {
				$title =" and p.title like '%{$_GET['title']}%'";
			}else{
				$title='';
			}
			//分页展示方法
			 // 2.2 实例化Page类
            $page = new \Think\Page($res, 8);

            // 重新定义展示样式（必须超过11页才会显示首页和末页，92行注释）
            
            $page->setConfig('prev','上一页');
            $page->setConfig('next','下一页');
            $page->setConfig('first','首页');
            $page->setConfig('last','尾页');
            $page->setConfig('theme',"共 %TOTAL_ROW% 条记录 %FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END%");

			//获取数据
			$data = $model->table('meizu_user u,meizu_post p')->where("u.id=p.uid {$title}")->limit($page->firstRow, $page->listRows)->order('u.score desc')->select();//查询数据信息
			//$data1=$post->field('count(r.pid) as total,p.*')->join('p left join __REPLY__ r on p.pid=r.pid')->group('p.pid')->select();
			
				
			//处理今天发帖总数
			foreach($data as $key=>$value){
				$arr[]=$value['time'];
				$str[]=$value['pid'];
			}
			
			
			foreach($str as $key=>$value){
				$count[]=$reply->where("pid={$value}")->count();
			}
			
			
			foreach($arr as $a=>$b){
				$beginToday=mktime(0,0,0,date('m'),date('d'),date('Y'));
 
				$endToday=mktime(0,0,0,date('m'),date('d')+1,date('Y'))-1;
				
				$where['time']=$b=array('between',array("{$beginToday}","{$endToday}"));
				
				$res1=$post->where($where)->count();
				
			}
			
			 // 2.3 展示页码
			 $this->assign('count',$count);
			
            $this->assign('show', $page->show());
			$this->assign('data1',$data1);
			$this->assign('res1',$res1);
			$this->assign('data',$data);
			$this->assign('res',$res);
			//输出模板
			
		$this->display();
		
    }
	//帖子禁用与开启管理
	public  function status()
	{
		$where['pid']=I('get.id');//获取帖子的id
		
		$status['status']=$_GET['status']==1 ? 2 : 1;
		
		$post=M('post');//实例化model类
		
		$data=$post->where($where)->save($status);
		
		
		if($data){
			header("location:{$_SERVER['HTTP_REFERER']}");
		}else{
			header("location:{$_SERVER['HTTP_REFERER']}");	
		}
		
			
	}
	//输出修改页
	public function edit()
	{
		//获取帖子的pid
		$pid=I('get.pid');
		//实例化model类
		$post=M('post');
		//获取单条信息
		$data=$post->where("pid={$pid}")->find();
		
		//判断
		
			
		$this->assign('data',$data);
		$this->display();
			
	}
	//执行帖子修改方法
	public function update()
	{
		//获取提交过来的数据
		$data['title']=I('post.title');
		$data['content']=I('post.content');
		$where['pid']=I('post.pid');
		
		//实例化model类
		$post=M('post');
		$res=$post->create();
		if($res){
			$res1=$post->where($where)->save($data);
			if($res1){
				$this->success('修改成功','post?pid='.$_POST['pid']);
			}else{
				$this->error('修改失败','post?pid='.$_POST['pid']);
			}
		}else{
			$this->error($post->getError());
		}
		
		
	}
	
	public function del()
	{
		//实例化model类
		$post=M('post');
		$reply=M('reply');
		$revert=M('revert');
		$model=M();
		//获取帖子的pid
		$pid=I('get.pid');
		$zid=$reply->where("pid={$pid}")->getField('zid');
		
		
		$data=$post->where("pid={$pid}")->delete();
		$data1=$reply->where("pid={$pid}")->delete();
		$data2=$revert->where("zid={$zid}")->delete();
		
		if($data && $data1 && $data2){
			header("location:{$_SERVER['HTTP_REFERER']}");
		}else{
			header("location:{$_SERVER['HTTP_REFERER']}");	
		}
		
	}
	//执行帖子加精操作
	public function add()
	{
		//获取帖子id
		$pid=I('get.pid');
		
		//实例化model类
		$post=M('post');
		
		$data['add']=I('get.add')=='1'? '2' : '1';
		//执行修改操作
		$result=$post->where("pid={$pid}")->save($data);
		
		if($result){
			header("location:{$_SERVER['HTTP_REFERER']}");
		}else{
			header("location:{$_SERVER['HTTP_REFERER']}");
		}
		
		
	}
	//执行帖子加精操作
	public function top()
	{
		//获取帖子id
		$pid=I('get.pid');
		
		//实例化model类
		$post=M('post');
		
		$data['top']=I('get.top')=='1'? '2' : '1';
		//执行修改操作
		$result=$post->where("pid={$pid}")->save($data);
		
		if($result){
			header("location:{$_SERVER['HTTP_REFERER']}");
		}else{
			header("location:{$_SERVER['HTTP_REFERER']}");
		}
		
		
	}
}