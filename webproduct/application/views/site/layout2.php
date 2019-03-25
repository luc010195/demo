<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<?php $this->load->view('site/head'); ?>
</head>
<body class="cnt-home">
	<header class="header-style-1">
		<?php $this->load->view('site/header',$this->data); ?>
	</header>

	<div class="body-content outer-top-xs">
		<div class="container">
			<?php $this->load->view($temp,$this->data) ?>
		</div>
	</div>
	<footer id="footer" class="footer color-bg">
		<?php $this->load->view('site/footer'); ?>
	</footer>
	<?php $this->load->view('site/end'); ?>
</body>
</html>