<!-- partial -->
<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-6 grid-margin">
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
                        <h4 class="card-title">Data Latih</h4>

                        <div class="table-responsive">
                            <table class="table table-striped table-hover" id="myTable">
                                <thead>
                                    <tr>
                                        <th>Kode Latih</th>
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

                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($datalatih as $latih) : ?>
                                        <tr>
                                            <td><?= $latih['kode_datalatih']; ?></td>
                                            <td><?= $latih['gejala1']; ?></td>
                                            <td><?= $latih['gejala2']; ?></td>
                                            <td><?= $latih['gejala3']; ?></td>
                                            <td><?= $latih['gejala4']; ?></td>
                                            <td><?= $latih['gejala5']; ?></td>
                                            <td><?= $latih['gejala6']; ?></td>
                                            <td><?= $latih['gejala7']; ?></td>
                                            <td><?= $latih['gejala8']; ?></td>
                                            <td><?= $latih['gejala9']; ?></td>
                                            <td><?= $latih['gejala10']; ?></td>
                                            <td><?= $latih['gejala11']; ?></td>
                                            <td><?= $latih['gejala12']; ?></td>
                                            <td><?= $latih['gejala13']; ?></td>
                                            <td><?= $latih['gejala14']; ?></td>
                                            <td><?= $latih['gejala15']; ?></td>
                                            <td><?= $latih['gejala16']; ?></td>
                                            <td><?= $latih['gejala17']; ?></td>
                                            <td><?= $latih['gejala18']; ?></td>
                                            <td><?= $latih['gejala19']; ?></td>
                                            <td><?= $latih['gejala20']; ?></td>
                                            <td><?= $latih['gejala21']; ?></td>
                                            <td><?= $latih['gejala22']; ?></td>
                                            <td><?= $latih['gejala23']; ?></td>
                                            <td><?= $latih['gejala24']; ?></td>
                                            <td><?= $latih['gejala25']; ?></td>
                                            <td><?= $latih['gejala26']; ?></td>
                                            <td><?= $latih['gejala27']; ?></td>
                                            <td><?= $latih['gejala28']; ?></td>
                                            <td><?= $latih['gejala29']; ?></td>
                                            <td><?= $latih['gejala30']; ?></td>
                                            <td><?= $latih['gejala31']; ?></td>
                                            <td><?= $latih['kategori']; ?></td>
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