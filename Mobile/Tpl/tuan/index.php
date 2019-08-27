<?php require APP_ROOT.'public/top.php';?>

<div class="g00002">
  <div class="f14464848051">
    <ul class="f14464848052">
      <?php $tuan = M()->table('index_tuan n,index_relevance r')->where('r.classify_id ='.default_classify_id(315).' and r.content_id=n.tuan_id')->order('date desc')->limit($offset,$perpage)->select();foreach($tuan as $k=>$v){ if(($k+1)%2==1 || ($k+1)==1){ echo '<div style="overflow:hidden;">';} ?>
      <li class="f14464848054">
        <div class="f14464848055"><a class="f14464848056" href="<?php echo content_url($v['type_id'],$v['content_id']) ?>">
          <div class="f14464848057"><img class="f14464848058" src="<?php echo $v['tuan_img'];?>" /></div>
          <p class="f14464848059"><?php echo $v['tuan_name'];?></p>
          </a></div>
      </li>
      <?php if(($k+1)%2==0 || $k==count($tuan)-1){ echo '</div>';} }?>
    </ul>
  </div>
</div>
<?php require APP_ROOT.'public/bottom.php';?>
