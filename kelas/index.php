<?php
  include_once '../init.php';
  //include_once 'coba.php';


  $db = new DB('sart');
  $sur = new SURAT(1,$db);
  //$sur->setAnnounce();
  $GLOBALS['user'] = new Akun('juunnn',$db);
  echo "<pre>",print_r($GLOBALS['user']),"</pre>";



 //$a->makeSurat();

  //buat ngambil foto
  //echo "<img src='data:image/jpeg;base64,".$a->getFoto()."'/>";
  //echo $a->getFoto();


?>
