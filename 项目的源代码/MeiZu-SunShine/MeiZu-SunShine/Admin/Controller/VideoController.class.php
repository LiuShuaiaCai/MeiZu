<?php
	namespace Admin\Controller;
	use Think\Controller;
	
	class VideoController extends Controller
	{
		public function video()
		{
			//实例化model类
			$video=M('video');
			//添加视频数
			$count=$video->count();
			//搜索方法
			if(!empty($_GET['content'])){
				$content="content like '%{$_GET['content']}%'";
			}else{
				$content='';
			}
			//分页展示方法
			$page=new \Think\Page($count,5);
			//重新定义展示方法
			$page->setConfig('prev','上一页');
            $page->setConfig('next','下一页');
            $page->setConfig('first','首页');
            $page->setConfig('last','尾页');
            $page->setConfig('theme',"共 %TOTAL_ROW% 条记录 %FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END%");
			
			$data=$video->where("{$content}")->limit($page->firstRow, $page->listRows)->order('time desc')->select();
			
			
			$this->assign('data',$data);
			$this->assign('show',$page->show());
			
			$this->display();	
		}
		//执行视频删除操作
		public function delete()
		{
			//获取视频id
			$id=I('get.id');
			//实例化model类
			$video=M('video');
			
			//执行删除操作
			$data=$video->where("id={$id}")->delete();
			
			//判断
			if($data){
				header("location:{$_SERVER['HTTP_REFERER']}");
			}else{
				header("location:{$_SERVER['HTTP_REFERER']}");
			}
			
		}
		//执行视频修改页
		public function update()
		{
			//获取视频id
			$id=I('get.id');
			
			//实例化model类
			$video=M('video');
			
			//获取数据
			$data=$video->where("id={$id}")->find();
			
			
			$this->assign('data',$data);
			
			$this->display();
			
			
			
		}
		//执行视频修改操作
		public function demo()
		{
			$config=array(
			'rootPath'=>'Public/',
			
			'savePath'=>'Uploads/',
			'exts'=>array('flv','mp4','jpg','jpeg'),
			);
			$upload=new \Think\Upload($config);
		
		
			$video=M('video');
		
		
			$info=$upload->uploadOne($_FILES['src']);
			
			$id['id']=$_POST['id'];
			
			$src=$video->where($id)->getField('src');
			
			
			
			$data['content']=$_POST['content'];
			
			
			$data['src']=$info==true ? $info['savepath'].$info['savename'] : $src;
			
			$res=$video->where($id)->save($data);
			
			echo $video->_sql();
		
			
			if($res){
			//	$this->success('修改成功','video');	
			}else{
				//$this->error('修改失败');
			}	
		}


		//执行视频添加
		public function add()
		{
			
   
		//实例化上传类
		
		
			$config=array(
				'rootPath'=>'Public/',
				'maxSize'=>3145728000,
				'savePath'=>'Uploads/',
				'exts'=>array('flv','mp4','mpg','wmv','webm'),
			);
			$upload=new \Think\Upload($config);
		
		
		
			//上传文件
			
			$info=$upload->uploadOne($_FILES['src']);
			
			$data['content']=I('post.content');
			
			$data['src']=$info['savepath'].$info['savename'];
			
			$data['time']=time();
			$video=M('video');
			
			
			$res=$video->add($data);
			
			if($res){
				$this->success('添加成功','video');
			}else{
				$this->error('添加失败');
			}
		}
	}	
?>