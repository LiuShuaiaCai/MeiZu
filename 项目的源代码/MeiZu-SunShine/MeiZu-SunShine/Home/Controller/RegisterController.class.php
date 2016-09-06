<?php
		namespace Home\Controller;
		use Think\Controller;
		header('content-type:text/html;charset="utf-8"');
		class RegisterController extends Controller
		{	
			
			public function login()
			{
				$this->display();
			}
			//登陆页面
			
			
			public function code()
				
			{
				$config=array(
					'length'=>4,
					'useNoise'=>false,
					'useCurve'=>false,
				);
				$verify=new \Think\Verify($config);
				
				$verify->entry();
				
				
			}
			
			//用户注册页面
			public function register()
			{
				$this->display();
				
			}
			
		
			
			//用户添加方法(用户注册)
			public function add()
			{
				if(time() - session('code.time') > 900){
				
					$this->error('验证码过期');
					
				}else if(I('post.yzm') != session('code.code')){
				
					$this->error('验证码输入错误');
					
				}else{
				
				$user=M('user');//实例化model类
				//获取数据
				$data['userName']=I('post.userName');
				
				$data['phone']=I('post.phone');
				
				$data['password']=md5(I('post.password'));
				
				
				
				$data1=I('post.yzm');
				
				$res=$user->create();//创建数据对象;
				
				if($res){
					
					$res1=$user->add($data);
					if($res1){
						
						$this->redirect('Login/login',5);
						
						}else{
							$this->error('注册失败');
						}
					}else{
						exit($User->getError());
					}
				
				}
										
			}	
			
			
			//处理Ajax方法
			public function check()
			{
				$user=M('user');
				$where['userName']=I('get.userName');
				
				
				$data=$user->where($where)->select();
				
				
				if($data){
					$this->ajaxReturn('yes');
				}else{
					$this->ajaxReturn('no');
				}
			
			}
			
			public function phone()
			{
				$user=M('user');
				
				
				$where['phone']=I('get.phone');
				
				$data=$user->where($where)->select();
				
				if($data){
					echo 'yes';
				}else{
					echo 'no';
				}
				
				
			}
			public function demo()
			{
				// ***********************必须先将extension=php_curl扩展打开
				// 接收电话号并且执行发送短信的功能
				// 1.接收电话号码
				$phone = I('post.key');
				// mt_rand()
				$rand = mt_rand(100000,999999);
				$content = "本次短信纯属做项目试验! 您的验证码是$rand,验证码在15分钟内有效，本次短信免费，回复无效！祝你生活愉快";

				// 2.必须保存生成的验证码
				$code = ['code'=>$rand,'time'=>time()];
				session('code',$code);

				// 3.执行发送
				$sms = new \Org\Sms\SmsBao('qq285561932','brother');
				$data = $sms->sendSms($phone, $content);
			
				// 4.返回数据
				$this->ajaxReturn($data);
			}
			
	}	
	
?>