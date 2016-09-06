<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en"><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="UTF-8">
    <title>幸运3+2煤球抽奖-魅族社区</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <!-- base href="http://bbs.meizu.cn/" -->

    <link href="/xiangmu/xiangmu/MeiZu-SunShine/Public/Home/css/style_1_common.css" rel="stylesheet">
    <link href="/xiangmu/xiangmu/MeiZu-SunShine/Public/Home/css/common.css" rel="stylesheet">
    <link rel="stylesheet" href="/xiangmu/xiangmu/MeiZu-SunShine/Public/Home/css/lottery.css">
	<link style="" id="layui_layer_skinlayercss" href="/xiangmu/xiangmu/MeiZu-SunShine/Public/Home/css/layer.css" rel="stylesheet"></head>
	<link href="/xiangmu/xiangmu/MeiZu-SunShine/Public/Home/css/draw.css" type="text/css" rel="Stylesheet">
	<script type="text/javascript" src="/xiangmu/xiangmu/MeiZu-SunShine/Public/Home/js/jquery-1.11.3.min.js"></script>
	<script type="text/javascript" src="/xiangmu/xiangmu/MeiZu-SunShine/Public/Home/js/jquery.rotate.min.js"></script>
	<script src="/xiangmu/xiangmu/MeiZu-SunShine/Public/Home/js/xcConfirm.js"></script>
		<link href="/xiangmu/xiangmu/MeiZu-SunShine/Public/Home/css/xcConfirm.css" type="text/css" rel="Stylesheet"/>
	
<body>
	
    <!-- 顶部 -->
    <div id="hd">
        <div id="w_header">
            <div class="nav" id="nav">
                <div class="meizu-header">
                    <div class="meizu-header-wrap">
                        <div class="meizu-header-logo">
                            <a class="meizu-header-logo-img" href="<?php echo U('Index/index');?>"></a>
                        </div>

                        <div class="meizu-header-content">
                            <ul class="meizu-header-link">
                                <li>
                                    <a href="<?php echo U('Index/index');?>">魅族商城</a>
                                </li>
                                <li id="meizu-header-link-product-pro" data-subnav="pro" class="meizu-header-link-product">
                                    <a href="javascript:void();" class="meizu-header-link-product-a" onclick="return false;">魅族手机</a>
                                </li>

                                <li id="meizu-header-link-product-meilan" data-subnav="meilan" class="meizu-header-link-product">
                                    <a href="javascript:void();" class="meizu-header-link-product-a" onclick="return false;">魅蓝手机</a>
                                </li>

                                <li id="meizu-header-link-product-router" data-subnav="router" class="meizu-header-link-product">
                                    <a href="javascript:void();" class="meizu-header-link-product-a" onclick="return false;">智能硬件</a>
                                </li>

                                <li id="meizu-header-link-product-accesory" data-subnav="accesory" class="meizu-header-link-product">
                                    <a href="javascript:void();" class="meizu-header-link-product-a" onclick="return false;">配件</a>
                                </li>

                                <li>
                                    <a href="http://service.meizu.com/index.html">服务</a>
                                </li>

                                <li>
                                    <a href="http://retail.meizu.com/index.html">专卖店</a>
                                </li>
                                <li>
                                    <a href="http://www.flyme.cn/" target="_blank">Flyme</a>
                                </li>
                                <li>
                                    <a href="http://bbs.meizu.cn/" target="_blank">社区</a>
                                </li>
                            </ul>

                            <div class="login-box" id="mzCust" attribute="1" rel="&lt;!--{eval echo empty($is_index) ? '' : 1;}--&gt;">
                                <div style="position: relative;" class="loginArea">
                                    <a style="display: none;" id="newsNum" class="empty_newsnum" onmouseover="showMenu(this.id);">0</a>

                                    <div class="log-img-box">
                                        <img src="/xiangmu/xiangmu/MeiZu-SunShine/PublicHome/images/log-default-avatar.png" alt="log" class="user-avatar">
                                        <img class="arrow" src="/xiangmu/xiangmu/MeiZu-SunShine/Public/Home/images/log-arrow.png">

                                        <ul class="log-dropdown" style="display: none;">
                                            <li><a class="actmanage_mzcust" href="https://member.meizu.com/uc/webjsp/member/detail">我的账户</a></li>
                                            <li><a href="http://bbs.meizu.cn/home.php?mod=follow">我的动态</a></li>
                                            <li><a href="http://bbs.meizu.cn/forum.php?mod=guide&amp;view=my">我的帖子</a></li>
                                            <li><a href="http://bbs.meizu.cn/home.php?mod=space&amp;do=friend">我的好友</a></li>
                                            <li><a href="http://bbs.meizu.cn/home.php?mod=space&amp;do=pm" id="pm_ntc">我的消息</a></li>
                                            <li><a href="http://bbs.meizu.cn/home.php?mod=spacecp">个人设置</a></li>
                                            <!--{eval $myrepeatsusergroups = (array)unserialize($_G['cache']['plugin']['myrepeats']['usergroups']);}-->
                                            <!--{if in_array($_G['groupid'],$myrepeatsusergroups) || $_G['has_myrepeats'] }-->
                                            <li><a href="http://bbs.meizu.cn/home.php?mod=spacecp&amp;ac=plugin&amp;id=myrepeats:memcp">我的马甲</a></li>
                                            <!--{/if}-->
                                            <li><a class="logout_mzcust" id="mzLogout" href="http://bbs.meizu.cn/logout.php?">退出账户</a></li>
                                        </ul>
                                    </div>


                                    <div class="not-login-block-sub" style="display:none;padding-bottom:20px;left: 25px;top: 83px;border: 1px #e5e5e5 solid;border-top: none;">
                                       <p><a id="mzLogin" class="u-btn" href="http://bbs.meizu.cn/login.php?">立即登录</a></p>
                                       <p>没有账号？<a id="mzRegister" class="s-mzblue" href="http://bbs.meizu.cn/login.php?act=register">立即注册</a></p>
                                    </div>

                                    <!--如果有新消息或提醒-->
                                    <div id="newsNum_menu" class="p_pop" style="width:400px;display:none;">
                                        <div id="firstLevelNews"></div>
                                        <div id="secLevelNews"></div>
                                    </div>
                                </div>
                         </div>

                        </div>
                    </div>
                </div>

                <div style="display: none;" data-link="meilan" id="meizu-header-sub-meilan" class="meizu-header-sub">
                    <div class="meizu-header-wrap-sub">
                        <ul class="meizu-header-sub-products">
                          <li class="meizu-header-sub-product">
                                <a href="http://www.meizu.com/products/meilanmetal/summary.html">
                                    <span class="meizu-header-sub-img"><img src="%E5%B9%B8%E8%BF%903+2%E7%85%A4%E7%90%83%E6%8A%BD%E5%A5%96-%E9%AD%85%E6%97%8F%E7%A4%BE%E5%8C%BA_files/meilanmetal.png" data-src="http://www2.res.meizu.com/zh_cn/images/common/meilanmetal.png" data-src-2x="http://www2.res.meizu.com/zh_cn/images/common/meilanmetal@2x.png" alt="魅蓝 metal logo 图"></span>
                                    <span class="meizu-header-sub-desc">魅蓝 metal</span>
                                </a>
                            </li>
                            <li class="meizu-header-sub-product">
                                <a href="http://www.meizu.com/products/meilannote2/summary.html">
                                    <span class="meizu-header-sub-img"><img src="%E5%B9%B8%E8%BF%903+2%E7%85%A4%E7%90%83%E6%8A%BD%E5%A5%96-%E9%AD%85%E6%97%8F%E7%A4%BE%E5%8C%BA_files/meilannote2.png" data-src="http://www2.res.meizu.com/zh_cn/images/common/meilannote2.png" data-src-2x="http://www2.res.meizu.com/zh_cn/images/common/meilannote2@2x.png" alt="魅蓝 note2 logo 图"></span>
                                    <span class="meizu-header-sub-desc">魅蓝 note2</span>
                                </a>
                            </li>
                            <li class="meizu-header-sub-product">
                                <a href="http://www.meizu.com/products/meilannote/summary.html">
                                    <span class="meizu-header-sub-img"><img src="%E5%B9%B8%E8%BF%903+2%E7%85%A4%E7%90%83%E6%8A%BD%E5%A5%96-%E9%AD%85%E6%97%8F%E7%A4%BE%E5%8C%BA_files/meilannote.png" data-src="http://www2.res.meizu.com/zh_cn/images/common/meilannote.png" data-src-2x="http://www2.res.meizu.com/zh_cn/images/common/meilannote@2x.png" alt="魅蓝 note logo 图"></span>
                                    <span class="meizu-header-sub-desc">魅蓝 note</span>
                                </a>
                            </li>
                            <li class="meizu-header-sub-product">
                              <a href="http://www.meizu.com/products/meilan2/summary.html">
                                <span class="meizu-header-sub-img"><img src="%E5%B9%B8%E8%BF%903+2%E7%85%A4%E7%90%83%E6%8A%BD%E5%A5%96-%E9%AD%85%E6%97%8F%E7%A4%BE%E5%8C%BA_files/meilan2t.png" data-src="http://www2.res.meizu.com/zh_cn/images/common/meilan2t.png" data-src-2x="http://www2.res.meizu.com/zh_cn/images/common/meilan2t@2x.png" alt="魅蓝2 logo 图"></span>
                                <span class="meizu-header-sub-desc">魅蓝 2</span>
                              </a>
                            </li>
                            <li class="meizu-header-sub-product">
                                <a href="http://www.meizu.com/products/meilan/summary.html">
                                    <span class="meizu-header-sub-img"><img src="%E5%B9%B8%E8%BF%903+2%E7%85%A4%E7%90%83%E6%8A%BD%E5%A5%96-%E9%AD%85%E6%97%8F%E7%A4%BE%E5%8C%BA_files/meilan.png" data-src="http://www2.res.meizu.com/zh_cn/images/common/meilan.png" data-src-2x="http://www2.res.meizu.com/zh_cn/images/common/meilan@2x.png" alt="魅蓝 logo 图"></span>
                                    <span class="meizu-header-sub-desc">魅蓝</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div style="display: none;" data-link="pro" id="meizu-header-sub-pro" class="meizu-header-sub">
                    <div class="meizu-header-wrap-sub">
                      <ul class="meizu-header-sub-products">
                        <li class="meizu-header-sub-product">
                          <a href="http://www.meizu.com/products/pro5/summary.html">
                            <span class="meizu-header-sub-img"><img src="%E5%B9%B8%E8%BF%903+2%E7%85%A4%E7%90%83%E6%8A%BD%E5%A5%96-%E9%AD%85%E6%97%8F%E7%A4%BE%E5%8C%BA_files/pro5.png" data-src="http://www2.res.meizu.com/zh_cn/images/common/pro5.png" data-src-2x="http://www2.res.meizu.com/zh_cn/images/common/pro5@2x.png" alt="PRO5 logo 图"></span>
                            <span class="meizu-header-sub-desc">PRO 5</span>
                          </a>
                        </li>

                         <li class="meizu-header-sub-product">
                                <a href="http://www.meizu.com/products/mx5/summary.html">
                                    <span class="meizu-header-sub-img"><img src="%E5%B9%B8%E8%BF%903+2%E7%85%A4%E7%90%83%E6%8A%BD%E5%A5%96-%E9%AD%85%E6%97%8F%E7%A4%BE%E5%8C%BA_files/mx5.png" data-src="http://www2.res.meizu.com/zh_cn/images/common/mx5.png" data-src-2x="http://www2.res.meizu.com/zh_cn/images/common/mx5@2x.png" alt="MX5 logo 图"></span>
                                    <span class="meizu-header-sub-desc">MX5</span>
                                </a>
                            </li>

                            <li class="meizu-header-sub-product">
                              <a href="http://www.meizu.com/products/mx4pro/summary.html">
                                <span class="meizu-header-sub-img"><img src="%E5%B9%B8%E8%BF%903+2%E7%85%A4%E7%90%83%E6%8A%BD%E5%A5%96-%E9%AD%85%E6%97%8F%E7%A4%BE%E5%8C%BA_files/mx4pro.png" data-src="http://www2.res.meizu.com/zh_cn/images/common/mx4pro.png" data-src-2x="http://www2.res.meizu.com/zh_cn/images/common/mx4pro@2x.png" alt="MX4 Pro logo 图"></span>
                                <span class="meizu-header-sub-desc">MX4 Pro</span>
                              </a>
                            </li>

                            <li class="meizu-header-sub-product">
                                <a href="http://www.meizu.com/products/mx4/summary.html">
                                    <span class="meizu-header-sub-img"><img src="%E5%B9%B8%E8%BF%903+2%E7%85%A4%E7%90%83%E6%8A%BD%E5%A5%96-%E9%AD%85%E6%97%8F%E7%A4%BE%E5%8C%BA_files/mx4.png" data-src="http://www2.res.meizu.com/zh_cn/images/common/mx4.png" data-src-2x="http://www2.res.meizu.com/zh_cn/images/common/mx4@2x.png" alt="MX4 logo 图"></span>
                                    <span class="meizu-header-sub-desc">MX4</span>
                                </a>
                            </li>


                        </ul>
                    </div>
                </div>

                <div style="display: none;" data-link="router" id="meizu-header-sub-router" class="meizu-header-sub">
                    <div class="meizu-header-wrap-sub">
                        <ul class="meizu-header-sub-products">
                            <li class="meizu-header-sub-product">
                                <a href="http://www.meizu.com/smart/router/summary.html">
                                    <span class="meizu-header-sub-img">
                                    <img src="%E5%B9%B8%E8%BF%903+2%E7%85%A4%E7%90%83%E6%8A%BD%E5%A5%96-%E9%AD%85%E6%97%8F%E7%A4%BE%E5%8C%BA_files/luyouqi.png" style="width: 55px;height: 55px;margin-top: 10px;" data-src="http://www2.res.meizu.com/zh_cn/images/common/luyouqi.png" data-src-2x="http://www2.res.meizu.com/zh_cn/images/common/luyouqi@2x.png" alt="m10 logo 图"></span>
                                    <span class="meizu-header-sub-desc">路由器</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div style="display: none;" data-link="accesory" id="meizu-header-sub-accesory" class="meizu-header-sub">
                    <div class="meizu-header-wrap-sub">
                        <ul class="meizu-header-sub-products">
                             <li class="meizu-header-sub-product">
                                <a href="http://www.meizu.com/accessory/hd50/summary.html">
                                    <span class="meizu-header-sub-img">
                                    <img src="%E5%B9%B8%E8%BF%903+2%E7%85%A4%E7%90%83%E6%8A%BD%E5%A5%96-%E9%AD%85%E6%97%8F%E7%A4%BE%E5%8C%BA_files/hd50.png" style="width: 85px;height: 80px;" data-src="http://www2.res.meizu.com/zh_cn/images/common/hd50.png" data-src-2x="http://www2.res.meizu.com/zh_cn/images/common/hd50@2x.png" alt="HD 50 logo 图"></span>
                                    <span class="meizu-header-sub-desc">头戴式耳机</span>
                                </a>
                            </li>
                            <li class="meizu-header-sub-product">
                                <a href="http://www.meizu.com/accessory/powerbank/m8.html">
                                    <span class="meizu-header-sub-img">
                                    <img src="%E5%B9%B8%E8%BF%903+2%E7%85%A4%E7%90%83%E6%8A%BD%E5%A5%96-%E9%AD%85%E6%97%8F%E7%A4%BE%E5%8C%BA_files/m8.png" style="width: 43px;height: 81px;margin-left: 18px;" data-src="http://www2.res.meizu.com/zh_cn/images/common/m8.png" data-src-2x="http://www2.res.meizu.com/zh_cn/images/common/m8@2x.png" alt="移动电源（标准版） logo 图"></span>
                                    <span class="meizu-header-sub-desc">移动电源（标准版）</span>
                                </a>
                            </li>
                             <li class="meizu-header-sub-product">
                                <a href="http://www.meizu.com/accessory/powerbank/m10.html">
                                    <span class="meizu-header-sub-img" style="*overflow:visible">
                                    <img src="%E5%B9%B8%E8%BF%903+2%E7%85%A4%E7%90%83%E6%8A%BD%E5%A5%96-%E9%AD%85%E6%97%8F%E7%A4%BE%E5%8C%BA_files/m10.png" style="width: 43px;height: 81px;margin-left: 18px;" data-src="http://www2.res.meizu.com/zh_cn/images/common/m10.png" data-src-2x="http://www2.res.meizu.com/zh_cn/images/common/m10@2x.png" alt="移动电源（快充版） logo 图"></span>
                                    <span class="meizu-header-sub-desc">移动电源（快充版）</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="wp">
            <div id="nv">
                <ul>
                 <li id="mn_Nb934"><a href="http://bbs.meizu.cn/" hidefocus="true">首页</a></li>
                 <li class="separator"> </li>
                 <li id="mn_forum"><a href="http://bbs.meizu.cn/forum.php" hidefocus="true">版块</a></li>
                  <li class="separator"> </li>
                  <li id="mn_N2dde"><a href="http://bbs.meizu.cn/group.php?gid=112" hidefocus="true">魅友家</a></li>
                 <li class="separator"> </li>                  
                 <li id="mn_N4d1f"><a href="http://bbs.meizu.cn/app.php?mod=meiwan" hidefocus="true">魅玩帮</a></li>
                </ul>
            </div>
            <div class="cl" id="mu" style="display:none;"></div>
            <div class="cl" id="scbar">
                <form action="search.php?searchsubmit=yes" autocomplete="off" id="scbar_form" method="post" name="scbar_form" onsubmit="searchFocus($('scbar_txt'))" target="_blank">
                    <input name="mod" id="scbar_mod" value="search" type="hidden">
                    <input name="formhash" value="574de78e" type="hidden">
                    <input name="srchtype" value="title" type="hidden">
                    <input name="srhfid" value="0" type="hidden">
                    <input name="srhlocality" value="" type="hidden">

                    <div class="scbar_wrap">
                        <input autocomplete="off" class=" xg1 xg1" id="scbar_txt" name="srchtxt" placeholder="搜索话题和用户" type="text">
                        <button id="scbar_btn" name="searchsubmit" type="submit" value="true"></button>
                    </div>
                </form>
            </div>
            <div class="cr"></div>
            <ul class="p_pop" id="scbar_type_menu" style="display: none;">
                <li>
                    <a class="curtype" href="javascript:;" rel="forum">帖子</a>
                </li>

                <li>
                    <a href="javascript:;" rel="user">用户</a>
                </li>
            </ul>
            <div class="cr"></div>
        </div>
    </div>
<div id="wp" class="wp">
    <div class="draw_container cl">
        <div class="draw_area fll">
            <div class="draw_cont">
                <div class="pointer">
                    <img src="/xiangmu/xiangmu/MeiZu-SunShine/Public/Home/images/pointer.png" alt="pointer" id="pointer">
                </div>
                <div class="rotate">
                    <img id="rotate" src="/xiangmu/xiangmu/MeiZu-SunShine/Public/Home/images/turnplate.png" alt="turnplate">
                </div>
            </div>
            <div class="draw_rule">
                <h2>抽奖规则</h2>
                <p><i>1.</i>每天限抽1次，每次抽奖消耗50积分;</p>
                <p><i>2.</i>实物礼品获得者，请在弹出界面填写收货信息，礼品将会在15个工作日内寄出；</p>
                <p><i>3.</i>虚拟礼品将在3个工作日内由系统自动发放，如有疑问请至「社区办公室」发帖咨询；</p>
                <p><i>4.</i>如因操作失误未能及时填写有效收货信息者，可至「个人主页-中奖记录」中补填；</p>
                <p><i>5.</i>魅族社区有权在法律允许的范围内对本活动进行解释。</p>
            </div>
        </div>
		<form action="" method="post">
			<input type="hidden" value="<?php echo ($id); ?>" id="id">
			
		</form>
		<script type="text/javascript">
			var value=$('#id').val();
			
			
			
			var rotateFunc = function(awards,angle,text){  //awards:奖项，angle:奖项对应的角度 
					$('#pointer').stopRotate();
					$("#pointer").rotate({
					angle:0,  
					duration: 10000, 
					animateTo: angle+1440, //angle是图片上各奖项对应的角度，1440是我要让指针旋转4圈。所以最后的结束的角度就是这样子^^ 
					callback:function(){ 
					alert(text)
				} 
			}); 
		};
			$('#pointer').click(function(){
			
				$.get("<?php echo U('Draw/demo');?>",function(msg){
					if(msg=='no'){
						$('#pointer').stopRotate();
						
						if(confirm('此操作需要登录，确定登录吗')==true){
							window.location.href="<?php echo U('Login/login');?>"
							return true;
						}else{
							
							
							$('#pointer').stopRotate();
						}
						
					}
				})
			})
			
			
			
			$("#pointer").rotate({   
				
				bind:  
			{ 
				
				click: function(){
					
					
					$.get("<?php echo U('Draw/demo2');?>",{id:value},function(msg){
					if(msg=='yes'){
					
					var txt= "亲，每天只能抽一次哦";
					window.wxc.xcConfirm(txt, window.wxc.xcConfirm.typeEnum.warning);
					
						
					}else{
					$.get("<?php echo U('Draw/demo3');?>",{id:value},function(msg){
						
					})
					
					var data = [1,2,3,4,5,6,7,8,0]; //返回的数组 
					
					data = data[Math.floor(Math.random()*data.length)]; 
					
					if(data==1){ 
					rotateFunc(1,0,'恭喜你获得膳魔师保湿杯');
					
					$.get("<?php echo U('Client/award');?>",{number:1,id:value},function(msg){
						if(msg=='yes'){
						rotateFunc(1,0,'恭喜你获得膳魔师保湿杯');
						}
						
						
					})
					} 
					if(data==2){ 
					rotateFunc(2,45,'恭喜你获得25煤球,足够的煤球可以兑换礼品哦');
					
					$.get("<?php echo U('Client/award');?>",{number:2,id:value},function(msg){
						if(msg=='yes'){
						rotateFunc(2,45,'恭喜你获得25煤球,足够的煤球可以兑换礼品哦');
							
						}
						
					})
					}
					if(data==3){ 
					rotateFunc(3,90,'恭喜你获得EP-21耳机');
					
					$.get("<?php echo U('Client/award');?>",{number:3,id:value},function(msg){
						if(msg=='yes'){
						rotateFunc(3,90,'恭喜你获得EP-21耳机');
						}
						
					})
					
					}
					if(data==4){
					rotateFunc(4,135,'恭喜你获得12煤球,足够的煤球可以兑换礼品哦');
					
					$.get("<?php echo U('Client/award');?>",{number:4,id:value},function(msg){
						if(msg=='yes'){
						rotateFunc(4,135,'恭喜你获得12煤球,足够的煤球可以兑换礼品哦');
						}
						
					})
					}
					if(data==5){
					rotateFunc(5,180,'恭喜你获得2016台历');
					
					$.get("<?php echo U('Client/award');?>",{number:5,id:value},function(msg){
						if(msg=='yes'){
						rotateFunc(5,180,'恭喜你获得2016台历');
						}
						
					})
					
					}
					if(data==6){
					rotateFunc(6,225,'亲，在试试手气');
					
					refresh();
					}
					if(data==7){
					rotateFunc(7,270,'恭喜你获得天堂伞');
					
					$.get("<?php echo U('Client/award');?>",{number:7,id:value},function(msg){
						if(msg=='yes'){
						rotateFunc(7,270,'恭喜你获得天堂伞');
						}
						
					})
					
					}
					if(data==8){
					rotateFunc(8,315,'恭喜你获得3煤球,足够的煤球可以兑换礼品哦');
					
					$.get("<?php echo U('Client/award');?>",{number:8,id:value},function(msg){
						if(msg=='yes'){
						rotateFunc(8,315,'恭喜你获得3煤球,足够的煤球可以兑换礼品哦');
						}
						
					})
					
					}
					if(data==0){ var angle = [67,112,202,292,337]; 
					angle = angle[Math.floor(Math.random()*angle.length)] 
					rotateFunc(0,angle,'很遗憾，这次您未抽中奖') 
					
					}
					
				}
						
			
			})	
				
		}
	}
		
})	
		</script>
        <div class="info_area fll cl">
            <div class="loginstatus fll">
                <div class="login_no">
                    <p>登录后才可以参加抽奖哦</p>
                    <a href="<?php echo U('Login/login');?>" class="login_btn">登  录</a>
                </div>
                <div class="login_yes hide">
                    <p>今日剩余抽奖 <em class="c_blue fs18"></em> 次</p>
                    <p>剩余免费抽奖 <em class="c_blue fs18"></em> 次</p>
                    <p>剩余煤球 <em class="c_blue fs18"></em> 个</p>
                </div>
            </div>
            <div class="line"></div>
                        <a href="http://bbs.meizu.cn/thread-5843643-1-1.html" title="嘘，魅族社区APP低调测试中…" class="pic_bar fll">
                <img src="/xiangmu/xiangmu/MeiZu-SunShine/Public/Home/images/114910d2v5eybybbv55zvf.jpg" alt="嘘，魅族社区APP低调测试中…" width="290">
            </a>
            <div class="line"></div>
                        <div class="winner_list fll">
                <h2>中奖名单</h2>

                <div>
					
                    <ul style="margin-top: 0px;">
					<?php if(is_array($data)): foreach($data as $key=>$vo): ?><li><em class="uname" title="匯創"><?php echo ($vo["userName"]); ?></em><cite class="giftname c_blue"><?php echo ($vo["award"]); ?></cite></li><?php endforeach; endif; ?>
                </div>
				
            </div>
        </div>
    </div>
</div>
<div id="address_info" class="hide ">
    <div class="dialog_address_info">
        <p class="draw_tip"></p>
        <p class="blank_no">请填写您的真实信息，以确保奖品的正确发放.</p>
        <p class="blank_yes hide">您已填写过收货联系信息，请核实！如有变动，<a class="c_blue editinfo">点此修改</a></p>
        <dl class="mt15 getinfo_name">
            <dt>*姓名：</dt>
            <dd>
                <input class="blank_no" maxlength="20" type="text">
                <span class="blank_yes hide"></span>
            </dd>
        </dl>
        <dl class="getinfo_phone">
            <dt>*手机：</dt>
            <dd>
                <input class="blank_no" maxlength="11" type="text">
                <span class="blank_yes hide"></span>
            </dd>
        </dl>
        <dl class="getinfo_address">
            <dt>*收货地址：</dt>
            <dd>
                <input class="blank_no" maxlength="100" type="text">
                <span class="blank_yes get_address hide"></span>
            </dd>
        </dl>
        <div class="blank_btn">
            <button class="blank_no">提  交</button>
            <button class="blank_yes hide">确  定</button>
            <p class="hide">带 * 项为必填</p>
        </div>
    </div>
</div>
<input id="getinfo_id" value="0" type="hidden">


        <div class="tborder_foot"></div>

                                                                
        <div id="Footer" class="cl">
            <div id="footer1">
                                <a class="bottoma" target="_blank" href="http://www.meizu.com/about.html">关于魅族</a>
                <img class="footline" src="/xiangmu/xiangmu/MeiZu-SunShine/Public/Home/images/space.gif">
                <a class="bottoma" href="http://www.meizu.com/legalStatement.html" target="_blank">法律声明</a>
                <img class="footline" src="/xiangmu/xiangmu/MeiZu-SunShine/Public/Home/images/space.gif">
                <a class="bottoma" target="_blank" href="http://hr.meizu.com/">工作机会</a>
                <img class="footline" src="/xiangmu/xiangmu/MeiZu-SunShine/Public/Home/images/space.gif">
                <a class="bottoma" target="_blank" href="http://www.meizu.com/contact.html">联系我们</a>
                <img class="footline" src="%E5%B9%B8%E8%BF%903+2%E7%85%A4%E7%90%83%E6%8A%BD%E5%A5%96-%E9%AD%85%E6%97%8F%E7%A4%BE%E5%8C%BA_files/space.gif">
                <span class="globalName"><a id="globalName" class="bottoma language" href="javascript:void(0);">
                <img src="/xiangmu/xiangmu/MeiZu-SunShine/Public/Home/images/earth.jpg">简体中文&nbsp;&nbsp;</a>
                <div style="right: 31px; height: 328px; display: none;top:-330px;" id="globalContainer">
                    <p style="height: 40px; line-height: 40px; font-size: 16px;font-weight:bold; text-align: left; padding-left: 15px;border-bottom: 1px solid #ddd;background: #f3f3f3;">国家或者地区</p>
                    <!-- <a href="http://www.meizu.com" title="简体中文" class="checked">简体中文</a>  -->
                    <a href="http://www.meizu.com/hk/" title="繁體中文" class="ClobalItem">繁體中文</a>
                    <a href="http://www.meizu.com/tw/" title="台灣繁體" class="ClobalItem">台灣繁體</a>
                    <a href="http://www.meizu.com/en/" title="English" class="ClobalItem">English</a>
                    <a href="http://www.meizu.com/de" title="Deutsch" class="ClobalItem">Deutsch</a>
                    <a href="http://www.meizu.com/ru/" title="Русский" class="ClobalItem">Русский</a>
                    <a href="http://www.meizu.com/il" title="?????" class="ClobalItem">?????</a>
                    <a href="http://www.meizu.com/in/" title="India" class="ClobalItem" style="border-width:0px;">India</a>
                </div>
                </span>

                <div id="footWeibo">
                    <a class="sina" title="新浪微博" target="_blank" href="http://weibo.com/meizumobile"></a>
                    <a class="tencent" title="腾讯微博" href="http://t.qq.com/meizu_tech" target="_blank"></a>
                </div>
            </div>
            <div id="footer2" class="copyright">
                <span>?2015 Meizu Telecom Equipment Co., Ltd. All rights reserved.</span>
                <a href="http://bbs.res.meizu.com/resources/php/bbs/static/www/images/icp2.jpg" target="_blank">经营许可证编号：粤B2-20130198</a>
                <span id="footcap">
                    <a target="_blank" rel="nofollow" href="http://210.76.65.188/">
                    <img class="cap1" src="/xiangmu/xiangmu/MeiZu-SunShine/Public/Home/images/space.gif" border="0">
                    </a>
                    <a target="_blank" rel="nofollow" href="http://210.76.65.188/webrecord/innernet/Welcome.jsp?bano=4404013010531">
                    <img class="cap2" src="/xiangmu/xiangmu/MeiZu-SunShine/Public/Home/images/space.gif" border="0">
                    </a>
                                                        </span>
            </div>
        </div>
        <!-- end Footer -->
    

   <!-- <script id="layerContentCartBuy" type="text/template">
        <div class="cart-info">
            <div class="cart-info-list">
                <table id="cartInfoList" border="0" cellspacing="0" cellpadding="0">
                    <tr>
                        <th width=140>商品信息</th>
                        <th width=60>单价</th>
                        <th width=160>数量</th>
                        <th width=60>总价</th>
                        <th width=30>操作</th>
                    </tr>
                </table>
            </div>
            <div style="clear:both;"></div>
            <div class="cart-address">
                <p><label>姓名</label><input type="text" id="cartName" name="name" value="444"></p>
                <p><label>手机</label><input type="text" id="cartPhone" name="phone"></p>
                <p><label>收货地址</label><input type="text" id="cartAddress" name="address"></p>
            </div>
            <a href="javascript:;" class="layer-commitbtn" id="cartCommit">确认</a>
        </div>
    </script>-->
 
</body></html>