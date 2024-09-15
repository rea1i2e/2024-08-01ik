<section class="p-service l-service">
  <div class="p-service__bg">
    <div class="p-service__inner1 l-inner">
      <hgroup class="p-service__hgourp">
        <p class="p-service__copy1">
          <img src="assets/images/service_copy1.svg" alt="サプリメントや化粧品向けの" width="564" height="104">
        </p>
        <h2 class="p-service__heading">
          ドーピング禁止物質<wbr>分析サービス
        </h2>
        <p class="p-service__copy2">
          申し込みから分析まで国内完結！
        </p>
      </hgroup>
      <div class="p-service__content1">
        <div class="p-service__content1-inner">
          <p class="p-service__content1-text">
            <em class="p-service__content1-text-em">ドーピング防止専門の<br class="u-sp" /><span>薬</span><span>剤</span><span>師</span></em>が<br class="u-pc"/>日本語で<br class="u-sp"/>アフターフォロー！
          </p>
          <p class="p-service__description">
            原因の特定はもちろん、<br class="u-sp" />改善案までコンサルティングいたします！
          </p>
        </div>
      </div>
    </div>
  </div>
  <div class="p-service__item2">
    <div class="p-service__inner2 l-inner">
      <div class="p-service__copy3">
        <p class="c-copy">
          <picture>
            <source srcset="assets/images/copy_sp.svg" width="888" height="213" media="(max-width: 767px)">
            <img src="assets/images/copy.svg" alt="サプリメント・飲料水・化粧品のアンチ・ドーピング対策なら実績多数のイルホープにお任せ下さい！" width="564" height="104">
          </picture>
        </p>
      </div>
      <div class="p-service__content2">
        <figure class="p-service__content2-logo">
          <?php
          $args = [
            'sp' => false,
            'directory' => '',
            'file' => 'service_ada',
            'type' => 'jpg',
            'width' => 250,
            'height' => 225,
            'alt' => 'Anti Doping Action',
            'lazy' => true
          ];
          include 'parts/common/picture.php';
          ?>
        </figure>
        <div class="p-service__content2-wrapper">
          <p class="p-service__content2-description">
            イルホープでは、サプリメントや化粧品等に混入する可能性の高いドーピング禁止物質の分析サービスを行っています。分析項目については、WADA（世界アンチ・ドーピング機構）の規定するドーピング禁止リストなどをもとに、サプリメント等に混入する可能性の高いドーピング禁止物質をドーピングの専門家とともに選定しています。分析結果は外部への公開が可能な「分析結果報告書」として提出いたします。
          </p>
          <div class="p-service__content2-buttons">
            <a href="" class="p-service__content2-button c-button">
              これまでの分析結果一覧
            </a>
            <a href="" class="p-service__content2-button c-button c-button--2">
              分析手法と分析精度
            </a>
          </div>
        </div>
        <figure class="p-service__content2-illust">
          <img src="assets/images/service_illust.svg" alt="イラスト：薬剤師" width="220" height="198">
        </figure>
      </div>
    </div>
  </div>
</section>