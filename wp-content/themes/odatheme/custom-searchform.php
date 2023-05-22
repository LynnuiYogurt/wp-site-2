
<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
    <div class="search">
        <input type="text" class="search__input" placeholder="ПОШУК" name="search_text">
        <div class="search__icon">
            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/image/search.png" alt="">
        </div>
    </div>
</form>