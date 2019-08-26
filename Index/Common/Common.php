<?php
function deldir($dir) {
  //先删除目录下的文件：
  $dh=opendir($dir);
  while ($file=readdir($dh)) {
    if($file!="." && $file!="..") {
      $fullpath=$dir."/".$file;
      if(!is_dir($fullpath)) {
          unlink($fullpath);
      } else {
          deldir($fullpath);
      }
    }
  }
  
  closedir($dh);
  //删除当前文件夹：
  if(rmdir($dir)) {
    return true;
  } else {
    return false;
  }
}



function del_run(){

	$time=time();
	$file="./Uploads/log.txt";
	$f=file_get_contents($file)?file_get_contents($file):0;

	if(($f+864000)<$time){
		//更新时间,删除缓存
		$rs=file_put_contents($file,$time);
		deldir('./Index/Runtime');
		deldir('./Admin/Runtime');

	}
}