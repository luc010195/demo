<h3 class="section-title" style="font-family: 'regular';">Thông tin giỏ hàng</h3>
<?php if($total_items>0):?>
	<div class="body-content outer-top-xs">
		<div class="container">
			<div class="row inner-bottom-sm">
				<div class="shopping-cart">
					<div class="col-md-12 col-sm-12 shopping-cart-table ">
						<div class="table-responsive">
							<form action="<?php echo base_url('cart/update') ?>" method="post">
								<table class="table table-bordered">
									<thead>
										<tr>
											<th class="cart-romove item">Xóa</th>
											<th class="cart-description item">Ảnh</th>
											<th class="cart-product-name item">Tên sản phẩm</th>
											
											<th class="cart-qty item">Số lượng</th>
											<th class="cart-sub-total item">Giá bán</th>
											<th class="cart-total last-item">Tổng giá</th>
										</tr>
									</thead><!-- /thead -->
									<tfoot>
										<tr>
											<td colspan="7">
												<div class="shopping-cart-btn">
													<span class="">
														<a href="<?php echo base_url('home/index'); ?>" class="btn btn-upper btn-primary outer-left-xs">Tiếp tục mua</a>
														<a><button type="submit" class="btn btn-upper btn-primary pull-right outer-right-xs" >Cập nhât</button></a>
													</span>
												</div><!-- /.shopping-cart-btn -->
											</td>
										</tr>
									</tfoot>
									<tbody>
										<?php $total_amount=0;?>
										<?php foreach($carts as  $row): ?>
											<?php $total_amount=$total_amount +$row['subtotal']; ?>
											<tr>
												<td class="romove-item"><a href="<?php echo base_url('cart/del/'.$row['id']) ?>" title="cancel" class="icon"><i class="fa fa-trash-o"></i></a></td>
												<td class="cart-image">
													<a class="entry-thumbnail" href="<?php echo base_url('product/view/'.$row['id']) ?>">
													    <img src="<?php echo base_url('upload/product/'.$row['image_link'])?>" alt="<?php echo $row['name']; ?>" style="width: 154px;height: 146px;">
													</a>
												</td>
												<td class="cart-product-name-info">
													<h4 class='cart-product-description'><a href="<?php echo base_url('product/view/'.$row['id']) ?>"><?php echo $row['name']; ?></a></h4>
													<div class="row">
														<!-- <div class="col-sm-4">
															<div class="rating rateit-small"></div>
														</div> -->
														<div class="col-sm-8">
															<div class="reviews">
																
															</div>
														</div>
													</div><!-- /.row -->
													<div class="cart-product-info">
														<span class="product-imel">ID: <span><?php echo $row['id']; ?></span></span><br>
														<span class="product-color">Lượt mua:<span></span></span>
													</div>
												</td>
												
												<td class="cart-product-quantity">
													<div class="quant-input">
											                <div class="arrows">
											                  <div class="arrow plus gradient"><span class="ir"><i class="icon fa fa-sort-asc"></i></span></div>
											                  <div class="arrow minus gradient"><span class="ir"><i class="icon fa fa-sort-desc"></i></span></div>
											                </div>
											                <input name="qty_<?php echo $row['id']; ?>"  value="<?php echo $row['qty']; ?>" >
										              </div>
									            </td>
												<td class="cart-product-sub-total"><span class="cart-sub-total-price"><?php echo number_format($row['price']);?> VNĐ</span></td>
												<td class="cart-product-grand-total"><span class="cart-grand-total-price"><?php echo number_format($row['subtotal']); ?> VNĐ</span></td>
											</tr>
										<?php endforeach;?>
									</tbody><!-- /tbody -->
								</table><!-- /table -->
							</form>
						</div>
					</div><!-- /.shopping-cart-table -->				
					<div class="col-md-4 col-sm-12 estimate-ship-tax">
						<!-- <table class="table table-bordered">
							<thead>
								<tr>
									<th>
										<span class="estimate-title">Estimate shipping and tax</span>
										<p>Enter your destination to get shipping and tax.</p>
									</th>
								</tr>
							</thead>
							<tbody>
									<tr>
										<td>
											<div class="form-group">
												<label class="info-title control-label">Country <span>*</span></label>
												<select class="form-control unicase-form-control selectpicker">
													<option>--Select options--</option>
													<option>India</option>
													<option>SriLanka</option>
													<option>united kingdom</option>
													<option>saudi arabia</option>
													<option>united arab emirates</option>
												</select>
											</div>
											<div class="form-group">
												<label class="info-title control-label">State/Province <span>*</span></label>
												<select class="form-control unicase-form-control selectpicker">
													<option>--Select options--</option>
													<option>TamilNadu</option>
													<option>Kerala</option>
													<option>Andhra Pradesh</option>
													<option>Karnataka</option>
													<option>Madhya Pradesh</option>
												</select>
											</div>
											<div class="form-group">
												<label class="info-title control-label">Zip/Postal Code</label>
												<input type="text" class="form-control unicase-form-control text-input" placeholder="">
											</div>
											<div class="pull-right">
												<button type="submit" class="btn-upper btn btn-primary">GET A QOUTE</button>
											</div>
										</td>
									</tr>
							</tbody>
						</table> -->
					</div>

					<div class="col-md-4 col-sm-12 estimate-ship-tax">
						<!-- <table class="table table-bordered">
							<thead>
								<tr>
									<th>
										<span class="estimate-title">Discount Code</span>
										<p>Enter your coupon code if you have one..</p>
									</th>
								</tr>
							</thead>
							<tbody>
									<tr>
										<td>
											<div class="form-group">
												<input type="text" class="form-control unicase-form-control text-input" placeholder="You Coupon..">
											</div>
											<div class="clearfix pull-right">
												<button type="submit" class="btn-upper btn btn-primary">APPLY COUPON</button>
											</div>
										</td>
									</tr>
							</tbody>
						</table> -->
					</div>

					<div class="col-md-4 col-sm-12 cart-shopping-total">
						<table class="table table-bordered">
							<thead>
								<tr>
									<th>
										<div class="cart-sub-total">
											Tổng tiền<span class="inner-left-md"></span>
										</div>
										<div class="cart-grand-total">
											<span class="inner-left-md" ><?php echo number_format($total_amount) ?> VNĐ</span>
											<!-- <input type="text" name="tongtien" value="<?php echo number_format($total_amount) ?>" /> -->
										</div>
									</th>
								</tr>
							</thead><!-- /thead -->
							
							<tbody>
								<tr>
									<td>
										<div class="cart-checkout-btn pull-left">
											<a href="<?php echo base_url('cart/del/'.'0') ?>"><button type="submit" class="btn btn-primary">Xóa giỏ hàng</button></a>
											<!-- <span class="">Checkout with multiples address!</span> -->
										</div>
										<div class="cart-checkout-btn pull-right">
											<a href="<?php echo site_url('order/checkout') ?>"><button type="submit" class="btn btn-primary">ĐẶT MUA</button></a>
											<!-- <span class="">Checkout with multiples address!</span> -->
										</div>
									</td>
								</tr>
							</tbody><!-- /tbody -->
						</table><!-- /table -->
					</div>			
				</div><!-- /.shopping-cart -->
			</div> <!-- /.row -->

			<div id="brands-carousel" class="logo-slider wow fadeInUp">
				<h3 class="section-title" style="font-family: 'regular';">Sản phẩm nỗi bật</h3>
				<div class="logo-slider-inner">	
					<div id="brand-slider" class="owl-carousel brand-slider custom-carousel owl-theme">
						<?php foreach($product_newest as $row):?>
							<div class="item">
								<a href="<?php echo base_url('product/view/'.$row->id) ?>" class="image">
									<img data-echo="<?php echo base_url('upload/product/'.$row->image_link) ?>" src="<?php echo base_url('upload/product/'.$row->image_link) ?>" alt="<?php echo $row->name ?>" style="width: 150px;height: 120px">
								</a>	
							</div><!--/.item-->
						<?php endforeach;?>
						
				    </div><!-- /.owl-carousel #logo-slider -->
				</div><!-- /.logo-slider-inner -->
			</div><!-- /.logo-slider -->
		</div><!-- /.container -->
	</div><!-- /.body-content -->
<?php else:?>
	<h4>Không có sản phẩm nào trong giỏ hàng</h4>
<?php endif;?>