<?php	
	namespace Home\Controller;
	use Think\Controller;
	
	class ClientController extends Controller
	{
		
		public function client()
		{
			$user=M('user');//实例化model类	
			
			
			$where['id']=I('get.id');
			
			
			$data=$user->where($where)->find();//查询数据
			
			$this->assign('data',$data);//编译
			
			$this->display();//分配模板
		}
		
		public function name()//用户名修改
		{
			$where['id']=I('post.id');//获取用户id
			
			$name['userName']=I('post.userName');//获取用户修改的用户名
			
			$user=M('user');//实例化model类
			
			$data=$user->create();//创建数据对象
			
			//判断
			if($data){
				$res=$user->where($where)->save($name);
				
				if($res){
					$this->success('修改成功','client?id='.$_POST['id']);
				}else{
					$this->error('修改失败','client?id='.$_POST['id']);	
				}
				
			}else{
				$this->error($user->getError());
			}
				
		}
		//用户图像修改
		public function image()
		{	
			$user=M('user');
				$config=array(
			'rootPath'=>'Public/',
			
			'savePath'=>'Uploads/',
			'exts'=>array('gif','png','jpg','jpeg'),
		);
			$upload=new \Think\Upload($config);
		
		
		
		//上传文件
		
			$info=$upload->uploadOne($_FILES['photo']);
			
			
			$data['photo']=$info['savepath'].$info['savename'];
			
			$res=$user->create();
			$where['id']=I('post.id');
			if($res){
				$data1=$user->where($where)->save($data);
				
				if($data1){
					$this->success('更改成功','client?id='.$_POST['id']);
				}else{
					$this->	error('修改失败','client?id='.$_POST['id']);
				}
			}else{
				$this->error($user->getError());	
			}
		
		}
		
		//检查输入密码与原密码是否相同
		public function check()
		{
			$where['id']=I('get.id');
			$password=md5(I('get.password'));
			$user=M('user');

			$data=$user->where($where)->getField('password');
			
			if($data==$password){
			echo 'yes';
			}else{
			echo 'no';	
			}
		}
		
		
		//修改手机号码
		public function phone()
		{

				$user=M('user');//实例化model类
				//获取数据
				$where['id']=I('post.id');
				
				$data['phone']=I('post.phone');
				
				
				
				
				
				
				$res=$user->create();//创建数据对象;
				
				if($res){
					
					$res1=$user->where($where)->save($data);
					if($res1){
						
						$this->success('修改成功','client?id='.$_POST['id']);
						
						}else{
							$this->error('修改失败','client?='.$_POST['id']);
						}
					}else{
						exit($User->getError());
					}
				
				
		}
		//用户密码修改方法
		public function password()
		{
			$user=M('user');
			
			$where['id']=I('post.id');
			
			$data['password']=md5(I('post.repassword'));
			
			$res=$user->create();
			
			if($res){
				$data=$user->where($where)->save($data);	
				
				if($data){
					$this->success('修改成功','client?id='.$_POST['id']);
				}else{
					$this->error('修改失败','client?id='.$_POST['id']);
				}
			}else{
				$this->error($user->getError());
			}
		}
		
		//执行用户邮箱添加
		public function email()
		{
				$user=M('user');
				
				$where['id']=I('post.id');
				
				$data['email']=I('post.email');
				
				
				$res=$user->create();
			
			if($res){
				$data=$user->where($where)->save($data);	
				
				if($data){
					$this->success('绑定成功','client?id='.$_POST['id']);
				}else{
					$this->error('绑定失败','client?id='.$_POST['id']);
				}
			}else{
				$this->error($user->getError());
			}
		}
		//执行用户煤球添加
		
		//执行用户奖品添加方法
		public function award()
		{
			$id=I('get.id');//获取用户的id
			$where['id']=I('get.id');
			$number=I('get.number');//获取奖品的对应数字
			$award=M('award');
			$user=M('user');
			$userName=$user->where($where)->getField('userName');
			//判断Ajax传过来的number值
			$data=[];
			
			if($number==1){
				$data['award']='膳魔师保湿杯';
			}else if($number==2){
				$data['award']='25煤球';
			}else if($number==3){
				$data['award']='EP-21耳机';	
			}else if($number==4){
				$data['award']='12煤球';
				
			}else if($number==5){
				$data['award']='2016台历';
			}else if($number==8){
				$data['award']='3煤球';
			}else if($number==7){
				$data['award']='天堂伞';
			}
			$data['uid']=$id;
			$data['time']=time();
			$data['userName']=$userName;
			$result=$award->add($data);
			echo $award->_sql();
			if($result){
				echo 'yes';	
			}else{
				echo 'no';
			}				
		}
		//执行用户密保绑定
		public function demo3()
		{
			//实例化
			$user=M('user');
			
			//获取条件
			$where['id']=I('post.id');
			// 密保数据
			$data['question']=I('post.question');
			$data['answer']=I('post.answer');
			
			//创建数据对象
			$res=$user->create();
			
			
			if($res){
				$result=$user->where($where)->save($data);
				
				if($result){
					$this->success('绑定成功','client?id='.$_POST['id']);
				}else{
					$this->error('绑定失败','client?id='.$_POST['id']);	
				}
			}else{
				$this->error($user->getError());
			}
		}
		//判断用户是否绑定密保问题
		public function demo4()
		{
			//实例化model
			$user=M('user');
		
			//获取用户id
			$id=I('get.id');
			
			$data=$user->where("id={$id}")->find();
			
			if($data){
				return $this->ajaxReturn($data);
			}else{
				return $this->ajaxReturn($data);
			}				
		}
		//判断用户是否绑定邮箱
		public function demo5()
		{
			//实例化
			$user=M('user');

			//获取用户id
			$id=I('get.id');


			$email=$user->where("id={$id}")->getField('email');

			$this->ajaxReturn($email);

				
		}
		
		
		
	}
?>