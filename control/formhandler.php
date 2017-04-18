<?php
include_once 'init.php';

//buat proses login
if (isset($_POST['login'])) {
  $uname = $_POST['uname'];
  $pass = $_POST['psw'];

  function login($uname,$pass){
    global $db;
    $syarat = "uname = '".$uname."'";
    $a = $db->SELECT('akun',$syarat);
    if($a){
      $pass1 = $a[0]['pass'];
      if($pass1===$pass){
        if($a[0]['status']){
          return true;
        }
        else {
          echo "Akun belum diverifikasi oleh sekretaris umum";
          die();
        }
      }
      else {
        return false;
      }
    }
    else {
      echo "akun tidak ada";
    }
  }

  if (login($uname,$pass)) {
    echo "as";
  }
}

//buat proses form surat
if (isset($_GET['surat'])) {

}

//buat

?>
