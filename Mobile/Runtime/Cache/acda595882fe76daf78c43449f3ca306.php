<?php if (!defined('THINK_PATH')) exit(); require APP_ROOT.'public/top.php';?>


     
   <div class="content">
        <div class="about">

         <?php $text = M()->table('index_text t,index_relevance r')->where('r.classify_id ='.$classify_id.' and r.content_id=t.text_id')->find(); echo $text['text_content']; ?>
            　　
        </div>
    </div>
<?php require APP_ROOT.'public/bottom.php';?>