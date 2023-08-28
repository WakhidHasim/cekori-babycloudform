<div class="content col-6">
    <div class="page-inner">
        <div class="page-header">
            <h4 class="page-title">Add Product</h4>
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
                    <a href="<?= base_url('product') ?>">Products</a>
                </li>
                <li class="separator">
                    <i class="flaticon-right-arrow"></i>
                </li>
                <li class="nav-item">
                    <a href="">Add Product</a>
                </li>
            </ul>
        </div>

        <form action="<?= base_url('product/create'); ?>" method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <label for="kode_bcf">Product Code</label>
                <input type="text" class="form-control <?= form_error('kode_bcf') ? 'is-invalid' : ''; ?>" id="kode_bcf" name="kode_bcf" onkeyup="this.value = this.value.toUpperCase()" aria-describedby="kode_bcf" value="<?= set_value('kode_bcf') ?>" placeholder="Input Product Code">
                <?= form_error('kode_bcf', '<div class="invalid-feedback">', '</div>'); ?>
            </div>
            <div class="form-group">
                <label for="tgl_jual">Sale Date</label>
                <input type="date" class="form-control <?= form_error('tgl_jual') ? 'is-invalid' : ''; ?>" id="tgl_jual" name="tgl_jual" aria-describedby="tgl_jual" value="<?= set_value('tgl_jual') ?>">
                <?= form_error('tgl_jual', '<div class="invalid-feedback">', '</div>'); ?>
            </div>
            <button type="submit" class="btn btn-success float-right mb-3 mr-2">Add</button>
        </form>
    </div>
</div>