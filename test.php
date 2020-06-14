<?php

require __DIR__ . '/vendor/autoload.php';

$html = '<HTML><BODY>';
$lines = 10000;
while ($lines--) {
    $html .= '<div DIR=LTR><SPAN LANG="en-gb"><FONT FACE="Consolas">&gt;&gt; </FONT></SPAN></div>';
}

$html5 = new Masterminds\HTML5();
$node = $html5->loadHTML($html);
