<?= $this->extend('template/index'); ?>
<?= $this->section('page-content'); ?>

<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <div class="row">
        <div class="col-lg-8">

            <form action="/detailprofile/<?= user()->id; ?>" method="post" enctype="multipart/form-data">
                <?= csrf_field(); ?>
                <div class="form-group row">
                    <label for="username" class="col-sm-2 col-form-label">Username</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control " id="username" name="username" value="<?= user()->username; ?>" readonly>
                        <div id="validationServer03Feedback" class="invalid-feedback">
                        </div>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="email" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10">
                        <input type="email" class="form-control" id="email" name="email" value="<?= user()->email; ?>" readonly>
                    </div>
                </div>


                <div class="form-group row">
                    <label for="password" class="col-sm-2 col-form-label">Password</label>
                    <div class="col-sm-10">
                        <input type="password" class="form-control" name="password" id=" password" value="<?= user()->password_hash; ?>" readonly>
                    </div>
                </div>

                <?php if (in_groups('user')) : ?>
                    <div class="form-group row">
                        <label for="roleId" class="col-sm-2 col-form-label">Role Id</label>
                        <div class="col-sm-10">
                            <input type="roleId" class="form-control" id="roleId" name="roleId" value="User" readonly>
                        </div>
                    </div>
                <?php endif; ?>

                <?php if (in_groups('admin')) : ?>
                    <div class="form-group row">
                        <label for="roleId" class="col-sm-2 col-form-label">Role Id</label>
                        <div class="col-sm-10">
                            <input type="roleId" class="form-control" id="roleId" name="roleId" value="Admin" readonly>
                        </div>
                    </div>
                <?php endif; ?>

                <?php if (in_groups('super_admin')) : ?>
                    <div class="form-group row">
                        <label for="roleId" class="col-sm-2 col-form-label">Role Id</label>
                        <div class="col-sm-10">
                            <input type="roleId" class="form-control" id="roleId" name="roleId" value="Super admin" readonly>
                        </div>
                    </div>
                <?php endif; ?>

                <div class=" form-group row">
                    <div class="col-sm-2">Picture</div>
                    <div class="col-sm-10">
                        <div class="row">
                            <div class="col-sm-3">
                                <img src="<?= base_url(''); ?>/img/<?= user()->user_image; ?>" class="img-thumbnail" readonly>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>