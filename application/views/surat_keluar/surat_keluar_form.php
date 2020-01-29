<div class="content-wrapper">
    
    <section class="content">
        <div class="box box-warning box-solid">
            <div class="box-header with-border">
                <h3 class="box-title">INPUT DATA SURAT_KELUAR</h3>
            </div>
            <form action="<?php echo $action; ?>" method="post">
            
<table class='table table-bordered>'        

	    <tr><td width='200'>Nomor Surat <?php echo form_error('nomor_surat') ?></td><td><input type="text" class="form-control" name="nomor_surat" id="nomor_surat" placeholder="420/.../422.101/TAHUN" value="<?php echo $nomor_surat; ?>" /></td></tr>
	    <tr><td width='200'>Perihal <?php echo form_error('perihal') ?></td><td><input type="text" class="form-control" name="perihal" id="perihal" placeholder="Perihal" value="<?php echo $perihal; ?>" /></td></tr>
	    <tr><td width='200'>Tanggal <?php echo form_error('tanggal') ?></td><td><input type="date" class="form-control" name="tanggal" id="tanggal" placeholder="Tanggal" value="<?php echo $tanggal; ?>" /></td></tr>
	    <tr><td width='200'>Penerima <?php echo form_error('penerima') ?></td><td><input type="text" class="form-control" name="penerima" id="penerima" placeholder="Penerima" value="<?php echo $penerima; ?>" /></td></tr>
	    <tr><td width='200'>Pengirim <?php echo form_error('pengirim') ?></td><td><input type="text" class="form-control" name="pengirim" id="pengirim" placeholder="Pengirim" value="<?php echo $pengirim; ?>" /></td></tr>
	    <tr><td></td><td><input type="hidden" name="id_keluar" value="<?php echo $id_keluar; ?>" /> 
	    <button type="submit" class="btn btn-danger"><i class="fa fa-floppy-o"></i> <?php echo $button ?></button> 
	    <a href="<?php echo site_url('surat_keluar') ?>" class="btn btn-info"><i class="fa fa-sign-out"></i> Kembali</a></td></tr>
	</table></form>        </div>
</div>
</div>