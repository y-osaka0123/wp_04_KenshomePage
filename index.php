    <?php get_header(); ?>

    <main>

      <div class="top">
        <img class="mainvisual" src="<?php echo esc_url(get_theme_file_uri('img/mainvisual.jpg')); ?>" alt="">
        <img class="sp-mainvisual" src="<?php echo esc_url(get_theme_file_uri('img/sp-mainvisual.jpg')); ?>" alt="">
        <section class="top-text inview fadein">
          <h2 class="top-title">ケンWeb制作について</h2>
          <p class="text">Webサイト制作を行っているケンと申します。
            <br>初めてホームページを持とうとお考えの皆様に向けて、心を込めてサポートいたします。
            <br>法人様、個人様問わず制作を行っております。</p>
        </section>
      </div>

      <div id="service" class="wrapper">
        <h2 class="content-title">事業内容</h2>
        <img id="s-img1" class="service-img inview fadein" src="<?php echo esc_url(get_theme_file_uri('img/service1.jpg')); ?>" alt="">
        <section id="s-section-1" class="service-section">
          <h3 class="section-title">Webサイト制作</h3>
          <p class="text">お客様の目的や特性に合わせたサイト制作を心掛けております。
            <br>デザインの提案から開発まで一貫して承っております。
            <br>お客様とのコミュニケーションを大切にし、柔軟なカスタマイズに対応致します。</p>
        </section>
        <img id="s-img2" class="service-img inview fadein" src="<?php echo esc_url(get_theme_file_uri('img/service2.jpg')); ?>" alt="">
        <section id="s-section-2" class="service-section">
          <h3 class="section-title">保守・運用</h3>
          <p class="text">制作したWebサイトをそのままにせず、定期的なメンテナンスやアップデートを承っております。
            <br>これによりセキュリティ対策と訪問者への安定的なサイトの提供を行えます。
          </p>
        </section>     
      </div>

      <div id="work" class="wrapper">
        <h2 class="content-title">制作実績</h2>
        <ul class="slider" id="slide">
          <?php
            $works = array('posts_per_page' => 10);
          ?>
          <?php $posts = get_posts($works); ?>
          <?php foreach($posts as $post): ?>
            <?php setup_postdata($post); ?>
            <li>
              <a href="<?php the_permalink(); ?>">
                <img src="<?php the_post_thumbnail_url('full'); ?>" alt="">
                <h2 class="post-title"><?php the_title(); ?></h2>
              </a>
            </li>
          <?php endforeach; ?>
          <?php wp_reset_postdata(); ?>
        </ul>
        <div class="view-more">
          <a href="<?php echo esc_url(home_url('/works/')); ?>" class="btn btn-svg">
            <svg>
              <rect class="btn-rect" x="2" y="2" rx="0" fill="none" width="200" height="50"></rect>
            </svg>
            <span class="work-details">もっと見る</span>
          </a>
        </div>
      </div>
      <div class="bg"></div>

      <div id="flow" class="wrapper">
        <h2 class="content-title">制作の流れ</h2>
        <ul id="flows">
          <li>
            <h3 class="flow-section">1.お問い合わせ</h3>
            <img src="<?php echo esc_url(get_theme_file_uri('img/flow1.jpg')); ?>" alt="">
            <p class="text">お気軽にお問い合わせフォームからご連絡下さい。</p>
          </li>
          <li>
            <h3 class="flow-section">2.ヒアリング</h3>
            <img src="<?php echo esc_url(get_theme_file_uri('img/flow2.jpg')); ?>" alt="">
            <p class="text">お客様のご要望や課題を丁寧にヒアリング致します。</p>
          </li>
          <li>
            <h3 class="flow-section">3.お見積り・ご提案</h3>
            <img src="<?php echo esc_url(get_theme_file_uri('img/flow3.jpg')); ?>" alt="">
            <p class="text">ヒアリングを元にサイトの提案とお見積りを提示致します。</p>
          </li>
          <li>
            <h3 class="flow-section">4.制作開始</h3>
            <img src="<?php echo esc_url(get_theme_file_uri('img/flow4.jpg')); ?>" alt="">
            <p class="text">お見積りをご確認いただき、問題が無ければ制作を開始致します。</p>
          </li>
        </ul>
      </div>

      <div id="question" class="wrapper">
        <h2 class="content-title long-title" id="question-title">よくあるご質問</h2>
        <p class="text">依頼をご検討中の方からよくいただくご質問をまとめております。</p>
        <details class="qa">
          <summary>まだつくると確定していなくても、とりあえず相談してもいいですか？</summary>
          <p>はい、お気軽にお問い合わせください。
            <br>お話を伺いながら、最適なプランやアイディアをご提案させていただきます。</p>
        </details>
        <details class="qa">
        <summary>訪問での打ち合わせは可能ですか？</summary>
          <p>訪問での打ち合わせは行っておりません。
            <br>Google Meet、Zoom、Discord、メールでの打ち合わせが可能です。</p>
        </details>
        <details class="qa">
          <summary>納品後のサポートはありますか？</summary>
          <p>はい、納品後の１ヶ月間は無償でサポートいたします。
            <br>１ヶ月以降もサイトの更新やページの追加など随時対応させていただきます。</p>
        </details>
      </div>

      <div id="contact" class="wrapper">
        <h2 class="content-title long-title" >お問い合わせ</h2>
        <p></p>
        <a href="<?php echo esc_url(home_url('/contact')); ?>">
          <img class="contact-img" src="<?php echo esc_url(get_theme_file_uri('img/contact.jpg')); ?>" alt="">
        </a>
        <div class="view-more contact-btn" id="PC-contact-btn">
          <a href="<?php echo esc_url(home_url('/questions')); ?>" class="btn btn-svg contact-svg">
            <svg>
              <rect class="btn-rect" x="2" y="2" rx="0" fill="none" width="380" height="50"></rect>
            </svg>
            <span>お問い合わせはこちらから</span>
          </a>
        </div>
        <div class="view-more contact-btn" id="SP-contact-btn">
          <a href="<?php echo esc_url(home_url('/questions')); ?>" class="btn btn-svg contact-svg">
            <svg>
              <rect class="btn-rect" x="2" y="2" rx="0" fill="none" width="280" height="50"></rect>
            </svg>
            <span>お問い合わせはこちらから</span>
          </a>
        </div>
      </div>
    </main>

    <?php get_footer(); ?>
