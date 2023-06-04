<?php
$lines = file("sensor.txt");

$lights = array();

foreach ($lines as $line) {
  $line_arr = explode(",", $line);
  
  if (strpos($line_arr[0], 'Light') === 0 && is_numeric(substr($line_arr[0], -1))) {
    $light_name = $line_arr[0];
    $light_status = $line_arr[1];
    $light_brightness = $line_arr[2];
    $lights[$light_name] = array('status' => $light_status, 'brightness' => $light_brightness);
  }
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Lights</title>
	<style>
:root {
  --main-color: #ff6700;
  --text-color: #333;
}

body {
  background-color: #f5f5f5;
  font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
  color: var(--text-color);
  display: flex;
  flex-direction: column;
  align-items: center;
  margin: 0;
  padding: 0;
}

h1 {
  font-size: 3em;
  text-align: center;
  color: var(--main-color);
  margin: 0.5em 0;
  margin-top: 160px;
}

p {
  font-size: 2em;
  text-align: center;
  margin: 0.5em 0;
}

p:first-child {
  margin-top: 2em;
}

p:last-child {
  margin-bottom: 2em;
}

p span {
  color: var(--main-color);
}

table {
  border-collapse: collapse;
  margin-top: 2em;
  width: 50%;
}

table th,
table td {
  padding: 0.5em;
  text-align: left;
  border: 1px solid var(--main-color);
}

table th {
  background-color: var(--main-color);
  color: #fff;
}

table tr:nth-child(even) {
  background-color: #f5f5f5;
}

table tr:hover {
  background-color: #e6e6e6;
  cursor: pointer;
}

.button {
	background-color: var(--main-color);
	color: #fff;
	padding: 0.5em 1em;
	border: none;
	border-radius: 0.3em;
	cursor: pointer;
	margin-top: 2em;
}
.button:hover {
	background-color: #ff8000;
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

	<h1>Lights</h1>

  <table>
    <thead>
      <tr>
        <th>Light</th>
        <th>Status</th>
        <th>Brightness</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($lights as $light_name => $light_info) { ?>
        <tr>
          <td><?php echo $light_name; ?></td>
          <td><?php echo ucfirst($light_info['status']); ?></td>
          <td><?php echo $light_info['brightness']; ?></td>
        </tr>
      <?php } ?>
    </tbody>
  </table>
  <a href="settings.html" class="button">Change Settings</a>


</body>
</html>
