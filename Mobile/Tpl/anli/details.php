<?php require APP_ROOT.'public/top.php';?>

<div class="g00002">
  <div class="f14464847351">
    <?php $anli=M('anli')->where(array('anli_id'=>default_content_id(39)))->find();?>
    <div class="f14464847352"><?php echo $anli['anli_name'];?></div>
    <?php if($anli['anli_img']!='') { ?>
    <div class="f14464847353"> <img src="<?php echo $anli['anli_img'];?>" /> </div>
    <?php }?>
    <div class="f14464847354"><?php echo $anli['anli_content'];?></div>
    <div class="f14464847361">
      <?php  $anli_gt = M()->table('index_anli n,index_relevance r')->where('r.classify_id ='.$classify_id.' and n.date > '.$anli['date'].' and r.content_id=n.anli_id')->order('date desc')->find();  if(!empty($anli_gt)){?>
      <div class="f14464847355"><a class="f14464847356" href="<?php echo content_url($anli_gt['type_id'],$anli_gt['anli_id']) ?>">上一条：<?php echo $anli_gt['anli_name'];?></a></div>
      <?php } else { ?>
      <div class="f14464847355"><a class="f14464847356">上一条：暂无记录</a></div>
      <?php }?>
      <?php  $anli_lt = M()->table('index_anli n,index_relevance r')->where('r.classify_id ='.$classify_id.' and n.date < '.$anli['date'].' and r.content_id=n.anli_id')->order('date desc')->find();  if(!empty($anli_lt)){?>
      <div class="f14464847355"><a class="f14464847356" href="<?php echo content_url($anli_lt['type_id'],$anli_lt['anli_id']) ?>">下一条：<?php echo $anli_lt['anli_name'];?></a></div>
      <?php } else {?>
      <div class="f14464847355"><a class="f14464847356">下一条：暂无记录</a></div>
      <?php }?>
    </div>
    <div class="f14464847362">
    
     <a class="f14464847363" href="<?php echo classify_url($classify['type_id'],$classify['classify_id']);?>">返回列表</a> </div>
  </div>
</div>
<?php require APP_ROOT.'public/bottom.php';?>
