
<div class="line"></div>

<div class="wrapper">
    
	   	<!-- Form -->
		<form enctype="multipart/form-data" method="post" action="" id="form" class="form">
			<fieldset>
				<div class="widget">
				    <div class="title">
						<img class="titleIcon" src="<?php echo public_url('admin')?>/images/icons/dark/add.png">
						<h6>Cập nhật Thông tin liên hệ</h6>
					</div>
					
				    <ul class="tabs">
		                <li class="activeTab"><a href="#tab1">Thông tin chung</a></li>
					</ul>
					
					<div class="tab_container">
                        <div class="tab_content pd0" id="tab1" style="display: block;">
					       <div class="formRow">
                            	<label for="param_name" class="formLeft">Tên người quản trị<span class="req">*</span></label>
                            	<div class="formRight">
                            		<span class="oneTwo"><input type="text" _autocheck="true" id="param_name" value="<?php echo $support->name?>" name="name"></span>
                            	</div>
                            	<div class="clear"></div>
                            </div>
                        </div>
                        <div class="tab_content pd0" id="tab1" style="display: block;">
                           <div class="formRow">
                                <label for="param_name" class="formLeft">Facebook<span class="req">*</span></label>
                                <div class="formRight">
                                    <span class="oneTwo"><input type="text" _autocheck="true" id="param_facebook" value="<?php echo $support->yahoo?>" name="facebook"></span>
                                </div>
                                <div class="clear"></div>
                            </div>
                        </div>
                        <div class="tab_content pd0" id="tab1" style="display: block;">
                           <div class="formRow">
                                <label for="param_name" class="formLeft">Email<span class="req">*</span></label>
                                <div class="formRight">
                                    <span class="oneTwo"><input type="text" _autocheck="true" id="param_email" value="<?php echo $support->gmail?>" name="email"></span>
                                </div>
                                <div class="clear"></div>
                            </div>
                        </div>
                        <div class="tab_content pd0" id="tab1" style="display: block;">
                           <div class="formRow">
                                <label for="param_name" class="formLeft">Tài khoản Skype<span class="req">*</span></label>
                                <div class="formRight">
                                    <span class="oneTwo"><input type="text" _autocheck="true" id="param_skype" value="<?php echo $support->skype?>" name="skype"></span>
                                </div>
                                <div class="clear"></div>
                            </div>
                        </div>
                        <div class="tab_content pd0" id="tab1" style="display: block;">
                           <div class="formRow">
                                <label for="param_name" class="formLeft">Điện thoại<span class="req">*</span></label>
                                <div class="formRight">
                                    <span class="oneTwo"><input type="text" _autocheck="true" id="param_phone" value="<?php echo $support->phone?>" name="phone"></span>
                                </div>
                                <div class="clear"></div>
                            </div>
                        </div>
                       
                    
                            
                        
                            
                    
                            
                            
				         <div class="formRow hide"></div>
						 </div>
						
						
	        		</div><!-- End tab_container-->
	        		
	        		<div class="formSubmit">
	           			<input type="submit" class="redB" value="Cập nhật">
	           			<input type="reset" class="basic" value="Hủy bỏ">
	           		</div>
	        		<div class="clear"></div>
				</div>
			</fieldset>
		</form>
</div>
<div class="clear mt30"></div>
