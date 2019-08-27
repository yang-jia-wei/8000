<?php
// 本类由系统自动生成，仅供测试用途
class publicAction extends Action {
	
	 public function __construct() {
        parent::__construct();
		$this->checklogin();
    }

    /*
	  验证登录
	 */
	 public function checklogin()
	 {
		 
		$member=session('member');
		if(empty($member))
		{
			$this->error('请先登录！',U('member/login'));
			$this->redirect(U('member/login'), 1);
			die();
			}
	
		 
	}

   
	

}
