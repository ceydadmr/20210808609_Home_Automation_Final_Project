<?php
$lines = file("sensor.txt");
$curtainData = [];

foreach ($lines as $line) {
  $data = explode(",", $line);
  $curtainName = trim($data[0]);
  $curtainStatus = isset($data[1]) ? trim($data[1]) : "";
  $curtainStage = isset($data[2]) ? trim($data[2]) : "";

  if (strpos($curtainName, "Curtain") === 0) {
    if (!isset($curtainData[$curtainName])) {
      $curtainData[$curtainName] = [
        "status" => $curtainStatus,
        "stage" => $curtainStage
      ];
    } else {
      $curtainData[$curtainName]["status"] = $curtainStatus;
      $curtainData[$curtainName]["stage"] = $curtainStage;
    }
  }
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Curtains</title>
  <style>
    body {
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      margin: 0;
      background-color: #f5f5f5;
    }

    .curtain-container {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
    }

    .curtain-box {
      background-color: #fff;
      border: 1px solid #ddd;
      padding: 20px;
      margin: 10px;
      max-width: 400px;
      text-align: center;
      flex: 1;
    }

    .curtain-box h3 {
      color: #333;
      font-size: 24px;
      margin-bottom: 10px;
    }

    .curtain-box p {
      margin-bottom: 5px;
    }

    /* header başlangıcı */
		
nav {
  position: absolute;
  top: 0px;
  right: 90px;
}

nav ul {
  display: flex;
  flex-direction: row;
  align-items: center;
  list-style-type: none;
}

nav ul li {
  margin-left: 20px;
}

nav ul li:first-child {
  margin-left: 0;
}

nav ul li a {
  color: #FFFFFF;
  text-decoration: none;
  font-weight: 500;
}

nav ul li a:hover {
  color: #A4B0BD;
}

header {
  background-color: #000000;
  color: #FFFFFF;
  height: 80px;
  line-height: 80px;
  position: fixed;
  top: 0;
  left: 0;
  right: 0;
  z-index: 999;
  width: 100%;
  margin-bottom: 120px;
}

.button {
  background-color: #FF6700;
  border: none;
  color: white;
  padding: 10px 20px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin-top: 20px;
  margin-right: 20px;
  cursor: pointer;
  border-radius: 4px;
}

.button:hover {
  background-color: #FF5500;
}

.button-container {
  display: flex;
  justify-content: flex-end;
}

  </style>
</head>

<body>
<header>
  <div class="container">
    <nav>
      <ul>
        <li><a href="home.html">Main Menu</a></li>
        <li><a href="index.html">Home</a></li>
      </ul>
    </nav>
  </div>
</header>

<div class="curtain-container">
  <?php
  foreach ($curtainData as $curtainName => $curtain) {
    echo "<div class='curtain-box'>";
    echo "<h3>$curtainName</h3>";

    $curtainStatus = $curtain['status'];
    $curtainStage = $curtain['stage'];

    if ($curtainStatus === "Open" && $curtainStage !== "-") {
      echo "<p>$curtainName opened at Stage $curtainStage.</p>";
    } elseif ($curtainStatus === "Close") {
      echo "<p>$curtainName closed.</p>";
    } else {
      echo "<p>Invalid sensor data.</p>";
    }

    echo "</div>";
  }
  ?>
</div>

<div class="button-container">
        <a href="curtainset.html"><button class="button">Set Curtains</button></a>
</div>

</body>
</html>
