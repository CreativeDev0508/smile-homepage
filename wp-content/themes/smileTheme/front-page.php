<?php get_header(); ?>
<div class="container">

    <?php
    $args = [
        'post_type' => 'post',
        'post_status' => 'publish',
        'posts_per_page' => 6,
        'orderby' => 'post_date',
        'order' => "DESC",
    ];
    ?>

    <?php $result = new WP_Query($args); ?>
    <?php if ($result->have_posts()): ?>
        <div class="news-layout">
            <div class="news-top">
                <div class="news-title">お知らせ</div>
                <a href="<?php echo esc_url(home_url('/')); ?>blog"><span>一 覧 を 見 る
                    </span>
                </a>
            </div>
            <div class="news-content">
                <?php while ($result->have_posts()):
                    $result->the_post(); ?>
                    <div class="news-item wow fadeIn">
                        <time>
                            <?php the_time("Y,m,d"); ?>
                        </time>
                        <h3 class="title">
                            <?php the_title(); ?>
                        </h3>
                    </div>
                <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>
            </div>
        </div>
    <?php endif; ?>
    <div class="img-group">
        <div class="img wow fadeIn">
            <div class="hover-element"></div>
            <img src="<?php echo get_template_directory_uri() ?>/assets/imgs/img1.png" alt="スマイル福祉共済会とは">
            <img src="<?php echo get_template_directory_uri() ?>/assets/imgs/sm-img1.png" alt="スマイル福祉共済会とは">
            <a href="<?php echo esc_url(home_url('/')); ?>what">スマイル福祉共済会とは
                <p class="open">--- 開く ---</p>
            </a>
        </div>
        <div class="img wow fadeIn">
            <div class="hover-element"></div>
            <img src="<?php echo get_template_directory_uri() ?>/assets/imgs/img2.png" alt="各 種 保 険
                        ">
            <img src="<?php echo get_template_directory_uri() ?>/assets/imgs/sm-img2.png" alt="各 種 保 険">

            <a href="<?php echo esc_url(home_url('/')); ?>insurance">
                あんしん補償制度
                <p>（各種保険）</p>
                <p class="open">--- 開く ---</p>
            </a>
        </div>
        <div class="img wow fadeIn">
            <div class="hover-element"></div>
            <img src="<?php echo get_template_directory_uri() ?>/assets/imgs/img3.png" alt="福利厚生">
            <img src="<?php echo get_template_directory_uri() ?>/assets/imgs/sm-img3.png" alt="福利厚生">

            <a href="<?php echo esc_url(home_url('/')); ?>welfare">福利厚生<p class="open">--- 開く ---</p></a>
        </div>
        <div class="img wow fadeIn">
            <div class="hover-element"></div>
            <img src="<?php echo get_template_directory_uri() ?>/assets/imgs/img4.png" alt="加入方法/手順">
            <img src="<?php echo get_template_directory_uri() ?>/assets/imgs/sm-img4.png" alt="加入方法/手順">
            <a href="<?php echo esc_url(home_url('/')); ?>join">加入方法/手順<p class="open">--- 開く ---</p></a>
        </div>
        <div class="img wow fadeIn">
            <div class="hover-element"></div>
            <img src="<?php echo get_template_directory_uri() ?>/assets/imgs/img5.png" alt="災害見舞金制度">
            <img src="<?php echo get_template_directory_uri() ?>/assets/imgs/sm-img5.png" alt="災害見舞金制度">

            <a href="<?php echo esc_url(home_url('/')); ?>disaster">災害見舞金制度<p class="open">--- 開く ---</p></a>
        </div>
        <div class="img wow fadeIn">
            <div class="hover-element"></div>
            <img src="<?php echo get_template_directory_uri() ?>/assets/imgs/img6.png" alt="事故が起こったら">
            <img src="<?php echo get_template_directory_uri() ?>/assets/imgs/sm-img6.png" alt="事故が起こったら">
            <a href="<?php echo esc_url(home_url('/')); ?>occurs"><span>!</span>事故が起こったら<p class="open">--- 開く ---</p>
                </a>
        </div>
    </div>
    <div class="pamphlet wow fadeIn">
        <p class="pamphlet-text">
            スマイル 福 祉 共 済 会 の 最 新 パ ン フレット
        </p>
        <button class="pamphlet-btn">
            <a href="<?php echo get_template_directory_uri() ?>/assets/files/test.xlsx" download="test file">
                <img src="<?php echo get_template_directory_uri() ?>/assets/imgs/download-icon.png" alt="">
                <span class="vertical-bottom">ダ ウンロ ード</span>
            </a>
        </button>
    </div>
    <div class="pamphlet wow fadeIn">
        <p class="pamphlet-text pamphlet-rp-text">
            お気軽に<br>
            お問い合わせ<br>
            ください<br>
        </p>
        <p class="pamphlet-rp-sm-text">お気軽にお問い合わせください</p>
        <div class="sm-pamphlet">
            <div class="pamphlet-btn insurance">
                <p class="insurance-title">株式会社アクティ 保険部
                    <span class="insurance-time sm-block">受付時間：平日10:00〜15:00</span>
                </p>
                <p class="insurance-grp">
                    <span class="insurance-tel">TEL</span>
                    <span class="insurance-num">0463-63-0531</span>
                    <span class="sm-block  ml-10">
                        <span class="insurance-fax">FAX</span>
                        <span class="insurance-fax-num">050-3174-2183</span>
                    </span>
                </p>
                <p class="sm-none">
                    <span class="insurance-fax">FAX</span>
                    <span class="insurance-fax-num">050-3174-2183</span>
                </p>
                <p class="insurance-time sm-none">受付時間：平日10:00〜15:00</p>
            </div>
            <div class="pamphlet-btn insurance2">
                <a href="<?php echo esc_url(home_url('/')); ?>inquiry">
                    <span class="insurance-faq">お問い合わせフォーム</span>
                </a>
                <img src="<?php echo get_template_directory_uri() ?>/assets/imgs/message-icon.png" alt="message-icon">

            </div>
        </div>
        <div class="pamphlet-btn insurance sm-none">
            <p class="insurance-title">株式会社アクティ 保険部</p>
            <p class="insurance-grp">
                <span class="insurance-tel">TEL</span>
                <span class="insurance-num">0463-63-0531</span>
            </p>
            <p>
                <span class="insurance-fax">FAX</span>
                <span class="insurance-fax-num">050-3174-2183</span>
            </p>
            <p class="insurance-time">受付時間：平日10:00〜15:00</p>
        </div>
        <div class="pamphlet-btn  sm-none">
            <span class="insurance-faq">
                <a href="<?php echo esc_url(home_url('/')); ?>inquiry">お問い合わせフォーム</a>
            </span>
            <img src="<?php echo get_template_directory_uri() ?>/assets/imgs/message-icon.png" alt="message-icon">
        </div>
    </div>
</div>
<?php get_footer(); ?>