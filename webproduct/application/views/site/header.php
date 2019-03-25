<link rel="stylesheet" href="<?php echo public_url()?>/js/jquery/autocomplete/css/smoothness/jquery-ui-1.8.16.custom.css" type="text/css">  

<div class="top-bar animate-dropdown">
    <div class="container">
        <div class="header-top-inner">
            <div class="cnt-account">
                <ul class="list-unstyled">
                <?php if(isset($user_info)): ?>
                    <li><a href="<?php echo site_url('user/edit') ?>"><i class="icon fa fa-user"></i><?php echo $user_info->email ?></a></li>
                    <li><a href="<?php echo site_url('user/logout') ?>"><i class="icon fa fa-heart"></i>Đăng xuất</a></li>
                <?php else: ?>
                    <li><a href="<?php echo site_url('user/login') ?>"><i class="icon fa fa-user"></i>Đăng nhập</a></li>
                    <li><a href="<?php echo site_url('user/register') ?>"><i class="icon fa fa-heart"></i>Đăng ký</a></li>
                <?php endif; ?>
                </ul>
            </div><!-- /.cnt-account -->

            <div class="cnt-block">
                <ul class="list-unstyled list-inline">
                    <li class="dropdown dropdown-small">
                        <a href="#" class="dropdown-toggle" data-hover="dropdown" data-toggle="dropdown"><span class="key">Ngôn ngữ :</span><span class="value">Viêt Nam </span><b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">English</a></li>
                            <li><a href="#">INR</a></li>
                            <li><a href="#">GBP</a></li>
                        </ul>
                    </li>

                </ul><!-- /.list-unstyled -->
            </div><!-- /.cnt-cart -->
            <div class="clearfix"></div>
        </div><!-- /.header-top-inner -->
    </div><!-- /.container -->
</div><!-- /.header-top -->
<!-- ============================================== TOP MENU : END ============================================== -->
<div class="main-header">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-3 logo-holder">
                <!-- ============================================================= LOGO ============================================================= -->
                <div class="logo">
                    <a href="home.html">

                        <img src="<?php echo public_url()?>/assets/images/tsonline.png" alt="">

                    </a>
                </div><!-- /.logo -->
                <!-- ============================================================= LOGO : END ============================================================= -->
            </div><!-- /.logo-holder -->

            <div class="col-xs-12 col-sm-12 col-md-6 top-search-holder">
                <div class="contact-row">
                    <div class="phone inline">
                        <i class="icon fa fa-phone"></i> 0987 414 009
                    </div>
                    <div class="contact inline">
                        <i class="icon fa fa-envelope"></i> nvansungit@gmail.com
                    </div>
                </div><!-- /.contact-row -->
                <!-- ============================================================= SEARCH AREA ============================================================= -->
                <div class="search-area">
                   
                    <div class="control-group">
                        <table style="width: 100%">
                            <tr>
                                <td>
                                    <ul class="categories-filter animate-dropdown">
                                        
                                            <li class="dropdown">

                                                <a class="dropdown-toggle" data-toggle="dropdown" href="category.html">Categories <b class="caret"></b></a>

                                                <ul class="dropdown-menu" role="menu">
                                                    <?php foreach($catalog_list as $row):?>
                                                        <li class="menu-header" style="font-family: 'regular'; font-size: 18px" ><a href="<?php echo base_url('product/catalog/'.$row->id) ?>"><b><?php echo $row->name ?></b></a></li>
                                                        <?php if(!empty($row->subs)): ?>
                                                            <?php foreach($row->subs as $sub):?>
                                                                <li role="presentation" style="font-family: 'regular';"><a role="menuitem" tabindex="-1" href="<?php echo base_url('product/catalog/'.$sub->id) ?>">- <?php echo $sub->name ?></a></li>
                                                            <?php endforeach; ?> 
                                                        <?php endif;?>   
                                                    <?php endforeach; ?>  
                                                </ul>
                                            </li>
                                    </ul>
                                </td>
                                <td>
                                    <form action="<?php echo site_url('product/search')?>" method="get">
                                         <input class="search-field" type="text" aria-haspopup="true" aria-autocomplete="list" role="textbox" autocomplete="off" class="ui-autocomplete-input" placeholder="Tìm kiếm sản phẩm..." value="<?php echo isset($key) ? $key : ''?>" name="key-search" id="text-search">
                                         <input class="search-button" type="submit" value="Tìm kiếm">
                                    </form>
                                </td>
                            </tr>
                        </table>
                    </div>
         
                </div><!-- /.search-area -->
                <!-- ============================================================= SEARCH AREA : END ============================================================= -->
            </div><!-- /.top-search-holder -->

            <div class="col-xs-12 col-sm-12 col-md-3 animate-dropdown top-cart-row">
                <!-- ============================================================= SHOPPING CART DROPDOWN ============================================================= -->

                <div class="dropdown dropdown-cart">
                    <a href="#" class="dropdown-toggle lnk-cart" data-toggle="dropdown">
                        <div class="items-cart-inner">
                            <div class="total-price-basket">
                                <span class="lbl" style="font-family: 'regular';">Giỏ hàng</span>
                                <span class="total-price">
                                    
                                </span>
                            </div>
                        </div>
                    </a>
                    <a href="<?php echo site_url('cart/index') ?>" class="lnk-cart">
                        <div class="items-cart-inner">
                            
                            <div class="basket">
                                <i class="glyphicon glyphicon-shopping-cart"></i>
                            </div>
                            <div class="basket-item-count"><span class="count"><?php echo $total_items ?></span></div>

                        </div>
                    </a>
                   <!--  <ul class="dropdown-menu">
                        <li>
                            <div class="cart-item product-summary">
                                <div class="row">
                                    <div class="col-xs-4">
                                        <div class="image">
                                            <a href="detail.html"><img src="<?php echo public_url()?>/assets/images/cart.jpg" alt=""></a>
                                        </div>
                                    </div>
                                    <div class="col-xs-7">

                                        <h3 class="name"><a href="index.php?page-detail">Simple Product</a></h3>
                                        <div class="price"><?php echo $tongtien ?></div>
                                    </div>
                                    <div class="col-xs-1 action">
                                        <a href="#"><i class="fa fa-trash"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <hr>

                            <div class="clearfix cart-total">
                                <div class="pull-right">

                                    <span class="text">Sub Total :</span><span class="price">$600.00</span>

                                </div>
                                <div class="clearfix"></div>

                                <a href="checkout.html" class="btn btn-upper btn-primary btn-block m-t-20">Checkout</a>
                            </div>


                        </li>
                    </ul> -->
                </div><!-- /.dropdown-cart -->
                <!-- ============================================================= SHOPPING CART DROPDOWN : END============================================================= -->
            </div><!-- /.top-cart-row -->
        </div><!-- /.row -->

    </div><!-- /.container -->

</div><!-- /.main-header -->
<!-- ============================================== NAVBAR ============================================== -->
<div>
<div class="header-nav animate-dropdown">
    <div class="container">
        <div class="yamm navbar navbar-default" role="navigation">
            <div class="navbar-header">
                <button data-target="#mc-horizontal-menu-collapse" data-toggle="collapse" class="navbar-toggle collapsed" type="button">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <div class="nav-bg-class" >
                <div class="navbar-collapse collapse" id="mc-horizontal-menu-collapse">
                    <div class="nav-outer">
                        <ul class="nav navbar-nav">
                            <li class="active dropdown yamm-fw">
                                <a href="<?php echo base_url('home/index') ?>">Trang chủ</a>
                            </li>
                            <li class="dropdown yamm">
                                <a href="<?php echo base_url('contact/index') ?>">Giới thiệu</a>
                               
                            </li>

                            <li class="dropdown">

                                <a href="<?php echo base_url('home/sanpham') ?>">
                                    Sản phẩm
                                    <span class="menu-label hot-menu hidden-xs">hot</span>
                                </a>
                            </li>

                            <li class="dropdown">
                                <a href="<?php echo base_url('contact/index') ?>">Liên hệ</a>
                            </li>
                        <?php if(isset($user_info)): ?>

                        <?php else: ?>
                            <li class="dropdown">
                                <a href="<?php echo site_url('user/register') ?>" >Đăng ký</a>
                            </li>
                            <li class="dropdown">
                                <a href="<?php echo site_url('user/login') ?>">Đăng nhập</a>
                            </li>
                        <?php endif; ?>
                        </ul><!-- /.navbar-nav -->
                        <div class="clearfix"></div>
                    </div><!-- /.nav-outer -->
                </div><!-- /.navbar-collapse -->

            </div><!-- /.nav-bg-class -->
        </div><!-- /.navbar-default -->
    </div><!-- /.container-class -->
</div><!-- /.header-nav -->

<!-- ============================================== NAVBAR : END ============================================== -->