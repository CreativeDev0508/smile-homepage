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
                  <label for="store-name"><span>証券番号</span><span class="must">必 須</span></label>
                  <input type="text" id="store-name" name="store-name" required placeholder="平塚店">
                </div>

                <!-- charge name -->
                <div>
                  <label for="charge-name"><span>被保険者氏名</span><span class="must">必 須</span></label>
                  <input type="text" id="charge-name" name="charge-name" required placeholder="横浜 太郎">
                </div>
              </div>

              <div class="compensation-form-group">

                <!-- phone number -->
                <div>
                  <label for="phone-number"><span>電話番号</span><span class="must">必 須</span></label>
                  <input type="tel" id="phone-number" name="phone-number" pattern="[0-9]{2}-[0-9]{4}-[0-9]{4}" required
                    placeholder="03-1234-5678">
                </div>

                <!-- FAX number -->
                <div>
                  <label for="fax-number"><span>FAX番号</span><span class="must">必 須</span></label>
                  <input type="tel" id="fax-number" name="fax-number" required pattern="[0-9]{2}-[0-9]{4}-[0-9]{4}"
                    placeholder="03-1234-5678">
                </div>
              </div>
              <div class="compensation-form-group">
              </div>
            </div>
            <div class="accident-info">
              <p>
                <span class="accident-info-title">事故情報</span>
              </p>
              <div class="accident-form-group">
                <label for="incidentDate"><span>事故発生日</span><span class="must">必 須</span></label>
                <input type="date" id="incidentDate" name="incidentDate" required>
              </div>
              <div class="accident-form-group">
                <label for="incidentLocation"><span>事故発生場所</span><span class="must">必 須</span></label>
                <input type="text" id="incidentLocation" name="incidentLocation" required>
              </div>
              <div class="accident-form-group">
                <label for="incidentDescription"><span>作業経緯と発生原因</span><span class="must">必 須</span></label>
                <textarea id="incidentDescription" name="incidentDescription" rows="4" required></textarea>
              </div>
              <div class="accident-form-group">
                <label for="police"><span>届出警察署・消防署
                  </span><span class="must">必 須</span></label>
                <input type="text" id="police" name="police" required>
              </div>
            </div>
            <div class="accident-form-group  accident-form-group-custom">
              <label for="full-name">
                <span class="">受理番号</span>
                <span class="must">必 須</span>
              </label>
              <input type="text" id="full-name" name="full-name" required class="full-name">
            </div>
            <div class="damaged-info">
              <p class="damaged-info-title member-info-title">被害品情報</p>
              <table>
                <thead>
                  <tr>
                    <th>製品名</th>
                    <th>商品番号</th>
                    <th>サイズ</th>
                    <th>仕入れ金額</th>
                    <th>数量</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>
                      <input type="text">
                    </td>
                    <td>
                      <input type="text">
                    </td>
                    <td>
                      <input type="text">
                    </td>
                    <td>
                      <input type="text">
                    </td>
                    <td>
                      <input type="text">
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <input type="text">
                    </td>
                    <td>
                      <input type="text">
                    </td>
                    <td>
                      <input type="text">
                    </td>
                    <td>
                      <input type="text">
                    </td>
                    <td>
                      <input type="text">
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <input type="text">
                    </td>
                    <td>
                      <input type="text">
                    </td>
                    <td>
                      <input type="text">
                    </td>
                    <td>
                      <input type="text">
                    </td>
                    <td>
                      <input type="text">
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <input type="text">
                    </td>
                    <td>
                      <input type="text">
                    </td>
                    <td>
                      <input type="text">
                    </td>
                    <td>
                      <input type="text">
                    </td>
                    <td>
                      <input type="text">
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <input type="text">
                    </td>
                    <td>
                      <input type="text">
                    </td>
                    <td>
                      <input type="text">
                    </td>
                    <td>
                      <input type="text">
                    </td>
                    <td>
                      <input type="text">
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <input type="text">
                    </td>
                    <td>
                      <input type="text">
                    </td>
                    <td>
                      <input type="text">
                    </td>
                    <td>
                      <input type="text">
                    </td>
                    <td>
                      <input type="text">
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <input type="text">
                    </td>
                    <td>
                      <input type="text">
                    </td>
                    <td>
                      <input type="text">
                    </td>
                    <td>
                      <input type="text">
                    </td>
                    <td>
                      <input type="text">
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <input type="text">
                    </td>
                    <td>
                      <input type="text">
                    </td>
                    <td>
                      <input type="text">
                    </td>
                    <td>
                      <input type="text">
                    </td>
                    <td>
                      <input type="text">
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <input type="text">
                    </td>
                    <td>
                      <input type="text">
                    </td>
                    <td>
                      <input type="text">
                    </td>
                    <td>
                      <input type="text">
                    </td>
                    <td>
                      <input type="text">
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <input type="text">
                    </td>
                    <td>
                      <input type="text">
                    </td>
                    <td>
                      <input type="text">
                    </td>
                    <td>
                      <input type="text">
                    </td>
                    <td>
                      <input type="text">
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <input type="text">
                    </td>
                    <td>
                      <input type="text">
                    </td>
                    <td>
                      <input type="text">
                    </td>
                    <td>
                      <input type="text">
                    </td>
                    <td>
                      <input type="text">
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <input type="text">
                    </td>
                    <td>
                      <input type="text">
                    </td>
                    <td>
                      <input type="text">
                    </td>
                    <td>
                      <input type="text">
                    </td>
                    <td>
                      <input type="text">
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
            <div class="d-flex justify-center mt-30">
              <input type="submit" value="送 信">
            </div>
          </form>
        </div>
      </div>
<?php get_footer()?>