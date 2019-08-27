<?php require APP_ROOT.'public/top.php';?>
<div class="g00002">
<?php require APP_ROOT.'public/right.php';?>
<div class="clear"></div>
    <div class="f14464843d411">
      <ul class="f14464848056">
        <?php  	  $perpage=9;$offset=($p-1)*$perpage;$news = M()->table('index_news n,index_relevance r')->where('r.classify_id ='.default_classify_id(232).' and r.content_id=n.news_id')->order('date desc')->limit($offset,$perpage)->select();$total_num=M()->table('index_news n,index_relevance r')->where('r.classify_id ='.default_classify_id(232).' and r.content_id=n.news_id')->count();  	  foreach($news as $k=>$v){  ?>
        <li class="f14464848057">
          <div class="hgjdhfjfgk">
          <a class="f144648410" href="<?php echo content_url($v['type_id'],$v['news_id']) ?>"><img class="sdgdfhgfgjh" src="<?php echo $v['news_img'] ?>" /></a>
          </div>
          <div class="f144648480511"><a class="f144648480512" href="<?php echo content_url($v['type_id'],$v['news_id']) ?>"><?php echo $v['news_title'] ?></a></div>
        </li>
        <?php }?>
      </ul>
    <div class="c14466f18004">
      <?php require APP_ROOT.'public/page.php';?>
    </div>      
    </div>

</div>
<?php require APP_ROOT.'public/bottom.php';?>
