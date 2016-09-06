<?php
namespace Admin\Controller;
use Think\Controller;
class GoodsController extends Controller {

	 //index ()方法
    public function index()
    {
        // 1.实例化Model类
        $goods = M('goods');

        // 3.获取总条数
        $count = $goods->where($wherelist)->count();
        // 实例化page类
        $page = new \Think\Page($count, 10);
        // 展示页码

        $page->setConfig('prev','上一页');
            $page->setConfig('next','下一页');
            $page->setConfig('first','首页');
            $page->setConfig('last','尾页');
            $page->setConfig('theme',"共 %TOTAL_ROW% 条记录 %FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END%");
         $this->assign('show',$page->show());
        // 4.查询
        $wherelist[]='t.id=g.tid';
        $wherelist[]='dels=1';
        $data = $goods->table('meizu_type t,meizu_goods g')->where($wherelist)->limit($page->firstRow,$page->listRows)->select();
        //$data = $details->table('meizu_goods g,meizu_details d')->where($wherelist)->limit($page->firstRow,$page->listRows)->select();
        // 5.分配变量
        $this->assign('data',$data);

        // 6.输出模板
        $this->display();
    }


    //添加方法
    public function add(){
    	$this->display();
    }

    // 商品添加页
    public function adds()
    {
        $goods = M('type');

        //查询type表里的pid不为0的数据，即为商品的分类
        $data = $goods->where("pid=0")->select();
        
        //echo $goods->_sql();

        dump($data);
        
        $this->assign('data',$data);

        $this->display();
    }

    //执行添加方法
     public function insert()
    {
    	// 1.实例化model
    	$type = M('type');

    	// 2.创建数据对象
    	$res = $type->create();
       
    	// 3.判断
    	if ($res) {
    		// 4.执行添加
    		$result = $type->add();
    		
    		// 5.判断
    		if ($result) {
    			//实例化
    			$type = M('Goods');
    			$information['tid'] = $result;
                $information['pid'] = $res['pid'];
                $type->add($information);

                //实例化网络类型表把商品的id传过去
                $details = M('details');
                $aa['gid']=$result;
                $details->add($aa);

                $photo = M('photo');
                $bb['gid']=$result;
                $photo->add($bb);
    			
                //实例化
    			$this->success('添加成功',U('Type/index'));
    		} else {
    			$this->error('添加失败');
    		}
    	} else {
    		$this->error($link->getError());
    	}
    }
    //输出修改页面
    public function edit()
    {
        // 1.实例化model类
        $goods = M('goods');

        // 2.获取id并查询数据
        $id = I('get.id',0,'intval');
        $data = $goods->where("tid={$id}")->find();
       
        // 3.分配
        $this->assign('data',$data);

        // 4.输出模板
        $this->display();
    }

    public function editG()
    {
        // 1.实例化model类
        $goods = M('goods');

        // 2.获取id并查询数据
        $id = I('get.id',0,'intval');
       
        $data = $goods->where("tid={$id}")->find();
       

        // 3.分配
        $this->assign('data',$data);

        // 4.输出模板
        $this->display();
    }

    // 修改操作
    public function update()
    {
        // 1.实例化文件上传类
        $config = array(
                'rootPath' => 'Public/',
                'savePath' => 'Uploads/',
                'exts'  => array('jpg','png','gif')
            );
        $upload = new \Think\Upload($config);

        // 2.执行上传
        $info = $upload->uploadOne($_FILES['pic']);

        //1.实例化model
        $goods = M('goods');

        // 2.创建数据对象
        $_POST['pic'] = $info['savepath'].$info['savename'];
        
        $res = $goods->create();
        
        // 3.判断
        if ($res) {
            // 4.执行修改操作
            $result = $goods->save();
            
        echo $upload->getError();

            // 5.判断修改结果
            if ($result) {
                $this->success('修改成功',U('Goods/index'));
            } else {
                $this->error('修改失败');
            }
        } else {
            // 失败
            $this->error($goods->getError());
        }
    }

    // 修改操作
    public function updateG()
    {
        // 1.实例化文件上传类
        $config = array(
                'rootPath' => 'Public/',
                'savePath' => 'Uploads/',
                'exts'  => array('jpg','png','gif')
            );
        $upload = new \Think\Upload($config);

        // 2.执行上传
        $info = $upload->uploadOne($_FILES['pic']);

        //1.实例化model
        $goods = M('goods');

        // 2.创建数据对象
        $_POST['pic'] = $info['savepath'].$info['savename'];
        
        $res = $goods->create();
        
        // 3.判断
        if ($res) {
            // 4.执行修改操作
            $result = $goods->save();
            
        echo $upload->getError();

            // 5.判断修改结果
            if ($result) {
                
                $this->success('修改成功',U('Goods/index'));
            } else {
                 echo 'no';
                $this->error('修改失败');
            }
        } else {
            // 失败
            $this->error($goods->getError());
        }
    }

    

}