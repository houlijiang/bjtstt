<?php $this->load->view("header");?>
  <div class="cl"></div>
  <div class="middle">
    <!--公共左 begin-->
  <div class="side">
<?php $this->load->view('left');?>
</div>
  <!--公共左 end-->
  <div class="main">
  <div class="news left">
  <h3>最新资讯</h3>
  <ul class="news list">
  <?php foreach($list as $n):?>
  <li>
  <span class="right">[<?php echo date('Y-m-d');?>]</span><a href="/index.php/list/show/id/32">环氧树脂涂层钢筋</a>
  </li>
  <?php endforeach;?>
  </ul>
  <div class="page"> 共5 条记录/1页   
  </div>
  </div>
  <div class="index_pic right"></div>
  </div>
  </div>
<div class="cl"></div>
<?php $this->load->view("footer");?>