<?php
	namespace Home\Controller;
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
			$page=new \Think\Page($count,6);
			//重新定义展示方法
			$page->setConfig('prev','上一页');
            $page->setConfig('next','下一页');
            $page->setConfig('first','首页');
            $page->setConfig('last','尾页');
            $page->setConfig('theme',"共 %TOTAL_ROW% 条记录 %FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END%");
			
			$data=$video->where("{$content}")->limit($page->firstRow, $page->listRows)->order('time desc')->select();
			
			$this->assign('count',$count);
			$this->assign('data',$data);
			$this->assign('show',$page->show());
			
			$this->display();	
		}

		
					
	}
?>