<html>

<head>
  <title>Debug page</title>
</head>

<body style="background-color: #00E60A;">
  <?php
    $requestPageUrl = (isset($_SERVER['HTTPS']) ? "https" : "http") . "://" . $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"];
    $pubIp = file_get_contents('https://api.ipify.org');
  ?>
  <h3>Debug information</h3>
  <ul>
    <li><strong>Request Url</strong><span>: <?php echo $requestPageUrl; ?></span></li>
    <li><strong>Outbound public IP</strong><span>: <?php echo $pubIp ?></span></li>
    <li><strong>Inbound client IP</strong><span>: <?php echo $_SERVER['REMOTE_ADDR']; ?></span></li>
  </ul>
  <strong>Headers</strong>
  <ul>
    <?php
          foreach (getallheaders() as $name => $value) {
        echo "<li><strong>$name</strong><span>: $value</span></li>";
      }
    ?>
  </ul>
</body>

</html>
