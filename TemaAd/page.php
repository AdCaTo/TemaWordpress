<?php get_header(); ?>
<main class="wrap">
  <section class="content-area content-thin col-md-9" style="float:left; margin-top:50px;">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      <article class="article-full">
        <header>
          <h2><?php the_title(); ?></h2>
          By: <?php the_author(); ?>
        </header>
        <?php the_content(); ?>
      </article>
<?php endwhile; else : ?>
      <article>
        <p>Pagina inexistente</p>
      </article>
<?php endif; ?>
  </section><?php get_sidebar(); ?>
</main>
<?php get_footer(); ?>