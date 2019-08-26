<?php require APP_ROOT.'public/top.php';?>
<script type="text/javascript">
$('#form_menu').ajaxForm({ success:function showResponse(responseText)  {
	msg_show(responseText,500000);
	goto_url("");
}});
</script>
<div class="content">
	<?php require APP_ROOT.'public/left.php';?>
	<?php
	$type_id = pg('type_id');
	$table_name = M('classify_type')->where(array('type_id' => $type_id))->getField('table_name');
	?>
	<div class="right_panel" id="right">
		<a href="javascript:;" onclick="dialog_div(900,600,'admin.php?m=cms&a=add&type_id=<?php echo $type_id;?>&ajax=1&time=<?php echo time()?>')" class="button">添加内容</a>
		<form method="post" id="form_menu" action="admin.php?m=content&a=batch_edit_save" >
			<table class="tables" width="100%" border="0" cellspacing="0" cellpadding="0">
				<tr class="title">
					<input name="table_name" type="hidden" id="table_name" value="<?php echo $table_name;?>" />
					<input name="type_id" type="hidden" id="type_id" value="<?php echo $type_id;?>" />
					<td height="30"><input name="" type="checkbox" class="checkbox" onclick="SelectAll('content_id[]')" value="" />全选</td>
					<?php
					$where = array();
					$where['type_id'] = $type_id;
					$where['list_switch'] = 2;
					$list_input=M('input')->where($where)->order('date asc')->select();
					foreach($list_input as $k=>$v){
					 ?>
						<td><?php echo $v['input_name']?></td>
					<?php }?>
					<td>排序时间</td>
					<td>操作</td>
				</tr>
				<?php
				$perpage=20;
				$offset=($p-1)*$perpage;//偏移量
				$list=M($table_name)->order('date desc')->limit($offset,$perpage)->select();
				$total_num = M($table_name)->count();
				foreach($list as $k=>$v){
				?>
					<tr>
						<td height="35">
							<input name="content_id[]" type="checkbox" class="checkbox" value="<?php echo $v[$table_name.'_id']?>" />
							<input name="data[content_id][]" type="hidden" value="<?php echo $v[$table_name.'_id']?>" />
							<?php echo $v[$table_name.'_id']?>
						</td>
						<?php foreach($list_input as $key=>$val){ ?>
							<td>
								<?php if($val['input_type_id']==7){?>
									<a href="<?php echo $v[$val['field_name']];?>" target="_blank"><img src="<?php echo $v[$val['field_name']];?>" width="50" height="15" /></a>
								<?php }else if($val['input_type_id']==6){?>
									<select name="data[<?php echo $val['field_name'];?>][]">
										<option value="0">请选择</option>
										<?php
										$input = M('input')->where(array('input_pid' => $val['input_id']))->order('date asc')->select();
										foreach($input as $k2=>$v2){
										?>
											<option value="<?php echo $v2['input_id'];?>"<?php if($v[$val['field_name']]==$v2['input_value']){?> selected="selected"<?php }?>><?php echo $v2['input_name'];?></option>
										<?php } ?>
									</select>
								<?php }else{?>
									<input type="text" name="data[<?php echo $val['field_name'];?>][]" style="width:<?php echo $val['list_size'];?>px;" value="<?php echo $v[$val['field_name']];?>" />
								<?php }?>
							</td>
						<?php }?>
						<td><input name="data[date][]" type="text" value="<?php echo cover_time($v['date'],'Y-m-d H:i:s');?>" size="20" /></td>
						<td><a href="javascript:;" onclick="dialog_div(900,600,'admin.php?m=cms&a=edit&type_id=<?php echo $type_id;?>&table_name=<?php echo $table_name;?>&content_id=<?php echo $v[$table_name.'_id'];?>&ajax=1&time=<?php echo time()?>')" class="delete">修改</a> &nbsp;&nbsp; <a href="javascript:;" onclick="if(confirm('确定删除吗!')){ajax_list('admin.php?m=cms&a=del_save&content_id=<?php echo $v[$table_name.'_id'];?>&table_name=<?php echo $table_name;?>&type_id=<?php echo $type_id;?>','')}" class="delete">删除</a></td>
					</tr>
				<?php }?>
			</table>
			<div class="content_btn_w">
				<input name="" class="submit" type="submit" value="提交" />
			</div>
		</form>
		<?php require APP_ROOT.'public/page.php';?>
	</div>

</div>
<?php require APP_ROOT.'public/bottom.php';?>
