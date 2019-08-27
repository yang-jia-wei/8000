<?php require APP_ROOT.'public/top.php';?>


<div class="content">

<?php $list= M()->table('index_goods n,index_relevance r')->where('r.classify_id ='.$classify_id.' and r.content_id=n.goods_id')->order('date desc')->select(); ?>

 <div class="product-top">
            <p>
                        共<font><?php echo count($list); ?></font>条信息
            </p>
        </div>

<ul class="common_news" id="contentArea">



   <?php  
 foreach($list as $k=>$v){  ?>

<li class="news4">
<a href=" <?php echo  content_url($v['type_id'],$v['content_id']);?>" title="">
<img style="width:150px;height:120px;" src="<?php echo $v['goods_img'] ?>" alt="">
<span><?php echo $v['goods_name'] ?></span>
</a>
</li>


<?php } ?>
</ul>
</div>


 
<?php require APP_ROOT.'public/bottom.php';?>
