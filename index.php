<?php

use CowSay\Cow;

require_once __DIR__ . '/vendor/autoload.php';

$marguerite = new Cow('MhhEUUUllllooooo, Milka');
$marguerite->setEyes('Oo');
$marguerite->setTongue('U');
$marguerite->setUdder('ww');

$output = $marguerite->say();

echo $output;
