<?php if (!defined('THINK_PATH')) exit(); require APP_ROOT.'public/top.php';?>
<link rel="stylesheet" href="css/case.css">
<div class="sub-banner" style="background-image: url(http://oa.vanceair.com/imgs/image/20181204/20181204095733483348.jpg)"></div>
<?php if(strpos($_SERVER["QUERY_STRING"],'classify_id=207')){ ?>
    <div class="section-title">
        <h2><?php $classify=M('classify')->where(array('classify_id'=>207))->find();echo $classify['classify_name'];?></h2>
        <h3><?php $classify=M('classify')->where(array('classify_id'=>207))->find();echo $classify['en_name'];?></h3>
        <h4><?php $classify=M('classify')->where(array('classify_id'=>207))->find();echo $classify['classify_intro'];?></h4>
    </div>
    <ul class="case-nav">
        <?php $list=M('classify')->where(array('classify_pid'=>207))->order('date asc')->select(); foreach($list as $k=>$v){ ?>
            <li><a href="http://www.fansinn.com/case-16.html" title="<?php $classify=M('classify')->where(array('classify_id'=>$v['classify_id']))->find();echo $classify['classify_name'];?> " class="current"><?php $classify=M('classify')->where(array('classify_id'=>$v['classify_id']))->find();echo $classify['classify_name'];?> </a></li>
        <?php }?>
    </ul>
<div class="location">
    <i class="iconfont icon-shouyeshouye3"></i> 您现在的位置：<a href="http://www.fansinn.com/index.html"> 首页 </a>
    <i class="iconfont icon-icon-arrowright"></i><a href="http://www.fansinn.com/case.html"> 服务案例  </a>
</div>
<div class="caselist">
    <?php $servicecase=M()->table('index_servicecase n,index_relevance r')->where('r.classify_id =207 and r.content_id=n.servicecase_id')->order('date desc')->select();foreach($servicecase as $k=>$v){?>
        <div class="item">
            <a href="http://www.fansinn.com/showcase-1.html">
                <div class="img"><img src="<?php echo $v['case_img'];?>" alt="<?php echo $v['case_title'];?>"></div>
                <h3><?php echo $v['case_title'];?></h3>
            </a>
        </div>
    <?php }?>
</div>
<?php }elseif(strpos($_SERVER["QUERY_STRING"],'classify_id=215')){?>
    <div class="section-title">
        <h2><?php $classify=M('classify')->where(array('classify_id'=>207))->find();echo $classify['classify_name'];?></h2>
        <h3><?php $classify=M('classify')->where(array('classify_id'=>207))->find();echo $classify['en_name'];?></h3>
        <h4><?php $classify=M('classify')->where(array('classify_id'=>207))->find();echo $classify['classify_intro'];?></h4>
    </div>
    <ul class="case-nav">
        <?php $list=M('classify')->where(array('classify_pid'=>207))->order('date asc')->select(); foreach($list as $k=>$v){ ?>
            <li><a href="http://www.fansinn.com/case-16.html" title="<?php $classify=M('classify')->where(array('classify_id'=>$v['classify_id']))->find();echo $classify['classify_name'];?> " class="current"><?php $classify=M('classify')->where(array('classify_id'=>$v['classify_id']))->find();echo $classify['classify_name'];?> </a></li>
        <?php }?>
    </ul>
    <div class="location">
        <i class="iconfont icon-shouyeshouye3"></i> 您现在的位置：<a href="http://www.fansinn.com/index.html"> 首页 </a>
        <i class="iconfont icon-icon-arrowright"></i><a href="http://www.fansinn.com/case.html"> 企业办公案例  </a>
    </div>
    <div class="caselist">
        <?php $servicecase=M()->table('index_servicecase n,index_relevance r')->where('r.classify_id =215 and r.content_id=n.servicecase_id')->order('date desc')->select();foreach($servicecase as $k=>$v){?> 
            <div class="item">
                <a href="http://www.fansinn.com/showcase-1.html">
                    <div class="img"><img src="<?php echo $v['case_img'];?>" alt="<?php echo $v['case_title'];?>"></div>
                    <h3><?php echo $v['case_title'];?></h3>
                </a>
            </div>
        <?php }?>
    </div>
<?php }elseif(strpos($_SERVER["QUERY_STRING"],'classify_id=217')){?>
    <div class="section-title">
        <h2><?php $classify=M('classify')->where(array('classify_id'=>207))->find();echo $classify['classify_name'];?></h2>
        <h3><?php $classify=M('classify')->where(array('classify_id'=>207))->find();echo $classify['en_name'];?></h3>
        <h4><?php $classify=M('classify')->where(array('classify_id'=>207))->find();echo $classify['classify_intro'];?></h4>
    </div>
    <ul class="case-nav">
        <?php $list=M('classify')->where(array('classify_pid'=>207))->order('date asc')->select(); foreach($list as $k=>$v){ ?>
            <li><a href="http://www.fansinn.com/case-16.html" title="<?php $classify=M('classify')->where(array('classify_id'=>$v['classify_id']))->find();echo $classify['classify_name'];?> " class="current"><?php $classify=M('classify')->where(array('classify_id'=>$v['classify_id']))->find();echo $classify['classify_name'];?> </a></li>
        <?php }?>
    </ul>
    <div class="location">
        <i class="iconfont icon-shouyeshouye3"></i> 您现在的位置：<a href="http://www.fansinn.com/index.html"> 首页 </a>
        <i class="iconfont icon-icon-arrowright"></i><a href="http://www.fansinn.com/case.html"> 商业合作案例  </a>
    </div>
    <div class="caselist">
        <?php $servicecase=M()->table('index_servicecase n,index_relevance r')->where('r.classify_id =217 and r.content_id=n.servicecase_id')->order('date desc')->select();foreach($servicecase as $k=>$v){?> 
            <div class="item">
                <a href="http://www.fansinn.com/showcase-1.html">
                    <div class="img"><img src="<?php echo $v['case_img'];?>" alt="<?php echo $v['case_title'];?>"></div>
                    <h3><?php echo $v['case_title'];?></h3>
                </a>
            </div>
        <?php }?>
    </div>
<?php }elseif(strpos($_SERVER["QUERY_STRING"],'classify_id=218')){?>
    <div class="section-title">
        <h2><?php $classify=M('classify')->where(array('classify_id'=>207))->find();echo $classify['classify_name'];?></h2>
        <h3><?php $classify=M('classify')->where(array('classify_id'=>207))->find();echo $classify['en_name'];?></h3>
        <h4><?php $classify=M('classify')->where(array('classify_id'=>207))->find();echo $classify['classify_intro'];?></h4>
    </div>
    <ul class="case-nav">
        <?php $list=M('classify')->where(array('classify_pid'=>207))->order('date asc')->select(); foreach($list as $k=>$v){ ?>
            <li><a href="http://www.fansinn.com/case-16.html" title="<?php $classify=M('classify')->where(array('classify_id'=>$v['classify_id']))->find();echo $classify['classify_name'];?> " class="current"><?php $classify=M('classify')->where(array('classify_id'=>$v['classify_id']))->find();echo $classify['classify_name'];?> </a></li>
        <?php }?>
    </ul>
    <div class="location">
        <i class="iconfont icon-shouyeshouye3"></i> 您现在的位置：<a href="http://www.fansinn.com/index.html"> 首页 </a>
        <i class="iconfont icon-icon-arrowright"></i><a href="http://www.fansinn.com/case.html"> 商业合作案例  </a>
    </div>
    <div class="caselist">
        <?php $servicecase=M()->table('index_servicecase n,index_relevance r')->where('r.classify_id =218 and r.content_id=n.servicecase_id')->order('date desc')->select();foreach($servicecase as $k=>$v){?> 
            <div class="item">
                <a href="http://www.fansinn.com/showcase-1.html">
                    <div class="img"><img src="<?php echo $v['case_img'];?>" alt="<?php echo $v['case_title'];?>"></div>
                    <h3><?php echo $v['case_title'];?></h3>
                </a>
            </div>
        <?php }?>
    </div>
<?php }else{?>
<?php }?>
<?php require APP_ROOT.'public/foot.php';?>