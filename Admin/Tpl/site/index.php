<?php require APP_ROOT.'public/top.php';?>
<script type="text/javascript">
$('#form_menu').ajaxForm({ success:function showResponse(responseText)  { 
	msg_show(responseText,500000);
	goto_url("admin.php?m=site&a=index&admin_classify_id=2");
}});
</script>
<div class="content">
  <?php require APP_ROOT.'public/left.php';?>
  <div class="right_panel" id="right">
	<?php $list = M('site')->where(array('version_id'=>session('version_id')))->find();?>
	<form method="post" id="form_menu" action="admin.php?m=site&a=edit_save" enctype="multipart/form-data" >
      <input name="version_id" type="hidden" value="<?php echo session('version_id');?>" />
<div class="codehtml"></div>
      <table class="tables" width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr class="title">
          <td height="30">&nbsp;<?php echo $list['version_name'];?></td>
          <td></td>
        </tr>
        <?php 
$input = M('input')->where(array('type_id'=>1,'edit_switch'=>2,'input_pid'=>array('exp','is null')))->order('date asc')->select();
foreach($input as $k=>$v){
	if($v['input_id']==453 && $function_switch['sms_switch']==1){
	}else{
?>
  <tr class="row">
  <td>&nbsp;&nbsp;<?php echo $v['input_name']?></td>
  <td>
    <?php 
	switch($v['input_type_id']){
		case 1:
		if($v['input_id']==453 && $user['user_id']>1){
			echo $list[$v['field_name']].'条';
		}else{
		?>
        <input name="data[<?php echo $v['field_name'];?>]" type="text" id="<?php echo $v['field_name'];?>" value="<?php echo $list[$v['field_name']];?>" size="<?php echo $v['edit_size'];?>" />
        <?php
		}
		break;
		case 2:
		?>
        <textarea name="data[<?php echo $v['field_name'];?>]" cols="60" rows="<?php echo $v['edit_size'];?>" id="<?php echo $v['field_name'];?>"><?php echo $list[$v['field_name']];?></textarea>
        <?php
		break;
		case 3:
			echo fckeditor('data['.$v['field_name'].']',$v['edit_size'],$list[$v['field_name']]);
		break;
		case 4:
		?>
        <?php
		$input_p = M('input')->where(array('input_pid'=>$v['input_id']))->select();
		$valarr=unserialize($list[$v['field_name']]);
		foreach($input_p as $k2=>$v2){
		?>
        <label>
        <input type="checkbox" name="data[<?php echo $v['field_name'];?>][]"<?php if(in_array($v2['input_value'],$valarr))echo ' checked="checked"';?> value="<?php echo $v2['input_value']?>" />
        <?php echo $v2['input_name'];?>
        </label>
        <?php } ?>
        <?php
		break;

		case 5:
		?>
        <?php
		$input_p = M('input')->where(array('input_pid'=>$v['input_id']))->select();
		foreach($input_p as $k2=>$v2){
		?>
        <label>
        <input type="radio" name="data[<?php echo $v['field_name'];?>]" value="<?php echo $v2['input_value']?>" <?php if($list[$v['field_name']]==$v2['input_value'])echo ' checked="checked"';?>/>
        <?php echo $v2['input_name'];?>
        </label>&nbsp;&nbsp;
        <?php } ?>
        <?php
		break;
		case 6:
		?>
        <select name="data[<?php echo $v['field_name'];?>]" id="<?php echo $v['field_name'];?>">
        <option value="0">请选择</option>
        <?php
		$input_p = M('input')->where(array('input_pid'=>$v['input_id']))->select();
		foreach($input_p as $k2=>$v2){
		?>
          <option value="<?php echo $v2['input_value'];?>"<?php if($list[$v['field_name']]==$v2['input_value'])echo ' selected="selected"';?>><?php echo $v2['input_name'];?></option>
        <?php } ?>
        </select>
        <?php
		break;
		case 7:
		?>
         <input <?php if(!$v['note']){  ?> class="link_up_size" <?php } ?> data-cid="<?php echo $v['input_id'] ?>" name="<?php echo $v['field_name'];?>" id="<?php echo $v['field_name'];?>" type="file" />
        <?php
		if($list[$v['field_name']]!='')
		{
			echo '<a href="'.$list[$v['field_name']].'" target="_blank"><img src="'.$list[$v['field_name']].'" width="50" height="25"/></a>';
			?>
			<a href="javascript:;" onclick="if(confirm('确定删除吗!')){delete_img('admin.php?m=content&a=delete_img&content_id=<?php echo $list['site_id'];?>&table_name=site&type_id=1&field_name=<?php echo $v['field_name'];?>',$(this))}" class="delete">删除</a>
            <?php
		}
		break;
		case 8:
		?>
        <input name="data[<?php echo $v['field_name'];?>]" type="text" class="laydate-input" id="<?php echo $v['field_name'];?>" onclick="laydate({istime: true, format: 'YYYY-MM-DD hh:mm:ss'})" value="<?php echo cover_time($list[$v['field_name']],'Y-m-d H:i:s')?>" size="<?php echo $v['edit_size'];?>" />
        <?php
		break;		
	}
	?>


	
	<?php echo $v['note']; ?>
<?php $user=session('user'); if($user['user_id']==1){?>
	<a href="javascript:;" class="copycode" onClick="site_children('<?php echo $v['field_name'];?>')">[字段]</a>
<?php }?>
</td>
  </tr>
        <?php } }?>
        <tr>
          <td>&nbsp;&nbsp;<input name="" type="submit" class="submit" value="确认无误，提交" /></td>
        </tr>
      </table>
    </form>
  </div>
</div>

<script>
	$('.link_up_size').change(function(){
		if(confirm('设为默认图片尺寸?')){

			var i=$(this).attr('data-cid');
			var rs='';
			var n=$(this).attr('id');
	
			var input = document.getElementById(n); 

			if(input.files){  
			                //读取图片数据  
			  var f = input.files[0];  
			  var reader = new FileReader();  
			  reader.onload = function (e) {  
			      var data = e.target.result;  
			      //加载图片获取图片真实宽度和高度  
			      var image = new Image();  
			      image.onload=function(){  
			          var width = image.width;  
			          var height = image.height;  
			      rs=width+'px*'+height+"px"; 
			    	 $.ajax({
		      url : "admin.php?m=content&a=link_size&input_id="+i+"&value="+rs,  
		       type : "GET",  
		       success : function(data){  
		       // alert('设置成功,如需修改,请前往表单设置');
		       }
		      });
			    
			      };  
			      image.src= data;  
			  };  
			      reader.readAsDataURL(f);  
			  }else{  
			      var image = new Image();   
			      image.onload =function(){  
			          var width = image.width;  
			          var height = image.height;  
			          var fileSize = image.fileSize; 
			          rs=width+'px*'+height+"px"; 
			               
			          	 $.ajax({
				      url : "admin.php?m=content&a=link_size&input_id="+i+"&value="+rs,  
				       type : "GET",  
				       success : function(data){  
				       // alert('设置成功,如需修改,请前往表单设置');
				       }
				      });
			      }  
			      image.src = input.value;  
			  } 
			}
			});
</script>








<?php require APP_ROOT.'public/bottom.php';?>
