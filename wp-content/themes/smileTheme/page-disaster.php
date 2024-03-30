<?php get_header() ?>

<div class="container">
    <div class="what-smile-title">
        <span class="square-icon"></span>
        <span class="what-smile-text">
            スマイル災害見舞金
        </span>
    </div>
    <div class="what-smile-contents">
        <p>
            スマイル福祉共済会の会員の所属する施設又は店舗・事業所が、地震や火災、風水雪害などに被災し、損害を被られた場合に見舞金を支給いたします。 </p>
    </div>
    <div class="disaster-ans-que wow fadeIn">
        <div class="disaster-ans">
            <img src="<?php echo get_template_directory_uri() ?>/assets/imgs/message-box1.png" alt="">
            <P>誰がもらえるの？</P>
        </div>
        <div class="disaster-que">
            所属する施設や店舗、事業所が災害に見舞われた
            <span>スマイル福祉共済会の会員</span>
            です。
        </div>
    </div>
    <div class="disaster-ans-que wow fadeIn">
        <div class="disaster-ans">
            <img src="<?php echo get_template_directory_uri() ?>/assets/imgs/message-box2.png" class="message-box2" alt="message box">
            <P>どんな災害が対象になるの？</P>
        </div>
        <div class="disaster-que">
            店舗における<span>火災・落雷・破裂・爆発や地震、風水雪害</span>などの自然災害が対象です。
        </div>
    </div>
    <div class="disaster-ans-que wow fadeIn">
        <div class="disaster-ans">
            <img src="<?php echo get_template_directory_uri() ?>/assets/imgs/message-box2.png" class="message-box2" alt="message-box">
            <P>いつの災害から対象になるの？</P>
        </div>
        <div class="disaster-que">
            <span>2024年6月1日以降</span>に発生した損害が対象です。
        </div>
    </div>
    <div class="disaster-ans-que wow fadeIn">
        <div class="disaster-ans">
            <img src="<?php echo get_template_directory_uri() ?>/assets/imgs/message-box2.png" alt="" class="message-box2">
            <P>災害見舞金の原資はどこから？</P>
        </div>
        <div class="disaster-que">
            これまでの<span>会費やグループ配当金として蓄積されてきた剰余金</span>を活用します。
        </div>
    </div>
    <div class="disaster-ans-que wow fadeIn">
        <div class="disaster-ans">
            <img src="<?php echo get_template_directory_uri() ?>/assets/imgs/message-box3.png" alt="" class="message-box3">
            <P>災害見舞金額はいくら？</P>
        </div>
        <div class="disaster-que">
            １災害ごとに１会員１回の請求として積算し、
            <span>下記一覧表の支払い認定基準に基づき</span><br>
            災害見舞金額を決定します。
            <p class="my-1">対象事案 ： 店舗における火災・落雷・破裂・爆発、地震・風水雪等による損害</p>
            <div class="disaster-que-table">
                <table>
                    <thead>
                        <tr>
                            <th>損害の設定区分</th>
                            <th>損害の認定基準</th>
                            <th>災害見舞金額</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>全焼/全壊</td>
                            <td>70％以上の損害</td>
                            <td>100,000円</td>
                        </tr>
                        <tr>
                            <td>半焼/半壊</td>
                            <td>30％以上70％未満の損害</td>
                            <td>50,000円</td>
                        </tr>
                        <tr>
                            <td>一部焼失/一部損害</td>
                            <td>10％以上30％未満の損害</td>
                            <td>20,000円</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <p class="table-bottom-text">※災害見舞金額は原資の関係上変更することがあります。</p>
        </div>
    </div>
    <div class="disaster-ans-que wow fadeIn">
        <div class="disaster-ans">
            <img src="<?php echo get_template_directory_uri() ?>/assets/imgs/message-box3.png" alt="" class="message-box4">
            <P>災害見舞金の申請方法は？</P>
        </div>
        <div class="disaster-que">
            災害見舞金の支給を受ける場合は、<span>災害見舞金請求申請書</span>に必要事項を記入し、
            担当販売会社にお送りください。
        </div>
    </div>
    <div class="download-group  wow fadeIn">
        <a href="<?php echo get_template_directory_uri() ?>/assets/files/test.xlsx" download="test file">
            <div class="download-group-component">
                <img src="<?php echo get_template_directory_uri() ?>/assets/imgs/down-icon.png" alt="down-icon">
                <p>災害見舞金請求申請書ダウンロード</p>
            </div>
        </a>
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
                <img src="assets/imgs/message-icon.png" alt="message-icon">
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
            <img src="assets/imgs/message-icon.png" alt="message-icon">
        </div>
    </div>
</div>
<?php get_footer() ?>