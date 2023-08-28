<section class="h-100">
    <div class="container h-100">
        <div class="row justify-content-md-center h-100">
            <div class="card-wrapper">
                <div class="brand">
                    <img src="<?= base_url() ?>assets/assets/img/logo.png" alt="logo">
                </div>

                <div class="card fat">
                    <div class="card-body">
                        <h4 class="card-title text-center">Register Baby CloudFoam</h4>
                        <form action="<?= base_url('register') ?>" method="POST" class="my-register-validation" novalidate="">
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input id="name" type="text" class="form-control <?= form_error('name') ? 'is-invalid' : ''; ?>" name="name" value="<?= set_value('name') ?>" autofocus>
                                <?= form_error('name', '<div class="invalid-feedback">', '</div>'); ?>
                            </div>
                            <div class="form-group">
                                <label for="email">E-Mail Address</label>
                                <input id="email" type="email" class="form-control <?= form_error('email') ? 'is-invalid' : ''; ?>" name="email" value="<?= set_value('email') ?>">
                                <?= form_error('email', '<div class="invalid-feedback">', '</div>'); ?>
                            </div>
                            <div class="form-group">
                                <label for="password1">Password</label>
                                <input type="password" id="password1" name="password1" class="form-control <?= form_error('password1') ? 'is-invalid' : ''; ?>" required>
                                <?= form_error('password1', '<div class="invalid-feedback">', '</div>'); ?>
                            </div>
                            <div class="form-group">
                                <label for="password2">Confirm Password</label>
                                <input type="password" id="password2" name="password2" class="form-control <?= form_error('password2') ? 'is-invalid' : ''; ?>" required>
                                <?= form_error('password2', '<div class="invalid-feedback">', '</div>'); ?>
                            </div>
                            <div class="form-group m-0">
                                <button type="submit" class="btn btn-primary btn-block">
                                    Register
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="footer">
                    Copyright &copy;<?= date('Y'); ?> &mdash; Baby CloudFoam | All rights reserved.
                </div>
            </div>
        </div>
    </div>
</section>