<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>
<div class="card">
    <div class="card-header">
        <div class="d-flex w-100 justify-content-between">
            <div class="col-auto">
                <div class="card-title h4 mb-0 fw-bolder">Add New User</div>
            </div>
            <div class="col-auto">
                <a href="<?= base_url('Main/users') ?>" class="btn btn btn-light bg-gradient border"><i class="fa fa-angle-left"></i> Back to List</a>
            </div>
        </div>
    </div>
    <div class="card-body">
        <div class="container-fluid">
            <form action="<?= base_url('Main/user_add/') ?>" method="POST">
                <?php if($session->getFlashdata('error')): ?>
                    <div class="alert alert-danger">
                        <?= $session->getFlashdata('error') ?>
                    </div>
                <?php endif; ?>
                <?php if($session->getFlashdata('success')): ?>
                    <div class="alert alert-success">
                        <?= $session->getFlashdata('success') ?>
                    </div>
                <?php endif; ?>
                <div class="mb-3">
                    <label for="email" class="control-label">Name</label>
                    <div class="input-group">
                        <input type="text" class="form-control" id="name" name="name" autofocus placeholder="Your Name" value="<?= !empty($request->getPost('name')) ? $request->getPost('name') : '' ?>" required="required">
                        <div class="input-group-text bg-light bg-gradient"><i class="fa fa-user"></i></div>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="email" class="control-label">Email</label>
                    <div class="input-group">
                        <input type="email" class="form-control" id="email" name="email" placeholder="Your Email" value="<?= !empty($request->getPost('email')) ? $request->getPost('email') : '' ?>" required="required">
                        <div class="input-group-text bg-light bg-gradient"><i class="fa fa-at"></i></div>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="password" class="control-label">Password</label>
                    <div class="input-group">
                        <input type="password" class="form-control" id="password" name="password" placeholder="**********" required>
                        <div class="input-group-text bg-light bg-gradient"><i class="fa fa-key"></i></div>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="password" class="control-label">Confirm Password</label>
                    <div class="input-group">
                        <input type="password" class="form-control" id="cpassword" name="cpassword" placeholder="**********" required>
                        <div class="input-group-text bg-light bg-gradient"><i class="fa fa-key"></i></div>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="type" class="control-label">Type</label>
                    <select class="form-select" id="type" name="type" required>
                        <option value="1">Administrator</option>
                        <option value="2">Author</option>
                    </select>
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
    .card-body{
        border-radius: 15px;
    }
    .mb-3{
        border-radius: 15px;
    }
</style>
<?= $this->endSection() ?>