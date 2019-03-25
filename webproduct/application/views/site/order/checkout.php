<h3 class="section-title" style="font-family: 'regular';">Thông tin đặt hàng</h3>
<div class="col-md-8">
	<form  method="post" action="<?php echo site_url('order/checkout')?>" class="register-form outer-top-xs" role="form">
			<div class="form-group">
			    <label class="info-title" for="exampleInputEmail1">Họ và tên người nhận<span>*</span></label>
			    <input type="text" class="form-control unicase-form-control text-input" name="name" id="name" value="<?php echo isset($user->name) ? $user->name: set_value('name') ?>">
			    <div class="error" id="name_error" style="color: red;"><?php echo form_error('name')?></div>
			</div>
			<div class="form-group">
			    <label class="info-title" for="exampleInputEmail1">Email<span>*</span></label>
			    <input type="text" class="form-control unicase-form-control text-input" name="email" id="email" value="<?php echo isset($user->email) ? $user->email:set_value('email')  ?>">
			    <div class="error" id="email_error" style="color: red;"><?php echo form_error('email')?></div>
			</div>
	
			<div class="form-group">
			    <label class="info-title" for="exampleInputEmail1">Số điện thoại <span>*</span></label>
			    <input type="number" class="form-control unicase-form-control text-input" minlength="6" name="phone" id="phone" value="<?php echo isset($user->phone) ? $user->phone:set_value('phone')?>">
			    <div class="error" id="phone_error" style="color: red;"><?php echo form_error('phone')?></div>
			</div>
			<div class="form-group">
			    <label class="info-title" for="exampleInputEmail1">Tổng số tiền đơn hàng:</label>
			    <b style="color: blue; font-weight: bold; font-size: 20px;"><?php echo number_format($total_amount) ?> VNĐ</b>
			</div>
			<div class="form-group">
			    <label class="info-title" for="exampleInputEmail1">Thanh toán qua <span>*</span></label>
			    <select name="payment" class="col-md-12" style="height: 40px;" value="<?php echo set_value('payment') ?>" >
				  	<option >...Chọn cổng thanh toán....</option>
				  	<option value="0">Thanh toán khi nhận hàng</option>
				  	<option value="1">Bảo kim</option> 	
				  	<option value="2">Ngân lượng</option> 	
				</select>
			    
			    <div class="error" id="payment_error" style="color: red;"><?php echo form_error('payment')?></div>
			</div>
			<div class="form-group">
			    <label class="info-title" for="exampleInputEmail1">Địa chỉ <span>*</span></label><div></div>
			    <textarea style="height: 80px;" name="message" id="message" class="input col-md-12" value="<?php echo set_value('message') ?>" ></textarea>
			    <div class="error" id="address_error" style="color: red;"><?php echo form_error('message')?></div>
			</div>
			<div class="col-md-12" style="height: 10px;"></div>
		  	<button type="submit" class="btn-upper btn btn-primary checkout-page-button">Đặt hàng</button>
	</form>
</div>
<div class="col-md-4">

</div>