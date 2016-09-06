<?php
namespace Admin\Controller;
use Think\Controller;
class IndexController extends Controller 
{
	public function index()
    {
        $this->display();
    }
	
     public function login()
	{
    	//输出页面
    	$this->display();
    }

    public function demo2()
    {
        //1.实例化
        $user=M('admin');
        //2.获得条件并查询
        $where['adminname']=I('get.adminname');

        $data=$user->where($where)->find();

        //3.判断
        if($data){
            echo 'ok';
        }else{
            echo 'no';
        }
    }

    //生成验证码
    public function code()
    {   //1.实例化验证码类
        $config = array(
                'useImagBg' => 'true',
                'fontSize'  => '40',
                'usrCurve'  => 'false',
                'length'    => 2,
                'codeSet'   =>'123456789',

            );
        $verify = new \Think\Verify($config);
        //2.调用验证生成方法
        $verify->entry();
    }

    public function demo3()

    {
        //记住密码
        if(isset($_POST['remember'])){
            cookie('remember',$_POST['remember'],3600);
            cookie('adminname',$_POST['adminname'],3600);
            cookie('password',$_POST['password'],3600);

        }

        //1.实例化
        $verify = new \Think\Verify();
        $res = $verify->check(I('post.code'));
        // dump($res);
        //1.实例化
        // dump($_POST);
        $admin=M('admin');
        //2.获取条件并执行查询
        $where['adminname']=I('post.adminname');
        $where['password']=I('post.password');
        $where['status']=1;
        $data = $admin->where($where)->find();
        // dump($data);
        // echo $admin->_sql();
        session('admin',$data);
        // dump($_SESSION);

        //3.判断
        if(!$res){
            $this->error('验证码不正确');
        }else if($data){
            $this->success('登录成功',U('Index/login'),1);
        }else{
            $this->error('登录失败');
        }


        
        // //3.判断
        // if($data&&$res){
        //     $this->success('登录成功',U('Index/login'),1);
        //     echo 'ok';
        // }else{
        //     // $this->error('登录失败');
        //     echo 'no';
        
    }


	
}