<?php
  /**
   Class dimana sebuah akun diwujudkan menjadi sebuah objek
   */
  class SekUm extends Akun{

    public function makeAkun($akun){

    }

    public function makeSK($SK){

    }

    public function approve($surat){

    }

    public function announce($surat){

    }

    public function getUnread($hal){
      $hasil = $this->db->SELECT('surat','perihal LIKE "%'.$hal.'"');
      return count($hasil);
    }


  }

 ?>
