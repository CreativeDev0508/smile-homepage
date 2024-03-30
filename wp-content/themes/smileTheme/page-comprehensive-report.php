<?php get_header()?>
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
            <div class="accident-info">
              <p>
                <span class="accident-info-title">受傷者情報</span>
              </p>
              <div class="accident-form-group  accident-form-group-custom">
                <label for="full-name">
                  <span class="">氏名</span>
                  <span class="must">必 須</span>
                </label>
                <input type="text" id="full-name" name="full-name" required class="full-name">
              </div>
              <div class="accident-form-group">
                <label for="Birth date"><span>生年月日</span><span class="must">必 須</span></label>
                <input type="date" id="Birth date" name="Birth date" required>
              </div>
              <div class="accident-form-group">
                <label for="address"><span>住所</span><span class="must">必 須</span></label>
                <input type="text" id="address" name="address" required>
              </div>
              <div class="accident-form-group">
                <label for="phone-number"><span>電話番号</span><span class="must">必 須</span></label>
                <input type="tel" id="phone-number" name="phone-number" pattern="[0-9]{2}-[0-9]{4}-[0-9]{4}" required
                  placeholder="03-1234-5678">
              </div>
            </div>
            <div class="accident-info">
              <p>
                <span class="accident-info-title">事故情報</span>
              </p>
              <div class="accident-form-group accident-form-group-custom">
                <label for="accident-date">
                  <span class="">事故発生日時
                  </span>
                  <span class="must">必 須</span>
                </label>
                <input type="date" id="accident-date" name="accident-date" required class="full-name">
              </div>
              <div class="accident-form-group">
                <label for="accident-location"><span>事故発生場所</span><span class="must">必 須</span></label>
                <input type="text" id="accident-location" name="accident-location" required>
              </div>
              <div class="accident-form-group">
                <label for="accident-situation"><span>事故状況</span><span class="must">必 須</span></label>
                <textarea id="accident-situation" name="accident-situation" rows="4" required></textarea>
              </div>
              <div class="accident-form-group">
                <label for="injury-degree"><span>傷病程度</span><span class="must">必 須</span></label>
                <input type="text" id="injury-degree" name="injury-degree" required>
              </div>
              <div class="accident-form-group">
                <label for="injury-name"><span>受傷部位・傷病名</span><span class="must">必 須</span></label>
                <input type="text" id="injury-name" name="injury-name" required>
              </div>
              <div class="accident-form-group">
                <label for="hospital-name"><span>病院名</span><span class="must">必 須</span></label>
                <input type="text" id="hospital-name" name="hospital-name" required>
              </div>
            </div>
            <div class="member-info">
              <p>
                <span class="member-info-title">書類送付先（会社情報）</span>
              </p>

              <div class="compensation-form-group">

                <!-- Company Name -->
                <div>
                  <label for="company-name"><span>お名前</span> <span class="must">必 須</span></label>
                  <input type="text" id="company-name" name="company-name" required placeholder="浜ゴムタイヤ">
                </div>

                <!-- phone number -->
                <div>
                  <label for="phone-number"><span>電話番号</span><span class="must">必 須</span></label>
                  <input type="tel" id="phone-number" name="phone-number" pattern="[0-9]{2}-[0-9]{4}-[0-9]{4}" required
                    placeholder="03-1234-5678">
                </div>
              </div>
              <div class="compensation-form-group">

                <!-- charge name -->
                <div>
                  <label for="charge-name"><span>担当者氏名</span><span class="must">必 須</span></label>
                  <input type="text" id="charge-name" name="charge-name" required placeholder="横浜 太郎">
                </div>
              </div>

              <div class="compensation-form-group">

                <!-- Email Address -->
                <div class="width-100">
                  <label for="address"><span>住所</span><span class="must">必 須</span></label>
                  <input type="text" id="address" name="address" required placeholder="〒000-0000 神奈川県平塚市〇〇〇〇"
                    class="ml-0">
                </div>
              </div>
            </div>
            <div class="d-flex justify-center mt-30">
              <input type="submit" value="送 信">
            </div>
          </form>
        </div>
      </div>
<?php get_footer()?>