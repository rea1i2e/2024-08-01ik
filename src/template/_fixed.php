<div class="p-fixed l-fixed">
  <ul class="p-fixed__button-items">
    <li class="p-fixed__button-item">
      <a href="mailto:info@ilhope.jp">
        <?php
      $args = [
        'sp' => true,
        'directory' => '',
        'file' => 'fixed_button_mail',
        'type' => 'png',
        'width' => 600,
        'height' => 128,
        'spWidth' => 380,
        'spHeight' => 106,
        'alt' => 'お問い合わせ',
        'lazy' => true
      ];
      include 'parts/common/picture.php';
      ?>
      </a>
    </li>
        <li class="p-fixed__button-item">
      <a href="tel:03-6892-4074">
      <?php
      $args = [
        'sp' => true,
        'directory' => '',
        'file' => 'fixed_button_tel',
        'type' => 'png',
        'width' => 600,
        'height' => 128,
        'spWidth' => 380,
        'spHeight' => 106,
        'alt' => 'tel:03-6892-4074',
        'lazy' => true
      ];
      include 'parts/common/picture.php';
      ?>
      </a>
    </li>
  </ul>
</div>
