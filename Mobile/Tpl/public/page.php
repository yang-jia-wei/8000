<div class="f14466107051">
  <div class="f14466107052">
    <div class="f14466107053">
      <?php  $pageurl=get_url();  $pageurl=preg_replace('/\&p=[0-9]+/','',$pageurl);  ?>
      <a class="f14466107054" href="<?php echo $pageurl."&p=1"?>"><?php echo L('_SHOUYE_')?></a>
      <?php    $page_count=ceil($total_num/$perpage);      $prev=$p-1;    $next=$p+1;    $pagenum=5;    $floorpage=floor($pagenum/2);    $star=$p-$floorpage;    $end=$p+$floorpage;    if($p>1){    ?>
      <a class="f14466107055" href="<?php echo $pageurl."&p=".$prev;?>">&lt;</a>
      <?php    }else{  	?>
      <span class="f14466107056">&lt;</span>
      <?php }  	if($star<1){  		$star=1;  		$end=$page_count<$pagenum?$page_count:$pagenum;  		}  	if($end>$page_count){  		$star=$page_count-$pagenum+1;  		$end=$page_count;  		}  		if($end==0)$end=1;  		if($page_count==0)$page_count=1;  		?>
      <?php  for($i=$star;$i<=$end;$i++){  if($i>0){	if($p==$i){  	?>
      <span class="f14466107057"><?php echo $i;?></span>
      <?php }else{?>
      <a class="f14466107058" href="<?php echo $pageurl."&p=".$i;?>"><?php echo $i;?></a>
      <?php }  } }  	if($p<$page_count){?>
      <a class="f14466107059" href="<?php echo $pageurl."&p=".$next;?>">&gt;</a>
      <?php }else{?>
      <span class="f144661070510">&gt;</span>
      <?php }?>
      <a class="f144661070510" href="<?php echo $pageurl."&p=".$page_count?>"><?php echo L('_WEIYE_')?></a> </div>
    <p class="f144661070511"><?php echo L('_TIAOZHUANG_')?>
      <select class="f144661070512" name="page_number" id="page_number" onchange="on_page('<?php echo $pageurl;?>')">
        <?php for($i=1;$i<=$page_count;$i++){?>
        <option class="f144661070513" value="<?php echo $i;?>"><?php echo $i;?>&nbsp;</option>
        <?php }?>
      </select>
      <?php echo L('_YE_')?></p>
  </div>
</div>
