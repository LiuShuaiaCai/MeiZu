<?php 

namespace Admin\Controller;

use Think\Controller;

class QpostController extends Controller
{
	//展示列表
	public function index()
	{
		//1.实例化
		$model = M();
		$qpost = M('qpost');

		//2.搜索条件
		if(!empty($_GET['title'])){
			$title = "and p.title like '%{$_GET['title']}%'";
		}else{
			$title='';
		}

		//2.查询数据总条数
		$count = $qpost->where($title)->count();
		// echo $model->_sql();
		//3.实例化分页类
		$page = new \Think\Page($count,5);

		//4.展示分页
		$page->setConfig('prev','上一页');
		$page->setConfig('next','下一页');
		$page->setConfig('first','首页');
		$page->setConfig('last','尾页');
		$page->setConfig('theme',"共 %TOTAL_ROW% 条记录 %FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END%");

		//5.展示页码
		$this->assign('show',$page->show());

		//.查询数据
		$data = $model->table('meizu_user u,meizu_qpost p')->where("u.id=p.uid {$title}")->limit($page->firstRow,$page->listRows)->select();
		// dump($data);
		// echo $model->_sql();

		//分配变量
		$this->assign('data',$data);

		//输出
		$this->display();
	}

	//修改
	public function edit()
	{
		//1.实例化
		$qpost = M('qpost');

		//2.接受Id
		$id = I('get.id');

		//3.执行查询数据
		$data = $qpost ->find($id);
		// dump($data);

		//4.分配变量
		$this->assign('data',$data);

		//5.输出
		$this->display();
	}

	//执行更新
	public function update()
	{
		//1.实例化
		$qpost = M('qpost');

		//2.创建数据对象
		$res = $qpost->create();

		//3.判断
		if($res){
			//3.1执行修改
			$result = $qpost->save();

			//3.2判断
			if($result){
				$this->success('修改成功',U('Qpost/index'),1);
			}else{
				$this->error('修改失败');
			}
		}else{
			$this->error($qpost->getError());
		}
	}

	//删除
	public function del()
	{
		//1.实例化
		$model = M();
		$qpost = M('qpost');

		//2.接受Id
		$id = I('get.id');

		//3.查询数据
		$data = $model->table('meizu_qpost p,meizu_qreply q')->where("p.id=q.pid and p.id={$id}")->select();

		//4.判断
		if(!empty($data)){
			$this->error('有子集不能删除');
		}else{
			//4.1执行删除
			$res = $qpost->delete($id);

			//4.2判断
			if($res){
				$this->success('删除成功',U('Qpost/index'),1);
			}else{
				$this->error('删除失败');
			}
		}

		// //3.执行删除操作
		// $res = $qpost->delete($id);

		// //4.判断
		// if($res){
		// 	$this->success('删除成功',U('Qpost/index'),1);
		// }else{
		// 	$this->error('删除失败');
		// }
	}
}