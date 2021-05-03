<div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Form Update Data Mobil</h1>
          </div>

        <div class="card">
            <div class="card-body">
        
        <?php foreach($mobil as $mbl) : ?>
            <form action="<?= base_url('admin/data_mobil/update_mobil_aksi') ?>" enctype="multipart/form-data" method="post">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Type Mobil</label>
                <input type="hidden" name="id_mobil" value="<?= $mbl->id_mobil ?>">
                <select name="kode_type" id="" class="form-control">
                 <option value="<?= $mbl->kode_type ?>"><?= $mbl->kode_type ?></option>
                  <?php foreach($type as $tp) : ?>
                       <option value="<?= $tp->kode_type; ?>"><?= $tp->nama_type ?></option>
                 <?php  endforeach ; ?>
                    </select>
                    <?= form_error('kode_type','<div class="text-small text-danger">','</div>') ?>
                        </div>

                <div class="form-group">
                        <label for="">Merk</label>
                        <input type="text" name="merk" class="form-control" value="<?= $mbl->merk ?>">
                    <?= form_error('merk','<div class="text-small text-danger">','</div>') ?>
                </div>

                <div class="form-group">
                        <label for="">No.Plat</label>
                        <input type="text" name="no_plat" class="form-control" value="<?= $mbl->no_plat ?>">
                    <?= form_error('no_plat','<div class="text-small text-danger">','</div>') ?>
                </div>

                <div class="form-group">
                        <label for="">Warna</label>
                        <input type="text" name="warna" class="form-control" value="<?= $mbl->warna ?>">
                <?= form_error('warna','<div class="text-small text-danger">','</div>') ?>
                </div>

                <div class="form-group">
                        <label>AC</label>
                        <select name="ac" class="form-control">
                        <option <?php if($mbl->ac == "1"){
                            echo"selected='selected'";}
                            echo $mbl->ac; ?> value="1">Tersedia</option>

                        <option <?php if($mbl->ac == "0"){
                            echo"selected='selected'";}
                            echo $mbl->ac; ?> value="0">Tidak Tersedia</option>
                    </select>
                    <?= form_error('status','<div class="text-small text-danger">','</div>') ?>
                </div>

                <div class="form-group">
                        <label>Supir</label>
                        <select name="supir" class="form-control">
                        <option <?php if($mbl->supir == "1"){
                            echo"selected='selected'";}
                            echo $mbl->supir; ?> value="1">Tersedia</option>

                        <option <?php if($mbl->supir == "0"){
                            echo"selected='selected'";}
                            echo $mbl->supir; ?> value="0">Tidak Tersedia</option>
                    </select>
                    <?= form_error('status','<div class="text-small text-danger">','</div>') ?>
                </div>

                <div class="form-group">
                        <label>Mp3 Player</label>
                        <select name="mp3_player" class="form-control">
                        <option <?php if($mbl->mp3_player == "1"){
                            echo"selected='selected'";}
                            echo $mbl->mp3_player; ?> value="1">Tersedia</option>

                        <option <?php if($mbl->mp3_player == "0"){
                            echo"selected='selected'";}
                            echo $mbl->mp3_player; ?> value="0">Tidak Tersedia</option>
                    </select>
                    <?= form_error('status','<div class="text-small text-danger">','</div>') ?>
                </div>

                <div class="form-group">
                        <label>Central Lock</label>
                        <select name="central_lock" class="form-control">
                        <option <?php if($mbl->central_lock == "1"){
                            echo"selected='selected'";}
                            echo $mbl->central_lock; ?> value="1">Tersedia</option>

                        <option <?php if($mbl->central_lock == "0"){
                            echo"selected='selected'";}
                            echo $mbl->central_lock; ?> value="0">Tidak Tersedia</option>
                    </select>
                    <?= form_error('status','<div class="text-small text-danger">','</div>') ?>
                </div>

                    </div>

                <div class="col-md-6"> 
                
                <div class="form-group">
                        <label for="">Harga</label>
                        <input type="number" name="harga" class="form-control" value="<?= $mbl->harga ?>">
                    <?= form_error('harga','<div class="text-small text-danger">','</div>') ?>
                </div>

                <div class="form-group">
                        <label for="">Denda</label>
                        <input type="number" name="denda" class="form-control" value="<?= $mbl->denda ?>">
                    <?= form_error('denda','<div class="text-small text-danger">','</div>') ?>
                </div>

                <div class="form-group">
                        <label for="">Tahun</label>
                        <input type="text" name="tahun" class="form-control" value="<?= $mbl->tahun ?>">
                    <?= form_error('tahun','<div class="text-small text-danger">','</div>') ?>
                </div>

                    <div class="form-group">
                        <label>Status</label>
                        <select name="status" class="form-control">
                        <option <?php if($mbl->status == "1"){
                            echo"selected='selected'";}
                            echo $mbl->status; ?> value="1">Tersedia</option>

                        <option <?php if($mbl->status == "0"){
                            echo"selected='selected'";}
                            echo $mbl->status; ?> value="0">Tidak Tersedia</option>
                    </select>
                    <?= form_error('status','<div class="text-small text-danger">','</div>') ?>
                    </div>

                    <div class="form-group">
                        <label for="">Gambar</label>
                        <input type="file" name="gambar" class="form-control">
                    </div>

                    <button type="submit" class="btn btn-primary mt-4">Simpan</button>
                    <button type="reset" class="btn btn-danger mt-4">Reset</button>
                    
                    </div>
                </div>
            </form>
        <?php endforeach ; ?>
            </div>
        </div>

        </section>
    </div>