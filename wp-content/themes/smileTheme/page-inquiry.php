<?php get_header() ?>

<div class="container">
    <div class="what-smile-title wow fadeIn">
        <span class="square-icon"></span>
        <span class="what-smile-text">
            お問い合わせ
        </span>
    </div>
    <div class="what-smile-contents wow fadeIn">
        <p>
            スマイル福祉共済会に関するお問い合わせは、業務委託会社の株式会社アクティ 保険部までお気軽にご連絡ください。
        </p>
    </div>
    <div class="what-smile-title mt-20 wow fadeIn">
        <span class="what-smile-text">
            お電話でのお問い合わせはコチラ
        </span>
    </div>
    <div class="inquiry-phone wow fadeIn">
        <div class="inquiry-phone-title">
            <p>株式会社アクティ 保険部</p>
            <p>受付時間：平日10：００〜15:00</p>
        </div>
        <div class="inquiry-phone-number">
            <img src="<?php echo get_template_directory_uri() ?>/assets/imgs/phone-icon.png" alt="phone icon">
            <p>0463-63-0531</p>
        </div>
    </div>
    <div class="what-smile-title  mt-20 wow fadeIn">
        <span class="what-smile-text">
            フォームでのお問い合わせはコチラ
        </span>
    </div>
    <div class="inquiry-form wow fadeIn">
        <form action="process_form.php" method="post">
            <label for="title">以下のフォームに必要事項をご記入の上、「送信」を押してください。
            </label>
            <!-- Company Name -->
            <div>
                <label for="company-name">会社名 <span>必 須</span></label>
                <input type="text" id="company-name" name="companyName" required placeholder="浜ゴムタイヤ">
            </div>

            <!-- Phone Number -->
            <div>
                <label for="phone">電話番号 <span>必 須</span></label>
                <input type="tel" id="phone" name="phoneNumber" pattern="[0-9]{2}-[0-9]{4}-[0-9]{4}" required
                    placeholder="03-1234-5678">
            </div>

            <!-- Sales Representative -->
            <div>
                <label for="sales-rep">担当販売会社 <span>必 須</span></label>
                <input type="text" id="salesRep" name="salesRep" required placeholder="株式会社ヨコハマタイヤジャパン">
            </div>

            <!-- Name -->
            <div>
                <label for="name">お名前 <span>必 須</span></label>
                <input type="text" id="name" name="name" required placeholder="横浜　太郎">
            </div>

            <!-- Email Address -->
            <div>
                <label for="email">メールアドレス <span>必 須</span></label>
                <input type="email" id="email" name="email" required placeholder="taro_yokohama@**********.co.jp">
            </div>

            <!-- Inquiry/Question -->
            <div>
                <label for="inquiry">お問合せ・ご質問内容 <span>必 須</span></label>
                <textarea id="inquiry" name="inquiry" rows="10" required></textarea>
            </div>

            <!-- Submit Button -->
            <div>
                <button type="submit">送 信</button>
            </div>
        </form>
    </div>
    <div class="faq-group wow fadeIn">
        <div class="faq-title">
            <h2>FAQ</h2>
            <p>よくある質問</p>
        </div>
        <div class="faq-container">
            <div class="faq">
                <h3 class="faq-title">ああああああああああああああああああああああああああああああ？</h3>

                <p class="faq-text">
                    ああああああああああああああああああああああああああああああ。
                </p>
                <button class="faq-toggle">
                    <i class="fa fa-plus"></i>
                    <i class="fa fa-times"></i>
                </button>
            </div>
            <div class="faq">
                <h3 class="faq-title">ああああああああああああああああああああああああああああああ？</h3>

                <p class="faq-text">
                    ああああああああああああああああああああああああああああああ。
                </p>
                <button class="faq-toggle">
                    <i class="fa fa-plus"></i>
                    <i class="fa fa-times"></i>
                </button>
            </div>
            <div class="faq">
                <h3 class="faq-title">ああああああああああああああああああああああああああああああ？</h3>

                <p class="faq-text">
                    ああああああああああああああああああああああああああああああ。
                </p>
                <button class="faq-toggle">
                    <i class="fa fa-plus"></i>
                    <i class="fa fa-times"></i>
                </button>
            </div>
            <div class="faq">
                <h3 class="faq-title">ああああああああああああああああああああああああああああああ？</h3>

                <p class="faq-text">
                    ああああああああああああああああああああああああああああああ。
                </p>
                <button class="faq-toggle">
                    <i class="fa fa-plus"></i>
                    <i class="fa fa-times"></i>
                </button>
            </div>
            <div class="faq">
                <h3 class="faq-title">ああああああああああああああああああああああああああああああ？</h3>

                <p class="faq-text">
                    ああああああああああああああああああああああああああああああ。
                </p>
                <button class="faq-toggle">
                    <i class="fa fa-plus"></i>
                    <i class="fa fa-times"></i>
                </button>
            </div>
            <div class="faq">
                <h3 class="faq-title">ああああああああああああああああああああああああああああああ？</h3>

                <p class="faq-text">
                    ああああああああああああああああああああああああああああああ。
                </p>
                <button class="faq-toggle">
                    <i class="fa fa-plus"></i>
                    <i class="fa fa-times"></i>
                </button>
            </div>
            <div class="faq">
                <h3 class="faq-title">ああああああああああああああああああああああああああああああ？</h3>

                <p class="faq-text">
                    ああああああああああああああああああああああああああああああ。
                </p>
                <button class="faq-toggle">
                    <i class="fa fa-plus"></i>
                    <i class="fa fa-times"></i>
                </button>
            </div>
            <div class="faq">
                <h3 class="faq-title">ああああああああああああああああああああああああああああああ？</h3>

                <p class="faq-text">
                    ああああああああああああああああああああああああああああああ。
                </p>
                <button class="faq-toggle">
                    <i class="fa fa-plus"></i>
                    <i class="fa fa-times"></i>
                </button>
            </div>
            <div class="faq">
                <h3 class="faq-title">ああああああああああああああああああああああああああああああ？</h3>

                <p class="faq-text">
                    ああああああああああああああああああああああああああああああ。
                </p>
                <button class="faq-toggle">
                    <i class="fa fa-plus"></i>
                    <i class="fa fa-times"></i>
                </button>
            </div>
            <div class="faq">
                <h3 class="faq-title">ああああああああああああああああああああああああああああああ？</h3>

                <p class="faq-text">
                    ああああああああああああああああああああああああああああああ。
                </p>
                <button class="faq-toggle">
                    <i class="fa fa-plus"></i>
                    <i class="fa fa-times"></i>
                </button>
            </div>
        </div>
    </div>
</div>

<?php get_footer() ?>