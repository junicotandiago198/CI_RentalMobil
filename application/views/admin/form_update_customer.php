<div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Form Update Data Mobil</h1>
          </div>

        <?php foreach ($customer as $cs) : ?>
        <form method="post" action="<?= base_url('admin/data_customer/update_customer_aksi') ?>">
        
        <div class="form-group">
            <label>Nama</label>
            <input type="hidden" name="id_customer" value="<?= $cs->id_customer ?>">
            <input type="text" name="nama" class="form-control" value="<?= $cs->nama ?>">
            <?= form_error('nama','<span class="text-small text-danger">','</span>') ?>
        </div>

        <div class="form-group">
            <label>Username</label>
            <input type="text" name="username" class="form-control" value="<?= $cs->username ?>">
            <?= form_error('username','<span class="text-small text-danger">','</span>') ?> 
        </div>

        <div class="form-group">
            <label>Alamat</label>
            <input type="text" name="alamat" class="form-control" value="<?= $cs->alamat ?>">
            <?= form_error('alamat','<span class="text-small text-danger">','</span>') ?>
        </div>
        
        <div class="form-group">
            <label>Gender</label>
            <select name="gender" class="form-control">
                <option value="<?= $cs->gender ?>"><?= $cs->gender ?></option>
                <option value="Laki-Laki">Laki-Laki</option>
                <option value="Perempuan">Perempuan</option>
                <?= form_error('gender','<span class="text-small text-danger">','</span>') ?>
            </select>
        </div>

        <div class="form-group">
            <label>No.Telepon</label>
            <input type="text" name="no_telepon" class="form-control" value="<?= $cs->no_telepon ?>">
            <?= form_error('no_telepon','<span class="text-small text-danger">','</span>') ?>
        </div>

        <div class="form-group">
            <label>No.Ktp</label>
            <input type="text" name="no_ktp" class="form-control" value="<?= $cs->no_ktp ?>">
            <?= form_error('no_ktp','<span class="text-small text-danger">','</span>') ?>
        </div>

        <div class="form-group">
            <label>Password</label>
            <input type="password" name="password" class="form-control" value="<?= $cs->password ?>">
            <?= form_error('password','<span class="text-small text-danger">','</span>') ?>
        </div>

    <button type="submit" class="btn btn-sm btn-primary">Submit</button>
    <button type="reset" class="btn btn-sm btn-danger">Reset</button>
</form>
 <?php endforeach ; ?> 

    </section>
</div>