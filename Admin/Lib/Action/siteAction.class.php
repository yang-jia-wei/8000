<?php
class siteAction extends Action {

    public function index(){
        $this->display();
    }
	public function edit_save()
	{
		$data=pg('data');
		$version_id=pg('version_id');
		$list=M('input')->where(array('type_id'=>1,'edit_switch'=>2,'input_type_id'=>7))->select();
		foreach($list as $k=>$v)
		{
			if(!empty($_FILES[$v['field_name']]['tmp_name']))
			{
				$content=M('site')->where(array('version_id'=>$version_id))->select();
				if(file_exists($content[0][$v['field_name']]))
				{
					unlink($content[0][$v['field_name']]);//通过文件路径来删除
				};
				$data[$v['field_name']]=$this->up_file(array('name'=>$v['field_name']));
			}
		}
		
		if($version_id!='')
		{
			M('site')->where(array('version_id'=>$version_id))->save($data);
		}
		echo '操作成功';
	}
	
	public function password_select() {
		$user=session('user');
		if(empty($user)) return '请登录';
	    $password = pg('password');
        $user = M('user')->where(array('user_id'=>$user['user_id']))->find();
        if($user['password'] != md5(md5($password).$user['secret'])) echo '<font style="color:#f00;">旧密码输入错误</font>';
        else echo '<font style="color:#0dcb35;">旧密码输入正确√</font>';
	}
	
	public function password_edit_save() {
		$user = session('user');
        if($user['user_id'] == '') return '请登录';

        $old_password= pg('old_password');
        $password=pg('password');
        $confirm_password=pg('confirm_password');

        if($password != $confirm_password) $this->error('两次密码不一致',U('site/password_edit'));
        if(strlen($password) < 6) $this->error('密码必须大于6位',U('site/password_edit'));

        $user_mod = M('user');
        $user = $user_mod->where(array('user_id'=>$user['user_id']))->find();
        if($user['password'] != md5(md5($old_password).$user['secret'])) $this->error('旧密码输入错误',U('site/password_edit'));

        $udata['user_id'] = $user['user_id'];
        $udata['secret'] = rand(100000, 900000);
        $udata['password'] = md5(md5($password).$udata['secret']);
        if($user_mod->save($udata)) $this->success('密码修改成功',U('site/password_edit'));
        else $this->error('密码修改失败', U('site/password_edit'));
	}
	
	public function switch_version()
	{
		session('version_id',pg('version_id'));
		$classify = M('classify')->field('classify_id')->where(array('version_id'=>session('version_id'),'level_id'=>1))->find();
		session('version_classify_id',$classify['classify_id']);
		$this->success('版本换切成功',U('classify/index'));
	}
	public function copy_version()
	{
		$version_name=pg('version_name');
		
		$classify = M('classify')->field('classify_id')->where(array('version_id'=>session('version_id'),'level_id'=>1))->find();
		session('version_classify_id',$classify['classify_id']);
		$this->success('版本换切成功',U('classify/index'));
	}
	public function classify_code()
	{
		$classify_id=pg('classify_id');
		$field=pg('field');
		if($field=='classify_pid')
		{
			$code='<?php $list=M(\'classify\')->where(array(\'classify_pid\'=>'.$classify_id.'))->order(\'date asc\')->select();foreach($list as $k=>$v){?> <?php }?>';
		}
		else if($field=='classify_url')
		{
			$code='<?php $classify=M(\'classify\')->where(array(\'classify_id\'=>'.$classify_id.'))->find();echo classify_url($classify[\'type_id\'],$classify[\'classify_id\']);?>';
		}
		else
		{
			$code='<?php $classify=M(\'classify\')->where(array(\'classify_id\'=>'.$classify_id.'))->find();echo $classify[\''.$field.'\'];?>';
		}
		echo str_replace('<','&lt;',$code);
	}
	public function classify_children()
	{
		$input_type_id=pg('input_type_id');
		$field=pg('field');
		$type_id=pg('type_id');
		if($field=='classify_url')
		{
			$code='<?php echo classify_url($v[\'type_id\'],$v[\'classify_id\']);?>';
		}
		else
		{
			if($input_type_id==5 || $input_type_id==6)
			{
				$input_pid=M('input')->where(array('field_name'=>$field,'type_id'=>$type_id,'input_pid'=>array('exp','is null')))->getfield('input_id');
				$code='<?php M(\'input\')->where(array(\'input_pid\'=>'.$input_pid.',\'input_value\'=>$v[\''.$field.'\']))->getfield(\'input_name\');?>';
			}
			else if($input_type_id==4)
			{
				$input_pid=M('input')->where(array('field_name'=>$field,'type_id'=>$type_id,'input_pid'=>array('exp','is null')))->getfield('input_id');
				$code='<?php 
				$valarr=unserialize($v[\''.$field.'\']);
				foreach($valarr as $k3=>$v3)
				{
					echo M(\'input\')->where(array(\'input_pid\'=>'.$input_pid.',\'input_value\'=>$v3))->getfield(\'input_name\');
				}
				?>';
			}
			else if($input_type_id==8)
			{
				$code='<?php echo cover_time($v[\''.$field.'\'],\'Y-m-d H:i:s\');?>';
			}
			else
			{
				$code='<?php echo $v[\''.$field.'\'];?>';
			}
		}
		echo str_replace('<','&lt;',$code);
	}
	
	public function content_code()
	{
		$classify_id=pg('classify_id');
		$type_id=pg('type_id');
		$table_name=M('classify_type')->where(array('type_id'=>$type_id))->getfield('table_name');
		$code='<?php $'.$table_name.'=M()->table(\'index_'.$table_name.' n,index_relevance r\')->where(\'r.classify_id ='.$classify_id.' and r.content_id=n.'.$table_name.'_id\')->order(\'date desc\')->select();foreach($'.$table_name.' as $k=>$v){?> <?php }?>';
		echo str_replace('<','&lt;',$code);
	}
	
	public function content_url_code()
	{
		$code='<?php echo content_url($v[\'type_id\'],$v[\'content_id\']);?>';
		echo str_replace('<','&lt;',$code);
	}
	public function content_date_code()
	{
		$code='<?php echo cover_time($v[\'date\'],\'Y-m-d\');?>';
		echo str_replace('<','&lt;',$code);
	}
	
	public function site_children()
	{
		$field=pg('field');
		$code='<?php echo $site[\''.$field.'\'];?>';
		echo str_replace('<','&lt;',$code);
	}
}



