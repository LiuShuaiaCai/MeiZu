<?php
namespace Admin\Controller;
use Think\Controller;
header("Content-type:text/html;charset=utf-8");
class GoodsplController extends Controller{
	//评论展示页
	public function index()
	{
		//1.实例化
		$goodspl =M();

		//2.查询
		$data = $goodspl->table('meizu_goods g,meizu_goodspl pl')->where('g.id=pl.gid')->select();
		//echo $goodspl->_sql();
		//dump($data);
		//3.分配变量
		$this->assign('data',$data);

		//4.输出模板
		$this->display();
	}

	//回复页
	public function reply()
	{
		//1.实例化
		$reply = M();
		$adminname=$_SESSION['admin']['adminname'];
		//2.查询数据
		$id=$_GET['id'];
		$data = $reply->table('meizu_goods g,meizu_goodspl pl')->where("g.tid=pl.gid and pl.id={$id}")->find();
		//echo $reply->_sql();
		//dump($data);
		//3.分配变量
		$this->assign('data',$data);
		$this->assign('adminname',$adminname);

		//输出模板
		$this->display();
	}

	//执行添加方法
	public function insert()
	{
		//1.实例化model
		$reply = M('goodsre');

		//2.创建数据对象
		$res = $reply->create();

		//3.判断
		if($res){
			//4.执行添加
			$result = $reply->add();

			if($result){
				$this->success('添加成功',U('Goodspl/index'));
			}else{
				$this->error('添加失败');
			}
		}else{
			$this->error($reply->getError());
		}
	}

	//回复管理页
	public function indexlist()
	{
		//dump($_SESSION);
		// $adminname=$_SESSION['admin']['adminname'];
		// echo $adminname;
		//1.实例化
		$reply = M();

		//2.查询数据
		$id = $_GET['id'];
		$dataf = $reply->table('meizu_goods g,meizu_goodspl pl')->where("g.tid=pl.gid and pl.id={$id}")->select();

		$data = $reply->table('meizu_goods g,meizu_goodspl pl,meizu_goodsre re')->where("g.tid=pl.gid and re.zid=pl.id and pl.id={$id}")->select();
		$num = $reply->query("select count(*) as sum from meizu_goodspl pl,meizu_goodsre re where pl.id=re.gid and re.zid={$id}");
		
		//3.分配变量
		$this->assign('dataf',$dataf);
		$this->assign('data',$data);
		$this->assign('num',$num);
		

		//4.输出模板
		$this->display();
	}
}