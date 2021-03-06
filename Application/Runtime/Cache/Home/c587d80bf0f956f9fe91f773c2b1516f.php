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
	     <div class="xs">
  	       <h3 style="text-align:center">电子屏使用申请表</h3>
  	         <div class="tab-content">
						<div class="tab-pane active" id="horizontal-form">
							<form class="form-horizontal" enctype="multipart/form-data"  action="<?php echo U('Home/Apply/index');?>" method="post">
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">承办学部</label>
									<div class="col-sm-8">
										<input type="text" class="form-control1" id="focusedinput"  name="College" value="<?php echo ($form['College']); ?>">
									</div>
							
								</div>
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">活动名称</label>
									<div class="col-sm-8">
										<input type="text" class="form-control1" id="focusedinput"  name="ActName" value="<?php echo ($form['ActivationName']); ?>">
									</div>
								
								</div>
								
								
							
								<div class="form-group">
									<label for="checkbox" class="col-sm-2 control-label">申请项目</label>
									<div class="col-sm-8">
										<div class="checkbox-inline1"><label><input type="checkbox" name="ActSite[]" value='电子屏'> 电子屏</label></div>
										<div class="checkbox-inline1"><label><input type="checkbox" name="ActSite[]" value='自助打印机'> 自助打印机</label></div>
										
								
									</div>
								</div>
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">活动时间</label>
									<div class="col-sm-3">
										<input type="text" class="form-control1" id="focusedinput" placeholder="开始时间" onClick="WdatePicker()" name="ActTimeS1" value="<?php echo ($form['ActTimeS1']); ?>"/>
									</div>
									<div class="col-sm-3">
										<input type="text" class="form-control1" id="focusedinput" placeholder="截止时间" onClick="WdatePicker()" name="ActTimeE1" value="<?php echo ($form['ActTimeE1']); ?>"/>
									</div>
								</div>
								<div class="form-group">
								<label for="focusedinput" class="col-sm-2 control-label">发布时间</label>
									<div class="col-sm-3">
										<input type="text" class="form-control1" id="focusedinput" placeholder="开始时间" onClick="WdatePicker()" name="ActTimeS2" value="<?php echo ($form['ActTimeS2']); ?>"/>
									</div>
									<div class="col-sm-3">
										<input type="text" class="form-control1" id="focusedinput" placeholder="截止时间" onClick="WdatePicker()" name="ActTimeE2" value="<?php echo ($form['ActTimeE2']); ?>"/>
									</div>
								</div>
								
								
								<div class="form-group">
									<label for="txtarea1" class="col-sm-2 control-label">活动内容及目的</label>
									<div class="col-sm-8"><textarea name="ActCon" id="txtarea1" cols="50" rows="10" class="form-control1" ><?php echo ($form['ActCon']); ?></textarea></div>
								</div>
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">活动负责人</label>
									<div class="col-sm-8">
										<input type="text" class="form-control1" id="focusedinput" name="ActPer" value="<?php echo ($form['ActPer']); ?>" />
									</div>
								
								</div>
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">文件上传</label>
									<div class="col-sm-8">
										<input type="file" class="form-control1" id="focusedinput" name="uploadfile" value="文件上传" />
									</div>
								
								</div>
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">联系电话</label>
									<div class="col-sm-8">
										<input type="text" class="form-control1" id="focusedinput"  name="Phone" value="<?php echo ($form['Phone']); ?>" />
										<input type="hidden" name="type" value=2>
										<?php if($opt == 1): ?><input type="hidden" name="opt" value="edit" />
											<input type="hidden" name="id" value="<?php echo ($cid); ?>" /><?php endif; ?>
										
											
									</div>
							
								</div>
									<div class="col-sm-8 col-sm-offset-2">
				<input type="submit" class="btn-success btn" />
				<button class="btn-default btn">Cancel</button>
				<button class="btn-inverse btn">Reset</button>
			</div>
							</form>
						</div>
					</div>
  </div>
  </div>
  	<div class="copy">
            <p>Copyright &copy; 2017. 大连理工大学研究生会 </p>
	    </div>
<script src="/thinkphp/Public/js/bootstrap.min.js"></script>
<link href="/thinkphp/Public/css/custom.css" rel="stylesheet">
<script src="/thinkphp/Public/js/metisMenu.min.js"></script>
<script src="/thinkphp/Public/js/custom.js"></script>
  </div>
      </div>
      <!-- /#page-wrapper -->
   </div>
    <!-- /#wrapper -->

</body>
</html>