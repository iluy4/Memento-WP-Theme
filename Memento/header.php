<!doctype html>
<html xmlns="http://localhost/wordpress" <?php language_attributes(); ?> 

<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/style.css" media="screen" />
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/bootstrap.css" media="screen" />
    
    <link href='http://fonts.googleapis.com/css?family=Ubuntu' rel='stylesheet' type='text/css'>
    
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.min.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="http://static.wowhead.com/widgets/power.js"></script><script>var wowhead_tooltips = { "colorlinks": true, "iconizelinks": true, "renamelinks": true }</script>
    
	<title>Memento | Frostwhisper EU</title>

</head>
<body>

<div id="PageBackground">


<nav class="navbar navbar-inverse navbar-static-top" role="navigation">

  <div class="container">
  	<h1 class="site-title"><?php bloginfo( 'name' ); ?></h1>
    <div class="navbar-header">
    
    
    
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>

    <!--Collect the nav links, forms, and other content for toggling-->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		<ul class="nav navbar-nav">
		<?php wp_list_pages('sort_column=menu_order&depth=1&title_li='); ?>
  		</ul>
        
        <!--wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>-->
      
    </div><!--navbar-collapse-->
  </div><!--container-->
  
</nav>

<!--navbaari loppuu-->