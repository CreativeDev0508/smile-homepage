<footer id="footer">
    <div class="container">
        <div class="footer-inner-wrapper clearfix">
            <div class="inner-left">
                <div class="footer-logo">
                    <a href="<?php echo HOME; ?>"><img src="<?php echo T_DIRE_URI; ?>/assets/img/logo.png" class="logo" />
                    </a>
                </div>
                <div class="footer-info">
                    <p class="name">MKエンジニアリング株式会社</p>
                    <p class="text">〒491-1443　愛知県海部郡飛島村新政成11丁目27番地</p>
                    <div class="phone-action">
                        <a href="tel:0567-69-5911" class="phone-link">
                            <span class="text">TEL：0567-69-5911　FAX：0567-55-1200</span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="inner-right">
                <a href="<?php echo esc_url(home_url('/')); ?>contact" class="header-action">
                    <i>
                      <svg xmlns="http://www.w3.org/2000/svg" width="26.424" height="17.745" viewBox="0 0 26.424 17.745">
                        <path id="Path_689" data-name="Path 689" d="M1103.633,65.8l-7.521-14.826,26.424,10.363-6.382,1.507-1.313,5.875-4.4-4.171,3.189-.753.786,3.187,1.021-4.565-17.752-10.322,15.863,11.365Z" transform="translate(-1096.112 -50.971)" fill="#5dce8b"/>
                      </svg>
                    </i>
                    <span>お問い合わせ</span>
                </a>
            </div>
        </div>
        <div class="footer-nav">
            <div class="col">
                <a href="<?php echo HOME . 'company'; ?>" class="main-link">
                    <span class="jp">会社概要</span>
                </a>
                <ul class="nav-menu">
                   <!-- <li>
                        <a href="<?php echo HOME . 'company#message'; ?>" class="menu-link">ごあいさつ</a>
                    </li> -->
                    <li>
                        <a href="<?php echo HOME . 'company#overview'; ?>" class="menu-link">会社情報</a>
                    </li>
                    <li>
                        <a href="<?php echo HOME . 'company#history'; ?>" class="menu-link">沿革</a>
                    </li>
                </ul>
            </div>
            <div class="col">
                <a href="<?php echo HOME . 'service'; ?>" class="main-link">
                    <span class="jp">事業内容</span>
                </a>
                <ul class="nav-menu">
                    <li>
                        <a href="<?php echo HOME . 'service#wood'; ?>" class="menu-link">木造建築事業</a>
                    </li>
                    <li>
                        <a href="<?php echo HOME . 'service#steal'; ?>" class="menu-link">鉄骨建築事業
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo HOME . 'service#civil'; ?>" class="menu-link">土木造成事業
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo HOME . 'service#building'; ?>" class="menu-link">建物解体事業</a>
                    </li>
                </ul>
            </div>
            <div class="col">
                <a href="<?php echo HOME . 'work'; ?>" class="main-link">
                    <span class="jp">施工事例</span>
                </a>
            </div>
            <div class="col">
                <a href="<?php echo HOME . 'blog'; ?>" class="main-link">
                    <span class="jp">お知らせ</span>
                </a>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        Copyright(C) MKエンジニアリング株式会社All Rights Reserved.
    </div>
</footer>
</main>

<?php wp_footer(); ?>
<?php if( is_page('contact') ) : ?>
<script>
    $(function () {
        //規約チェックボックスの文言変更
        $('.js-mw-checkbox .mwform-checkbox-field-text').html('<a href="<?php echo esc_url(home_url('privacy / ')); ?>" target="_blank" rel="noopener noreferrer" class="underline">プライバシーポリシー</a>をご一読ください。');
    });
</script>
<?php endif; ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>
</body>

</html>