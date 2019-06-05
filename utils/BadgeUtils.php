<?php

class BadgeUtils {

    public static function printBadge($name, $value, $color) {
        echo "<svg xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" width=\"92\" height=\"20\">";
        echo "<linearGradient id=\"b\" x2=\"0\" y2=\"100%\">";
        echo "<stop offset=\"0\" stop-color=\"#bbb\" stop-opacity=\".1\"/>";
        echo "<stop offset=\"1\" stop-opacity=\".1\"/>";
        echo "</linearGradient>";
        echo "<clipPath id=\"a\">";
        echo "<rect width=\"92\" height=\"20\" rx=\"3\" fill=\"#fff\"/>";
        echo "</clipPath>";
        echo "<g clip-path=\"url(#a)\">";
        echo "<path fill=\"#555\" d=\"M0 0h31v20H0z\"/>";
        echo "<path fill=\"#" . $color ."\" d=\"M31 0h61v20H31z\"/>";
        echo "<path fill=\"url(#b)\" d=\"M0 0h92v20H0z\"/>";
        echo "</g>";
        echo "<g fill=\"#fff\" text-anchor=\"middle\" font-family=\"DejaVu Sans,Verdana,Geneva,sans-serif\" font-size=\"110\">";
        echo "<text x=\"165\" y=\"150\" fill=\"#010101\" fill-opacity=\".3\" transform=\"scale(.1)\" textLength=\"210\">" . $name . "</text>";
        echo "<text x=\"165\" y=\"140\" transform=\"scale(.1)\" textLength=\"210\">" . $name . "</text>";
        echo "<text x=\"605\" y=\"150\" fill=\"#010101\" fill-opacity=\".3\" transform=\"scale(.1)\" textLength=\"510\">" . $value ."</text>";
        echo "<text x=\"605\" y=\"140\" transform=\"scale(.1)\" textLength=\"510\">" . $value . "</text>";
        echo "</g>";
        echo "</svg>";    }
}