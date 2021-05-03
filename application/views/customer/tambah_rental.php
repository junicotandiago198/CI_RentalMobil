<div class="container-fluid">
    <div class="card" style="margin-top: 200px">    
        <div class="card-header">
            Form Rental Mobil
        </div>

        <div class="card-body">
            <?php foreach($rental as $r) : ?>
        <form action="<?= base_url('customer/rental/tambah_rental_aksi') ?>" method="post">
                
            <div class="form-group">
                <label for="harga">Harga Sewa/Hari</label>
                <input type="hidden" name="id_mobil" value="<?= $r->id_mobil ?>">
                <input type="text" name="harga" class="form-control" value="<?= $r->harga ?>" readonly>
            </div>
            
            <div class="form-group">
                <label for="harga">Denda/Hari</label>
                <input type="text" name="denda" class="form-control" value="<?= $r->denda ?>" readonly>
            </div>

            <div class="form-group">
                <label for="tanggal_kembali">Tanggal Rental</label>
                <input type="date" name="tanggal_rental" class="form-control">
            </div>

            <div class="form-group">
                <label for="tanggal_kembali">Tanggal Kembali</label>
                <input type="date" name="tanggal_kembali" class="form-control">
            </div>

            <button type="submit" class="btn btn-warning">Rental</button>

        </form>
            <?php endforeach ; ?>
        </div>
    </div>
</div>