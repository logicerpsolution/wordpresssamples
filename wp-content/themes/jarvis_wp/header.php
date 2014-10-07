<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<?php global $smof_data; ?>
<html <?php language_attributes(); ?> <?php if($smof_data['rnr_enable_rtl_layout'] == true) { echo 'dir="rtl"'; } ?>> <!--<![endif]-->
<!--
===========================================================================
 Jarvis Onepage Parallax WordPress Theme by rocknrolladesigns.com (http://www.rocknrolladesigns.com) 
===========================================================================
-->
<head>
<meta charset="<?php bloginfo('charset'); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<meta http-equiv="x-ua-compatible" content="IE=edge" />
<!-- PAGE TITLE -->

<?php if (defined('WPSEO_VERSION')) { ?>
           <title><?php wp_title(); ?></title>	 
<?php }else {
	      $rnr_description =  get_bloginfo('description'); ?>
          <title><?php wp_title(' &raquo; ', true, 'right'); ?><?php bloginfo('name'); ?> &raquo; <?php echo $rnr_description; ?></title>
         <meta name="description" content="<?php  echo $rnr_description; ?>">  
         <?php    } ?>
</title>
  <link rel="stylesheet" type="text/css" media="screen" href="<?php bloginfo("template_directory");?>/css/CSSreset.min.css" />
	<link rel="stylesheet" type="text/css" media="screen" href="<?php bloginfo("template_directory");?>/css/als_demo.css" />
    <link href="<?php bloginfo("template_directory");?>/css/bootstrap.css" rel="stylesheet" type="text/css" />
    <link href="<?php bloginfo("template_directory");?>/css/style.css" rel="stylesheet" type="text/css" />
    <link href="<?php bloginfo("template_directory");?>/css/media-query.css" rel="stylesheet" type="text/css" />
    <script src="<?php bloginfo("template_directory");?>/js/jquery-1.11.0.min.js" type="text/javascript"></script>
    <script src="<?php bloginfo("template_directory");?>/js/bootstrap.min.js" type="text/javascript"></script>
    <script type="text/javascript" src="<?php bloginfo("template_directory");?>/js/jquery-2.1.1.min.js"></script>
	<script type="text/javascript" src="<?php bloginfo("template_directory");?>/js/jquery.als-1.7.min.js"></script>



<!--[if lt IE 9]>
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->



<!-- Mobile Specific Metas & Favicons
========================================================= -->

<?php if($smof_data['rnr_favicon_url'] != "") { ?><link rel="shortcut icon" href="<?php echo $smof_data['rnr_favicon_url']; ?>"><?php } ?>


<!-- WordPress Stuff
========================================================= -->
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	<!-- Google Web Fonts -->

 <?php get_template_part( 'includes/googlefonts'); ?>

<?php wp_head(); ?>

</head>

<body <?php body_class('onepage'); ?> data-spy="scroll" data-target=".navigation" data-offset="82" >
<div id="load"></div>
<div class="container-fluid p0 base-bg">
 <div class="container base-mid">
 <div class="booking clearfix pull-right mt5 hidden-xs">
                   <div class="book_head pull-left"> 
                     <img src="<?php bloginfo("template_directory");?>/images/edge.png" alt="" class="hidden-xs" style="position:absolute; bottom:-6px; right:0px;">
                           <h6>Book a <span>STAR CRAZY</span> Event!</h6>
                           <h6>Call Us: 1 512.584.1753</h6>
                    </div>
                    <div class="book_social">
                         <a href="javascript:void();"><img src="<?php bloginfo("template_directory");?>/images/twitter-2.png" alt="" class="img-responsive pull-left ml10  mb10 pr10"></a>
                         <a href="javascript:void();"><img src="<?php bloginfo("template_directory");?>/images/facebook.png" alt="" class="img-responsive mb10  pr10 pull-left"></a>
                         <a href="javascript:void();"><img src="<?php bloginfo("template_directory");?>/images/email.png" alt="" class="img-responsive pull-left  mb10 pr10"></a>
                   </div>
             </div>
 <div class="header">
 <?php  if($smof_data['rnr_logo_url'] != "") { ?>
						<img src="<?php echo $smof_data['rnr_logo_url']; ?>" class="img-responsive logo" alt="<?php bloginfo('name'); ?>">
					<?php } else { ?>
						<h1><a href="<?php echo $link_prefix; ?>" class="<?php echo $scroll_class; ?>"><?php bloginfo('name'); ?></a></h1>
					<?php } ?>
            
             
            </div>
			
   
<div class="col-lg-12 p0 menu collg1">
           <nav class="navbar navbar-default m0" role="navigation">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>
 

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
     
	  <?php 
                wp_nav_menu(array(
                  'theme_location' => 'main-menu',
                  'container' => '',
                  'fallback_cb' => 'show_top_menu',
                  'menu_class' => 'main-menu large nav sf-menu sf-js-enabled',
                  'menu_id' => 'bs-example-navbar-collapse-1',
                  'echo' => true,
				  'items_wrap' => '<ul class="nav navbar-nav navbar-right"><li id="item-id"></li>%3$s</ul>',
                  'walker' => new description_walker(),
                  'depth' => 0 
                )); 
              ?>
    
     
      
      
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
</div>

     <!-- START PAGE WRAP -->    
    <div class="page-wrap <?php if($smof_data['rnr_enable_dark_skin'] == true) { echo 'dark-skin'; } ?>">
    
  <!-- HEADER SECTION -->	
 

