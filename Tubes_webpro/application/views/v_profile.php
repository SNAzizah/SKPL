<div class="kotak_profile shadow bg-white rounded">
    <div class="desP text-center py-3">
        <a class="navbar-brand mx-auto" href="<?= base_url() ?>" style="color: white">
            <h2>Herbal Medical</h2>
            <h6 style="font-family: cursive;">make your healthy</h6>
        </a>
    </div>
    <div class="container text-center pt-4">
        <?= $this->session->flashdata('message'); ?>
        <form method="post" action="<?= base_url('home/profile') ?>">
            <?php
            $temp = $this->session->userdata('arrData');
            ?>
            <h2 style="font-family: cursive">Profile</h2>
            <div class="form-group">
                <input type="text" class="form-control form-control-user mt-2 mx-auto" id="form_login" placeholder="Nickname" name="nick" value="<?= $temp['nickname'] ?>">
            </div>
            <div class="form-group">
                <input type="text" class="form-control form-control-user mt-2 mx-auto" id="form_login" placeholder="Username" name="uid" value="<?= $temp['username'] ?>" readonly style="background-color: transparent">
            </div>
            <div class="form-group">
                <input type="password" class="form-control form-control-user mx-auto" id="form_login" placeholder="Password" name="pwd" value="<?= $temp['password'] ?>">
                <small class="text-danger"><?= form_error('pwd') ?></small>
            </div>
            <div class="form_group">
                <input type="password" class="form-control form-control-user mx-auto" id="form_login" placeholder="Repeat Password" name="pwd2" value="<?= $temp['password'] ?>">
                <small class="text-danger"><?= form_error('pwd2') ?></small>
            </div>
            <div class="form_group">
                <input type="text" class="form-control form-control-user mx-auto mt-3" id="form_login" placeholder="Email" name="email" value="<?= $temp['email'] ?>">
            </div>
            <button type="submit" class="btn btn-primary rounded-pill mt-4" style="width: 40%">Update</button>
        </form>
    </div>
</div>