<div class="kotak_login shadow bg-white rounded">
    <div class="container text-center" style="padding-top: 14%;">
        <?= $this->session->flashdata('message'); ?>
        <form method="post" action="<?= base_url('home/login') ?>">
            <h2 style="font-family: cursive">Welcome</h2>
            <div class="form-group">
                <input type="text" class="form-control form-control-user mt-3 mx-auto" id="form_login" placeholder="Username" name="uid" value="<?= set_value('uid') ?>">
                <small class="text-danger"><?= form_error('uid') ?></small>
            </div>
            <div class="form-group">
                <input type="password" class="form-control form-control-user mx-auto" id="form_login" placeholder="Password" name="pwd">
                <small class="text-danger"><?= form_error('pwd') ?></small>
            </div>
            <button type="submit" class="btn btn-primary rounded-pill mt-3" style="width: 40%">Login</button>
        </form>
        <a class="navbar-brand mx-auto mt-2" href="<?= base_url('/home/signup') ?>" style="color: black; font-size: 13px; font-family: cursive;">
            Create Account
        </a>
    </div>
    <div class="des text-center">
        <a class="navbar-brand mx-auto" href="<?= base_url() ?>" style="color: white">
            <h2 style="padding-top: 29%; ">Herbal Medical</h2>
            <h6 style="font-family: cursive;">make your healthy</h6>
        </a>
    </div>
</div>