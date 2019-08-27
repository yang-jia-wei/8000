<?php require APP_ROOT.'public/top.php';?>
<div class="g00002">
  <div class="g00003" id="left">
    <?php require APP_ROOT.'public/left.php';?>
  </div>
  <div class="g00004" id="right">
    <div class="f14464848855">
      <div class="f14464848856">
        <?php require APP_ROOT.'public/right.php';?>
      </div>
    </div>
    <div class="f14464854882">
      <?php  $query_keywords=pg('query_keywords');
	$query=M('query')->where(array('query_keywords'=>$query_keywords))->find();
	if(empty($query)){?>
    <div>没有查找到你要的内容</div>
    <?php }else{?>
    <div><?php echo $query['query_content'];?></div>	
    <?php }?>
    </div>
  </div>
</div>
<?php require APP_ROOT.'public/bottom.php';?>
