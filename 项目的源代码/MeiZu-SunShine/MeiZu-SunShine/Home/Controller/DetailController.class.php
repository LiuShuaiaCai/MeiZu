<?php
	namespace Home\Controller;
	use Think\Controller;
	class DetailController extends Controller
	{
		public function detail(){
			$id=I('get.id');
			$detail=M();
			// 网络类型
			$data=$detail->table('meizu_attrnet')->where("gid=$id")->select();
			//手机颜色
			$data2=$detail->table('meizu_attrcolor')->where("gid=$id")->select();
			//手机内存
			$data4=$detail->table('meizu_attrmem')->where("gid=$id")->select();

			$data3=$detail->table('meizu_goods')->where("id=$id")->find();
			session('buy',$data3);
			// dump($data);
			// dump($data3);

			$this->assign('data',$data);
			$this->assign('data2',$data2);
			$this->assign('data3',$data3);
			$this->assign('data4',$data4);

			//规格参数
			$data5=$detail->table('meizu_details')->where("id=$id")->find();
			$this->assign('data5',$data5);

			//遍历商品展示图片
			$image=M('photo');
			$img=$image->where("id=$id")->find();
			$this->assign('img',$img);
			
			//遍历评价回复
			//1.实例化
			$goodspl =M();

			//2.查询数据
			
			//$vo1=$goodspl->query("select * from meizu_goodspl left join meizu_goodsre on meizu_goodsre.zid=meizu_goodspl.id and meizu_goodspl.gid={$id}");
			$vo1=$goodspl->query("select * from meizu_goodspl pl left join meizu_goodsre re on pl.id = re.zid where pl.gid={$id};");
			//$vo1=$goodspl->query("select pl.username,pl.plphoto,pl.gid,pl.desc,pl.quality,pl.price,pl.service,pl.content,pl.ptime,re.recontent,re.retime from meizu_goodspl pl left join meizu_goodsre re on re.zid=pl.id and pl.gid={$id}");
			//echo $goodspl->_sql();
			//dump($vo1);
			//3.分配变量
			$this->assign('vo1',$vo1);

			$this->display();
		}

	}