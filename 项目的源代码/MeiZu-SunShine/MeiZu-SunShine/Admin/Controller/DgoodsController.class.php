<?php 

namespace Admin\Controller;

use Think\Controller;

class DgoodsController extends Controller
{
	//展示页面
	public function index()
	{	
		//1.实例化
		$dgoods = M('dgoods');

		//接受搜索条件
		$wherelist = [];
		//商品名
		if(!empty($_GET['name'])){
			$wherelist['name'] = array('like',"%{$_GET['name']}%");
		}

		//2.展示页码
			//2.1查询数据总条数
			$count = $dgoods->where($wherelist)->count();
			// dump($count);

			//2.2实例化page类
			$page = new \Think\Page($count,5);

			$page->setConfig('prev','上一页');
			$page->setConfig('next','下一页');
			$page->setConfig('first','首页');
			$page->setConfig('last','尾页');
			$page->setConfig('theme',"共 %TOTAL_ROW% 条记录 %FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END%");

			//2.3展示页码
			$this->assign('show',$page->show());


		//3.查询数据
		$data = $dgoods->where($wherelist)->limit($page->firstRow,$page->listRows)->select();
		// dump($data);
		
		//4.分配变量
		$this->assign('data',$data);

		//输出
		$this->display();
	}

	//执行添加操作
	public function add()
	{
		$this->display();
	}

	//执行添加操作
	public function insert()
	{
		//1.实例化
		$dgoods = M('dgoods');

		//2.配置上传文件
		$config = array(
				'rootPath' => 'Public/',
				'savePath' => 'Uploads/',
				'exts'     => array('gif','png','jpg','jpeg')

			);

		//3.实例化文件上传类
		$upload = new \Think\Upload($config);

		//4.执行上传
		$info = $upload->uploadOne($_FILES['pic']);

		// dump($info);
		//5.实例化图片处理类
		$image = new \Think\Image();
		$path = './Public/';
		$savepath = $info['savepath'];
		$savename = $info['savename'];

		//6缩放
		$image->open($path.$savepath.$savename);

		$image->thumb(255,190,2)->save($path.$savepath.'s_'.$savename);

		$_POST['pic'] = $savepath.'s_'.$savename;
		// dump($_POST);

		//2.创建数据对象
		$res = $dgoods->create();

		//3.判断
		if($res){
			//3.1执行添加操作
			$result = $dgoods->add();
			// echo $dgoods->_sql();
			//3.2判断
			if($result){
				// echo 'ok';
				$this->success('添加成功',U('Dgoods/index'),1);
			}else{
				// echo 'no';
				$this->error('添加失败');
			}

		}else{
			$this->error($dgoods->getError());
		}

	}


	//展示修改页面
	public function edit()
	{
		//1.实例化
		$dgoods = M('dgoods');

		//2.接收Id值
		$id = I('get.id');

		//3.执行查询
		$data = $dgoods->find($id);

		// dump($data);
		//4.分配变量
		$this->assign('data',$data);

		//输出
		$this->display();
	}


	//执行修改操作
	public function update()
	{
		//1.配置文件上传
		$config = array(
				'rootPath' => 'Public/',
				'savePath' => 'Uploads/',
				'exts'     => array('gif','png','jpg','jpeg')

			);

		//2.实例化上传类
		$upload = new \Think\Upload($config);

		//3.执行上传
		$info  = $upload->uploadOne($_FILES['pic']);
		// dump($info);

		//4.实例化图片处理类
		$image = new \Think\Image();
		$path = './Public/';
		$image->open($path.$info['savepath'].$info['savename']);

		//5.缩放
		$image->thumb(255,190,2)->save($path.$info['savepath'].'s_'.$info['savename']);

		$_POST['pic']=$info['savepath'].'s_'.$info['savename'];
		// dump($_POST);

		//6.实例化
		$dgoods = M('dgoods');

		//7.创建数据对象
		$res = $dgoods->create();

		//8.判断
		if($res){
			//8.1执行修改操作
			$result = $dgoods->save();

			//8.2判断
			if($result){
				// echo 'ok';
				$this->success('修改成功',U('Dgoods/index'),1);
			}else{
				// echo 'no';?
				$this->error('修改失败');
			}
		}else{
			$this->error($dgoods->getError());
		}
	}

	//删除
	public function del()
	{
		//1.实例化
		$dgoods = M('dgoods');

		//2.接受Id
		$id = I('get.id');
		// echo $id;

		//3.执行删除
		$res = $dgoods->delete($id);

		//4.判断
		if($res){
			// echo 'ok';
			$this->success('删除成功',U('Dgoods/index'),1);
		}else{
			// echo 'no';
			$this->error('删除失败');
		}
	}
}