<!doctype html>
<html>
    <head>
        <title>harviacode.com - codeigniter crud generator</title>
        <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css') ?>"/>
        <style>
            .word-table {
                border:1px solid black !important; 
                border-collapse: collapse !important;
                width: 100%;
            }
            .word-table tr th, .word-table tr td{
                border:1px solid black !important; 
                padding: 5px 10px;
            }
        </style>
    </head>
    <body>
        <h2>Surat_masuk List</h2>
        <table class="word-table" style="margin-bottom: 10px">
            <tr>
                <th>No</th>
		<th>Nomor Surat</th>
		<th>Perihal</th>
		<th>Tanggal</th>
		<th>Pengirim</th>
		<th>Penerima</th>
		
            </tr><?php
            foreach ($surat_masuk_data as $surat_masuk)
            {
                ?>
                <tr>
		      <td><?php echo ++$start ?></td>
		      <td><?php echo $surat_masuk->nomor_surat ?></td>
		      <td><?php echo $surat_masuk->perihal ?></td>
		      <td><?php echo $surat_masuk->tanggal ?></td>
		      <td><?php echo $surat_masuk->pengirim ?></td>
		      <td><?php echo $surat_masuk->penerima ?></td>	
                </tr>
                <?php
            }
            ?>
        </table>
    </body>
</html>