<?php
namespace Home\Model;
use Home\Model\BaseModel;
class NavModel extends BaseModel
{

	public function getMenu()
	{
		$data = $this->select();
		$data= \Org\Nx\Data::channelLevel($data,0,'&nbsp;','id');
		$auth=new \Think\Auth();
		
		foreach ($data as $k => $v) 
		{
			
			if ($auth->check($v['mca'],$_SESSION['user']['id'])) 
			{
				foreach ($v['_data'] as $m => $n) 
				{
					if(!$auth->check($n['mca'],$_SESSION['user']['id']))
					{
					
						unset($data[$k]['_data'][$m]);
					}
				}
			}else
			{
				// 删除无权限的菜单
				unset($data[$k]);
			}
		}
	 
		/**
		foreach ($data as $key )
		{

			echo $key['name']."----".$data['mca']."<br/>";
			if(!empty($key['_data']))
			{

				foreach ($key['_data'] as $val)
				{
					echo "&nbsp;&nbsp;&nbsp;".$val['name'].''.$val['mca']."<br />";
				}
			}


		}
		*/
		return $data;
	}
}