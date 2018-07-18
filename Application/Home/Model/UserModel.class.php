<?php
namespace Home\Model;
use Home\Model\BaseModel;
class UserModel extends BaseModel
{
	protected $_validate=array(
		array('username','','该账号已存在！',0,'unique',3),
		array('password','6,12','密码长度不少于6位！',1,'length'),
		array('username','require','用户名不能为空！')

		);
	public function login($login)
	{
		$User=M("user");
		$condition['username']=$login['user'];
		
		$data = $User->where($condition)->find();
		return $data;
	}
}