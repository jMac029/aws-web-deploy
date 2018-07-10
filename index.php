<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>jmac aws website deploy</title>

  <!-- Custom CSS -->
  <link rel="stylesheet" href="./styles.css">

  <!-- javascript with a little php functions for server hostname display -->
  <script type="text/javascript">
    function displayHostname() {
      hostname = "<?php echo $_SERVER['SERVER_NAME']; ?>";
      // console.log(hostname);
      document.getElementById("server-display").innerHTML = hostname;
    };

    window.onload = function () {
      displayHostname();
    };

  </script>

</head>

<body>
  <div class="wrapper">
    <div class="header">
      <h2>Hello world!</h2>
      <br>
      <p>from:</p>
      <h2 id="server-display"></h2>
      <br>
      <p>message:</p>
      <h1>Hello!</h1>
      <br>
    </div>
  </div>
</body>

</html>