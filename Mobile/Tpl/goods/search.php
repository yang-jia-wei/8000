<?php require APP_ROOT.'public/top.php';?>

<div class="g00002">
  <div class="f14464848051">
    <ul class="f14464848052">
      <?php  $goods = M('goods')->where(array('goods_name'=>array('like','%'.$search.'%')))->select();
		  $total_num=M('goods')->where(array('goods_name'=>array('like','%'.$search.'%')))->count();
		  foreach($goods as $k=>$v){ if(($k+1)%2==1 || ($k+1)==1){ echo '<div style="overflow:hidden;">';} ?>
      <li class="f14464848054">
        <div class="f14464848055"><a class="f14464848056" href="index.php?m=goods&a=details&content_id=<?php echo $v['goods_id']?>">
          <div class="f14464848057"><img class="f14464848058" src="<?php echo $v['goods_img'];?>" /></div>
          <p class="f14464848059"><?php echo $v['goods_name'];?></p>
          </a></div>
      </li>
      <?php if(($k+1)%2==0 || $k==count($goods)-1){ echo '</div>';} }?>
    </ul>
  </div>
</div>
<?php require APP_ROOT.'public/bottom.php';?>
