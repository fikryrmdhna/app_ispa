<!-- Jumbotron -->
<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1 class="display-4">Halo, <span><?= $this->session->userdata('nama'); ?></span><br>Silahkan Isi Sesuai<span> Yang Anda Rasa</span></h1>
  </div>
</div>
<!-- Akhir jumbotron -->

<!-- Pertanyaan konsultasi -->
<div class="container panel-konsul">
  <div class="container">
    <?= form_open('konsultasi/diagnosa'); ?>
    <div class="card">
      <h5 class="card-header card2 text-center">Pertanyaan</h5>
      <div class="card-body">
        <h6 class="card-title">Jawablah pertanyaan-pertanyaan di bawah ini dengan teliti sesuai yang anda rasakan!</h6>
        <div class="konsultasi">
          <div class="row justify-content-center">
            <div class="col-12">
              <input type="hidden" name="verify" value="<?= uniqid() ?>">
              <table class="table table-borderless">
                <thead>
                  <tr>
                    <th scope="col">No</th>
                    <th scope="col">Pertanyaan</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $i = 1 ?>
                  <!-- pengulangan untuk menampilkan nama gejala & gejala yang dipilih -->
                  <?php foreach ($gejala as $g) : ?>
                    <tr>
                      <th scope="row"><?= $i ?></th>
                      <td><?= $g['gejala'] ?></td>
                      <td>
                        <label class="toggle">
                          <input class="toggle__input" type="checkbox" name="quest<?= $i; ?>">
                          <span class="toggle__label">
                            <span class="toggle__text"></span>
                          </span>
                        </label>
                      </td>
                    </tr>
                    <?php $i++ ?>
                  <?php endforeach; ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
        <button class="btn btn-primary">Submit</button>
      </div>
    </div>
    <?= form_close(); ?>
  </div>
</div>
<!-- Akhir pertanyaan konsultasi -->