<div class="content col-6">
    <div class="page-inner">
        <div class="page-header">
            <h4 class="page-title">Import Products</h4>
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
                    <a href="">Import Products</a>
                </li>
            </ul>
        </div>

        <form action="<?= base_url('product/create'); ?>" method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <label for="file">File Excel / CVS</label>
                <div class="custom-file">
                    <input type="file" class="custom-file-input" id="import" name="import" accept=".xls, .xlsx, .csv">
                    <label class="custom-file-label" for="import">Choose file</label>
                </div>
            </div>
            <button type="submit" class="btn btn-success float-right mb-3 mr-2">Add</button>
        </form>
    </div>
</div>