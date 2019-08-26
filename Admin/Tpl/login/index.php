<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<?php $site=M('site')->order('date asc')->find() ?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $site['company_name'] ?>-后台管理系统</title>
<link href="<?php echo APP_ROOT.'css/main.css';?>" rel="stylesheet" type="text/css" />
<script src="<?php echo APP_ROOT;?>js/jquery-1.7.2.min.js" type="text/javascript"></script>
</head>
<body style="background:#016ba9;">
<form action="admin.php?m=login&a=login_save" method="post" id="form">
<div class="login">
<ul>

<li><span>用户名：</span><input type="text" name="data[username]" size="20" /></li>
<li><span>密&nbsp;码：</span><input type="password" name="data[password]" size="20" /></li>
<li style="display:none;"><span>验证码：</span></li>
<li><input name="" type="submit" class="login_submit" value="登&nbsp;&nbsp;录"  /></li>


</ul>


<script>

/*function link_login(){



	 $.ajax({
	      url : "admin.php?m=login&a=login_save",  
	       type : "POST",  
	       data : $('#form').serialize(),  
	       success : function(data) {  
	        if(data=='success'){
	        	location.href="admin.php?m=classify&a=index&admin_classify_id=3";
	        }else{
	        	alert('帐号密码错误');
	        }
	       }
	      });

}*/


</script>
</div>
</form>
</body>
</html>
