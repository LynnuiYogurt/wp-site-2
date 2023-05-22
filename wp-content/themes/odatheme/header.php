<html <?php language_attributes();?>>
  <head>
    <meta charset="<?php bloginfo('charset');?>" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- <link rel="stylesheet" href="./css/style.css" /> -->
    <title>oda</title>
    <?php wp_head();?>
  </head>
  <body>
      <header class="header__padding">
        <div class="lang__container lang">
          <div class="lang-list" >
            <?php echo do_shortcode('[weglot_switcher]');?>
        </div>
        </div>
        <div class="header__container header">
          <a href="" class="header__logo"><img src="<?php bloginfo('template_url');?>/assets/image/logo.png" alt=""></a>
          <div class="left-menu">
            <ul class="nav">
              <?php wp_nav_menu(); ?>
              <!-- <li>Про проект</li>
              <li>Зруйновані обʼєкти</li> -->
              <!-- <li>Контакти</li> -->
            </ul>
          </div>
          
          <div class="right-menu">
    
              <div class="search">
              <?php get_template_part('custom-searchform'); ?>
              </div>
              <!-- <button class="btn-head">Зробити внесок</button> -->
          </div>
        </div>
        
      </header>