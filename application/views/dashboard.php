<!-- partial -->
<div class="main-panel">
  <div class="content-wrapper">
    <div class="row">
      <div class="col-md-12 grid-margin">
        <div class="d-flex justify-content-between align-items-center">
          <div>
            <h4 class="font-weight-bold mb-0">Dashboard</h4>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-4 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <p class="card-title text-md-center text-xl-left">Jumlah Penyakit</p>
            <div class="d-flex flex-wrap justify-content-between justify-content-md-center justify-content-xl-between align-items-center">
              <h3 class="mb-0 mb-md-2 mb-xl-0 order-md-1 order-xl-0"><?= $jumlah_penyakit ?></h3>
              <i class="ti-calendar icon-md text-muted mb-0 mb-md-3 mb-xl-0"></i>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <p class="card-title text-md-center text-xl-left">Jumlah Pengujian </p>
            <div class="d-flex flex-wrap justify-content-between justify-content-md-center justify-content-xl-between align-items-center">
              <h3 class="mb-0 mb-md-2 mb-xl-0 order-md-1 order-xl-0"><?= $jumlah_uji ?></h3>
              <i class="ti-user icon-md text-muted mb-0 mb-md-3 mb-xl-0"></i>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <p class="card-title text-md-center text-xl-left">JUmlah Data Latih</p>
            <div class="d-flex flex-wrap justify-content-between justify-content-md-center justify-content-xl-between align-items-center">
              <h3 class="mb-0 mb-md-2 mb-xl-0 order-md-1 order-xl-0"><?= $jumlah_datalatih ?></h3>
              <i class="ti-agenda icon-md text-muted mb-0 mb-md-3 mb-xl-0"></i>
            </div>
          </div>
        </div>
      </div>

      <div class="col-md-12">
        <div class="card">
          <div class="card-body">
            <div class="chart-container" style="position: relative; width:100%;">
              <h4 class="text-center">Statistik Data Pengujian</h4>
              <div class="row">
                <div class="col-md-4 mt-4">
                  <p class="text-justify">
                    Berdasarkan data pengujian user yang menggunakan aplikasi sistem pakar ini terdapat <b><?= $jumlah_uji ?></b> data uji yang telah terinput di dalam sistem. Jenis penyakit ISPA yang paling banyak dialami oleh user adalah penyakit:
                  </p><br>
                  <h3 class="text-center"><b></b><?= $dataujitop['nama_penyakit'] ?></br></h3><br>
                  <p class="text-justify">
                    Untuk persebaran penyakit berdasar data uji dapat dilihat pada chart di samping.
                  </p>
                </div>
                <div class="col-md-8">
                  <?php $this->load->view('chart/pie'); ?>
                </div>
              </div>

            </div>
          </div>
        </div>
      </div>

    </div>


  </div>
  <!-- content-wrapper ends -->
  <!-- partial:partials/_footer.html -->
  <footer class="footer">
    <div class="d-sm-flex justify-content-center justify-content-sm-between">
      <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2019 Fikry Ramadhana</span>
    </div>
  </footer>
  <!-- partial -->
</div>
<!-- main-panel ends -->
</div>
<!-- page-body-wrapper ends -->
</div>
<!-- container-scroller -->