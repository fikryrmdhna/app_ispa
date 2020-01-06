<!-- Jumbotron -->
<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1 class="display-4 muncul">Selamat Datang di<br> Aplikasi <span>Sistem Pakar</span> Prediksi Dini Penyakit <span>ISPA</span></h1>
    <a href="#konsultasi" class="btn btn-success tombol">Konsultasi</a>
  </div>
</div>
<!-- Akhir jumbotron -->

<!-- container -->
<div class="container">

  <!-- info diagnosa -->
  <div class="row justify-content-center">
    <div class="col-12 info-panel">
      <div class="row">
        <div class="col-lg">
          <img src="<?= base_url('assets/') ?>img/lung-cancer.png" alt="lung" class="float-left">
          <h4>ISPA</h4>
          <p>Aplikasi yang dapat mendiagnosa layaknya pakar.</p>
        </div>
        <div class="col-lg">
          <img src="<?= base_url('assets/') ?>img/medicine.png" alt="lung" class="float-left">
          <h4>Penanganan</h4>
          <p>Terdapat info ISPA, penyebab, pencegahan, serta penanganan medis lanjutnya.</p>
        </div>
        <div class="col-lg">
          <img src="<?= base_url('assets/') ?>img/algorithm.png" alt="lung" class="float-left">
          <h4>Metode</h4>
          <p>Aplikasi ini menggunakan metode Naive Bayes </p>
        </div>
      </div>
    </div>
  </div>
  <!-- akhir info diagnosa -->


  <!-- Tentang ISPA -->
  <div class="tentang" id="tentang-ispa">
    <h1>Tentang ISPA</h1>
    <hr>
    <div class="row">
      <div class="col">
        <div class="card mb-3 muncul">
          <div class="card-header card2">
            <h4>ISPA (Infeksi Saluran Pernapasan Akut)</h4>
          </div>
          <div class="card-body" id="card1">
            <p class="card-text text-justify ispa-tentang">Infeksi saluran pernapasan akut atau ISPA adalah infeksi akut yang menyerang satu komponen saluran pernapasan bagian atas. Bagian saluran pernapasan atas yang terkena bisa meliputi hidung, sinus, faring, dan laring. Bagian sistem pernapasan tersebut akan mengarahkan udara yang kita hirup dari luar ke trakea dan akhirnya ke paru-paru di mana respirasi berlangsung.</p>
          </div>
        </div>

        <!-- Accordion Tentang ISPA -->
        <div class="accordion" id="accordionExample">
          <div class="card card1 muncul">
            <div class="card-header card2" id="headingOne" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne" style="color:white; text-transform:uppercase; padding-left:30px;" >
              <h6 class="mb-0">
                Penyebab
              </h6>
            </div>

            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
              <div class="card-body">
                <h5 class="card-title">Apa yang menjadi penyebab ISPA?</h5>
                <p class="card-text text-justify">Penyakit ISPA adalah kondisi yang umumnya disebabkan oleh serangan langsung ke saluran pernapasan bagian atas melalui mata, mulut dan hidung. Penyebab ISPA adalah virus atau bakteri.

                  Virus utama penyebab ISPA adalah rhinovirus dan coronavirus. Virus lain yang juga menjadi penyebab ISPA adalah virus parainfluenza, respiratory syncytial virus, dan adenovirus. Jika Anda terkena infeksi virus tersebut, Anda berisiko mengalami pilek serta pneumonia. Risiko pneumonia lebih tinggi terjadi pada bayi dan anak-anak. Virus penyebab ISPA dapat hidup selama berjam-jam pada objek seperti mainan atau tas tangan.

                  Penularan virus penyebab ISPA dapat terjadi melalui kontak dengan orang yang terinfeksi atau melalui barang-barang kepunyaan mereka dapat menjadi penyebab utama penyebaran virus.

                  Jika Anda menyentuh mulut, hidung, atau mata setelah menyentuh benda yang terkontaminasi, Anda cenderung akan terkena virus penyebab ISPA . Selain itu, virus penyebab ISPA sering menyebar dari orang ke orang melalui bersin atau batuk.</p>
              </div>
            </div>
          </div>
          <div class="card card1 muncul">
            <div class="card-header card2" id="headingTwo" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo" style="color:white; text-transform:uppercase; padding-left:30px;">
              <h6 class="mb-0">
                  Pencegahan
              </h6>
            </div>
            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
              <div class="card-body text-justify">
                <h5 class="card-title">Bagaimana cara mencegah agar tidak tertular infeksi saluran pernapasan atas?</h5>
                <p class="card-text text-justify">
                  Ada beberapa hal yang sederhana yang dapat Anda lakukan untuk menghindari penularan infeksi saluran pernafasan atau menyebarkan infeksi kepada orang lain jika Anda memilikinya.

                  Hal-hal ini mungkin terdengar sederhana, tetapi penelitian menunjukkan mereka sangat efektif untuk mengurangi penyebaran infeksi, bahkan infeksi yang serius. Tindakan pencegahan utama ISPA adalah menerapkan perilaku hidup bersih dan sehat. Beberapa cara yang dapat dilakukan, yaitu:
                  <ul type="disc">

                    <li>Cuci tangan secara teratur, terutama setelah beraktivitas di tempat umum.</li>
                    <li>Hindari menyentuh wajah, terutama bagian mulut, hidung, dan mata, untuk menghindari penularan virus dan bakteri.</li>
                    <li>Gunakan sapu tangan atau tisu untuk menutup mulut ketika bersin atau batuk. Hal ini dilakukan untuk mencegah penyebaran penyakit ke orang lain.</li>
                    <li>Perbanyak konsumsi makanan kaya vitamin, terutama vitamin C, untuk meningkatkan daya tahan tubuh.</li>
                    <li>Olahraga secara teratur.</li>
                    <li>Berhenti merokok.</li>
                    <li>Lakukan vaksinasi, baik vaksin MMR, influenza, atau pneumonia. Diskusikan dengan dokter mengenai keperluan, manfaat, dan risiko dari vaksinasi ini.</li>

                  </ul>
                </p>
              </div>
            </div>
          </div>
          <div class="card card1 muncul">
            <div class="card-header card2" id="headingThree" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree" style="color:white; text-transform:uppercase; padding-left:30px;">
              <h6 class="mb-0">
                  Jenis-Jenis Penyakit ISPA
              </h6>
            </div>
            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
              <div class="card-body">
                <div class="row justify-content-center">




                  <div class="col-md-4 stretch-card mt-4">
                    <div class="card">
                      <img class="card-img-top" src="<?= base_url() ?>assets/img/sinusitis.jpg" alt="Card image cap">
                      <div class="card-body">
                        <p class="card-text">
                          <h5>1. <?= $datapenyakit[0]['nama_penyakit'] ?></h5><br>

                          <p class="text-justify">
                            Sinusitis adalah inflamasi atau peradangan pada dinding sinus. Sinus merupakan rongga kecil yang saling terhubung melalui saluran udara di dalam tulang tengkorak. Sinus terletak di bagian belakang tulang dahi, bagian dalam struktur tulang pipi, kedua sisi batang hidung, dan belakang mata. Sinus menghasilkan lendir atau mukus yang berfungsi untuk menyaring dan membersihkan bakteri atau partikel lain dalam udara yang dihirup. Selain itu, sinus juga berfungsi untuk membantu mengendalikan suhu dan kelembapan udara yang masuk ke paru.
                          </p>
                        </p>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4 stretch-card  mt-4">
                    <div class="card">
                      <img class="card-img-top" src="<?= base_url() ?>assets/img/radang.jpg" alt="Card image cap">
                      <div class="card-body">
                        <p class="card-text">
                          <h5>2. <?= $datapenyakit[1]['nama_penyakit'] ?></h5><br>
                          <p class="text-justify">
                            Sakit tenggorokan adalah rasa nyeri, iritasi, atau kering pada tenggorokan yang dapat terjadi karena infeksi virus atau bakteri. Saat sakit tenggorokan, nyeri yang dialami oleh penderita akan makin terasa saat menelan makanan atau minuman.

                            Sakit tenggorokan dapat dialami semua usia, baik anak-anak maupun orang dewasa. Sakit tenggorokan karena infeksi virus adalah yang paling sering terjadi, dan biasanya dapat pulih dengan sendirinya dalam waktu satu minggu. Sebaliknya, sakit tenggorokan karena infeksi bakteri perlu diobati.
                          </p>
                        </p>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4 stretch-card  mt-4">
                    <div class="card">
                      <img class="card-img-top" src="<?= base_url() ?>assets/img/bronkitis.jpg" alt="Card image cap">
                      <div class="card-body">
                        <p class="card-text">
                          <h5>3. <?= $datapenyakit[2]['nama_penyakit'] ?></h5><br>
                          <p class="text-justify">
                            Bronkitis adalah peradangan yang terjadi pada saluran utama pernapasan atau bronkus. Bronkus berfungsi sebagai saluran yang membawa udara dari dan menuju paru-paru. Seseorang yang menderita bronkitis biasanya ditandai dengan munculnya gejala batuk yang berlangsung selama satu minggu atau lebih.
                          </p>
                        </p>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4 stretch-card  mt-4">
                    <div class="card">
                      <img class="card-img-top" src="<?= base_url() ?>assets/img/bronkiolitis.jpg" alt="Card image cap">
                      <div class="card-body">
                        <p class="card-text">
                          <h5>4. <?= $datapenyakit[3]['nama_penyakit'] ?></h5><br>
                          <p class="text-justify">
                            Bronkiolitis adalah infeksi saluran napas yang menyebabkan terjadinya radang dan penyumbatan di dalam bronkiolus atau saluran pernapasan kecil di dalam paru-paru. Kondisi ini umumnya dialami oleh bayi sampai anak-anak usia dua tahun ke bawah.
                          </p>
                        </p>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4 stretch-card  mt-4">
                    <div class="card">
                      <img class="card-img-top" src="<?= base_url() ?>assets/img/pneumonia.jpg" alt="Card image cap">
                      <div class="card-body">
                        <p class="card-text">
                          <h5>5. <?= $datapenyakit[4]['nama_penyakit'] ?></h5><br>
                          <p class="text-justify">
                            Pneumonia atau dikenal juga dengan istilah paru-paru basah adalah infeksi yang mengakibatkan peradangan pada kantong-kantong udara di salah satu atau kedua paru-paru. Pada penderita pneumonia, sekumpulan kantong-kantong udara kecil di ujung saluran pernapasan dalam paru-paru (alveoli) akan meradang dan dipenuhi cairan atau nanah. Akibatnya, penderita mengalami sesak napas, batuk berdahak, demam, atau menggigil.
                          </p>
                        </p>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4 stretch-card  mt-4">
                    <div class="card">
                      <img class="card-img-top" src="<?= base_url() ?>assets/img/pleuritis.jpg" alt="Card image cap">
                      <div class="card-body">
                        <p class="card-text">
                          <h5>6. <?= $datapenyakit[5]['nama_penyakit'] ?></h5><br>
                          <p class="text-justify">
                            Pleurisy atau pleuritis adalah peradangan pada selaput pembungkus organ paru-paru atau pleura. Kondisi ini menyebabkan penderitanya merasakan nyeri dada yang menusuk, terutama ketika bernapas.

                            Pleura adalah selaput tipis yang menyelimuti paru-paru dan dinding dada bagian dalam. Pleura terdiri dari dua lapis. Kedua lapisan ini berperan menjaga paru-paru agar tidak bergesekan dengan dinding rongga dada. Di antara kedua lapisan paru ini, terdapat cairan pleura yang berfungsi sebagai pelumas dan membantu mengurangi gesekan saat bernapas.
                          </p>
                        </p>
                      </div>
                    </div>
                  </div>

                </div>
              </div>
            </div>
          </div>
        </div><br>

      </div>
    </div>
  </div>
  <!-- akhir Tentang ISPA-->
</div>
<!-- akhir container -->

<!-- Jumbotron -->
<div class="jumbotron jumbotron-fluid jumbotron-2">
  <div class="container" id="konsultasi">
    <h1 class="display-4-2" id="login"><span>Konsultasi</span></h1>

    <!-- Konsultasi User -->
    <?= form_open('home/konsul'); ?>
    <div class="row">
      <div class="col-md-6 col-sm-6">
        <div class="container" id="logo-konsul">
          <img src="<?= base_url() ?>assets/RoyalUI/template/images/sispak-stroke.png" width="400px" class="img-responsive" style="background:none;">
        </div>
      </div>
      <div class="col-md-6 col-sm-6">
        <div class="card p-5 card-konsul">
          <h6 class="title-konsul">Silahkan Isi Data di Bawah Ini</h6>
          <div class="card-body">
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1"><i class="fa fa-fw fa-user"></i></span>
              </div>
              <input type="text" class="form-control" placeholder="Tulis Nama Anda Disini..." aria-label="email" aria-describedby="basic-addon1" name="nama">
            </div>
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1"><i class="fa fa-fw fa-envelope"></i></span>
              </div>
              <input type="text" class="form-control" placeholder="Tulis Alamat Email Anda Disini..." aria-label="password" aria-describedby="basic-addon1" name="email">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </div>
        </div>
      </div>
    </div>

    <?= form_close(); ?>
    <!-- Akhir Konsultasi User -->
  </div>
</div>
<!-- Akhir jumbotron -->

<!-- ABOUT -->
<div class="about">
  <div class="container text-center" id="about">
    <h1>About</h1>
    <div class="row">
      <div class="col-md-6 col-sm-12 col-xs-12 text-justify float-right mt-4" id="about-text" style="border-right: 1px solid #c5c7c9;">
        <center><img src="assets/img/fikry.png" width="200px" class="img-responsive mt-5"></center>
        <h4 class="text-center">Fikry Ramadhana</h4>
        <h6 class="text-center">Mahasiswa Sistem Informasi | Universitas Nasional</h6>
      </div>
      <div class="col-md-6 col-sm-12 col-xs-12 float-left text-justify" id="about-text">
        <center><img src="<?= base_url() ?>assets/RoyalUI/template/images/sispak-stroke.png" width="400px" class="img-responsive"></center>
        <h4 class="text-center">sISPAk (Sistem Pakar ISPA)</h4>
        Aplikasi sistem pakar ini dapat membantu masyarakat dalam mendeteksi atau mendiagnosa jenis penyakit ISPA yang diderita. Aplikasi ini dibuat dengan menggunakan <span>Algoritma Naive Bayes</span>, yaitu metoda klasifikasi menggunakan metode probabilitas dan statistik.
      </div>
    </div>
  </div>
</div>
<!-- akhir about -->

<!-- Back to top -->
<a href="#" class="ignielToTop"></a>
<!-- akhir back to top -->