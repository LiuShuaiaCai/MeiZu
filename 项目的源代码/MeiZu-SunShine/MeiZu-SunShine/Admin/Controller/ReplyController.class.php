<?php
namespace Admin\Controller;
use Think\Controller;
class ReplyController extends Controller {
    public function reply(){
		//实例化model类
		$content=null;
		$model=M();
		$reply=M('reply');
		//获取帖子的pid
		$id=I('get.pid');
		$pid=isset($_GET['pid']) ? $_GET['pid'] : $_POST['pid'];
		//获取回贴总数
		$count=$reply->where("pid={$pid}")->count();
		
		//搜索方法
			 if (!empty($_GET['content'])) {
				$content =" and r.content like '%{$_GET['content']}%'";
			}else{
				$content='';
			}
		 $page = new \Think\Page($count, 5);

            // 重新定义展示样式（必须超过11页才会显示首页和末页，92行注释）
            
            $page->setConfig('prev','上一页');
            $page->setConfig('next','下一页');
            $page->setConfig('first','首页');
          $page->setConfig('last','尾页');
         $page->setConfig('theme',"共 %TOTAL_ROW% 条记录 %FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END%");	
		//查询帖子对应的回复
		$data=$model->table('meizu_user u,meizu_reply r')->where("r.pid={$pid} {$content} and u.id=r.uid")->limit($page->firstRow, $page->listRows)->select();
		
		//编译数据
		$this->assign('id',$id);
		$this->assign('data',$data);
		$this->assign('show', $page->show());
		//输出模板
    	$this->display();
    }
	
	//执行用户帖子回复状态管理
	public function status()
	{
		//实例化model类
			$reply=M('reply');
			
		//获取回复的id
		$id=I('get.id');
		
		//获取帖子的状态
		$status['status']=I('get.status')==1 ? 2 : 1;
		
		//执行修改状态
		
		$data=$reply->where("id={$id}")->save($status);
		
		//判断是否修改成功
		if($data){
			header("location:{$_SERVER['HTTP_REFERER']}");
		}else{
			header("location:{$_SERVER['HTTP_REFERER']}");
		}
	}
	//执行回复删除操作
	public function delete()
	{
		//获取回复帖子的id
		$id=I('get.id');
		
		//实例化model类
		$reply=M('reply');
		$revert=M('revert');
		
		$zid=$reply->where("id={$id}")->getField('zid');
		
		
		//执行回复删除操作
		$data=$reply->where("id={$id}")->delete();
		$data1=$revert->where("zid={$zid}")->delete();
		//判断是否删除成功
		if($data && $data1){
			header("location:{$_SERVER['HTTP_REFERER']}");
		}else{
			header("location:{$_SERVER['HTTP_REFERER']}");
		}
		
	}
}