<?php
namespace Admin\Controller;
use Think\Controller;
class ConfigController extends Controller {
   
    //展示添加配置页面
 	public function config()
 	{
 		//1.实例化
 		$config= M('config');

 		//2.查询数据
 		$data=$config->select();

 		//3分配模板
 		$this->assign('data',$data);

 		//4输出
 		$this->display();
 	}

 	//添加网站配置信息
 	public function insert()
 	{
 		//1.配置文件上传并实例化文件上传类
 		$config=array(
 				'rootPath' => 'Public/',
 				'savePath' => 'Uploads/',
 				'exts'	   => array('gif','png','jpg'),
 			);

 		//1.1实例化文件上传类
 		$upload = new \Think\Upload($config);

 		//2执行上传
 		$info = $upload->uploadOne($_FILES['logo']);
 		// dump($info);

 		//3.判断文件是否上传成功
 		if(!$info){
 			$this->error($upload->getError());
 		}

 		//4.组装路径
 		
 		$savepath=$info['savepath'];
 		$savename=$info['savename'];
 		$logo=$savepath.$savename;
 		// echo $imgname;
 		$_POST['logo']=$logo;
 		// dump($_POST);

 		//5.实例化配置
 		$conf=M('config');

 		//6.创建数据对象
 		$res=$conf->create();

 		//7判断
 		if($res){
 			//7.1执行添加操作
 			$result=$conf->add();
 			//7.2判断
 			if($result){
 				// echo 'ok';
 				$this->success('添加成功',U('Config/config'),1);
 			}else{
 				// echo 'no';
 				$this->error('添加失败');
 			}
 		}else{
 			$this->error($conf->getError());
 		}
 	}

 	//执行修改操作
 	public function edit()
 	{
 		//1.实例化
 		$config = M('config');

 		//获取id并查询数据
 		$id = I('get.id','','intval');
 		$data=$config->find($id);
 		// dump($data);

 		//3.分配模板
 		$this->assign('data',$data);

 		//4.输出
 		$this->display();

 	}

 	//执行添加操作
 	public function update()
 	{
 		//1.文件上传配置
 		$config =array(
 				'rootPath' =>	'Public/',
 				'savePath' =>	'Uploads/',
 				'exts'	   =>	array('gif','png','jpp'),
 			);

 		//2.实例化上传类
 		$upload = new \Think\Upload($config);

 		//3.执行上传
 		$info = $upload->uploadOne($_FILES['logo']);
 		//dump($info);

 		//4.判断是否上传成功
 		if(!$info){
 			$this->error($upload->getError());
 		}

 		//5.组装图片路径并放到$_POST中
 		// $path='Public/';
 		$savepath=$info['savepath'];
 		$savename=$info['savename'];
 		$_POST['logo'] = $savepath.$savename;

 		//6.实例化并获取id

 		$conf= M('config');
 		
 		// dump($_POST);

 		//7.创建数据对象
 		$res = $conf->create();
 		// dump($res);

 		//8.判断
 		if($res){
 			//3.1执行修改
 			$result = $conf->save();
 			// dump($result);
 			// echo $conf->_sql();
 			//3.2判断
 			if($result){
 				$this->success('修改成功',U('Config/config'),1);
 			}else{
 				$this->error('修改失败');
 			}
 		}else{
 			$this->error($conf->getError());
 		}
 	}

 	//执行删除操作
 	public function del()
 	{
 		//1.实例化
 		$config=M('config');
 		//2.获取id并执行删除
 		$id = I('get.id','','intval');
 		$res=$config->delete($id);
 		//3.判断
 		if($res){
 			$this->success('删除成功',U('Config/config'),1);
 		}else{
 			$this->error('删除失败');
 		}	
 	}

 	//配置开关
 	public function enable()
 	{
 		//1.实例化
 		$config = M('config');

 		//2.获取id，status,
 		$id=I('get.id','','intval');
 		$arr['status']=$_GET['status']==1 ? 2 : 1;
 		// dump($id);
 		// dump($arr);
 		$where['id']=array('eq',$id);
 		$data = $config->where($where)->save($arr);
 		//3.判断更新是否成功
 		if($data){
 			// echo 'ok';
 			$this->success('更改成功',U('Config/config'),1);
 		}else{
 			// echo 'no';
 			$this->error('更新失败');
 		}
 	}
}