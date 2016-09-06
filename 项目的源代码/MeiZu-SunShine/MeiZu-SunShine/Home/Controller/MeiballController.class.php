<?php

namespace Home\Controller;

use Think\Controller;

class MeiballController extends Controller
{
	public function index()

	{
		//1.实例化
		$dgoods = M('dgoods');

		//2.查询数据
		$data = $dgoods->select();
		// dump($data);

		//3.分配变量
		$this->assign('data',$data);

		//4.输出
		$this->display();
	}
}