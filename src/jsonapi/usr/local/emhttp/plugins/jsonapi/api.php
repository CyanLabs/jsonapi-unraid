<?php
$files = glob("/var/local/emhttp/*.ini");
$file = htmlspecialchars($_GET["file"]);
if (in_array("/var/local/emhttp/" . $file, $files))  {
    $output = parse_ini_file("/var/local/emhttp/" . $file, true);
    header('Content-Type: application/json');
    echo json_encode($output);
} else {
    echo '<ul>';
    foreach ($files as $file) {
        $file = basename($file);
        echo '<li><a href="?file='.$file.'">'.$file.'</a></li>';
    } // End of foreach "Looping ini files"
    echo '</ul>';
}
?>
