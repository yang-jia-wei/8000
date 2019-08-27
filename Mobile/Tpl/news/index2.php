<?php require APP_ROOT.'public/top.php';?>
<div class="g00002">

<div class="p1YBnWInQjB">
<ul class="rjzLRSM0jVU">
<?php 
$list = M('classify')->where(array('classify_pid'=>$recursive_classify_id))->limit(3)->select();
foreach($list as $k=>$v){
?>
<li class="BHmjUvO06Ib"><a class="rmp86jRJvVB" href="<?php echo classify_url($v['type_id'],$v['classify_id']) ?>"><img class="tjFFvjHvsD9" src="<?php echo $v['classify_img']?>" /></a></li>
<?php }?>
</ul>
</div>


</div>
<?php require APP_ROOT.'public/bottom.php';?>
