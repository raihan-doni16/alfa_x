<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />

    <!-- Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
      integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" type="text/css" href="pesanan_customer.css" />

    <title>Alfa X</title>
  </head>
  <body>

    <!-- jumbotron -->
    <div class="jumbotron jumbotron-fluid text-center">
      <div class="container">
        <h1 class="display-4"><b>Alfa X</b></h1>
        <hr />
        <p>Unlock the Power of Alfa X!</p>
      </div>
    </div>
    <!-- akhir jumbtron -->

    <!-- navbar -->
    <nav class="navbar navbar-expand-lg bg-dark">
      <div class="container">
        <a class="navbar-brand text-white" href="pesanan_customer.html"
          ><b>Alfa X</b></a
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
              <a class="nav-link mr-4" href="index-admin.html">HOME</a>
            </li>
            <li class="nav-item">
              <a class="nav-link mr-4" href="daftar_menu_customer.html">DAFTAR MENU</a>
            </li>
            <li class="nav-item">
              <a class="nav-link mr-4" href="pesanan_customer.html">PESANAN</a>
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
        <div class="judul-pesanan mt-5">
         
          <h3 class="text-center font-weight-bold">PESANAN ANDA</h3>
          
        </div>
        <table class="table table-bordered" id="example">
          <thead class="thead-light">
            <tr>
              <th scope="col">No</th>
              <th scope="col">Nama Pesanan</th>
              <th scope="col">Harga</th>
              <th scope="col">Jumlah</th>
              <th scope="col">Subharga</th>
              <th scope="col">Opsi</th>
            </tr>
          </thead>
          <tbody>
              <?php $nomor=1; ?>
              <?php $totalbelanja = 0; ?>
              <?php foreach ($_SESSION["pesanan"] as $id_menu => $jumlah) : ?>
  
              <?php 
                include('koneksi.php');
                $ambil = mysqli_query($koneksi, "SELECT * FROM produk WHERE id_menu='$id_menu'");
                $pecah = $ambil -> fetch_assoc();
                $subharga = $pecah["harga"]*$jumlah;
              ?>
            <tr>
              <td><?php echo $nomor; ?></td>
              <td><?php echo $pecah["nama_menu"]; ?></td>
              <td>Rp. <?php echo number_format($pecah["harga"]); ?></td>
              <td><?php echo $jumlah; ?></td>
              <td>Rp. <?php echo number_format($subharga); ?></td>
              <td>
                <a href="hapus_pesanan.php?id_menu=<?php echo $id_menu ?>" class="badge badge-danger">Hapus</a>
              </td>
            </tr>
              <?php $nomor++; ?>
              <?php $totalbelanja+=$subharga; ?>
              <?php endforeach ?>
          </tbody>
          <tfoot>
            <tr>
              <th colspan="4">Total Belanja</th>
              <th colspan="2">Rp. <?php echo number_format($totalbelanja) ?></th>
            </tr>
          </tfoot>
        </table><br>
        <form method="POST" action="">
          <a href="menu_pembeli.php" class="btn btn-primary btn-sm">Lihat Menu</a>
          <button class="btn btn-success btn-sm" name="konfirm">Konfirmasi Pesanan</button>
        </form>        
  
        <?php 
        if(isset($_POST['konfirm'])) {
            $tanggal_pemesanan=date("Y-m-d");
  
            // Menyimpan data ke tabel pemesanan
            $insert = mysqli_query($koneksi, "INSERT INTO pemesanan (tanggal_pemesanan, total_belanja) VALUES ('$tanggal_pemesanan', '$totalbelanja')");
  
            // Mendapatkan ID barusan
            $id_terbaru = $koneksi->insert_id;
  
            // Menyimpan data ke tabel pemesanan produk
            foreach ($_SESSION["pesanan"] as $id_menu => $jumlah)
            {
              $insert = mysqli_query($koneksi, "INSERT INTO pemesanan_produk (id_pemesanan, id_menu, jumlah) 
                VALUES ('$id_terbaru', '$id_menu', '$jumlah') ");
            }          
  
            // Mengosongkan pesanan
            unset($_SESSION["pesanan"]);
  
            // Dialihkan ke halaman nota
            echo "<script>alert('Pemesanan Sukses!');</script>";
            echo "<script>location= 'menu_pembeli.php'</script>";
        } ?>
      </div>
      
    <!-- Akhir Menu -->
    

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

    <script>
        $(document).ready(function() {
            $('#example').DataTable();
        } );
      </script>

  </body>
</html>

