<footer class="footer">
  <div class="container">
    <div class="footer-copyright">
      <div>
        © 2020
        <a href="/" tabindex="-1">
          合同会社イルホープ
        </a>
      </div>
    </div>
  </div>
</footer>

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