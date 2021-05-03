<table style="width: 60%">

    <h2>Invoice Pembayaran Anda</h2>
            <?php foreach ($transaksi as $tr) : ?>

                <tr>
                    <td>Nama Customer</td>
                    <td>:</td>
                    <td><?= $tr->nama ?></td>
                </tr>

                <tr>
                    <td>Merk Mobil</td>
                    <td>:</td>
                    <td><?= $tr->merk ?></td>
                </tr>

                <tr>
                    <td>Tanggal Rental</td>
                    <td>:</td>
                    <td> <?= date('d/m/Y',strtotime($tr->tanggal_rental)) ?></td>
                </tr>

                <tr>
                    <td>Tanggal Kembali</td>
                    <td>:</td>
                    <td><?= date('d/m/Y',strtotime($tr->tanggal_kembali)); ?></td>
                </tr>

                <tr>
                    <td>Biaya Sewa/Hari</td>
                    <td>:</td>
                    <td>Rp. <?= number_format( $tr->harga,0,',','.') ?></td>
                </tr>

                <?php
                $x = strtotime($tr->tanggal_kembali);
                $y = strtotime($tr->tanggal_rental);
                $jmlHari = abs(($x - $y)/(60*60*24));
                ?>
                <tr>
                    <td>Jumlah Hari Sewa</td>
                    <td>:</td>
                    <td><?= $jmlHari ?> Hari</td>
                </tr>

                <tr>
                    <td>Status Pembayaraan</td>
                    <td>:</td>
                    <td><?php if($tr->status_pembayaran == '0') {
                        echo "Belum Lunas";
                    }else{
                        echo "Lunas";
                    } ?></td>
                </tr>
    
                <tr style="font-weight: bold; color: red">
                    <td>Jumlah Pembayaran</td>
                    <td>:</td>
                    <td>Rp. <?= number_format( $tr->harga * $jmlHari,0,',','.') ?></td>
                </tr>

                <tr>
                    <td>Rekening Pembayaran</td>
                    <td>:</td>
                    <td>
                        <ul>
                            <li>Bank Mandiri 18120779</li>
                            <li>Bank BCA 18120807</li>
                            <li>Bank BNI 118234293</li>
                        </ul>
                    </td>
                </tr>

            <?php endforeach ; ?>
                </table>

<script type="text/javascript">
    window.print();
</script>