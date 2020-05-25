<?php if( ! is_front_page() ): ?>
  </div>
<?php endif; ?>
<footer class="footer">
    <section class="content-wrapper">
      <div class="high">
        <h1>World Tourist</h1>
        <ul>
          <li><a href="#">お知らせ</a></li>
          <li><a href="#">旅行プラン</a></li>
          <li><a href="#">企業情報</a></li>
          <li><a href="#">お問い合わせ</a></li>
        </ul>
      </div>
      <div class="low">
        <div class="address">
          〒000-0000<span>鹿児島県鹿児島市〇〇町1-1</span><br>
          TEL：012-3456-7890
        </div>
        <div class="sns-icon">
          <a href="#"><i class="fab fa-twitter-square"></i></a>
          <a href="#"><i class="fab fa-facebook-square"></i></a>
          <a href="#"><i class="fab fa-line"></i></a>
        </div>
      </div>
      <p>&copy;World Tourist Co.,Ltd.</p>
    </section>
    </footer>
    <!--フッターここまで-->
    <script src="<?php echo get_template_directory_uri(); ?>/js/script.js"></script>
    <?php wp_footer(); ?>
  </body>
 </html>