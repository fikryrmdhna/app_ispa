<div class="content-wrapper">
    <div class="row">
        <div class="col-md-12 grid-margin">
            <div class="d-flex justify-content-between align-items-center">
                <div>
                    <h4 class="font-weight-bold mb-0"><?= $title ?></h4>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-7 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h3 style="text-align:center; margin-bottom:40px; margin-top:20px;">Edit Profil</h3>

                    <?= form_open_multipart('user_profile'); ?>
                    <div class="form-group">
                        <label for="exampleInputName1">Nama</label>
                        <input type="text" class="form-control" id="exampleInputName1" name="nama" value="<?= $user['nama']; ?>">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail3">Email</label>
                        <input type="email" class="form-control" id="exampleInputEmail3" name="email" value="<?= $user['email']; ?>">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword4">Password Lama</label>
                        <input type="text" class="form-control" id="exampleInputPassword4" name="password" value="<?= $user['password']; ?>" readonly>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword4">Password Baru</label>
                        <input type="password" class="form-control" id="exampleInputPassword4" name="password">
                    </div>
                    <!-- <div class="form-group">
                            <label for="exampleSelectGender">Gender</label>
                            <select class="form-control" id="exampleSelectGender">
                                <option>Male</option>
                                <option>Female</option>
                            </select>
                        </div> -->
                    <div class="form-group">
                        <label>Foto</label>
                        <input type="file" name="img" class="file-upload-default">
                        <div class="input-group col-xs-12">
                            <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image">
                            <span class="input-group-append">
                                <button class="file-upload-browse btn btn-primary" type="button" for="img">Browse</button>
                            </span>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary mr-2">Submit</button>
                    <button class="btn btn-light">Cancel</button>
                    </form>
                </div>
            </div>
        </div>

        <div class="col-md-5 grid-margin">
            <div class="card">
                <div class="card-body">
                    <div class="jumbotron jumbotron-fluid" style="background-image: url('assets/img/14019.jpg');background-size: cover; background-repeat: no-repeat; height: 200px; text-align: center; ">

                    </div>
                    <div class="text-center">
                        <img src="<?= base_url() ?>assets/RoyalUI/template/images/faces/face28.jpg" class="rounded-circle" alt="foto" style="height: 100px; width:100px; margin-top:-100px; border:3px solid #fff;">
                    </div>
                    <h4 class="card-title text-center" style="text-align:center;">Profil</h4>
                    <h4 class="text-center"><?= $user['nama']; ?></h4>
                    <p class="font-italic text-center"><?= $user['email']; ?></p>
                    <br>
                    <blockquote class="text-center">"The biggest enemy is ourself"</blockquote>
                    <hr>
                    <div style="text-align:center;">
                        <button type="button" class="btn btn-social-icon btn-google btn-rounded" data-toggle="modal" data-target="#exampleModalCenter"> <i class="ti-twitter"></i></button>
                        <button type="button" class="btn btn-social-icon btn-google btn-rounded" data-toggle="modal" data-target="#exampleModalCenter"> <i class="ti-linkedin"></i></button>
                        <button type="button" class="btn btn-social-icon btn-google btn-rounded" data-toggle="modal" data-target="#exampleModalCenter"> <i class="ti-google"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- partial:partials/_footer.html -->
<footer class="footer">
    <div class="d-sm-flex justify-content-center justify-content-sm-between">
        <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2019 Fikry Ramadhana</span>
    </div>
</footer>
<!-- partial -->