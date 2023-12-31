<div class="content">
    <div class="page-inner">
        <div class="page-header">
            <h4 class="page-title">Edit Profile</h4>
            <ul class="breadcrumbs">
                <li class="nav-home">
                    <a href="<?= base_url('dashboard') ?>">
                        <i class="flaticon-home"></i>
                    </a>
                </li>
                <li class="separator">
                    <i class="flaticon-right-arrow"></i>
                </li>
                <li class="nav-item">
                    <a href="<?= base_url('profile') ?>">Profile</a>
                </li>
                <li class="separator">
                    <i class="flaticon-right-arrow"></i>
                </li>
                <li class="nav-item">
                    <a href="">Edit Profile</a>
                </li>
            </ul>
        </div>

        <div class="col-12 col-xl-9">
            <div class="card rounded-0">
                <div class="card-body p-lg-5">
                    <form action="<?= base_url('profile/edit-profile') ?>" method="POST" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="name">Full Name</label>
                            <input type="text" class="form-control <?= form_error('name') ? 'is-invalid' : ''; ?>" id="name" name="name" aria-describedby="nameHelp" value="<?= $profile['name'] ?>">
                            <?= form_error('name', '<div class="invalid-feedback">', '</div>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="text" class="form-control <?= form_error('email') ? 'is-invalid' : ''; ?>" id="email" name="email" aria-describedby="emailHelp" value="<?= $profile['email'] ?>">
                            <?= form_error('email', '<div class="invalid-feedback">', '</div>'); ?>
                        </div>
                        <button type="submit" class="btn btn-success float-right mb-3 mr-2">Edit</button>
                    </form>
                    <a href="<?= base_url('profile') ?>" class="btn btn-warning float-right mb-3 mr-3">Back</a>
                </div>
            </div>
        </div>
    </div>
</div>