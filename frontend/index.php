<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Kongsi OLE777</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    
    <link href='https://fonts.googleapis.com/css?family=Open Sans' rel='stylesheet'>
    <link rel="stylesheet" href="resources/css/main.css">
  </head>
  <body>
    <section class="top">
      <header>
        <div class="container-fluid head1">
          <div class="container">
            <div class="d-flex justify-content-between align-items-center head1">
              <div>
                <h1 class="white">KONGSI
                  <img src="resources/images/assets/ole777-white.png" alt="ole777-white" height="43"/>
                </h1>
              </div>
              <div>
                <button type="button" class="headb login">Login</button>
                <button type="button" class="headb daftar">Daftar sekarang</button>
              </div>
            </div>
          </div>
        </div>
        <div class="container-fluid head2">
          <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                  <li class="active">
                    <a class="link active" href="#">Tentang OLE777</a>
                  </li>
                  <li class="nav-item">
                    <a class="link" href="#">Komisi</a>
                  </li>
                  <li class="nav-item">
                    <a class="link" href="#">Peraturan</a>
                  </li>
                  <li class="nav-item">
                    <a class="link" href="#">Pertanyaan & Jawaban</a>
                  </li>
                  <li class=" box">
                    <a class="link box" href="#">OLE777 Official</a>
                  </li>
                </ul>
              </div>
            </nav>
          </div>
        </div>
      </header>
      <?php
        $img = file_get_contents('img.json');
        $img_data = json_decode($img,true);
      ?>
      <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
        <?php foreach ($img_data as $value) { ?>
          <?php $is_active = $value['id'] == 1 ? 'active' : ''; ?>
            <div class="carousel-item <?php echo($is_active) ?>">
            <img class="d-block w-100" src="<?php echo($value['img']) ?>" alt="<?php echo($value['name']) ?>">
          </div>
        <?php } ?>
        </div>
      </div>
    </section>
    <section class="mid">
      <div class="container-fluid bod1">
        <div class="container">
          <div class="d-flex justify-content-around align-items-center bod1">
            <div class="stats">
              <img src="resources/images/assets/img-cta-3.jpg" alt="img-cta3" width="384" height="200"/>
            </div>
            <div class="stats">
              <img src="resources/images/assets/img-cta-2.jpg" alt="img-cta2" width="384" height="200"/>
            </div>
            <div class="stats">
              <img src="resources/images/assets/img-cta-1.jpg" alt="img-cta1" width="384" height="200"/>
            </div>
          </div>
        </div>
      </div>
      <div class="container-fluid bod2">
        <div class="container bod2a">
          <p class="bodtext"><b>Kongsi OLE777</b> adalah program OLE777 Affiliate bola vang memberikan member dan non-member penghasilan dengan platform OLE777
Berdiri sejak tahun 2014, OLE777 memberikan hiburan online dengan kenyamanan, kualitas produk, layanan pelanggan terbaik, dan keuntungan bag untuk seluruh player, dan anggota Kongsi OLE777 Affiliate Bola.</p>
          <p class="bodtext"><b>Langkah-langkah mendapatkan komisi dengan menjadi Kongsi OLE777:</b></p>
          <ul class="nav-list">
            <li class="nav-list-item"><span>1</span>Daftar dengan klik tombol " Daftar Sekarang" atau melalui link vang diberikan oleh tim kami.</li>
            <li class="nav-list-item"><span>1</span>lakukan Pendaftaran</li>
            <li class="nav-list-item"><span>1</span>Sebarkan link khusus yang Anda dapat dari akun Anda</li>
            <li class="nav-list-item"><span>1</span>Anda bisa i nenyebarkan Ink melalul akun-akun soslal Media Anda, sepert Facebook, instagram, Yourube, iwitter, dan lain-lain.</li>
          </ul>
          <div class="d-flex justify-content-around align-items-center">
            <div class="" style="text-align: justify;">
              <img src="resources/images/assets/img-group.svg" alt="img-group" width="80" height="100"/>
              <!-- <h4>Tim Pembavaran yang Profesional</h4>
              <p>Metode pembayaran beragam dan terpercava. Setiap dana pemain aman dan terjamin</p> -->
            </div>
            <div class="">
              <img src="resources/images/assets/img-domino.svg" alt="img-domino" width="80" height="100"/>
            </div>
            <div class="">
              <img src="resources/images/assets/img-document.svg" alt="img-document" width="80" height="100"/>
            </div>
            <div class="">
              <img src="resources/images/assets/img-settings.svg" alt="img-settings" width="80" height="100"/>
            </div>
          </div>
        </div>
      </div>
    </section>
    <script src="resources/js/main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
