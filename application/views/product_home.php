<?php $this->load->view("header");?>
<div class="cl"></div>
<div class="middle">
    <!--公共左 begin-->
  <div class="side">
<?php $this->load->view('left');?>
</div>

  <!--公共左 end-->
  <div class="main">
    <div class="pro">
      <h3>产品展示</h3>
	<ul class="list">
        <?php foreach($list as $g):?>
            <li>
            <?php echo anchor('/product/show/'.$g['id'],img($g['pic'],false,'width="163" height="111" border="0"'))?>
            </li>
        <?php endforeach;?>
	</ul>
    </div> 
     <div class="cl"></div>
    <div class="page">共<?php echo $total?> 条记录/2页  <?php echo $page?></div>
</div>
 <div class="cl"></div>
 </div>
<div class="foot"><p>Webcopyright<span class="c">&copy;</span>2010 北京天水同天钢铁贸易有限公司 版权所有<br />
北京市海淀区西三旗钢材市场18号<br />
电话：010-60111942;手机：张恒伟：13911777127<br>尚孟林：13521021686；<div style="display:none"><script src="http://s21.cnzz.com/stat.php?id=2972438&web_id=2972438" language="JavaScript"></script>
</div>
<!--联系人：尚孟林；张恒伟--></p>
</div>
</div>
</body>
</html> 

