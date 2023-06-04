<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Rooms - Home Automation</title>
	<style>
		body {
			background-color: #f2f2f2;
			font-family: Arial, sans-serif;
			color: #333;
		}
		h1 {
			font-size: 3rem;
			margin: 2rem 0;
			text-align: center;
		}
		.container {
			display: flex;
			flex-wrap: wrap;
			justify-content: space-evenly;
			align-items: center;
			height: 100vh;
		}
		.card {
			background-color: #fff;
			box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
			border-radius: 0.5rem;
			padding: 1.5rem;
			margin: 1rem;
			width: 300px;
			height: 350px;
			display: flex;
			flex-direction: column;
			justify-content: space-evenly;
			align-items: center;
			text-align: center;
			transition: transform 0.3s ease;
			cursor: pointer;
		}
		.card:hover {
			transform: translateY(-10px);
			box-shadow: 0px 10px 20px rgba(0, 0, 0, 0.2);
		}
		h2 {
			font-size: 2rem;
			margin-bottom: 1rem;
		}
		p {
			font-size: 1.5rem;
			margin-bottom: 1rem;
		}
		img {
			width: 100px;
			height: 100px;
			margin-bottom: 1rem;
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
	<div class="container">
		<div class="card">
			<img src="bedroom.png" alt="Bedroom">
			<h2>Bedroom</h2>

			<?php
            $filename = "sensor.txt";
            $file = fopen($filename, "r");
            if ($file != false) {
                $lastAirconditionValue = '';
                while (!feof($file)) {
                    $line = fgets($file);
                    if (strpos($line, 'Aircondition1') === 0) {
                        $lastAirconditionValue = $line;
                    }
                }
                fclose($file);
                if ($lastAirconditionValue) {
                    $values = explode(",", $lastAirconditionValue);
                    if ($values[1] == "Open") {
                        echo "<p style='font-size: 1.5rem;'>Temperature: " . $values[2] . "°C";
                    } else {
                        echo "<p style='font-size: 1.5rem;'> Temperature: -";
                    }
                } else {
                    echo "<p style='font-size: 1.5rem;'> No data for Aircondition1";
                }
            }
            ?>



			<p>Humidity: 50%</p>
			
			<?php
			$filename = "sensor.txt";
			$file = fopen( $filename, "r" );
			if( $file != false ) {
			    $lastLight1Value = '';
			    while(!feof($file)) {
			        $line = fgets($file);
			        if (strpos($line, 'Light1') === 0) {
			            $lastLight1Value = $line;
			        }
			    }
			    fclose( $file );
			    if ($lastLight1Value) {
			        $values = explode(",", $lastLight1Value);
    			if ($values[1] == "Open") {
					echo "<p style='font-size: 1.5rem;'>Light1 brightness is " . $values[2] . "</p>";
				} else {
					echo "<p style='font-size: 1.5rem;'>Light1 is closed</p>";
				}
			} else {
				echo "<p style='font-size: 1.5rem;'>No data for Light1</p>";
			}
		}
		?>



		</div>
		<div class="card">
			<img src="livingroom.png" alt="Living Room">
			<h2>Living Room</h2>

			<?php
            $filename = "sensor.txt";
            $file = fopen($filename, "r");
            if ($file != false) {
                $lastAirconditionValue = '';
                while (!feof($file)) {
                    $line = fgets($file);
                    if (strpos($line, 'Aircondition2') === 0) {
                        $lastAirconditionValue = $line;
                    }
                }
                fclose($file);
                if ($lastAirconditionValue) {
                    $values = explode(",", $lastAirconditionValue);
                    if ($values[1] == "Open") {
                        echo "<p style='font-size: 1.5rem;'>Temperature: " . $values[2] . "°C";
                    } else {
                        echo "<p style='font-size: 1.5rem;'> Temperature: -";
                    }
                } else {
                    echo "<p style='font-size: 1.5rem;'> No data for Aircondition2";
                }
            }
            ?>

			<p>Humidity: 45%</p>

			<?php
	$filename = "sensor.txt";
	$file = fopen( $filename, "r" );
	if( $file != false ) {
		$lastLight2Value = '';
		while(!feof($file)) {
			$line = fgets($file);
			if (strpos($line, 'Light2') === 0) {
				$lastLight2Value = $line;
			}
		}
		fclose( $file );
		if ($lastLight2Value) {
			$values = explode(",", $lastLight2Value);
			if ($values[1] == "Open") {
				echo "<p style='font-size: 1.5rem;'>Light2 brightness is " . $values[2] . "</p>";
			} else {
				echo "<p style='font-size: 1.5rem;'>Light2 is closed</p>";
			}
		} else {
			echo "<p style='font-size: 1.5rem;'>No data for Light2</p>";
		}
	}
?>


		</div>
		<div class="card">
			<img src="kitchen.png" alt="Kitchen">
			<h2>Kitchen</h2>

			<?php
            $filename = "sensor.txt";
            $file = fopen($filename, "r");
            if ($file != false) {
                $lastAirconditionValue = '';
                while (!feof($file)) {
                    $line = fgets($file);
                    if (strpos($line, 'Aircondition3') === 0) {
                        $lastAirconditionValue = $line;
                    }
                }
                fclose($file);
                if ($lastAirconditionValue) {
                    $values = explode(",", $lastAirconditionValue);
                    if ($values[1] == "Open") {
                        echo "<p style='font-size: 1.5rem;'>Temperature: " . $values[2] . "°C";
                    } else {
                        echo "<p style='font-size: 1.5rem;'> Temperature: -";
                    }
                } else {
                    echo "<p style='font-size: 1.5rem;'> No data for Aircondition3";
                }
            }
            ?>

			<p>Humidity: 40%</p>

			<?php
$filename = "sensor.txt";
$file = fopen( $filename, "r" );
if( $file != false ) {
    $lastLight3Value = '';
    while(!feof($file)) {
        $line = fgets($file);
        if (strpos($line, 'Light3') === 0) {
            $lastLight3Value = $line;
        }
    }
    fclose( $file );
    if ($lastLight3Value) {
        $values = explode(",", $lastLight3Value);
        if ($values[1] == "Open") {
            echo "<p style='font-size: 1.5rem;'>Light3 brightness is " . $values[2] . "</p>";
        } else {
            echo "<p style='font-size: 1.5rem;'>Light3 is closed</p>";
        }
    } else {
        echo "<p style='font-size: 1.5rem;'>No data for Light3</p>";
    }
}
?>

		
		</div>
	</div>

	
</body>
</html>
