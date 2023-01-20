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
      .messagebox {
        position:fixed;
        background-color:#000000;
        color:#ffffff;
        border:3px solid #ffffff;
        font-family:'Voltaire', sans-serif;
        font-size:24px;
        width:180px;
        border-radius:15px;
        z-index:1;
        padding:10px;
        }
        
      foreach (getallheaders() as $name => $value) {
        echo "<li><strong>$name</strong><span>: $value</span></li>";
      }
    ?>
  </ul>
</body>

</html>
