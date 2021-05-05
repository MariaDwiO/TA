<?= $this->extend('template/index'); ?>
<?= $this->section('page-content'); ?>

<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">User Detail</h1>

    <div class="row">
        <div class="col-lg-8">
            <div class="card mb-3" style="max-width: 540px;">
                <div class="row no-gutters">
                    <div class="col-md-4">
                        <img src="<?= base_url('/img/' . $users->user_image); ?>" class="card-img" alt="<?= $users->username; ?>">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">
                                    <h4><?= $users->username; ?></h4>
                                </li>
                                <?php if ($users->fullname) : ?>
                                    <li class="list-group-item"><?= $users->fullname; ?></li>
                                <?php endif; ?>
                                <li class="list-group-item"><?= $users->email; ?></li>
                                <li class="list-group-item">
                                    <?php if ($users->name == 'user') : ?>
                                        <span class="badge badge-light"><?= $users->name; ?></span>
                                    <?php elseif ($users->name == 'admin') : ?>
                                        <span class="badge badge-warning"><?= $users->name; ?></span>
                                    <?php elseif ($users->name == 'super_admin') : ?>
                                        <span class="badge badge-danger"><?= $users->name; ?></span>
                                    <?php endif; ?>
                                </li>
                                <li class="list-group-item">
                                    <small><a href="<?= base_url('admin'); ?>">&laquo; Back to user list</a></small>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>