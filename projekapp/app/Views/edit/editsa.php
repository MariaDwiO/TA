<?= $this->extend('template/index'); ?>
<?= $this->section('page-content'); ?>

<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <div class="row">
        <div class="col-lg-8">
            <?php foreach ($users as $user); ?>

            <form>
                <div class="form-group row">
                    <label for="username" class="col-sm-2 col-form-label">Username</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control " id="username" name="username" value="<?= $users->username; ?>" readonly>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="email" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10">
                        <input type="email" class="form-control" id="email" name="email" value="<?= $users->email; ?>" readonly>
                    </div>
                </div>


                <div class="form-group row">
                    <label for="password" class="col-sm-2 col-form-label">Password</label>
                    <div class="col-sm-10">
                        <input type="password" class="form-control" name="password" id=" password" value="<?= user()->password_hash; ?>" readonly>
                    </div>
                </div>

                <div class=" form-group row">
                    <div class="col-sm-2">Role Id</div>
                    <div class="col-lg-9">
                        <select class="form-control form-control-sm">
                            <option><?= $users->name; ?></option>
                            <option>=====Pilihan Role Id=====</option>
                            <option>User</option>
                            <option>Admin</option>
                            <option>Super Admin</option>
                        </select>
                    </div>
                </div>

                <div class=" form-group row">
                    <div class="col-sm-2">Picture</div>
                    <div class="col-sm-10">
                        <div class="row">
                            <div class="col-sm-3">
                                <img src="<?= base_url(''); ?>/img/<?= $users->user_image; ?>" class="img-thumbnail" readonly>
                            </div>
                        </div>
                    </div>
                </div>

                <td>
                    <a href="<?= base_url('/admin'); ?>" class="btn btn-primary ">kembali</a>
                </td>
                <a href="<?= base_url('/detailprofile/save'); ?>" type="submit" class="btn btn-success" onclick="return confirm('Apakah Anda Yakin?');">Perbarui</a>
            </form>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>