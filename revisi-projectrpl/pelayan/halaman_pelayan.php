<?php

@include 'koneksi.php';


?>


<!DOCTYPE html>
<html>
<head>
  <title>Dashboard Pelayan</title>
  <link rel="stylesheet" href="/pelayan/style.css">
  <link rel="icon" href="/loginPage/image/img.jpg">
</head>
<body>
  <header>
    <h3>DASHBOARD PELAYAN</h3>
    <section class="webdesigntuts-workshop">
      <form action="" method="">
          <input type="search" placeholder="What are you looking for?">
          <button>Search</button>
      </form>
  </section>
    <a href="index.php"><button class="cta" >Logout</button></a>
</header>


  <table>
    <tr>
      <th>No</th>
      <th>Nama Pelanggan</th>
      <th>Tanggal Reservasi</th>
      <th>Waktu Reservasi</th>
      <th>Jumlah Orang</th>
      <th>Meja</th>
      <th>Catatan Khusus</th>
      <th>Status</th>
    </tr>
    <!-- Data reservasi akan ditampilkan di sini -->
  </table>
</body>
</html>
