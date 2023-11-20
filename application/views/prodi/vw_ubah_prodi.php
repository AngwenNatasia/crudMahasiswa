            <!-- About Section-->
            <section class="bg-light py-15">
                <div class="container px-15">
                    <div class="row gx-5 justify-content-center">
                        <div class="col-xxl-12">
                            <div class="text-center my-5">
                                <h2 class="display-5 fw-bolder"><span
                                        class="text-gradient d-inline"><?php echo $judul;?></span></h2>
                            </div>
                            <div class="card">
                                <div class="card-header justify-content-center">Form Tambah Data Prodi</div>
                                <div class="card-body">
                                    <form action="" method="POST" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <input type="hidden" name="id" class="form-control" id="id" placeholder="Id"
                                                value="<?= $prodi['id']; ?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="nama_prodi">Nama Prodi</label>
                                            <input type="text" name="nama" class="form-control" id="nama"
                                                placeholder="Nama Prodi" value="<?= $prodi['nama']; ?>">
                                                <?= form_error('nama', '<small class="text-danger pl-3">', '</small>');?>
                                        </div>
                                        <div class="form-group">
                                            <label for="ruangan">Ruangan</label>
                                            <input type="text" name="ruangan" class="form-control" id="ruangan"
                                                placeholder="Ruangan" value="<?= $prodi['ruangan']; ?>">
                                                <?= form_error('ruangan', '<small class="text-danger pl-3">', '</small>');?>
                                        </div>
                                        <div class="form-group">
                                            <label for="jurusan">Jurusan</label>
                                            <input type="text" name="jurusan" id="jurusan" class="form-control"
                                                value="<?= $prodi['jurusan']; ?>">
                                                <?= form_error('jurusan', '<small class="text-danger pl-3">', '</small>');?>
                                        </div>
                                        <div class="form-group">
                                            <label for="akreditasi">Akreditasi</label>
                                            <input name="akreditasi" id="akreditasi" class="form-control" type="text"
                                                value="<?= $prodi['akreditasi']; ?>">
                                                <?= form_error('akreditasi', '<small class="text-danger pl-3">', '</small>');?>
                                        </div>
                                        <div class="form-group">
                                            <label for="nama_kaprodi">Nama Kaprodi</label>
                                            <input type="text" name="nama_kaprodi" class="form-control"
                                                id="nama_kaprodi" placeholder="Nama Kaprodi"
                                                value="<?= $prodi['nama_kaprodi']; ?>">
                                                <?= form_error('nama_kaprodi', '<small class="text-danger pl-3">', '</small>');?>
                                        </div>
                                        <div class="form-group">
                                            <label for="tahun_berdiri">Tahun Berdiri</label>
                                            <input type="text" name="tahun_berdiri" class="form-control"
                                                id="tahun_berdiri" placeholder="Tahun Berdiri"
                                                value="<?= $prodi['tahun_berdiri']; ?>">
                                                <?= form_error('tahun_berdiri', '<small class="text-danger pl-3">', '</small>');?>
                                        </div>
                                        <div class="form-group">
                                            <label for="lulusan">Lulusan</label>
                                            <input type="text" name="output_lulusan" class="form-control"
                                                id="output_lulusan" placeholder="Lulusan"
                                                value="<?= $prodi['output_lulusan']; ?>">
                                                <?= form_error('output_lulusan', '<small class="text-danger pl-3">', '</small>');?>
                                        </div>
                                        <div class="form-group">
                                            <img src="<?= base_url('assets2/img/prodi/'). $prodi['gambar']?>" style="width: 100px;" class="img-thumbnail">
                                        <label for="gambar">Gambar</label>
                                        <div class="custom-file">
                                            <input type="file" name="gambar" class="custom-file-input" id="gambar">
                                            <label for="gambar" class="custom-file-label">Choose File</label>
                                        </div>
                                        <a href="<?=base_url('Prodi')?>" class="btn btn-danger">Tutup</a>
                                        <button type="submit" name="tambah" class="btn btn-primary float-right">Tambah
                                            Prodi</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            </main>