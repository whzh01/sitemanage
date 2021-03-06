<?php if (!defined('THINK_PATH')) exit();?>
<!DOCTYPE HTML>
<html>
<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

<title>How to make a Contact Form using HTML5, CSS3 and PHP - A Tangled in Design Demo</title>

<link type="text/css" rel="stylesheet" href="/thinkphp/Public/css/mainreq.css">

<style type="text/css">

	.topdiv{
		float:left;
		width:100%;
		line-height:45px;
		display:block;
		
	}
	.pl{
		float:left;
		width:20%;
	
	}
	.pr{
		float:left;
		width:80%;
	}
	body {
		margin: 0;
	}

	.demo-bar {
		background: #252525;
		width: 100%;
		height: 118px;
		margin-bottom: 40px;
		float: left;
	}

	.demo-bar:after {
		content: "";
		display: block;
		clear: both;
	}

	.demo-bar img:first-of-type {
		float: left;
		max-width: 100%;
		position: absolute;
		left: 0;
		bottom: 0;
	}

	.demo-bar .left {
		float: left;
		width: 60%;
		height: 118px;
		position: relative;
	}

	.demo-bar .right {
		background: url(images/demo-bar-right.jpg) left no-repeat #2e2e2e;
		width: 40%;
		max-width: 350px;
		height: 118px;
		float: right;
		position: relative;
	}

		.demo-bar p {
			width: auto;
			color: #666;
			position: absolute;
			bottom: 30px;
			right: 5%;
			text-align: right;
		}

		.demo-bar a {
			color: #ccc;
			font-size: 10px;
			border-bottom: 1px dotted #999;
			text-transform: uppercase;
			text-decoration: none;
		}

		.twitter-buttons {
			position: absolute;
			top: 20px;
			right: 5%;
			text-align: right;
		}

	.clearfix {
		clear: both;
	}

	@media screen and (max-width:580px) {
		.demo-bar .left {
		}

		.demo-bar .right {
			background: none;
		}

		.demo-bar p {
			width: 100px;
			color: #252525;
		}
	}

</style>

</head>

<body>
<div class="demo-bar">
	<div class="left">
	
	</div>
	<div class="right">
		
</div>

<div class="clearfix"></div>

	<header class="body">
    	
        <h1>
		<?php switch($con["votetype"]): case "0": ?>宣传场地申请表<?php break;?>
			<?php case "1": ?>研教楼广场使用申请表<?php break;?>
			<?php case "2": ?>电子屏申请表<?php break;?>
			<?php default: ?>123<?php endswitch;?>
		
		</h1>
        
    </header>
	
   <section class="body">
		<div class="topdiv">
            <div class="pl">活动名称：</div>
			<div class="pr"><?php echo ($con["activationname"]); ?></div>
		</div>
		
		<div class="topdiv">
            <div class="pl">承办学部：</div>
			<div class="pr"><?php echo ($con["college"]); ?></div>
		</div>
		<div class="topdiv">
            <div class="pl">宣传场地：</div>
			<div class="pr"><?php echo ($con["sitename"]); ?></div>
		</div>
		<div class="topdiv">
            <div class="pl">活动内容：</div>
			<div class="pr"><?php echo ($con["activationcon"]); ?></div>
		</div>
		<div class="topdiv">
            <div class="pl">活动起止时间：</div>
			<div class="pr"><?php echo ($con["starttime"]); ?> 至 <?php echo ($con["endtime"]); ?></div>
		</div>
		<div class="topdiv">
            <div class="pl">宣传起止时间：</div>
			<div class="pr"><?php echo ($con["starttime1"]); ?> 至 <?php echo ($con["endtime1"]); ?></div>
		</div>
		<div class="topdiv">
            <div class="pl">宣传类型：</div>
			<div class="pr"><?php echo ($con["literaturestyle"]); ?></div>
		</div>
		<div class="topdiv">
            <div class="pl">负责人：</div>
			<div class="pr"><?php echo ($con["actper"]); ?></div>
		</div>
			
		<div class="topdiv">
			
            <div class="pl">审核状态：</div>

		</div>

            
        
    </section>
    
   
</body>
</html>