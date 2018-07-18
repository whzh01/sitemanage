<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
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
                            <a href="#"><i class="fa fa-laptop nav_icon"></i>功能项<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="<?php echo U('Home/Index/forms');?>">新建活动申请表</a>
                                </li>
								<li>
                                    <a href="<?php echo U('Home/Index/index');?>">查看活动申请</a>
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
                                    <a href="<?php echo U('Home/Index/PerInfo');?>">权限管理</a>
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
        <div class="col-md-12 graphs">
     <div class="xs">
        <h3 style="text-align:center">修改个人信息</h3>
        <div class="well1 white">
        <form class="form-floating ng-pristine ng-invalid ng-invalid-required ng-valid-email ng-valid-url ng-valid-pattern" novalidate="novalidate" ng-submit="submit()">
          <fieldset>
           
            <div class="form-group">
              <label class="control-label">用户名</label>
              <input type="password" class="form-control1 ng-invalid ng-invalid-required ng-touched" ng-model="model.password" name="OriPasswd">
            </div>
            <div class="form-group">
              <label class="control-label">管理员</label>
              <input type="password" class="form-control1 ng-invalid ng-invalid-required ng-touched" ng-model="model.password" name="NewPasswd">
            </div>
      <div class="form-group">
              <label class="control-label">学院</label>
              <input type="password" class="form-control1 ng-invalid ng-invalid-required ng-touched" ng-model="model.password" name="ConPasswd">
            </div>
      <div class="form-group">
              <label class="control-label">联系电话</label>
              <input type="password" class="form-control1 ng-invalid ng-invalid-required ng-touched" ng-model="model.password" name="ConPasswd">
            </div>
            <div class="form-group">
              <button type="submit" class="btn btn-primary">保存信息</button>
              <button type="reset" class="btn btn-default">取消更改</button>
            </div>
          </fieldset>
        </form>
      </div>
    </div>
   
   </div>
      </div>
      <!-- /#page-wrapper -->
   </div>
    <!-- /#wrapper -->
    	<div class="copy">
            <p>Copyright &copy; 2017. 大连理工大学研究生会 </p>
	    </div>
<script src="/thinkphp/Public/js/bootstrap.min.js"></script>
<link href="/thinkphp/Public/css/custom.css" rel="stylesheet">
<script src="/thinkphp/Public/js/metisMenu.min.js"></script>
<script src="/thinkphp/Public/js/custom.js"></script>
<!-- Nav CSS -->

</body>
</html