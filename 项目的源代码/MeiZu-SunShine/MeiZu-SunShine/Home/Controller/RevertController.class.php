<?php
	namespace Home\Controller;
	use Think\Controller;
	class RevertController extends Controller
	{
		//模板页
		
		public function revert()
		{
			//实例化
			$revert=M('revert');
			$model=M();
			$reply=M('reply');
			//获取数据
			$zid=I('get.zid');
			$count=$revert->where("zid={$zid}")->count();
			//实例化page类
			$page = new \Think\Page($count, 5);
			 
			 $page->setConfig('prev','上一页');
            $page->setConfig('next','下一页');
            $page->setConfig('first','首页');
            $page->setConfig('last','尾页');
            $page->setConfig('theme',"共 %TOTAL_ROW% 条记录 %FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END%");
			//查询帖子的uid
			$uid=$reply->where("id={$zid}")->getField('uid');
			
			$data=$model->table('meizu_user u,meizu_reply r')->where("u.id={$uid} and r.id={$zid}")->find();
			//$data1=$model->table('meizu_user u,meizu_revert v,meizu_reply r')->where('u.id=v.uid and r.id=v.zid')->limit($page->firstRow, $page->listRows)->select();
			$data1=$model->table('meizu_revert v,meizu_reply r,meizu_user u')->where("r.id=v.zid and r.id={$zid} and u.id=v.uid")->limit($page->firstRow, $page->listRows)->select();
			
			
				//分配数据
				$this->assign('show',$page->show());
				$this->assign('count',$count);
				$this->assign('data1',$data1);
				$this->assign('data',$data);
				//输出模板
				$this->display();
		}
		public function add()
		{
			//实例化model类
			$revert=M('revert');
			$user=M('user');
			
			//接受值
			$uid=I('get.uid');
			$id=I('get.id');
			$content=I('get.content');
			
			
			//插入的数据
			$data1['uid']=$uid;
			$data1['zid']=$id;
			$data1['content1']=$content;
			
			$data1['time']=time();
			
			//执行添加操作
			$result=$revert->add($data1);
			
			//判断
			
			if($result){
				echo 'yes';
			}else{
				echo 'no';
			}
			// if($result){
				// $this->success('评论成功',"{$_SERVER['HTTP_REFERER']}",3);
			// }else{
				// $thhis->error('评论失败',"{$_SERVER['HTTP_REFERER']}",3);
			// }
		}
		
	}
?>