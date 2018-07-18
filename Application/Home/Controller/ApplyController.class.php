<?php
namespace Home\Controller;
use Common\Controller\BaseController;


class ApplyController extends BaseController
{


    public function index()  //添加新的申请
	{
		$opt = I('get.opt');
		if(IS_POST)
		{
			$data = I('post.');
			if($data['opt']=='edit' )        //修改申请
			{
				
				$res = D('Vote')->formedit($data['id']);
				
			}else
			{
				$uid = $this->uidPro($data['type']);
				$data['uid'] = $uid;
				if($data['type']==2)
					$data['fileupload'] = $this->fileupload($uid);

				$res = D('Vote')->formadd($data);
			}
			if($res>0)
				$this->success('Submit success',U('Index/index',array('type'=>$data['type'])));
			else
				$this->success('Submit Failed!');
			

		}
		
	}
	public function applyShow()
	{
		
	}

	public  function formShow()         //显示
    {  
		$cid = I('get.cid');
		
		$forms = D('Vote')->formShow($cid,$type);
		$data['ActSite'] = explode(",",$forms['sitename']);
		$data['College']=$forms['college'];
		$data['ActivationName']=$forms['activationname'];
		$data['ActivationLevel']=$forms['activationlevel'];
		$data['SiteName']  = $forms['sitename'];
		$data['ActTimeS1']=$forms['starttime'];	
		$data['ActTimeE1']=$forms['endtime'];
		$data['ActTimeS2']=$forms['starttime1'];
		$data['ActTimeE2']=$forms['endtime1'];
		$data['LiteratureStyle']=$forms['literaturestyle'];
		$data['ActCon']=$forms['activationcon'];
		$data['ActPer']=$forms['name'];
		$data['Phone']=$forms['phone'];
    	$this->assign('form',$data);
		$this->assign('opt',1);
		$this->assign('cid',$cid);
		switch ($forms['votetype'])
		{
			case 0:$this->display('forms');break;
			case 1:$this->display('square');break;
    		case 2:$this->display('eleform');break;
			default:$this->error("操作无效！");
		}
    }
	
	public function formdel()    //删除申请
	{
		$id = I('get.id');
		$form = M('vote');
		$res=$form->where('id='.$id)->delete();
		if($res>0)

			$this->success('删除成功');
		else
			$this->error('删除失败');


	}
	public function formauth() //审核申请
	{
		if(IS_POST)
		{
			
			$data = I('post.');
			switch ($data['authres'])
			{
				case '未审核': $data['authres'] = 0;break;
				case '审核通过': $data['authres'] = 1;break;
				case '未通过': $data['authres'] = 2;break;
				default:$data['authres']=4;
			}
			switch (session('user.auth'))
			{
				case 3: $cond['CollegeAut']=$data['authres'];break;
				case 2: $cond['YJYAut']=$data['authres'];break;
				case 1: $cond['YJSAut']=$data['authres'];break;
				case 0: $cond['CollegeAut']=$data['authres'];$cond['YJYAut']=$data['authres'];$cond['YJSAut']=$data['authres'];break;
				default:break;
			}
			
			$res = D('Vote')->formauth($data['uid'],$cond);
			if($res >0)
				$this->success("操作成功");
			else
				$this->error('操作失败');
		}
	}
	
	public function forms()
	{
		$this->display();
	}
	/**广场申请表操作*/
	public function square()
	{
		$this->display();
	}

	/**电子屏申请表操作*/

	public function eleform()
	{
		$this->display();
	}
	
	protected function fileupload($uid){
			$upload = new \Think\Upload();// 实例化上传类
			$upload->maxSize = 512000 ;// 设置附件上传大小
			$upload->exts = array('jpg','gif', 'png', 'jpeg');// 设置附件上传类型
			$upload->rootPath = './fileuploads/'; // 设置附件上传根目录
			$upload->savaName= $uid;
			if(!file_exists($upload->rootPath))
				mkdir($upload->rootPath);
			// 上传单个文件
			$info = $upload->uploadOne($_FILES['uploadfile']);
			if(!$info) {// 上传错误提示错误信息
				return $this->error($upload->getError());
			}else{// 上传成功 获取上传文件信息
				return $upload->rootPath.$info['savepath'].$info['savename'];
			}
	}
	protected function uidPro($type) //生成申请表id
	{
		//2017+1/2/3/+0001+xiaoyanwei 类型编号+时间戳+1位验证码
		//校验：array=[1,6,9,7,4,3]
		if(empty($type))
			$type=0;
		$ctime = time();
		$random = array(1,9,8,6,5,7,4);
		$random2 = rand(0,9);
		$uid = date("Y",$ctime).$type.substr($ctime,3,strlen($ctime));
		$uid2 = $random[substr($uid,4,6)%7];
		$uid = $uid.$uid2.$random2;

		return $uid;

	}
   
}