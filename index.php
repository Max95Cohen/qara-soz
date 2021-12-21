<?php

$data = file_get_contents('abai45.json');

$json = json_decode($data, true);

$random = mt_rand(0, count($json));

$text = $json[$random];
$text = nl2br($text);

echo <<<HTML
<title>q.maq.kz - {$random}</title>
<h2>$text</h2>
HTML;

