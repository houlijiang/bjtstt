<?php $this->load->view("header");?>
  <div class="cl"></div>
  <div class="middle">
    <!--公共左 begin-->
  <div class="side">
  <div class="s-1">
    <h3>公司简介</h3>
    <marquee direction="up" scrolldelay="5" scrollamount="2" height="150"><p>北京天水同天钢铁贸易有限公司是一家科学管理的专业钢材贸易企业，我公司主营螺纹钢、线材、环氧树脂涂层钢筋（防腐钢筋）、焊管、无缝管、镀锌管、开平板、中厚板、角钢、槽钢、方管等。</p></marquee>
    
  </div>
  <div class="s-2">
    <?php $this->load->view('left');?>
  </div>
</div>

  <!--公共左 end-->
  <div class="main">
  <div class="content">
  <h4><?php echo $info['title']?></h4>
  <div class="date">更新时间：<?php echo date("Y-m-d",$info['utime']);?></div>
<?php echo $info['content']?>
  </div> 
  </div>
  </div>
  <div class="cl"></div>
<?php $this->load->view("footer");?>

