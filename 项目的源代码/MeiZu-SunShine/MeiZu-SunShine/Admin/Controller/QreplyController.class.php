<?php 

namespace Admin\Controller;

use Think\Controller;

class  QreplyController extends Controller
{
	//展示页面
	public function index()
	{
		//1.实例化
		$model = M();
		$qreply = M('qreply');

		//2.搜索条件
	
		if(!empty($_GET['contents'])){
			$where = "and r.contents like '%{$_GET['contents']}%'";
		}else{
			$where='';
		}
		//2.查询数据总条数
		$count = $qreply->where($where)->count();
		// dump($count);

		//实例化分页类
		$page = new \Think\Page($count,5);

		//展示页码
		$page->setConfig('prev','上一页');
		$page->setConfig('next','下一页');
		$page->setConfig('first','首页');
		$page->setConfig('last','尾页');
		$page->setConfig('theme',"共 %TOTAL_ROW% 条记录 %FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END%");

		//在前台展示页码
		$this->assign('show',$page->show());




		//2.查询数据
		$data = $model->table('meizu_qpost p,meizu_qreply r')->where("p.id=r.pid {$where}")->limit($page->firstRow,$page->listRows)->select();

		// dump($data);
		//3.分配变量
		$this->assign('data',$data);

		//4.输出
		$this->display();
	}

	//修改
	public function edit()
	{
		//1.实例化
		$qreply = M('qreply');

		//2.接受Id
		$id = I('get.id');
		// echo $id;

		//3.查询数据
		$data = $qreply->find($id);
		// dump($data);

		//4.分配变量
		$this->assign('data',$data);

		//5.输出
		$this->display();
	}

	//执行修改操作
	Public function update()
	{
		//1.实例化
		$qreply = M('qreply');

		//2.接受Id
		$id = I('post.id');

		// echo $id;

		//3.创建数据对象
		$res = $qreply->create();

		//4.判断
		if($res){
			//4.1执行修改
			$result = $qreply->save();

			//4.2判断
			if($result){
				// echo 'ok';
				$this->success('修改成功',U('Qreply/index'),1);
			}else{
				// echo 'no';
				$this->error('修改失败');
			}
		}else{
			$this->error($qreply->getError());
		}
	}

	//删除
	public function del()
	{
		//1.实例化
		$qreply = M('qreply');

		//2执行删除操作
		$id = I('get.id');
		$res = $qreply -> delete($id);

		//3.判断
		if($res){
			// echo 'ok';
			$this->success('删除成功',U('Qreply/index'),1);
		}else{
			// echo 'no';
			$this->error('删除失败');
		}
	}
}
