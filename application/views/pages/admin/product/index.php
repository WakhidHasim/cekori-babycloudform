<div class="content">
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
                        <h4 class="card-title">Products Data</h4>
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary btn-round ml-auto" onclick="addProduct()">
                            <i class=" fa fa-plus mr-1"></i>
                            Add Data
                        </button>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="table_product" class="display nowrap table table-striped table-hover table-responsive">
                            <thead>
                                <tr>
                                    <th style="width:5%;">No</th>
                                    <th style="width:30%;">Product Code</th>
                                    <th style="width:30%;">Sale Date</th>
                                    <th style="width: 15%">Action</th>
                                </tr>
                            </thead>
                            <tbody>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="modalData" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalTitle">Modal Titel</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="#" id="formData">
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
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-success" id="btnSave" onclick="save()">Save</button>
            </div>
        </div>
    </div>
</div>