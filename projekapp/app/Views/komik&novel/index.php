<?= $this->extend('template/index'); ?>
<?= $this->section('page-content'); ?>

<div class="container">
    <div class="row">
        <div class="col-lg-8">

            <h1 class="mt-2">Daftar Komik dan Novel</h1>

            <?php if (in_groups('admin')) : ?>
                <a href="/Komiknovel/create" class="btn btn-primary mt-2 my-2">Tambah Data Komik dan Novel</a>
            <?php endif; ?>

            <?php if (session()->getFlashdata('pesan')) : ?>
                <div class="alert alert-success" role="alert">
                    <?= session()->getFlashdata('pesan'); ?>
                </div>
            <?php endif; ?>

            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">komik & Novel</th>
                        <th scope="col">Judul</th>
                        <th scope="col">Harga</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($komik as $k) : ?>
                        <tr>
                            <th scope="row"><?= $i++; ?></th>
                            <td><img src="/img/<?= $k['sampul']; ?>" alt="" class="sampul">
                            </td>
                            <td><?= $k['judul']; ?></td>
                            <td><?= $k['harga']; ?></td>
                            <td>
                                <a href="/komiknovel/detail/<?= $k['slug']; ?>
                                " class="btn btn-info">Detail</a>
                            </td>
                            <?php if (in_groups('user')) : ?>
                                <td>
                                    <a href="/penjualan/beli/<?= $k['slug']; ?>" class="btn btn-success">Beli</a>
                                </td>
                            <?php endif; ?>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>