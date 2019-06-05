<?php
$cache = ($_GET['cache'] != null) ? $_GET['cache'] : "120";
$color = ($_GET['color'] != null) ? $_GET['color'] : "blue";
$name = ($_GET['name'] != null) ? $_GET['name'] : "downloads";

header("Content-Type: image/svg+xml");
header("Cache-Control: max-age=" . $cache);

function get_spigot_downloads($spigot_id) {
    if($spigot_id != null) {
        $page = file_get_contents("https://api.spiget.org/v2/resources/" . $spigot_id);
        $firstpart = explode("\"downloads\": ", $page)[1];
        $downloads = explode(",", $firstpart)[0];
        return intval($downloads);
    } else {
        return 0;
    }
}

function get_bukkit_downloads($bukkit_id) {
    if($bukkit_id != null) {
        $page = file_get_contents("https://dev.bukkit.org/projects/" . $bukkit_id);
        $firstpart = explode("<div class=\"info-data\">", $page)[4];
        $downloads = explode("</div>", $firstpart)[0];
        return intval(str_replace(",", "", $downloads));
    }
    else {
        return 0;
    }
}

function get_total_downloads() {
    return (get_bukkit_downloads($_GET['bukkit']) + get_spigot_downloads($_GET['spigot']));
}

$image = file_get_contents("https://img.shields.io/badge/" . $name . "-" . number_format(strval(get_total_downloads())) . "-" . $color . ".svg");
echo $image;