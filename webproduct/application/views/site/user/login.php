<h3 class="section-title" style="font-family: 'regular';">Đăng nhập</h3>
<div class="col-md-8">
	<form  method="post" action="<?php echo site_url('user/login')?>" class="register-form outer-top-xs" role="form">
		<!-- <div class="alert alert-danger"> -->
			<h3 class="thongbao" style="color: red"><?php echo form_error('login') ?></h3>
		<!-- </div> -->
			<div class="form-group">
			    <label class="info-title" for="exampleInputEmail1">Email <span>*</span></label>
			    <input type="email" class="form-control unicase-form-control text-input" name="email" id="email" value="<?php echo set_value('email')?>">
			    <div class="error" id="email_error"><?php echo form_error('email')?></div>
			</div>
		  	<div class="form-group">
			    <label class="info-title" for="exampleInputPassword1">Mật khẩu <span>*</span></label>
			    <input type="password" class="form-control unicase-form-control text-input" name="password" id="password">
			    <div class="error" id="password_error" style="color: red;"><?php echo form_error('password')?></div>
			</div>
					
		  	<button type="submit" class="btn-upper btn btn-primary checkout-page-button">Đăng nhập</button>
	</form>
</div>
<div class="col-md-4">

</div>