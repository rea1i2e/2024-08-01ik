<section class="p-problems l-problems">
  <div class="p-problems__inner l-inner">
    <h2 class="p-problems__heading">
      <span class="p-problems__heading-text1">こんな</span><em class="p-problems__em"><span>お</span><span>悩</span><span>み</span></em><br class="u-sp">ありませんか？
    </h2>
    <?php
    $problems = [
        [
            'image' => 'assets/images/problems_human_01.svg',
            'alt' => 'イラスト：お悩みを抱えた女性',
            'text' => 'ドーピング禁止物質の検査したいが<br /><em class="p-problems__items-text-em">どこに問い合わせしたらいいか<br />わからない…</em>',
            'width_sp' => '201',
            'height_sp' => '190',
            'width_pc' => '215',
            'height_pc' => '207'
        ],
        [
            'image' => 'assets/images/problems_human_02.svg',
            'alt' => 'イラスト：お悩みを抱えた女性',
            'text' => '陽性反応が出たものの<br /><em class="p-problems__items-text-em">原因が特定できずに困っている…</em>',
            'width_sp' => '201',
            'height_sp' => '190',
            'width_pc' => '206',
            'height_pc' => '190'
        ],
        [
            'image' => 'assets/images/problems_human_03.svg',
            'alt' => 'イラスト：お悩みを抱えた女性',
            'text' => '海外の分析機関による<br /><em class="p-problems__items-text-em">英語での返答がわかりにくい…</em>',
            'width_sp' => '201',
            'height_sp' => '190',
            'width_pc' => '192',
            'height_pc' => '214'
        ],
    ];
    ?>

    <ul class="p-problems__items">
      <?php foreach ($problems as $problem): ?>
        <li class="p-problems__item">
          <figure class="p-problems__item-image">
            <picture>
              <source srcset="<?= str_replace('.svg', '_sp.svg', $problem['image']) ?>" media="(max-width: 767px)" width="<?= $problem['width_sp'] ?>" height="<?= $problem['height_sp'] ?>">
              <img src="<?= $problem['image'] ?>" alt="<?= $problem['alt'] ?>" width="<?= $problem['width_pc'] ?>" height="<?= $problem['height_pc'] ?>">
            </picture>
          </figure>
          <p class="p-problems__item-text">
            <span class="p-problems__item-text-inner">
              <?= $problem['text'] ?>
            </span>
          </p>
        </li>
      <?php endforeach; ?>
    </ul>
  </div>
</section>