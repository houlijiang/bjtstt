<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
<link href="/css/common.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="/Public/Js/Base.js"></script>
<script type="text/javascript" src="/Public/Js/prototype.js"></script>
<script type="text/javascript" src="/Public/Js/mootools.js"></script>
<script type="text/javascript" src="/Public/Js/Ajax/ThinkAjax.js"></script>
<script type="text/javascript" src="/Public/Js/UbbEditor.js"></script>
<script type="text/javascript" src="/Public/Js/Form/CheckForm.js"></script>
</head>
<body>
<div class="warp">	
  <div class="header">
    <div class="top"><img src="/images/logo.gif" width="427" height="46" class="left" />
      <div class="right"><a href="#">设为首页 </a>｜<a href="#">加入收藏</a>｜<a href="#">信息反馈</a></div></div>
      <div class="banner"><img src="/images/top_banner.jpg" width="1004" height="211" /></div>
      <div class="nav">
        <ul>
          <li><a href="/index.php">首页</a></li>
          <li><a href="/index.php/page/index/id/1">企业简介</a></li>
          <li><a href="/index.php/product">产品展示</a></li>
          <li><a href="/index.php/list">信息资讯</a></li>
          <li><a href="/index.php/book">信息反馈</a></li>
          <li><a href="/index.php/page/index/id/2">联系我们</a></li>
        </ul>
      </div>
  </div>
  <div class="cl"></div>
  <div class="middle">
    <!--公共左 begin-->
	<div class="side">
		<?php $this->load->view('left');?>
	</div>

  <!--公共左 end-->
  <div class="main">
<form action="/index.php/book/add" method="post">

<table width="100%" border="0">
  <tr>
    <td>姓名：</td>
    <td><input type="text" name="name" /></td>
  </tr>
  <tr>
    <td>QQ：</td>
    <td><input type="text" name="qq" /></td>
  </tr>
  <tr>
    <td>电话：</td>
    <td><input type="text" name="tel" /></td>
  </tr>
  <tr>
    <td>E-mail：</td>
    <td><input type="text" name="email" /></td>
  </tr>
  <tr>
    <td>标题：</td>
    <td><input type="text" name="title" /></td>
  </tr>
  <tr>
    <td>内容：</td>
    <td><textarea name="content" rows="10" cols="50"></textarea></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><input type="submit" value="提交" /></td>
  </tr>
</table>

<input type="hidden" name="__hash__" value="8be4ee053bcc32a8b1112d16daeff062" /></form>
</div>
</div>
  <div class="cl"></div>
<div class="foot"><p>Webcopyright<span class="c">&copy;</span>2010 北京天水同天钢铁贸易有限公司 版权所有<br />
北京市海淀区西三旗钢材市场18号<br />
电话：010-60111942;手机：张恒伟：13911777127<br>尚孟林：13521021686；<div style="display:none"><script src="http://s21.cnzz.com/stat.php?id=2972438&web_id=2972438" language="JavaScript"></script>
</div>
<!--联系人：尚孟林；张恒伟--></p>
</div>
</div>
</body>
</html> 

