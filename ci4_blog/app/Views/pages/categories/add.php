<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>
<div class="card">
    <div class="card-header">
        <div class="d-flex w-100 justify-content-between">
            <div class="col-auto">
                <div class="card-title h4 mb-0 fw-bolder">Add New Category</div>
            </div>
            <div class="col-auto">
                <a href="<?= base_url('Main/categories') ?>" class="btn btn btn-light bg-gradient border "><i class="fa fa-angle-left"></i> Back to List</a>
            </div>
        </div>
    </div>
    <div class="card-body">
        <div class="container-fluid">
            <form action="<?= base_url('Main/category_add') ?>" method="POST">
                <?php if($session->getFlashdata('error')): ?>
                    <div class="alert alert-danger rounded-0">
                        <?= $session->getFlashdata('error') ?>
                    </div>
                <?php endif; ?>
                <?php if($session->getFlashdata('success')): ?>
                    <div class="alert alert-success rounded-0">
                        <?= $session->getFlashdata('success') ?>
                    </div>
                <?php endif; ?>
                <div class="mb-3">
                    <label for="name" class="control-label">Name</label>
                    <input type="text" class="form-control rounded-0" id="name" name="name" autofocus value="<?= !empty($request->getPost('name')) ? $request->getPost('name') : '' ?>" required="required">
                </div>
                <div class="mb-3">
                    <label for="description" class="control-label">Description</label>
                    <textarea rows="3" class="form-control rounded-0" id="description" name="description"  required="required"><?= !empty($request->getPost('description')) ? $request->getPost('description') : '' ?></textarea>
                </div>
                <div class="d-grid gap-1">
                    <button class="btn btn-primary bg-gradient">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>
<style>
    .card{
        border-radius: 15px;
    }
    .btn{
        border-radius: 15px;
    }
</style>

<?= $this->endSection() ?>