<?php
$curtain_name = $_POST['curtain_name'];
$curtain_status = trim($_POST['curtain_status']);
$stage = trim($_POST['stage']);

$data = $curtain_name . ',' . $curtain_status . ',' . $stage . "\n";
$file = fopen('sensor.txt', 'a');
fwrite($file, $data);
fclose($file);

header('Location: curtainset.html');
exit;
?>
