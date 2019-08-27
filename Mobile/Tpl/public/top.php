<?php require APP_ROOT.'public/head.php';?>


<ul class="nav">


 <li><a href="index.php" title="网站首页"><span class="iconfont"></span>网站首页</a></li>

    <?php   $list= M('classify')->where(array('classify_pid'=>2))->limit(1,8)->select();

foreach ($list as $k => $v) { ?> 

 <li><a href="<?php echo  classify_url($v['type_id'],$v['classify_id']);?> " title=""><?php echo $v['classify_name']?></a>
 </li>


<?php } ?>


</ul>


<div class="allpage">
    <div class="black-fixed commonfont"></div>


    <div class="header">
        <div class="head">

            <?php   $cla= M('classify')->where(array('classify_id'=>$classify_id))->find();?>
                       <a href="index.php" title="首页" class="home-btn commonfont"></a>            <p class="top-title"> <?php echo $cla['classify_name']?> </p>
            <div class="class-btn"><span class="commonfont"></span></div>
            <div class="nav-btn commonfont"></div>
        </div>
        <div class="type">
            <h1>搜索：</h1>
            <div class="common-pro-search">
                <form action="index.php?m=goods&a=search" method="post">
                    <input class="common-text" name="kws" placeholder="请输入搜索关键词" type="text">
                    <input class="common-submit commonfont" value="" type="submit">
                </form>
            </div>
            <h1> <?php echo $cla['classify_name']?> 分类：</h1>
            <ul>
              <li>
                    <a href="" title=""> <?php echo $cla['classify_name']?> </a>
                    <span class="commonfont class-down"></span>
                    <dl>
                        
                    </dl>
                </li>   
            </ul>
        </div>
    </div>
