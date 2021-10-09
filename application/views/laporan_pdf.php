<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title><?php echo $title_pdf; ?></title>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('css/bootstrap.min.css'); ?>">
    </head>
    <body>
        <div class="text-center">
            <h3> Data Dokumen </h3>
        </div>
        <h6> Tanggal : <?php echo date("d/m/Y",strtotime($tanggal)); ?></h6>
        <table class="table table-bordered" style="text-align: center;" id="table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Waktu</th>
                    <th>Pengirim</th>
                    <th>Kota Pengirim</th>
                    <th>Tujuan</th>
                    <th>Jenis Barang</th>
                    <th>Security</th>
                    <th>GA</th>
                    <th>OB</th>
                    <th>Penerima</th>
                </tr>
            </thead>
            <tbody>
            <?php $no = 0;
                foreach($data as $dt){ ?>
                <tr>
                    <td><?php echo ++$no; ?></td>
                    <td><?php echo $dt['waktu']; ?></td>
                    <td><?php echo $dt['pengirim']; ?></td>
                    <td><?php echo $dt['kota_pengirim']; ?></td>
                    <td><?php echo $dt['tujuan']; ?></td>
                    <td><?php echo $dt['jenis_barang']; ?></td>
                    <td><?php echo $dt['security']; ?></td>
                    <td><?php echo $dt['ga']; ?></td>
                    <td><?php echo $dt['ob']; ?></td>
                    <td><?php echo $dt['penerima']; ?></td>
                </tr>
            <?php } ?>
            </tbody>
        </table>
    </body>
</html>