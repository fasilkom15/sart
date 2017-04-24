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
    public $uname='';

    function __construct($uname,&$db){
      $this->db = $db;
      $syarat = "user.uname = akun.uname AND user.uname = '".$uname."'";
      $a = $this->db->SELECT('akun,user',$syarat);
      $this->nama = $a[0]['nama'];
      $this->uname = $a[0]['uname'];
      $this->email = $a[0]['email'];
      $this->hak = $a[0]['hak'];
      $this->foto = base64_encode($a[0]['foto']);
      $this->npm = $a[0]['npm'];

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
         $tabel = "keluar,surat,acara,kolega";
         $syarat = "keluar.no_surat = surat.no_surat AND keluar.no_acara = acara.id AND keluar.no_tujuan = kolega.id";
         $hasil = $this->db->SELECT($tabel,$syarat);
         if($hasil){
            foreach ($hasil as $nilai) {
               echo
               "<tr>
                <td> ".$nilai['no_surat']."/UN64.7/BEM/2017</td>
                <td>",date_format(date_create($nilai['tanggal']),"d M Y"),"</td>
                <td>".$nilai['Nama']."</td>
                <td>".$nilai['perihal']."</td>
                <td>".$nilai['pemimpin']." ".$nilai['instansi']."</td>
                <td>".$nilai['status']."</td>
                <td>".$nilai['no_surat']."</td>
               </tr>";
            }
         }
         else {
            echo "null";
         }
      }

      public function launched(){
        # code...
      }
  }


 ?>
