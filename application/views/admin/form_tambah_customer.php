<div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Form Tambah Data Customer</h1>
          </div>
        </section>

        
        <form method="post" action="<?= base_url('admin/data_customer/tambah_customer_aksi') ?>">
            <div class="form-group">
                <label>Nama</label>
                <input type="text" name="nama" class="form-control">
                <?= form_error('nama','<span class="text-small text-danger">','</span>') ?>
            </div>

            <div class="form-group">
                <label>Username</label>
                <input type="text" name="username" class="form-control">
                <?= form_error('username','<span class="text-small text-danger">','</span>') ?>
            </div>

            <div class="form-group">
                <label>Alamat</label>
                <input type="text" name="alamat" class="form-control">
                <?= form_error('alamat','<span class="text-small text-danger">','</span>') ?>
            </div>

            <div class="form-group">
            <label>Gender</label>
                <select name="gender" class="form-control">
                     <option value="">-- Pillih Gender --</option>
                     <option value="Laki-Laki">Laki-Laki</option>
                    <option value="perempuan">Perempuan</option>
            <?= form_error('gender','<span class="text-small text-danger">','</span>') ?>
            </div>
            </select>

            <div class="form-group">
                <label>No. Telepon</label>
                <input type="text" name="no_telepon" class="form-control">
                <?= form_error('no_telepon','<span class="text-small text-danger">','</span>') ?>
            </div>

            <div class="form-group">
                <label>No. Ktp</label>
                <input type="text" name="no_ktp" class="form-control">
                <?= form_error('no_ktp','<span class="text-small text-danger">','</span>') ?>
            </div>

            <div class="form-group">
                <label>Password</label>
                <input type="password" name="password" class="form-control">
                <?= form_error('password','<span class="text-small text-danger">','</span>') ?>
            </div>

        <button type="submit" class="btn btn-sm btn-primary">Submit</button>
        <button type="reset" class="btn btn-sm btn-danger">Reset </button>

        </form>
    </div>
