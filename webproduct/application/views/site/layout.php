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
			<div class="row outer-bottom-sm">
				<div class="col-md-3 sidebar">
					<div class="side-menu animate-dropdown outer-bottom-xs">
						<?php $this->load->view('site/side_menu',$this->data); ?>
					</div>

					<div class="sidebar-module-container">
					<?php $this->load->view('site/sidebar_module'); ?>
					</div>
				</div>

				<div class="col-md-9">
					<!-- <div class="alert alert-danger"> -->
						<?php if(isset($message)): ?>
							<h3 style="color: red"><?php echo $message ?></h3>
						<?php endif; ?>
					<!-- </div> -->
					
					<?php $this->load->view($temp,$this->data) ?>
				</div>
			</div>
		</div>
	</div>
	<footer id="footer" class="footer color-bg">
		<?php $this->load->view('site/footer'); ?>
	</footer>
	<?php $this->load->view('site/end'); ?>
	<div id="fb-root"></div>
	<div id="fb-root"></div>
<script>(function(d, s, id) {
var js, fjs = d.getElementsByTagName(s)[0];
if (d.getElementById(id)) return;
js = d.createElement(s); js.id = id;
js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.5";
fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<div style="position:fixed; z-index:9999999; right1:0px; bottom:10px;" class="fb-page" data-tabs="messages"
data-href="https://www.facebook.com/Shop-433859733615219/" data-width="250" data-height="300" 
data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true" data-show-posts="false"></div>
</body>

</html>