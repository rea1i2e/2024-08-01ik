<footer class="p-footer l-footer">
  <div class="p-footer__bg">
    <div class="p-footer__inner l-inner">
      <ul class="p-footer__nav">
        <li class="p-footer__nav-item"><a href="https://ilhope.co.jp/privacy-policy/" target="_blank" rel="noopener noreferrer">プライバシーポリシー</a></li>
        <li class="p-footer__nav-item"><a href="https://ilhope.co.jp/company/" target="_blank" rel="noopener noreferrer">会社概要</a></li>
      </ul>
      <p class="p-footer__copyright">
        <small>© <a href="https://ilhope.co.jp/" tabindex="-1">イルホープ</a> All Rights Reserved.</small>
      </p>
    </div>
  </div>
</footer>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js' integrity='sha512-7eHRwcbYkK4d9g/6tD/mhkf++eoTHwpNM9woBxtPUBWm67zeAfFC+HrdoE2GanKeocly/VxeLvIqwvCdk7qScg==' crossorigin='anonymous'></script>
<script src="config/blackList.js"></script>
<script src="assets/js/form.js?<?php echo filemtime('./assets/js/form.js'); ?>"></script>
<script src="assets/js/script.js?<?php echo filemtime('./assets/js/script.js'); ?>"></script>
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