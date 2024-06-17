<?php

$iframeUrl = getenv('IFRAME_URL');
$iframeDuration = getenv('IFRAME_DURATION');

?>

<!DOCTYPE html>
<html>
<head>
  <title>Iframe Example</title>
</head>
<body>

  <iframe 
    src="<?php echo $iframeUrl; ?>" 
    width="640" height="360" 
    allowfullscreen 
    style="border: none;">
  </iframe>

  <script>
    setTimeout(function() {
      window.location.href = '/'; //  أعد توجيه المستخدم إلى الصفحة الرئيسية بعد انتهاء مدة iframe
    }, <?php echo $iframeDuration * 1000; ?>); //  تحويل الثواني إلى مللي ثوانٍ
  </script>

</body>
</html>
