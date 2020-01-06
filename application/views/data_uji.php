<!-- partial -->
<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12 grid-margin">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <h4 class="font-weight-bold mb-0">Halaman <?= $title; ?></h4>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">

            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Data Uji</h4>

                        <div class="table-responsive">
                            <table class="table table-striped table-hover" id="myTable">
                                <thead>
                                    <tr>
                                        <th>Tanggal</th>
                                        <th>Nama</th>
                                        <th>Email</th>
                                        <th>Gejala 1</th>
                                        <th>Gejala 2</th>
                                        <th>Gejala 3</th>
                                        <th>Gejala 4</th>
                                        <th>Gejala 5</th>
                                        <th>Gejala 6</th>
                                        <th>Gejala 7</th>
                                        <th>Gejala 8</th>
                                        <th>Gejala 9</th>
                                        <th>Gejala 10</th>
                                        <th>Gejala 11</th>
                                        <th>Gejala 12</th>
                                        <th>Gejala 13</th>
                                        <th>Gejala 14</th>
                                        <th>Gejala 15</th>
                                        <th>Gejala 16</th>
                                        <th>Gejala 17</th>
                                        <th>Gejala 18</th>
                                        <th>Gejala 19</th>
                                        <th>Gejala 20</th>
                                        <th>Gejala 21</th>
                                        <th>Gejala 22</th>
                                        <th>Gejala 23</th>
                                        <th>Gejala 24</th>
                                        <th>Gejala 25</th>
                                        <th>Gejala 26</th>
                                        <th>Gejala 27</th>
                                        <th>Gejala 28</th>
                                        <th>Gejala 29</th>
                                        <th>Gejala 30</th>
                                        <th>Gejala 31</th>
                                        <th>Jenis Penyakit</th>
                                        <th>Action</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($datauji as $du) : ?>
                                        <tr>
                                            <td><?= date('d F Y', $du['date_created']) ?></td>
                                            <td><?= $du['nama']; ?></td>
                                            <td><?= $du['email']; ?></td>
                                            <td><?= $du['gejala1']; ?></td>
                                            <td><?= $du['gejala2']; ?></td>
                                            <td><?= $du['gejala3']; ?></td>
                                            <td><?= $du['gejala4']; ?></td>
                                            <td><?= $du['gejala5']; ?></td>
                                            <td><?= $du['gejala6']; ?></td>
                                            <td><?= $du['gejala7']; ?></td>
                                            <td><?= $du['gejala8']; ?></td>
                                            <td><?= $du['gejala9']; ?></td>
                                            <td><?= $du['gejala10']; ?></td>
                                            <td><?= $du['gejala11']; ?></td>
                                            <td><?= $du['gejala12']; ?></td>
                                            <td><?= $du['gejala13']; ?></td>
                                            <td><?= $du['gejala14']; ?></td>
                                            <td><?= $du['gejala15']; ?></td>
                                            <td><?= $du['gejala16']; ?></td>
                                            <td><?= $du['gejala17']; ?></td>
                                            <td><?= $du['gejala18']; ?></td>
                                            <td><?= $du['gejala19']; ?></td>
                                            <td><?= $du['gejala20']; ?></td>
                                            <td><?= $du['gejala21']; ?></td>
                                            <td><?= $du['gejala22']; ?></td>
                                            <td><?= $du['gejala23']; ?></td>
                                            <td><?= $du['gejala24']; ?></td>
                                            <td><?= $du['gejala25']; ?></td>
                                            <td><?= $du['gejala26']; ?></td>
                                            <td><?= $du['gejala27']; ?></td>
                                            <td><?= $du['gejala28']; ?></td>
                                            <td><?= $du['gejala29']; ?></td>
                                            <td><?= $du['gejala30']; ?></td>
                                            <td><?= $du['gejala31']; ?></td>
                                            <td><?= $du['result']; ?></td>
                                            <td><a class="btn btn-inverse-danger" href="<?= base_url() ?>data_uji/hapus/<?= $du['kode_pengujian'] ?>" onclick="return confirm('Apa Anda Yakin?');"><i class="ti-trash">Delete</i></a></td>
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
<!-- main-panel ends -->
</div>
<!-- page-body-wrapper ends -->
</div>
<!-- container-scroller -->