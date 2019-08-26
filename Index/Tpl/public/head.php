<!DOCTYPE html>
<html class="js-enabled" lang="zh"><head>
    <meta http-equiv="Cache-Control" content="no-transform">
    <meta http-equiv="Cache-Control" content="no-siteapp">
    <meta name="mobile-agent" content="format=[wml|xhtml|html5]; url=url">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
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
    <title><?php echo $site['company_name'];?></title>
    <meta name="keywords" content="<?php echo $site['description'];?>">
    <link rel="shortcut icon" type="image/x-icon" href="http://cdn.vanceair.com/favicon.ico">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/owl.css">
    <link rel="stylesheet" href="css/font_498721_3yswmk2r7ta.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/lib.css">
    <script charset="utf-8" src="js/b.js">
    </script><script src="js/hm.js"></script>
    <script type="text/javascript" src="js/jquery_002.js"></script>
    <script type="text/javascript" src="js/lib.js"></script>
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript">
        function uaredirect(murl){
            try{
                if(document.getElementById("bdmark") != null) {
                    return
                }
                var urlhash = window.location.hash;
                if(!urlhash.match("fromapp")){
                    if((navigator.userAgent.match(/(iPhone|iPod|Android|ios|iPad)/i))){
                        location.replace(murl);
                    }
                }
            }catch(err){}
        }
        uaredirect("/m/");
    </script>
    <link rel="stylesheet" href="css/layer.css" id="layuicss-layer"><script src="js/pc_nb.js" charset="UTF-8"></script><link rel="stylesheet" type="text/css" href="css/main.css"><script type="text/javascript" src="js/poll.js" id="id_jsonp_bridge_1566781322795_8258239551258506" charset="utf-8"></script></head>
<body>


<div class="wrapper">
    <div class="header">
        <div class="top">
            <div class="flex-sb container">
                <div class="welcome" id="welcome"><a href="javascript:void(0)" class="cs" id="cs"><i class="iconfont icon-dingwei"></i><?php echo $site['description'];?></a>
                    <!-- <div id="citylist"></div> -->
                </div>

                <div class="mobile flex-fe">
                </div>

            </div>
        </div>
        <div class="flex-sb container">
            <div class="logo"><a href="http://www.fansinn.com/index.html" title="南宁上门除甲醛_广西甲醛检测治理_空气净化器租赁_装修家具除味 南宁凡斯环保室内除甲醛  空气治理净化公司"><img src="images/logo.png" alt="南宁上门除甲醛_广西甲醛检测治理_空气净化器租赁_装修家具除味 南宁凡斯环保室内除甲醛  空气治理净化公司"></a></div>
            <div class="menu">
                <nav class="navbar navbar-default navbar-mobile bootsnav on">
                    <div class="collapse navbar-collapse" id="navbar-menu">
<!--                        导航栏   -->
                        <ul class="nav navbar-nav">

                            <?php $list=M('classify')->where(array('classify_pid'=>2))->order('date asc')->select();
                            foreach($list as $k=>$v){?>
                            <?php $listcs=M('classify')->where(array('classify_pid'=>$v['classify_id']))->order('date asc')->find();?>
                            <li class="dropdown">
                                <a href="<?php echo classify_url($v['type_id'],$v['classify_id']);?>" title="<?php echo $v['classify_name'];?>" class="dropdown-toggle" data-toggle="dropdown"><?php echo $v['classify_name'];?></a>
                                    <?php if($listcs['classify_id']!=''){ ?>
                                <ul class="dropdown-menu animated">
                                    <?php $list2=M('classify')->where(array('classify_pid'=>$v['classify_id']))->order('date asc')->select();
                                    foreach($list2 as $k2=>$v2){?>
                                    <li><a href="<?php echo classify_url($v['type_id'],$v['classify_id']);?>" title="室内空气治理"><?php echo $v2['classify_name'];?></a></li>
                                    <?php }?>
                                </ul>
                                    <?php }?>
                            </li>
                            <?php }?>


                        </ul>
                    </div>
                </nav>
            </div>
            <div class="tel icon">132-9770-6609<br><span>187-0777-3499</span></div>
        </div>
    </div>
