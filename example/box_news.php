<?php

require "../vendor/autoload.php";
require "../Cnn/Cnn.php";

$cnn = new Cnn_Indonesia(new \PHPHtmlParser\Dom);
echo $cnn->box_news();