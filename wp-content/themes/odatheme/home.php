<?php
/* 
Template Name: home

*/
?>
<?php get_header();?>
<section class="info__container info">
            <div class="info-title">
              <div class="info-support">
                <h1>
                  <?php the_field('chernihiv'); ?>
                </h1>
                <p>
                <?php the_field('chernihiv-text'); ?>
                </p>
              </div>
              <button class="info-btn">Зруйновані обʼєкти</button>
            </div>
          
            </section>
            <section class="slides__slick slick">
              <div class="slider multiple-items" >

              <?php
global $post;

  $myposts = get_posts([ 
    'numberposts' => 0,
    'category_name' => 'imgslide',
    
  ]);

if( $myposts ){
	foreach( $myposts as $post ){
		setup_postdata( $post );
		?>
		 
         <div class="slider__item">
                  <?php the_post_thumbnail(); ?>
                  
                </div>

		<?php 
	}
} else {
	// Постов не найдено
}

wp_reset_postdata(); // Сбрасываем $post
?>


                
              </div>
              
            </section>
          <section class="destr__container destr">
            <img src="<?php bloginfo('template_url');?>/assets/image/leafs.png" alt="">
            <div class="destr-info">
              <h1>
              <?php the_field('destruction'); ?>
              </h1>
              <p>
              <?php the_field('destruction-text'); ?>
              </p>
            </div>
          </section>
       
          <section class="counts__container counts">
          <?php echo do_shortcode('[wptabs id="161"]'); ?>
          </section>
          
          <section class="damaged__slick damaged">
            <div class="damaged__container damaged-title">
              <h1 class="objects-title" id="fullName" title="check" name=$fullName value="checking"><?php the_field('damaged'); ?></h1>
              <button class="btn-head">Дивитись більше</button>
            </div>
            <div class="slider double-items" >
                
            <?php
global $post;

  $myposts = get_posts([ 
    'numberposts' => 0,
    'category_name' => 'slidedamage',
    'order_by' => 'date',
    'order' => 'ASC',
    'include' => array(),
    'exclude' => array(),
    'meta_key' => '',
    'meta_value' => '',
    'post_type' => 'post',
    'suppress_filters' => true,

  ]);

if( $myposts ){
	foreach( $myposts as $post ){
		setup_postdata( $post );
		?>
		 
         <div class="slider__element">
        
                <div class="testo">
                  <span class="slider-title" value="status"><a href="<?php the_permalink(); ?>"><?php the_content();?></a></span>
                </div>
               
                </div>
		<?php 
	}
} else {
	// Постов не найдено
}

wp_reset_postdata(); // Сбрасываем $post
?>

              
            </div>

          </section>

          <?php get_footer();?>

          