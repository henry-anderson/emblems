<?php

class BadgeUtils {

    public static function getBadge($name, $value, $color) {
        return file_get_contents("https://img.shields.io/badge/" . $name . "-" . $value . "-" . $color . ".svg");
    }
}