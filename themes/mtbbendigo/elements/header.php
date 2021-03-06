<?php  defined('C5_EXECUTE') or die("Access Denied."); ?>
<!DOCTYPE html>
<!--[if IE 9]><html class="lt-ie10" lang="en" > <![endif]-->
<html class="no-js" lang="<?php echo LANGUAGE?>">
<head>
<?php  Loader::element('header_required'); ?>
<!-- Site Header Content -->
	<meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  	<?php //$this->getThemePath() is faster that $this->getStyleSheet('') but getStyleSheet() will not cause css file not found errors. ?>
    <link rel="stylesheet" media="screen, projector, print" type="text/css" href="<?php echo $this->getThemePath()?>/stylesheets/app.css" />
	<link rel="stylesheet" media="screen" type="text/css" href="<?php echo $this->getThemePath()?>/stylesheets/sticky_footer.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo $this->getThemePath()?>/stylesheets/app.css.map" />

    <link href="http://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" type="text/css">
    <link href='http://fonts.googleapis.com/css?family=Fjalla+One' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Oswald:400,300,700' rel='stylesheet' type='text/css'>
  	<!-- MailChimp Signup Form -->
	<link href="http://cdn-images.mailchimp.com/embedcode/classic-081711.css" rel="stylesheet" type="text/css">

	<style type="text/css">
		#mc_embed_signup{background:#e3e3e3; clear:left; font:14px Helvetica,Arial,sans-serif; }
		/* Add your own MailChimp form style overrides in your site stylesheet or in this style block.
	   		We recommend moving this block and the preceding CSS link to the HEAD of your HTML file. */
	</style>

    <script src="<?php echo $this->getThemePath() ?>/bower_components/foundation/js/vendor/modernizr.js"></script>


</head>
<body>
<?php $uinfo = new User();
	 if($uinfo->IsLoggedIn()){
	 	echo('<div class="logged-in"></div>');
	 } 
 ?>
<div id="wrapper">
<div id="content_wrapper">
<div id="content_inner_wrapper"> 

	<div class="row">
		<div class="large-5 columns">
			<div class="header-container">
				<div id="logo"><?php //Gets the home page of the site, or url('/my_page') or echo SITE_URL; Get base url as set in config.php?>
					<a href="<?php echo View::url('/'); ?>"><img src="<?php echo $this->getThemePath()?>/images/club-logo.png" /></a>
				</div>
			</div>
		</div>
		<div class="large-7 columns">
			<div id="top-nav">
			  	<!--[if lt IE 9]>
  					<h3 style="color: #FFA500;">Internet Explorer 8 or less is not supported. Update your browser, or download <a href="https://www.google.com/intl/en-AU/chrome/browser/">Google Chrome</a></h3>
  				<![endif]-->
	       		<?php
					$nav = BlockType::getByHandle('autonav');
					$nav->controller->orderBy = 'display_asc';
					$nav->controller->displayPages = 'top';
					$nav->controller->displaySubPages = 'none';
					$nav->render('templates/jordanlev');
				?>
		     </div>
		</div>
	</div> <!-- end first row -->

