<?php
/* 
Template Name: categories
*/
?>

<?php get_header();?>
<div id="test" class="objects__container objects">

<h1 class="objects__title">Зруйновані обʼєкти</h1>
    <ul key="status" class="stat">
        <p class="obects-p">Статус</p>

        <?php
        $filter1 = isset($_GET['filter1']) ? sanitize_text_field($_GET['filter1']) : 'all';
        $filter1_options = array(
            'destroyed' => 'ЗРУЙНОВАНО',
            'damaged' => 'ПОШКОДЖЕНО',
            'all' => 'ВСІ'
        );

        foreach ($filter1_options as $value => $label) {
            $active_class = ($filter1 === $value) ? 'active' : '';
            $link = ($value === 'all') ? esc_url(remove_query_arg('filter1')) : esc_url(add_query_arg('filter1', $value));

            echo '<li><a href="' . $link . '" class="chip-button ' . $active_class . '">' . $label . '</a></li>';
        }
        ?>
    </ul>

    <ul key="category_objects" class="stat">
    <p class="obects-p">Категорія обʼєкту</p>

    <?php
    $filter2 = isset($_GET['filter2']) ? sanitize_text_field($_GET['filter2']) : 'all';
    $filter2_options = array(
        'housing' => 'ЖИТЛО',
        'education' => 'ОСВІТА',
        'health' => 'ОХОРОНА ЗДОРОВʼЯ',
        'protection' => 'СОЦІАЛЬНИЙ ЗАХИСТ',
        'culture' => 'КУЛЬТУРА ТА СПОРТ',
        'objects' => 'ІНШІ ОБʼЄКТИ'
    );

    foreach ($filter2_options as $value => $label) {
        $active_class = ($filter2 === $value) ? 'active' : '';
        
        if ($active_class !== '') {
            // Remove filter2 when clicking on an already active button
            $link = esc_url(remove_query_arg('filter2'));
        } else {
            $link = esc_url(add_query_arg('filter2', $value));
        }

        echo '<li><a href="' . $link . '" class="chip-button ' . $active_class . '">' . $label . '</a></li>';
    }
    ?>
</ul>


    <ul key="subcategory" class="stat">
        <p class="obects-p">Підкатегорія обʼєкту</p>

        <?php
        $filter3 = isset($_GET['filter3']) ? sanitize_text_field($_GET['filter3']) : 'all';
        $filter3_options = array(
            'museums' => 'МУЗЕЇ',
            'houses' => 'БУДИНКИ КУЛЬТУРИ',
            'monuments' => 'ПАМʼЯТКИ АРХІТЕКТУРИ',
            'schools' => 'ШКОЛИ',
            'kindergarten' => 'САДОЧКИ',
            'sports' => 'СПОРТ',
            'social' => 'СОЦІАЛЬНИЙ ЗАХИСТ'
        );

        foreach ($filter3_options as $value => $label) {
            $active_class = ($filter3 === $value) ? 'active' : '';
            
            if ($active_class !== '') {
                // Remove filter2 when clicking on an already active button
                $link = esc_url(remove_query_arg('filter3'));
            } else {
                $link = esc_url(add_query_arg('filter3', $value));
            }
    
            echo '<li><a href="' . $link . '" class="chip-button ' . $active_class . '">' . $label . '</a></li>';
        }
        ?>
    </ul>

    <div class="lop">
        <?php
        global $post;

        $taxonomy1_slug = 'damage'; // Get the taxonomy slug for damage
        $taxonomy2_slug = 'cotegory'; // Get the taxonomy slug for category
        $taxonomy3_slug = 'subcategory';

        
        $args = array(
            'category_name' => 'slidedamage',
            'numberposts' => -1,
            'post_type' => 'post',
            'suppress_filters' => true,
        );

        // Add taxonomy filters to the query
        $tax_query = array();

        if ($filter1 !== 'all') {
            $tax_query[] = array(
                'taxonomy' => $taxonomy1_slug,
                'field' => 'slug',
                'terms' => $filter1
            );
        }

        if ($filter2 !== 'all') {
            $tax_query[] = array(
                'taxonomy' => $taxonomy2_slug,
                'field' => 'slug',
                'terms' => $filter2
            );
        }

        if ($filter3 !== 'all') {
            $tax_query[] = array(
                'taxonomy' => $taxonomy3_slug,
                'field' => 'slug',
                'terms' => $filter3
            );
        }
        

        if (!empty($tax_query)) {
            $tax_query['relation'] = 'AND'; // Use 'AND' for filtering with multiple taxonomies

            $args['tax_query'] = $tax_query;
        }

        $myposts = get_posts($args);

        if ($myposts) {
            foreach ($myposts as $post) {
                setup_postdata($post);
                ?>

                <div class="filter__element">
                    
                <div class="testo">
                  <span class="slider-title" value="status"><a href="<?php the_permalink(); ?>"><?php the_content();?></a></span>
                </div>
                    
                </div>
                <?php
            }
        } else {
            // No posts found
            echo '<p>No posts found.</p>';
        }

        wp_reset_postdata(); // Reset $post
        ?>
    </div>
</div>

<?php get_footer();?>
