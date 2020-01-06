<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12 grid-margin">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <h4 class="font-weight-bold mb-0">Halaman <?= $title ?></h4>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title"><?= $title ?></h4>
                        <div class="table-responsive pt-3">
                            <table class="table table-bordered" id="myTable">
                                <thead>
                                    <tr>
                                        <th style="text-align:center;">Kode Gejala</th>
                                        <th style="text-align:center;">Gejala</th>
                                        <th style="text-align:center;">Action</th>
                                    </tr>
                                </thead>
                                <!-- data-toggle=" modal" data-target="#exampleModalCenter" -->
                                <tbody>
                                    <?php foreach ($datagejala as $gejala) : ?>
                                        <tr>
                                            <td style="text-align:center;"><?= $gejala['kode_gejala']; ?></td>
                                            <td><?= $gejala['gejala'] ?></td>
                                            <td style="text-align:center;">
                                                <button class="btn btn-warning btn-rounded btn-icon btn-inverse-warning" id="btnedit" data-button="<?= $gejala['kode_gejala'] ?>"> <i class="ti-pencil"></i></button>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
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


<!-- MODAL -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="myModal_title">Edit Gejala</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="#" id="form">
                    <div class="form-group">
                        <label for="kode_gejala">Kode Gejala</label>
                        <input type="text" class="form-control" id="kode_gejala" placeholder="Kode Gejala" name="kode_gejala" readonly>
                    </div>
                    <div class="form-group">
                        <label for="gejala">Gejala</label>
                        <input type="text" class="form-control" id="gejala" placeholder="Gejala" name="gejala">
                        <small class="form-text text-danger"><?= form_error('gejala') ?></small>
                    </div>
                    <button type="submit" class="btn btn-primary" name="upload" id="btnsave">Add</button>
                </form>
            </div>
        </div>
    </div>
</div>