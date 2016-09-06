<?php
namespace Admin\Controller;
use Think\Controller;
class AuthruleController extends CommonController {
	    

	    //展示权限列表
		public  function auth_rule()
		{
			//1.实例化
			$rule = M('auth_rule');

			//2.搜索条件
			$wherelist = [];

			//3.判断权限名称
			if(!empty($_GET['title'])){
				$wherelist['title'] = array('like',"%{$_GET['title']}%");
			}

			//4并查询数据总条数
			$count = $rule ->where($wherelist)->count();

			//5.实例化分页类
			$page = new \Think\Page($count,5);

			$page->setConfig('prev','上一页');
			$page->setConfig('next','下一页');
			$page->setConfig('first','首页');
			$page->setConfig('last','尾页');
			$page->setConfig('theme','共 %TOTAL_ROW% 条记录 %FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END% ');

			//6.展示页码
			$this->assign('show',$page->show());

			//7.查询数据
			$data = $rule->where($wherelist)->limit($page->firstRow,$page->listRows)->select();
			// echo $rule->_sql();
			// dump($data);

			//8.分配变量
			$this->assign('data',$data);

			//9.输出
			$this->display();
		}

		//添加权限
		public function add_auth_rule()
		{
			$this->display();
		}

		//执行添加操作
		public function insert()
		{
			//1.实例化
			$rule = M('auth_rule');

			//2.创建数据对象
			$res = $rule->create();

			//3.判断
			if($res){
				//3.1执行添加操作
				$result = $rule ->add();
				// echo $rule ->_sql();
				//3.2判断
				if($result){
					// echo 'ok';
					$this->success('添加成功',U('Authrule/auth_rule'),1);
				}else{
					// echo 'no';
					$this->error('添加失败');
				}
			}else{
				$this->error($rule->getError());
			}
		}

		//展示修改页面
		public function edit()
		{
			//1.实例化
			$rule = M('auth_rule');

			//2.获取id并执行查找
			$id = I('get.id');

			$data = $rule->find($id);

			//3.分配变量
			$this->assign('data',$data);

			//4.输出
			$this->display();
		}

		//执行修改操作
		public function update()
		{
			//1.实例化
			$rule = M('auth_rule');

			//2.创建数据对象
			$res = $rule -> create();

			//3.判断
			if($res){
				//3.1执行修改操作
				$result = $rule -> save();
				//3.2判断
				if($result){
					// echo 'ok';
					$this->success('修改成功',U('Authrule/auth_rule'),0);
				}else{
					// echo 'no';?
					$this->error('修改失败');
				}
			}else{
				$this->error($rule->getError());
			}
		}

		//执行权限删除
		public function del()
		{
			//1.实例化
			$rule = M('auth_rule');

			//2.获取id并执行删除操作
			$id = I('get.id');

			$res = $rule -> delete($id);

			//3.判断
			if($res){
				// echo 'ok';
				$this->success('删除成功',U('Authrule/auth_rule'),0);

			}else{
				// echo 'no';

				$this->error("删除失败");
			}
		}

		//权限的开启禁用
		public function enable()
		{
			//1.实例化
			$rule = M('auth_rule');


			//2.接收Id
			$id = I('get.id');
			$arr['status']=$_GET['status']==1? 2 : 1;
			$where['id'] = $id;
			//3.查询数据
			$data = $rule->where($where)->save($arr);
			// dump($data);

			//判断
			if($data){
				header("location:{$_SERVER['HTTP_REFERER']}");
			}else{
				$this->error('更新失败');
			}
		}

}
