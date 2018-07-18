<?php if (!defined('THINK_PATH')) exit();?>

  
        <div id="page-wrapper">
        <div class="graphs">
	     <div class="xs">
  	       <h3 style="text-align:center">宣传场地申请表</h3>
  	         <div class="tab-content">
						<div class="tab-pane active" id="horizontal-form">
							<form class="form-horizontal" action="<?php echo U('Home/Apply/index');?>" method="post">
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
									<label for="radio" class="col-sm-2 control-label">活动等级</label>
									<div class="col-sm-8">
								
										<?php if(in_array(($form['ActivationLevel']), explode(',',"校A++"))): ?><div class="radio-inline"><label><input type="radio" name="ActLevel" value='校A++'  checked="checked"> 校级A++</label></div>
										<?php else: ?>
										
											<div class="radio-inline"><label><input type="radio" name="ActLevel" value='校A++'  > 校级A++</label></div><?php endif; ?>
										<?php if(in_array(($form['ActivationLevel']), explode(',',"校A+"))): ?><div class="radio-inline"><label><input type="radio" name="ActLevel" value='校A+'  checked="checked"> 校级A+</label></div>
										<?php else: ?>
											<div class="radio-inline"><label><input type="radio" name="ActLevel" value='校A+'  > 校级A+</label></div><?php endif; ?>
										<?php if(in_array(($form['ActivationLevel']), explode(',',"校级A"))): ?><div class="radio-inline"><label><input type="radio" name="ActLevel" value='校A'  checked="checked"> 校级A</label></div>
										<?php else: ?>
											<div class="radio-inline"><label><input type="radio" name="ActLevel" value='校级A'  > 校级A</label></div><?php endif; ?>
										<?php if(in_array(($form['ActivationLevel']), explode(',',"校级B"))): ?><div class="radio-inline"><label><input type="radio" name="ActLevel" value='校级B'  checked="checked"> 校级B</label></div>
										<?php else: ?>
											<div class="radio-inline"><label><input type="radio" name="ActLevel" value='校级B'  > 校级B</label></div><?php endif; ?>
										<?php if(in_array(($form['ActivationLevel']), explode(',',"院级"))): ?><div class="radio-inline"><label><input type="radio" name="ActLevel" value='院级'  checked="checked"> 院级</label></div>
										<?php else: ?>
											<div class="radio-inline"><label><input type="radio" name="ActLevel" value='院级'  > 院级</label></div><?php endif; ?>
										
									</div>
								</div>
							
								<div class="form-group">
									<label for="checkbox" class="col-sm-2 control-label">宣传地点</label>
									<div class="col-sm-8">
										<div class="checkbox-inline1"><label><input type="checkbox" name="ActSite[]" value='研教楼广场'> 研教楼广场</label></div>
										<div class="checkbox-inline1"><label><input type="checkbox" name="ActSite[]" value='研教楼一、二楼栏杆处'> 研教楼一、二楼栏杆处</label></div>
										<div class="checkbox-inline1"><label><input type="checkbox" name="ActSite[]" value='研教楼报告厅'> 研教楼报告厅</label></div>
										<div class="checkbox-inline1"><label><input type="checkbox" name="ActSite[]" value='北山公寓'> 北山公寓</label></div>
										<div class="checkbox-inline1"><label><input type="checkbox" name="ActSite[]" value='西山研究生公寓'> 西山研究生公寓</label></div>
										<div class="checkbox-inline1"><label><input type="checkbox" name="ActSite[]" value='大黑楼前栏杆'> 大黑楼前栏杆</label></div>
								
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
								<label for="focusedinput" class="col-sm-2 control-label">张贴时间</label>
									<div class="col-sm-3">
										<input type="text" class="form-control1" id="focusedinput" placeholder="开始时间" onClick="WdatePicker()" name="ActTimeS2" value="<?php echo ($form['ActTimeS2']); ?>"/>
									</div>
									<div class="col-sm-3">
										<input type="text" class="form-control1" id="focusedinput" placeholder="截止时间" onClick="WdatePicker()" name="ActTimeE2" value="<?php echo ($form['ActTimeE2']); ?>"/>
									</div>
								</div>
								<div class="form-group">
									<label for="selector1" class="col-sm-2 control-label">宣传品类型</label>
									<div class="col-sm-8"><select  id="selector1" class="form-control1" name="ActStyle">
										<option>条幅</option>
										<option>海报</option>
										<option>条幅、海报</option>
										<option>其他</option>
							
									</select></div>
								</div>
								
								<div class="form-group">
									<label for="txtarea1" class="col-sm-2 control-label">活动内容</label>
									<div class="col-sm-8"><textarea name="ActCon" id="txtarea1" cols="50" rows="10" class="form-control1" ><?php echo ($form['ActCon']); ?></textarea></div>
								</div>
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">活动负责人</label>
									<div class="col-sm-8">
										<input type="text" class="form-control1" id="focusedinput" name="ActPer" value="<?php echo ($form['ActPer']); ?>" />
									</div>
								
								</div>
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">联系电话</label>
									<div class="col-sm-8">
										<input type="text" class="form-control1" id="focusedinput"  name="Phone" value="<?php echo ($form['Phone']); ?>" />
										<input type="hidden" name="type" value=0>
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
  
  </div>
      </div>
      <!-- /#page-wrapper -->
   </div>
    <!-- /#wrapper -->

</body>
</html>