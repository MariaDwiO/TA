<?= $this->extend('template/index'); ?>
<?= $this->section('page-content'); ?>

<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <div class="row">
        <div class="col-lg-8">

            <form>
                <div class="form-group row">
                    <label for="judul" class="col-sm-2 col-form-label">Judul</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="judul" name="judul" value="<?= $komik['judul']; ?>" readonly>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="penulis" class="col-sm-2 col-form-label">Penulis</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="penulis" name="penulis" value="<?= $komik['penulis']; ?>" readonly>
                    </div>
                </div>

                <div class=" form-group row">
                    <label for="penerbit" class="col-sm-2 col-form-label">Penerbit</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="penerbit" name="penerbit" value="<?= $komik['penerbit']; ?>" readonly>
                    </div>
                </div>

                <div class=" form-group row">
                    <label for="harga" class="col-sm-2 col-form-label">Harga</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="harga" name="harga" value="<?= $komik['harga']; ?>" readonly>
                    </div>
                </div>

                <div class=" form-group row">
                    <label for="jml_pesan" class="col-sm-2 col-form-label">Jumlah pesanan</label>
                    <div class="col-sm-10">
                        <input type="sumbit" class="form-control" id="jml_pesan" name="jml_pesan" value="">
                    </div>
                </div>

                <div class=" form-group row">
                    <label for="total" class="col-sm-2 col-form-label">Total</label>
                    <div class="col-sm-10">
                        <input type="sumbit" class="form-control" id="total" name="total" value="Rp.">
                    </div>
                </div>

                <div class=" form-group row">
                    <div class="col-sm-2">Picture</div>
                    <div class="col-sm-10">
                        <div class="row">
                            <div class="col-sm-3">
                                <img src="<?= base_url(); ?>/img/<?= $komik['sampul']; ?>" class="img-thumbnail">
                            </div>
                        </div>
                    </div>
                </div>

                <td>
                    <a href="<?= base_url('/komiknovel'); ?>" class="btn btn-primary">kembali</a>
                </td>
                <a href="<?= base_url('/penjualan/update'); ?>" type="submit" class="btn btn-success" onclick="return confirm('Apakah anda yakin? Jika ya maka buku tersebut akan segera dikirim');">Beli
                </a>
            </form>
        </div>
    </div>
</div>


<?= $this->endSection(); ?>