<?php 
	namespace Home\Controller;
	use Think\Controller;
	header("Content-type:text/html;charset=utf-8");
	date_default_timezone_set('PRC');
	class OrderController extends Controller
	{
		public function order(){
			$uid=session('id');

			//实例化order表
			$order=M();

			//定义一个空字符串
			$where['o.status']=I('get.status');
			$where['o.uid']=$uid;
			$status=I('get.status');
			$where['o.gid']=array('exp','=g.id');

			//设置搜索条件
			$wheres=[];
			if(!empty($_GET['gname'])){
				$wheres['gname'] = array('like',"%{$_GET['gname']}%");
			}
			//获取数据总条数
			if($status==1){
				$count=$order->where("o.gid=g.id and o.uid=$uid")->table('meizu_goods g,meizu_order o')->where($wheres)->count();
			}else{
				$count=$order->where("o.gid=g.id and o.uid=$uid")->where($where)->table('meizu_goods g,meizu_order o')->where($wheres)->count();
			}
			
			//实例化Page类
			$page=new \Think\Page($count,5);

			//展示分页
			$config=array(
					$page->setConfig('first','首页'),
					$page->setConfig('prev','上一页'),
					$page->setConfig('next','下一页'),
					$page->setConfig('last','尾页'),
					$page->setConfig('theme',"共 %TOTAL_ROW% 件商品 %FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END%")
				);

			//展示页码
			$show=$page->show();
			$this->assign('show',$show);

			
			// 1、订单列表(全部订单)
			if($status==1){
				$all=$order->where("o.gid=g.id and o.uid=$uid")->limit($page->firstRow,$page->listRows)->table('meizu_goods g,meizu_order o')->where($wheres)->order('o.id desc')->select();
			}else{
				$all=$order->where($where)->limit($page->firstRow,$page->listRows)->table('meizu_goods g,meizu_order o')->order('o.id desc')->select();
			}
			// dump($all);
			$this->assign('all',$all);
			$this->display();
		}

		// 2、取消待付款订单
		public function concal(){
			$id['id']=I('post.id');
			$concal=M('order');
			$status['status']=6;
			//创建数据对象
			$res=$concal->create();
			if($res){
				$data=$concal->where($id)->save($status);
				$this->ajaxReturn($data2);
			}
		}

		//删除订单
		public function delete(){
			$id['id']=I('get.id');
			$delete=M('order');
			$data=$delete->where($id)->delete();
			if($data){
				header('Location:'.$_SERVER["HTTP_REFERER"]);
			}
		}

		//查看详情
		public function find(){
			$find=M('order');
			$where['o.id']=I('post.id');
			$where['o.gid']=array('exp','=g.id');
			$where['o.aid']=array('exp','=a.id');
			$data=$find->field('o.*,g.*,a.*,o.status as s')->table('meizu_order o,meizu_goods g,meizu_adress a')->where($where)->select();
			echo json_encode($data);
		}


		//当点击立即购买的时候

		
	}