<?php
namespace Home\Controller;

use Common\Controller\BaseController;

class IndexController extends BaseController
{
	public function index()
	{
		$title = "宣传场地管理系统";
		$nav = D('Nav')->getMenu();
		$this->assign("nav",$nav);
	    $this->assign("title",$title);
		/**Fenye program */
		$page = D('Vote')->fenye($type,session('user.username'));
		$this->assign('llist',$page->pageList);
		$this->assign('page',$page->pageShow);
		$this->display('index');
	}
    protected function view($type=5)  //查看申请
	{
		
		$title = "宣传场地管理系统";
		$nav = D('Nav')->getMenu();
		$this->assign("nav",$nav);
	    $this->assign("title",$title);
		if(!empty($type) or $type==0)
		{
			/**Fenye program */
			$page = D('Vote')->fenye($type,session('user.username'));
			$this->assign('llist',$page->pageList);
			$this->assign('page',$page->pageShow);
			$this->display('index');
		}else
		{
			echo "009".$type;
		}
    	
    }
	
	public function viewele()
	{
		$this->view(2);
	}
	public function viewsqu()
	{
		$this->view(1);
	}
	public function viewsite()
	{
		$this->view(0);
	}
	public function authele()
	{
		$this->formAuth(2);
	}
	public function authsqu()
	{
		$this->formAuth(1);
	}
	public function authsite()
	{
		$this->formAuth(0);
	}
	protected function formAuth($type=5)
	{
		$title = "Publicity site management system";
	    $this->assign("title",$title);
	    /**Fenye program */
		$this->assign('formtype',$type);
	    $page = D('Vote')->fenye($type);
		$this->assign('llist',$page->pageList);
	    $this->assign('page',$page->pageShow);
	    $this->display('formauth');
	}

	public function login()
    {
    	$this->display(U('Home/Login/logout'));
    }
	public function test()
	{

		$vote =D('Vote')->select();
		foreach($vote as $key)
		{
		
			$key['tcode'] = str_replace("__PUBLIC__/","",$key['tcode']);
			D('Vote')->where('id='.$key['id'])->save($key);
		}
		
		/**
		$data['uid']=198;
		$filePath = "./Public/Tcode/05.png";
		$url ='http://192.168.0.132'. U('Home/Require/req',array('uid'=>$data['uid']));
		if(file_exists($filePath))
			echo 1;
		else
			$t = qrcode($url,8,$filePath);
		*/
			
				/**
		$data['uid'] = 20172612100171;
		$url = U('Home/Require/req',array('uid'=>$data['uid']));
		echo $url;
		$t = qrcode(999);
		var_dump($t);die();
		**/
		/**
		if(empty($type))
			$type=0;
		$ctime = time();
		$random = array(1,9,8,6,5,7,4);
		$random2 = rand(0,9);
		$uid = date("Y",$ctime).$type.substr($ctime,3,strlen($ctime));
		$uid2 = $random[substr($uid,4,6)%7];
		$uid = $uid.$uid2.$random2;
		echo $uid;die();
	**/
	}
	public function ex_excel()
	{
		if(IS_POST)
		{
			$date = I('post.');
			$condition['voteType'] = $date['formtype'];
		
			$condition['SubTime'] = array(array('gt',$date['exstart']),array('lt',$date['exend']));
			$res = D('Vote')->where($condition)->select();
			create_xls($res,"123.xls");
		
		}
	}
   
}