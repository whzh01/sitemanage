<?php

namespace Home\Controller;

use Think\Controller;

class LoginController extends Controller
{
	public function index()   //verify the login information
	{
			
		$login = I('post.');
		if(!empty($login))
		{
			$data = D('User')->login($login);
			
			if ($login['user']==$data['username'] && $login['passwd']==$data['password'])
			{
				session('user',
				array('id'=>$data['id'],'username'=>$data['username'],'auth'=>$data['auth'])	
				);
				$this->getMenu();
				$this->success("login success",U('Home/Index/index'));
				
			}else
			{
				$this->error("Your username or password is not correct!");	
			}
		}		
	}
	public function login()
	{
		layout(false);
		$this->display('login');
	}
	public function logout()
	{
		session_destroy();
		$this->success("Exit success!",U('Login/login'));
		
	}
	public function getMenu()
	{
		$nav = D('Nav')->getMenu();
		$_SESSION['menu'] = $nav;
	}
}



?>