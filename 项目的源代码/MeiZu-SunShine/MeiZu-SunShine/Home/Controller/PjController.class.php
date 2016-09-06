<?php 
	namespace Home\Controller;
	use Think\Controller;
	header("Content-type:text/html;charset=utf-8");
	class PjController extends Controller
	{
		//评价首页
		public function index(){
			// dump($_SESSION);

			$username=$_SESSION['userName'];
			$photo=$_SESSION['photo'];

			//商品的id
			$oid['gid']=$_GET['gid'];
			//实例化order
			$order=M('order');
			$newStatus['status']='7';
			$orderData=$order->where($oid)->save($newStatus);


			//1.实例化model
			$pj = M();
			
			//商品tid
			$gid=I('get.gid');			
			$data = $pj->table('meizu_goods g,meizu_details d')->where("g.tid=d.gid and g.id={$gid}")->find();
			
			$this->assign('id',$id);
			$this->assign('gid',$gid);
			$this->assign('gname',$data['gname']);
			$this->assign('pic',$data['pic']);
			$this->assign('style',$data['style']);
			$this->assign('color',$data['color']);
			$this->assign('memory',$data['memory']);
			$this->assign('username',$username);
			$this->display();
		}

		 public function insert()
		 {
		 	//dump($_POST);
		 	//dump($_SESSION);
		 	
		 	$gid=$_POST['gid'];

		 	$user = M('user');
		 	$id = $_SESSION['id'];
		 	//dump($_SESSION);
		 	//exit;
		 	$uphoto = $user->find($id);
		 	//echo $user->_sql();
		 	//dump($uphoto);

		 	$_POST['plphoto'] = $uphoto['photo'];
		 	//exit;
		 	//echo $gid;

			//1.实例化model
			$pj = M('goodspl');

			//2.创建数据对象
			$res = $pj->create();

			//3.判断
			if($res){
				//4.执行添加
				$result = $pj->add();

				if($result){
					$order = M('order');
					$aa = $order->query("update meizu_order set pingjia=2 where gid={$gid}");
					//echo 33333;
					//echo $order->_sql();

					$this->success('添加成功',U('Order/order?status=1'));
				}else{
					
					$this->error('添加失败');
				}
			}else{
				$this->error($pj->getError());
			}
				
			
		}
			
	}