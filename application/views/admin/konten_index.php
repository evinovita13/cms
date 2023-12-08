<div id="flash" data-flash="<?= $this->session->flashdata('alert'); ?>"></div>
<div class="col-lg-4 col-md-5">
    <div class="mt-1 mb-3">
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
        Tambah Konten
        </button>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <form action="<?= base_url('admin/konten/simpan') ?>" method="post" enctype='multipart/form-data'>
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tambah Konten</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col mb-3">
                            <label class="form-label">Judul</label>
                            <input type="text" class="form-control" placeholder="Judul Konten" name="judul" required >
                        </div>
                    </div>
                    <div class="row">
                        <div class="col mb-3">
                            <label class="form-label">Kategori</label>
                           <select name="id_kategori" class="form-control">
                           <?php foreach($kategori as $aa) { ?>
                                <option value="<?= $aa['id_kategori'] ?>"><?= $aa['nama_kategori'] ?></option>
                           <?php  } ?>
                           </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col mb-3">
                            <label class="form-label">Keterangan</label>
                           <textarea name="keterangan" class="form-control"></textarea>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col mb-3">
                            <label class="form-label">Foto</label>
                           <input type="file" name="foto" class="form-control"
                           accept="image/png, image/jpeg">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
                </form>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="col-md-12">
    <div class="white_shd full margin_bottom_30">
        <div class="full graph_head">
            <div class="heading1 margin_0">
            <h2> Konten</h2>
            </div>
        </div>
        <div class="table_section padding_infor_info">
            <div class="table-responsive-sm">
            <table class="table">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Judul</th>
                        <th>Kategori Konten</th>
                        <th>Tanggal</th>
                        <th>Kreator</th>
                        <th>Foto</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no=1; foreach($konten as $aa) { ?>
                    <tr>
                        <td><?= $no; ?></td>
                        <td><?= $aa['judul'] ?></td>
                        <td><?= $aa['nama_kategori'] ?></td>
                        <td><?= $aa['tanggal'] ?></td>
                        <td><?= $aa['nama'] ?></td>
                        <td>
                            <a href="<?= base_url('assets/upload/konten/'.$aa['foto']) ?>" target="_blank">
                            <i class="fa fa-photo"></i> lihat foto
                            </a>
                        </td>
                        <td>
                        <a href="<?php echo site_url('admin/konten/delete_data/'.$aa['foto']);?>" id="btn-hapus" class="btn btn-danger"><i class="fa fa-trash"></i></a>
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#konten<?= $no; ?>"><i class="fa fa-edit"></i>
                        </button>

                        <!-- Modal -->
                        <div class="modal fade" id="konten<?= $no; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <form action="<?= base_url('admin/konten/update') ?>" method="post" enctype='multipart/form-data'>
                                <input type="hidden" name="nama_foto" value="<?= $aa['foto'] ?>">
                                <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel"><?= $aa['judul'] ?></h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col mb-3">
                                            <label class="form-label">Judul</label>
                                            <input type="text" class="form-control" value="<?= $aa['judul'] ?>" name="judul" >
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col mb-3">
                                            <label class="form-label">Kategori</label>
                                        <select name="id_kategori" class="form-control">
                                        <?php foreach($kategori as $uu) { ?>
                                                <option 
                                                <?php if($uu['id_kategori']==$aa['id_kategori']){ echo"selected"; } ?>
                                                value="<?= $uu['id_kategori'] ?>">
                                                <?= $uu['nama_kategori'] ?></option>
                                        <?php  } ?>
                                        </select>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col mb-3">
                                            <label class="form-label">Keterangan</label>
                                        <textarea name="keterangan" class="form-control"><?= $aa['keterangan'] ?></textarea>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col mb-3">
                                            <label class="form-label">Foto</label>
                                        <input type="file" name="foto" class="form-control"
                                        accept="image/png, image/jpeg">
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                </div>
                                </form>
                                </div>
                            </div>
                        </div>
                        </td>
                    </tr>
                    <?php $no++; } ?>
                </tbody>
            </table>
            </div>
        </div>
    </div>
</div>