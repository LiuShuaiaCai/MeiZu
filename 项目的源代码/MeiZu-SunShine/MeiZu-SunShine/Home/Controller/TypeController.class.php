<?php
	namespace Home\Controller;
	use Think\Controller;
	class TypeController extends Controller
	{
		public function type()
		{
		/****************查询分类名*************/
		// 1.实例化
    	$type=M('type');

    	// 2.查询数据
    	$typeData=$type->query('select tname,id  from meizu_type where pid=0 and status=1');

    	//3.分配变量
    	$this->assign('typeData',$typeData);

    	/****************商品展示***************/
    	//实例化
    	$goods = M('goods');
		
		//获取分类的id	
		//$id=$_GET['id'];
		$id = I('get.id',1,'intval');

		//查询数据
		$data =$goods->query("select * from meizu_type,meizu_goods where meizu_type.id=meizu_goods.pid and meizu_type.id={$id}");
		
		//分配变量	
		$this->assign('data',$data);

		/*****************热卖*****************/
		$datar = $goods->query("select * from meizu_goods where hot='4'");
		
		//echo $goods->_sql();
		//dump($datar);
		$this->assign('datar',$datar);
		//4.展示模板
    	$this->display();
		}

	}