<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML / >
<html>
<head>
<title><?php echo ($title); ?></title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
 <!-- Bootstrap Core CSS -->
<link href="/thinkphp/Public/css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<!-- Custom CSS -->
<link href="/thinkphp/Public/css/style.css" rel='stylesheet' type='text/css' />
<!-- Graph CSS -->
<link href="/thinkphp/Public/css/lines.css" rel='stylesheet' type='text/css' />
<link href="/thinkphp/Public/css/font-awesome.css" rel="stylesheet"> 
<!----webfonts
<link href="/thinkphp/Public/css/font.css" rel='stylesheet' type='text/css'>-->
<!---//webfonts--->  
<!-- Nav CSS -->
<link href="/thinkphp/Public/css/custom.css" rel="stylesheet">
</head>
<body>

   <div id="wrapper">
     <!-- Navigation -->
        <nav class="top1 navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <p class="navbar-brand" >宣传场地管理系统</p>
            </div>
            <!-- navbar-header -->
            <ul class="nav navbar-nav navbar-right">
				
			    <li class="dropdown">
	        		<a href="#" class="dropdown-toggle avatar" data-toggle="dropdown"><img src="/thinkphp/Public/images/1.png"><span class="badge">9</span></a>
	        		<ul class="dropdown-menu">
						<li class="m_2"><?php echo ($cuser); ?></li>	
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
                                    <a href="<?php echo U('Home/Apply/forms');?>">新建场地申请表</a>
                                </li>
								<li>
                                    <a href="<?php echo U('Home/Apply/square');?>">新建广场申请表</a>
                                </li>
								<li>
                                    <a href="<?php echo U('Home/Apply/eleform');?>">新建电子屏申请表</a>
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
                                    <a href="<?php echo U('Home/Auth/group');?>">用户组管理</a>
                                </li>
								<li>
                                    <a href="<?php echo U('Home/Auth/rule');?>">权限管理</a>
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
    
<!-- Nav CSS -->

</body>
</html
	<div class="copy">
            <p>Copyright &copy; 2017. 大连理工大学研究生会 </p>
	    </div>

		<!-- jQuery 不可改变位置顺序-->
<script src="/thinkphp/Public/js/jquery.min.js"></script>
		<!-- Metis Menu Plugin JavaScript -->
<script src="/thinkphp/Public/js/metisMenu.min.js"></script>
<script src="/thinkphp/Public/js/custom.js"></script>
		<!-- Graph JavaScript -->
<script src="/thinkphp/Public/js/d3.v3.js"></script>
<script src="/thinkphp/Public/js/rickshaw.js"></script>
		<!--The calendar JS-->
<script src="/thinkphp/Public/MyDataPicker/WdatePicker.js"></script>

<script src="/thinkphp/Public/js/bootstrap.min.js"></script>

<!--
<script src="http://apps.bdimg.com/libs/jquery/2.1.4/jquery.min.js"></script>

<script src="http://apps.bdimg.com/libs/bootstrap/3.3.4/js/bootstrap.min.js"></script>-->
</body>
</html>