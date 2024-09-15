<footer class="p-footer l-footer">
  <div class="p-footer__bg">
    <div class="p-footer__inner l-inner">
      <ul class="p-footer__nav">
        <li class="p-footer__nav-item"><a href="/" target="_blank" rel="noopener noreferrer">プライバシーポリシー</a></li>
        <li class="p-footer__nav-item"><a href="/" target="_blank" rel="noopener noreferrer">会社概要</a></li>
      </ul>
      <p class="p-footer__copyright">
        <small><a href="/" tabindex="-1">© イルホープ All Rights Reserved.</a></small>
      </p>
    </div>
  </div>
</footer>
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js' integrity='sha512-7eHRwcbYkK4d9g/6tD/mhkf++eoTHwpNM9woBxtPUBWm67zeAfFC+HrdoE2GanKeocly/VxeLvIqwvCdk7qScg==' crossorigin='anonymous'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollTrigger.min.js' integrity='sha512-3J8HWl0+54r+3QzT3PZzNmZvG3+6O3JzZtZg0+l0Wx+oN+19N+2JxR/qDB3+VBE+1N2W+1/XQXgG9X7O5w+g==' crossorigin='anonymous'></script>
<script src="config/blackList.js"></script>
<script src="assets/js/form.js"></script>
<script src="assets/js/script.js"></script>
<script>
  if (typeof(dataLayer) == "undefined") {
    dataLayer = []
  };
  dataLayer.push({
    'orderId': '<?php echo htmlspecialchars($_GET['orderId']) ?>',
    'utm_source': '<?php echo htmlspecialchars($_GET['utm_source']) ?>',
    'utm_medium': '<?php echo htmlspecialchars($_GET['utm_medium']) ?>',
    'utm_term': '<?php echo htmlspecialchars($_GET['utm_term']) ?>',
    'utm_content': '<?php echo htmlspecialchars($_GET['utm_content']) ?>',
    'utm_campaign': '<?php echo htmlspecialchars($_GET['utm_campaign']) ?>'
  });
</script>
</body>

</html>