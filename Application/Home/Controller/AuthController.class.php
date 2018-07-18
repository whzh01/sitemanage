<?php
namespace Home\Controller;
use Common\Controller\BaseController;


class AuthController extends BaseController
{
	public function index()
	{
		
		die();
	}
	public function rule()       //显示所有权限规则
	{
		$auth = D('AuthRule');
		$page = $auth->fenye();
		
		$this->assign('llist',$page->pageList);
	    $this->assign('page',$page->pageShow);
	    $this->display();
	}
	public function group()
	{
	
		$this->display();

	}
	public function addrule()  //添加权限
	{
		$rule = I('post.');
		$data['name'] = $rule['rule'];
		$data['title'] = $rule['name'];
		$data['id']   = $rule['id'];
		$data['pid'] = $rule['pid'];
		$auth = D('AuthRule');
		$res = $auth->ruleadd($data);
		if($res >0 )
			$this->success('规则添加成功');
		else
			$this->error('添加失败');
	}
	public function ruledel()
	{
		if(D('AuthRule')->ruledel(I('get.id')))
			$this->success('规则删除成功');
		else
			$this->error('删除失败');
	}
	public function assign_auth()
	{
		if(IS_POST)
		{
			$id = I('get.id');
			
			$auth = I('post.');
			foreach($auth['auth'] as $name => $key)
			{
				$rule .= $key.',';
			}
			$rule = trim($rule,',');
			$authGroup = M('authGroup');
			$authGroup->rules = $rule;
			if($authGroup->where('id='.$id)->save())
			{
				
				$this->success('操作成功！');
			}
			else
			{
			
				$this->error('操作失败！');
			}
		}else
		{
			$data = M('AuthRule')->select();
			$data= \Org\Nx\Data::channelLevel($data,0,'&nbsp;','id');
			$rule = M('authGroup')->where('id='.I('get.id'))->find();
			
			$rules = explode(",",$rule['rules']);
			$this->assign('rules',$rules);
			$this->assign('rule',$data);
			$this->display();
		}
	
	}
	public function sysopen() //系统开闭
	{
		if(!IS_POST)
		{
			$cond['name'] = 'switch';
			$data['sw'] = M('systemInfo')->where($cond)->find();
			$cond['name'] = 'tswitch';
			$data['tsw'] = M('systemInfo')->where($cond)->find();
		
			$this->assign('sw',$data);
			$this->display();
		}else
		{
			$data = I('post.');
			$sw['param']= $data['switch'];
			$tsw['param']= $data['switchon'];
			$tsw['param2']= $data['switchoff'];
			 
			if(M('systemInfo')->where("name='tswitch'")->save($tsw) |M('systemInfo')->where("name='switch'")->save($sw))
			{
				$this->success('操作成功');
			}
			
		}
	}

}