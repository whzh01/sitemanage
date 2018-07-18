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
		 <a href="javascript:" onclick="ex_excel()"> <button class="btn btn-default">导出</button></a>
		    <table class="table">
		      <thead>
		        <tr>
		          <th width="5%">序号</th>
		          <th width="10%">编号</th>
		          <th width="10%">承办学部</th>
		          <th width="25%">活动名称</th>
		          <th width="10%">提交申请时间</th>		  
				  <th width="10%">研究生会审核</th>
				  <th width="10%">研究生院审核</th>
				  <th width="20%">操作</th>
		        </tr>
		      </thead>
		      <tbody>
		      	<?php if(is_array($llist)): $i = 0; $__LIST__ = $llist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr >
				<td scope="row"><?php echo ($vo["id"]); ?></td>
		          <td scope="row"><?php echo ($vo["uid"]); ?></td>
		          <td><?php echo ($vo["college"]); ?></td>
		          <td><?php echo ($vo["activationname"]); ?></td>
		          <td><?php echo ($vo["subtime"]); ?></td>				  
				  <td><?php echo ($vo["yjsaut"]); ?></td>
				  <td><?php echo ($vo["yjyaut"]); ?></td>
				  <td><a href="javascript:" onclick="auth('<?php echo ($vo["uid"]); ?>')"><button class="btn btn-primary btn-sm" data-toggle="modal">审核</button></a>
	<span style="margin-left:5px;"></span><a href="<?php echo U('Home/Apply/formShow',array('cid'=>$vo['uid'],'opt'=>1));?>"><button class="btn btn-primary btn-sm" data-toggle="modal" >修改</button></a>
	<span style="margin-left:5px;"></span><a href="javascript:if(confirm('确认删除该申请？'))location='<?php echo U('Home/Apply/formdel',array('id'=>$vo['id']));?>' "><button class="btn btn-primary btn-sm" data-toggle="modal" >删除</button></a></td>
		        </tr><?php endforeach; endif; else: echo "" ;endif; ?>			
		      </tbody>
		    </table>
			<div><ul class="pagination"><?php echo ($page); ?></ul></div>
		   </div>
	   </div>

		<div class="clearfix"> </div>
		<div class="modal fade" id="siteAuth" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
					&times;
				</button>
				<h4 class="modal-title" id="myModalLabel" >
				
				</h4>
			</div>
			<div class="modal-body" >
				<form action=" " name="formauth" id="formauth" method="post">
					<input type="hidden" name="formtype" value="<?php echo ($formtype); ?>">
				</form>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal"  id="button1">取消	</button>
			<button type="button" class="btn btn-default" data-dismiss="modal" id="button2" onclick ="formsub()">确定	</button>
			
		</div><!-- /.modal-content -->
	</div><!-- /.modal -->
</div>
	    </div>
		
		</div>
       </div>
      <!-- /#page-wrapper -->
    <!-- /#wrapper -->
    <!-- Bootstrap Core JavaScript -->
 <script>

function auth($uid){
	$('h4').html('审核申请');
	var formcont = "";
	formcont +="<div class=\"col-sm-8\">";
	formcont +="<lable> 请选择：</lable>";
	formcont +="<select  id=\"selector1\" class=\"form-control1\" name=\"authres\">";
	formcont +="<option>未审核</option>"+"<option>审核通过</option>"+"<option>未通过</option>"+"</select>"+"</div>"+"<input type=\"hidden\" name=\"uid\" />";
										
	$('#formauth').html(formcont);
	$('#formauth').attr("action","<?php echo U('Home/Apply/formauth');?>");
	$('#button1').html('取消');
	$('#button2').html('确认');
	$("input[name='uid']").val($uid);
	$('#siteAuth').modal('show');
}
function formsub()
{
	document.getElementById('formauth').submit();
}
function ex_excel()
{
	$('h4').html('导出EXCEL');
	var formcont = "";
	formcont += "<div class=\"form-group\"><label>日期：</label><input type=\"text\" class=\"form-control1\" name=\"exstart\" placeholder=\"起始时间\" onClick=\"WdatePicker()\"> <input type=\"text\" class=\"form-control1\"  placeholder=\"截止时间\" name=\"exend\" onClick=\"WdatePicker()\"> <input type=\"hidden\" name=\"formtype\" ></div>";
		$('#formauth').html(formcont);
	$('#formauth').attr('action',"<?php echo U('Home/Index/ex_excel');?>");
	$("input[name='formtype']").val(<?php echo ($formtype); ?>);
	$('#button1').html('取消');
	$('#button2').html('导出');
	$('#siteAuth').modal('show');
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