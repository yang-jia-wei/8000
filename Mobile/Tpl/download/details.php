<?php require APP_ROOT.'public/top.php';?>
<div class="g00002">
  <div class="g00003" id="left">
    <?php require APP_ROOT.'public/left.php';?>
  </div>
  <div class="g00004" id="right">
    <div class="f14478451594">
      <div class="f14478451592215">
        <?php require APP_ROOT.'public/right.php';?>
      </div>
    </div>
    <div class="c1449208826">
      <div class="f14492088321">
        <?php $download=M('download')->where(array('download_id'=> default_content_id(1)))->find();?>
        <div class="f14492088322">
          <ul class="f14492088323">
            <li class="f14492088324"><?php echo L('_XIAZAIMINGCHENG_')?>：<?php echo $download['download_name'];?></li>
            <li class="f14492088324"><?php echo L('_FENGLEIMINGCHENG_')?>：
              <?php $classify = M('classify')->where('classify_id ='.get_classify_id())->find();echo $classify['classify_name'];?>
            </li>
            <li class="f14492088324"><?php echo L('_FABURIQI_')?>：<?php echo cover_time($download['date'],'Y-m-d');?></li>
            <li class="f14492088324"><?php echo L('_LIULANGCISHU_')?>：<?php echo $download['pv'];?></li>
            <li class="f14492088324"><?php echo L('_XIAZAICISHU_')?>：<?php echo $download['download_number'];?></li>
          </ul>
          <a class="f14492088329" href="<?php echo $download['download_file'];?>"></a></div>
        <div class="f144920883210"><?php echo L('_JIANJIE_')?></div>
        <div class="f144920883211"><?php echo $download['download_content'];?></div>
      </div>
    </div>
  </div>
</div>
<?php require APP_ROOT.'public/bottom.php';?>
