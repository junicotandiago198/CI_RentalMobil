<h3 style="text-align: center">Laporan Transaksi Rental Mobil</h3>
<table>
    <tr>
        <td>Dari Tanggal</td>
        <td>:</td>
        <td><?= date('d-M-Y',strtotime($_GET['dari'])); ?></td>
    </tr>

    <tr>
        <td>Sampai Tanggal</td>
        <td>:</td>
        <td><?= date('d-M-Y',strtotime($_GET['sampai'])); ?></td>
    </tr>

    
 
<table class="table table-bordered table-striped table-responsive mt-3">
        <tr>
            <th>No</th>
            <th>Customer</th>
            <th>Mobil</th>
            <th>Tgl. Rental</th>
            <th>Tgl. Kembali</th>
            <th>Harga/Hari</th>
            <th>Denda/Hari</th>
            <th>Total Denda</th>
            <th>Tgl. Dikembalikan</th>
            <th>Status Pengembalian</th>
            <th>Status Rental</th>
        </tr>

    <?php
    $no = 1;
    foreach ($laporan as $tr) : ?>
        <tr>
            <td><?= $no++ ?></td>
            <td><?= $tr->nama ?></td>
            <td><?= $tr->merk ?></td>
            <td><?= date('d/m/y',strtotime($tr->tanggal_rental)); ?></td>
            <td><?= date('d/m/Y', strtotime($tr->tanggal_kembali ));?></td>
            <td>Rp.<?= number_format($tr->harga,0,',','.') ?></td>
            <td>Rp. <?= number_format($tr->denda,0,',','.') ?></td>
            <td>Rp. <?= number_format($tr->total_denda,0,',','.') ?></td>

            <td>
                <?php if($tr->tanggal_pengembalian == "0000-00-00"){
                    echo "-";
                }else{
                    echo date('d/m/Y',strtotime($tr->tanggal_pengembalian));
                } ?>
            </td>
            
        <td>
            <?php if($tr->status == "1") {
                echo "Kembali";
            }else{
                echo "Belum Kembali";
            }?>
        </td>

        <td>
            <?php if($tr->status == "1") {
                echo "Kembali";
            }else{
                echo "Belum Kembali";
            }?>
        </td>   

        </tr>
    <?php endforeach ; ?>
</table>

<script type="text/javascript">
window.print()
</script>
