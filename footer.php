    <footer id="footer">
      <div  class="site-title">
        <a href="<?php echo esc_url(home_url()) ?>">
          <img src="<?php echo esc_url(get_theme_file_uri('img/name_logo.jpg')) ?>" alt="">
        </a>
        <p class="inner">&copy; 2024 KenWebCrafting</p>
      </div>
      <div class="footer-navi">
        <ul class="footer-menu">
          <li>
            <a href="<?php echo esc_url(home_url('/work')) ?>">制作実績</a>
          </li>
          <li>
            <a href="<?php echo esc_url(home_url('#question')) ?>">よくある質問</a>
          </li>
          <li>
            <a href="<?php echo esc_url(home_url('/contact')); ?>">お問い合わせ</a>
          </li>
          <li>
            <a href="<?php echo esc_url('https://x.com/KenWebCrafting');?>">
              <img src="<?php echo esc_url(get_theme_file_uri('img/x-logo.png')) ?>" alt="">
            </a>
          </li>
        </ul>
      </div>
    </footer>
    <?php wp_footer(); ?>


  </body>
</html>