  <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Data Mobil</h1>
          </div>
          
        <a href="<?= base_url('admin/data_mobil/tambah_mobil') ?>" class="btn btn-primary mb-3">Tambah Data</a>
        <?= $this->session->flashdata('pesan') ?>
          <table class="table table-hover table-striped table-bordered">
         <thead>
         <tr>
                <th>No</th>
                <th>Gambar</th>
                <th>Type</th>
                <th>Merk</th>
                <th>No. Plat</th>
                <th>Status</th>
                <th>Aksi</th>
          </tr>
          </thead>
          
         <tbody>
        
         <?php 
         $no = 1;
         foreach($mobil as $mbl) : ?>
      <tr>
         <td><?= $no++ ?></td>
         <td><img width="60px" src="<?= base_url().'assets/upload/'.$mbl->gambar ?>" alt=""></td>
         <td><?= $mbl->kode_type  ?></td>
         <td><?= $mbl->merk  ?></td>
         <td><?= $mbl->no_plat ?></td>
         <td><?php 
         if($mbl->status == "0")
         {
             echo "<span class='badge badge-danger'> Tidak Tersedia </span>";
         }else{
            echo "<span class='badge badge-primary'> Tersedia </span>";
         }
         ?></td>

         <td>
            <a href="<?= base_url('admin/data_mobil/detail_mobil/').$mbl->id_mobil ?>" class="btn btn-sm btn-success"><i class="fas fa-eye"></i></a>
            <a href="<?= base_url('admin/data_mobil/delete_mobil/').$mbl->id_mobil ?>" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></a>
            <a href="<?= base_url('admin/data_mobil/update_mobil/').$mbl->id_mobil ?>" class="btn btn-sm btn-primary"><i class="fas fa-edit"></i>
         </td>
      </tr>
         </tbody>

        <?php endforeach ; ?>
          </table>
    </section>
</div>



