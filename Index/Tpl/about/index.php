<?php require APP_ROOT.'public/top.php';?>
<link rel="stylesheet" href="css/about.css">
<div class="about-banner" style="background-image: url(http://oa.vanceair.com/images/about0.jpg)"></div>
<div class="main">
    <section class="about">
        <div class="about-title">
            <h3>
                <?php $classify=M('classify')->where(array('classify_id'=>255))->find();echo $classify['classify_name'];?>
            </h3>
            <p>
                <?php $classify=M('classify')->where(array('classify_id'=>255))->find();echo $classify['sub_name'];?><br>
                <?php $classify=M('classify')->where(array('classify_id'=>255))->find();echo $classify['en_name'];?>
            </p>
        </div>
        <div class="about-info">
            <div class="about-img wow fadeInLeft" data-wow-delay="0s">
                <img src="<?php $classify=M('classify')->where(array('classify_id'=>255))->find();echo $classify['classify_img'];?>">
            </div>
            <div class="about-txt wow fadeInRight" data-wow-delay="0.1s">
                <?php $classify=M('classify')->where(array('classify_id'=>255))->find();echo $classify['classify_intro'];?>
            </div>
        </div>
        <div class="about-wenhua">
            <div class="about-wh-item wow fadeInUp" data-wow-delay="0.2s" style="background-image:url(http://cdn.vanceair.com/about/about-wh-1.png);">
                <p>
                    企业使命:让健康环境留在千家万户
                </p>
                <span>Mission</span>
            </div>
            <div class="about-wh-item wow fadeInUp" data-wow-delay="0.3s" style="background-image:url(http://cdn.vanceair.com/about/about-wh-2.png);">
                <p>
                    企业宗旨:还您一个健康的办公、生活空间
                </p>
                <span>Purpose</span>
            </div>
            <div class="about-wh-item wow fadeInUp" data-wow-delay="0.4s" style="background-image:url(http://cdn.vanceair.com/about/about-wh-3.png);">
                <p>
                    企业愿景:传播环境正能量率先行业发展
                </p>
                <span>Vision</span>
            </div>
        </div>
        <div class="about-title">
            <h3>
                <?php $classify=M('classify')->where(array('classify_id'=>256))->find();echo $classify['classify_name'];?>
            </h3>
            <p>
                <?php $classify=M('classify')->where(array('classify_id'=>256))->find();echo $classify['sub_name'];?><br>
                <?php $classify=M('classify')->where(array('classify_id'=>256))->find();echo $classify['en_name'];?>
            </p>
        </div>
        <div class="about-service">
            <div class="about-img wow fadeInLeft" data-wow-delay="0s">
                <img src="<?php $classify=M('classify')->where(array('classify_id'=>256))->find();echo $classify['classify_img'];?>">
            </div>
            <div class="about-txt wow fadeInRight" data-wow-delay="0.1s">
                <?php $classify=M('classify')->where(array('classify_id'=>256))->find();echo $classify['classify_intro'];?>
            </div>
        </div>
        <br>
        <div class="about-mt">
            <div class="about-title">
                <h3>
                    <?php $classify=M('classify')->where(array('classify_id'=>257))->find();echo $classify['classify_name'];?>
                </h3>
                <p>
                    <?php $classify=M('classify')->where(array('classify_id'=>257))->find();echo $classify['sub_name'];?><br>
                    <?php $classify=M('classify')->where(array('classify_id'=>257))->find();echo $classify['en_name'];?>
                </p>
            </div>
            <ul class="about-mt-ul">
                <li class="wow fadeInUp" data-wow-delay="0.1s">
                    <br>
                </li>
                <li class="wow fadeInUp" data-wow-delay="0.2s">
                    <br>
                </li>
                <li class="wow fadeInUp" data-wow-delay="0.3s">
                    <br>
                </li>
                <li class="wow fadeInUp" data-wow-delay="0.4s">
                    <img src="<?php $classify=M('classify')->where(array('classify_id'=>257))->find();echo $classify['classify_img'];?>">
                </li>
                <li class="wow fadeInUp" data-wow-delay="0.5s">
                    <img src="<?php $classify=M('classify')->where(array('classify_id'=>257))->find();echo $classify['page_img'];?>">
                </li>
            </ul>
        </div>
    </section>
</div>
<?php require APP_ROOT.'public/foot.php';?>
