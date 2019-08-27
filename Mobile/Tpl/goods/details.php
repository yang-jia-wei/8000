<?php require APP_ROOT.'public/top.php';?>

    <?php $goods=M('goods')->where(array('goods_id'=>default_content_id(39)))->find();?>

     
    <div class="content">
       <div class="about">

            <h1><?php echo $goods['goods_name'] ?></h1>
            <center><img src="<?php echo $goods['goods_img'] ?>"></center>
            <span class="picContent">
            <?php echo $goods['goods_content'] ?>
            </span>


      <?php  $goods_gt = M()->table('index_goods n,index_relevance r')->where('r.classify_id ='.$classify_id.' and n.date > '.$goods['date'].' and r.content_id=n.goods_id')->order('date desc')->find(); 

       if(!empty($goods_gt)){?>
    <a class="page" href="<?php echo content_url($goods_gt['type_id'],$goods_gt['goods_id']) ?>">上一条：<?php echo $goods_gt['goods_name'];?></a>
      <?php } else { ?>
    <a class="page">上一条：暂无记录</a>
      <?php }?>



      <?php  $goods_lt = M()->table('index_goods n,index_relevance r')->where('r.classify_id ='.$classify_id.' and n.date < '.$goods['date'].' and r.content_id=n.goods_id')->order('date asc')->find();  if(!empty($goods_lt)){?>
    <a class="page" href="<?php echo content_url($goods_lt['type_id'],$goods_lt['goods_id']) ?>">下一条：<?php echo $goods_lt['goods_name'];?></a>

      <?php } else {?>
  <a class="page">下一条：暂无记录</a>
      <?php }?>

          <?php   $cla= M('classify')->where(array('classify_id'=>$classify_id))->find();?> 

<a class="back" onclick="javascript:window.history.back();">返回列表</a> 



      </div>  
        
    </div>

<?php require APP_ROOT.'public/bottom.php';?>
