<?php if (!defined('THINK_PATH')) exit(); require APP_ROOT.'public/top.php';?>
<link rel="stylesheet" href="css/service.css">
<div class="sub-banner" style="background-image: url(http://oa.vanceair.com/imgs/image/20181203/20181203210261166116.jpg)"></div>
<div class="location">
    <i class="iconfont icon-shouyeshouye3"></i> 您现在的位置：<a href="http://www.fansinn.com/index.html"> 首页 </a>
    <i class="iconfont icon-icon-arrowright"></i><a href="http://www.fansinn.com/service-13.html"> 服务项目 </a>
</div>
<section class="demand">
    <div class="container">
        <div class="s-title">
            <b><?php $classify=M('classify')->where(array('classify_id'=>214))->find();echo $classify['classify_name'];?></b> <span>Eight demands</span>
        </div>
        <ul class="demand-ul flex-sb">
            <?php $goods=M()->table('index_goods n,index_relevance r')->where('r.classify_id =214 and r.content_id=n.goods_id')->order('date desc')->select(); foreach($goods as $k=>$v){ ?>
            <li class="wow fadeInUp" data-wow-delay="0s">
                <div class="ico">
                    <img src="<?php echo $v['goods_img'];?>">
                </div>
                <div class="info">
                    <h4>
                        <?php echo $v['goods_name'];?>
                    </h4>
                    <p>
                        <?php echo $v['goods_intro'];?>
                    </p>
                </div>
            </li>
            <?php }?>
        </ul>
    </div>
</section>
<?php require APP_ROOT.'public/foot.php';?>