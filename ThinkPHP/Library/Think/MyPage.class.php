<?php

namespace Think;

class MyPage extends Page
{

	private $p       = 'p'; //分页参数名
    private $url     = ''; //当前链接URL
    private $nowPage = 1;

	 protected $config = array(
		 
          'first'  => ' << ',
		'prev'   => '上一页',
        'next'   => '下一页',
		 'end'	=> ' >> ',
        'last'   => '>>',
        'theme'  => ' <li>%FIRST%</li><li>%UP_PAGE%</li> <li >%LINK_PAGE%</li> <li>%DOWN_PAGE%</li> <li>%END%</li><li class="disable"><a href="#">    第 %NOW_PAGE%  页  /  共 %TOTAL_PAGE% 页</a></li>',
    );



  
	public function show()
	{
													
		return substr(parent::show(),5,strlen(parent::show())-6);
	}
}