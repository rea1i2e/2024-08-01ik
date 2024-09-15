<?php
$faqs = [
    [
        'question' => '禁止表国際基準を見て、ドーピング禁止物質が含まれていないと判断しているのですが、何か問題はありますか。',
        'answer' => [
            'WADAの規定するドーピング禁止リスト（禁止表国際基準）に記載されている物質は約300品目(2024年現在）あります。 そのリストは公開されているものの、曖昧な表現などがあるため、そのまま使用することはできません。<br />曖昧な表現がある以上、「禁止物質は含まれていない」という表現はできないと判断できるため、「禁止表国際基準を見る限りはドーピング禁止物質が含まれていないから大丈夫」と判断するとトラブルにつながる可能性があります。',
        ]
    ],
    [
        'question' => '本分析サービスと、いわゆる第三者認証サービスとの違いは何ですか？',
        'answer' => [
            '本サービスには第三者認証サービスで実施されている工場の査察と、定期的な分析はありません。あくまでも指定ロットに対する分析のみのサービスとなり、100%ドーピングフリーであることを証明するサービスではありません。分析リストについては、世界アンチ・ドーピング機構による陽性報告をもとに、各セクションごとの違反物質の上位50％を中心として分析をしています。詳細については直接お問い合わせください。<br />なお分析後、陰性であることが証明された該当のLOTに対しては、公開可能な分析結果報告書とAnti Doping Action(アンチ・ドーピング・アクション）のマークを付与しております。',
        ]
    ],
    [
        'question' => '分析費用はいくらですか？',
        'answer' => [
            'ご依頼いただくサンプル数などによって金額が異なります。直接お問い合わせくださいませ。',
        ]
    ],
    [
        'question' => '分析できないサンプルの形状や条件はありますか？',
        'answer' => [
            '固形・液状・粉末、いずれも分析が難しい形状は基本的にはありません。プロテインなどの粉末状のサンプルだけではなく、飲料水や化粧品の分析も可能です。また、海外輸出が難しい、冷所保存が必要なサンプルの分析も可能です。',
        ]
    ],
    [
        'question' => '特定の成分だけ分析することは可能ですか？',
        'answer' => [
            '弊社が公開対象に指定していない成分でも基本的には分析可能です。 ただし、特定の成分を数成分分析したとしても、弊社が指定する製品に混入するリスクの高い成分についてすべて分析されるわけではないため、特定の成分のみの分析はお勧めはしておりません。 またこのようなご依頼では、基本的に定量分析を行うことが多く、成分によっては試薬の入手に時間を要することもあるため、金額や納期が異なります。',
            'なお、Ostarine（オスタリン）に関しては限られた分析機関のみでしか一斉分析の公開対象としていないためか、多くのお問い合わせをいただいております。ケースによっては分析をお受けできないこともありますが、まずはお問い合わせいただければと思います。',
        ]
    ],
];
?>

<section class="p-faq l-faq">
  <div class="p-faq__inner l-inner">
    <div class="p-faq__heading">
      <hgroup class="c-heading">
        <h2 class="c-heading__jp">よくある質問</h2>
        <p class="c-heading__en">faq</p>
      </hgroup>
    </div>
    <div class="p-faq__contents">
    <?php foreach ($faqs as $faq): ?>
      <details class="p-faq__details js-details">
        <summary class="p-faq__summary js-summary">
          <span class="p-faq__summary-inner">
            <span class="p-faq__summary-text"><?= htmlspecialchars($faq['question'], ENT_QUOTES, 'UTF-8') ?></span><span class="p-faq__summary-icon icon"></span>
          </span>
        </summary>
        <div class="p-faq__content js-content">
          <div class="p-faq__content-inner">
            <?php foreach ($faq['answer'] as $paragraph): ?>
              <p><?= $paragraph ?></p>
            <?php endforeach; ?>
          </div>
        </div>
      </details>
      <?php endforeach; ?>
    </div>
  </div>
</section>