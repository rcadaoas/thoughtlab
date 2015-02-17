<!DOCTYPE html>
<html>
<head>
<title><?php bloginfo( 'name' ); ?></title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<?php wp_head(); ?>
</head>
<body>
<div id="main" class="container">

<header>
	<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-2">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="<?php bloginfo('url')?>"><?php bloginfo('name')?></a>
    </div>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-2">
      <?php /* Primary navigation */
      wp_nav_menu( array(
        'menu' => 'top_menu',
        'depth' => 2,
        'container' => false,
        'menu_class' => 'nav navbar-nav',
        //Process nav menu using our custom nav walker
        'walker' => new wp_bootstrap_navwalker())
      );
      ?>
    </div>

  </div>
</nav>
</header>