<?php require APP_ROOT.'public/top.php';?>

<div class="g00002">
  <div class="f14821291951">
    <ul class="f14821291952">
      <?php $goods = M()->table('index_goods n,index_relevance r')->where('r.classify_id ='.default_classify_id(315).' and r.content_id=n.goods_id')->order('date desc')->limit($offset,$perpage)->select();foreach($goods as $k=>$v){ if(($k+1)%2==1 || ($k+1)==1){ echo '<div style="overflow:hidden;">';} ?>
      <li class="f14821291953">
        <div class="f14821291954"><a class="f14821291955" href="<?php echo content_url($v['type_id'],$v['content_id']) ?>"><?php echo $v['goods_name'];?></a>
          <div class="f14821291956">
            <div class="f14821291957"><a class="f14821291958" href="<?php echo content_url($v['type_id'],$v['content_id']) ?>"><img class="f14821291959" src="<?php echo $v['goods_img'];?>" /></a></div>
            <div class="f14821291960"><?php echo $v['goods_intro'];?></div>
          </div>
        </div>
      </li>
      <?php if(($k+1)%2==0 || $k==count($goods)-1){ echo '</div>';} }?>
    </ul>
  </div>
</div>
<?php require APP_ROOT.'public/bottom.php';?>
