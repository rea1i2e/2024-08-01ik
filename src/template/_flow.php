<section class="p-flow l-flow" id="flow-section">
  <div class="p-flow__inner l-inner">
    <div class="p-flow__heading">
      <hgroup class="c-heading c-heading--white">
        <h2 class="c-heading__jp">分析結果<br class="u-sp">ご報告までの流れ</h2>
        <p class="c-heading__en">flow</p>
      </hgroup>
    </div>
    <ol class="p-flow__items">
      <?php
      $steps = [
        [
          'file' => 'flow_01',
          'alt' => 'イラスト：契約の締結',
          'description' => '契約の締結'
        ],
        [
          'file' => 'flow_02',
          'alt' => 'イラスト：サンプルと書類のご提出・分析開始',
          'description' => 'サンプルと書類の<br class="u-pc">ご提出・分析開始'
        ],
        [
          'file' => 'flow_03',
          'alt' => 'イラスト：分析結果のご報告',
          'description' => '分析結果のご報告'
        ],
      ];

      foreach ($steps as $index => $step) :
        $stepNumber = str_pad($index + 1, 2, '0', STR_PAD_LEFT);
      ?>
        <li class="p-flow__item">
          <p class="p-flow__item-label">
            <span class="p-flow__item-label-text">step</span>
            <span class="p-flow__item-number"><?php echo $stepNumber; ?></span>
          </p>
          <div class="p-flow__item-content">
            <figure class="p-flow__item-image">
              <img src="assets/images/<?php echo $step['file']; ?>.svg" alt="<?php echo $step['alt']; ?>" width="100" height="100">
            </figure>
            <p class="p-flow__item-description">
              <?php echo $step['description']; ?>
            </p>
          </div>
        </li>
      <?php endforeach; ?>
    </ol>
    <p class="p-flow__description">
      ※お急ぎの方、特定の物質を分析したい方等、<br class="u-sp">様々なオーダーに応じます。<br>
      詳細などについてはお気軽にお問い合わせください。<br />
      また分析にかかる日数についても<br class="u-sp">内容によって変わりますので、一度お問い合わせください。
    </p>
  </div>
</section>