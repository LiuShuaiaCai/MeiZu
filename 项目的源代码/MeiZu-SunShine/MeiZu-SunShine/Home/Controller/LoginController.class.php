<?php
	namespace Home\Controller;
	use Think\Controller;
	
	class LoginController extends Controller
	{
		public function quit(){
			
		}
		//登陆页面
			public function login()
			{
				session(null);
				session('[destroy]');
				$this->display();
			}
			
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
			public function yzm()
			{
				$verify=new \Think\Verify();
				
				if(!$verify->check($_GET['yzm'])){
					$this->error('验证码输入错误');
					
				}else{
					$user=M('user');
					
					$where['id']=I('get.id');
					
					$data=$user->where($where)->find();
					
					$score['score']=$data['score']+50;
					$user->where($where)->save($score);
					
					
					$this->redirect('Index/index',array('id'=>$_GET['id']));
				}
			}
			//用户找回密码验证页面
			public function findpwd()
			{
				$this->display();
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
			//判断用户手机号和用户名是否对应
			public function checking()
			{
				$user=M('user');
				$where['userName']=I('post.userName');//用用户的用户名做条件;
				$id=$user->where($where)->getField('id');
				//用户登陆把用户id,userName传进session中
				$_SESSION['id']=$id;
				$_SESSION['userName']=$_POST['userName'];
				
				$res=$user->create();
				
				//判断用户是否记住密码
				if(isset($_POST['remember'])){
					cookie('userName',"{$_POST['userName']}",'3600');
					cookie('password',"{$_POST['password']}",'3600');
					cookie('remember',"{$_POST['remember']}",'3600');
				}
				
				if($res){
					$data1=$user->where($where)->find();
					
					if($data1['password']== md5($_POST['password']) && $data1['status']==1){
					
						$this->redirect('yzm',array('yzm'=>$_POST['yzm'],'id'=>$data1['id']));
							
						}else if($data1['status']==2){
						
							$this->error('亲，您的账号已被禁用');
							
						}else if($data1['password'] != md5($_POST['password'])){
						
						$this->error('亲，您的密码输入错误!请再试一遍');
						}
					}else{
						$this->error($user->getError());
					}				
			}
			public function checkingOne()
			{
				$user=M('user');
				$where['userName']=I('post.userName');//用用户的用户名做条件;
				
				
				$res=$user->create();
				
				if($res){
					$data1=$user->where($where)->find();
					
					if($data1['phone'] == $_POST['phone'] && $data1['status']=='1'){
						header("location:resetpwd?userName=".$where['userName']);
						
					}else if($data1['status']=='2'){
					
						$this->error('亲，您的账号已被禁用');
						
					}else if($data1['phone'] != $_POST['phone'] && $data1['status']=='1'){
					
						$this->error('亲，您的用户名与手机号不一致!请再试一遍');
					}
				}else{
					$user->getError();
				}
			}
			
			public function resetpwd()
			{
				$data=$_GET['userName'];
				
				$this->assign(data,$data);
				$this->display();
			}
			public function update()
			{
				$user=M('user');
				
				
				$password['password']=md5(I('post.password'));
				
				$where['userName']=I('post.userName');
				
				
				$data=$user->create();
				
				
				if($data){
					$res=$user->where($where)->save($password);
					$res1=$user->where($where)->getField('password');
					if($res){
						$this->success('更改成功','login');
					}else if($res1==$password['password']){
						$this->error('新密码不能与原密码相同');
					}else{
						$this->error('更改失败');
					}
				}else{
					$this->error($user->getError());
				}
			}
		
	}
?>