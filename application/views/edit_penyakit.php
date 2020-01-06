<div class="main-panel">
    <div class="content-wrapper">
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title"> Halaman <?= $title ?></h4>
                    <?= form_open(); ?>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-2">
                                <label for="kode_penyakit">Kode Penyakit</label>
                                <input type="text" class="form-control" id="kode_penyakit" placeholder="Kode Penyakit" name="kode_penyakit" value="<?= $datapenyakit['kode_penyakit']; ?>" readonly>
                            </div>

                            <div class="col-md-5">
                                <label for="nama_penyakit">Nama Penyakit</label>
                                <input type="text" class="form-control" id="nama_penyakit" placeholder="Nama Penyakit" name="nama_penyakit" value="<?= $datapenyakit['nama_penyakit']; ?>" readonly>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="penyebab">Penyebab</label>
                        <textarea class="form-control" id="penyebab" rows="3" name="penyebab"><?= $datapenyakit['penyebab']; ?></textarea>
                    </div>
                    <div class="form-group">
                        <label for="solusi">Solusi</label>
                        <textarea class="form-control" id="solusi" rows="3" name="solusi"><?= $datapenyakit['solusi']; ?></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary" name="upload" id="btnsavepenyakit">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>