<div class="clearfix filters-container m-t-10">	
    <div class="row">
        <div class="col col-sm-6 col-md-2">
            <div class="filter-tabs">
                <ul id="filter-tabs" class="nav nav-tabs nav-tab-box nav-tab-fa-icon">
                    <li class="">
                        <a data-toggle="tab" href="#grid-container"><i class="icon fa fa-th-list"></i>Grid</a>
                    </li>
                    <li class="active"><a data-toggle="tab" href="#list-container"><i class="icon fa fa-th"></i>List</a></li>
                </ul>
            </div><!-- /.filter-tabs -->
        </div><!-- /.col -->
        <div class="col col-sm-12 col-md-6">
            <div class="col col-sm-3 col-md-6 no-padding">
                <div class="lbl-cnt">
                    <span class="lbl">Sort by</span>
                    <div class="fld inline">
                        <div class="dropdown dropdown-small dropdown-med dropdown-white inline">
                            <button data-toggle="dropdown" type="button" class="btn dropdown-toggle">
                                Position <span class="caret"></span>
                            </button>

                            <ul role="menu" class="dropdown-menu">
                                <li role="presentation"><a href="#">position</a></li>
                                <li role="presentation"><a href="#">Price:Lowest first</a></li>
                                <li role="presentation"><a href="#">Price:HIghest first</a></li>
                                <li role="presentation"><a href="#">Product Name:A to Z</a></li>
                            </ul>
                        </div>
                    </div><!-- /.fld -->
                </div><!-- /.lbl-cnt -->
            </div><!-- /.col -->
            <div class="col col-sm-3 col-md-6 no-padding">
            </div><!-- /.col -->
        </div><!-- /.col -->
        <div class="col col-sm-6 col-md-4 text-right">
            <div class="pagination-container">
               
            </div><!-- /.pagination-container -->
        </div><!-- /.col -->
    </div><!-- /.row -->
</div>
<h3 class="section-title" style="font-family: 'regular';"><?php echo $catalog->name ?></h3>
<div class="search-result-container">
    <div id="myTabContent" class="tab-content">
        <div class="tab-pane active " id="grid-container">
            <div class="category-product  inner-top-vs">
                <div class="row">
                    <?php foreach($list as $row):?>
                        <div class="col-sm-6 col-md-4 wow fadeInUp">
                        <div class="products">

                            <div class="product">
                                <div class="product-image">
                                    <div class="image">
                                        <a href="<?php echo base_url('product/view/'.$row->id) ?>"><img src="<?php echo base_url('upload/product/'.$row->image_link) ?>" data-echo="<?php echo base_url('upload/product/'.$row->image_link) ?>" alt="" style="width: 270px;height: 347px;"></a>
                                    </div><!-- /.image -->
                                    <div class="tag sale"><span>sale</span></div>
                                </div><!-- /.product-image -->


                                <div class="product-info text-left">
                                    <h3 class="name"><a href="<?php echo base_url('product/view/'.$row->id) ?>"><?php echo $row->name ?></a></h3>
                                    
                                    <div class="description"></div>
                                    <div class="product-price">
                                        <?php if($row->discount > 0):?>
                                           <?php $price_new = $row->price - $row->discount;?>
                                            <span class="price"><?php echo number_format($price_new)?> VNĐ</span>
                                            <span class="price-before-discount"><?php echo number_format($row->price)?> VNĐ</span>
                                        <?php else:?>
                                            <span class="price"><?php echo number_format($row->price)?> VNĐ</span>
                                        <?php endif;?>  
                                    </div><!-- /.product-price -->
                                    <div><span>Lượt xem: <?php echo $row->view ?></span></div>

                                </div><!-- /.product-info -->
                                <div class="cart clearfix animate-effect">
                                    <div class="action">
                                        <ul class="list-unstyled">
                                            <li class="add-cart-button btn-group">
                                                <a href="<?php echo base_url('cart/add/'.$row->id) ?>">
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
                            </div><!-- /.product -->

                        </div><!-- /.products -->
                    </div><!-- /.item -->
                    <?php endforeach;?>
                </div><!-- /.row -->
            </div><!-- /.category-product -->

        </div><!-- /.tab-pane -->

        <div class="tab-pane " id="list-container">
            <div class="category-product  inner-top-vs">
                <?php foreach($list as $row):?>
                    <div class="category-product-inner wow fadeInUp">
                        <div class="products">
                            <div class="product-list product">
                                <div class="row product-list-row">
                                    <div class="col col-sm-4 col-lg-4">
                                        <div class="product-image">
                                            <div class="image" >
                                                <img src="<?php echo base_url('upload/product/'.$row->image_link) ?>" alt="" style="width: 270px;height: 347px;" >
                                            </div>
                                        </div><!-- /.product-image -->
                                    </div><!-- /.col -->
                                    <div class="col col-sm-8 col-lg-8">
                                        <div class="product-info">
                                            <h3 class="name"><a href="<?php echo base_url('product/view/'.$row->id) ?>"><?php echo $row->name ?></a></h3>
                                            <div class="product-price">
                                                <?php if($row->discount > 0):?>
                                                   <?php $price_new = $row->price - $row->discount;?>
                                                    <span class="price"><?php echo number_format($price_new)?> VNĐ</span>
                                                    <span class="price-before-discount"><?php echo number_format($row->price)?> VNĐ</span>
                                                <?php else:?>
                                                    <span class="price"><?php echo number_format($row->price)?> VNĐ</span>
                                                <?php endif;?>  

                                            </div><!-- /.product-price -->
                                            <div><span>Lượt xem: <?php echo $row->view ?></span></div>
                                            <div class="description m-t-10"><?php echo $row->content ?></div>
                                            <div class="cart clearfix animate-effect">
                                                <div class="action">
                                                    <ul class="list-unstyled">
                                                        <li class="add-cart-button btn-group">
                                                            <a href="<?php echo base_url('cart/add/'.$row->id) ?>">
                                                                <button class="btn btn-primary icon" data-toggle="dropdown" type="button">
                                                                    <i class="fa fa-shopping-cart"></i>
                                                                </button>
                                                                <button class="btn btn-primary" type="button">Mua ngay</button>
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

                                        </div><!-- /.product-info -->
                                    </div><!-- /.col -->
                                </div><!-- /.product-list-row -->
                                <div class="tag new"><span>new</span></div>
                            </div><!-- /.product-list -->
                        </div><!-- /.products -->
                    </div><!-- /.category-product-inner -->
                <?php endforeach;?>

            </div><!-- /.category-product -->
        </div><!-- /.tab-pane #list-container -->
    </div><!-- /.tab-content -->
    <div class="clearfix filters-container">
        <div class="text-right">
            <div class="pagination -container">
                <ul class="list-inline list-unstyled">
                    <li><?php echo $this->pagination->create_links()?></li>
                </ul><!-- /.list-inline -->
            </div><!-- /.pagination-container -->
        </div><!-- /.text-right -->

    </div><!-- /.filters-container -->
</div><!-- /.search-result-container -->