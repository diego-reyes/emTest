<!DOCTYPE html>
<html class=no-js>
  <head>
    <title><?php wp_title( '|', true, 'right' ); ?></title>
    <meta charset=utf-8>
    <meta name=description content="">
    <meta name=viewport content="width=device-width">

    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" />
    <script src="<?php echo get_template_directory_uri(); ?>/scripts/vendor/modernizr.js"></script>
  <?php wp_head(); ?>

  </head>
  <body>
    <!--[if lt IE 10]>
      <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->
    <header>
      <button class=btnShowMenu> </button>
      <nav>
	<ul>
	  <li class=current><a href=#>Home</a></li>
	  <li><a href=#>Section1</a></li>
	  <li><a href=#>Section2</a></li>
          
        </ul>
      </nav>
      <div class=logo>
	<span class=middle></span>
        <img src="<?php if (get_theme_mod('logo')) : echo get_theme_mod('logo'); 
			else: echo get_template_directory_uri().'/images/logo.png'; endif; ?>"
        alt=Logo>
      </div>
    </header>
    <section class=banner>
      <article>
        <header>
		<h1><?php echo get_theme_mod('banner_heading_1','Lorem ipsum dolor sit amet'); ?></h1>
		<h2><?php echo get_theme_mod('banner_heading_2','Lorem ipsum dolor sit amet.'); ?></h2>
        </header>
	 <footer>
	   <button class=readMoreButton type=button>
	     <?php echo get_theme_mod('banner_button_tag','Read More'); ?>
           </button>
	 </footer>	 
      </article>
    </section>
    
    <section class=teaserSections>

      <section class=section1>
      <header>
        <h1><?php echo get_theme_mod('section_heading_1','Lorem ipsum'); ?></h1>
	<h2><?php echo get_theme_mod('section_heading_2','Lorem ipsum dolor sit amet didi dada.'); ?></h2>
      </header>
      <article>
        <div class=articleImage>
	  <img src="<?php if (get_theme_mod('article1_image')) : echo get_theme_mod('article1_image'); 
			  else: echo get_template_directory_uri().'/images/articleImage1.png'; endif; ?>">
	</div>
	<div class=content>
	  <h3><?php echo get_theme_mod('article1_heading','Article 1'); ?></h3>
	  <p><?php echo get_theme_mod('article1_content','Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.'); ?></p>	
	  <footer>
	    <button type=button>
              <?php echo get_theme_mod('article1_button_tag','Read More'); ?>
	    </button>
	  </footer>
	</div>
      </article>
      <article>
        <div class=articleImage>
	  <img src="<?php if (get_theme_mod('article2_image')) : echo get_theme_mod('article2_image'); 
			  else: echo get_template_directory_uri().'/images/arcticleImage2.png'; endif; ?>">
	</div>
	<div class=content>
	  <h3><?php echo get_theme_mod('article2_heading','Article 2'); ?></h3>
	  <p><?php echo get_theme_mod('article2_content','Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.'); ?></p>	
	  <footer>
	    <button  type=button>
              <?php echo get_theme_mod('article2_button_tag','Read More'); ?>
	    </button>
	  </footer>
	</div>
      </article>
      <article>
       <div class=articleImage>
	  <img src="<?php if (get_theme_mod('article3_image')) : echo get_theme_mod('article3_image'); 
			  else: echo get_template_directory_uri().'/images/arcticleImage3.png'; endif; ?>">
	</div>
	<div class=content>
	  <h3><?php echo get_theme_mod('article3_heading','Article 3'); ?></h3>
	  <p><?php echo get_theme_mod('article3_content','Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.'); ?></p>	
	  <footer>
	    <button type=button>
              <?php echo get_theme_mod('article3_button_tag','Read More'); ?>
	    </button>
	  </footer>
	</div>
      </article>
      </section>	
    </section>

    <footer>
      <p> 
	<?php echo get_theme_mod('footer_message','Sing up for our newsletter to receive the latest news about our company.'); ?> 
      </p>
      <div class=form>
        <button class=btnCountry>
	 Select your country &#x25BC;
	</button>
        <input type=email placeholder="Your email address">
        <button class=btnSuscribe>
	 Suscribe
	</button>
      </div>
      <div class=footerImageLayer></div>
      <div class=footerOpaqueLayer></div>
    </footer>
  <div class=headerGradient></div>
  <div class=opaqueLayer></div>
  <div class=imageLayer></div>
    <script src="<?php echo get_template_directory_uri(); ?>/scripts/vendor.js"></script>

    <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. 
    <script>
      (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
      function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
      e=o.createElement(i);r=o.getElementsByTagName(i)[0];
      e.src='//www.google-analytics.com/analytics.js';
      r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
      ga('create','UA-XXXXX-X');ga('send','pageview');
    </script> 
    -->
        <script src="<?php echo get_template_directory_uri(); ?>/scripts/main.js"></script>

<?php wp_footer(); ?>

    <style>
     .imageLayer {
     	background: url("<?php if (get_theme_mod('page_background')) : echo get_theme_mod('page_background'); 
			  else: echo get_template_directory_uri().'/images/backImage1.png'; endif; ?>");
      }
      body > footer .footerImageLayer {
        background: url("<?php if (get_theme_mod('footer_background')) : echo get_theme_mod('footer_background'); 
			  else: echo get_template_directory_uri().'/images/footerBack1.png'; endif; ?>");
      }
      
    </style>

</html>

