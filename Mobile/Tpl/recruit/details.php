<?php require APP_ROOT.'public/top.php';?>
 <div class="content">
<div class="f2RUv8xTOE">
    <?php $recruit=M('recruit')->where(array('recruit_id'=>default_content_id(1)))->find();?> 
      <ul class="H0V7Luu8td">
        <li class="hD6vrKzf8J">
          <div class="zwOSeVNj3E">
            <div class="BvQLyKAulW"><?php echo L('_ZHIWEIMINGCHENG_')?>：</div>
            <div class="O3PqSGKF16"><?php echo $recruit['job_name'];?></div>
          </div>
          <div class="zMAz8bR13i">
            <div class="zggqvwlvhM"><?php echo L('_ZHIWEILIEXING_')?>：</div>
            <div class="m56GbOdxvM"><?php echo $recruit['job_type'];?></div>
          </div>
          <div class="ctByNelTom">
            <div class="AgmqncSTUc"><?php echo L('_GONGZUOJINGNIAN_')?>：</div>
            <div class="PbapL2tndH"><?php echo $recruit['work_experience'];?></div>
          </div>
          <div class="HQ3Fcfvleb">
            <div class="bqo2XydhlZ"><?php echo L('_XIULIYAOQIU_')?>：</div>
            <div class="kkD0zAmizG"><?php echo $recruit['schooling'];?></div>
          </div>
          <div class="P7lOyODAiB">
            <div class="pmzqRQFwbf"><?php echo L('_ZHAOPINGRENSHU_')?>：</div>
            <div class="JrgSftHRfk"><?php echo $recruit['number'];?></div>
          </div>
          <div class="Fl5KTKjT1l">
            <div class="Rcjr1kJjSe"><?php echo L('_FABURIQI_')?>：</div>
            <div class="WAsZpbhRMz"><?php echo cover_time($recruit['date'],'Y-m-d');?></div>
          </div>
        </li>
        <li class="isaps9SUmD">
        <div class="L2yaw9ZwbI"><?php echo L('_ZHIWEIMIAOSHU_')?></div>
        <div class="Leq9m2ufSb"><?php echo substrs($recruit['job_description']);?></div>
        </li>
        
        <li class="Gi4GTrJrdf">
        <div class="AKcqoRmk6v"><?php echo L('_ZHAOPINGYAOQIU_')?></div>
        <div class="DKk3suqanA"><?php echo substrs($recruit['job_requirement']);?></div>
        </li>
        
        <li class="ul7imPahpN">
          <div class="sjKc5RtzS0">
            <div class="eGm7oEZT9g"><?php echo L('_LIANXIREN_')?>：</div>
            <div class="MPNRznH9ah"><?php echo $recruit['contact'];?></div>
          </div>
          <div class="DKxJkV0RpG">
            <div class="fpHHCA20Rr"><?php echo L('_LIANGXIREN_')?>：</div>
            <div class="JpozZ471lj"><?php echo $recruit['tel'];?></div>
          </div>
          <div class="cnmKlwmRTw">
            <div class="D6ALqdRef1"><?php echo L('_DIANZHIYOUJIAN_')?>：</div>
            <div class="fd5tAfjIrP"><?php echo $recruit['email'];?></div>
          </div>
          
          
        </li>
        
        
      </ul>
      
      
      <div class="RGDRxoyk1j">
  <form action="index.php?m=message&a=add_save" method="post" enctype="multipart/form-data" onsubmit="return return_message()" id="form" class="afBNgwpAP6">
    <input name="data[type_id]" type="hidden" id="type_id" class="zMoTcRA9wE" value="45" />
    <input name="data[recruit_id]" type="hidden" id="recruit_id" class="l93Qct9Ce5" value="<?php echo default_content_id(1);?>" />
    <input name="data[date]" type="hidden" id="date" class="UlvgoEVW3o" value="<?php echo time();?>" />
    <div class="MTZr5ClwMb">
      <?php  $input = M('input')->where(array('type_id'=>45,'show_switch'=>2,'input_pid'=>array('exp','is null')))->order('date asc')->select();  foreach($input as $k=>$v){ ?>
      <dl class="y3yJ16kBvU">
        <dt class="lHR1f1zcRp"><?php echo $v['input_name']?></dt>
        <dd class="PjLPLeuPPn">
  <?php
	switch($v['input_type_id']){
		case 1:
		?>
        <input class="BEO3DYXr3k" name="data[<?php echo $v['field_name'];?>]" type="text" id="<?php echo $v['field_name'];?>" size="<?php echo $v['edit_size'];?>" />
        <?php
		break;
		case 2:
		?>
        <textarea class="uJXp0Pdq7K" name="data[<?php echo $v['field_name'];?>]" cols="40" rows="<?php echo $v['edit_size'];?>" id="<?php echo $v['field_name'];?>"></textarea>
        <?php
		break;
		case 3:
			echo fckeditor('data['.$v['field_name'].']',$v['edit_size'],'');
		break;
		case 4:
		?>
		<?php
		$input_p = M('input')->where(array('input_pid'=>$v['input_id']))->select();
		foreach($input_p as $k2=>$v2){
		?>
		<input class="t1DiJOl8cZ" name="data[<?php echo $v2['field_name'];?>]" type="hidden" value="" />
		<label class="nnMric2BrP"><input class="ooCwKpil0j" name="data[<?php echo $v2['field_name'];?>]" type="checkbox" value="<?php echo $v2['input_name']?>" /><?php echo $v2['input_name']?>&nbsp;</label>
		<?php } ?>
		<?php
		break;
		case 6:
		?>
        <select class="olOdmSvVEl" name="data[<?php echo $v['field_name'];?>]" id="<?php echo $v['field_name'];?>">
        <option value="0"><?php echo L('_QINGFXUANZHE_')?></option>
        <?php
		$input_p = M('input')->where(array('input_pid'=>$v['input_id']))->select();
		foreach($input_p as $k2=>$v2){
		?>
          <option value="<?php echo $v2['input_id'];?>"><?php echo $v2['input_name'];?></option>
        <?php } ?>
        </select>
        <?php
		break;
		case 7:
		?>
        <input class="JIzre0dFRJ" name="<?php echo $v['field_name'];?>" id="<?php echo $v['field_name'];?>" type="file" />
        <?php
		break;
		case 8:
		?>
        <input name="data[<?php echo $v['field_name'];?>]" class="uFjFuvgeWv" type="text" id="<?php echo $v['field_name'];?>" onclick="laydate({istime: true, format: 'YYYY-MM-DD hh:mm:ss'})" size="<?php echo $v['edit_size'];?>" />
        <?php
		break;
	}
	?>
</dd>
</dl>
<?php }?>

<dl class="y3yJ16kBvU">
        <dt class="NwDqo8FdTR">&nbsp;</dt>
        <dd class="PjLPLeuPPn">

        <input class="YjN003C4jW" style="width:100px;"name="" type="submit" value="提交"></dd>
</dl>
</div>
</form>
</div>
    </div>    
  </div>


<script>
  $('.BEO3DYXr3k').attr('size','25');
</script>
<?php require APP_ROOT.'public/bottom.php';?>
