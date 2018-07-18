<?php if (!defined('THINK_PATH')) exit();?>
     <!DOCTYPE HTML>
<html>
<head>
<title><?php echo ($title); ?></title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Modern Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
 <!-- Bootstrap Core CSS -->
<link href="/thinkphp/Public/css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<!-- Custom CSS -->
<link href="/thinkphp/Public/css/style.css" rel='stylesheet' type='text/css' />
<!-- Graph CSS -->
<link href="/thinkphp/Public/css/lines.css" rel='stylesheet' type='text/css' />
<link href="/thinkphp/Public/css/font-awesome.css" rel="stylesheet"> 
<!-- jQuery -->
<script src="/thinkphp/Public/js/jquery.min.js"></script>

<!----webfonts--->
<link href="/thinkphp/Public/css/font.css" rel='stylesheet' type='text/css'>
<!---//webfonts--->  
<!-- Nav CSS -->
<link href="/thinkphp/Public/css/custom.css" rel="stylesheet">
<!-- Metis Menu Plugin JavaScript -->
<script src="/thinkphp/Public/js/metisMenu.min.js"></script>
<script src="/thinkphp/Public/js/custom.js"></script>
<!-- Graph JavaScript -->
<script src="/thinkphp/Public/js/d3.v3.js"></script>
<script src="/thinkphp/Public/js/rickshaw.js"></script>
<script src="/thinkphp/Public/MyDataPicker/WdatePicker.js"></script>
</head>
<body>
<div id="wrapper">
     <!-- Navigation -->
        <nav class="top1 navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <p class="navbar-brand" >宣传场地管理系统</p>
            </div>
            <!-- /.navbar-header -->
            <ul class="nav navbar-nav navbar-right">
				
			    <li class="dropdown">
	        		<a href="#" class="dropdown-toggle avatar" data-toggle="dropdown"><img src="/thinkphp/Public/images/1.png"><span class="badge">9</span></a>
	        		<ul class="dropdown-menu">
	
						<li class="m_2"><a href="<?php echo U('Home/Login/logout');?>"><i class="fa fa-lock"></i> Logout</a></li>	
	        		</ul>
	      		</li>
			</ul>
			<form class="navbar-form navbar-right">
              <input type="text" class="form-control" value="Search..." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search...';}">
            </form>
        <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li>
                            <a href="<?php echo U('Home/Index/index');?>"><i class="fa fa-dashboard fa-fw nav_icon"></i>主界面</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-laptop nav_icon"></i>添加申请<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="<?php echo U('Home/Index/forms');?>">新建场地申请表</a>
                                </li>
								<li>
                                    <a href="<?php echo U('Home/Index/square');?>">新建广场申请表</a>
                                </li>
								<li>
                                    <a href="<?php echo U('Home/Index/eleform');?>">新建电子屏申请表</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
						<li>
                            <a href="#"><i class="fa fa-indent nav_icon"></i>查看已提交申请<span class="fa arrow"></span></a>
							<ul class="nav nav-second-level">
							<li>
								<a href="<?php echo U('Home/Index/index','type=0');?>">查看场地申请</a>
							</li>
							<li>
								<a href="<?php echo U('Home/Index/index','type=1');?>">查看广场申请</a>
							</li>
							<li>
								<a href="<?php echo U('Home/Index/index','type=2');?>">查看电子屏申请</a>
							</li>
							</ul>
                        </li>
						<li>
                            <a href="#"><i class="fa fa-laptop nav_icon"></i>审核申请<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="<?php echo U('Home/Index/formAuth','type=0');?>">审核场地申请</a>
                                </li>
								<li>
                                    <a href="<?php echo U('Home/Index/formAuth','type=1');?>">审核广场申请</a>
                                </li>
								<li>
                                    <a href="<?php echo U('Home/Index/formAuth','type=2');?>">审核电子屏申请</a>
                                </li>
							
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-indent nav_icon"></i>系统设置<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="<?php echo U('Home/Index/validation');?>">修改密码</a>
                                </li>
                                <li>
                                    <a href="<?php echo U('Home/Index/PerInfo');?>">修改个人信息</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
						<li>
                            <a href="#"><i class="fa fa-indent nav_icon"></i>权限管理<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="<?php echo U('Home/Index/validation');?>">用户管理</a>
                                </li>
                                <li>
                                    <a href="<?php echo U('Home/Index/PerInfo');?>">用户组管理</a>
                                </li>
								<li>
                                    <a href="<?php echo U('Home/Auth/ruleShow');?>">权限管理</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="<?php echo U('Home/Login/logout');?>"><i class="fa fa-envelope nav_icon"></i>退出系统</a>
                        
                            <!-- /.nav-second-level -->
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>
    
	
        <div id="page-wrapper">
        <div class="graphs">
     	
    <div class="content_bottom">
     <div class="col-md-8 span_3">
		  <div class="bs-example1" data-example-id="contextual-table">
		    <table class="table">
		      <thead>
		        <tr>
		          <th>  序号</th>
		          <th>承办学部</th>
		          <th>活动名称</th>
		          <th>提交申请时间</th>
				  <th>活动负责人</th>
				  <th>审核人</th>
				  <th>审核状态</th>
				  <th>操作</th>
		        </tr>
		      </thead>
		      <tbody>
		      	<?php if(is_array($llist)): $i = 0; $__LIST__ = $llist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr >
		          <td scope="row"><?php echo ($vo["id"]); ?></td>
		          <td><?php echo ($vo["college"]); ?></td>
		          <td><?php echo ($vo["activationname"]); ?></td>
		          <td><?php echo ($vo["subtime"]); ?></td>
				  <td><?php echo ($vo["name"]); ?></td>
				  <td>Zhao</td>
				  <td><span style="margin-left:10px;"></span><a href="<?php echo U('Home/Apply/author');?>">审核通过：二维码下载</a></td>
				  <td><a href="<?php echo U('Home/Apply/formShow',array('cid'=>$vo['id'],'opt'=>1));?>">修改</a><span style="margin-left:10px;"></span><a href="<?php echo U('Home/Apply/formdel',array('id'=>$vo['id']));?>">删除</a></td>
		        </tr><?php endforeach; endif; else: echo "" ;endif; ?>
			
		 
				<!--
		        <tr class="success">
		          <th scope="row">3</th>
		          <td>Column content</td>
		          <td>Column content</td>
		          <td>Column content</td>
		        </tr>
		        <tr>
		          <th scope="row">4</th>
		          <td>Column content</td>
		          <td>Column content</td>
		          <td>Column content</td>
		        </tr>
		        <tr class="info">
		          <th scope="row">5</th>
		          <td>Column content</td>
		          <td>Column content</td>
		          <td>Column content</td>
		        </tr>
		        <tr>
		          <th scope="row">6</th>
		          <td>Column content</td>
		          <td>Column content</td>
		          <td>Column content</td>
		        </tr>
		        <tr class="warning">
		          <th scope="row">7</th>
		          <td>Column content</td>
		          <td>Column content</td>
		          <td>Column content</td>
		        </tr>
		        <tr>
		          <th scope="row">8</th>
		          <td>Column content</td>
		          <td>Column content</td>
		          <td>Column content</td>
		        </tr>
		        <tr class="danger">
		          <th scope="row">9</th>
		          <td>Column content</td>
		          <td>Column content</td>
		          <td>Column content</td>
		        </tr>
				-->
		      </tbody>
		    </table>
		    	<div><?php echo ($page); ?></div>
		   </div>
	   </div>

		<div class="clearfix"> </div>
	    </div>
		
	<!--		<div class="copy">
            <p>Copyright &copy; 2017. 大连理工大学研究生会 </p>
	    </div>
<script src="/thinkphp/Public/js/bootstrap.min.js"></script>
<link href="/thinkphp/Public/css/custom.css" rel="stylesheet">
<script src="/thinkphp/Public/js/metisMenu.min.js"></script>
<script src="/thinkphp/Public/js/custom.js"></script>-->
		</div>
       </div>
      <!-- /#page-wrapper -->
   </div>
    <!-- /#wrapper -->
    <!-- Bootstrap Core JavaScript -->
   <!--xcc-->
     	<div class="copy">
            <p>Copyright &copy; 2017. 大连理工大学研究生会 </p>
	    </div>
<script src="/thinkphp/Public/js/bootstrap.min.js"></script>
<link href="/thinkphp/Public/css/custom.css" rel="stylesheet">
<script src="/thinkphp/Public/js/metisMenu.min.js"></script>
<script src="/thinkphp/Public/js/custom.js"></script>   
</body>
</html>