<?php
header("Content-Type: image/svg+xml");
header("Cache-Control: max-age=0");

$spigot_id = $_GET('spigot');
$bukkit_id = $_GET('bukkit');
$color = $_GET('color');
$name = ($_GET('name') != null) ? $_GET('name') : "downloads";

echo "Spigot: " . $spigot_id;
echo "Bukkit: " . $bukkit_id;
echo "Color: " . $color;
echo "Name: " . $name;

function get_spigot_downloads() {
    $page = file_get_contents("https://api.spiget.org/v2/resources/3829");
    $firstpart = explode("\"downloads\": ", $page)[1];
    $downloads = explode(",", $firstpart)[0];
    return intval($downloads);
}

function get_bukkit_downloads() {
    $page = file_get_contents("https://dev.bukkit.org/projects/89296");
    $firstpart = explode("<div class=\"info-data\">", $page)[4];
    $downloads = explode("</div>", $firstpart)[0];
    return intval(str_replace(",", "", $downloads));
}

function get_total_downloads() {
    return (get_bukkit_downloads() + get_spigot_downloads());
}

$image = file_get_contents("https://img.shields.io/badge/downloads-" . number_format(strval(get_total_downloads())) . "-blue.svg");
echo $image;
?>