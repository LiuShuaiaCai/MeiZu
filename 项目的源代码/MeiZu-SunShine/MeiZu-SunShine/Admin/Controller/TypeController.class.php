<?php
namespace Admin\Controller;
use Think\Controller;
class TypeController extends Controller {

	//展示商品
	public function index()
	{
		// 1.实例化Model类
        $type = M('type');

        // 2.接收搜索条件（判断对应的搜索条件是否存在）
        $wherelist = [];
        // 用户名
        if (!empty($_GET['tname'])) {
            $wherelist['tname'] = array('like',"%{$_GET['tname']}%");
        }

        // 3.获取总条数
        $count = $type->where($wherelist)->count();
        // 实例化page类
        $page = new \Think\Page($count, 10);
        // 展示页码
        $this->assign('show',$page->show());

        // 4.查询数据
        $data = $type->where($wherelist)->select();

        // 5.将数据传递给getList()
        $list = \Org\LAMP\CatTree::getList($data);
    	//dump($list);

        //6.分配变量
        $this->assign('list',$list);

        //7.输出模板
		$this->display();
	}

	//添加方法
	public function add()
	{
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
    		//echo $type->_sql();
    		// 5.判断
    		if ($result) {
    			$this->success('添加成功',U('Type/index'));
    		} else {
    			$this->error('添加失败');
    		}
    	} else {
    		 $this->error($type->getError());
    	}
    }
    
     // 输出修改页面
    public function edit()
    {
        // 1.实例化model类
        $type = M('type');

        // 2.获取id并查询数据
        $id = I('get.id',0,'intval');
        $data = $type->find($id);
        // dump($data);

        // 3.分配
        $this->assign('data',$data);

        // 4.输出模板
        $this->display();
    }

    // 修改操作
    public function update()
    {
        //1.实例化model
        $type = M('type');

        // 2.创建数据对象
        $res = $type->create();

        // 3.判断
        if ($res) {
            // 4.执行修改操作
            $result = $type->save();

            // 5.判断修改结果
            if ($result) {
                $this->success('修改成功',U('Type/index'));
            } else {
                // echo 'no';
                $this->error('修改失败');
            }
        } else {
            // 失败
            $this->error($type->getError());
        }
    }


     // 输出修改页面
    public function goods()
    {
        // 1.实例化model类
        $type = M('type');

        // 2.获取id并查询数据
        $id = I('get.id',0,'intval');
        $data = $type->find($id);
        // dump($data);

        // 3.分配
        $this->assign('data',$data);

        // 4.输出模板
        $this->display();
    }

    public function updates()
    {
        //1.实例化model
        $type = M('type');

        // 2.创建数据对象
        $res = $type->create();

        // 3.判断
        if ($res) {
            // 4.执行修改操作
            $result = $type->save();

            // 5.判断修改结果
            if ($result) {
                $this->success('修改成功',U('Type/index'));
            } else {
                // echo 'no';
                $this->error('修改失败');
            }
        } else {
            // 失败
            $this->error($type->getError());
        }
    }

    //执行启用、禁用功能（status）
    public function enable()
    {
        // dump(I('get.'));
        //拼接传过来的父类的id值，和所有子类的id值
        $id = I('get.id','','intval').','.I('get.childs');
        $status['status'] = I('get.status','','intval') == 1 ? 2 : 1;
        //实例化type类
        $type = M('type');
        // dump($id);  
        // dump(I('get.childs','','intval'));
        $where['id'] = array('in',$id);
        // dump($where);   
        // var_dump($where);exit;
            //执行禁用启用
            $result = $type->where($where)->save($status);
            // dump($result);
            // echo $type->_sql();exit;    
            header('Location:'.$_SERVER['HTTP_REFERER']);
    }
}

?>