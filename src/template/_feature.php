<section class="p-feature l-feature">
  <div class="p-feature__inner l-inner">
    <div class="p-feature__heading">
      <hgroup class="c-heading">
        <h2 class="c-heading__jp">分析サービスの特徴</h2>
        <p class="c-heading__en">feature</p>
      </hgroup>
    </div>
    <ul class="p-feature__items">
      <?php
      $features = [
        [
          'file' => 'feature_01',
          'alt' => 'イラスト：薬剤師',
          'heading' => 'ドーピング防止専門の薬剤師を中心に運営',
          'descriptions' => [
            '本サービスはドーピング防止専門の薬剤師や、ドーピング問題の研究者を中心に運営しています。原因の特定や改善方法のご提案もいたしますので、海外の分析機関にはない日本語での充実したサポートをお受けいただけます。',
            'サプリメント や化粧品に対するドーピング物質分析サービスの他にも、アンチ・ドーピング講習や、ドーピング相談窓口代行など、ドーピング防止の専門家がいる強みを生かしたサービスを展開しています。'
          ]
        ],
        [
          'file' => 'feature_02',
          'alt' => 'ADAマーク／分析結果',
          'heading' => '分析結果も公表可能！ADAマークも付与',
          'descriptions' => [
            '分析結果に関しては報告書として提出。ホームページなど外部への公開が可能です。同時に分析済みのマーク「Anti Doping Action（アンチ・ドーピング・アクション）」も発行いたします。',
            'サプリメント マークはwebサイトでのPRはもちろん、商品への印字も可能です。なお、本サービスは、ドーピング禁止物質が100%混入していないという証明を行うサービスではありません。予めご了承ください。'
          ]
        ],
        [
          'file' => 'feature_03',
          'alt' => '写真：比較計算のイメージ',
          'heading' => '第三者認証サービスと比べて安価で手軽にご利用いただけます',
          'descriptions' => [
            '本サービスは、アンチ・ドーピングを目的とした分析のみのサービスなので、第三者認証サービスと比べて安価にご利用いただけます。',
            'サプリメント 第三者認証サービスとの違いは工場の視察がないことです。該当ロットのみを分析するため、年間を通して製造ロットが少ないメーカー様や、特定のロットのみ分析したいというメーカー様にはおすすめです。'
          ]
        ],
        [
          'file' => 'feature_04',
          'alt' => '青空／手のひらに日本地図が乗った国内完結のイメージ',
          'heading' => '申し込みから分析まで国内で完結',
          'descriptions' => [
            '申し込みから分析まですべて国内で完結できます。分析機関については、検査に精通した要員による、安定した検査結果が出せる機関を指定しています。また、各分析機関に対しては、ISO/IEC17025ないしそれに準じた検査レベルであることを要求しています。',
            'サプリメント なお、本サービスは、JADA（公益財団法人日本アンチ・ドーピング機構）が設置した、サプリメント認証枠組み検証有識者会議により発行された<a href="https://www.playtruejapan.org/entry_img/s-guideline.pdf" target="_blank" rel="noopener noreferrer">「スポーツにおけるサプリメントの製品情報公開の枠組みに関するガイドライン」</a>に準じた運営体制を取っています。'
          ]
        ],
      ];

      $counter = 1; // Initialize counter
      foreach ($features as $feature) {
      ?>
      <li class="p-feature__item">
          <figure class="p-feature__image">
            <?php
            $args = [
              'sp' => false,
              'directory' => '',
              'file' => $feature['file'],
              'type' => 'jpg',
              'width' => 440,
              'height' => 270,
              'alt' => $feature['alt'],
              'lazy' => true
            ];
            include 'parts/common/picture.php';
            ?>
            <span class="p-feature__item-label">
              <span class="p-feature__item-label-text">
                step
                </span>
                <span class="p-feature__item-label-no">
                  <?php echo str_pad($counter, 2, '0', STR_PAD_LEFT); // Display counter with leading zero ?>
                </span>
            </span>
          </figure>
          <div class="p-feature__item-content">
            <h3 class="p-feature__item-heading">
              <?php echo $feature['heading']; ?>
            </h3>
            <?php foreach ($feature['descriptions'] as $description) { ?>
            <p class="p-feature__item-description">
              <?php echo $description; ?>
            </p>
            <?php } ?>
          </div>
      </li>
      <?php 
        $counter++; // Increment counter
      } ?>
    </ul>
  </div>
</section>