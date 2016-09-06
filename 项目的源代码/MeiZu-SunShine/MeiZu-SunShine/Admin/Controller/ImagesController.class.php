<?php
namespace Admin\Controller;
use Think\Controller;
class ImagesController extends Controller {
    //详情图修改展示
    public function index(){
        //1.实例化Model类
    	$images=M('photo');

        //2.接收id并查询数据
        $gid=I('id',0,'intval');
        $data = $images->where("gid={$gid}")->find();
        
        //3.分配变量
        $this->assign('data',$data);

        //4.展示模板
        $this->display();

    }

    // 百度编辑器地址：http://fex.baidu.com/ueditor/#start-toolbar
    //详情图执行更新
    public function update()
    {
    	
    	$images = M('photo');

    	$res = $images->create();
        //dump($res);
        
    	if ($res) {
    		$result = $images->save();
            //echo $images->_sql();
    		if ($result) {
    			$this->success('修改成功',U('Type/index'));
    		} else {
    			$this->error('修改失败');
    		}
    	} else {
    		echo $images->getError();
    	}
    }

    //商品展示图
    public function indexdetail()
    {
        // 1.实例化model
        $images = M('photo');

        // 3.获取总条数
        $count = $images->where($wherelist)->count();
       
        // 实例化page类
        $page = new \Think\Page($count, 10);
        // 展示页码

        $page->setConfig('prev','上一页');
            $page->setConfig('next','下一页');
            $page->setConfig('first','首页');
            $page->setConfig('last','尾页');
            $page->setConfig('theme',"共 %TOTAL_ROW% 条记录 %FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END%");
         $this->assign('show',$page->show());

        // 3.查询
        $wherelist[]='p.gid=g.tid and t.id=p.gid and g.dels=1';
        $data = $images->field('t.*,p.*,g.*,g.id as aa')->table('meizu_photo p,meizu_goods g,meizu_type t')->where($wherelist)->limit($page->firstRow,$page->listRows)->select();
        
        // 4.分配变量
        $this->assign('data', $data);
        //dump($data);

        // 5.输出模板
        $this->display();
    }

    //商品图展示
    public function edit()
        {
            $images = M('photo');
            $gid = I('get.id',0,'intval');
            $data = $images->where("gid={$gid}")->find();
            //$data = $images->find($id);
           
            $this->assign('data',$data);

            $this->display();
        }


        public function imagesupdate()
        {
           
           $upload = new \Think\Upload();// 实例化上传类    
           $upload->maxSize   =     3145728 ;// 设置附件上传大小    
           $upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型    
           $upload->rootPath  =      './Public/Uploads/'; // 设置附件上传目录

           $dir = 'Uploads/';

            // 1.2.执行上传
           $info   =   $upload->upload();

            if(!$info) {// 上传错误提示错误信息    
            $this->error($upload->getError());
            }else{// 上传成功 获取上传文件信息  
                $i = 1;  
                foreach($info as $file){  

                    $_POST['pic'.$i++] = $dir.$file['savepath'].$file['savename'];     
                    //echo $dir.$file['savepath'].$file['savename'].'<br/>'; 
                

                }
            }

          
            // 实例化Model
            $images = M('photo');
            // 创建数据对象

            $res = $images->create();

            
            // 进行判断
            if($res){
                // 执行修改操作
                $result = $images->save();

                /*echo $goodsdetail->_sql();

                exit;*/
                // 进行判断
                if($result){
                    $this->success('修改成功',U('Images/indexdetail'));
                }else{
                    $this->error('修改失败');
                }
            }else{
                $this->error($images->getError());
            }
        }

        //修改商品展示图
        public function editG()
        {
            //1.实例化Model类
            $images = M('photo');

            //2.接收id查询数据
            $id = I('get.id',0,'intval');
            $data = $images->where("id={$id}")->find();
           
            //3.分配变量
            $this->assign('data',$data);

            //4.输出模板
            $this->display();
        }

        //执行修改商品展示图
        public function imagesupdateG()
        {
           
           $upload = new \Think\Upload();// 实例化上传类    
           $upload->maxSize   =     3145728 ;// 设置附件上传大小    
           $upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型    
           $upload->rootPath  =      './Public/Uploads/'; // 设置附件上传目录

           $dir = 'Uploads/';

            // 1.2.执行上传
           $info   =   $upload->upload();

            if(!$info) {// 上传错误提示错误信息    
            $this->error($upload->getError());
            }else{// 上传成功 获取上传文件信息  
                $i = 1;  
                foreach($info as $file){  

                    $_POST['pic'.$i++] = $dir.$file['savepath'].$file['savename'];     
                    //echo $dir.$file['savepath'].$file['savename'].'<br/>'; 
                

                }
            }

          
            // 实例化Model
            $images = M('photo');
            // 创建数据对象

            $res = $images->create();

            
            // 进行判断
            if($res){
                // 执行修改操作
                $result = $images->save();

                /*echo $goodsdetail->_sql();

                exit;*/
                // 进行判断
                if($result){
                    $this->success('修改成功',U('Images/indexdetail'));
                }else{
                    $this->error('修改失败');
                }
            }else{
                $this->error($images->getError());
            }
        }

}    