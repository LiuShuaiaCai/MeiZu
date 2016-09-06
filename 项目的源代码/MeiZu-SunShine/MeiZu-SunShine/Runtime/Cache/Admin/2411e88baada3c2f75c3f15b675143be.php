<?php if (!defined('THINK_PATH')) exit();?>
<div class="col-lg-6">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>主要内容区main</title>
<link href="../../public/admin/css/css.css" type="text/css" rel="stylesheet" />
<link href="../../public/admin/css/main.css" type="text/css" rel="stylesheet" />
<link rel="../../public/admin/shortcut icon" href="images/main/favicon.ico" />
<style>
body{overflow-x:hidden; background:#f2f0f5; padding:15px 0px 10px 5px;}
#searchmain{ font-size:12px;}
#search{ font-size:12px; background:#548fc9; margin:10px 10px 0 0; display:inline; width:100%; color:#FFF}
#search form span{height:40px; line-height:40px; padding:0 0px 0 10px; float:left;}
#search form input.text-word{height:24px; line-height:24px; width:180px; margin:8px 0 6px 0; padding:0 0px 0 10px; float:left; border:1px solid #FFF;}
#search form input.text-but{height:24px; line-height:24px; width:55px; background:url(images/main/list_input.jpg) no-repeat left top; border:none; cursor:pointer; font-family:"Microsoft YaHei","Tahoma","Arial",'宋体'; color:#666; float:left; margin:8px 0 0 6px; display:inline;}
#search a.add{ background:url(../../public/admin/images/main/add.jpg) no-repeat 0px 6px; padding:0 10px 0 26px; height:40px; line-height:40px; font-size:14px; font-weight:bold; color:#FFF}
#search a:hover.add{ text-decoration:underline; color:#d2e9ff;}
#main-tab{ border:1px solid #eaeaea; background:#FFF; font-size:12px;}
#main-tab th{ font-size:12px; background:url(../../public/admin/images/main/list_bg.jpg) repeat-x; height:32px; line-height:32px;}
#main-tab td{ font-size:12px; line-height:40px;}
#main-tab td a{ font-size:12px; color:#548fc9;}
#main-tab td a:hover{color:#565656; text-decoration:underline;}
.bordertop{ border-top:1px solid #ebebeb}
.borderright{ border-right:1px solid #ebebeb}
.borderbottom{ border-bottom:1px solid #ebebeb}
.borderleft{ border-left:1px solid #ebebeb}
.gray{ color:#dbdbdb;}
td.fenye{ padding:10px 0 0 0; text-align:right;}
.bggray{ background:#f9f9f9; font-size:14px; font-weight:bold; padding:10px 10px 10px 0; width:120px;}
.main-for{ padding:10px;}
.main-for input.text-word{ width:310px; height:36px; line-height:36px; border:#ebebeb 1px solid; background:#FFF; font-family:"Microsoft YaHei","Tahoma","Arial",'宋体'; padding:0 10px;}
.main-for select{ width:310px; height:36px; line-height:36px; border:#ebebeb 1px solid; background:#FFF; font-family:"Microsoft YaHei","Tahoma","Arial",'宋体'; color:#666;}
.main-for input.text-but{ width:100px; height:40px; line-height:30px; border: 1px solid #cdcdcd; background:#e6e6e6; font-family:"Microsoft YaHei","Tahoma","Arial",'宋体'; color:#969696; float:left; margin:0 10px 0 0; display:inline; cursor:pointer; font-size:14px; font-weight:bold;}
#addinfo a{ font-size:14px; font-weight:bold; background:url(../../public/admin/images/main/addinfoblack.jpg) no-repeat 0 1px; padding:0px 0 0px 20px; line-height:45px;}
#addinfo a:hover{ background:url(../../public/admin/images/main/addinfoblue.jpg) no-repeat 0 1px;}
</style>
</head>
<body>
<!--main_top-->
<table width="99%" border="0" cellspacing="0" cellpadding="0" id="searchmain">
 
  <tr>
    <td align="left" valign="top" id="addinfo">
    <a href="add.html" target="mainFrame" onFocus="this.blur()" class="add">修改管理员信息</a>
    </td>
  </tr>
  <tr>
    <td align="left" valign="top">
    <form method="post" action="<?php echo U('Meizuadmin/update');?>" enctype="multipart/form-data" id="form">
    <input type="hidden" name="id" value="<?php echo ($data['id']); ?>">
    <table width="100%" border="0" cellspacing="0" cellpadding="0" id="main-tab">
      <tr onMouseOut="this.style.backgroundColor='#ffffff'" onMouseOver="this.style.backgroundColor='#edf5ff'">
        <td align="right" valign="middle" class="borderright borderbottom bggray">管理员姓名：</td>
        <td align="left" valign="middle" class="borderright borderbottom main-for">
        <input type="text" name="adminname" value="<?php echo ($data['adminname']); ?>" id="adminname"><span id="span1"></span>
        </td>
        </tr>
      <tr onMouseOut="this.style.backgroundColor='#ffffff'" onMouseOver="this.style.backgroundColor='#edf5ff'">
        <td align="right" valign="middle" class="borderright borderbottom bggray">密码：</td>
        <td align="left" valign="middle" class="borderright borderbottom main-for">
        <input type="password" name="password" value="<?php echo ($data['password']); ?>" id="password"><span id="span2"></span>
        </td>
        </tr>
      <tr onMouseOut="this.style.backgroundColor='#ffffff'" onMouseOver="this.style.backgroundColor='#edf5ff'">
        <td align="right" valign="middle" class="borderright borderbottom bggray">头像：</td>
        <td align="left" valign="middle" class="borderright borderbottom main-for">
        <input type="file" name="pic" value="<?php echo ($data['pic']); ?>" class="text-word">
        </td>
        </tr>
      <tr onMouseOut="this.style.backgroundColor='#ffffff'" onMouseOver="this.style.backgroundColor='#edf5ff'">
        <td align="right" valign="middle" class="borderright borderbottom bggray">状态：</td>
        <td align="left" valign="middle" class="borderright borderbottom main-for">
        <input type="text" name="status" value="<?php echo ($data['status']); ?>" class="text-word">
        </td>
      </tr>
       <tr onMouseOut="this.style.backgroundColor='#ffffff'" onMouseOver="this.style.backgroundColor='#edf5ff'">
        <td align="right" valign="middle" class="borderright borderbottom bggray">管理员邮箱：</td>
        <td align="left" valign="middle" class="borderright borderbottom main-for">
        <input type="email" name="email" value="<?php echo ($data['email']); ?>" id="email"><span id="span3"></span>
        </td>
      </tr>
      <tr onMouseOut="this.style.backgroundColor='#ffffff'" onMouseOver="this.style.backgroundColor='#edf5ff'">
        <td align="right" valign="middle" class="borderright borderbottom bggray">&nbsp;</td>
        <td align="left" valign="middle" class="borderright borderbottom main-for">
        <input name="" type="submit" value="提交" class="text-but">
        <input name="" type="reset" value="重置" class="text-but"></td>
        </tr>
    </table>
    </form>
    </td>
    </tr>
</table>
<script>
  //1.获取表单对象
  var form = document.getElementById('form');
  var adminname = form.adminname;
  var password = form.password;
  var email =form.email;
  var aBool = false;
  var pBool = false;
  var eBool = false;
  //2.用户名聚焦的时候
  adminname.onfocus = function (){
    span1.innerHTML = '请输入4-16字母数字组合用户名';
  }
  //3失焦的时候验证
  adminname.onblur = function(){
    //3.1获取值
    var value = this.value;
    //3.2 验证
    var reg = /^[0-9a-zA-Z]{4,16}$/;
    //3.3判断
    if(reg.test(value)){
      span1.innerHTML = '用户名符合要求';
      span1.style.color = 'green';
      aBool = true;
    }else{
      span1.innerHTML = '用户名不符合要求';
      span1.style.color = 'red';
      aBool = false;
    }
  }

  //4.密码聚焦的时候
  password.onfocus = function (){
    span2.innerHTML = '输入4-12位字符'
  }
  //5.密码失焦的时候
  password.onblur = function (){
    //5.1获取值
    var value = this.value;
    //5.2获取长度
    var len1 = value.length;
    //5.3判断
    if(len1>=4 && len1<=12){
      span2.innerHTML = '密码符合要求';
      span2.style.color = 'green';
      pBool = true;
    }else{
      span2.innerHTML = '密码不符合要求';
      span2.style.color = 'red';
      pBool = false;
    }
  }

  //6.邮箱
  email.onfocus = function(){
    span3.innerHTML = '请输入邮箱';
  }

  //7.失焦
  email.onblur = function (){
    //7.1获取值
    var value = this.value;
    //7.2用正则匹配
    var reg = /^[a-z0-9]([a-z0-9]*[-_]?[a-z0-9]+)*@([a-z0-9]*[-_]?[a-z0-9]+)+[\.][a-z]{2,3}([\.][a-z]{2})?$/i;
    //7.3判断
    if(reg.test(value)){
      span3.innerHTML ='合法邮箱地址';
      span3.style.color = 'green';
      eBool = true;
    }else{
      span3.innerHTML ='不合法的邮箱地址';
      span3.style.color = 'red';
      eBool = false;
    }
  }

  //8.提交事件
  form.onsubmit = function(){
    //再次判断
    adminname.onblur();
    password.onblur();
    email.onblur();
    //验证
    if(aBool && pBool && eBool){
      return true;
    }
    //阻止表单提交
    return false;
  }
</script>
</body>
</html>