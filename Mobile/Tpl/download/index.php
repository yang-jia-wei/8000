<?php require APP_ROOT.'public/top.php';?>
<div class="g00002">
  <div class="g00003" id="left">
    <?php require APP_ROOT.'public/left.php';?>
  </div>
  <div class="g00004" id="right">
    <div class="f14478451594">
      <div class="f14478451595">
        <?php require APP_ROOT.'public/right.php';?>
      </div>
    </div>
    <div class="f14478451596">
      <div class="f14478453441">
        <ul class="f14478453445">
          <?php  	  $download = M()->table('index_download n,index_relevance r')->where('r.classify_id ='.default_classify_id(328).' and r.content_id=n.download_id')->order('date desc')->select();  	  foreach($download as $k=>$v){  	?>
          <li class="f14478453446"> <a class="f14478453447" href="<?php echo content_url($v['type_id'],$v['content_id']) ?>"><?php echo $v['download_name'] ?></a> <span class="f14478453448"><?php echo cover_time($v['date'],'Y-m-d');?></span> <a class="f14478453449" href="<?php echo $v['download_file'];?>"><?php echo L('_XIAZAI_')?></a> </li>
          <?php }?>
        </ul>
      </div>
    </div>
    <div class="f144784515913">
      <?php require APP_ROOT.'public/page.php';?>
    </div>
  </div>
</div>
<?php require APP_ROOT.'public/bottom.php';?>
