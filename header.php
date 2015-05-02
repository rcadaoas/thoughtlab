<!DOCTYPE html>
<html>
<head>
<title><?php bloginfo( 'name' ); ?></title>
<link rel="shortcut icon" href="http://romeocadaoas.co/wp-content/uploads/2015/04/favicon-gif.gif">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- wp_head() loads your functions.php and style.css -->
<?php wp_head(); ?>
</head>
<body>

<header>
  <!-- Bootstrap navbar-->
  <nav class="navbar navbar-inverse">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-2">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="<?php bloginfo('url')?>"><?php bloginfo('name')?></a>
      </div>

      <div class="collapse navbar-collapse" id="navbar-collapse-2">
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
  <!-- Bootstrap navbar end-->
</header>

<!-- Start of main container -->
<div id="main-container" class="container">

