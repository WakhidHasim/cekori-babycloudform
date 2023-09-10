<!-- Sidebar -->
<div class="sidebar sidebar-style-2">
    <div class="sidebar-wrapper scrollbar scrollbar-inner">
        <div class="user">
            <div class="avatar-sm float-left mr-2">
                <img src="<?= base_url() ?>assets/assets/img/logo.png" alt="..." class="avatar-img" width="125px">
            </div>
            <div class="info">
                <a data-toggle="collapse" href="#collapseExample" aria-expanded="true">
                    <span>
                        <span class="user-level"><?= $user['name'] ?></span>
                        <span class="caret"></span>
                    </span>
                </a>
                <div class="clearfix"></div>
                <div class="collapse in" id="collapseExample">
                    <ul class="nav">
                        <li>
                            <a href="<?= base_url('profile') ?>">
                                <span class="link-collapse">My Profile</span>
                            </a>
                        </li>
                        <li>
                            <a href="<?= base_url('profile/edit-profile') ?>">
                                <span class="link-collapse">Edit Profile</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="sidebar-content">
            <ul class="nav nav-primary">
                <li class="nav-item <?= $this->uri->segment(1) === 'dashboard' ? 'active"' : '' ?>">
                    <a href="<?= base_url('dashboard') ?>">
                        <i class="fas fa-home"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li class="nav-item <?= $this->uri->segment(1) === 'product'  ? 'active"' : '' ?>">
                    <a href="<?= base_url('product') ?>">
                        <i class="fas fa-cubes"></i>
                        <p>Product</p>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>
<div class="main-panel">