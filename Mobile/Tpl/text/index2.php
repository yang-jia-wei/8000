<!DOCTYPE html>
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta http-equiv="Content-Type" content="text/html">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="renderer" content="webkit">
<meta http-equiv="Cache-Control" content="no-transform ">
<?php
// $site = get_site();
// 
$site =get_site();

$p=pg('p')==''?1:pg('p');
$classify_id=get_classify_id();
$content_id=pg('content_id');
$type_id=get_type_id();
$search=pg('search');
$member=session('member');
$member_id=$member['member_id'];
$recursive_classify_id=recursive_classify_id($classify_id,3)==''?3:recursive_classify_id($classify_id,3);
$cart_num=M('cart')->where(array('member_id'=>$member['member_id']))->count();
if($cart_num=='')$cart_num=0;
$balance=M('account')->where(array('member_id'=>$member_id))->order('account_id desc')->getfield('balance');
if($balance=='')$balance=0.00;
$mobile_url='mobile.php?'.$_SERVER["QUERY_STRING"];
?>
<title><?php echo $site['title'];?></title>
<meta name="keywords" content="<?php echo $site['keywords'];?>" />
<meta name="description" content="<?php echo $site['description'];?>" />
</head>
<body h="1134">
<div style="width:100%;height:100px;background:rgb(69, 28, 22);">
	 <div style="width:1200px;height:100px;margin:0 auto;">
	 	 <div class="login">
	 	 	<img src="<?php echo $site['logo_img'];?>">
	 	 </div>
	 	 <a class="zheshoa" href="english.php">English</a>
	 	 <div class="daohang">
	 	 	<ul>
<?php $list=M('classify')->where(array('classify_pid'=>2))->order('date asc')->select();foreach($list as $k=>$v){?> 
	 	 		<li><a class="daoziti" href="<?php echo classify_url($v['type_id'],$v['classify_id']);?>"><?php echo $v['classify_name'];?></a></li>
<?php }?>
	 	 	</ul>
	 	 </div>
	 	 
	 </div>
</div>

<?php $listte=M('classify')->where(array('classify_id'=>$classify_id))->order('date asc')->find();?>
<div style="width:100%;height:160px;background:rgb(249, 247, 248);">
	<div style="width:1200px;height:160px;margin:0 auto;">
		<div style="width:780px;float:left;margin-top:30px;">
			<div>
			<span style="font-size: 24px;color: rgb(118, 40, 19);font-weight:bold;line-height:40px"><?php echo $listte['classify_name'];?></span>
			<span style="text-transform: uppercase;font-size: 16px;color: rgb(153, 153, 153);line-height:40px">/<?php echo $listte['en_name'];?></span>
			</div>
			<div style="font-size: 14px;">你的当前位置为：<a style="color:rgb(102, 102, 102);"  class="xsfEM6Zg6i" href="index.php">网站首页 </a>
    <?php 
if($classify_id!='')
{
	function recursive_crumbs($classify_id)
	{
		$classify=M('classify')->where(array('classify_id'=>$classify_id))->find();
		if($classify['level_id']>2)
		{
			recursive_crumbs($classify['classify_pid']);
			?>
			≡ <a  style="color:rgb(102, 102, 102);" class="BMM5w72wMJ" href="<?php echo classify_url($classify['type_id'],$classify['classify_id']);?>"><?php echo $classify['classify_name'];?>
    <?php
		}
	}
	recursive_crumbs($classify_id);
}?>
</div>
		</div>
		<div class="xiaotu" style="width:400px;float:right;">
			<img style="<?php if($listte['page_img']==''){ echo 'display:none;'; } ?>" src="<?php echo $listte['page_img'];?>">
		</div>
	</div>
</div>
<div style="width:1200px;height:auto;margin:0 auto;padding:20px 0;">
	<div class="zhedgis">
<?php $text=M()->table('index_text n,index_relevance r')->where('r.classify_id ='.$classify_id.' and r.content_id=n.text_id')->order('date desc')->find();?>
<?php echo $text['text_content'];?>
	</div>
</div>
<div style="width:100%;height:100px;background:#451c16;">
	<div style="width:1200px;height:auto;margin:0 auto;padding:35px 0;text-align:center;">
		<?php echo $site['inscribe'];?>
	</div>
</div>
<style type="text/css">
body,div,dl,dt,dd,ul,ol,li,h1,h2,h3,h4,h5,h6,pre,form,fieldset,input,textarea,p,blockquote,th,td{padding:0;margin:0;list-style-type:none;vertical-align:middle;-webkit-text-size-adjust: none;}
dl,dt,dd,ul,ol,li,h1,h2,h3,h4,h5,h6,pre,form,fieldset,input,button,select,option,textarea,p,blockquote,th,td{padding:0;margin:0;}
div{margin:0 auto;}
a{text-decoration:none;}
html,body{ width:100%;background:#fff; height:100%;margin:0px;overflow:visible}
.login{padding: 20px 10px;width: auto;float:left;}
.login img{max-height: 60px;}
.zheshoa{display: block;width: 100px;height:30px;border: 2px solid #816664;float:right; text-align: center;line-height: 30px;color: #fff;margin-top: 30px; }
.daohang{float:right;margin-right: 200px}
.daohang ul li{padding: 15px;width: auto;float: left;line-height: 70px;}
.daoziti{color: #fff;font-size: 16px;}
.daoziti:hover{color: #fff;font-size: 16px;font-weight: bold;}
.xiaotu{margin-top: 20px;text-align: right;}
.xiaotu img{max-height: 120px;}
.zhedgis img{max-width:100%;}
</style>
</body>
</html>