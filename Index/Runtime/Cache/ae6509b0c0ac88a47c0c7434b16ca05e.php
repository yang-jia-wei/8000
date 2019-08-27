<?php if (!defined('THINK_PATH')) exit(); require APP_ROOT.'public/top.php';?>
<link rel="stylesheet" href="css/case.css">


<div class="sub-banner" style="background-image: url(http://oa.vanceair.com/imgs/image/20181204/20181204095733483348.jpg)"></div>
<div class="location">
    <i class="iconfont icon-shouyeshouye3"></i> 您现在的位置：<a href="http://www.fansinn.com/index.html"> 首页 </a>
    <i class="iconfont icon-icon-arrowright"></i><a href="http://www.fansinn.com/case.html"> 行业动态 </a>
</div>
<div class="case">
    <div class="section-title">
        <h2>新闻中心</h2>
        <h3>NEWS CENTER</h3>
    </div>
    <ul class="case-nav" style="margin-bottom: 50px;">

        <li><a href="http://www.fansinn.com/news-20.html" title="公司新闻">公司新闻</a></li>
        <li><a href="http://www.fansinn.com/news-21.html" class="cur" title="行业动态">行业动态</a></li>
        <li><a href="http://www.fansinn.com/news-22.html" title="环保知识">环保知识</a></li>
    </ul>
    <ul class="news-list flex-sb container">
        <?php $news=M()->table('index_news n,index_relevance r')->where('r.classify_id =220 and r.content_id=n.news_id')->order('date desc')->select();foreach($news as $k=>$v){?>
            <li><a href="http://www.fansinn.com/shownews-398.html">
                    <div class="img" style="background-image: url(<?php echo $v['news_img'];?>)"></div>
                    <div class="info">
                        <div class="title"><?php echo $v['news_title'];?></div>
                        <p><?php echo $v['news_intro'];?></p>
                    </div>
                </a></li>
        <?php }?>



    </ul>
</div>
<div class="service-ico">
    <ul>
        <li class="wow fadeInUp" data-wow-delay="0s">
            <div class="ico"><img src="images/f1.png"></div>
            <h2>专业除甲醛</h2>
            <p>13年治理经验</p>
        </li>
        <li class="wow fadeInUp" data-wow-delay="0.1s">
            <div class="ico"><img src="images/f2.png"></div>
            <h2>10年质保</h2>
            <p>终生售后服务</p>
        </li>
        <li class="wow fadeInUp" data-wow-delay="0.2s">
            <div class="ico"><img src="images/f3.png"></div>
            <h2>进口产品</h2>
            <p>有效果更有保障</p>
        </li>
        <li class="wow fadeInUp" data-wow-delay="0.3s">
            <div class="ico"><img src="images/f4.png"></div>
            <h2>满意后再付款</h2>
            <p>不达标不收费</p>
        </li>
        <div class="clear"></div>
    </ul>
</div>
<div class="sub-banner" style="background-image: url(contact.jpg)"></div>

<!--    <div class="sub-contact">-->
<!--        <div class="container">-->
<!--            <div class="contact-title wow fadeInUp">-->
<!--                <h3>-->
<!--                    联系我们-->
<!--                </h3>-->
<!--                <p>-->
<!--                    Contact us-->
<!--                </p>-->
<!--            </div>-->
<!---->
<!--            <div class="contact-info wow fadeInUp">-->
<!--                <div class="contact-info-title"><h4>南宁市凡斯环保科技有限公司</h4><span>Contact information</span></div>-->
<!--                <p>咨询热线:  <b> 132-9770-6609</b></p>-->
<!--                <p>治理热线:  <b> 187-0777-3499</b></p>-->
<!--                <p>邮　　箱:  <b> fansinn@163.com</b></p>-->
<!--                <p>地　　址:   广西南宁市西乡塘区发展大道189号安吉华尔街工谷1号楼C座506-3</p>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<div class="service-ico">
    <ul>
        <li class="wow fadeInUp" data-wow-delay="0s">
            <div class="ico"><img src="images/f1.png"></div>
            <h2>专业除甲醛</h2>
            <p>13年治理经验</p>
        </li>
        <li class="wow fadeInUp" data-wow-delay="0.1s">
            <div class="ico"><img src="images/f2.png"></div>
            <h2>10年质保</h2>
            <p>终生售后服务</p>
        </li>
        <li class="wow fadeInUp" data-wow-delay="0.2s">
            <div class="ico"><img src="images/f3.png"></div>
            <h2>进口产品</h2>
            <p>有效果更有保障</p>
        </li>
        <li class="wow fadeInUp" data-wow-delay="0.3s">
            <div class="ico"><img src="images/f4.png"></div>
            <h2>满意后再付款</h2>
            <p>不达标不收费</p>
        </li>
        <div class="clear"></div>
    </ul>
</div>

<?php require APP_ROOT.'public/foot.php';?>