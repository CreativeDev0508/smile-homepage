<?php get_header(); ?>
<div class="container">
    <div class="what-smile-title">
        <span class="square-icon"></span>
        <span class="what-smile-text">
            賠償責任保険　事故報告フォーム
        </span>
    </div>
    <div class="what-smile-contents">
        <p>
            以下の項目を入力し、最後に「送信」ボタンを押してください。
        </p>
    </div>
    <div class="compensation-form">
        <form action="/submit-form" method="post">
            <div class="member-info">
                <p>
                    <span class="member-info-title">保険加入者情報</span>
                    <span class="font-size-18">※「賠償責任保険・動産総合保険・受託自動車保険被保険者カード」をご確認ください。</span>
                </p>

                <div class="compensation-form-group">

                    <!-- Company Name -->
                    <div>
                        <label for="company-name"><span>加入会社名
                            </span> <span class="must">必 須</span></label>
                        <input type="text" id="company-name" name="company-name" required placeholder="浜ゴムタイヤ">
                    </div>

                    <!-- Company Code -->
                    <div>
                        <label for="company-code"><span>会社コード</span><span class="must">必 須</span></label>
                        <input type="text" id="company-code" name="company-code" required placeholder="00000000">
                    </div>
                </div>
                <div class="compensation-form-group">

                    <!-- store Name -->
                    <div>
                        <label for="store-name"><span>加入店舗名</span><span class="must">必 須</span></label>
                        <input type="text" id="store-name" name="store-name" required placeholder="平塚店">
                    </div>

                    <!-- charge name -->
                    <div>
                        <label for="charge-name"><span>担当者氏名</span><span class="must">必 須</span></label>
                        <input type="text" id="charge-name" name="charge-name" required placeholder="横浜 太郎">
                    </div>
                </div>

                <div class="compensation-form-group">

                    <!-- phone number -->
                    <div>
                        <label for="phone-number"><span>電話番号</span><span class="must">必 須</span></label>
                        <input type="tel" id="phone-number" name="phone-number" pattern="[0-9]{2}-[0-9]{4}-[0-9]{4}"
                            required placeholder="03-1234-5678">
                    </div>

                    <!-- FAX number -->
                    <div>
                        <label for="fax-number"><span>FAX番号</span><span class="must">必 須</span></label>
                        <input type="tel" id="fax-number" name="fax-number" required
                            pattern="[0-9]{2}-[0-9]{4}-[0-9]{4}" placeholder="03-1234-5678">
                    </div>
                </div>
                <div class="compensation-form-group">

                    <!-- Email Address -->
                    <div class="width-100">
                        <label for="email"><span>メールアドレス</span></label>
                        <input type="email" id="email" name="email" required
                            placeholder="taro_yokohama@**********.co.jp">
                    </div>
                </div>
            </div>

            <div class="member-info">
                <p>
                    <span class="accident-info-title">事故情報</span>
                    <span class="mr-40"><input type="checkbox" name="" id="">人身事故</span>
                    <span><input type="checkbox" name="" id="">物損事故</span>
                </p>

                <div class="compensation-form-group">

                    <div>
                        <label for="accident-date"><span>事故発生日
                            </span> <span class="must">必 須</span></label>
                        <input type="date" id="accident-date" name="accident-date" required>
                    </div>

                </div>
                <div class="compensation-form-group">

                    <div class="width-100">
                        <label for="accident-location"><span>事故発生場所</span><span class="must">必 須</span></label>
                        <input type="text" id="accident-location" name="accident-location" required
                            class="compensation-custom">
                    </div>
                </div>
                <div class="compensation-form-group">

                    <div class="width-100">
                        <label for="accident-situation"><span>事故状況
                            </span><span class="must">必 須</span></label>
                        <textarea type="text" id="accident-situation" name="accident-situation" rows="4" required
                            class="compensation-custom">
                    </textarea>
                    </div>
                </div>
                <div class="compensation-form-group">
                    <div>
                        <label for="company-name"><span>届出警察 (署/交番)
                            </span> <span class="must">必 須</span></label>
                        <input type="text" id="company-name" name="company-name" required placeholder="浜ゴムタイヤ"
                            class="width-27">
                    </div>

                    <div>
                        <label for="company-code"><span class="position-rel">担当係官
                            </span><span class="must">必 須</span></label>
                        <input type="text" id="company-code" name="company-code" required placeholder="00000000"
                            class="width-27">
                    </div>
                </div>
                <div class="compensation-form-group">

                    <!-- Email Address -->
                    <div class="width-100">
                        <label for="email"><span>メールアドレス</span></label>
                        <input type="email" id="email" name="email" required
                            placeholder="taro_yokohama@**********.co.jp" class="compensation-custom">
                    </div>
                </div>
            </div>
            <div class="member-info">
                <p>
                    <span class="member-info-title">相 手 方 情 報
                    </span>
                </p>

                <div class="compensation-form-group">

                    <!-- car Name -->
                    <div>
                        <label for="car-name"><span>車名</span> <span class="must">必 須</span></label>
                        <input type="text" id="car-name" name="car-name" required placeholder="トヨタ　プリウス">
                    </div>

                    <!-- Registration number -->
                    <div>
                        <label for="registration-number"><span>登録番号</span><span class="must">必 須</span></label>
                        <input type="text" id="registration-number" name="registration-number" required
                            placeholder="00000000">
                    </div>
                </div>
                <div class="compensation-form-group">

                    <!-- user -->
                    <div>
                        <label for="user"><span>氏名
                            </span> <span class="must">必 須</span></label>
                        <input type="text" id="user" name="user" required placeholder="平塚店">
                    </div>
                    <!-- phone number -->
                    <div>
                        <label for="phone-number"><span>電話番号</span><span class="must">必 須</span></label>
                        <input type="tel" id="phone-number" name="phone-number" pattern="[0-9]{2}-[0-9]{4}-[0-9]{4}"
                            required placeholder="03-1234-5678">
                    </div>
                </div>

                <div class="compensation-form-group">
                    <!-- Address -->
                    <div class="width-100">
                        <label for="Address">
                            <span>住所</span><span class="must">必 須</span></label>
                        <input type="text" id="Address" name="Address" required placeholder="〒000-0000 神奈川県平塚市〇〇〇〇"
                            class="ml-0 compensation-custom">
                    </div>
                </div>
                <div class="compensation-form-group">
                    <div>
                        <label for="factory-name"><span>修理工場名
                            </span> </label>
                        <input type="text" id="factory-name" name="factory-name" required placeholder="トヨタ　プリウス">
                    </div>

                    <div>
                        <label for="factory-number"><span>修理工場電話番号
                        </label>
                        <input type="text" id="factory-number" name="factory-number" required placeholder="00000000">
                    </div>
                </div>
                <div class="compensation-form-group">
                    <div>
                        <label for="factory-name"><span>修理工場担当者
                            </span> </label>
                        <input type="text" id="factory-name" name="factory-name" required>
                    </div>

                    <div>
                        <label for="factory-number"><span>入庫（予定）日
                        </label>
                        <input type="date" id="factory-number" name="factory-number" required>
                    </div>
                </div>
                <div class="compensation-form-group">
                    <div>
                        <label for="factory-name"><span>病院名
                            </span> </label>
                        <input type="text" id="factory-name" name="factory-name" required>
                    </div>

                    <div>
                        <label for="factory-number"><span>病院電話番号
                        </label>
                        <input type="text" id="factory-number" name="factory-number" required>
                    </div>
                </div>
                <div class="ml-10">
                    <label for="">診断</label>
                    <span class="ml-60">入院</span>
                    <input type="text" class="width-8 height-5">
                    <span>日見込み</span>
                    <span class="ml-60">通院</span>
                    <input type="text" class="width-8 height-5">
                    <span>日見込み</span>
                </div>
                <div class="compensation-form-group">

                </div>
            </div>


            <div class="d-flex justify-center mt-30">
                <input type="submit" value="送 信">
            </div>
        </form>
    </div>
</div>
<?php get_footer(); ?>