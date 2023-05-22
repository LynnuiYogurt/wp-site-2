<?php get_header(); ?>
      <section class="search-page">
       

        <!-- Post Loop -->

        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

          <p>This is the search page</p>
          <h4> <?php the_title(); ?></h4>

        <?php the_content(); ?>

        <?php endwhile; else : ?>
	         <p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
        <?php endif; ?>

      </section>
  

<?php get_footer(); ?>
