<?php 

namespace Admin\Controller;

use  Think\Controller;

class QuestionController extends Controller
{
	//展示问题列表
	public function question()

	{
		//1.实例化
		$question = M('question');
		//2.搜索条件
		$wherelist = [];
		if(!empty($_GET['title'])){
			$wherelist['title'] = array('like',"%{$_GET['title']}%");
		}

		//3.查询数据总条数
		$count = $question->where($wherelist)->count();

		//4.实例化page类
		$page = new \Think\Page($count,5);

		//5展示页码
		$page->setConfig('prev','上一页');
		$page->setConfig('next','下一页');
		$page->setConfig('first','首页');
		$page->setConfig('last','尾页');
		$page->setConfig('theme',"共 %TOTAL_ROW% 条记录 %FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END%");

		$this->assign('show',$page->show());

		//2.查询数据
		$data = $question->where($wherelist)->limit($page->firstRow,$page->listRows)->select();

		//3.分配变量
		$this->assign('data',$data);

		//4.输出
		$this->display();
	}


	//展示问题添加页面
	public function add_question()
	{
		$this->display();
	}


	//执行添加操作
	public function insert()
	{
		// dump($_POST);
		//1.实例化
		$question = M('question');

		//2.创建数据对象
		$res  = $question->create();

		//3.判断
		if($res){

			//3.1执行添加操作
			$result = $question->add();
			// echo $question->_sql();

			//3.2判断
			if($result){
				$this->success('添加成功',U('Question/question'),1);
				// echo 'ok';
			}else{
				$this->error('添加失败');
				// echo 'no';
			}
		}else{
			$this->error($question->getError());
		}
	}


	//展示修改页面
	public function edit()
	{
		//1.实例化
		$question = M('question');

		//2.接受Id值
		$id = I('get.id');

		//3.执行查询数据
		$data = $question->find($id);

		// dump($data);
		//4.分配变量
		$this->assign('data',$data);

		//输出
		$this->display();
	}


	//执行修改操作

	public function update()
	{
		//1.实例化
		$question = M('question');

		// dump($_POST);

		//2.创建数据对象
		$res = $question->create();

		//3.判断
		if($res){

			//3.1执行修改操作
			$result = $question->save();
			// echo $question->_sql();

			//判断
			if($result){
				// echo 'ok';
				$this->success('修改成功',U('Question/question'),1);
			}else{
				// echo  'no';
				$this->error('修改失败');
			}

		}else{
			$this->error($question->getError());

		}
	}


	//执行删除操作
	public function del()
	{
		//1.实例化
		$question = M('question');

		//2.接受Id值
		$id = I('get.id');

		//3.执行删除数据
		$res = $question->delete($id);
		// dump($res);
		// echo $question->_sql();

		//4.判断
		if($res){
			// echo 'ok';
			$this->success('删除成功',U('Question/question'),1);
		}else{
			// echo 'no';
			$this->error('删除失败');
		}
	}


}