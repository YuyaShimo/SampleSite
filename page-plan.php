<?php get_header(); ?>

<div class="page-wrapper">
  <div class="page-container">
    <div class="page-inner">
      <div class="page-main">
        <ul class="commons">
<?php
  $common_pages = get_child_pages();
  if( $common_pages->have_posts() ):
    while( $common_pages->have_posts() ): $common_pages->the_post();
      get_template_part( 'content-common');
    endwhile;
    wp_reset_postdata();
  endif;
?>         
        </ul>
      </div>
    </div>
  </div>
</div>

<?php get_footer(); ?>