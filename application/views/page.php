<?php $this->load->view("header");?>
  <div class="cl"></div>
  <div class="middle">
    <!--公共左 begin-->
  <div class="side">
<?php $this->load->view('left');?>
</div>
  <!--公共左 end-->
  <div class="main">
  <div class="content">
  <h4><?php echo $info['title']?></h4>
    <?php echo $info['content']?></div> 
  </div>
  </div>
  <div class="cl"></div>
<?php $this->load->view("footer");?>

