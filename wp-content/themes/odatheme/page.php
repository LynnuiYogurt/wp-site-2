<?php

/* 
Template Name: Page
Template post type: post, page
*/


?>

<?php get_header();?>
<div class="wrapper">
<section class="post">
    <h1><?php the_field('main_title'); ?></h1>
    <img src="<?php the_field('main_img'); ?>" alt="">
    <div class="post__info">
        <div class="post__left">
            <div class="post__left-collum">
                <span class="post__left-building"><?php the_field('building'); ?></span>
                <div class="post__left-st">
                    <div>
                        <span>Статус</span>
                        <span class="<?php the_field('color'); ?>"><?php the_field('status_post'); ?></span>
                    </div>
                    <div class="post__left-degree">
                        <span>Ступінь руйнування</span>
                        <span><?php the_field('degree'); ?></span>
                    </div>
                </div>
            </div>
        </div>

        <div class="post__right">
            <div class="post__rigth-sum">
                <span class="">Необхідна сумма на відновлення</span>
                <span class="bld_price"><?php the_field('need_price'); ?></span>
            </div>
            <div class="progress__bar">
            <span class="progreess__bar-text"><?php the_field('bar'); ?>% </span> 
                <progress id="file" max="100" value="<?php the_field('bar'); ?>"></progress>
                
            </div>
            <div>
                <span>Зібрано</span>
                <span class="bld_price"><?php the_field('aviable'); ?></span>
            </div>
        </div>
        
    </div>
    <!-- <button class="btn-head">Зробити внесок</button> -->
    
</section>

<section class="destruction">
    <div class="post__el">
        <span class="post__el-title"><?php the_field('mn_destruction'); ?></span>
        <span class="post__el-text"><?php the_field('mn_destruction_text'); ?></span>
    </div>
    <img src="<?php the_field('mn_img1'); ?>" alt="">
    <img src="<?php the_field('mn_img2'); ?>" alt="">
</section>

<section>
<div class="post__el">
        <span class="post__el-title"><?php the_field('mn_description'); ?></span>
        <span class="post__el-text"><?php the_field('mn_description_text'); ?></span>
    </div>
    <div class="post__building">
        <div class="post__building-el">
            <img src="<?php the_field('estab_img1'); ?>" alt="">
            <span class="post__building-text"><?php the_field('estab_text1'); ?></span>
            <span><?php the_field('estab_text11'); ?></span>
            
        </div>
        <div class="post__building-el">
            <img src="<?php the_field('estab_img2'); ?>" alt="">
            <span class="post__building-text"><?php the_field('estab_text2'); ?></span> 
            <span><?php the_field('estab_text22'); ?></span>

        </div>
    </div>
</section>

<section class="destruction">
    <div class="post__el">
        <span class="post__el-title">Контакти</span>
        <div class="contacts">
            <span class="contacts__title">Адреса <span class="contacts__text"><?php the_field('address'); ?></span></span>
            <span class="contacts__title">Керівник <span class="contacts__text"><?php the_field('inCharge'); ?></span></span>
            <span class="contacts__title">Мобільний телефон <span class="contacts__text"><?php the_field('phone_post'); ?></span></span>
            <span class="contacts__title">Сайт <span class="contacts__text"><a href="<?php the_field('site_url'); ?>" target="_blank"><?php the_field('site_name'); ?></a></span></span>
            <span class="contacts__title">E-mail <span class="contacts__text"><a href="mailto:<?php the_field('email_post'); ?>"><?php the_field('email_post'); ?></a></span></span>
        </div> 
</div>
</section>
</div>

<?php get_footer();?>