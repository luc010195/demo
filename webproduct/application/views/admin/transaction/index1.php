

<div style="height: 30px; width: 100%"></div>
<div class="clear"></div>
<div class="widget">
    <div class="title">
        <span class="titleIcon"><input type="checkbox" id="titleCheck" name="titleCheck" /></span>
        <h6>Danh sách Giao dịch</h6>   
    </div>
    <div class="title" style=" margin-left: 40px; margin-bottom: 10px; margin-top: 5px;">
        <thead class="filter">
                <tr>
                    <td colspan="6">
                        <form method="get" action="http://localhost:8080/doan/webproduct/admin/product" class="list_filter form">
                            <table width="80%" cellspacing="0" cellpadding="0">
                                <tbody>

                                    <tr>
                                        <td style="width:40px;" class="label"><label for="filter_id">Mã số</label></td>
                                        <td class="item"><input type="text" style="width:55px;" id="filter_id" value="" name="id" /></td>

                                        <td style="width:40px;" class="label"><label for="filter_id">Tên</label></td>
                                        <td style="width:155px;" class="item"><input type="text" style="width:155px;" id="filter_iname" value="" name="name" /></td>

                                        <td style="width:150px">
                                            <input type="submit" value="Lọc" class="button blueB" />
                                            <input type="reset" onclick="window.location.href = 'http://localhost:8080/doan/webproduct/admin/product'; " value="Reset" class="basic" />
                                        </td>

                                    </tr>
                                </tbody>
                            </table>
                        </form>
                    </td>
                </tr>
        </thead>
    </div>
    

    <table cellpadding="0" cellspacing="0" width="100%" class="sTable mTable myTable" id="checkAll">


        <thead>
            <tr>
                <td style="width:10px;"><img src="<?php echo public_url('admin')?>/images/icons/tableArrows.png" /></td>
                <td style="width:60px;">Mã số</td>
                <td style="width:75px;">Tên khách hàng</td>
                <td style="width:90px;">Số tiền</td>
                <td>Thanh toán</td>
                <td style="width:100px;">Giao dịch</td>
                <td style="width:75px;">Ngày đặt hàng</td>
                <td style="width:55px;">Hành động</td>
            </tr>
        </thead>

        <tfoot class="auto_check_pages">
            <tr>
                <td colspan="8">
                    <div class="list_action itemActions">
                        <a href="#submit" id="submit" class="button blueB" url="admin/tran/del_all.html">
                            <span style='color:white;'>Xóa hết</span>
                        </a>
                    </div>
                </td>
            </tr>
        </tfoot>

        <tbody class="list_item">
            <?php foreach ($list as $row):?>
                <tr>
                    <td><input type="checkbox" name="id[]" value="21" /></td>

                    <td class="textC"><?php echo $row->id ?></td>

                    <td>
                        <?php echo $row->user_name ?>
                    </td>


                    <td class="textR red"><?php echo number_format($row->amount) ?> VNĐ</td>
                    <?php $i= intval($row->payment) ?>
                    <?php if($i==0): ?>
                         <td>Thanh toán khi nhận giao hàng</td>
                        <?php elseif($i==1): ?>
                            <td>Thanh toán qua Bảo kim</td>
                                
                            <?php else: ?>
                                <td>Thanh toán qua Ngân lượng</td>
                        
                    <?php endif; ?>

                    <td class="status textC">
                        <?php $status=$row->status;?>
                        <?php if($status==0): ?>
                            <span class="pending" style="color: red;">Chưa giao</span>
                        <?php else: ?>
                            <span class="pending">Đã giao</span>
                        <?php endif; ?>
                    </td>

                    <td class="textC"><?php echo get_date($row->created)?></td>

                    <td class="textC">
                        <a href="<?php echo admin_url('transaction/view/'.$row->id)?>" title="Xem" class="lightbox">
                            <img src="<?php echo public_url('admin')?>/images/icons/color/view.png" />
                        </a>
                        <a href="<?php echo admin_url('transaction/in/'.$row->id)?>" title="In">
                            <img src="<?php echo public_url('admin')?>/images/icons/color/delete.png" />
                        </a>
                        <a href="<?php echo admin_url('transaction/delete/'.$row->id)?>" title="Xóa" class="tipS verify_action">
                            <img src="<?php echo public_url('admin')?>/images/icons/color/delete.png" />
                        </a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>