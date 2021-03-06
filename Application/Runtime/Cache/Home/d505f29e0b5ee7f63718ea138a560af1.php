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
     <div class="col-md-8 span_3">
		  <div class="bs-example1" data-example-id="contextual-table">
		    <table class="table">
		      <thead>
			  <tr><td><button type="button" class="btn btn-default" data-dismiss="modal" onclick="showModal()">添加权限规则</button></td>
		        <tr>
		          <th>id</th>
		          <th>Name</th>
		          <th>Title</th>
		          <th>Type</th>
				  <th>Status</th>
				  <th>条件</th>
				  <th>操作</th>
		        </tr>
		      </thead>
		      <tbody>
		      	<?php if(is_array($llist)): $i = 0; $__LIST__ = $llist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr >
		          <td scope="row"><?php echo ($vo["id"]); ?></td>
		          <td><?php echo ($vo["name"]); ?></td>
		          <td><?php echo ($vo["title"]); ?></td>
		          <td><?php echo ($vo["Type"]); ?></td>
				  <td><?php echo ($vo["status"]); ?></td>
				  <td><?php echo ($vo["condition"]); ?></td>
				  <td><a href="<?php echo U('Home/Auth/ruledel',array('id'=>$vo['id']));?>">删除</a></td>
		        </tr><?php endforeach; endif; else: echo "" ;endif; ?>			
		      </tbody>
		    </table>
		    	<div ><ul class="pagination"><?php echo ($page); ?></ul></div>
		   </div>
	   </div>

		<div class="clearfix"> </div>
		<div class="modal fade" id="addrule" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
   	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
					&times;
				</button>
				<h4 class="modal-title" id="myModalLabel">
					添加规则
				</h4>
			</div>
			<div class="modal-body">
				<form action="<?php echo U('Home/Auth/addrule');?>" name="ruleAdd" id="ruleAdd" method="post">
					<table class="table table-striped table-bordered table-hover table-condensed">
						<tr><th>权限名：</th><td><input class="form-control" type="text" name="name" /></td></tr>
						<tr><th>id：</th><td><input class="form-control" type="text" name="id" /></td></tr>
						<tr><th>pid：</th><td><input class="form-control" type="text" name="pid" /></td></tr>
						<tr><th>规则：</th><td><input class="form-control" type="text" name="rule" /></td></tr>
					</table>
					
				</form>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal" onclick="add()">添加规则</button>
			</div>
		</div><!-- /.modal-content -->
	</div><!-- /.modal -->
 </div> <!--/.modal head-->
	    </div>
		
		</div>
       </div>
      <!-- /#page-wrapper -->
   </div>
    <!-- /#wrapper -->
    <!-- Bootstrap Core JavaScript -->
   <!--xcc-->
 

<script>
function showModal()
{
	$("#addrule").modal('show');
}
function add()
{	
	document.getElementById('ruleAdd').submit();
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