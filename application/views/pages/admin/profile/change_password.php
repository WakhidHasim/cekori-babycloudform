<div class="content">
    <div class="notification error-flashdata" data-flashdata="<?= $this->session->flashdata('error'); ?>"></div>

    <div class="page-inner">
        <div class="page-header">
            <h4 class="page-title">Edit Profile</h4>
            <ul class="breadcrumbs">
                <li class="nav-home">
                    <a href="<?= base_url('admin/dashboard') ?>">
                        <i class="flaticon-home"></i>
                    </a>
                </li>
                <li class="separator">
                    <i class="flaticon-right-arrow"></i>
                </li>
                <li class="nav-item">
                    <a href="<?= base_url('admin/profile') ?>">Profile</a>
                </li>
                <li class="separator">
                    <i class="flaticon-right-arrow"></i>
                </li>
                <li class="nav-item">
                    <a href="">Update Password</a>
                </li>
            </ul>
        </div>

        <div class="col-12 col-xl-9">
            <div class="card rounded-0">
                <div class="card-body p-lg-5">
                    <form action="<?= base_url('profile/change-password') ?>" method="POST" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="current_password">Current Password</label>
                            <div class="input-group">
                                <input type="password" class="form-control" id="current_password" name="current_password" aria-describedby="currentPasswordHelp">
                                <div class="input-group-append">
                                    <button class="btn btn-outline-secondary toggle-password" type="button" data-target="current_password">
                                        <i class="fa fa-eye-slash"></i>
                                    </button>
                                </div>
                            </div>
                            <?= form_error('current_password', '<small class="text-danger">', '</small>') ?>
                        </div>
                        <div class="form-group">
                            <label for="new_password">New Password</label>
                            <div class="input-group">
                                <input type="password" class="form-control" id="new_password" name="new_password1" aria-describedby="newPasswordHelp">
                                <div class="input-group-append">
                                    <button class="btn btn-outline-secondary toggle-password" type="button" data-target="new_password">
                                        <i class="fa fa-eye-slash"></i>
                                    </button>
                                </div>
                            </div>
                            <?= form_error('new_password1', '<small class="text-danger">', '</small>') ?>
                        </div>
                        <div class="form-group">
                            <label for="confirm_password">Confirm Password</label>
                            <div class="input-group">
                                <input type="password" class="form-control" id="confirm_password" name="new_password2" aria-describedby="confirmPasswordHelp">
                                <div class="input-group-append">
                                    <button class="btn btn-outline-secondary toggle-password" type="button" data-target="confirm_password">
                                        <i class="fa fa-eye-slash"></i>
                                    </button>
                                </div>
                            </div>
                            <?= form_error('new_password2', '<small class="text-danger">', '</small>') ?>
                        </div>
                        <button type="submit" class="btn btn-success float-right mb-3">Update Password</button>
                    </form>
                    <a href="<?= base_url('profile') ?>" class="btn btn-warning float-right mb-3 mr-3">Back</a>
                </div>
            </div>
        </div>
    </div>
</div>