<li class="common-item">
  <a class="common-link" href="<?php the_permalink(); ?>">
    <div class="common-image"><?php the_posst_thumbnail(); ?></div>
    <div class="common-body">
      <p class="name"><?php the_title(); ?></p>
      <p class="caption"><?php echo get_the_title(); ?></p>
    </div>
    <div class="btn button-box">
      <button type="button" class="see-detail">MORE >></button>
    </div>
  </a>
</li>