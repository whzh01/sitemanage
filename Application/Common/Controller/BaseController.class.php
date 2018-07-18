<?php

namespace Common\Controller;

use Think\Controller;

class BaseController extends Controller
{


	public function _initialize(){
		//parent::_initialize();
		$nav = $_SESSION['menu'];
		if(!empty($nav))
		{
			$this->assign('nav',$nav);
		}else
		{	
			//$this->error('请登录系统！',U('Home/Login/login'));
			$a = U('Home/Login/login');
			header("location:$a");
		//	die('无法获取菜单数据');
		}
		switch (session('user.auth'))
		{
			case 0:$cuser = "超级管理员";break;
			case 1:$cuser = "研究生会";break;
			case 2:$cuser = "研究生院";break;
			case 3:$cuser = "学院用户";break;
			default:$cuser = "未登录";
		}
		
		$this->assign('cuser',$cuser);
		$auth=new \Think\Auth();
	
		$rule_name=MODULE_NAME.'/'.CONTROLLER_NAME.'/'.ACTION_NAME;
		$result=$auth->check($rule_name,$_SESSION['user']['id']);
		
		if(!$result)
		{
			$this->error('您没有权限访问');
		}
	}
	/**
	public function _initialize()
	{

		if(session('user')!='username')
		{
			$this->display('./Login/login');
			exit();
		}
	}
	*/
}

?>