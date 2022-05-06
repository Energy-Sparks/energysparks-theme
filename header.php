<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @since The Bootstrap Blog 0.1
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link rel="profile" href="https://gmpg.org/xfn/11">

  <link rel="stylesheet" media="screen" href="//fonts.googleapis.com/css?family=Open+Sans|Quicksand:300&display=swap">
  <link rel="stylesheet" media="screen" href="//fonts.googleapis.com/css?family=Open+Sans|Quicksand:500&display=swap">
  <link rel="stylesheet" media="screen" href="//fonts.googleapis.com/css?family=Open+Sans|Quicksand:700&display=swap">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

	<?php wp_head(); ?>

  <script src="https://blog.energysparks.uk/wp-content/themes/energysparks/inc/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  </head>

<body <?php body_class('no-js'); ?>>

  <?php wp_body_open(); ?>

<?php // Let's get them only once
$has_header_image = has_header_image();
?>

		<div class="blog-masthead<?php
	 if ( $has_header_image ){
			echo esc_attr( ' border-bottom border-white' );
	}
	 ?>">
      <nav class="navbar navbar-expand-lg navbar-custom">
        <div class="container">
          <a class="navbar-brand" title="" href="/"><img class="d-inline-block align-top" src="https://blog.energysparks.uk/wp-content/themes/energysparks/images/nav-brand-transparent.png"></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
            <ul class="navbar-nav">
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="ourSchoolsDropDown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Our schools</a>
                <div class="dropdown-menu" aria-labelledby="ourSchoolsDropDown">
                  <a class="dropdown-item" href="https://energysparks.uk/schools">View schools</a>
                  <a class="dropdown-item" href="https://energysparks.uk/scoreboards">Scoreboards</a>
                  <a class="dropdown-item" href="https://energysparks.uk/benchmarks">Compare schools</a>
                </div>
              </li>
            <?php
            		wp_nav_menu( array(
            			'theme_location'	=> 'top',
            			'container'			=> 'foo',
            			'container_class'	=> 'navbar-nav',
            			'items_wrap'        => '%3$s',
            			'item_spacing'      => 'preserve',
            			'fallback_cb'		=> 'The_Bootstrap_Blog_Walker::fallback',
            			'walker'			=> new The_Bootstrap_Blog_Walker()

            			)
            		);
            ?>
            <li class="nav-item dropdown" id="our-services">
              <a class="nav-link dropdown-toggle" href="#" id="ourServicesDropDown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Our services</a>
              <div class="dropdown-menu" aria-labelledby="ourServicesDropDown">
                <a class="dropdown-item" href="https://energysparks.uk/for-schools">For Schools</a>
                <a class="dropdown-item" href="https://energysparks.uk/for-multi-academy-trusts">For Multi-Academy Trusts</a>
                <a class="dropdown-item" href="https://energysparks.uk/for-local-authorities">For Local Authorities</a>
                <a class="dropdown-item" href="https://energysparks.uk/energy-audits">Energy audits</a>
                <a class="dropdown-item" href="https://energysparks.uk/education-workshops">Educational workshops</a>
                <a class="dropdown-item" href="https://energysparks.uk/training">Training</a>
                <a class="dropdown-item" href="https://energysparks.uk/case-studies">Case Studies</a>
                <a class="dropdown-item" href="https://energysparks.uk/newsletters">Newsletters</a>
                <a class="dropdown-item" href="https://energysparks.uk/user-guide-videos">Videos</a>
              </div>
            </li>
            <li class="nav-item dropdown" id="about-menu">
              <a class="nav-link dropdown-toggle" href="#" id="aboutDropDown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">About us</a>
              <div class="dropdown-menu" aria-labelledby="aboutDropDown">
                <a class="dropdown-item" href="/contact">Contact</a>
                <a class="dropdown-item" href="/team">Team</a>
                <a target="_blank" class="dropdown-item" href="http://blog.energysparks.uk">Blog</a>
                <a class="dropdown-item" href="https://energysparks.uk/team#partners">Partners</a>
                <a class="dropdown-item" href="https://energysparks.uk/jobs">Jobs</a>
                <a class="dropdown-item" href="https://energysparks.uk/terms_and_conditions">Terms and conditions</a>
                <a class="dropdown-item" href="https://energysparks.uk/privacy_and_cookie_policy">Privacy policy</a>
                <a class="dropdown-item" href="https://energysparks.uk/child-safeguarding-policy">Child safeguarding</a>
                <a class="dropdown-item" href="https://energysparks.uk/school_statistics">School statistics</a>
                <a class="dropdown-item" href="https://energysparks.uk/attribution">Datasets</a>
                <a class="dropdown-item" href="https://energysparks.uk/datasets">Open data</a>
              </div>
            </li>
            </nav>
          </div>
        </div>
      </nav>
    </div>
<header class="blog-header">
  <div class="container<?php
	if ( $has_header_image ){
		echo esc_attr( ' has-custom-header');
	}
	?>">
		<h1 class="site-title"><?php the_bootstrap_blog__site_title(); ?></h1>
		<p class="lead site-description<?php
		if ( ! $has_header_image ){
			echo esc_attr( ' text-muted' );
		}
		?>"><?php the_bootstrap_blog__site_description(); ?></p>
  </div>
</header>
