<?php
	namespace Home\Widget;
	use Think\Controller;
	class PublicWidget extends Controller
	{
		public function header(){
			//实例化
	        $nav=M('goods');
	        //查询PRO手机 
	        $pro['gname']=array('like','%PRO%');
	        $pro['pid']=1;
	        $proData=$nav->where($pro)->select();
	        $this->assign('pro',$proData);
	        //查询魅蓝手机
	        $meilan['gname']=array('like','%魅蓝%');
	        $meilan['pid']=1;
	        $meilanData=$nav->where($meilan)->select();
	        $this->assign('meilan',$meilanData);
	        //查询MX手机
	        $mx['gname']=array('like','%MX%');
	        $mx['pid']=1;
	        $mxData=$nav->where($mx)->select();
	        $this->assign('mx',$mxData);
	        //精选配件1
	        $config['pid']=array(array('gt','7'),'or');
	        $configData=$nav->where($config)->limit(5)->select();
	        $this->assign('config',$configData);
	        //智能硬件
	        $ware['pid']=7;
	        $wareData=$nav->where($ware)->limit(5)->select();
	        $this->assign('hardware',$wareData);
	        

	        //LOGO
	        $logo=M('config');
	        $Logo=$logo->find();
	        $this->assign('logo',$Logo);
	        // dump($Logo);

	        //购物车
	        $uid=session('id');
			$shop=M('shop');
			
			$data2 = $shop->field('count(id) as total')->where("uid=$uid")->select();
			// dump($data2);
			// echo $shop->_sql();
			
			$this->assign('data2',$data2);
	        $this->display('Public/header');
		}

		/*******************友情链接\网站配置********************/
		public function footer(){
	    	$firend=M('link');
	    	$link=$firend->where('status=1')->select();
	    	$this->assign('link',$link);

	    	$config=M('config');
			$copys=$config->field('copys')->find();
			$this->assign('copys',$copys);

	    	$this->display('Public/footer');
		}

	
		
	}