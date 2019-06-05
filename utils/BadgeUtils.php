<?php

class BadgeUtils {

    public static function printBadge($name, $value, $color) {
        echo file_get_contents("https://img.shields.io/badge/" . $name . "-" . $value . "-" . $color . ".svg");
    }
}