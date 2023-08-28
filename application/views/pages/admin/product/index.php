<div class="content">
    <div class="flash-data" data-flashdata="<?= $this->session->flashdata('success'); ?>"></div>
    <div class="page-inner">
        <div class="page-header">
            <h4 class="page-title">Products</h4>
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
                    <a href="<?= base_url('products') ?>">Products</a>
                </li>
            </ul>
        </div>

        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex align-items-center">
                        <h4 class="card-title">Data Products</h4>
                        <a href="<?= base_url('product/import') ?>" class="btn btn-warning btn-round ml-auto">
                            <i class=" fa fa-plus mr-1"></i>
                            Import Data
                        </a>
                        <a href="<?= base_url('product/create') ?>" class="btn btn-primary btn-round ml-3">
                            <i class=" fa fa-plus mr-1"></i>
                            Add Data
                        </a>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="add-row" class="display table table-striped table-hover">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Product Code</th>
                                    <th>Sale Date</th>
                                    <th style="width: 10%">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1;
                                foreach ($products as $product) { ?>
                                    <tr>
                                        <td>
                                            <?= $no++ ?>
                                        </td>
                                        <td>
                                            <?= $product['kode_bcf'] ?>
                                        </td>
                                        <td>
                                            <?= formatDateIndo(date($product['tgl_jual'])) ?>
                                        </td>
                                        <td>
                                            <div class="form-button-action">
                                                <a href="<?= base_url('product/edit/') . $product['kode_bcf'] ?>" data-toggle="tooltip" title="" class="btn btn-link btn-primary btn-lg" data-original-title="Edit Product">
                                                    <i class="fa fa-edit"></i>
                                                </a>
                                                <a href="<?= base_url('product/delete/') . $product['kode_bcf'] ?>" data-toggle="tooltip" title="" class="btn btn-link btn-danger btn-delete" data-original-title="Delete Product" product="DELETE">
                                                    <i class="fa fa-trash-alt"></i>
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>