<div class="content-wrapper">
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box box-warning box-solid">

                    <div class="box-header">
                        <h3 class="box-title">DETAIL SURAT KELUAR</b></h3>
                    </div>

                    <div class="box-body">
                        <div style="padding-bottom: 10px;">
                            <table class="table table-bordered table-striped" id="mytable">
                            <tr><th>Nomor Surat</th><td><?php echo $nomor_surat; ?></td></tr>
	                        <tr><th>Perihal</th><td><?php echo $perihal; ?></td></tr>
                            <tr><th>Tanggal</th><td><?php echo $tanggal; ?></td></tr>
                            <tr><th>Pengirim</th><td><?php echo $pengirim; ?></td></tr>
                            <tr><th>Penerima</th><td><?php echo $penerima; ?></td></tr>
                            <tr><th></th><td><a href="<?php echo site_url('surat_masuk') ?>" class="btn btn-default">Cancel</a></td></tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
    </section>
</div>