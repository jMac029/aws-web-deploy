<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>jmac aws website deploy</title>

  <!-- Custom CSS -->
  <link rel="stylesheet" href="./styles.css">

  <!-- javascript functions for server hostname display -->
  <!-- <script type="text/javascript">
    function displayHostname() {
      hostname = location.host;
      // console.log(hostname);
      document.getElementById("server-display").innerHTML = hostname;
    };

    window.onload = function () {
      displayHostname();
    };

  </script> -->
  <!-- php script to display the server ip -->
  <script type="text/javascript">
    var ip = "<?php echo $_SERVER['SERVER_ADDR']; ?>";
    alert(ip);
  </script>

</head>

<body>
  <div class="wrapper">
    <div class="header">
      <h2>Hello world!</h2>
      <br>
      <p>refresh the page to be alerted of which instance the load balancer is hitting</p>
      <br>
    </div>
  </div>
</body>

</html>