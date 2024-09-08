<section class="p-mv l-mv">
  <div class="p-mv__swiper swiper js-mv-swiper">
    <div class="p-mv__swiper-wrapper swiper-wrapper">
      <?php
      $slideItems = [
        [
          'directory' => '/dummy/',
          'file' => 'dummy3',
          'type' => 'jpg',
          'alt' => '',
          'lazy' => false,
          'sp' => false,
        ],
        [
          'directory' => '/dummy/',
          'file' => 'dummy4',
          'type' => 'jpg',
          'alt' => '',
          'lazy' => false,
          'sp' => false,
        ],
        [
          'directory' => '/dummy/',
          'file' => 'dummy5',
          'type' => 'jpg',
          'alt' => '',
          'lazy' => false,
          'sp' => false,
        ],
      ];
      foreach ($slideItems as $item) :
      ?>
        <div class="p-mv__swiper-slide swiper-slide">
          <?php
          get_template_part('parts/common/picture0', null, $item);
          ?>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
<p class="p-mv__scroll c-scroll">
  scroll
</p>
  <div class="p-mv__copy">
    <div class="p-mv__inner l-inner">
      <h2 class="p-mv__main-copy">
        メインのコピー
      </h2>
      <p class="p-mv__sub-copy">
        サブコピー
      </p>
    </div>
  </div>
</section>