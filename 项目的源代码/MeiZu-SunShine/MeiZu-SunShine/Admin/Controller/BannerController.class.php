<?php
namespace Admin\Controller;
use Think\Controller;
class BannerController extends Controller {
   //后台图片列表展示页面
   public function banner()
   {
		$photo=M('banner');//实例化model类
		
		$data=$photo->select();//查询图片资源
		
		$this->assign('data',$data);
		
		
		$this->display();
   }
   //执行图片删除方法
   public function delete()
   {
		$id=I('get.id');
		
		$photo=M('banner');
		
		$data=$photo->where("id={$id}")->delete();//执行删除操作
		
		
		//判断删除是否成功
		
		if($data){
			header('location:banner');
		}else{
			header('location:banner');
		}
		
		
   }
   
   
   public function add()
   {
		//实例化上传类
		
		
		$config=array(
			'rootPath'=>'Public/',
			
			'savePath'=>'Uploads/',
			'exts'=>array('gif','png','jpg','jpeg','mp4'),
		);
		$upload=new \Think\Upload($config);
		
		
		
		//上传文件
		
		$info=$upload->uploadOne($_FILES['src']);
		$data['image']=$info['savename'];
		
		$data['src']=$info['savepath'].$info['savename'];
		
		$photo=M('banner');
		
		$res=$photo->add($data);
		
		if($res){
			$this->success('添加成功','banner');	
		}else{
			$this->error('添加失败');
		}
		
		
   }
   //图片轮播修改页
   public function update()
   {
		$photo=M('banner');
		
		$where['id']=I('get.id');
		
		$data=$photo->where($where)->find();
		
		$this->assign('data',$data);
		
		$this->display();
   }
   public function demo()
   {
	   $config=array(
			'rootPath'=>'Public/',
			
			'savePath'=>'Uploads/',
			'exts'=>array('gif','png','jpg','jpeg'),
		);
		$upload=new \Think\Upload($config);
		
		
		$photo=M('banner');
		
		
		$info=$upload->uploadOne($_FILES['src']);
		
		$id['id']=$_POST['id'];
		
		$src=$photo->where($id)->getField('src');
		
		
		
		$data['image']=$_POST['image'];
		
		
		$data['src']=$info==true ? $info['savepath'].$info['savename'] : $src;
		
		
		
		
		$res=$photo->where($id)->save($data);
		echo $photo->_sql();
		if($res){
			$this->success('修改成功','banner');	
		}else{
			$this->error('修改失败');
		}
		
   }
   
}