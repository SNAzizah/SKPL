<div class="kotak_login shadow bg-white rounded">
    <div class="container text-center" style="padding-top: 10%;">
        <form method="post" action="<?= base_url('home/signup') ?>">
            <h2 style="font-family: cursive">Join Now</h2>
            <div class="form-group">
                <input type="text" class="form-control form-control-user mt-2 mx-auto" id="form_login" placeholder="Username" name="uid" value="<?= set_value('uid') ?>">
                <small class="text-danger"><?= form_error('uid') ?></small>
            </div>
            <div class="form-group">
                <input type="password" class="form-control form-control-user mx-auto" id="form_login" placeholder="Password" name="pwd">
                <small class="text-danger"><?= form_error('pwd') ?></small>
            </div>
            <div class="form_group">
                <input type="password" class="form-control form-control-user mx-auto" id="form_login" placeholder="Repeat Password" name="pwd2">
                <small class="text-danger"><?= form_error('pwd2') ?></small>
            </div>
            <div class="form_group">
                <input type="text" class="form-control form-control-user mx-auto mt-3" id="form_login" placeholder="Email" name="email" value="<?= set_value('email') ?>">
                <small class="text-danger"><?= form_error('email') ?></small>
            </div>
            <button type="submit" class="btn btn-primary rounded-pill mt-4" style="width: 40%">Sign Up</button>
        </form>
    </div>
    <div class="des text-center">
        <a class="navbar-brand mx-auto" href="<?= base_url() ?>" style="color: white">
            <h2 style="padding-top: 20%; ">Herbal Medical</h2>
            <h6 style="font-family: cursive;">make your healthy</h6>
        </a>
    </div>
</div>