<?= $this->extend('template/index'); ?>
<?= $this->section('page-content'); ?>

<div class="container">
    <div class="row">
        <div class="col">
            <h2 class="mt-3">Detail Komik dan Novel</h2>
            <div class="card mb-3" style="max-width: 540px;">
                <div class="row no-gutters">
                    <div class="col-md-5">
                        <img src="/img/<?= $komik['sampul']; ?>" alt="...">
                    </div>
                    <div class="col-mb-8">
                        <div class="card-body text-info">
                            <h5 class="card-title"><?= $komik['judul']; ?></h5>
                            <p class="card-text"><b> Penulis : </b><?= $komik['penulis']; ?></p>
                            <p class="card-text"><small class="text-muted"><b> Penerbit : </b><?= $komik['penerbit']; ?></small></p>

                            <?php if (in_groups('admin')) : ?>
                                <a href="/komiknovel/edit/<?= $komik['slug']; ?>" class="btn btn-warning"> Edit</a>
                                <form action="/komiknovel/<?= $komik['id']; ?>" method="post" class="d-inline">
                                    <?= csrf_field(); ?>
                                    <input type="hidden" name="_method" value="DELETE">
                                    <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda Yakin?');">Delete</button>
                                </form>
                            <?php endif; ?>

                            <?php if (in_groups('super_admin')) : ?>
                                <a href="/komiknovel/edit/<?= $komik['slug']; ?>" class="btn btn-warning"> Edit</a>
                                <form action="/komiknovel/delete/<?= $komik['id']; ?>" method="post" class="d-inline">
                                    <?= csrf_field(); ?>
                                    <input type="hidden" name="_method" value="DELETE">
                                    <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda Yakin?');">Delete</button>
                                </form>
                            <?php endif; ?>

                            <button onclick="window.print()" class="btn btn-success"> Print <i class=" fas fa-fw fa-print"></i></button>
                            <br><br>

                            <td>
                                <a href="<?= base_url('/komiknovel'); ?>" class="btn btn-primary "> kembali ke komik dan novel</a>
                            </td>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>