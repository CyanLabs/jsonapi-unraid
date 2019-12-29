<?php
$files = glob("/var/local/emhttp/*.ini");
$file = htmlspecialchars($_GET["file"]);
if (in_array("/var/local/emhttp/" . $file, $files))  {
$output = parse_ini_file("/var/local/emhttp/" . $file, true);
header('Content-Type: application/json');
echo json_encode($output);
}
?>
