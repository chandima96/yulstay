<?php
/*
	Template Name: Home
*/
get_header(); ?>

<div class="h-screen w-screen mr-12 flex flex-col justify-between p-14 text-white">
        <video autoplay muted loop id="myVideo" class="w-full h-full object-cover">
            <source src="<?php echo get_template_directory_uri(); ?>/assets/img/Yulstay.mp4" type="video/mp4">
            Your browser does not support HTML5 video.
          </video>
        <div class="hidden md:block">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png" class="w-80" alt="">
        </div>
        <div class="text-blue-500 pl-4">
            carousel
        </div>
        <div class="flex justify-between">
            <div>
                <a href="">Join our Team</a>
            </div>
            <div>
                <a href="">Book a Consutation</a>
            </div>
        </div>
    </div>

<?php get_footer(); ?>