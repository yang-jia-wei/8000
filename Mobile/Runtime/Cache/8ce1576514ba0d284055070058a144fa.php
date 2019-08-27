<?php if (!defined('THINK_PATH')) exit(); require APP_ROOT.'public/top.php';?>


<?php if($classify_id==328) {?>

    <div class="content">
        <ul class="common_news" id="contentArea">

   <?php  $list= M()->table('index_news n,index_relevance r')->where('r.classify_id ='.$classify_id.' and r.content_id=n.news_id')->order('date desc')->select(); foreach($list as $k=>$v){ ?>


        <li class="news1">
<a href="<?php echo content_url($v['type_id'],$v['content_id']);?>" title=""><span><?php echo $v['news_title'] ?></span><span><?php echo date('Y/m/d',$v['date']) ?></span></a>
</li>
<?php } ?>



</ul>
    </div>


<?php }else{ ?>






<div class="content">
<ul class="common_news" id="contentArea">



   <?php  $list= M()->table('index_news n,index_relevance r')->where('r.classify_id ='.$classify_id.' and r.content_id=n.news_id')->order('date desc')->select(); foreach($list as $k=>$v){ ?>

<li class="news4">
<a href=" <?php echo content_url($v['type_id'],$v['content_id']);?>" title="">
<img style="width:150px;height:120px;" src="<?php echo $v['news_img'] ?>" alt="">
<span><?php echo $v['news_title'] ?></span>
</a>
</li>


<?php } ?>
</ul>
</div>

<?php } ?>









<?php require APP_ROOT.'public/bottom.php';?>