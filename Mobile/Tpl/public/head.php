<!DOCTYPE html>
<html style="font-size: 67.5px;"><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no">
<meta content="yes" name="apple-mobile-web-app-capable">
<meta content="telephone=no" name="format-detection">
<meta name="Author" content="0431">

<?php $site = M('site')->where(array('version_id'=>1))->find();?>
<?php
$p=pg('p')==''?1:pg('p');
$classify_id=get_classify_id();
$content_id=pg('content_id');
$type_id=get_type_id();
$search=pg('search');
$recursive_classify_id=recursive_classify_id($classify_id,3)==''?3:recursive_classify_id($classify_id,3);
$mobile_url='mobile.php?'.$_SERVER["QUERY_STRING"];
if(file_exists('mobile.php')){?>

<?php }?>
<title><?php echo $site['title']?></title>
<meta name="keywords" content="<?php echo $site['keywords'];?>" />
<meta name="description" content="<?php echo $site['description'];?>" />

<link rel="stylesheet" type="text/css" href="css/master.css">
<link rel="stylesheet" type="text/css" href="css/subpage.css">
<link rel="stylesheet" type="text/css" href="css/child_vip.css">
<link rel="stylesheet" type="text/css" href="css/swiper.css">
<link rel="stylesheet" type="text/css" href="css/rec.css">
<script type="text/javascript" src="js/jquery.js"></script>
<link rel="stylesheet" type="text/css" href="js/swiper.css">
  
<script type="text/javascript" src="js/nav.js"></script>
  <script type="text/javascript" src="js/cart_icon.js"></script>
  <script type="text/javascript" src="js/swiper.js"></script>
  <script type="text/javascript" src="js/lihe.js"></script>
  
</head>


<body>

