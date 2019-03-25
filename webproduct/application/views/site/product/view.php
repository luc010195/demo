<h3 class="section-title" style="font-family: 'regular';">Thông tin sản phẩm: <?php echo $product->name ?></h3>
<div>
    <div class="category-product-inner wow fadeInUp">
        <div class="products">
            <div class="product-list product">
                <div class="row product-list-row">
                    <div class="col col-sm-4 col-lg-4">
                         <div class="product-item-holder size-big single-product-gallery small-gallery">
                            <div id="owl-single-product">
                                <div class="single-product-gallery-item" id="slide1">
                                    <a data-lightbox="image-1" data-title="Gallery">
                                        <img class="img-responsive" src="<?php echo public_url()?>/assets/images/blank.gif" data-echo="<?php echo base_url('upload/product/'.$product->image_link)?>" style="height: 347px; width: 270px;" alt="<?php echo $product->name ?>" />
                                    </a>

                                </div><!-- /.single-product-gallery-item -->
                                <?php $dem=1 ?>
                                <?php if(is_array($image_list)): ?>
                                        <?php foreach($image_list as $img):?>
                                            <?php $dem++; ?>
                                            <div class="single-product-gallery-item" id="slide<?php echo $dem ?>">
                                                <a data-lightbox="image-1" data-title="Gallery" >
                                                    <img class="img-responsive" src="<?php echo public_url()?>/assets/images/blank.gif" data-echo="<?php echo base_url('upload/product/'.$img)?>" style="height: 347px; width: 270px;" alt="<?php echo $product->name ?>" />
                                                </a>
                                            </div><!-- /.single-product-gallery-item -->  
                                        <?php endforeach;?>
                                    <?php endif; ?> 
                                        
                            </div><!-- /.single-product-slider -->
                            <div style="height: 5px;"></div>
                            <div class="single-product-gallery-thumbs gallery-thumbs">
                                <div id="owl-single-product-thumbnails">
                                    <div class="item">
                                        <a class="horizontal-thumb active" data-target="#owl-single-product" data-slide="1" href="#slide1">
                                            <img class="img-responsive" width="85" height="100" alt="<?php echo $product->name ?>" src="<?php echo public_url()?>/assets/images/blank.gif" data-echo="<?php echo base_url('upload/product/'.$product->image_link)?>" style="height: 100px" />
                                        </a>
                                    </div>
                                    <?php if(is_array($image_list)): ?>
                                        <?php foreach($image_list as $img):?>
                                            <div class="item">
                                                <a class="horizontal-thumb active" data-target="#owl-single-product" data-slide="1" href="#slide1">
                                                    <img class="img-responsive" width="85" height="100" alt="<?php echo $product->name ?>" src="<?php echo public_url()?>/assets/images/blank.gif" data-echo="<?php echo base_url('upload/product/'.$img)?>" style="height: 100px" />
                                                </a>
                                            </div>
                                        <?php endforeach;?>
                                    <?php endif; ?>
                                </div><!-- /#owl-single-product-thumbnails -->
                            </div><!-- /.gallery-thumbs -->
                        </div><!-- /.single-product-gallery -->
                    </div><!-- /.col -->
                    <div class="col col-sm-8 col-lg-8">
                        <div class="product-info">
                            <h2 class="name" style="font-family: 'regular'; text-transform: uppercase;"><a href="detail.html"><?php echo $product->name ?></a></h2>
                            <div class="rating rateit-small"></div>
                            <div class="description m-t-10"><a href="<?php echo base_url('product/catalog/'.$catalog->id)?>">Danh mục: <?php echo $catalog->name ?></a></div>
                            <div class="product-price">
                                <?php if($product->discount > 0):?>
                                   <?php $price_new = $product->price - $product->discount;?>
                                    <span class="price">Giá: <?php echo number_format($price_new)?> VNĐ</span>
                                    <span class="price-before-discount"><?php echo number_format($product->price)?> VNĐ</span>
                                <?php else:?>
                                    <span class="price"><?php echo number_format($product->price)?> VNĐ</span>
                                <?php endif;?>

                            </div><!-- /.product-price -->
                            <div class="description m-t-10">
                                <div>Lượt xem: <?php echo $product->view ?> &nbsp;&nbsp;&nbsp;&nbsp; Lượt mua: <?php echo $product->buyed ?></div>
                            </div>
                            <div class="description m-t-10"><?php echo $product->content ?></div>
                            <div class="description m-t-10">Bảo hành: <?php echo $product->warranty ?></div>
                            <div class="description m-t-10">Quà tặng: <?php echo $product->gifts ?></div>
                            <div class="cart clearfix animate-effect">
                                <div class="action">
                                    <ul class="list-unstyled">
                                        <li>
                                            <input type="number" name="quantity" min="1" max="5" style="height: 35px;width: 150px; border-radius: 5px; font-weight: bold">
                                        </li>
                                        <li class="add-cart-button btn-group">
                                            <a href="<?php echo base_url('cart/add/'.$product->id) ?>">
                                                <button class="btn btn-primary icon" data-toggle="dropdown" type="button">
                                                    <i class="fa fa-shopping-cart"></i>
                                                </button>
                                                <button class="btn btn-primary" type="button">Add to cart</button>
                                            </a>
                                        </li>

                                        <li class="lnk wishlist">
                                            <a class="add-to-cart" href="detail.html" title="Wishlist">
                                                <i class="icon fa fa-heart"></i>
                                            </a>
                                        </li>

                                        <li class="lnk">
                                            <a class="add-to-cart" href="detail.html" title="Compare">
                                                <i class="fa fa-retweet"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div><!-- /.action -->
                            </div><!-- /.cart -->
                            <div class="description m-t-10">Share : 
                                <div class="fb-share-button" data-href="https://www.facebook.com/vansung.nguyen.16" data-layout="button_count" data-size="small" data-mobile-iframe="true"><a class="fb-xfbml-parse-ignore" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fwww.facebook.com%2Fvansung.nguyen.16&amp;src=sdkpreparse">Chia sẻ</a></div>
                                <div class="fb-like" data-href="https://www.facebook.com/vansung.nguyen.16" data-width="50" data-layout="standard" data-action="like" data-size="small" data-show-faces="true" data-share="false"></div>
                            </div>
                        </div><!-- /.product-info -->
                    </div><!-- /.col -->
                </div><!-- /.product-list-row -->
            
            </div><!-- /.product-list -->
        </div><!-- /.products -->
    </div><!-- /.category-product-inner -->
</div>
  <h3 class="section-title" style="font-family: 'regular'; font-size: 18px">Bình luận</h3>
<div class="fb-comments" data-href="https://www.facebook.com/vansung.nguyen.16" data-numposts="5"></div>
<script>
        $(document).ready(function(){ 
            $(".changecolor").switchstylesheet( { seperator:"color"} );
            $('.show-theme-options').click(function(){
                $(this).parent().toggleClass('open');
                return false;
            });
        });

        $(window).bind("load", function() {
           $('.show-theme-options').delay(2000).trigger('click');
        });
</script>