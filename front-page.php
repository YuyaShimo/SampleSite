<?php get_header(); ?>
    <main>

    <!--お知らせここから-->
    <article class="topics">
    <section class="content-wrapper">
        <div class="heading">
          <h2 id="topics" class="slide-left">TOPICS</h2>
        </div>
        <div class="content">
          <table>
            <tbody>
              <tr>
                <th>2020.04.01</th>
                <td>海外への渡航について。</td>
              </tr>
              <tr>
                <th>2020.02.01</th>
                <td>国内旅行が最大50%オフになるキャンペーンがスタートしました。</td>
              </tr>
              <tr>
                <th>2020.01.01</th>
                <td>新春フェアがスタートしました。</td>
              </tr>
              <tr>
                <th>2020.12.01</th>
                <td>歳末フェアがスタートしました。</td>
              </tr>
            </tbody>
          </table>
          <p class="btn"><a href="#">more</a></p>
        </div>
    </section>
    </article>
    <!--お知らせここまで-->

    <!--旅行プランここから-->
    <article id="plan" class="plan">
<?php
$plan_obj = get_page_by_path( 'plan' );
$post = $plan_obj;
setup_postdata( $post );
$plan_title = get_the_title();
?>
      <section class="content-wrapper">
<?php wp_reset_postdata(); ?>
        <ul class="plan-wrapper">
<?php
$plan_pages = get_child_pages( 6, $plan_obj->ID );
if( $plan_pages->have_posts() ) :
  while( $plan_pages->have_posts() ) : $plan_pages->the_post();
?>
          <li class="plan-item">
            <a href="<?php the_permalink(); ?>">
              <h2 class="plan-title"><?php the_titile(); ?></h2>
                <div class="plan-img">
                  <?php the_post_thumbnail( 'common' ); ?>
                </div>
                <div class="plan-text">
                    <p><?php echo get_the_excerpt(); ?></p>
                    <p class="plan-btn"><a href="#">もっとみる</a></p>
                </div>
            </a>
          </li>
<?php
  endwhile;
  wp_reset_postdata();
endif;
?>
        </ul>
      </section>
    </article>
    <!--旅行プランここまで-->

    <!--事業案内ここから-->
    <article class="company-info">
    <section class="content-wrapper">
      <div class="content">
        <h2 id="company-info" class="slide-left">企業情報</h2>
        <p>
          こちらからご確認いただけます。
        </p>
        <p class="btn"><a href="#">more</a></p>
      </div>
    </section>
    </article>
    <!--事業案内ここまで-->

    <!--メンバーここから-->
    <article class="members">
    <section class="content-wrapper">
      <div class="content">
        <h2 id="members" class="slide-left">MEMBER</h2>
        <p class="members-subtitle slide-left">私たちがWorld Touristのメンバーです。</p>
      </div>
      <div class="members-wrapper">
        <ul class="members-list">
            <li class="member fadein">
              <div class="member-image">
                <img src="images/Smith.jpg" alt="Smith画像">
              </div>
              <p class="member-position">CEO</p>
              <h3>Smith</h3>
            </li>
            <li class="member fadein">
              <div class="member-image">
                <img src="images/Nancy.jpg" alt="Nancy画像">
              </div>
              <p class="member-position">CTO</p>
              <h3>Nancy</h3>  
            </li>
            <li class="member fadein">
              <div class="member-image">
                <img src="images/Tom.jpg" alt="Tom画像">
              </div>
              <p class="member-position">MANAGER</p>
              <h3>Tom</h3>  
            </li>
            <li class="member fadein">
              <div class="member-image">
                <img src="images/Emily.jpg" alt="Emily画像">
              </div>
              <p class="member-position">DIRECTOR</p>
              <h3>Emily</h3>  
            </li>
        </ul>
      </div>
    </section>
    </article>
    <!--メンバーここまで-->

    <!--採用ここから-->
    <article class="recruit">
      <h2 id="recruit" class="slide-left">採用情報</h2>
      <section class="content-wrapper">
        <ul>
          <li><a href="#"><figure><img src="images/recruit1.jpg" alt="採用情報画像1"></figure><span>正社員</span></a></li>
          <li><a href="#"><figure><img src="images/recruit2.jpg" alt="採用情報画像2"></figure><span>アルバイト</span></a></li>
        </ul>
      </section>
    </article>
    <!--採用ここまで-->

    <!--お問い合わせここから-->
    <article id="contact" class="contact">
      <ul>
        <li><a href="#">お問い合わせ</a></li>
      </ul>
    </article>
    <!--お問い合わせここまで-->

    </main>
<?php get_footer(); ?>