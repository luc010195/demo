
 <div id="rightSide">

        <div class="titleArea">
            <div class="wrapper">
                <div class="pageTitle">
                    <h5>Đơn hàng sản phẩm</h5>
                    <span>Quản lý đơn hàng</span>
                </div>

                <div class="horControlB menu_action">
                    <ul>

                        <li>
                            <a href="admin/product_order.html">
                                <img src="<?php echo public_url('admin')?>/images/icons/control/16/list.png" />
                                <span>Danh sách</span>
                            </a>
                        </li>

                        <li>
                            <a href="<?php echo base_url()?>/tutorial_dompdf">
                                <img src="<?php echo public_url('admin')?>/images/excel.png" />
                                <span>Xuất file excel</span>
                            </a>
                        </li>
                    </ul>
                </div>

                <div class="clear"></div>
            </div>
        </div>
        <div class="line"></div>

        <!-- Message -->
        <!-- Main content wrapper -->
        <div class="wrapper">

            <div class="widget">
                <div class="title">
                    <span class="titleIcon"><img src="<?php echo public_url('admin')?>/images/icons/tableArrows.png" /></span>
                    <h6>Danh sách Đơn hàng sản phẩm</h6> 
                </div>

                <table cellpadding="0" cellspacing="0" width="100%" class="sTable mTable myTable" id="checkAll">
                    <thead class="filter">
                        <tr>
                            <td colspan="9">
                                <form class="list_filter form" action="index.php/admin/product_order.html" method="get">
                                    <table cellpadding="0" cellspacing="0" width="100%">
                                        <tbody>

                                        </tbody>
                                    </table>
                                </form>
                            </td>
                        </tr>
                    </thead>

                    <thead>
                        <tr>
                            <td style="width:60px;">Mã số</td>
                            <td>Sản phẩm</td>
                            <td style="width:50px;">Số lượng</td>
                            <td style="width:70px;">Số tiền</td>
                            <td style="width:75px;">Đơn hàng</td>
                        </tr>
                    </thead>

                    <tfoot class="auto_check_pages">
                        <tr>
                            <td colspan="9">

                            </td>
                        </tr>
                    </tfoot>
                    <?php $stt=0; ?>
                    <?php $tongtien= 0 ?>
                <?php foreach ($list as $rows):?>
                    <?php $stt++; ?>
                    <?php $tongtien= $tongtien+$rows->amount ?>
                    <tbody class="list_item">
                        <tr class='row_20'>
                            <td class="textC"><?php echo $stt ?></td>
                                <?php $idsanpham = $rows->product_id ?>
                                <?php foreach($product as $sanpham): ?>
                                    <?php if($sanpham->id==$idsanpham): ?>
                                        <td>
                                            <div class="image_thumb">
                                                <img src="<?php echo base_url('/upload/product/'.$sanpham->image_link)?>" height="50" />
                                                <div class="clear"></div>
                                            </div><br/>

                                            <a href="product/view/8.html" class="tipS" title="" target="_blank">
                                                <b><?php echo $sanpham->name ?></b>
                                            </a>
                                        </td>
                                    <?php endif; ?>
                                <?php endforeach; ?>
                            <td class="textC"><?php echo $rows->qty ?></td>
                            <td class="textC"><?php echo number_format($rows->amount) ?> VNĐ</td>

                            <td class="status textC">
                                <?php $tinhtrang= $transaction->status ?>
                                <?php if($tinhtrang==0): ?>
                                    <span class="pending" style="color: red;">
                                        Chưa giao
                                    </span>
                                <?php else:?>
                                    <span class="pending">
                                        Đã giao
                                    </span>
                                <?php endif; ?>
                            </td>                            
                        </tr>
                    </tbody>
                <?php endforeach;?>
                </table>
                <?php $tinhtrang= $transaction->status ?>
                <?php if($tinhtrang==0):?>
                    <a class="tipS" title="Giao hàng" href="<?php echo admin_url('transaction/update/'.$transaction->id)?>">
                        <img src="<?php echo public_url('admin/images')?>/icons/color/Giaohang.png">
                    </a>
                <?php endif; ?>
    
            </div>

        </div>
        <div class="clear mt30" style="margin-left: 200px;">
            <div style=""><p style=" font-size: 13">Tổng tiền: <?php echo number_format($tongtien) ?> VNĐ</p></div>
            <?php $thanhtoan= $transaction->status ?>
            <?php if($thanhtoan==0): ?>
                <div style=""><p style=" font-size: 13">Thanh toán: Thanh toán khi nhận hàng</p></div>
            <?php elseif($thanhtoan==1):?>
                <div style=""><p style=" font-size: 13">Thanh toán: Thanh toán qua bảo kim</p></div>
                <?php else: ?>  
                    <div style=""><p style=" font-size: 13">Thanh toán: Thanh toán qua ngân lượng</p></div>
            <?php endif;?>
        
            <div style=""><p style=" font-size: 13">Tên người nhận: <?php echo $transaction->user_name ?></p></div>
            <div style=""><p style=" font-size: 13">Địa chỉ: <?php echo $transaction->message ?></p></div>
            <div style=""><p style=" font-size: 13">Số điện thoại: <?php echo $transaction->user_phone ?></p></div>

        </div>

        <!-- Footer -->
    </div>
    <div class="clear"></div>