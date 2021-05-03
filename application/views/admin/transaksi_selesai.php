 <!-- Main Content -->
 <div class="main-content">
        <section class="section">
        <div class="section-header">
            <h1>Transaksi Selesai</h1>
        </div>
        </section>

    <?php foreach ($transaksi as $tr)  : ?>
    <form action="<?= base_url('admin/transaksi/transaksi_selesai_aksi') ?>" method="POST">

    <input type="hidden" name="id_rental" class="form-control" value="<?= $tr->id_rental ?>">
    <input type="hidden" name="tanggal_kembali" value="<?php echo $tr->tanggal_kembali ?>">
    <input type="hidden" name="denda" value="<?php echo $tr->denda ?>">


    <div class="form-group">
            <label>Tanggal Pengembalian</label>
        <input type="date" name="tanggal_pengembalian" class="form-control" value="<?= $tr->tanggal_pengembalian ?>" >
    </div>

    <div class="form-group">
        <label>Status Pengembalian</label>
    <select name="status_pengembalian" class="form-control">
        <option value="<?= $tr->status_pengembalian ?>"><?= $tr->status_pengembalian ?></option>
        <option value="Kembali">Kembali</option>
        <option value="Belum Kembali">Belum Kembali</option>
     </select>
    </div>

    <div class="form-group">
        <label>Status Rental</label>
    <select name="status_rental" class="form-control">
        <option value="<?= $tr->status_rental ?>"><?= $tr->status_rental ?></option>
        <option value="Selesai">Selesai</option>
        <option value="Belum Selesai">Belum Selesai</option>
     </select>
    </div>

    <button type="submit" class="btn btn-success">Save</button>

    </form>
    <?php endforeach ; ?>
    </div>