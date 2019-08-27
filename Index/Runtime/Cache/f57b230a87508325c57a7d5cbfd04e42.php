<?php if (!defined('THINK_PATH')) exit(); require APP_ROOT.'public/top.php';?>
    <link rel="stylesheet" href="css/contact.css">
    <div class="sub-banner" style="background-image: url(contact.jpg)"></div>
    <div class="sub-contact">
        <?php $contact=M()->table('index_contact n,index_relevance r')->where('r.classify_id =210 and r.content_id=n.contact_id')->order('date desc')->select();foreach($contact as $k=>$v){?>
        <div class="container">
            <div class="contact-title wow fadeInUp">
                <h3>
                    <?php $classify=M('classify')->where(array('classify_id'=>210))->find();echo $classify['classify_name'];?>
                </h3>
                <p>
                    <?php $classify=M('classify')->where(array('classify_id'=>210))->find();echo $classify['en_name'];?>
                </p>
            </div>

            <div class="contact-info wow fadeInUp">
                <div class="contact-info-title"><h4><?php echo $v['name'];?></h4><span><?php echo $v['concat_englishname'];?></span></div>
                <?php echo $v['content'];?>
            </div>
        </div>
        <?php }?>
    </div>
<?php require APP_ROOT.'public/foot.php';?>