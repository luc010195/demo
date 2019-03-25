<h3 class="section-title" style="font-family: 'regular';">Chỉnh sửa thông tin thành viên</h3>
<div class="col-md-8">
	<form  method="post" action="<?php echo site_url('user/edit')?>" class="register-form outer-top-xs" role="form">
			<div class="form-group">
			    <label class="info-title" for="exampleInputEmail1">Họ và tên<span>*</span></label>
			    <input type="text" class="form-control unicase-form-control text-input" name="name" id="name" value="<?php echo $user->name?>">
			    <div class="error" id="name_error"><?php echo form_error('name')?></div>
			</div>
			<div class="form-group">
			    <label class="info-title" for="exampleInputEmail1">Email <span>*</span></label>
			    <?php echo $user->email ?>
			    
			</div>
		  	<div class="form-group">
			    <label class="info-title" for="exampleInputPassword1">Mật khẩu <span></span></label>
			    <input type="password" class="form-control unicase-form-control text-input" name="password" id="password">
			    <p style="color: blue;">Nếu thay đổi mật khẩu thì mới nhập mật khẩu </p>
			    <div class="error" id="password_error"><?php echo form_error('password')?></div>
			</div>
			<div class="form-group">
			    <label class="info-title" for="exampleInputPassword1">Nhập lại mật khẩu <span>*</span></label>
			    <input type="password" class="form-control unicase-form-control text-input" name="re_password" id="re_password">
			    <div class="error" id="re_password_error"><?php echo form_error('re_password')?></div>
			</div>
			
			
			<div class="form-group">
			    <label class="info-title" for="exampleInputEmail1">Số điện thoại <span>*</span></label>
			    <input type="number" class="form-control unicase-form-control text-input" minlength="6" name="phone" id="phone" value="<?php echo $user->phone ?>">
			    <div class="error" id="phone_error"><?php echo form_error('phone')?></div>
			</div>
			<div class="form-group">
			    <label class="info-title" for="exampleInputEmail1">Địa chỉ <span>*</span></label><div></div>
			    <textarea style="height: 80px;" name="address" id="address" class="input col-md-12" ><?php echo $user->address ?></textarea>
			    <div class="error" id="address_error"><?php echo form_error('address')?></div>
			</div>
			
		  	<button type="submit" class="btn-upper btn btn-primary checkout-page-button">Lưu thông tin</button>
	</form>
</div>
<div class="col-md-4">

</div>