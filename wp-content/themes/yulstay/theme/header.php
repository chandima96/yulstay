<?php
/**
 * The header for our theme
 *
 * This is the template that displays the `head` element and everything up
 * until the `#content` element.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package yulstay
 */

?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- <link href="<?php echo get_template_directory_uri(); ?>/dist/output.css" rel="stylesheet"> -->
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/style.css">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<?php wp_body_open(); ?>
    <script>
        var modal = document.getElementById("myModal");
        
        var btn = document.getElementById("MD_OPEN_BTN");
        
        var span = document.getElementsByClassName("close")[0];
        
        function openModal() {
             document.getElementById("myModal").style.display = "block";
        }
        
        function cancelModal() {
             document.getElementById("myModal").style.display = "none";
        }
        
        window.onclick = function(event) {
          if (event.target == modal) {
            modal.style.display = "none";
          }
        }
        </script>
    <nav class="h-12 w-screen md:w-12 md:h-screen right-0 fixed opacity-100 md:bg-white border-b border-white z-50 flex justify-between md:items-center md:content-between">
       <div class="md:hidden mx-6">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png" class="h-11" alt="">
       </div>
       <div class="" onclick="openModal()">
            <svg xmlns="http://www.w3.org/2000/svg" class="nav-icon" width="48" height="48" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/>
            </svg>
       </div>
    </nav>

    <div id="myModal" class="modal z-40" style="background-color: aqua;">
        <div class="grid grid-cols-2 w-screen mr-12">
            <div class="p-14 h-screen flex flex-col justify-between">
                    <div class="text-center">
                        Investing in peace <br>
                        of mind
                    </div>
                    <div>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png" class="w-40" alt="">
                    </div>
            </div>
            <div class="p-14 h-screen flex flex-col justify-between">
                <div class="text-2xl">
                <?php 
                  $menu_name = 'main-menu';
                  if ( ( $locations = get_nav_menu_locations() ) && isset( $locations[ $menu_name ] ) ) 
                  {
                  $menu = wp_get_nav_menu_object( $locations[ $menu_name ] );
                  $menu_items = wp_get_nav_menu_items($menu->term_id); ?>
                  <?php foreach ( (array) $menu_items as $key => $menu_item ) 
                    { 
                  $ptitle = $menu_item->title; ?>
                      <li class="py-1"><a href="<?php echo $menu_item->url; ?>"><?php echo $menu_item->title; ?></a></li>
                      <?php 
                  }  
                    } 
                  ?>  
                </div>
                <div>
                  <div class="bg-white shadow sm:rounded-lg">
                    <div class="px-4 py-5 sm:p-6">
                      <h3 class="text-base font-semibold leading-6 text-gray-900">Update your email</h3>
                      <div class="mt-2 max-w-xl text-sm text-gray-500">
                        <p>Change the email address you want associated with your account.</p>
                      </div>
                      <form class="mt-5 sm:flex sm:items-center">
                        <div class="w-full sm:max-w-xs">
                          <label for="email" class="sr-only">Email</label>
                          <input type="email" name="email" id="email" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" placeholder="you@example.com">
                        </div>
                        <button type="submit" class="mt-3 inline-flex w-full items-center justify-center rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600 sm:ml-3 sm:mt-0 sm:w-auto">Save</button>
                      </form>
                    </div>
                  </div>
                  </div>
            </div>
        </div>
    </div>
    <!-- Nav ending -->
