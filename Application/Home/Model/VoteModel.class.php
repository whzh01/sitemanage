<?php
namespace Home\Model;
use Home\Model\BaseModel;

class VoteModel extends BaseModel
{
	public $pageShow;
	public $pageList;

/**
	protected $_map = array(
			'ActSite' =>'SiteName',
		'ActName'=>'ActivationName',
			'ActLevel'=>'ActivationLevel',
			'ActTimeS1'=>'StartTime',
			'ActTimeE1'=>'EndTime',
			'ActTimeS2'=>'StartTime1',
			'ActTimeE2'=>'EndTime1',
			'ActStyle'=>'LiteratureStyle',
			'ActCon'=>'ActivationCon',
			'ActPer'=>'Name',
			'type'	=>'voteType'
	);
	*/
	protected $_validate =array(
		
			array('ActTimeS1','')
	);
	

	public function formShow($cid,$type="",$user="")
	{
	
    	$vote = M('vote');
		if(!empty($cid))
			$cond['uid'] = $cid;
		else
			$cond['uid'] = 8981928391893;
		if(!empty($type))
			$cond['type'] = $type;
		if(!empty($user))
			$cond['user'] = $user;

    	$forms=$vote->where($cond)->find();	  		
		return $forms;	
		
	}
	public function formedit($cid)
	{
		$forms = I('post.');
		$mysq = M('vote');
	

		$site= implode(",",$forms['ActSite']);
		$data['SiteName']=$site;
		$data['College']=$forms['College'];
		$data['ActivationName']=$forms['ActName'];
		$data['ActivationLevel']=$forms['ActLevel'];
		$data['StartTime']=$forms['ActTimeS1'];
		$data['EndTime']=$forms['ActTimeE1'];
		$data['StartTime1']=$forms['ActTimeS2'];
		$data['EndTime1']=$forms['ActTimeE2'];
		$data['LiteratureStyle']=$forms['ActStyle'];
		$data['ActivationCon']=$forms['ActCon'];
		$data['Name']=$forms['ActPer'];
		$data['Phone']=$forms['Phone'];
		$data['SubTime']=date('Y-m-d H:i:s');
	
		$res = $mysq->where('uid='.$cid)->save($data);
		return $res;
	}
	public function formadd($forms)
	{
		$mysq = M('vote');
		/**
		//用于字段映射
		$forms['ActSite']= implode(",",$forms['ActSite']);
		$forms['uid'] = $this->uidPro($forms['type']);
		$forms['SubTime']=date('Y-m-d H:i:s');
		$forms['user']=session('user.username');
		$url = U('Home/Require/req',array('uid'=>$data['uid']));
		$filePath = './Public/Tcode/'.$data['uid'].'.png';
		$forms['TCode'] =  '__PUBLIC__/Tcode/'.$data['uid'].'.png';
		qrcode($url,6,$filePath);
		*/
		$data['uid'] = $forms['uid'];
		$data['SiteName']=implode(",",$forms['ActSite']);
		$data['College']=$forms['College'];
		$data['ActivationName']=$forms['ActName'];
		$data['ActivationLevel']=$forms['ActLevel'];
		$data['StartTime']=$forms['ActTimeS1'];
		$data['EndTime']=$forms['ActTimeE1'];
		$data['StartTime1']=$forms['ActTimeS2'];
		$data['EndTime1']=$forms['ActTimeE2'];
		$data['LiteratureStyle']=$forms['ActStyle'];
		$data['ActivationCon']=$forms['ActCon'];
		$data['Name']=$forms['ActPer'];
		$data['Phone']=$forms['Phone'];
		$data['SubTime']=date('Y-m-d H:i:s');
		$data['voteType']=$forms['type'];
		$data['fileupload'] = $forms['fileupload'];
		$data['user']=session('user.username');
		$url = U('Home/Require/req',array('uid'=>$data['uid']));
		$filePath = './Public/Tcode/'.$data['uid'].'.png';
		$data['TCode'] =  './Tcode/'.$data['uid'].'.png';
		qrcode($url,6,$filePath);
		return $mysq->data($data)->add();
		
	}
	public function formdel()
	{

	}
	public function formauth($id,$condition)
	{
		$form = M('vote');
		
		return  $form->where('uid='.$id)->save($condition);
		
	}
	public function fenye($type,$user)
	{
		$data = M('vote');
	    
		$cond['voteType'] = $type;
		if(!empty($user))
			$cond['user'] = $user;
		$count = $data->where($cond)->count();
	    $page = new  \Think\MyPage($count,10);
	    $this->pageShow = $page->show();
	    $this->pageList = $data->where($cond)->order('uid')->limit($page->firstRow.','.$page->listRows)->select();
		return $this;
	}

}