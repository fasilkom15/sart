<?php
  include_once '../control/init.php';
  $a = new Akun('juunnn',$db);

 ?>

<!DOCTYPE html>
<html>
<title>SART Management</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/gaya.css">
<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="font/font.css"  type="text/css">
<link rel="stylesheet" href="font/font2.css">
<link rel="stylesheet" type="text/css" href="css/font-awesome.css">
<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.min.js"></script>
<style>
  html,
  body,
  h1,
  h2,
  h3,
  h4,
  h5 {
    font-family: "RobotoDraft", "Roboto", sans-serif;
  }

  .w3-bar-block .w3-bar-item {
    padding: 16px
  }

</style>

<body class="w3-light-grey">

  <!-- Top container -->
  <div class="w3-bar w3-top w3-black w3-large" style="z-index:4">
    <button class="w3-bar-item w3-button w3-hide-large w3-hover-none w3-hover-text-light-grey" onclick="w3_open();"><i class="fa fa-bars"></i> &nbsp;Menu</button>
    <span class="w3-bar-item w3-left">PENGELOLAAN ARSIP FAKULTAS ILMU KOMPUTER</span>
    <form class="navbar-form navbar-right" role="search" style="margin-right:30px;">
      <div class="form-group">
        <input type="text" class="form-control" placeholder="Search">
      </div>
      <button type="submit" class="btn btn-default">Submit</button>
    </form>
  </div>

  <!-- Sidebar/menu -->
  <nav class="w3-sidebar w3-collapse w3-white w3-animate-left" style="z-index:3;width:300px;" id="mySidebar"><br>
    <div class="w3-container w3-row">
      <div class="w3-col s4">
        <img src="img/suzu.jpg" class="w3-circle w3-margin-right" style="width:46px">
      </div>
      <div class="w3-col s8 w3-bar">
        <span>Welcome, <strong>Admin!</strong></span><br>
        <a href="#" class="w3-bar-item w3-button"><span class="glyphicon glyphicon-user"></span></a>
        <a href="#" class="w3-bar-item w3-button"><span class="glyphicon glyphicon-remove"></span></a>
        <a href="#" class="w3-bar-item w3-button"><span class="glyphicon glyphicon-lock"></span></a>
      </div>
    </div>
    <hr>
    <div class="w3-bar-block">
      <a href="#" class="w3-bar-item w3-button w3-padding-16 w3-hide-large w3-dark-grey w3-hover-black" onclick="w3_close()" title="close menu"><i class="fa fa-remove fa-fw"></i>&nbsp; Close Menu</a>

      <a href="#" class="w3-bar-item w3-button w3-padding w3-blue"><span class="glyphicon glyphicon-play"></span> &nbsp; Overview</a>
      <a href="#" class="w3-bar-item w3-button w3-padding"><span class="glyphicon glyphicon-play"></span>&nbsp; Profile</a>
      <a href="#" class="w3-bar-item w3-button w3-padding"><span class="glyphicon glyphicon-play"></span>&nbsp; Settings</a>
      <a href="#" class="w3-bar-item w3-button w3-padding"><span class="glyphicon glyphicon-play"></span>&nbsp; About</a>
  </nav>


  <!-- Overlay effect when opening sidebar on small screens -->
  <div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

  <!-- !PAGE CONTENT! -->
  <div class="w3-main" style="margin-left:300px;margin-top:43px;">

    <!-- Header -->
    <header class="w3-container" style="padding-top:22px">
      <h5><b><span class="glyphicon glyphicon-list"></span> My Dashboard</b></h5>
    </header>

    <div class="w3-row-padding w3-margin-bottom">
      <div class="w3-quarter">
        <div class="w3-container w3-red w3-padding-16">
          <div class="w3-left"><span class="glyphicon glyphicon-minus"></div>
        <div class="w3-right">
          <h3>52</h3>
        </div>
        <div class="w3-clear"></div>
        <h4>Kritik dan saran</h4>
      </div>
    </div>
    <div class="w3-quarter">
      <div class="w3-container w3-blue w3-padding-16">
        <div class="w3-left"><span class="glyphicon glyphicon-plus"></div>
        <div class="w3-right">
          <h3>99</h3>
        </div>
        <div class="w3-clear"></div>
        <h4>Permohonan SK</h4>
      </div>
    </div>
    <div class="w3-quarter">
      <div class="w3-container w3-teal w3-padding-16">
        <div class="w3-left"><!--<i class="fa fa-share-alt w3-xxxlarge"></i>--></div>
        <div class="w3-right">
          <h3>23</h3>
        </div>
        <div class="w3-clear"></div>
        <h4>Event</h4>
      </div>
    </div>
    <div class="w3-quarter">
      <div class="w3-container w3-orange w3-text-white w3-padding-16">
        <div class="w3-left"><!--<i class="fa fa-users w3-xxxlarge"></i>--></div>
        <div class="w3-right">
          <h3>50</h3>
        </div>
        <div class="w3-clear"></div>
        <h4>Undangan</h4>
      </div>
    </div>
  </div>

  <div class="w3-panel">
    <div class="w3-row-padding" style="margin:0 -16px">
      <div class="w3-twothird">
        <h5>Surat masuk</h5>
        <table class="w3-table w3-striped w3-bordered w3-border w3-hoverable w3-white" style="width:1015px">
          <tr>
            <td>NO</td>
            <td>TANGGAL SURAT</td>
            <td><i>PENGIRIM</i></td>
            <td><i>PERIHAL</i></td>
            <td><i>TERTUJU</i></td>
            <td><i>DISETUJUI</i></td>
            <td><i>MANAGE</i></td>
          </tr>
          <?
            $a->seeArsip();
           ?>
        </table>
      </div>
    </div>
  </div>
  <button href="javascript:void(0)" class="w3-button w3-dark-grey" style="margin-left:15px" onclick="document.getElementById('id01').style.display='block'">Tambah &nbsp;<span class="glyphicon glyphicon-chevron-right">
  <hr>

  <!-- Footer -->
  <footer class="w3-container w3-padding-16 w3-light-grey">
    <h4>BADAN EKSEKUTIF MAHASISWA - FAKULTAS ILMU KOMPUTER</h4>
    <p>Powered by <a href="https://unsika.ac.id" target="_blank">Universitas Singaperbangsa Karawang</a></p>
  </footer>

  <!-- End page content -->
</div>

<!-- Modal that pops up when you click on "New Message" -->
<div id="id01" class="w3-modal" style="z-index:4">
  <div class="w3-modal-content w3-animate-zoom">
    <div class="w3-container w3-padding w3-red">
       <span onclick="document.getElementById('id01').style.display='none'"
       class="w3-button w3-red w3-right w3-xxlarge"><img src="img/close.png" style="width:50px; margin-bottom:5px"></span>
              <h2>Arsipkan</h2>
          </div>
          <div class="w3-panel">
            <label>Tertuju</label>
            <input class="w3-input w3-border w3-margin-bottom" type="text">
            <label>Pengirim</label>
            <input class="w3-input w3-border w3-margin-bottom" type="text">
            <label>Perihal</label>
            <input class="w3-input w3-border w3-margin-bottom" type="text">
            <input class="w3-input w3-border w3-margin-bottom" style="height:150px" placeholder="What's on your mind?">
            <div class="w3-section">
              <a class="w3-button w3-red" onclick="document.getElementById('id01').style.display='none'">Cancel </a>
              <a class="w3-button w3-light-grey w3-right" onclick="document.getElementById('id01').style.display='none'">Share </a>
            </div>
          </div>
        </div>
      </div>

      <script>
        // Get the Sidebar
        var mySidebar = document.getElementById("mySidebar");

        // Get the DIV with overlay effect
        var overlayBg = document.getElementById("myOverlay");

        // Toggle between showing and hiding the sidebar, and add overlay effect
        function w3_open() {
          if (mySidebar.style.display === 'block') {
            mySidebar.style.display = 'none';
            overlayBg.style.display = "none";
          } else {
            mySidebar.style.display = 'block';
            overlayBg.style.display = "block";
          }
        }

        // Close the sidebar with the close button
        function w3_close() {
          mySidebar.style.display = "none";
          overlayBg.style.display = "none";
        }

      </script>

      <script>
        var openInbox = document.getElementById("myBtn");
        openInbox.click();

        function w3_open() {
          document.getElementById("mySidebar").style.display = "block";
          document.getElementById("myOverlay").style.display = "block";
        }

        function w3_close() {
          document.getElementById("mySidebar").style.display = "none";
          document.getElementById("myOverlay").style.display = "none";
        }

        function myFunc(id) {
          var x = document.getElementById(id);
          if (x.className.indexOf("w3-show") == -1) {
            x.className += " w3-show";
            x.previousElementSibling.className += " w3-red";
          } else {
            x.className = x.className.replace(" w3-show", "");
            x.previousElementSibling.className =
              x.previousElementSibling.className.replace(" w3-red", "");
          }
        }

        openMail("Borge")

        function openMail(personName) {
          var i;
          var x = document.getElementsByClassName("person");
          for (i = 0; i < x.length; i++) {
            x[i].style.display = "none";
          }
          x = document.getElementsByClassName("test");
          for (i = 0; i < x.length; i++) {
            x[i].className = x[i].className.replace(" w3-light-grey", "");
          }
          document.getElementById(personName).style.display = "block";
          event.currentTarget.className += " w3-light-grey";
        }

      </script>

      <script>
        var openTab = document.getElementById("firstTab");
        openTab.click();

      </script>

</body>

</html>
