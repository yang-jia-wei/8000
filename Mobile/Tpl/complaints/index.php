<?php require APP_ROOT.'public/top.php';?>
<div class="g00002">
  <div class="g00003">
    <?php require APP_ROOT.'public/left.php';?>
  </div>
  <div class="g00004">
    <div class="c1448872169">
      <?php require APP_ROOT.'public/right.php';?>
    </div>
    <div class="c1448872173">
      <div class="f14488721901">
        <form action="index.php?m=message&a=add_save" method="post" enctype="multipart/form-data" onsubmit="return return_message()" id="form" class="f14488721902">
          <input name="data[type_id]" type="hidden" id="type_id" class="f14488721903" value="46" />
          <input name="classify_id" type="hidden" id="classify_id" class="f14488721904" value="<?php echo $classify_id;?>" />
          <input name="data[date]" type="hidden" id="date" class="f14488721905" value="<?php echo time();?>" />
          <div class="f14488721906">
            <?php  $input = M('input')->where(array('type_id'=>46,'show_switch'=>2,'input_pid'=>array('exp','is null')))->order('date asc')->select();  foreach($input as $k=>$v){?>
            <dl class="f14488721907">
              <dt class="f14488721908"><?php echo $v['input_name']?>：</dt>
              <dd class="f14488721909">
                <?php  	switch($v['input_type_id']){  		case 1:  		?>
                <input class="f144887219010" name="data[<?php echo $v['field_name'];?>]" type="text" id="<?php echo $v['field_name'];?>" size="<?php echo $v['edit_size'];?>" />
                <?php  		break;  		case 2:  		?>
                <textarea class="f144887219011" name="data[<?php echo $v['field_name'];?>]" cols="60" rows="<?php echo $v['edit_size'];?>" id="<?php echo $v['field_name'];?>"></textarea>
                <?php  		break;  		case 3:  			echo fckeditor('data['.$v['field_name'].']',$v['edit_size'],'');  		break;  		case 4:  		?>
                <?php  		$input_p = M('input')->where(array('input_pid'=>$v['input_id']))->select();  		foreach($input_p as $k2=>$v2){  		?>
                <input class="f144887219012" name="data[<?php echo $v2['field_name'];?>]" type="hidden" value="" />
                <label class="f144887219013">
                  <input class="f144887219014" name="data[<?php echo $v2['field_name'];?>]" type="checkbox" value="<?php echo $v2['input_name']?>" />
                  <?php echo $v2['input_name']?>&nbsp;</label>
                <?php } ?>
                <?php  		break;  		case 6:  		?>
                <select class="f144887219015" name="data[<?php echo $v['field_name'];?>]" id="<?php echo $v['field_name'];?>">
                  <option value="0">请选择</option>
                  <?php  		$input_p = M('input')->where(array('input_pid'=>$v['input_id']))->select();  		foreach($input_p as $k2=>$v2){  		?>
                  <option value="<?php echo $v2['input_id'];?>"><?php echo $v2['input_name'];?></option>
                  <?php } ?>
                </select>
                <?php  		break;  		case 7:  		?>
                <input class="f144887219016" name="<?php echo $v['field_name'];?>" id="<?php echo $v['field_name'];?>" type="file" />
                <?php  		break;  		case 8:  		?>
                <input name="data[<?php echo $v['field_name'];?>]" class="f144887219017" type="text" id="<?php echo $v['field_name'];?>" onclick="laydate({istime: true, format: 'YYYY-MM-DD hh:mm:ss'})" size="<?php echo $v['edit_size'];?>" />
                <?php  		break;  	}  	?>
              </dd>
            </dl>
            <?php }?>
            <dl class="f14488721907">
              <dt class="f144887219019">&nbsp;</dt>
              <dd class="d14488721909">
                <input class="f144887219021" name="" type="submit" value="提交">
              </dd>
            </dl>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<?php require APP_ROOT.'public/bottom.php';?>
