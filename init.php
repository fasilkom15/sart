<?php
   include_once 'kelas/Database.php';
   $GLOBALS['db'] = new DB('sart');

   include_once 'kelas/Akun.php';
   include_once 'kelas/SekBis.php';
   include_once 'kelas/SekUm.php';
   include_once 'kelas/surat.php';

   $GLOBALS['user'] = null;
   include_once 'formcontrol.php';

?>
