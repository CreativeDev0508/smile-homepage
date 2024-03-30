<?php get_header(); ?>
<div class="container">
  <div class="what-smile-title wow fadeIn">
    <span class="square-icon"></span>
    <span class="what-smile-text">
      スマイル 福 祉 共 済 会 とは
    </span>
  </div>
  <div class="what-smile-contents wow fadeIn">
    <p>
      スマイル福祉共済会は、ヨコハマタイヤショップの皆さまだけがご加入いただける共済制度です。
    </p>
    <p>
      会員制リゾートクラブがご利用いただける福利厚生をはじめ、災害時の見舞金制度やタイヤショップの運営リスクに備える各種保険をご用意しております。
    </p>
  </div>
  <div class="smile-center wow rotateIn">
    <div class="smile-imgs">
      <div class="position-rel">
        <img src="<?php echo get_template_directory_uri() ?>/assets/imgs/smile-imgs.png" alt="">
        <p class="welfare1">福利厚生</p>
        <p class="insurance1">各種保険</p>
        <p class="solatium1">災害見舞金</p>
        <p class="welfare2">Welfare</p>
        <p class="insurance2">Insurance</p>
        <p class="solatium2">Solatium</p>
      </div>
    </div>
  </div>
  <div class="what-smile-title what-smile-title-2th wow fadeIn">
    <span class="square-icon"></span>
    <span class="what-smile-text">
      スマイル福祉共済会 会費
    </span>
  </div>
  <div class="what-smile-contents what-smile-contents-2th wow fadeIn">
    <p>
      お預かりした会費は、リゾートクラブ運営費、募集費用、業務委託費等に使用させていただきます。
    </p>
    <p>
      <span>
        1店舗あたり年間 <span class="what-smile-contents-2th-custom">1,000</span>円
      </span>
    </p>
  </div>
  <div class="what-smile-title wow fadeIn">
    <span class="square-icon"></span>
    <span class="what-smile-text">
      スマイル福祉共済会 加入方法
    </span>
  </div>
  <div class="what-smile-contents what-smile-contents-3th wow fadeIn">
    <p>
      ヨコハマタイヤのご担当者に加入の意思をお伝えいただいたうえで、お問い合わせフォームにご入力いただくか、株式会社アクティ保険部までご連絡ください。詳細は、以下の手順よりご確認ください。
    </p>
    <a href="<?php echo esc_url(home_url('/')); ?>join" class="what-smile-btn">加入方法/手順 <span><img
          src="<?php echo get_template_directory_uri() ?>/assets/imgs/btn-icon.png" alt=""></span></a>
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