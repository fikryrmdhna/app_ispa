<!-- container -->
<div class="login">
    <?= form_open('auth'); ?>
    <?= form_error('email', '<div class="alert alert-danger" role="alert">', '</div>') ?>
    <?= form_error('password', '<div class="alert alert-danger" role="alert">', '</div>') ?>
    <h1>Login</h1>
    <div class="input-group mb-3">
        <div class="input-group-prepend">
            <span class="input-group-text" id="basic-addon1"><i class="fa fa-user"></i></span>
        </div>
        <input type="text" class="form-control" placeholder="Email" aria-label="email" aria-describedby="basic-addon1" name="email">
    </div>
    <div class="input-group mb-3">
        <div class="input-group-prepend">
            <span class="input-group-text" id="basic-addon1"><i class="fa fa-lock"></i></span>
        </div>
        <input type="password" class="form-control" placeholder="Password" aria-label="password" aria-describedby="basic-addon1" name="password">
    </div>
    <center>
        <button type="submit" class="btn btn-primary">Submit</button>
    </center>
    <div class="mt-3">
        <center><a href="<?= base_url('home') ?>" style="color: white; text-shadow: 1px 1px 1px rgba(0, 0, 0, 1); margin-top:40px;">Kembali ke Halaman Home</a></center>
    </div>
    <?= form_close() ?>
</div>
<!-- akhir container -->