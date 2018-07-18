<?php

namespace Home\Model;
use Home\Model\BaseModel;

class AuthRuleModel extends BaseModel
{
	public  $pageShow;
	public  $pageList;


	public function ruleadd($rule)  //权限的添加
	{
		$data = M('auth_rule');
	
		return $data->add($rule);

	}
	
	public function ruledel($id) //权限的删除
	{
		$data = M('auth_rule');
		$condition['id'] = $id;
		return  $data->where($condition)->delete();
		
	}
	public function fenye()
	{
		$data = M('auth_rule');
	    $count = $data->count();
	    $page = new  \Think\MyPage($count,10);
	
	    $this->pageShow = $page->show();
	    $this->pageList = $data->where()->order('id')->limit($page->firstRow.','.$page->listRows)->select();
		return $this;
	}

}
