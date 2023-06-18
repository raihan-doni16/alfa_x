<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />

    <!-- Bootstrap CSS -->

    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
      integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" type="text/css" href="index-admin.css" />
    <link rel="stylesheet" type="text/css" href="menu.css" />
    
    <title>Alfa X</title>
  </head>
  <body>
    <body>
      
    <!-- jumbotron -->
    <div class="jumbotron jumbotron-fluid text-center">
      <div class="container">
       
      </div>
    </div>
    <!-- akhir jumbtron -->

    <!-- navbar -->
    <nav class="navbar navbar-expand-lg ">
      <div class="container">
        <a class="navbar-brand " href="index-admin.php"
          ><span>Alfa</span>  <b>X</b></a
        >
        <button
          class="navbar-toggler"
          type="button"
          data-toggle="collapse"
          data-target="#navbarNav"
          aria-controls="navbarNav"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="nambarNav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link mr-4" href="index-admin.php">HOME</a>
            </li>
            <li class="nav-item">
              <a class="nav-link mr-4" href="daftarmenu-admin.php"
                >DAFTAR MENU</a
              >
            </li>
            <li class="nav-item">
              <a class="nav-link mr-4" href="index-admin.html">PESANAN</a>
            </li>
            <li class="nav-item">
              <a class="nav-link mr-4" href="index-admin.html">RESERVASI</a>
            </li>
            <li class="nav-item">
              <a class="nav-link mr-4" href="index-admin.html">LOGOUT</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- akhir navbar -->

    <!-- Menu -->
    <div class="container">
      <h1>DAFTAR MENU</h1>
      <a href="tambah_menu.php" class="btn btn-success mt-3">TAMBAH DAFTAR MENU</a>
      <div class="row">

        <?php 
        include('koneksi.php');
        $query = mysqli_query($koneksi, 'SELECT * FROM produk');
        $result = mysqli_fetch_all($query, MYSQLI_ASSOC);
        ?>

        <?php foreach($result as $result) : ?>

        <div class="col-md-3 mt-4">
          <div class="card brder-dark">
            <img src="upload/<?php echo $result['gambar'] ?>" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title font-weight-bold"><?php echo $result['nama_menu'] ?></h5>
             <label class="card-text harga"><strong>Rp.</strong> <?php echo number_format($result['harga']); ?></label><br>
              <a href="edit-menu.php?id_menu=<?php echo $result['id_menu']  ?>" class="btn btn-success btn-sm btn-block">EDIT</a>

              <a href="hapus_menu.php?id_menu=<?php echo $result['id_menu']  ?>" class="btn btn-danger btn-sm btn-block text-light">HAPUS</a>
            </div>
          </div>
        </div>
            <?php endforeach; ?>
          </div>
        </div>

        
<!-- Akhir reservasi -->


  <!-- Reservasi -->
  <div class="container">
      <h1>DAFTAR TEMPAT RESERVASI</h1>
      <a href="tambah_reservasi.php" class="btn btn-success mt-3">TAMBAH DAFTAR RESERVASI</a>
      <div class="row">

        <?php 
        // include('koneksi.php');
        $query = mysqli_query($koneksi, 'SELECT * FROM reservasi');
        $result = mysqli_fetch_all($query, MYSQLI_ASSOC);
        ?>

        <?php foreach($result as $reservasi) : ?>
        <br>
        <div class="col-md-4 mt-4 ">
          <div class="card cards ">
            <img src="upload/<?php echo $reservasi['gambar'] ?>" class="card-img-top" alt="...">
            <div class="card-body">
            <h5 class="card-title font-weight-bold"><?php echo $nilai = isset($reservasi['nama']) ? $reservasi['nama'] : ""; ?></h5>
            <h5 class="card-title font-weight">Kapasitas :<?php echo $nilai = isset($reservasi['kapasitas']) ? $reservasi['kapasitas'] : " "; ?> Orang</h5>
             <label class="card-text harga"><strong>Rp.</strong> <?php echo number_format($reservasi['harga']) ?></label><br>
              <a href="edit-reservasi.php?id_reservasi=<?php echo $reservasi['id_reservasi'] ; ?>" class="btn btn-success btn-sm btn-block">EDIT</a>

              <a href="hapus-reservasi.php?id_reservasi=<?php echo $reservasi['id_reservasi']  ?>" class="btn btn-danger btn-sm btn-block text-light">HAPUS</a>
            </div>
          </div>
        </div>
            <?php endforeach; ?>
          </div>
        </div>

        
<!-- Akhir reservasi -->

    <!-- Awal Footer -->
    <div class="footer">
      <p>copyright @2023</p>
    </div>
    <!-- Akhir Footer -->
    <!-- Akhir Footer -->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script
      src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
      integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
      integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
      integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
      crossorigin="anonymous"
    ></script>
    <!-- feather icon -->
    <script src="https://unpkg.com/feather-icons"></script>
  </body>
</html>
