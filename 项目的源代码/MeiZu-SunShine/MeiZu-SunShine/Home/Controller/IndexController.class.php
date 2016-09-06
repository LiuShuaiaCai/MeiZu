<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
     public function index(){
    	/*******************Banner轮播图********************/
        // if(S('banner')){
        //     // echo '从缓存中读取数据';
        // }else{
            // echo '从数据库读取数据';
        	$banner=M('banner');
        	$bannerData=$banner->order('id desc')->select();
        	// dump($bannerData);
        //     S('banner',$bannerData,3600);
        // }
    	$this->assign('banner',$bannerData);
        // S('banner',null);


    	/*******************Banner左侧分类********************/
        if(S('tree')){
            // echo 'Banner左侧分类,从缓存中读取数据';
        }else{
            // echo "从数据库读取数据";
        	// 1.实例化
        	$type=M('type');
        	// 查询数据
        	$typeData=$type->where('status=1')->select();
        	// dump($typeData);
        	// 将数据发送到CatTree::getTree()方法中
        	$tree=\Org\LAMP\CatTree::getTree($typeData);
        	//dump($tree);
            S('tree',$tree,3600);
        }
    	$this->assign('tree',S('tree'));
        S('tree',null);


    	/*******************前台公告********************/
        // if(S('notice')){
        //     // echo '前台公告，从缓存中获取';
        // }else{
        	$notice=M('notice');
        	$noticeData=$notice->where('status=2')->select();
            // S('notice',$noticeData);
        // }
        // S('notice',null);
    	$this->assign('notice',$noticeData);


    	/*******************热品推荐********************/
        // if(S('hots')){
        //     // echo '热品推荐,从缓存中读取数据';
        // }else{
        	$hot=M('goods');
        	$hotData=$hot->where('hot=5')->limit(9)->select();
        	// dump($hotData);
            // S('hots',$hotData,3600);
        // }
        // S('hots',null);
    	$this->assign('hots',$hotData);

    	

        /*******************手机模块********************/
        if(S('phone')){
            // echo '手机模块,从缓存中读取数据';
        }else{
            $phone=M('goods');
            $phoneData=$phone->where('pid=1 and status=1')->select();
            S('phone',$phoneData,3600);
        }
        $this->assign('phone',$phoneData);


        /*******************主页模块********************/
        // if(S('arr')){
        //     // echo '主页模块，从缓存中获取数据';
        // }else{
            $model2=M();
            $modelData2=$model2->table('meizu_type t,meizu_goods g')->where('t.id=g.pid and t.status=1')->select();
            // dump($modelData2);
            $arr = [];
            foreach ($modelData2 as $key => &$value) {
                $arr[$value['tname']][] = $value;
            }
            $this->assign('arr',$arr);
        //     S('arr',$arr);
        // }

        // $this->assign('arr',S('arr'),3600);
        // dump(S('arr'));
        // S('arr',null);

        /*******************输出模板********************/
        $this->display();
    }


    /*******************Banner左侧商品********************/
    public function type(){
        //实例化
        $goods=M('goods');

        $pid['pid']=I('post.id');
        $pid['status']=1;
        $data=$goods->where($pid)->select();
        if($data){
            echo json_encode($data);
        }
          
    }
}