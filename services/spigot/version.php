<?php
require "../../utils/BadgeUtils.php";
$cache = isset($_GET['cache']) ? $_GET['cache'] : "120";
$color = isset($_GET['color']) ? $_GET['color'] : "blue";
$name = isset($_GET['name']) ? $_GET['name'] : "version";
header("Content-Type: image/svg+xml");
header("Cache-Control: max-age=" . $cache);

function get_version($spigot_id) {
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, 'https://www.spigotmc.org/resources/' . $spigot_id);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
    $headers = [
        'User-Agent: Mozilla/5.0 (Macintosh; Intel Mac OS X 10_14_0) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.110 Safari/537.36',
    ];
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    $page = curl_exec($ch);
    curl_close($ch);
    $firstpart = explode("<span class=\"muted\">", $page)[1];
    $version = explode("</span>", $firstpart)[0];
    return $version;
}

BadgeUtils::printBadge($name, get_version($_GET['id']), $color);
