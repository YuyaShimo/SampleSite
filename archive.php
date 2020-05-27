<?php get_header(); ?>

<div class="page-inner">
    <div class="page-main">
      <div class="main-container">
        <div class="main-wrapper">
          <div class="newslist">
<?php
  if( have_posts() ):
    while( have_posts() ) : the_post();
?>
            <a class="news-link" href="<?php the_permalink(); ?>">
              <div class="news-body">
                <time class="release"><?php the_time('Y.m.d'); ?></time>
                <p class="title"><?php the_title(); ?></p>
              </div>
            </a>
           
<?php
    endwhile;
  endif;
?>
             
          </div>
        </div>
      </div>
    </div>
  </div>
  
<?php get_footer(); ?>