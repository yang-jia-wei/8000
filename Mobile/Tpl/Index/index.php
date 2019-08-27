<?php require APP_ROOT.'public/head.php' ?>

<!-- #28366f 底部颜色 -->

<ul class="nav">


 <li><a href="index.php" title="网站首页"><span class="iconfont"></span>网站首页</a></li>

    <?php   $list= M('classify')->where(array('classify_pid'=>2))->limit(1,8)->select();

foreach ($list as $k => $v) { ?>

 <li><a href="<?php echo  classify_url($v['type_id'],$v['classify_id']);?> " title=""><?php echo $v['classify_name']?></a>
 </li>


<?php } ?>


</ul>

<div class="allpage">
   <div class="black-fixed iconfont"></div>
    <div class="header clear-fix">
        <div class="head">
            <a href="index.php" class="logo">
                <img src="<?php echo $site['logo_img'] ?>" alt="">
            </a>
            <div class="nav-btn commonfont"></div>

             <div class="search_hl search_l iconfont"></div>
             <div class="search" style="display: block; top: -120%;">
             <a class="xbtn iconfont" href="javascript:;"></a>
              <form action="index.php?m=goods&a=search" method="post" class="clear-fix">
                <input name="kws" placeholder="请输入搜索关键词" class="search-input" type="text">
                <input class="search-btn iconfont" value="" type="submit">
              </form>
            </div>

        </div>
    </div>
    <div class="content content_new">
        <div class="nav_new">
            <ul>

    <?php   $list= M('classify')->where(array('classify_pid'=>2))->limit(1,8)->select();

foreach ($list as $k => $v) { ?>

 <li><a href="<?php echo  classify_url($v['type_id'],$v['classify_id']);?> " title=""><?php echo $v['classify_name']?></a>
 </li>


<?php } ?>






                           </ul>
            <div class="c"></div>
        </div>


        <div class="bgbg">

            <?php   $cla= M('classify')->where(array('classify_id'=>278))->find();?>

                    <div class="common_i_title_new">
                        <h2> <?php echo $cla['classify_name']?> </h2>
                        <span>PROJECT CASE</span>
                    </div>
                    <div class="product_i common_i_css">
                        <div class="product_i_list">
                            <ul>

                             <?php  $list= M()->table('index_news n,index_relevance r')->where('r.classify_id =278 and r.content_id=n.news_id')->order('date desc')->limit(4)->select();
                             foreach($list as $k=>$v){  ?>

                            <li>
                                    <a href=" <?php echo  content_url($v['type_id'],$v['content_id']);?> ">
                                        <img style="height:110px;" src="  <?php echo $v['news_img'] ?>" alt="现代简约风格">
                                        <span> <?php echo $v['keywords']?$v['keywords']:'现代简约风格' ?></span>
                                        <strong>总造价：<?php echo $v['description'] ?> 元</strong>
                                    </a>
                                </li>


                        <?php } ?>
                            </ul>
                            <div class="c"></div>
                        </div>
                    </div>
                    <div class="more_i_new">
                        <a href="<?php echo  classify_url($cla['type_id'],$cla['classify_id']);?> ">
                            更多内容
                        </a>
 </div>
</div>



                <div class="common_i_title">
                  <?php   $cla= M('classify')->where(array('classify_id'=>328))->find();?>
                    <h2><?php echo $cla['classify_name']?></h2>
                    <span>THE LATEST INFORMATION</span>
                </div>
                <div class="news_i common_i_css">
                    <div class="news_i_list">
                        <ul>



                             <?php  $list= M()->table('index_news n,index_relevance r')->where('r.classify_id =328 and r.content_id=n.news_id')->order('date desc')->limit(3)->select();
                             foreach($list as $k=>$v){  ?>




                                  <li>
                                <a href="<?php echo  content_url($v['type_id'],$v['content_id']);?>">
                                  <?php echo $v['keywords']?$v['keywords']:'现代简约风格' ?>                                </a>
                            </li>


                        <?php } ?>




                                               </ul>
                    </div>
                    <div class="more_i">
                        <a href="<?php echo  classify_url($cla['type_id'],$cla['classify_id']);?> ">
                            查看更多
                        </a>
                    </div>
                </div>

        <div class="common_i_title common_i_title_color">

    <?php   $cla= M('classify')->where(array('classify_id'=>294))->find();?>

                    <h2><?php echo $cla['classify_name']?></h2>
                </div>
                <div class="product_i common_i_css">
                    <div class="product_i_list product_i_list_color">
                        <ul>

                     <?php  $list= M()->table('index_goods n,index_relevance r')->where('r.classify_id =294 and r.content_id=n.goods_id')->order('date desc')->limit(2)->select();
                     foreach($list as $k=>$v){  ?>


                        <li>
                                <a href="<?php echo  classify_url($cla['type_id'],$cla['classify_id']);?>">
                                    <img src="<?php echo $v['goods_img'] ?>" alt="">
                                    <span><?php echo $v['goods_name'] ?></span>
                                </a>
                            </li>
                       <?php } ?>
                        </ul>
                        <div class="c"></div>
                    </div>
                </div>

                <div class="more_i">
                     <a href="<?php echo  classify_url($cla['type_id'],$cla['classify_id']);?> ">
                        查看更多
                    </a>
                </div>


          <!--       <div class="common_i_title">
                    <h2>服务流程</h2>
                    <span>SERVICE PROCESS</span>
                </div>

                <div class="icon_nav">
                    <ul>
                    <li>
                            <a href="http://900487.ks.panguweb.cn/index.php/Cnm/Service/index/cd/4.html">
                                <strong class="iconfont2">
                                                                </strong>
                               <span>签订合同</span>
                            </a>
                        </li><li>
                            <a href="http://900487.ks.panguweb.cn/index.php/Cnm/Service/index/cd/5.html">
                                <strong class="iconfont2">
                                                                </strong>
                               <span>测量尺寸</span>
                            </a>
                        </li><li>
                            <a href="http://900487.ks.panguweb.cn/index.php/Cnm/Service/index/cd/6.html">
                                <strong class="iconfont2">
                                                                </strong>
                               <span>确认效果</span>
                            </a>
                        </li><li>
                            <a href="http://900487.ks.panguweb.cn/index.php/Cnm/Service/index/cd/7.html">
                                <strong class="iconfont2">
                                                                </strong>
                               <span>开始施工</span>
                            </a>
                        </li>                    </ul>
                    <div class="c"></div>
                </div> -->

<!--
                <div class="about_i common_i_css">
                    <div class="about_i_text">1.前期设计 -- 2.主体拆改 -- 3.水电改造 -- 4.木工 -- 5.贴砖 -- 6.刷墙面漆 -- 7.厨卫吊顶 -- 8.橱柜安装 -- 9.木门安装 -- 10.地板安 装  -- 11.铺贴壁纸 -- 12.散热器安装 - ...</div>
                </div> -->

<!--
                <div class="more_i">
                    <a href="http://900487.ks.panguweb.cn/index.php/Cnm/Service/index.html">
                        查看更多
                    </a>
                </div> -->

  <?php   $cla= M('classify')->where(array('classify_id'=>232))->find();?>
                <div class="common_i_title common_i_title_color">
                    <h2><?php echo $cla['classify_name']?></h2>
                </div>
                <div class="product_i common_i_css">
                    <div class="product_i_list product_i_list_color">
                        <ul>
                            <?php  $list= M()->table('index_news n,index_relevance r')->where('r.classify_id =232 and r.content_id=n.news_id')->order('date desc')->limit(2)->select();
                             foreach($list as $k=>$v){  ?>
                            <li>
                                <a href="<?php echo  content_url($v['type_id'],$v['content_id']);?>">
                                    <img src="<?php echo $v['news_img'] ?>" alt="">
                                    <span><?php echo $v['news_title'] ?></span>
                                </a>
                            </li>

                            <?php } ?>


                        </ul>
                        <div class="c"></div>
                    </div>
                </div>
                <div class="more_i">
               <a href="<?php echo  classify_url($cla['type_id'],$cla['classify_id']);?> ">
                        查看更多
                    </a>
                </div>



  <?php   $cla= M('classify')->where(array('classify_id'=>315))->find();?>
                <div class="common_i_title">
                    <h2><?php echo $cla['classify_name']?></h2>
                    <span>ABOUT US</span>
                </div>

                <div class="about_i common_i_css">
                    <div class="about_i_text">
                        <img src="<?php echo $cla['classify_img']?>" alt="关于我们">
                  <?php echo $cla['classify_intro'] ?>                   </div>
                </div>

                <div class="more_i">

                   <a href="<?php echo  classify_url($cla['type_id'],$cla['classify_id']);?> ">
                        查看更多
                    </a>
                </div>



                <div class="baoming" style="position:relative;">
                <img src="./images/link_tel.png" alt="" style="position:absolute;top:9px;left:50%;margin-left:-18px;z-index:999;">
                   <div><?php echo $site['tel'] ?> <span class="iconfont2"></span></div>
                    联系地址：<?php echo $site['addr'] ?>                 </div>
        <div class="beian">
           <?php echo $site['inscribe'] ?>
        </div>
    </div>


<?php require APP_ROOT.'public/bottom.php';?>