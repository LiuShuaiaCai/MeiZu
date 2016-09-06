<?php 

namespace Admin\Controller;

use Think\Controller;

class QtypeController extends Controller
{
	//展示分类页
	public function index()
	{
		//1.实例化
		$qtype = M('qtype');

		//2.搜索条件
		$wherelist = [];

		//3.问题名称
		if(!empty($_GET['tname'])){
			$wherelist['tname']=array('like',"%{$_GET['tname']}%");
		}

		//4.获取数据总条数
		$count = $qtype->where($wherelist)->count();

		//5.实例化Page类并展示分页
		$page = new \Think\Page($count,5);

		$page->setConfig('prev','上一页');
		$page->setConfig('next','下一页');
		$page->setConfig('first','首页');
		$page->setConfig('last','尾页');
		$page->setConfig('theme',"共 %TOTAL_ROW% 条记录 %FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END%");

		//6.展示页码
		$this->assign('show',$page->show());
		
		//2.查询数据
		$data = $qtype->where($wherelist)->limit($page->firstRow,$page->listRows)->select();
		// dump($data);

		//3.分配变量
		$this -> assign('data',$data);

		//4.输出
		$this->display();

	}

	//展示添加页
	public function add()
	{
		$this->display();
	}

	//执行添加操作
	public function insert()
	{

		//1.配置文件上传类
		$config = array(
				'rootPath' => 'Public/',
				'savePath' => 'Uploads/',
				'exts'     => array('gif','jpg','jpeg','png'),
			);

		//2.实例化文件上传类
		$upload = new \Think\Upload($config);

		//3.执行文件上传
		$info = $upload -> uploadOne($_FILES['pic']);
		// dump($info);
		
		//4.组装路径
		$path = './Public/';
		$_POST['pic']=$info['savepath'].$info['savename'];
		// dump($_POST);
		//5.实例化
		$qtype = M('qtype');
		//6.创建数据对象
		$res = $qtype->create();

		//7.判断
		if($res){
			//7.1执行添加操作
			$result = $qtype->add();

			//7.2判断
			if($result){
				// echo 'ok';
				$this->success('添加成功',U('Qtype/index'),1);
			}else{
				// echo 'no';
				$this->error('添加失败');
			}
		}else{
			$this->error($qtype->getError());

		}

	}

	//展示修改页面
	public function edit()
	{

		
		//1.实例化
		$qtype = M('qtype');

		//2.接受Id
		$id = I('get.id');
		// echo $id;

		//3.查询数据
		$data = $qtype -> find($id);
		// dump($data);

		//4.分配变量
		$this->assign('data',$data);

		//5.输出
		$this->display();
	}

	//执行修改操作
	public function update()
	{
		//1.文件上传配置
		$config = array(
				'rootPath' => 'Public/',
				'savePath' => 'Uploads/',
				'exts'     => array('gif','jpeg','png','jpg'),
			);

		//2.实例化文件上传类
		$upload = new \Think\Upload($config);

		//3.执行上传
		$info = $upload->uploadOne($_FILES['pic']);
		// dump($info);

		//组装
		$_POST['pic'] = $info['savepath'].$info['savename'];
		// dump($_POST);
		//1.实例化
		$qtype = M('qtype');

		//2.创建数据对象
		$res = $qtype -> create();

		//3.判断
		if($res){
			//3.1执行修改操作
			$result = $qtype -> save();

			//3.2判断
			if($result){
				// echo 'ok';
				$this->success('修改成功',U('Qtype/index'),1);
			}else{
				// echo 'no';
				$this->error('修改失败');
			}
		}else{
			$this->error($qtype->getError());
		}

	}

	//开启禁用操作
	public function jinyong()
	{
		//1.实例化
		$qtype = M('qtype');

		//2.接受Id
		$id = I('get.id');
		$arr['status']=$_GET['status']==1 ? 2 : 1;
		$where['id']=$id;
		dump($arr);
		dump($where);
		//4.执行更新操作
		$res = $qtype ->where($where)->save($arr);

		//5.判断
		if($res){
			// echo 'ok';
			header("location:{$_SERVER['HTTP_REFERER']}");
		}else{
			// echo 'no';
			$this->error('更新失败');
		}
	}

	//执行删除
	public function del()
	{
		//1.实例化
		$qtype = M('qtype');
		$model = M();
		//2.接受Id
		$id = I('get.id');

		//3.查询有没有子集
		$data = $model->table('meizu_qtype t,meizu_qpost p')->where("t.id=p.tid and t.id={$id}")->select();
		// dump($data);

		if(!empty($data)){
			$this->error('有子集不能删除');
		}else{
			
			//执行删除
			$res= $qtype->delete($id);
			//判断是否删除成功
			if($res){
				$this->success('删除成功',U('Qtype/index'),1);
			}else{
				$this->error('删除失败');
			}
		}

		
	}

}