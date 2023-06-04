<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package yulstay
 */

get_header();
?>

<div class="h-screen w-screen mr-12 grid grid-cols-12 p-14 gap-4">
     <div class="col-span-5">
          multi-residential
     </div>
     <div class="col-span-1">
          
     </div>
     <div class="col-span-6 col-scroll">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/l.webp" alt="">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/l.webp" alt="">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/l.webp" alt="">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/l.webp" alt="">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/l.webp" alt="">
          </div>
     </div>
    </div>


<?php
get_footer();
