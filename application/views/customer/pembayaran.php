<div class="container mt-5 mb-5">
    <div class="row">
        <div class="col-md-8">
            <div class="card" style="margin-top: 150px;">
                <div class="card-header alert alert-success">
                    Invoice Pembayaran Anda
                </div>

    <div class="card-body">
                <table class="table">
            <?php foreach ($transaksi as $tr) : ?>

                <tr>
                    <th>Merk Mobil</th>
                    <td>:</td>
                    <td><?= $tr->merk ?></td>
                </tr>

                <tr>
                    <th>Tanggal Rental</th>
                    <td>:</td>
                    <td> <?= date('d/m/Y',strtotime($tr->tanggal_rental)) ?></td>
                </tr>

                <tr>
                    <th>Tanggal Kembali</th>
                    <td>:</td>
                    <td><?= date('d/m/Y',strtotime($tr->tanggal_kembali)); ?></td>
                </tr>

                <tr>
                    <th>Biaya Sewa/Hari</th>
                    <td>:</td>
                    <td>Rp. <?= number_format( $tr->harga,0,',','.') ?></td>
                </tr>

                <?php
                $x = strtotime($tr->tanggal_kembali);
                $y = strtotime($tr->tanggal_rental);
                $jmlHari = abs(($x - $y)/(60*60*24));
                ?>
                <tr>
                    <th>Jumlah Hari Sewa</th>
                    <td>:</td>
                    <td><?= $jmlHari ?> Hari</td>
                </tr>

                
                <tr class="text-success">
                    <th>Jumlah Pembayaran</th>
                    <td>:</td>
                    <td><button class="btn btn-sm btn-success">Rp. <?= number_format( $tr->harga * $jmlHari,0,',','.') ?></button></td>
                </tr>

                <tr>
                    <td></td>
                    <td></td>
                    <td><a href="<?= base_url('customer/transaksi/cetak_invoice/'.$tr->id_rental) ?>" class="btn btn-sm btn-secondary">Print Invoice</a></td>
                </tr>


            <?php endforeach ; ?>
                </table>
            </div>
            
            </div>
        </div>
        <div class="col-md-4" style="margin-top: 150px;">
        <div class="card">
            <div class="card-header alert alert-primary">
                Informasi Pembayaran
            </div>

            <div class="card-body">
                <p class="text-success mb-3">Silahkan Melakukan Pembayaran Melalui No Rekening di bawah Ini</p>

            <ul class="list-group list-group-flush">
            <li class="list-group-item">Bank Mandiri 18120779</li>
            <li class="list-group-item">Bank BCA 18120807</li>
            <li class="list-group-item">Bank BNI 118234293</li>
            </ul>

            <?php 
            
            if(empty($tr->bukti_pembayaran)) { ?>
            <!-- Button trigger modal -->
            <button style="width:100%" type="button" class="btn btn-sm btn-danger mt-3" data-toggle="modal" data-target="#exampleModal">Upload Bukti Pembayaran</button>
            <?php } elseif($tr->status_pembayaran == '0'){ ?>
            <button style="width: 100%" class="btn btn-sm btn-warning"><i class="fa fa-clock-o"></i> Menunggu Konfirmasi</button>
            <?php }elseif($tr->status_pembayaran == '1'){ ?>
            <button style="width: 100%" class="btn btn-sm btn-success"><i class="fa fa-check"></i> Pembayaran selesai</button>
            <?php } ?>

            </div>
        </div>
    </div>
</div>
</div>

<!-- Modal untuk upload bukti pembayaran -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Upload Bukti Pembayaraan Anda</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
    <form action="<?= base_url('customer/transaksi/pembayaran_aksi') ?>" enctype="multipart/form-data" method="post">
      <div class="modal-body">
        <div class="form-group">
        <label>Upload Bukti Pembayaran</label>
        <input type="hidden" name="id_rental" class="form-control" value="<?= $tr->id_rental ?>">
        <input type="file" name="bukti_pembayaran" class="form-control">
        </div>
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-sm btn-success">Kirim</button>
      </div>
      </form>
    </div>
  </div>
</div> 