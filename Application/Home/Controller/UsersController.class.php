<?php
namespace Home\Controller;
use Common\Controller\BaseController;

class UsersController extends BaseController
{

	public function index()
	{
		die();
	}
/**用户操作管理*/
	public function user()
	{
		$data =  M('user');
		$count =$data->count();
		$page = fenye($data,'',$count);
		$this->assign('page',$page);
		$this->display();
	}
	public function add_user()   //添加用户
	{
		$group = M('authGroup')->select();
		$this->assign('group',$group);
		if(IS_POST)
		{
			$data=I('post.');
			$cond['username'] = $data['user'];
			$cond['name'] = $data['name'];
			$cond['auth'] = $data['auth'];
			$cond['group'] = $data['group'];
			$cond['college'] = $data['xueyuan'];
			$cond['password'] = $data['pwd'];
			$cond['tel'] = $data['tel'];
			$user = D('user');
			$res = $user->create($cond);
			
			if($res)
			{
			
				/**将用户添加至用户组*/
				$groupcond['uid'] = $user->add();

				$groupcond['group_id'] = $cond['group'];
				if(!(M('authGroupAccess')->where($groupcond)->find()))
				{
					M('authGroupAccess')->data($groupcond)->add();	
				}
				$this->success('添加用户成功！','Home/users/user');
			}else 
			{

				$this->error($user->getError());
			}
		}
		$this->display();

	}
	public function update_user()
	{
		$id = I('get.id');
		$user = D('user')->where('id='.$id)->find();
		$groups = M('authGroupAccess')->where('uid='.$id)->find();
		$this->assign('user',$user);
		$this->assign('groups',$groups['group_id']);
		
		$group = M('authGroup')->select();
		$this->assign('group',$group);
		if(IS_POST)
		{
			$data=I('post.');
			//$cond['username'] = $data['user'];
			$cond['name'] = $data['name'];
			$cond['auth'] = $data['auth'];
			$cond['group'] = $data['group'];
			$cond['college'] = $data['xueyuan'];
			$cond['password'] = $data['pwd'];
			$cond['tel'] = $data['tel'];
			$cond['time'] = date("Y-d-m H:i:s",time());
			//var_dump($cond['time']);ex
			$user = D('user');
			$res = $user->create($cond);
			$res = $user->where('id='.$id)->save($cond);
			if($res)
			{
				/**add user to UserGroups*/

				$groupcond['uid'] = $id;
				$groupcond['group_id'] = $cond['group'];
				if(!(M('authGroupAccess')->where('uid='.$groupcond['uid'])->find()))
				{
					$res = M('authGroupAccess')->data($groupcond)->add();	
				}else
				{
					$res = M('authGroupAccess')->where('uid='.$groupcond['uid'])->save($groupcond);
				}
				if($res)
				{
					$this->success('操作成功',U('Home/users/user'));
					
				}else
				{
					$this->error("添加用户组失败！");
					
				}
			}else
			{
				$this->error($user->getError());
			}
		}else
		{
			$this->display();
		}
		
	}

	public function update()	//修改用户
	{

	}
	public function deluser()	//删除用户
	{
		$id = I('get.id');
		$res = D('User')->where('id='.$id)->delete();
		if($res >0)
			$this->success('删除成功！');
		else
			$this->error('删除失败');
	}
	public function updateinfo()  //普通用户修改个人信息
	{
		$lin['username'] = session('user.username');
		if(IS_POST)
		{
			$data = I('post.');
			$cond['password'] = $data['pwd'];
			$cond['name'] = $data['user'];
			$cond['tel'] = $data['phone'];
			$res = M('user')->where($lin)->save($cond);
			if($res)
				$this->success("信息修改成功！");
			else
				$this->error("修改失败！");
		}else
		{
			$user = M('user')->where($lin)->find();
			$this->assign('data',$user);
			$this->display();
		}
	}
	/**用户组操作*/
	public function group()
	{
		$data =  M('authGroup');
		$count =$data->count();
		$page = fenye($data,'',$count);
		$this->assign('page',$page);
		$this->display();
	}
	public function addgroup()
	{
		if(IS_POST)
		{
			$data['title'] = I('post.name');
			if(M('authGroup')->data($data)->add())
				$this->success('用户组添加成功');
			else
				$this->error('添加失败');
		}
	}
	public function delgroup()	//删除用户组
	{
		$id = I('get.id');
		$res =  M('authGroup')->where('id='.$id)->delete();
		if($res >0)
			$this->success('删除成功！');
		else
			$this->error('删除失败');
	}
}