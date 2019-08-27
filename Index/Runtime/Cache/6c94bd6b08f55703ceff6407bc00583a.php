<?php if (!defined('THINK_PATH')) exit(); require APP_ROOT.'public/top.php';?>
<link rel="stylesheet" href="css/service.css">
<div class="sub-banner" style="background-image: url(http://oa.vanceair.com/imgs/image/20181204/20181204234022752275.jpg)"></div>
<div class="location">
    <i class="iconfont icon-shouyeshouye3"></i> 您现在的位置：<a href="http://www.fansinn.com/index.html"> 首页 </a>
    <i class="iconfont icon-icon-arrowright"></i><a href="http://www.fansinn.com/service-25.html"> 室内空气治理产品 </a>
</div>
<div class="products">
    <div class="pro-title">
        <b>室内空气治理产品</b>
        <p>
            The second step: indoor air control
        </p>
    </div>
    <ul class="pro-list flex-sb">
        <?php $goods=M()->table('index_goods n,index_relevance r')->where('r.classify_id =213 and r.content_id=n.goods_id')->order('date desc')->select();foreach($goods as $k=>$v){?>
        <li>
            <div class="img">
                <img src="<?php echo $v['goods_img'];?>">
            </div>
            <div class="info">
                <div class="title">
                    <h4>
                        <?php echo $v['goods_name'];?>
                    </h4>
                    <span><?php echo $v['goods_intro'];?></span>
                </div>
                <p>
                    <?php echo $v['goods_content'];?>
                </p>
            </div>
        </li>
        <?php }?>
    </ul>
</div>
<?php require APP_ROOT.'public/foot.php';?>