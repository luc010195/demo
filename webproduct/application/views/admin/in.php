<!DOCTYPE html>
<html>
<head>
    	<script  type="text/javascript">
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
    	</script>
    </head>
<body>

	<?php  $this->load->view('admin/transaction/file_html', $this->data);?>

</body>
</html>