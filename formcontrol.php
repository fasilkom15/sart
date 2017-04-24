<?php
include_once 'init.php';

if (isset($_POST['login'])) {
  $uname = $_POST['unama'];
  $pass = sha1($_POST['pws']);

  function login($uname,$pass){
    $db = $GLOBALS['db'];
    $syarat = "uname = '".$uname."'";
    $a = $db->SELECT('akun',$syarat);
    if($a){
      $pass1 = $a[0]['pass'];
      if($pass1===$pass){
        if($a[0]['status']){
           if ($a[0]['hak']) {
              $akun = new SekBis($uname,$db);
           }
           else {
              $akun = new SekUm($uname,$db);
           }
          return $akun;
        }
        else {
          $GLOBALS['err']= "Akun belum diverifikasi oleh sekretaris umum";
          
        }
      }
      else {
         $GLOBALS['err']= "kata sandi atau nama pengguna salah";

      }
    }
    else {
      $GLOBALS['err'] = "Akun tidak ada";
    }
  }

  if ($hasil = login($uname,$pass)) {
     session_start();
     $GLOBALS['user'] = $hasil;
     $_SESSION['user_session'] = $hasil->uname;
     $_SESSION['hak'] = $hasil->hak;
     echo "<pre>",print_r($_SESSION['user_session']),"</pre>";
     header('Location: landpage.php');
  }
}


//buat proses form pendaftaran
if (isset($_POST['signup'])) {
  echo $_POST['uname'];
  echo $_POST['pw'];
  echo $_POST['email'];

}


//buat proses form admin
if (isset($_POST['admin'])) {
  echo "something";
}
?>
