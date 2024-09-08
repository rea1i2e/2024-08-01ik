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
<script src="config/blackList.js"></script>
<script src="assets/js/form.js"></script>
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