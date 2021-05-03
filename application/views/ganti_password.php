<body>
  <div id="app">
    <section class="section">
      <div class="container mt-5">
        <div class="row">
          <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
            <div class="login-brand">
              <img src="<?= base_url('assets/assets_stisla/') ?>assets/img/stisla-fill.svg" alt="logo" width="100" class="shadow-light rounded-circle">
            </div>

            <div class="card card-primary">
              <div class="card-header"><h4>Ganti Password</h4></div>
            
            <span class="m-2"><?= $this->session->flashdata('pesan') ?></span>

              <div class="card-body">
                <form method="POST" action="<?= base_url('auth/ganti_password_aksi') ?>">
                  <div class="form-group">
                    <label for="password_baru">Password Baru</label>
                    <input id="password_baru" type="password" class="form-control" name="password_baru" tabindex="1">
                    <?= form_error('password_baru','<span class="text-small text-danger">','</span>') ?>
                  </div>

                  <div class="form-group">
                    <div class="d-block">
                    	<label for="ulang_password" class="control-label">Ulangi Password</label> 
                    </div>
                    <input id="ulang_password" type="password" class="form-control" name="ulang_password" tabindex="2">
                    <?= form_error('ulang_password','<span class="text-small text-danger">','<span>') ?>
                  </div>

                  <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
                      Ganti Password
                    </button>
                  </div>
                </form>
               

              </div>
            </div>
            <div class="simple-footer">
              Copyright &copy; Stisla 2018
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>