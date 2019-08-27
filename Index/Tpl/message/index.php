<?php require APP_ROOT.'public/top.php';?>
<link rel="stylesheet" type="text/css" href="css/lease.css">
<div class="sub-banner" style="background-image: url(http://oa.vanceair.com/images/zl.jpg)"></div>
<section class="lease-pro">
    <div class="lease-title">
        <h3>
            热门净化器租赁品牌全覆盖
        </h3>
        <p>
            Brand full<br>
            coverage
        </p>
    </div>
    <ul class="lease-pro-list">
        <?php $lease=M()->table('index_lease n,index_relevance r')->where('r.classify_id =247 and r.content_id=n.lease_id')->order('date desc')->select();foreach($lease as $k=>$v){?>

        <li>
            <div class="title">
                <h4>
                    <?php echo $v['subtitle'];?>
                </h4>
                <span><?php echo $v['title'];?></span>
            </div>
            <div class="img">
                <img src="<?php echo $v['picture'];?>">
            </div>
            <div class="info">
                <?php echo $v['details'];?>
            </div>
        </li>
        <?php }?>
    </ul>
</section>
<section class="lease-why">
    <div class="lease-title">
        <h3>
            <?php $classify=M('classify')->where(array('classify_id'=>248))->find();echo $classify['classify_name'];?>
        </h3>
        <p>
            <?php $classify=M('classify')->where(array('classify_id'=>248))->find();echo $classify['sub_name'];?><br>
            <?php $classify=M('classify')->where(array('classify_id'=>248))->find();echo $classify['en_name'];?>
        </p>
    </div>
    <ul class="lease-why-list">
        <?php $lease=M()->table('index_lease n,index_relevance r')->where('r.classify_id =248 and r.content_id=n.lease_id')->order('date desc')->select();foreach($lease as $k=>$v){?>

        <li>
            <div class="ico">
                <i class="iconfont"><img src="<?php echo $v['picture'];?>" alt=""></i>
            </div>
            <div class="info">
                <h4>
                    <?php echo $v['subtitle'];?>
                </h4>
                <p>
                    <?php echo $v['details'];?>
                </p>
            </div>
        </li>
        <?php }?>
        
    </ul>
</section>
<section class="lease-solution">
    <div class="lease-solution-main">
        <div class="lease-solution-l">
            <div class="title">
                <?php $classify=M('classify')->where(array('classify_id'=>249))->find();echo $classify['classify_name'];?>
            </div>
            <?php $lease=M()->table('index_lease n,index_relevance r')->where('r.classify_id =249 and r.content_id=n.lease_id')->order('date desc')->select();foreach($lease as $k=>$v){?>
            <div class="text">
                <h4>
                    <?php echo $v['subtitle'];?>
                </h4>
                <p>
                    <?php echo $v['details'];?>
                </p>
            </div>
            <div class="img">
                <img src="<?php echo $v['picture'];?>">
            </div>
            <?php }?>
        </div>
        <div class="lease-solution-r" style="background-image:url(http://cdn.vanceair.com/lease/bg.jpg);height:630px;">
        </div>
    </div>
    <div class="lease-solution-list">
        <div class="title">
            <h3>
                <?php $classify=M('classify')->where(array('classify_id'=>250))->find();echo $classify['classify_name'];?>
            </h3>
            <p>
                <?php $classify=M('classify')->where(array('classify_id'=>250))->find();echo $classify['en_name'];?>
            </p>
        </div>
        <ul class="lease-solution-ul">
            <?php $lease=M()->table('index_lease n,index_relevance r')->where('r.classify_id =250 and r.content_id=n.lease_id')->order('date desc')->select();foreach($lease as $k=>$v){?>
            <li>
                <img src="<?php echo $v['picture'];?>">
                <p>
                    <?php echo $v['subtitle'];?>
                </p>
            </li>
            <?php }?>
        </ul>
    </div>
</section>
<section class="lease-process">
    <div class="lease-title">
        <h3>
            <?php $classify=M('classify')->where(array('classify_id'=>251))->find();echo $classify['classify_name'];?>
        </h3>
        <p>
            <?php $classify=M('classify')->where(array('classify_id'=>251))->find();echo $classify['sub_name'];?><br>

            <?php $classify=M('classify')->where(array('classify_id'=>251))->find();echo $classify['en_name'];?>
        </p>
    </div>
    <ul class="lease-list">
        <?php $lease=M()->table('index_lease n,index_relevance r')->where('r.classify_id =251 and r.content_id=n.lease_id')->order('date desc')->select();
        foreach($lease as $k=>$v){
            ?>
            <li>
            <div class="title">
                <h4>
                    <?php echo $v['subtitle'];?>
                </h4>
                <p>
                    <?php echo $v['details'];?>
                </p>
            </div>
            <div class="ico">
                <i class="iconfont"><img src="<?php echo $v['picture'];?>" alt=""></i><span>
			<div>
               <?php echo $k+1;?>
			</div>
</span>
            </div>
        </li>

        <?php }?>

    </ul>
</section>
<section class="lease-case">
    <div class="lease-title">
        <h3>
            <?php $classify=M('classify')->where(array('classify_id'=>252))->find();echo $classify['classify_name'];?>
        </h3>
        <p>
            <?php $classify=M('classify')->where(array('classify_id'=>252))->find();echo $classify['sub_name'];?><br>
            <?php $classify=M('classify')->where(array('classify_id'=>252))->find();echo $classify['en_name'];?>
        </p>
    </div>
    <ul class="lease-case-ul">
        <?php $lease=M()->table('index_lease n,index_relevance r')->where('r.classify_id =252 and r.content_id=n.lease_id')->order('date desc')->select();foreach($lease as $k=>$v){?>
        <li>
            <img src="<?php echo $v['picture'];?>">
            <p>
                <?php echo $v['subtitle'];?>
            </p>
        </li>
        <?php }?>
    </ul>
    <ul class="client-list flex-fs wow fadeInUp">
        <?php $lease=M()->table('index_lease n,index_relevance r')->where('r.classify_id =254 and r.content_id=n.lease_id')->order('date desc')->select();foreach($lease as $k=>$v){?>
        <li>
            <a href="http://www.fansinn.com/" title="<?php echo $v['subtitle'];?>"><img src="<?php echo $v['picture'];?>"></a>
        </li>
        <?php }?>
    </ul>
</section>
<?php require APP_ROOT.'public/foot.php';?>
