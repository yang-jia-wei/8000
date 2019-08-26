<footer>
    <div class="container flex-sb">
        <div class="foot-nav flex-fs pull-left">
            <?php $list=M('classify')->where(array('classify_pid'=>2))->order('date asc')->select();foreach($list as $k=>$v){?>
                <?php $listbes=M('classify')->where(array('classify_pid'=>$v['classify_id']))->order('date asc')->find();?>
                <?php if($v['classify_id']==206){ ?>
                    <dl>
                        <dt><?php echo $v['classify_name'];?></dt>
                        <?php $list2=M('classify')->where(array('classify_pid'=>$v['classify_id']))->order('date asc')->select();foreach($list2 as $k2=>$v2){?>
                            <dd><a href="<?php echo classify_url($v2['type_id'],$v2['classify_id']);?>"><?php echo $v2['classify_name'];?></a></dd>
                        <?php } ?>
                    </dl>
                <?php }elseif($v['classify_id']==207){ ?>
                    <dl>
                        <dt><?php echo $v['classify_name'];?></dt>
                        <?php if($listbes['classify_id']==''){ ?>
                            <dd><a href="<?php echo classify_url($v['type_id'],$v['classify_id']);?>"><?php echo $v['classify_name'];?></a></dd>
                        <?php }else{ ?>
                            <?php $list2=M('classify')->where(array('classify_pid'=>$v['classify_id']))->order('date asc')->select();foreach($list2 as $k2=>$v2){?>
                                <dd><a href="<?php echo classify_url($v2['type_id'],$v2['classify_id']);?>"><?php echo $v2['classify_name'];?></a></dd>
                            <?php } ?>
                        <?php } ?>
                    </dl>
                <?php }elseif($v['classify_id']==208){ ?>
                    <dl>
                        <dt><?php echo $v['classify_name'];?></dt>
                        <?php $list2=M('classify')->where(array('classify_pid'=>$v['classify_id']))->order('date asc')->select();foreach($list2 as $k2=>$v2){?>
                            <dd><a href="<?php echo classify_url($v2['type_id'],$v2['classify_id']);?>"><?php echo $v2['classify_name'];?></a></dd>
                        <?php } ?>
                    </dl>
                <?php }elseif($v['classify_id']==210){ ?>
                    <dl>
                        <dt><?php echo $v['classify_name'];?></dt>
                        <?php $list2=M('classify')->where(array('classify_pid'=>$v['classify_id']))->order('date asc')->select();foreach($list2 as $k2=>$v2){?>
                            <dd><a href="<?php echo classify_url($v2['type_id'],$v2['classify_id']);?>"><?php echo $v2['classify_name'];?></a></dd>
                        <?php } ?>
                    </dl>
                <?php }?>
            <?php }?>
        </div>
        <div class="foot-contact pull-right">
            <div class="c-info">
                <?php $list=M('classify')->where(array('classify_id'=>230))->order('date asc')->find();?>
                <h4><?php echo $list['classify_name'];?></h4>
                <?php echo $list['classify_intro'];?>
            </div>
            <div class="wx"><img src="<?php echo $list['classify_img'];?>" alt="">微信公众号</div>
        </div>
    </div>
    <div class="copy">
        <div class="container">
            <div class="pull-left">版权所有：南宁市凡斯环保科技有限公司 致力于办公室除甲醛、幼儿园装修除异味及空气检测等服务</div>
            <div class="pull-right"><a target="_blank" href="http://www.miitbeian.gov.cn/publish/query/indexFirst.action">桂ICP备19004882号</a></div>
        </div>
    </div>
</footer>
<div class="go-top dn" id="go-top">
    <a href="javascript:;" class="uc-2vm"></a>
    <div class="uc-2vm-pop dn">
        <div class="logo-2wm-box">
            <img src="images/wx.jpg" alt="微信公众号">
        </div>
    </div>
    <a href="javascript:;" class="go"></a>
</div>
<div class="free-quote">
    <div class="container">
        <div class="f-logo"><img src="images/f-logo.png"></div>
        <div class="f-form">
            <label><input type="tel" id="tel" placeholder="手机号码"></label>
            <label><input type="text" id="city" value="南宁"></label>
            <label><button id="bt" class="save">免费获取方案和报价</button></label>
        </div>
    </div>
</div>
<script src="js/layer.js"></script>
<script src="js/wow.js"></script>
<script src="js/comm.js"></script>
<script src="js/bootsnav.js"></script>

<script src="js/owl.js"></script>
<script>
    $(function(){
        $('#caselist').owlCarousel({
            items: 5,
            autoPlay: true,
            navigation: true,
            navigationText: ["<i class='iconfont icon-you'></i>","<i class='iconfont icon-zuoyoujiantou'></i>"],
            scrollPerPage: true
        });
    });
</script>


</div>




</body></html>