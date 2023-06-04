<?php
/*
	Template Name: New Construction
*/
get_header(); ?>

<div class="h-screen w-screen mr-12 grid grid-cols-2 p-14 gap-6">
          <div>
               <div>Partnership</div>
               <div>

                         <?php $the_query = new WP_Query( array('post_type' =>'construction','posts_per_page' => '10',  'post__not_in'   => array( $id),) );?>
							     <?php if ( have_posts())   : while ( $the_query->have_posts() ) : $the_query->the_post();?>
							  
									   <?php
										$thumbnail_id = get_post_thumbnail_id(); 
										$thumbnail_url = wp_get_attachment_image_src( $thumbnail_id, 'thumbnail-size', true );
										$thumbnail_meta = get_post_meta( $thumbnail_id, '_wp_attachment_image_alt', true); 

                    $categories = get_the_category();
                    ?>
									<h1><?php the_excerpt(); ?></h1>	
								<?php		
                                        if ( has_post_thumbnail() ) {
    $attachment_image = wp_get_attachment_url( get_post_thumbnail_id() );
    //echo '<link rel="preload" as="image" href="' . esc_attr( $attachment_image ) . '">';  
?>

                    <img src="<?php echo $attachment_image; ?>" alt="">
                    <?php } ?>
                    <?php endwhile; endif; ?>
               </div>
          </div>
          <div class="col-scroll">
               <div class="text-black">
                    <div class="d-flex flex-row mb-3 mt-4 gap-4 text-uppercase text-black">
                         <div class=""><a href style="text-decoration: underline; color: white;" !important> Development</a></div>
                         <div class=""><a href>Properties</a></div>
                    </div>

                    <div class="text-black">
                         <h1>Through our relationship in the industry and our volume of transactions, we
                              are happy to have access to many new construction projects. This allows us to offer many benefits to any of our
                              clients looking to purchase or invest in new constructions.</h1>
                    </div>

                    <div class="mt-5">
                    <?php $the_query = new WP_Query( array('post_type' =>'construction','posts_per_page' => '10',  'post__not_in'   => array( $id),) );?>
							     <?php if ( have_posts())   : while ( $the_query->have_posts() ) : $the_query->the_post();?>
							  
									   <?php
										$thumbnail_id = get_post_thumbnail_id(); 
										$thumbnail_url = wp_get_attachment_image_src( $thumbnail_id, 'thumbnail-size', true );
										$thumbnail_meta = get_post_meta( $thumbnail_id, '_wp_attachment_image_alt', true); 

                    $categories = get_the_category();
										
										?>
                         <div>
                              <a href="<?php the_permalink(); ?>">
                                <div class="text-5xl"><?php the_title(); ?></div>
                                <div class="text-uppercase text-xl">montreal,ca</div>
                              </a>
                         </div>
                         <?php endwhile; endif; ?>
                    </div>
               </div>
                    
               </div>
          </div>
    </div>

<?php get_footer(); ?>