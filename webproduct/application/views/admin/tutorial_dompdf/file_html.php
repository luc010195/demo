
<html>
    <head></head>
    <body>
    	<?php
			function strpUnicode($str){
			    if(!$str) return false;
			    $unicode=array(
			        'a'=>'á|à|ả|ã|â|ă|ấ|ầ|ẩ|ạ|ẫ|ẳ|ắ|ặ|ẳ|ậ|ẵ',
			        'A'=>'Á|À|Ả|Ã|Ạ|Â|Ấ|Ầ|Ẫ|Ậ|Ắ|Ă|Ằ|Ẳ|Ẵ|Ặ',
			        'd'=>'đ',
			        'D'=>'Đ',
			        'e'=>'é|è|ẻ|ẹ|ẽ|ế|ê|ề|ể|ệ|ễ',
			        'E'=>'É|È|Ẻ|Ẽ|Ẹ|Ê|Ế|Ể|Ễ|Ệ|Ề',
			        'I'=>'Í|Ì|Ỉ|Ĩ|Ị',
			        'i'=>'í|ì|ỉ|ĩ|ị',
			        'o'=>'ó|ò|ỏ|õ|ọ|ô|ố|ồ|ổ|ỗ|ộ|ơ|ớ|ờ|ở|ỡ|ợ',
			        'O'=>'Ó|Ò|Ỏ|Õ|Ọ|Ô|Ố|Ồ|Ổ|Ỗ|Ộ|Ơ|Ớ|Ờ|Ở|Ỡ|Ợ',
			        'Y'=>'Ý|Ỷ|Ỳ|Ỹ|Ỵ',
			        'y'=>'ý|ỳ|ỷ|ỹ|ỵ',
			        'u'=>'ú|ù|ủ|ũ|ụ|ư|ứ|ừ|ử|ữ|ự',
			        'U'=>'Ú|Ù|Ủ|Ũ|Ụ|Ư|Ứ|Ử|Ừ|Ự|Ữ'
			    );
			    foreach($unicode as $khongdau=>$codau){
			        $arr=explode("|",$codau);
			        $str=str_replace($arr, $khongdau, $str);
			    }
			    return $str;
			}
		?>
		<?php $now = getdate(); $currentDate = $now["mday"] . "." . $now["mon"] . "." . $now["year"];  ?>
        <h1 style="text-align: center; color: red;">HOA DON</h1>
        <p style="margin-left: 100px">
            Nguoi lap: &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; CONG TY BAN HANG ONLINE STSHOP
        </p>
        <p style="margin-left: 100px">
            Ngay lap: &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<?php echo $currentDate; ?>
        </p>
        <p style="margin-left: 100px">
            Nguoi nhan: &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Nguyen Van Sung
        </p>
        <p style="margin-left: 100px">
            Dien thoai: &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;0987 414 009
        </p>
        <p style="margin-left: 100px">
            Dia chi: &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;thanh pho dong giong trom ben tre
        </p>
        <p style="margin-left: 100px">
            Tong tien: &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;9 000 000 VNĐ
        </p>
        <p style="margin-left: 100px">
            Thanh toan: &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Nguyen Van Sung
        </p>
    </body>
</html>