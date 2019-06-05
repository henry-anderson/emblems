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

echo BadgeUtils::getBadge($name, number_format(strval(get_spigot_downloads($_GET['id']))), $color);
