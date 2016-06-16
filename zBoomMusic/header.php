<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>

    <!-- Basic Page Needs
  ================================================== -->
	<meta charset="<?php bloginfo(charset); ?>">
	<meta name="description" content="<?php bloginfo(description); ?>">
	<meta name="author" content="Tanzil">
	
    <!-- Mobile Specific Metas
  ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    
    <!-- CSS
  ================================================== -->
  	<link rel="stylesheet" href="<?php echo esc_url(get_template_directory_uri()); ?>/css/zerogrid.css">
	<link rel="stylesheet" href="<?php echo esc_url(get_template_directory_uri()); ?>/css/style.css">
    <link rel="stylesheet" href="<?php echo esc_url(get_template_directory_uri()); ?>/css/responsive.css">
	<link rel="stylesheet" href="<?php echo esc_url(get_template_directory_uri()); ?>/css/responsiveslides.css" />
	
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url')?>" />
	
	<!--[if lt IE 8]>
       <div style=' clear: both; text-align:center; position: relative;'>
         <a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
           <img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
        </a>
      </div>
    <![endif]-->
    <!--[if lt IE 9]>
		<script src="js/html5.js"></script>
		<script src="js/css3-mediaqueries.js"></script>
	<![endif]-->
	
	<link href='<?php echo esc_url(get_template_directory_uri()); ?>/./images/favicon.ico' rel='icon' type='image/x-icon'/>
	<script src="<?php echo esc_url(get_template_directory_uri()); ?>/js/jquery.min.js"></script>
	<script src="<?php echo esc_url(get_template_directory_uri()); ?>/js/responsiveslides.js"></script>
	<script>
		$(function () {
		  $("#slider").responsiveSlides({
			auto: true,
			pager: false,
			nav: true,
			speed: 500,
			maxwidth: 962,
			namespace: "centered-btns"
		  });
		});
	</script>
	<style type="text/css">
	<?php global $zboom; ?>
		body{
			background-color: <?php echo $zboom['zboom-bg']['background-color']; ?>;
			background-image: url(<?php echo $zboom['zboom-bg']['background-image']; ?>);
			background-repeat: url(<?php echo $zboom['zboom-bg']['background-repeat']; ?>);
			
			.wrap-header{
				background-color: <?php echo $zboom[header-color]; ?>
			}
		}
	</style>
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<!--------------Header--------------->
<header>
	<div class="wrap-header zerogrid">
		<div id="logo"><a href="<?php bloginfo(home);?>"><img src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="" /></a></div>
		<p>
		<?php 
		echo $zboom['slogan'];
		?>
		</p>
		
		<div id="search">
			<div class="button-search"></div>
			<form method="GET" action="<?php esc_url (bloginfo('home')); ?>">
			<input type="text" name="s" value="Search..." onfocus="if (this.value == &#39;Search...&#39;) {this.value = &#39;&#39;;}" onblur="if (this.value == &#39;&#39;) {this.value = &#39;Search...&#39;;}">
			</form>
		</div>
		
	</div>
</header>

<nav>
	<div class="wrap-nav zerogrid">
		<div class="menu">
			<?php 
			wp_nav_menu(array(
			'theme-location'=>'main-menu'
			));
			?>
		</div>			
	</div>
</nav>