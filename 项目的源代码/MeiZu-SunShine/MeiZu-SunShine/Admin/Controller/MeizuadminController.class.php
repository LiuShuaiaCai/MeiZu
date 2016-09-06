<?php
namespace Admin\Controller;
use Think\Controller;
class MeizuadminController extends CommonController {
    public function index(){
    	$this->display();
    }

    //1.展示用户列表页面
    public function meizuadmin()
    {
    	//1.实例化
    	$admin = M('admin');
    	//接收搜索条件
    	 // 2.接收搜索条件（判断对应的搜索条件是否存在）
        $wherelist = [];
        // 用户名
        if (!empty($_GET['adminname'])) {
            $wherelist['adminname'] = array('like',"%{$_GET['adminname']}%");
        }
    	
    	//3获取数据的总条数
    	$count = $admin->where($wherelist)->count();
    
    	//4实例化Page类
    	$page =new \Think\Page($count,5);
    	//5展示分页
    	$page->setConfig('prev','上一页');
    	$page->setConfig('next','下一页');
    	$page->setConfig('first','第一页');
    	$page->setConfig('last','尾页');
    	$page->setConfig('theme',"共 %TOTAL_ROW% 条记录 %FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END%");
    	//6展示页码
    	$this->assign('show',$page->show());
    	//7.查询数据
    	$data = $admin->where($wherelist)->limit($page->firstRow,$page->listRows)->select();
    	// dump($data);
    	

    	//8分配模板
    	$this->assign('data',$data);
    	//9输出模板
    	$this->display();
    }



    //执行添加操作

    public function insert()
    {
        //配置文件上传
        $config = array(
                'rootPath' => 'Public/',
                'savePath' => 'Uploads/',
                'exts'     => array('jpg','png','gif','jpeg')
            );
        //实例化文件上传类
        $upload  = new \Think\Upload($config);

        //执行上传
        $info = $upload->upload();
        // dump($info);

        //实例化图片处理类
        $image = new \Think\Image();

        //打开图片并处理
        $path='./Public/';
        $savepath = $info['pic']['savepath'];
        $savename = $info['pic']['savename'];
        // dump($savename);
        // dump($savepath);
        $image->open($path.$savepath.$savename);

        //等比缩放

        $image ->thumb(50,50,2)->save($path.$savepath.'s_'.$savename);


        $newname = $savepath.'s_'.$savename;



    	//1.实例化
    	$admin= M('admin');
        $_POST['pic']=$newname;
    	// dump($_POST);
    	//2.创建数据对象
    	$res = $admin->create();
    	// dump($res);
    	//判断
    	if($res){
    		//执行添加操作
    		$result=$admin->add();
    		// echo $result;
    		//判断
    		if($result){
    			// echo 'ok';
    			$this->success('添加成功',U('Meizuadmin/meizuadmin'),1);
    		}else{
    			// echo 'no';
    			$this->error('添加失败');
    		}
    	}else{
    		$this->error($admin->getError);
    	}

    }
    //展示修改操作页面
    public function edit()
    {
    	//1实例化
    	$admin = M('admin');
    	//2.获取Id并查询数据
    	$id = I('get.id',0,'intval');
    	// echo $id;
    	$data = $admin->find($id);
    	// echo $admin->_sql();
    	//3.分配模板
    	$this->assign('data',$data);
    	//4.编译输出
    	$this->display();
    }
    //执行修改操作
    public function update()
    {
    	
       
        //配置文件上传
        $config = array(
                'rootPath' => 'Public/',
                'savePath' => 'Uploads/',
                'exts'     => array('jpg','png','gif','jpeg')
            );
        //实例化文件上传类
        $upload  = new \Think\Upload($config);
        // dump($_FILES);
        //执行上传
        $info = $upload->uploadOne($_FILES['pic']);
        // dump($info);

        //实例化图片处理类
        $image = new \Think\Image();
        //打开图片处理
        $path='./Public/';
        $savepath = $info['savepath'];
        $savename = $info['savename'];

        //缩放
        $image -> open($path.$savepath.$savename);
        
        $image->thumb(50,50,2)->save($path.$savepath.'t_'.$savename);

        $newname = $savepath.'t_'.$savename;
  
        //1.实例化
    	$admin = M('admin');
        $_POST['pic']=$newname;
        // dump($_POST);
    
    	//2.创建数据对象
    	$res=$admin->create();
    	//3.判断
    	if($res){
    		//3.1执行修改操作
    		$result=$admin->save();
    		// echo $result;
    		//3.2.判断修改是否成功
    		if($result){
    			// echo 'ok';
    			$this->success('修改成功',U('Meizuadmin/meizuadmin'),1);
    		}else{
    			// echo 'no';
    			$this->error('修改失败');
    		}
    	}else{
    		$this->error($admin->getError());
    	}
    }
    //执行删除操作
    public function del()
    {
    	//1.实例化
    	$admin = M('admin');
    	//2.获取id并执行删除操作
    	$id=I('get.id',0,'intval');
    	$res=$admin->delete($id);
    	//3.判断
    	if($res){
    		// echo 'ok';
    		$this->success('删除成功',U('Meizuadmin/meizuadmin'),1);
    	}else{
    		// echo 'no';
    		$this->error('删除成功');
    	}

    }
    //展示禁用功能
    public function enable()
    {
    	//1.实例化
    	$admin = M('admin');
    	//2.获得id,status并执行禁用
    	$id= I('get.id',0,'intval');
    	$arr['status']=$_GET['status']==1 ? 2 : 1;
    	// dump($arr);
    	// dump($id);
    	$where['id']=array('eq',$id);
    	$data=$admin->where($where)->save($arr);
        //3.判断更新是否成功
        if($data){
            // echo 'ok';
            // $this->success('更改成功',U('Meizuadmin/meizuadmin'),1);
            header("location:{$_SERVER['HTTP_REFERER']}");
        }else{
            // echo 'no';
            $this->error('更新失败');
        }
    	// echo $admin->_sql();
    	//3.成功后跳转页面
    	// header("Location:{$_SERVER['HTTP_REFERER']}");
    	
    	

    }

    //设置权限组
    Public function getgroup()
    {
        //1.接受数据
        $id = I('get.id');
        // echo $id;
        //2.实例化管理类
        $admin = M('admin');
        //3.查询数据
        $data = $admin->find($id);
        // dump($data);
        

        //4.实例化权限组类
        $group = M('auth_group');
        $access = M('auth_group_access');
        $res1 = $access->where("uid={$id}")->select();
        // dump($res1);

        $arr=[];
        foreach($res1 as $value)
        {
            $arr[]=$value['group_id'];
        }
        // dump($arr);
        //5.查询数据
        $res = $group->select();
        // dump($res);



        //分配变量
        $this->assign('data',$data);
        $this->assign('res',$res);
        $this->assign('arr',$arr);
        //输出
        $this->display();

    }

    //执行权限组设置操作
    public function addgroup()
    {


       // dump($_POST);
       //1.实例化
       $access= M('auth_group_access');

       //2.接受Id
       $pid = I('post.uid');
       // echo $pid;

       //执行删除操作
       $result = $access->where("uid={$pid}")->delete();
       // echo $access->_sql();


       //2.执行添加操作
       // $res = $access->create();

       
       $uid=$_POST['uid'];
       $group_id=$_POST['group_id'];
       $arr = implode(',',$_POST['group_id']);
       
       foreach ($group_id as $value) {
            // dump($value);
            $data['uid']=$uid;
            $data['group_id']=$value;
            $res = $access->add($data);


            }
        //3.判断
       if($res){
        $this->success('添加成功',U('Meizuadmin/meizuadmin'),1);
       }else{
        $this->error('添加失败');
       }
    
    
    }


    // //展示修改页面
    // public function editgroup()
    // {
    //     //1.实例化
    //     $access = M('auth_group_access');
    //     $group = M('auth_group');

    //     //2.接受Id
    //     $id = I('get.id');
    //     echo $id;

    //     //3.查询数据
    //     $res = $group->select();
    //     dump($res);
    //     foreach ($res as  $value) {
    //        dump($value['id']);
    //     }

         

    //     // $arr = explode(',',$res['id']);
    //     // dump($arr);

    //     $data= $access->where("uid={$id}")->select();
    //     // dump($data);
    //     // echo $access->_sql();

    //     //4.分配变量
    //     $this->assign('res',$res);
    //     $this->assign('data',$data);
      
    //     //5.输出
    //     $this->display();
    // }


    // public function updategroup()
    // {
    //     //1.实例化
    //     $access = M('auth_group_access');

    //     //2.创建数据对象
    //     $res = $access->create();
    //     dump($res);
    //     $arr = $res['group_id'];
    //     dump($arr);
    //     $groups = implode(',',$arr);
    //     dump($groups);
    //     //3.接受Id
    //     $id = I('post.uid');
    //     echo $id;

    //     //4.判断
    //     if($res){
    //         //4.1执行修改
    //         $result = $access->save($groups);
    //     }else{

    //     }
    // }

}