<?php if (!defined('THINK_PATH')) exit(); require APP_ROOT.'public/top.php';?>

    <?php $news=M('news')->where(array('news_id'=>default_content_id(39)))->find();?>

     
    <div class="content">
       <div class="about">

            <h1><?php echo $news['news_title'] ?></h1>
            <center><img src="<?php echo $news['news_img'] ?>"></center>
            <span class="picContent">
            <?php echo $news['news_content'] ?>
            </span>


      <?php  $news_gt = M()->table('index_news n,index_relevance r')->where('r.classify_id ='.$classify_id.' and n.date > '.$news['date'].' and r.content_id=n.news_id')->order('date desc')->find(); if(!empty($news_gt)){?>
    <a class="page" href="<?php echo content_url($news_gt['type_id'],$news_gt['news_id']) ?>">上一条：<?php echo $news_gt['news_title'];?></a>
      <?php } else { ?>
    <a class="page">上一条：暂无记录</a>
      <?php }?>



      <?php  $news_lt = M()->table('index_news n,index_relevance r')->where('r.classify_id ='.$classify_id.' and n.date < '.$news['date'].' and r.content_id=n.news_id')->order('date asc')->find(); if(!empty($news_lt)){?>
    <a class="page" href="<?php echo content_url($news_lt['type_id'],$news_lt['news_id']) ?>">下一条：<?php echo $news_lt['news_title'];?></a>

      <?php } else {?>
  <a class="page">下一条：暂无记录</a>
      <?php }?>

          <?php  $cla= M('classify')->where(array('classify_id'=>$classify_id))->find();?> 

<a class="back" onclick="javascript:window.history.back();">返回列表</a> 



      </div>  
        
    </div>

<?php require APP_ROOT.'public/bottom.php';?>