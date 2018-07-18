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
	     <div class="xs">
  	       <h3 style="text-align:center">电子屏使用申请表</h3>
  	         <div class="tab-content">
						<div class="tab-pane active" id="horizontal-form">
							<form class="form-horizontal" enctype="multipart/form-data" name='formele' id='formele' action="<?php echo U('Home/Apply/index');?>" method="post">
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
										<div class="checkbox-inline1"><label><input type="checkbox" name="ActSite[]" value='电子屏' <?php if(in_array('电子屏',$form['ActSite'])): ?>checked<?php endif; ?>> 电子屏</label></div>
										<div class="checkbox-inline1"><label><input type="checkbox" name="ActSite[]" value='自助打印机' <?php if(in_array('自助打印机',$form['ActSite'])): ?>checked<?php endif; ?>> 自助打印机</label></div>
										
								
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
									<button class="btn btn-default"  onclick="sub()">提交</button>&nbsp;&nbsp;&nbsp;<button class="btn btn-default" onclick="def()">返回</button>
				
			
			</div>
							</form>
						</div>
					</div>
  </div>
  </div>
 
  </div>
      </div>
<script type="text/javascript">
function def()
{
	history.go(-1);
}
function sub()
{
	$("form").submit();
}
</script>
      <!-- /#page-wrapper -->
  <!-- </div>-->
    <!-- /#wrapper -->


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