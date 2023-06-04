<?php
/*
	Template Name: Multi-Residential
*/
get_header(); ?>

<div class="h-screen w-screen mr-12 grid grid-cols-2 p-14 gap-6">
          <div>
               <div>Multi-Residential</div>
               <?php
$the_query = new WP_Query(array(
    'post_type' => 'multi-residential',
    'posts_per_page' => '10',
    'post__not_in' => array($id),
));

if ($the_query->have_posts()) {
    $displayed_categories = array(); // Array to store displayed category names

    while ($the_query->have_posts()) {
        $the_query->the_post();

        $thumbnail_id = get_post_thumbnail_id();
        $thumbnail_url = wp_get_attachment_image_src($thumbnail_id, 'thumbnail-size', true);
        $thumbnail_meta = get_post_meta($thumbnail_id, '_wp_attachment_image_alt', true);

        $categories = get_the_category();

        if ($categories) {
            foreach ($categories as $category) {
                if (!in_array($category->name, $displayed_categories)) {
                    echo '<div>';
                    echo '<div class="text-6xl">' . esc_html($category->name) . '</div>';
                    echo '</div>';

                    $displayed_categories[] = $category->name; // Add the category name to the displayed array
                }
            }
        }
    }
    wp_reset_postdata();
}
?>
          </div>
          <div class="col-scroll">
               <div class="text-black">
                    <div class="d-flex flex-row mb-3 text-white mt-4 gap-4 text-uppercase text-black">
                         <div class="text-black"><a href>Multi-Residential</a></div>
                    </div>

                    <div class="text-black">
                         <h1>Through our relationship in the industry and our volume of transactions, we
                              are happy to have access to many new construction projects. This allows us to offer many benefits to any of our
                              clients looking to purchase or invest in new constructions.</h1>
                    </div>

                    <div class="mt-5">
                    <!-- <a href><div class="text-5xl"><h1>1500 De Maisonneuve</div></a> -->
                         <div>
                         <?php
$categories = get_categories(array(
    'taxonomy' => 'category', // Replace 'category' with your custom taxonomy if needed
    'hide_empty' => false,
));

foreach ($categories as $category) {
    echo '<div>';
    echo '<h2 class="category-name text-white">' . esc_html($category->name) . '</h2>';
    echo '<ul>';

    $category_posts = new WP_Query(array(
        'post_type' => 'multi-residential',
        'posts_per_page' => -1,
        'tax_query' => array(
            array(
                'taxonomy' => 'category', // Replace 'category' with your custom taxonomy if needed
                'field' => 'term_id',
                'terms' => $category->term_id,
            ),
        ),
    ));

    if ($category_posts->have_posts()) {
        while ($category_posts->have_posts()) {
            $category_posts->the_post();
            echo '<li><a class="text-3xl" href="' . esc_url(get_permalink()) . '">' . get_the_title() . '</a></li>';
        }
    }

    echo '</ul>';
    echo '</div>';
    
    wp_reset_postdata(); // Reset the post data for the inner query
}
?>



                         </div>
                        
                    </div>
               </div>
                    
               </div>
          </div>
    </div>

<?php get_footer(); ?>