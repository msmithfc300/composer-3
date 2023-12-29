<?php

require_once 'vendor/autoload.php';

use CowSay\Cow;

$bessie = new Cow('Hello, Wilder!');
$bessie->setEyes('oO')
    ->setTongue('U')
    ->setPoop('@@@')
    ->setUdder('W');
echo $bessie;