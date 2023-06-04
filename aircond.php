<?php
$ambient_temp = 10; 
$humidity = "50"; 

$lines = file("sensor.txt");
$last_line = $lines[count($lines)-1]; 
$last_line_arr = explode(",", $last_line); 

if (strpos($last_line_arr[0], 'Aircondition') === 0) { 
    if ($last_line_arr[1] == 'Open') {
        $adjusted_temp = $last_line_arr[2];
    } else if ($last_line_arr[1] == 'Close') {
        $adjusted_temp = '-';
    }
} else {
    $adjusted_temp = null;
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Air Condition</title>
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
  margin-top: 170px;
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

	<h1>Air Condition</h1>

	<p>Ambient Temperature: <?php echo $ambient_temp; ?> °C</p>

	<p>Adjusted Temperature: <?php echo $adjusted_temp !== null ? $adjusted_temp.' °C' : '-'; ?></p>

	<p>Humidity: <?php echo $humidity; ?>%</p>

  
</div>
</body>
</html>
