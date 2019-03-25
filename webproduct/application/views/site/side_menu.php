
    <div class="head chu"><i class="icon fa fa-align-justify fa-fw"></i> Danh mục sản phẩm</div>
    <nav class="yamm megamenu-horizontal" role="navigation">
        <ul class="nav">
            <?php foreach($catalog_list as $row):?>
                <li class="dropdown menu-item">
                    <a href="" class="dropdown-toggle" data-toggle="dropdown"><i></i><?php echo $row->name ?></a>
                    <?php if(!empty($row->subs)): ?>
                        
                        <ul class="dropdown-menu mega-menu col-sm-12 col-md-3">
                            <li class="yamm-content ">
                                
                                    <div class="row ">
                                        <div class="col-sm-12 col-md-4">
                                            <ul class="links list-unstyled">
                                                <?php foreach($row->subs as $sub):?>
                                                    <li><a href="<?php echo base_url('product/catalog/'.$sub->id) ?>"><?php echo $sub->name ?></a></li>
                                                <?php endforeach; ?>
                                            </ul>
                                        </div><!-- /.col -->
                                    </div><!-- /.row -->
                                
                            </li><!-- /.yamm-content -->
                        </ul><!-- /.dropdown-menu -->

                    <?php endif; ?>
                </li><!-- /.menu-item -->
            <?php endforeach; ?>
        </ul><!-- /.nav -->
    </nav><!-- /.megamenu-horizontal -->
    <!-- lấy thông tin bài viết -->

<form action="<?php echo site_url('product/search_price') ?>" method="get">
    <h3 class="section-title" style="font-family: 'regular'; font-size: 18px">Tìm theo giá (VNĐ)</h3>
    <div class="sidebar-filter">
        <div class="sidebar-widget outer-bottom-xs wow fadeInUp">
            
            <select name="price_from" class="col-md-5" style="height: 40px;">
                <option>-Chọn giá-</option>
                <?php for($i=0;$i<=10000000;$i=$i+1000000): ?>
                    <option value="<?php echo $i ?>"><?php echo number_format($i) ?> VNĐ</option>
                <?php endfor; ?> 
            </select>
            <div class="col-md-2" style="height: 40px;"></div>
            <select name="price_to" class="col-md-5" style="height: 40px;">
                <option value="">-Chọn giá-</option>
                <?php for($i=2000000;$i<=15000000;$i=$i+1000000): ?>
                    <option value="<?php echo $i ?>"><?php echo number_format($i) ?> VNĐ</option>
                <?php endfor; ?>   
            </select>
            <div class="widget-header col-md-12" style=" height: 10px">
               
            </div>
            <div class="sidebar-widget-body m-t-20">
                <input class="button btn btn-primary" name="search" value="Tìm kiềm" style="height:30px !important;line-height:30px !important;padding:0px 10px !important" type="submit">
                
            </div><!-- /.sidebar-widget-body -->
        </div><!-- /.sidebar-widget -->
 
    </div><!-- /.sidebar-filter -->

</form>

    <div class="head"><i class="fa fa-newspaper-o fa-fw" aria-hidden="true"></i> Thông tin bài viết</div>
    <nav class="yamm megamenu-horizontal" role="navigation">
        <ul class="nav">
            <?php foreach($news_list as $row):?>
                <li class="dropdown menu-item">

                    <img src="<?php echo base_url('upload/news/'.$row->image_link) ?>" alt="<?php echo $row->title ?>" class="col-md-4" style="margin-top: 15px" >
                    <a href="<?php echo base_url('news/index/'.$row->id) ?>" class="dropdown-toggle" class="col-md-8"><?php echo $row->title ?></a>    
                </li><!-- /.menu-item -->
            <?php endforeach; ?>
        </ul><!-- /.nav -->
    </nav><!-- /.megamenu-horizontal -->
