<div class="main-content">
    <div class="section">
        <div class="section-header">
            <h1>Form Tambah Type Mobil</h1>
        </div>
    </div>

    <form action="<?= base_url('admin/data_type/tambah_type_aksi') ?>" method="post">

    <div class="form-gruop">
        <label>Kode Type</label>
        <input type="text" name="kode_type" class="form-control">
    <?= form_error('kode_type','<div class="text-danger text-small">','</div>') ?>
</div>

    <div class="form-group">
    <label for="">Nama Type</label>
    <input type="text" name="nama_type" class="form-control">
    <?= form_error('nama_type','<div class="text-small text-danger">','</div>') ?>
</div>

<button type="submit" class="btn btn-primary">Simpan</button>
<button type="reset" class="btn btn-danger">Reset</button>

    </form>
</div>