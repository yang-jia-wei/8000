<?php require APP_ROOT.'public/top.php';?>



    <div class="c1448872173">
      <div class="f14488721901">








    
        <div class="content">
            <p class="red_alert"></p>
            <ul class="login">



        <form action="index.php?m=message&a=add_save" method="post" enctype="multipart/form-data" onsubmit="return return_message()" id="form" class="msgForm">
          <input name="data[type_id]" type="hidden" id="type_id" class="f14488721903" value="11" />
          <input name="classify_id" type="hidden" id="classify_id" class="f14488721904" value="<?php echo $classify_id;?>" />
          <input name="data[date]" type="hidden" id="date" class="f14488721905" value="<?php echo time();?>" />

                <li>
                    <input class="login_input" name="data[theme]" type="text" id="theme" placeholder="标题" datatype="*1-50" nullmsg="请输入留言标题" errormsg="1-6个字符">
                </li>
                <li>
                    <textarea class="login_textarea" name="data[content]" id="content" cols="30" rows="10" placeholder="内容" datatype="*" nullmsg="请输入留言内容"></textarea>
                </li>
                <li>
                    <input class="login_input" name="data[name]" type="text" id="name" placeholder="姓名" datatype="zh1-6" nullmsg="请输入姓名" errormsg="1-6个汉字">
                </li><li>
                    <input class="login_input" name="data[tel]" type="text" id="tel" placeholder="手机号码" datatype="m" nullmsg="请输入手机号码" errormsg="手机号码格式有误">
                </li>              

<!-- 
                  <li>
                    <input class="login_input pin_width" id="valid" name="valid" type="text" maxlength="4" placeholder="请输入验证码" datatype="v" ajaxurl="/index.php/Cnm/Msg/ajaxCheckValid.html" nullmsg="请填写验证码" errormsg="验证码长度为4位">
                    <img src="./这里是您的网站名称_files/sendValid.html" id="valid_img" class="login_pin" title="点击更换验证码">
                </li> -->

                <li>
                    <input class="login_btn common_bg" id="baidu-book" type="submit" value="提   交">
                </li>
              </form>
            </ul>
        </div>



<script type="text/javascript">

function return_message()
{
  <?php  $input = M('input')->where(array('type_id'=>$type_id,'show_switch'=>2,'required_switch'=>2,'input_pid'=>array('exp','is null')))->order('date asc')->select();  foreach($input as $k=>$v){?>
  if($("#<?php echo $v['field_name'];?>").val()=='')
  {
    alert("请把表格填写完整");
    return false;
  }
  <?php }?>
}
</script> 















     
<?php require APP_ROOT.'public/bottom.php';?>
