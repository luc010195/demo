<div id="hero">
    <div id="owl-main" class="owl-carousel owl-inner-nav owl-ui-sm">
        <?php foreach($slide_list as $row):?>
            <div class="item" style="background-image: url(<?php echo base_url('upload/slide/'.$row->image_link) ?>);">
                <div class="container-fluid">
                    <div class="caption bg-color vertical-center text-left">
                        <div class="big-text fadeInDown-1">
                            The new <span class="highlight">imac</span> for you
                        </div>

                        <div class="excerpt fadeInDown-2 hidden-xs">
                        
                        <span>Chào mừng bạn đến với trang web của chúng tôi</span>
                        <span>Chúc bạn một ngày mua sấm thật vui vẻ</span>
                        </div>
                        <div class="button-holder fadeInDown-3">
                            <a href="index.php?page=single-product" class="btn-lg btn btn-uppercase btn-primary shop-now-button">Shop Now</a>
                        </div>
                    </div><!-- /.caption -->
                </div><!-- /.container-fluid -->
            </div><!-- /.item -->
        <?php endforeach?>

    </div><!-- /.owl-carousel -->
</div>