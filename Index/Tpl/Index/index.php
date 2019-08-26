<?php require APP_ROOT.'public/head.php';?>
    <div class="slider">
        <ul class="slides" style="width: 9600px; transition: transform 500ms cubic-bezier(0.165, 0.84, 0.44, 1) 0s; transform: translate3d(-5760px, 0px, 0px);">
            <li class="slide" style="width: 1920px;">
                <div class="box" style="background-image:url(http://oa.vanceair.com/maps/201811221518557902.jpg);"><a target="_blank" title="办公室除甲醛" href=""></a></div>
            </li>
            <li class="slide" style="width: 1920px;">
                <div class="box" style="background-image:url(http://oa.vanceair.com/imgs/image/20190124/20190124174528462846.jpg);"><a target="_blank" title="2018中国国际进口博览会除甲醛服务商" href=""></a>
                </div>
            </li>
            <li class="slide" style="width: 1920px;">
                <div class="box" style="background-image:url(http://oa.vanceair.com/imgs/image/20190124/20190124173449314931.jpg);"><a target="_blank" title="国内独家引进日本纯进口芬多精治理产品" href=""></a>
                </div>
            </li>
            <li class="slide" style="width: 1920px;">
                <div class="box" style="background-image:url(http://oa.vanceair.com/maps/201811221518557902.jpg);"><a target="_blank" title="办公室除甲醛" href=""></a>
                </div>
            </li>
            <li class="slide" style="width: 1920px;">
                <div class="box" style="background-image:url(http://oa.vanceair.com/imgs/image/20190124/20190124174528462846.jpg);"><a target="_blank" title="2018中国国际进口博览会除甲醛服务商" href=""></a>
                </div>
            </li>
        </ul>
        <div class="arrowsWrapper">
            <a href="#" class="slider-arrow slider-arrow--right" data-distance="1"></a>
            <a href="#" class="slider-arrow slider-arrow--left" data-distance="-1"></a>
        </div>
        <div class="slider__nav" style="left: 50%; width: 0px; margin-left: -960px;">
            <a href="#" class="slider__nav-item" data-distance="0"></a>
            <a href="#" class="slider__nav-item" data-distance="1"></a>
            <a href="#" class="slider__nav-item slider__nav-item--current" data-distance="2"></a>
        </div>
    </div>
    <script src="js/slider.js"></script>
<!--首页中间（凡斯环保）-->
    <section class="fshb">
        <div class="s-title">
            <b><?php $classify=M('classify')->where(array('classify_id'=>222))->find();echo $classify['classify_name'];?></b>
            <span><?php $classify=M('classify')->where(array('classify_id'=>222))->find();echo $classify['en_name'];?></span>
            <p><?php $classify=M('classify')->where(array('classify_id'=>222))->find();echo $classify['classify_intro'];?></p>
        </div>
        <ul class="fshb-list flex-sb">
            <?php $goods=M()->table('index_goods n,index_relevance r')->where('r.classify_id =222 and r.content_id=n.goods_id')->order('date desc')->select();
            foreach($goods as $k=>$v){
                ?>
            <li class="wow fadeInUp" data-wow-delay="0s">
                <a href="" title="<?php echo $v['goods_name'];?>">
                    <div class="img"><img src="<?php echo $v['goods_img'];?>" title="<?php echo $v['goods_name'];?>"></div>
                    <div class="title"><?php echo $v['goods_name'];?></div>
                    <div class="txt"><?php echo $v['goods_intro'];?></div>
                </a>
            </li>
            <?php }?>
        </ul>
    </section>
<!--首页中间（为用户解决八大需求）-->
    <section class="demand">
        <div class="container">
            <div class="s-title">
                <b><?php $classify=M('classify')->where(array('classify_id'=>214))->find();echo $classify['classify_name'];?></b>
                <span><?php $classify=M('classify')->where(array('classify_id'=>214))->find();echo $classify['en_name'];?></span>
            </div>
            <ul class="demand-ul flex-sb">
                <ul class="demand-ul flex-sb">
                    <?php $goods=M()->table('index_goods n,index_relevance r')->where('r.classify_id =214 and r.content_id=n.goods_id')->order('date desc')->select();
                    foreach($goods as $k=>$v){
                        ?>
                    <li class="wow fadeInUp" data-wow-delay="0s"><a href="" title="<?php echo $v['goods_name'];?>">
                            <div class="ico"><img src="<?php echo $v['goods_img'];?>" title="<?php echo $v['goods_name'];?>"></div>
                            <div class="info">
                                <h4><?php echo $v['goods_name'];?></h4>
                                <p><?php echo $v['goods_intro'];?></p>
                            </div></a>
                    </li>
                    <?php }?>
                </ul>
            </ul>

        </div>
    </section>
<!--定制解决方案，质保十年-->
    <section class="solutions">
        <div class="container flex-sb">
            <div class="solutions-right">
                <div class="s-title-left wow fadeInUp" data-wow-delay="0s">
                    <b><?php $classify=M('classify')->where(array('classify_id'=>224))->find();echo $classify['classify_name'];?></b>
                    <span><?php $classify=M('classify')->where(array('classify_id'=>224))->find();echo $classify['en_name'];?></span>
                </div>
                <ul class="solutions-ul">
                    <?php $goods2=M()->table('index_goods n,index_relevance r')->where('r.classify_id =224 and r.content_id=n.goods_id')->order('date desc')->select();
                    foreach($goods2 as $k2=>$v2){
                        ?>
                    <li class="flex-sb wow fadeInUp" data-wow-delay="0.1s">
                        <div class="ico"><i class="iconfont icon-xianchangkancha"></i></div>
                        <div class="info">
                            <h4><?php echo $v2['goods_name'];?></h4>
                            <p><?php echo $v2['goods_intro'];?></p>
                        </div>
                    </li>
                    <?php }?>
                </ul>
            </div>
            <div class="solutions-left">
                <div style="display: none">您的困扰，一个电话，凡斯帮您都解决！400-0970-078</div>
            </div>
        </div>
    </section>
<!--进口产品，安全有保障-->
    <section class="products">
        <div class="container">
            <div class="s-title wow fadeInUp" data-wow-delay="0s">
                <b><?php $classify=M('classify')->where(array('classify_id'=>225))->find();echo $classify['classify_name'];?></b>
                <span><?php $classify=M('classify')->where(array('classify_id'=>225))->find();echo $classify['en_name'];?></span>
            </div>
            <div class="products-con">
                <ul class="products-tips flex-ce wow fadeInUp" data-wow-delay="0.1s">
                    <?php $goods3=M()->table('index_goods n,index_relevance r')->where('r.classify_id =225 and r.content_id=n.goods_id')->order('date desc')->select();
                    foreach($goods3 as $k=>$v){
                        ?>
                    <li><?php echo $v['goods_name'];?></li>
                    <?php }?>
                </ul>
                <div class="products-baogao flex-ce">
                    <?php $goods4=M()->table('index_goods n,index_relevance r')->where('r.classify_id =226 and r.content_id=n.goods_id')->order('date desc')->select();
                    foreach($goods4 as $k=>$v){
                        ?>
                    <dl class="flex-ce wow fadeInUp" data-wow-delay="0.2s">
                        <dt><?php echo $v['goods_name'];?></dt>
                        <dd><?php echo $v['goods_content'];?></dd>
                    </dl>
                    <?php }?>
                </div>
            </div>
        </div>
    </section>
<!--服务案例-->
    <section class="service-case">
        <div class="container">
            <div class="s-title wow fadeInUp" data-wow-delay="0s">
                <b><?php $classify=M('classify')->where(array('classify_id'=>227))->find();echo $classify['classify_name'];?></b>
                <span><?php $classify=M('classify')->where(array('classify_id'=>227))->find();echo $classify['en_name'];?></span>
            </div>
            <ul class="service-case-nav flex-ce wow fadeInUp" data-wow-delay="0.1s">
                <?php $goods5=M()->table('index_goods n,index_relevance r')->where('r.classify_id =227 and r.content_id=n.goods_id')->order('date desc')->select();
                foreach($goods5 as $k=>$v){
                    ?>
                <li><a href="" title="<?php echo $v['goods_name'];?> " class="cur"><?php echo $v['goods_name'];?> </a></li>
                <?php }?>
            </ul>
            <div id="caselist" class="owl-carousel wow fadeInUp owl-theme" data-wow-delay="0.2s" style="opacity: 1; display: block;">
                <div class="owl-wrapper-outer"><div class="owl-wrapper" style="width: 7380px; left: 0px; display: block; transition: all 800ms ease 0s; transform: translate3d(-2460px, 0px, 0px);">
                        <?php $goods6=M()->table('index_goods n,index_relevance r')->where('r.classify_id =227 and r.content_id=n.goods_id')->order('date desc')->select();
//                        dump($goods6);
                        foreach($goods6 as $k=>$v){?>
                        <div class="owl-item" style="width: 246px;">
                            <div class="item">
                                <a href="http://www.fansinn.com/showcase-1.html" title="阿科玛室内空气治理">
                                    <div class="img"><img src="<?php echo $v['goods_img'];?>" alt="阿科玛室内空气治理"></div>
                                    <div class="info">
                                        <div class="title">阿科玛室内空气治理</div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <?php }?>
                    </div>
                </div>

                <div class="owl-controls clickable"><div class="owl-pagination"><div class="owl-page"><span class=""></span></div><div class="owl-page"><span class=""></span></div><div class="owl-page active"><span class=""></span></div></div><div class="owl-buttons"><div class="owl-prev"><i class="iconfont icon-you"></i></div><div class="owl-next"><i class="iconfont icon-zuoyoujiantou"></i></div></div></div></div>
            <ul class="client-list flex-fs wow fadeInUp" data-wow-delay="0.3s">
                <?php $link=M()->table('index_link n,index_relevance r')->where('r.classify_id =229 and r.content_id=n.link_id')->order('date desc')->select();
                foreach($link as $k=>$v){
                    ?>
                <li><a href="" title="<?php echo $v['link_name'];?>"><img src="<?php echo $v['link_img'];?>"></a></li>
                <?php }?>
            </ul>


        </div></section>
    <!-- 净化器租赁 -->
    <section class="zl">
        <div class="s-title">
            <b><?php $classify=M('classify')->where(array('classify_id'=>230))->find();echo $classify['classify_name'];?></b>
            <span><?php $classify=M('classify')->where(array('classify_id'=>230))->find();echo $classify['en_name'];?></span>
            <p><?php $classify=M('classify')->where(array('classify_id'=>230))->find();echo $classify['sub_name'];?></p>
        </div>
        <div class="zllist">
            <ul>
                <?php $news=M()->table('index_news n,index_relevance r')->where('r.classify_id =230 and r.content_id=n.news_id')->order('date desc')->select();
                foreach($news as $k=>$v){
                    ?>
                <li class="wow fadeInUp" data-wow-delay="0.1s">
                    <div class="img z1"></div>
                    <h4><?php echo $v['news_title'];?></h4>
                    <p><?php echo $v['news_content'];?></p>
                </li>
                <?php }?>
            </ul>
        </div>
<!--        空气净化器-->
        <div class="prolist">
            <div class="p-title wow fadeInUp flex-fs" data-wow-delay="0.1s">
                <h2><?php $classify=M('classify')->where(array('classify_id'=>231))->find();echo $classify['classify_name'];?><span><?php $classify=M('classify')->where(array('classify_id'=>231))->find();echo $classify['en_name'];?></span></h2>
                <div class="pro-nav"><span>Blueair</span><span>IIECC</span><span>HealthWay</span></div>
            </div>
            <ul class="pro-cont flex-fs">
                <?php $goods=M()->table('index_goods n,index_relevance r')->where('r.classify_id =231 and r.content_id=n.goods_id')->order('date desc')->select();
                foreach($goods as $k=>$v){
                    ?>
                <li class="wow fadeInUp" data-wow-delay="0.2s"><a href="http://www.fansinn.com/lease.html">
                        <div class="img"><img src="<?php echo $v['goods_img'];?>" title="<?php echo $v['goods_name'];?>"></div>
                        <div class="title">
                            <h4><?php echo $v['goods_name'];?></h4>
                            <span><?php echo $v['goods_intro'];?></span>
                            <i class="fa fa-angle-right"></i>
                        </div>
                    </a></li>
                <?php }?>
            </ul>
        </div>
    </section>
<!--新闻中心-->
    <section class="news">
        <div class="container">
            <div class="s-title wow fadeInUp" data-wow-delay="0s">
                <b><?php $classify=M('classify')->where(array('classify_id'=>209))->find();echo $classify['classify_name'];?></b>
                <span><?php $classify=M('classify')->where(array('classify_id'=>209))->find();echo $classify['en_name'];?></span>
            </div>
            <ul class="news-nav flex-ce wow fadeInUp" data-wow-delay="0.1s">
                <?php $list=M('classify')->where(array('classify_pid'=>209))->order('date asc')->select();   
                foreach($list as $k=>$v){
                    ?>
                <li><a href="http://www.fansinn.com/news-20.html" title="<?php $classify=M('classify')->where(array('classify_id'=>$v['classify_id']))->find();echo $classify['classify_name'];?>" class="cur"><?php $classify=M('classify')->where(array('classify_id'=>$v['classify_id']))->find();echo $classify['classify_name'];?></a></li>
                <?php }?>
            </ul>
<!--首页新闻               -->
            <ul class="news-list flex-sb">
                <?php $news=M()->table('index_news n,index_relevance r')->where('r.classify_id =219 and r.content_id=n.news_id')->order('date desc')->select();foreach($news as $k=>$v){?>
                <li><a href="http://www.fansinn.com/shownews-675.html" title="<?php echo $v['news_title'];?>">
                        <div class="img" style="background-image: url(<?php echo $v['news_img'];?>)"></div>
                        <div class="info">
                            <div class="title"><?php echo $v['news_title'];?></div>
                            <p></p>
                        </div>
                    </a></li>
                <?php }?>
            </ul>
        </div>
    </section>
<!--图标           t-->
    <div class="service-ico">
        <ul>
            <?php $jianjie=M()->table('index_jianjie n,index_relevance r')->where('r.classify_id =233 and r.content_id=n.jianjie_id')->order('date desc')->select();foreach($jianjie as $k=>$v){?>
            <li class="wow fadeInUp" data-wow-delay="0s">
                <div class="ico"><img src="<?php echo $v['jianjie_thumbnail'];?>"></div>
                <h2><?php echo $v['jianjie_title'];?></h2>
                <p><?php echo $v['jianjie_beizhu'];?></p>
            </li>
            <?php }?>
            <div class="clear"></div>
        </ul>
    </div>
<?php require APP_ROOT.'public/bottom.php';?>