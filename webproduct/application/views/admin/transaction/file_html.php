
<html>
<head>
	<title></title>
</head>
<body>
	<a href="<?php echo base_url()?>tutorial_dompdf">
    <img src="<?php echo public_url('admin')?>/images/excel.png" />
    <span>Xuất file excel</span>
</a>

		<?php $now = getdate(); $currentDate = $now["mday"] . "." . $now["mon"] . "." . $now["year"];  ?>
        <h1 style="text-align: center; color: red;">HOA DON</h1>
        <p style="margin-left: 100px">
            Nguoi lap: &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; CONG TY BAN HANG ONLINE STSHOP
        </p>
        <p style="margin-left: 100px">
            Ngay lap: &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<?php echo $currentDate; ?>
        </p>
        <p style="margin-left: 100px">
            Nguoi nhan: &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
        </p>
        <p style="margin-left: 100px">
            Dien thoai: &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;0987 414 0091
        </p>
        <p style="margin-left: 100px">
            Dia chi: &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;thanh pho dong giong trom ben tre
        </p>
        <p style="margin-left: 100px">
            Tong tien: &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;9 000 000 VND
        </p>
        <p style="margin-left: 100px">
            Thanh toan: &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Nguyen Van Sung
        </p>

</body>
</html>
