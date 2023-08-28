<section class="h-100">
    <div class="container h-100">
        <div class="row justify-content-md-center h-100">
            <div class="card-wrapper">
                <div class="brand">
                    <img src="<?= base_url() ?>assets/assets/img/logo.png" alt="logo">
                </div>

                <?php
                if ($this->session->flashdata('failed')) { ?>
                    <div class="alert alert-danger alert-dismissible fade show mt-3" role="alert">
                        <?= $this->session->flashdata('failed'); ?>
                    </div>
                <?php } else if ($this->session->flashdata('success')) { ?>
                    <div class="alert alert-success alert-dismissible fade show mt-3" role="alert">
                        <?= $this->session->flashdata('success'); ?>
                    </div>
                <?php } ?>

                <div class="card fat">
                    <div class="card-body">
                        <h4 class="card-title text-center">Login Baby CloudFoam</h4>
                        <form action="<?= base_url('login') ?>" method="POST" class="my-login-validation" novalidate="">
                            <div class="form-group">
                                <label for="email">E-Mail Address</label>
                                <input id="email" type="email" class="form-control <?= form_error('email') ? 'is-invalid' : ''; ?>" name="email" value="<?= $this->session->flashdata('failed_email') ?? set_value('email') ?>" autofocus>
                                <?= form_error('email', '<div class="invalid-feedback">', '</div>'); ?>
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <div class="input-group">
                                    <input type="password" id="password" name="password" class="form-control rounded <?= form_error('password') ? 'is-invalid' : ''; ?>" spellcheck="false" autocorrect="off" autocapitalize="off" required>
                                    <button id="toggle-password" type="button" class="d-none" aria-label="Show password as plain text. Warning: this will display your password on the screen.">
                                    </button>
                                    <?= form_error('password', '<div class="invalid-feedback">', '</div>'); ?>
                                </div>
                            </div>
                            <div class="form-group m-0">
                                <button type="submit" class="btn btn-primary btn-block">
                                    Login
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