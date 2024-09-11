  <section class="p-contact l-contact" id="contact-section">
    <div class="p-contact__inner l-inner">
      <div class="p-contact__heading">
        <hgroup class="c-heading">
          <h2 class="c-heading__jp">お問い合わせ<wbr>フォーム</h2>
          <p class="c-heading__en">contact</p>
        </hgroup>
      </div>
      <div class="p-contact__container">
        <form class="p-form" method="POST" action="mail.php" id="registration-form">
          <input type="hidden" name="utm_source" value="<?php echo htmlspecialchars($_GET['utm_source']) ?>">
          <input type="hidden" name="utm_medium" value="<?php echo htmlspecialchars($_GET['utm_medium']) ?>">
          <input type="hidden" name="utm_term" value="<?php echo htmlspecialchars($_GET['utm_term']) ?>">
          <input type="hidden" name="utm_content" value="<?php echo htmlspecialchars($_GET['utm_content']) ?>">
          <input type="hidden" name="utm_campaign" value="<?php echo htmlspecialchars($_GET['utm_campaign']) ?>">
          <dl class="p-form__items">
            <div class="p-form__item">
              <dt class="p-form__dt"><label for="name">お名前<span class="p-form__item-required">(必須)</span></label></dt>
              <dd class="p-form__dd"><input id="name" class="text-box" type="text" name="applicant_name" placeholder="例）鈴木 太郎" value="<?php echo $_POST['applicant_name'] ?>"></dd>
            </div>
            <div class="p-form__item">
              <dt class="p-form__dt"><label for="furigana">ふりがな<span class="p-form__item-required">(必須)</span></label></dt>
              <dd class="p-form__dd"><input id="furigana" class="text-box" type="text" name="furigana" placeholder="例）すずき たろう" value="<?php echo $_POST['furigana'] ?>"></dd>
            </div>
            <div class="p-form__item">
              <dt class="p-form__dt"><label for="tel">電話番号</label></dt>
              <dd class="p-form__dd"><input id="tel" class="text-box" type="tel" name="telephone_number" placeholder="例）08012345678" value="<?php echo $_POST['telephone_number'] ?>"></dd>
            </div>
            <div class="p-form__item">
              <dt class="p-form__dt"><label for="email">メールアドレス<span class="p-form__item-required">(必須)</span></label></dt>
              <dd class="p-form__dd"><input id="email" class="text-box" type="email" name="email_address" placeholder="例）example@xxx.ne.jp" value="<?php echo $_POST['email_address'] ?>"></dd>
            </div>
            <div class="p-form__item">
              <dt class="p-form__dt"><label for="corporate-name">会社名<span class="p-form__item-required">(必須)</span></label></dt>
              <dd class="p-form__dd"><input id="corporate-name" class="text-box" type="text" name="corporate_name" placeholder="例）株式会社example" value="<?php echo $_POST['corporate_name'] ?>"></dd>
            </div>
            <div class="p-form__item">
              <dt class="p-form__dt"><label for="consideration">検討内容<span class="p-form__item-required">(必須)</span></label></dt>
              <dd class="p-form__dd">
                <div class="select-box-wrapper">
                  <select id="consideration" class="select-box" name="consideration">
                    <option value="">選択してください</option>
                    <option value="時期は未定だがサービスの詳細を知りたい" <?= $_POST["consideration"] == "時期は未定だがサービスの詳細を知りたい" ? "selected" : ""; ?>>時期は未定だがサービスの詳細を知りたい</option>
                    <option value="分析サービスの導入を考えている" <?= $_POST["consideration"] == "分析サービスの導入を考えている" ? "selected" : ""; ?>>分析サービスの導入を考えている</option>
                    <option value="その他" <?= $_POST["consideration"] == "その他" ? "selected" : ""; ?>>その他</option>
                  </select>
                </div>
              </dd>
            </div>
            <div class="p-form__item">
              <dt class="p-form__dt"><label for="message">お問い合わせ内容</label></dt>
              <dd class="p-form__dd"><textarea id="message" class="text-area" rows="5" name="message" placeholder=""><?= $_POST["message"] ?></textarea></dd>
            </div>
          </dl>
          <div class="p-form__privacy">
            <p class="p-form__privacy-description">
              お問い合わせの際は、必ず当社の「プライバシーポリシー」をご一読いただき、同意のうえご利用ください。
            </p>
            <div class="p-form__privacy-container">
              <p class="p-form__privacy-text">
                （仮）プライバシーポリシー
                株式会社〇〇〇〇（以下「当社」といいます）は、お客様へ信頼のサービスを提供していくため、個人情報の保護に関する法律（以下「個人情報保護法」といいます）、その他の関連法令（ガイドラインを含みます）を遵守し、以下の方針に基づき個人情報の保護に努めます。<br />
                本方針は、当社で取り扱う個人情報について適用されるものとします。<br />
                株式会社〇〇〇〇（以下「当社」といいます）は、お客様へ信頼のサービスを提供していくため、個人情報の保護に関する法律（以下「個人情報保護法」といいます）、その他の関連法令（ガイドラインを含みます）を遵守し、以下の方針に基づき個人情報の保護に努めます。<br />
                本方針は、当社で取り扱う個人情報について適用されるものとします。
              </p>
            </div>
          </div>
          <p class="p-form__acceptance">
            <input id="privacy-policy" type="checkbox" name="privacy_policy">
            <label class="label--input require-items" for="privacy-policy">個人情報保護方針に同意する</label>
          </p>
          <button type="button" class="submit-button cta mt-l" id="submit-button">問い合わせる</button>
        </form>
      </div>
    </div>
  </section>