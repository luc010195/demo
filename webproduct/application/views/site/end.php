
<script src="<?php echo public_url()?>/js/jquery/autocomplete/jquery-1.12.0.min.js"></script>
<script src="<?php echo public_url()?>/js/jquery/autocomplete/jquery-ui.js"></script>
	
	<script src="<?php echo public_url()?>/assets/js/bootstrap.min.js"></script>
	
	<script src="<?php echo public_url()?>/assets/js/bootstrap-hover-dropdown.min.js"></script>
	<script src="<?php echo public_url()?>/assets/js/owl.carousel.min.js"></script>
	
	<script src="<?php echo public_url()?>/assets/js/echo.min.js"></script>
	<script src="<?php echo public_url()?>/assets/js/jquery.easing-1.3.min.js"></script>
	<script src="<?php echo public_url()?>/assets/js/bootstrap-slider.min.js"></script>
    <script src="<?php echo public_url()?>/assets/js/jquery.rateit.min.js"></script>
    <script type="<?php echo public_url()?>/text/javascript" src="assets/js/lightbox.min.js"></script>
    <script src="<?php echo public_url()?>/assets/js/bootstrap-select.min.js"></script>
    <script src="<?php echo public_url()?>/assets/js/wow.min.js"></script>
	<script src="<?php echo public_url()?>/assets/js/scripts.js"></script>

	<!-- For demo purposes – can be removed on production -->
	
	<script src="<?php echo public_url()?>/switchstylesheet/switchstylesheet.js"></script>
	
	<script>
		$(document).ready(function(){ 
			$(".changecolor").switchstylesheet( { seperator:"color"} );
			$('.show-theme-options').click(function(){
				$(this).parent().toggleClass('open');
				return false;
			});
		});

		$(window).bind("load", function() {
		   $('.show-theme-options').delay(2000).trigger('click');
		});
	</script>
	<script type="text/javascript">
	$(function(){
	    $( "input#text-search" ).autocomplete({
	        source: "<?php echo site_url('product/search/1')?>",
	    });
	});
	</script>
	<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.8";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.8&appId=267116530397242";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<div id="fb-root"></div>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.8&appId=267116530397242";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
