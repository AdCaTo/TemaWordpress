<?php 
get_header();
?>
<section class="container">
<article class="col-md-9" style="float:left; margin-top:50px;">
<?php 
    global $post;
    if (have_posts()) { 
        while (have_posts()) {
            the_post(); 
            ?>
            <div class="col-md-6">
            <h2><?php the_title(); ?></h2>
            <p><?php the_content(); ?></p>
            </div>
            <?php
            if ( comments_open() || get_comments_number() ) {
                comments_template();
            }
        }   
    }
    ?>          
    </article>
</section>
<?php get_footer(); ?>