<?php

namespace Home\Controller;

use Think\Controller;

class DgoodsController extends Controller
{
	public function index()

	{
		//1.实例化
		$dgoods = M('dgoods');
		$score = M('user');
		$id = $_SESSION['id'];

		//2.查询数据
		$data = $dgoods->select();

		$res = $score->field('score')->find($id);
		// dump($data);
		// dump($res);


		//3.分配变量
		$this->assign('id',$id);
		$this->assign('res',$res);
		$this->assign('data',$data);

		//4.输出
		$this->display();
	}

	public function score()
	{
		//1.实例化
		$score = M('user');
		// dump($_POST);

		//2.
		$jifen['score'] = $_POST['score'];
		// echo 'aaaaaaaaa';
		// json_encode($jifen);

		//更新用户的积分
		$res = $score ->field('score')->where("id={$_SESSION['id']}")->save($jifen);
		// echo $score->_sql();
		//判断
		if($res){
			echo 'ok';
		}else{
			echo 'no';
		}
	}
}