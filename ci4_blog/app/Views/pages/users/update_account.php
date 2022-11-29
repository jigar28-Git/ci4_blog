<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>
<div class="card">
    <div class="card-header">
        <div class="col-auto">
            <div class="card-title h4 mb-0 fw-bolder">Update Account Details</div>
        </div>
    </div>
    <div class="card-body">
        <div class="container-fluid">
            <form action="<?= base_url('update_user') ?>" method="POST">
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
                        <input type="text" class="form-control" id="name" name="name" autofocus  value="<?= !empty($user['name']) ? $user['name'] : '' ?>" required="required">
                        <div class="input-group-text bg-light bg-gradient"><i class="fa fa-user"></i></div>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="email" class="control-label">Email</label>
                    <div class="input-group">
                        <input type="email" class="form-control" id="email" name="email" value="<?= !empty($user['email']) ? $user['email'] : '' ?>" required="required">
                        <div class="input-group-text bg-light bg-gradient"><i class="fa fa-at"></i></div>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="password" class="control-label">New Password</label>
                    <div class="input-group">
                        <input type="password" class="form-control" id="password" name="password" placeholder="**********">
                        <div class="input-group-text bg-light bg-gradient"><i class="fa fa-key"></i></div>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="password" class="control-label">Confirm New Password</label>
                    <div class="input-group">
                        <input type="password" class="form-control" id="cpassword" name="cpassword" placeholder="**********">
                        <div class="input-group-text bg-light bg-gradient"><i class="fa fa-key"></i></div>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="password" class="control-label">Current Password</label>
                    <div class="input-group">
                        <input type="password" class="form-control" id="current_password" name="current_password" placeholder="**********" required>
                        <div class="input-group-text bg-light bg-gradient"><i class="fa fa-key"></i></div>
                    </div>
                </div>
                <div class="d-grid gap-1">
                    <button class="btn btn-primary bg-gradient">Update</button>
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