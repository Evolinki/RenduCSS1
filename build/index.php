<?php

Use Belai\Rendu1\Scrapper;

require_once __DIR__. '/../vendor/autoload.php';

$scrapper = new Scrapper();
var_dump($scrapper->scrapeData());

