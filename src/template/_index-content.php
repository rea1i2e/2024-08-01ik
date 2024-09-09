<main>
  <section id="contact-section" class="contact-section">
    <h2 class="contact-section--title container">お問い合わせフォーム</h2>
    <form class="form mt-l" method="POST" action="mail.php" id="registration-form">
      <input type="hidden" name="utm_source"
        value="<?php echo htmlspecialchars($_GET['utm_source']) ?>">
      <input type="hidden" name="utm_medium"
        value="<?php echo htmlspecialchars($_GET['utm_medium']) ?>">
      <input type="hidden" name="utm_term"
        value="<?php echo htmlspecialchars($_GET['utm_term']) ?>">
      <input type="hidden" name="utm_content"
        value="<?php echo htmlspecialchars($_GET['utm_content']) ?>">
      <input type="hidden" name="utm_campaign"
        value="<?php echo htmlspecialchars($_GET['utm_campaign']) ?>">

      <label class="label--input require-item" for="name">お名前</label>
      <input id="name" class="text-box" type="text" name="applicant_name" placeholder="例）鈴木 太郎"
        value="<?php echo $_POST['applicant_name'] ?>">

      <label class="label--input require-item" for="furigana">ふりがな</label>
      <input id="furigana" class="text-box" type="text" name="furigana" placeholder="例）すずき たろう"
        value="<?php echo $_POST['furigana'] ?>">

      <label class="label--input" for="tel">電話番号</label>
      <input id="tel" class="text-box" type="tel" name="telephone_number" placeholder="例）08012345678"
        value="<?php echo $_POST['telephone_number'] ?>">

      <label class="label--input require-item" for="email">メールアドレス</label>
      <input id="email" class="text-box" type="email" name="email_address" placeholder="例）example@xxx.ne.jp"
        value="<?php echo $_POST['email_address'] ?>">

      <label class="label--input require-item" for="corporate-name">会社名</label>
      <input id="corporate-name" class="text-box" type="text" name="corporate_name" placeholder="例）株式会社example"
        value="<?php echo $_POST['email_address'] ?>">

      <label class="label--input require-item" for="consideration">検討内容</label>
      <div class="select-box-wrapper">
        <select id="consideration" class="select-box" name="consideration">
          <option value="">選択してください</option>
          <option value="時期は未定だがサービスの詳細を知りたい" <?= $_POST["consideration"] == "時期は未定だがサービスの詳細を知りたい" ? "selected" : ""; ?>>時期は未定だがサービスの詳細を知りたい</option>
          <option value="分析サービスの導入を考えている" <?= $_POST["consideration"] == "分析サービスの導入を考えている" ? "selected" : ""; ?>>分析サービスの導入を考えている</option>
          <option value="その他" <?= $_POST["consideration"] == "その他" ? "selected" : ""; ?>>その他</option>
        </select>
      </div>

      <label class="label--input" for="message">お問い合わせ内容</label>
      <textarea id="message" class="text-area" rows="5" name="message"
        placeholder=""><?= $_POST["message"] ?></textarea>
        <div class="p-form__acceptance">
          <input id="privacy-policy" type="checkbox" name="privacy_policy">
          <label class="label--input require-item" for="privacy-policy">個人情報保護方針に同意する</label>
        </div>
      <button type="button" class="submit-button cta mt-l" id="submit-button">問い合わせる</button>
    </form>
  </section>
</main>