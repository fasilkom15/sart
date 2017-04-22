<?php
  /**
   kelas akun, kelas ini menampung segala
   hal yang dimiliki bersama oleh sekretaris umum dan sekretaris acara.
   */
  class Akun{

    public $nama = '';
    public $email = '';
    public $foto = null;
    public $hak = false;
    public $db = null;
    public $npm = '';

    function __construct($uname,$db){
      $this->db = $db;
      $syarat = "user.uname = akun.uname AND user.uname = '".$uname."'";
      $a = $this->db->SELECT('akun,user',$syarat);
      $this->nama = $a[0]['nama'];
      $this->email = $a[0]['email'];
      $this->hak = $a[0]['hak'];
      $this->foto = base64_encode($a[0]['foto']);
      $this->npm = $a[0]['npm'];
      session_start();
    }

    public function logout(){
        session_start();
        unset($_SESSION['user_session']);

        if(session_destroy())      {
          header("Location: index.php");
        }
      }

      public function getFoto(){
        return $this->foto;
      }

      public function makeSurat(){
        $perihal = 'undangan';
        $lamp = 0;
        $sifat = 'biasa';
        $tanggal = date("m/d/Y");
        $array = array($perihal,$lamp,$sifat,$tanggal);
        $a = $this->db->INSERT('surat',$array);
        if ($a) {
          echo "Hwllo";
        }
        else {
          echo $a;
        }
        $U = $this->db->SELECT('surat');
        echo "<pre>",print_r($U),"</pre>";
      }

      public function seeArsip(){
        $data = $this->db->SELECT('keluar,surat,acara,kolega','keluar.no_surat = surat.no_surat AND acara.id = keluar.no_acara AND kolega.id = keluar.no_tujuan');
        //echo "<pre>",print_r($data),"</pre>";

        foreach ($data as $tuple) {
          echo "
            <tr>
              <td> ".$tuple['no_surat']."/BEM-FASILKOM/UNSIKA/X/2017 </td>
              <td>".$tuple['tanggal']."</td>
              <td>".$tuple['sekretaris']."</td>
              <td>".$tuple['perihal']."</td>
              <td>".$tuple['pemimpin']." ".$tuple['instansi']."</td>
              <td>".$tuple['status']."</td>
            </tr>
          ";
        }
      }

      public function launched(){
        
      }
  }


 ?>
