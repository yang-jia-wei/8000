<?php
class loginAction extends Action {

    public function index(){
        $this->display();
    }
	
	public function login_save()
	{
		/*$verifycode=pg('verifycode');
		$verify=session('verify');
		if($verify!=md5($verifycode))
		{
			$this->error('验证码错误',U('login/index'));
			exit;
		}*/
		$data=pg('data');
		$user_mod = M('user');
		$where['username'] = trim($data['username']);
		$user = $user_mod->where($where)->find();

		if(empty($user)) $this->error('用户名不存在',U('login/index'));
           //dump($user);exit;
		if(empty(intval($user['secret'])) && $user['password'] != md5($data['password'])) $this->error('密码错误' ,U('login/index'));
		if(intval($user['secret']) && $user['password'] != md5(md5($data['password']).$user['secret'])) $this->error('密码错误',U('login/index'));

        $udata['user_id'] = $user['user_id'];
		$udata['secret'] = rand(100000, 900000);
        $udata['password'] = md5(md5($data['password']).$udata['secret']);
        $user_mod->save($udata);
		
        unset($user['password'], $user['secret']);
		session('user',$user);
		setcookie('user',$user, time()+86400);
		$this->success('登录成功',U('/'));
	}
	
	public function login_exit()
	{
		session('user',null);
		setcookie('user');
		$this->success('安全退出',U('login/index'));
	}
	public function del_save()//删除分类
	{
		$classify_id=pg('classify_id');
		$classify_id!=''?M('classify')->where(array('classify_id'=>$classify_id))->delete():'';
		echo '操作成功';
	}
	public function verify(){
      import('ORG.Util.Image');
      ob_end_clean();
      Image::buildImageVerify(6,1);
	  //Image::GBVerify();

    }

}
