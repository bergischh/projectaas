<?php
include ('function.php');
$koneksi = new database();

if (isset($_POST['check'])) {
    $koneksi->inputData($_POST['nama'],  $_POST['id_donatur'], $_POST['paket'], $_POST['kategori'], $_POST['nominal_barang'] );
    header("Location:home.php");
    echo "<script>
        ('data berhasil ditambahkan');
        document.location.href ='#datawakaf';
          </script>
          ";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.cdnfonts.com/css/be-vietnam-pro" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <script src= "https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>  
   
    <style>
    .card {
        box-shadow: 1px 8px 58px rgba(0, 0, 0, 0.1);
        border: white;
        border-radius: 15px;
    } 
    </style>
</head>
<body>
  <!-- NAVBAR START -->
<div class="d-flex" style="margin-top: 20px;">
<nav class="navbar navbar-fixed-top">
  <div class="container-fluid ">
    <ul class="nav navbar-nav">
    <li><img class="img-navbar" src="img/logokecil.png"></li>
    </ul></b>
  </div>
</nav>

  <div class="p-2 flex-grow-1" style="margin-left: 150px; font-size: 20px;">
           <p>SMK WIKRAMA <br>BOGOR</p>
  </div class="p-2">
  <ul class="nav nav-underline">
  <li class="nav-item">
    <a class="nav-link active" aria-current="page" href="#beranda">Beranda</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" style="color: #B2B2B2;" href="#carawakaf">Cara Wakaf</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" style="color: #B2B2B2;" href="#datawakaf">Data Wakaf</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" style="color: #B2B2B2;" href="#gallery">Gallery</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" style="color: #B2B2B2;" href="#webwikrama">Web Wikrama</a>
  </li>
</ul>
</div>

<!-- NAVBAR END -->
<!-- style="margin-top: 30px; margin-left: 62%; background-color: #ffffff; width: 138px; border-radius: 10px; position: absolute; " -->
<!-- BERANDA START -->
<div id="beranda">
<div class="tampilan">
  <img class="logokecil" src="img/logo.png" alt="">
  <img class="img-mimbar"src="img/mimbar.jpeg" alt="mimbar" >
  <div class="card-beranda">
    <div class="cardd">
    <img class="cardd-icon" src="img/icon-leave.png" alt=""><h6>Lingkungan<br>Terjaga.</h6>
    </div>
    <div class="cardd" style="margin-top: 15px">
    <img class="cardd-icon" src="img/icon-panah.png" alt=""> <h6>Kapasitas<br>Besar.</h6>
    </div>
    <div class="cardd" style="margin-top: 15px">
    <img class="cardd-icon" src="img/icon-quran.png" alt=""><h6>Al-Qur'an<br>Hadist</h6>
    </div>
  </div>

  <p><b>Masjid Besar SMK Wikrama Bogor</b></p>
  <h2>Mari<span> Tingkatkan</span><br> <span> Keimanan </span>Masyarakat<br>SMK Wikrama Bogor.</h2>
  <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop" style="background-color: #1F3984; margin-left: 9%;">
    Beri Bantuan Shadaqah
  </button>
<!-- modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel" style="text-align:center;">Donatur Masjid Wikrama</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <form action="" method="post">
        <div class="modal-body">
        <div class="input-grup">
              <span class="input-grup-addon"></span>
              <input type="text" class="form-control" name="nama" placeholder="Masukan Nama Donatur">
        </div><br>
        <div class="input-grup">
              <span class="input-grup-addon"></span>
              <input type="number" class="form-control" name="id_donatur" placeholder="Masukan Donatur ID">
        </div><br>
        <div class="input-grup-addon">
          <select class="form-select" required aria-label="select example" name="paket"  placeholder="Pilih Paket">
              <option value="">Pilih Paket</option>
              <option value="Paket 1">Paket 1 (Uang)</option>
              <option value="Paket 2">Paket 2 (Barang)</option>
          </select>
        </div><br>
        <div class="input-grup">
        <select class="form-select" required aria-label="select example" name="kategori"  placeholder="Pilih Paket">
              <option value="">Pilih Kategori</option>
              <option value="uang">Uang</option>
              <option value="barang">Barang</option>
          </select>
        </div><br>
        <div class="input-grup">
            <span class="input-grup-addon"></span>
            <input type="text" class="form-control" name="nominal_barang" placeholder="Masukan Nominal/Barang">
        </div><br>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary" name="check">Submit</button>
      </div>
    </div>
  </div>
</div>
</form>
</div>
<!-- BERANDA END -->

<br>
<br>

<!-- PROGRES DONATUR START -->
<div class="card-progress-bar">
  <div class="card-body">
  <div class="d-flex justify-content-between">
    <div class="data-donatur" style="margin-left: 4%;"><p>Total Target Dana</p>
      <h1><?php $target = $koneksi->target();
      echo "Rp." . number_format($target);?></h1>
    </div> 

    <div class="data-donatur"><p>Total Dana Terkumpul</p>
      <h1><?php $tNom = $koneksi->totalNominal();
      echo "Rp." . number_format($tNom['nominal']); ?></h1>
    </div>

    <div class="data-donatur" style="margin-right: 4%;"><p>Total Donatur</p>
    <h1><?php $tDon = $koneksi->totalDonatur();
    echo number_format($tDon); ?> Orang</h1>
    </div>   
  </div>
  </div>
  <hr>
  <div class="row">
      <div class="col-8">
          <div class="progress" role="progressbar" aria-label="Terpenuhi" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100" style="height: 35px; margin-left: 20px; margin-top: 15px;">
              <div class="progress-bar" style="width: <?php echo $koneksi->persentase(); ?>%; background-color: #1F3984;"></div>
          </div>
      </div>
      <div class="col-4">
          <b><span style="font-size: 40px; color:darkblue;">
                 <?php echo $koneksi->persentase(); ?>% </span> <span style="font-size: 30px; color:darkblue;">Terpenuhi</span></b>
       </div>
  </div>

  <div class="prog-donatur">
      <marquee behavior="" direction="right">
        <?php
            $dataDonatur = $koneksi->tampilData();
            if (!empty($dataDonatur))
            foreach ($dataDonatur as $row) {
              echo '<span style="font-size: x-large; color:white;">' . ($row['nama']) . " - </span>";
              echo '<span style="font-size: x-large; color:#FFF500;">' . ($row['kategori']) . " : ";
              echo "RP." .number_format($row['nominal_barang']). "</span>" . '<span style="display: inline-block; font-size: 30px; color: #bbb9b9; margin-left: 5px; margin-right: 5px;">  • </span>';
            }
        ?>  
      </marquee>
 </div>
</div>
</div>
</div>
<!-- PROGRES DONATUR END -->

<!-- Banner -->
<div id="carouselExampleFade" class="carousel slide carousel-fade" style="margin-top: 50px; margin-left: 8%;" >
  <div class="carousel-inner" >
    <div class="carousel-item active" style="max-width: 94%;">
      <img src="img/masjid1.jpg" class="d-block w-100" alt="..." height="400px" style="border-radius: 30px;">
    </div>
    <div class="carousel-item" style="max-width: 94%;">
      <img src="img/masjid2.jpg" class="d-block w-100" alt="..." height="400px" style="border-radius: 30px;">
    </div>
    <div class="carousel-item" style="max-width: 94%;">
      <img src="img/masjid3.jpg" class="d-block w-100" alt="..." height="400px" style="border-radius: 30px;">
    </div>
    <div class="carousel-item" style="max-width: 94%;">
      <img src="img/masjid4.jpg" class="d-block w-100" alt="..." height="400px" style="border-radius: 30px;">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next" style="margin-right: 13%;">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

<!-- MANFAAT START -->
<div class="manfaat" style="margin-top: 100px;">
    <h2><span>Manfaat </span>Wakaf,Infaq <br> Shodaqoh.</h2>
    <p style="margin-bottom: 60px;"><b>Berikut Adalah Beberapa Keutamaan Wakaf, Infaq<br>Shodaqoh Yang Akan Anda Dapatkan.</b></p>
</div>
<!-- CARD-->
<img class="img-manfaat" src="img/tangan.jpeg" >
<!-- card 2 -->
<div class="card2" style="margin-left: 12px;">

    <div class="card text" style="max-width: 16rem; margin-left: 11%">
      <div class="header">
        <div class="icon-bc">
            <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" class="bi bi-heart" viewBox="0 0 16 16" style="margin-top: 15px; margin-left: 12px;">
            <path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z"/>
            </svg>
            </div>
        </div>
      <div class="card-body" style=" background-image: url(img/love.jpeg); background-size: 50%; background-repeat: no-repeat; background-position: right 0px bottom;">
        <h5 class="card-title" style="font-size: 25px;">Menjadikan Hati <br> Lebih Tenang</h5>
        <p class="card-text" style="color: #B2B2B2; margin-bottom: 30px;">Kami memberikan harga yang terbaik dibandingkan dengan harga kompetitor kami.</p>
      </div>
    </div>

    <div class="card text" style="max-width: 16rem; margin-left: 50px">
        <div class="header">
        <div class="icon-bc">
          <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" class="bi bi-patch-check" viewBox="0 0 16 16" style="margin-top: 15px; margin-left: 12px;">
          <path fill-rule="evenodd" d="M10.354 6.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7 8.793l2.646-2.647a.5.5 0 0 1 .708 0z"/>
          <path d="m10.273 2.513-.921-.944.715-.698.622.637.89-.011a2.89 2.89 0 0 1 2.924 2.924l-.01.89.636.622a2.89 2.89 0 0 1 0 4.134l-.637.622.011.89a2.89 2.89 0 0 1-2.924 2.924l-.89-.01-.622.636a2.89 2.89 0 0 1-4.134 0l-.622-.637-.89.011a2.89 2.89 0 0 1-2.924-2.924l.01-.89-.636-.622a2.89 2.89 0 0 1 0-4.134l.637-.622-.011-.89a2.89 2.89 0 0 1 2.924-2.924l.89.01.622-.636a2.89 2.89 0 0 1 4.134 0l-.715.698a1.89 1.89 0 0 0-2.704 0l-.92.944-1.32-.016a1.89 1.89 0 0 0-1.911 1.912l.016 1.318-.944.921a1.89 1.89 0 0 0 0 2.704l.944.92-.016 1.32a1.89 1.89 0 0 0 1.912 1.911l1.318-.016.921.944a1.89 1.89 0 0 0 2.704 0l.92-.944 1.32.016a1.89 1.89 0 0 0 1.911-1.912l-.016-1.318.944-.921a1.89 1.89 0 0 0 0-2.704l-.944-.92.016-1.32a1.89 1.89 0 0 0-1.912-1.911l-1.318.016z"/>
          </svg>
        </div>
      </div>
      <div class="card-body" style=" background-image: url(img/crinkle.jpeg); background-size: 50%; background-repeat: no-repeat; background-position: right 0px bottom;">
        <h5 class="card-title" style="font-size: 25px;">Terbukanya<br>Pintu Rezeki</h5>
        <p class="card-text" style="color: #B2B2B2;">Allah SWT akan membuka pintu rezeki dari arah yang tidak dikira sebelumnya</p>
      </div>
</div>
</div>
</div>

<!-- card3 -->
<div class="card3" style="margin-left: 12px">
<div class="card text" style="max-width: 16rem; margin-left: 11%">
    <div class="header">
    <div class="icon-bc">
        <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" class="bi bi-shield" viewBox="0 0 16 16" style="margin-top: 15px; margin-left: 12px;">
        <path fill-rule="evenodd" d="M10.354 6.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7 8.793l2.646-2.647a.5.5 0 0 1 .708 0z"/>
        <path d="M5.338 1.59a61.44 61.44 0 0 0-2.837.856.481.481 0 0 0-.328.39c-.554 4.157.726 7.19 2.253 9.188a10.725 10.725 0 0 0 2.287 2.233c.346.244.652.42.893.533.12.057.218.095.293.118a.55.55 0 0 0 .101.025.615.615 0 0 0 .1-.025c.076-.023.174-.061.294-.118.24-.113.547-.29.893-.533a10.726 10.726 0 0 0 2.287-2.233c1.527-1.997 2.807-5.031 2.253-9.188a.48.48 0 0 0-.328-.39c-.651-.213-1.75-.56-2.837-.855C9.552 1.29 8.531 1.067 8 1.067c-.53 0-1.552.223-2.662.524zM5.072.56C6.157.265 7.31 0 8 0s1.843.265 2.928.56c1.11.3 2.229.655 2.887.87a1.54 1.54 0 0 1 1.044 1.262c.596 4.477-.787 7.795-2.465 9.99a11.775 11.775 0 0 1-2.517 2.453 7.159 7.159 0 0 1-1.048.625c-.28.132-.581.24-.829.24s-.548-.108-.829-.24a7.158 7.158 0 0 1-1.048-.625 11.777 11.777 0 0 1-2.517-2.453C1.928 10.487.545 7.169 1.141 2.692A1.54 1.54 0 0 1 2.185 1.43 62.456 62.456 0 0 1 5.072.56z"/>
        </svg>
    </div>
    </div>
  <div class="card-body" style=" background-image: url(img/perisai.jpeg); background-size: 50%; background-repeat: no-repeat; background-position: right 0px bottom;">
    <h5 class="card-title" style="font-size: 25px;">Menjauhkan Dari<br>Bahaya</h5>
    <p class="card-text" style="color: #B2B2B2;">Rasulullah SAW pernah bersabda:"Bsersegeralah untuk bersabda,karena musibah dan bencana tidak bisa mendahului sedekah."</p>
  </div>
</div>

<div class="card text" style="max-width: 16rem; margin-left: 50px">
    <div class="header">
    <div class="icon-bc">
        <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" class="bi bi-stars" viewBox="0 0 16 16" style="margin-top: 15px; margin-left: 12px;">
        <path d="M7.657 6.247c.11-.33.576-.33.686 0l.645 1.937a2.89 2.89 0 0 0 1.829 1.828l1.936.645c.33.11.33.576 0 .686l-1.937.645a2.89 2.89 0 0 0-1.828 1.829l-.645 1.936a.361.361 0 0 1-.686 0l-.645-1.937a2.89 2.89 0 0 0-1.828-1.828l-1.937-.645a.361.361 0 0 1 0-.686l1.937-.645a2.89 2.89 0 0 0 1.828-1.828l.645-1.937zM3.794 1.148a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.924 1.097 1.097l1.162.387a.217.217 0 0 1 0 .412l-1.162.387A1.734 1.734 0 0 0 4.593 5.69l-.387 1.162a.217.217 0 0 1-.412 0L3.407 5.69A1.734 1.734 0 0 0 2.31 4.593l-1.162-.387a.217.217 0 0 1 0-.412l1.162-.387A1.734 1.734 0 0 0 3.407 2.31l.387-1.162zM10.863.099a.145.145 0 0 1 .274 0l.258.774c.115.346.386.617.732.732l.774.258a.145.145 0 0 1 0 .274l-.774.258a1.156 1.156 0 0 0-.732.732l-.258.774a.145.145 0 0 1-.274 0l-.258-.774a1.156 1.156 0 0 0-.732-.732L9.1 2.137a.145.145 0 0 1 0-.274l.774-.258c.346-.115.617-.386.732-.732L10.863.1z"/>
        </svg>
    </div>
    </div>
    <div class="card-body" style=" background-image: url(img/bintang.jpeg); background-size: 50%; background-repeat: no-repeat; background-position: right 0px bottom;">
        <h5 class="card-title" style="font-size: 25px;">Pahala Yang Tak<br>Terputus</h5>
        <p class="card-text" style="color: #B2B2B2;">Ini akan menolong kita di akhirat nantinya,juga dapat menyelamatkannya dari api neraka.</p>
    </div>
</div>
</div>
</div>
<!-- MANFAAT END -->
<br>
<!-- CARA WAKAF START -->
<div id="carawakaf">
<div class="manfaat" style="margin-top: 100px;">
    <h2><span>Cara Melakukan </span>Waqaf,Infaq <br> Shodaqoh.</h2>
    <p style="margin-bottom: 60px;"><b>Berikut Adalah Cara Melakukan Waqaf, Infaq, Shadaqoh Untuk<br>Membantu Pembangunan Masjid Besar SMK Bogor</b></p>
</div>
<!-- card 4 -->
<div class="card-all">
<div class="card4">
<div class="card text" style="max-width: 30rem; margin-left: 8%" height="55px">
    <div class="header" style="margin-top: 20px; margin-left: 20px">
    <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" class="bi bi-1-circle" viewBox="0 0 16 16">
    <path d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8Zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0ZM9.283 4.002V12H7.971V5.338h-.065L6.072 6.656V5.385l1.899-1.383h1.312Z"/>
    </svg>
    </div>
  <div class="card-body">
    <h5 class="card-title" style="font-size: 25px;">Isi Form Data Diri</h5>
    <p class="card-text" style="color: #B2B2B2;">Isikan form pengisian yang disediakan di form data diri,isikan data diri anda dengan teliti.</p>
  </div>
</div>

<div class="card text" style="max-width: 30rem; margin-left: 50px" height="55px">
    <div class="header" style="margin-top: 20px; margin-left: 20px">
    <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" class="bi bi-2-circle" viewBox="0 0 16 16">
    <path d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8Zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0ZM6.646 6.24v.07H5.375v-.064c0-1.213.879-2.402 2.637-2.402 1.582 0 2.613.949 2.613 2.215 0 1.002-.6 1.667-1.287 2.43l-.096.107-1.974 2.22v.077h3.498V12H5.422v-.832l2.97-3.293c.434-.475.903-1.008.903-1.705 0-.744-.557-1.236-1.313-1.236-.843 0-1.336.615-1.336 1.306Z"/>
    </svg>
    </div>
  <div class="card-body">
    <h5 class="card-title" style="font-size: 25px;">Isikan Nominal Shodaqoh</h5>
    <p class="card-text" style="color: #B2B2B2;">Isikan nominal yang akan anda shodaqohkan,pastikan isi nominal dengan seikhlasnya tanpa ada paksaan apapun.</p>
  </div>
</div>
</div>
<!-- card5 -->
<div class="card5" style="margin-top: 30px;">
<div class="card text" style="max-width: 30rem; margin-left: 8%" height="55px">
    <div class="header" style="margin-top: 20px; margin-left: 20px">
    <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" class="bi bi-3-circle" viewBox="0 0 16 16" >
    <path d="M7.918 8.414h-.879V7.342h.838c.78 0 1.348-.522 1.342-1.237 0-.709-.563-1.195-1.348-1.195-.79 0-1.312.498-1.348 1.055H5.275c.036-1.137.95-2.115 2.625-2.121 1.594-.012 2.608.885 2.637 2.062.023 1.137-.885 1.776-1.482 1.875v.07c.703.07 1.71.64 1.734 1.917.024 1.459-1.277 2.396-2.93 2.396-1.705 0-2.707-.967-2.754-2.144H6.33c.059.597.68 1.06 1.541 1.066.973.006 1.6-.563 1.588-1.354-.006-.779-.621-1.318-1.541-1.318Z"/>
    <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0ZM1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8Z"/>
</svg>
    </div>
  <div class="card-body">
    <h5 class="card-title" style="font-size: 25px;">Upload Bukti Pembayaran</h5>
    <p class="card-text" style="color: #B2B2B2;">Pilih metode pembayaran dan upload bukti pembayarannya.</p>
  </div>
</div>

<div class="card text" style="max-width: 30rem; margin-left: 50px;" height="55px">
    <div class="header" style="margin-top: 20px; margin-left: 20px">
    <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" class="bi bi-4-circle" viewBox="0 0 16 16">
    <path d="M7.519 5.057c.22-.352.439-.703.657-1.055h1.933v5.332h1.008v1.107H10.11V12H8.85v-1.559H4.978V9.322c.77-1.427 1.656-2.847 2.542-4.265ZM6.225 9.281v.053H8.85V5.063h-.065c-.867 1.33-1.787 2.806-2.56 4.218Z"/>
    <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0ZM1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8Z"/>
    </svg>
    </div>
  <div class="card-body">
    <h5 class="card-title" style="font-size: 25px;">Verifikasi Pembayaran</h5>
    <p class="card-text" style="color: #B2B2B2;">Pembayaran anda akan di verifikasi oleh admin dan jika terverifikasi nama anda akan tampil.</p>
  </div>
</div>
</div>
</div>
</div>
<!-- CARA WAKAF END -->

<!-- DATA DONATUR -->
<div id="datawakaf">
<div class="manfaat" style="margin-top: 100px;">
    <h2><span>Data Donatur </span>Wakaf, Infaq<br> Shodaqoh.</h2>
    <p style="margin-padding: 60px;"><b>Berikut Adalah Data Donatur Wakaf, Infaq, Shodaqoh Untuk <br> Masjid Besar Smk Wikrama Bogor</b></p>
</div>
<!-- table data -->
<div class="table" style="padding: 100px; padding-top: 60px">

<div style="overflow: auto; width: 1000px; height: 500px;">
<table class="table table-hover" style="overflow: auto;">
     <thead>
         <tr>
             <th>Nama</th>
             <th>Id</th>
             <th>Paket</th>
             <th>Kategori</th>
             <th>Nominal/Barang</th>
             <th></th>
         </tr>
     </thead>
     <tbody>
         <?php foreach( $koneksi->tampilData() as $data ) { ?>
         <tr>
             <td><?php echo $data['nama'] ?></td>
             <td><?php echo $data['id_donatur'] ?></td>
             <td><?php echo $data['paket'] ?></td>
             <td><?php echo $data['kategori'] ?></td>
             <td><?php echo "Rp." . number_format($data['nominal_barang']) ?></td>
             <td>
                 <img src="img/icon-circle.png" alt="" style="margin-left: 10px;">
             </td>
         </tr>
         <?php } ?>
     </tbody>
 </table>
</div>
</div>
</div>

<!-- GALLERY MASJID -->
<div id="gallery">
<div class="manfaat" style="margin-top: 100px;">
    <h2><span>Gallery </span>Masjid Besar SMK<br>Wikrama Bogor</h2>
    <p style="margin-bottom: 60px;"><b>Berikut Adalah Gallery Masjid Besar SMK Wikrama Bogor.</b></p>
</div>

<!-- card gallery -->
<div class="card-gallery" style="margin-left: 18px" style="margin-left: 10px;">
    <div class="d-flex justify-content-evenly">
        <img class="img-card"src="img/img1.jpeg" alt="">
        <img class="img-card"src="img/img2.jpeg" alt="">
        <img class="img-card"src="img/img3.jpeg" alt="">
    </div>
    <div class="d-flex justify-content-evenly" style="margin-top: 40px">
        <img class="img-card"src="img/img4.jpeg" alt="">
        <img class="img-card"src="img/img5.jpeg" alt="">
        <div class="img-card" style="background-color: #1F3984 ">
           <div class="center" style="margin-top: 60%; margin-left: 100px; color: #ffffff;">
              <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16" style="margin-left: 30px;">
              <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"/>
              </svg>
                  <h5>Buka Galeri</h5>
            </div>
        </div>
     </div>
</div>
</div>

<!-- FOOTER -->
<div id="webwikrama">
<footer class="footer-main" style="margin-top: 100px;">
      <div class="footer-grid">
        <section class="footer1">
          <ul class="nav navbar-nav" >
          <li style="display: flex;"><img class="image" src="img/logokecil.png"  width="50px" height="50px" style="margin: 0px; padding: 0px ">SMK WIKRAMA <br>BOGOR</li>          
          </ul></br>
           <h6><b>Alamat</b></h6>
            <p>Jl.Raya Wangun <br>
             Kelurahan Sindang Sari <br>
             Bogor Timur 16720
            </p>
            <hr>
            <h6><b>Telepon</b></h6>
            <p>0251-8242411 / <br> 082221718035(Whatsapp)</p>
            <svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
            <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>
            </svg>
            <svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" fill="currentColor" class="bi bi-twitter" viewBox="0 0 16 16">
            <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z"/>
            </svg>
            <svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
            <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"/>
            </svg>
            <svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" fill="currentColor" class="bi bi-youtube" viewBox="0 0 16 16">
            <path d="M8.051 1.999h.089c.822.003 4.987.033 6.11.335a2.01 2.01 0 0 1 1.415 1.42c.101.38.172.883.22 1.402l.01.104.022.26.008.104c.065.914.073 1.77.074 1.957v.075c-.001.194-.01 1.108-.082 2.06l-.008.105-.009.104c-.05.572-.124 1.14-.235 1.558a2.007 2.007 0 0 1-1.415 1.42c-1.16.312-5.569.334-6.18.335h-.142c-.309 0-1.587-.006-2.927-.052l-.17-.006-.087-.004-.171-.007-.171-.007c-1.11-.049-2.167-.128-2.654-.26a2.007 2.007 0 0 1-1.415-1.419c-.111-.417-.185-.986-.235-1.558L.09 9.82l-.008-.104A31.4 31.4 0 0 1 0 7.68v-.123c.002-.215.01-.958.064-1.778l.007-.103.003-.052.008-.104.022-.26.01-.104c.048-.519.119-1.023.22-1.402a2.007 2.007 0 0 1 1.415-1.42c.487-.13 1.544-.21 2.654-.26l.17-.007.172-.006.086-.003.171-.007A99.788 99.788 0 0 1 7.858 2h.193zM6.4 5.209v4.818l4.157-2.408L6.4 5.209z"/>
            </svg>
        </section>
         <section class="footer2">
            <h6><b>Tentang Wikrama</b></h6>
             <li>Sejarah</li>
             <li>Peraturan Sekolah</li>
             <li>Rencana Strategi</li>
             <li>Yayasan</li>
             <li>Struktur Organisasi</li>
             <li>Cabang</li>
             <li>Penghargaan</li>
             <li>Kerjasama</li>
          </section>
          <section class="footer3">
             <h6><b>Kirim Pesan</b></h6>
             <form action="mailto:bergischhumaira@smkwikrama.sch.id" method="post" enctyype="text/plain">
                  <input type="text" placeholder="Nama" class="inputName">
                  <input type="email" placeholder="Email" class="inputEmail">
                  <textarea class="form-control" name="pesan" placeholder="Pesan" cols="5" rows="3" required></textarea>
                  <button type="submit" style="margin-top: 11px;">Submit</button>
             </form>
          </section>
      </div>
  </footer>
</div>
<div style="color: #1F3984;"><center>Copyright © 2023 - SMK Wikrama Bogor. All Right Reserved.</center></div>
</div>

</body>
</html>
