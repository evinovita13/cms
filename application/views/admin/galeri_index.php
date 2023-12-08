<div id="flash" data-flash="<?= $this->session->flashdata('alert'); ?>"></div>
<div class="col-xl-12 mb-4">
    <div class="card">
        <form action="<?= base_url('admin/galeri/simpan') ?>" method="post" enctype='multipart/form-data'>
            <h5 class="card-header">file input</h5>
            <div class="card-body">
                <div class="mb-3">
                    <label class="form-label">Judul</label>
                    <input type="text" class="form-control" placeholder="Judul foto" name="judul" required >
                </div>
                <div class="mb-3">
                    <label for="formFile" class="form-label">Pilih Foto dengan ukuran (1:1)</label>
                    <input class="form-control" type="file" name="foto">
                </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
        </form>
    </div>
    
</div>

<div class="row">
<?php foreach ($galeri as $glr) { ?>
	<div class="col-lg-4">
		<div class="card p-3 mt-3 mb-3" style=";border:solid">
			<img src="<?= base_url('assets/upload/galeri/') . $glr['foto']; ?>" class="card-img-top">
			<div class="card-body">
				<p class="card-text"><?= $glr['judul'];?></p>
                <a href="<?php echo site_url('admin/galeri/delete_data/'.$glr['foto']);?>"
            class="btn btn-danger"><i class="fa fa-trash" id="btn-hapus"></i></a>
			</div>
		</div>
	</div>
	<?php } ?>
</div>
