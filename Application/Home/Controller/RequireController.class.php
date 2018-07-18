<?php

namespace Home\Controller;

use Think\Controller;

class RequireController extends Controller
{
	public function req()
	{
		$data = I('get.');
		$con = D('Vote')->formShow($data['uid']);
		$this->assign('con',$con);
		layout(false);
		$this->display();

	}
}

?>