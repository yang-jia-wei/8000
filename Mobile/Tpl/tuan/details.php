<?php require APP_ROOT.'public/top.php';?>

<div class="g00002">
  <div class="f14464847351">
    <?php $tuan=M('tuan')->where(array('tuan_id'=>default_content_id(39)))->find();?>
    <div class="f14464847352"><?php echo $tuan['tuan_name'];?></div>
    <?php if($tuan['tuan_bigimg']!='') { ?>
    <div class="f14464847353"> <img src="<?php echo $tuan['tuan_bigimg'];?>" /> </div>
    <?php }?>
    <div class="f14464847354"><?php echo $tuan['tuan_content'];?></div>
    <div class="f14464847361">
      <?php  $tuan_gt = M()->table('index_tuan n,index_relevance r')->where('r.classify_id ='.$classify_id.' and n.date > '.$tuan['date'].' and r.content_id=n.tuan_id')->order('date desc')->find();  if(!empty($tuan_gt)){?>
      <div class="f14464847355"><a class="f14464847356" href="<?php echo content_url($tuan_gt['type_id'],$tuan_gt['tuan_id']) ?>">上一条：<?php echo $tuan_gt['tuan_name'];?></a></div>
      <?php } else { ?>
      <div class="f14464847355"><a class="f14464847356">上一条：暂无记录</a></div>
      <?php }?>
      <?php  $tuan_lt = M()->table('index_tuan n,index_relevance r')->where('r.classify_id ='.$classify_id.' and n.date < '.$tuan['date'].' and r.content_id=n.tuan_id')->order('date desc')->find();  if(!empty($tuan_lt)){?>
      <div class="f14464847355"><a class="f14464847356" href="<?php echo content_url($tuan_lt['type_id'],$tuan_lt['tuan_id']) ?>">下一条：<?php echo $tuan_lt['tuan_name'];?></a></div>
      <?php } else {?>
      <div class="f14464847355"><a class="f14464847356">下一条：暂无记录</a></div>
      <?php }?>
    </div>
    <div class="f14464847362">
    
     <a class="f14464847363" href="<?php echo classify_url($classify['type_id'],$classify['classify_id']);?>">返回列表</a> </div>
  </div>
</div>
<?php require APP_ROOT.'public/bottom.php';?>
