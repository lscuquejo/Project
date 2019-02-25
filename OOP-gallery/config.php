<?php

  require_once __DIR__.'/lib/MyPDO.php';
  require_once __DIR__.'/lib/Image.php';
  require_once __DIR__.'/lib/ImageLoader.php';
  $dbDsn = 'mysql:host=localhost;dbname=OOP-gallery';
  $dbUser = 'root';
  $dbPass = '123mudar';
  $GLOBALS["pagenum"] = 9;
  $myhome = "http://127.0.0.1:8088/";
