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
<script src="https://code.jquery.com/jquery-3.0.0.min.js"></script>
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
					<?php if(is_array($nav)): foreach($nav as $key=>$navVal): ?><li><a href="<?php echo U($navVal['mca']);?>" ><i class="fa fa-dashboard fa-fw nav_icon"></i><?php echo ($navVal["name"]); ?></a> 
						 <ul class="nav nav-second-level">
						<?php if(!empty($navVal['_data'])): if(is_array($navVal['_data'])): foreach($navVal['_data'] as $key=>$navNext): ?><li>
									<a href="<?php echo U($navNext['mca']);?>" ><?php echo ($navNext["name"]); ?></a>
								</li><?php endforeach; endif; endif; ?>
						</ul>
						</li><?php endforeach; endif; ?>
					
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>
 
		
<div id="page-wrapper">
   <div class="graphs">	
    <div class="content_bottom">
	  <div class="bs-example1" data-example-id="contextual-table">
		<ul class="nav nav-tabs">
			<li ><a href="<?php echo U('Home/Users/user');?>">管理员列表</a></li>
			<li class="active"><a href="<?php echo U('Home/Users/add_user');?>">添加管理员</a></li>
		</ul>
		<form class="form-horizontal" role="form" name="addUser" id="addUser" action="<?php echo U('Home/Users/add_user');?>" method="post" >
			 
			<div class="form-group">
				<label class="control-label">用户名：</label>
				<input type="text" class=" form-control1" name="user" />
			</div>
			<div class="form-group">
				<div class="form-control1">
					 <label class="control-label">所属用户组：</label>
					 <?php if(is_array($group)): $i = 0; $__LIST__ = $group;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><label>
								<input type="radio" name="group" id="group<?php echo ($vo["id"]); ?>" value="<?php echo ($vo["id"]); ?>"><?php echo ($vo["title"]); ?>
							</label><?php endforeach; endif; else: echo "" ;endif; ?>
				</div>
			</div>
			<div class="form-group">
				<div class="form-control1">
						<label>审核级别：</label>
						<label>
							<input type="radio" name="auth" id="auth3" value=3>学院
						</label>
						<label>
							<input type="radio" name="auth" id="auth2" value=2>研究生会
						</label>
						<label>
							<input type="radio" name="auth" id="auth1" value=1>研究生院
						</label>
						<label>
							<input type="radio" name="auth" id="auth0" value=0>综合审核
						</label>
				</div>
			</div>
			<div class="form-group">
				<label class="control-label">学院：</label><input type="text" class="form-control1" name="xueyuan" />
			</div>
			<div class="form-group"><label>负责人：</label><input type="text" class="form-control1" name="name" /></div>
			<div class="form-group"><label>联系方式：</label><input type="text" class="form-control1" name="tel" /></div>
			<div class="form-group"><label>密码：</label><input type="text" class="form-control1" name="pwd" /></div>
			
			<div ><button class="btn btn-default" onclick="add();">添加</button>
				<span style="margin-left:10px;margin-right:10px;"></span>
				<button class="btn btn-default" onclick="cancel()">取消</button>
			</div>
		</form>
	  </div>
	</div>
  </div>
</div>
<script type="text/javascript">
$(document).ready(function()
{
	$("#auth<?php echo ($auth); ?>").attr('checked','checked');
	$("#group$key").attr('checked','checked');
	
});
function add()
{
	document.getElementById('addUser').submit();

}
function cancel()
{
	history.back(-1);
}
function check()
{

}

</script>

	<div class="copy">
            <p>Copyright &copy; 2017. 大连理工大学研究生会 </p>
	    </div>

		<!-- jQuery 不可改变位置顺序-->
<!--<script src="/thinkphp/Public/js/jquery.min.js"></script>-->
<script src="https://code.jquery.com/jquery-3.0.0.min.js"></script>
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