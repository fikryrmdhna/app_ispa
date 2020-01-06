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
            <!-- Navigation -->
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-header">
                        <ul class="nav nav-tabs card-header-tabs" role="tablist">
                            <li class="nav-item" role="presentation">
                                <a class="nav-link active" href="#sinusitis" aria-controls="sinusitis" role="tab" data-toggle="tab">Sinusitis</a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" href="#radang" aria-controls="radang" role="tab" data-toggle="tab">Radang Tenggorokan</a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" href="#bronkitis" aria-controls="bronkitis" role="tab" data-toggle="tab">Bronkitis</a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" href="#bronkiolitis" aria-controls="bronkiolitis" role="tab" data-toggle="tab">Bronkiolitis</a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" href="#pneumonia" aria-controls="pneumonia" role="tab" data-toggle="tab">Pneumonia</a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" href="#pleuritis" aria-controls="pleuritis" role="tab" data-toggle="tab">Pleuritis</a>
                            </li>
                        </ul>
                    </div>
                    <div class="tab-content card-body mt-3">
                        <div role="tabpanel" class="tab-pane active" id="sinusitis">
                            <div class="row">
                                <div class="col-md-12 grid-margin">
                                    <div class="d-flex justify-content-between align-items-center float-right mr-4">
                                        <div>
                                            <h4 class="font-weight-bold mb-0"><a class="btn btn-md btn-outline-primary btn-rounded" href="<?= base_url() ?>penyakit/edit_penyakit/<?= $datapenyakit[0]['kode_penyakit'] ?>">Edit</a></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <b>Kode Penyakit:</b> <span class="badge  badge-info"><?= $datapenyakit[0]['kode_penyakit'] ?></span><br><br>
                            <b>Nama Penyakit:</b> <?= $datapenyakit[0]['nama_penyakit'] ?><br><br>
                            <b>Penyebab:</b><br> <?= $datapenyakit[0]['penyebab'] ?><br><br>
                            <b>Solusi:</b><br> <?= $datapenyakit[0]['solusi'] ?><br><br>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="radang">
                            <div class="row">
                                <div class="col-md-12 grid-margin">
                                    <div class="d-flex justify-content-between align-items-center float-right mr-4">
                                        <div>
                                            <h4 class="font-weight-bold mb-0"><a class="btn btn-md btn-outline-primary btn-rounded" href="<?= base_url() ?>penyakit/edit_penyakit/<?= $datapenyakit[1]['kode_penyakit'] ?>">Edit</a></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <b>Kode Penyakit:</b> <span class="badge  badge-info"><?= $datapenyakit[1]['kode_penyakit'] ?></span><br><br>
                            <b>Nama Penyakit:</b> <?= $datapenyakit[1]['nama_penyakit'] ?><br><br>
                            <b>Penyebab:</b><br> <?= $datapenyakit[1]['penyebab'] ?><br><br>
                            <b>Solusi:</b><br> <?= $datapenyakit[1]['solusi'] ?><br><br>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="bronkitis">
                            <div class="row">
                                <div class="col-md-12 grid-margin">
                                    <div class="d-flex justify-content-between align-items-center float-right mr-4">
                                        <div>
                                            <h4 class="font-weight-bold mb-0"><a class="btn btn-md btn-outline-primary btn-rounded" href="<?= base_url() ?>penyakit/edit_penyakit/<?= $datapenyakit[2]['kode_penyakit'] ?>"> Edit</a> </h4>
                                        </div>
                                    </div>
                                </div>
                            </div> <b>Kode Penyakit:</b> <span class="badge  badge-info"><?= $datapenyakit[2]['kode_penyakit'] ?></span><br><br>
                            <b>Nama Penyakit:</b> <?= $datapenyakit[2]['nama_penyakit'] ?><br><br>
                            <b>Penyebab:</b><br> <?= $datapenyakit[2]['penyebab'] ?><br><br>
                            <b>Solusi:</b><br> <?= $datapenyakit[2]['solusi'] ?><br><br>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="bronkiolitis">
                            <div class="row">
                                <div class="col-md-12 grid-margin">
                                    <div class="d-flex justify-content-between align-items-center float-right mr-4">
                                        <div>
                                            <h4 class="font-weight-bold mb-0"><a class="btn btn-md btn-outline-primary btn-rounded" href="<?= base_url() ?>penyakit/edit_penyakit/<?= $datapenyakit[3]['kode_penyakit'] ?>">Edit</a></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <b>Kode Penyakit:</b> <span class="badge  badge-info"><?= $datapenyakit[3]['kode_penyakit'] ?></span><br><br>
                            <b>Nama Penyakit:</b> <?= $datapenyakit[3]['nama_penyakit'] ?><br><br>
                            <b>Penyebab:</b><br> <?= $datapenyakit[3]['penyebab'] ?><br><br>
                            <b>Solusi:</b><br> <?= $datapenyakit[3]['solusi'] ?><br><br>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="pneumonia">
                            <div class="row">
                                <div class="col-md-12 grid-margin">
                                    <div class="d-flex justify-content-between align-items-center float-right mr-4">
                                        <div>
                                            <h4 class="font-weight-bold mb-0"><a class="btn btn-md btn-outline-primary btn-rounded" href="<?= base_url() ?>penyakit/edit_penyakit/<?= $datapenyakit[4]['kode_penyakit'] ?>">Edit</a></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <b>Kode Penyakit:</b> <span class="badge  badge-info"><?= $datapenyakit[4]['kode_penyakit'] ?></span><br><br>
                            <b>Nama Penyakit:</b> <?= $datapenyakit[4]['nama_penyakit'] ?><br><br>
                            <b>Penyebab:</b><br> <?= $datapenyakit[4]['penyebab'] ?><br><br>
                            <b>Solusi:</b><br> <?= $datapenyakit[4]['solusi'] ?><br><br>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="pleuritis">
                            <div class="row">
                                <div class="col-md-12 grid-margin">
                                    <div class="d-flex justify-content-between align-items-center float-right mr-4">
                                        <div>
                                            <h4 class="font-weight-bold mb-0"><a class="btn btn-md btn-outline-primary btn-rounded" href="<?= base_url() ?>penyakit/edit_penyakit/<?= $datapenyakit[5]['kode_penyakit'] ?>">Edit</a></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <b>Kode Penyakit:</b> <span class="badge  badge-info"><?= $datapenyakit[5]['kode_penyakit'] ?></span><br><br>
                            <b>Nama Penyakit:</b> <?= $datapenyakit[5]['nama_penyakit'] ?><br><br>
                            <b>Penyebab:</b><br> <?= $datapenyakit[5]['penyebab'] ?><br><br>
                            <b>Solusi:</b><br> <?= $datapenyakit[5]['solusi'] ?><br><br>
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