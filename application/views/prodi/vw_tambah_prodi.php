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
                                            <label for="nama_prodi">Nama Prodi</label>
                                            <input type="text" name="nama" class="form-control" id="nama"
                                                value="<?= set_value('nama'); ?>" placeholder="Nama Prodi">
                                            <?= form_error('nama', '<small class="text-danger pl-3">', '</small>');?>
                                        </div>
                                        <div class="form-group">
                                            <label for="ruangan">Ruangan</label>
                                            <input type="text" name="ruangan" class="form-control" id="ruangan"
                                                value="<?= set_value('ruangan'); ?>" placeholder="Ruangan">
                                            <?= form_error('ruangan', '<small class="text-danger pl-3">', '</small>');?>
                                        </div>
                                        <div class="form-group">
                                            <label for="jurusan">Jurusan</label>
                                            <select name="jurusan" id="jurusan" class="form-control"
                                                value="<?= set_value('jurusan'); ?>">
                                                <option value="">Jurusan</option>
                                                <option value="JTI">JTI</option>
                                                <option value="JTIN">JTIN</option>
                                            </select>
                                            <?= form_error('jurusan', '<small class="text-danger pl-3">', '</small>');?>
                                        </div>
                                        <div class="form-group">
                                            <label for="akreditasi">Akreditasi</label>
                                            <select name="akreditasi" id="akreditasi" class="form-control"
                                                value="<?= set_value('akreditasi'); ?>">
                                                <option value="">Pilih Akreditasi</option>
                                                <option value="A">A</option>
                                                <option value="B">B</option>
                                            </select>
                                            <?= form_error('akreditasi', '<small class="text-danger pl-3">', '</small>');?>
                                        </div>
                                        <div class="form-group">
                                            <label for="nama_kaprodi">Nama Kaprodi</label>
                                            <input type="text" name="nama_kaprodi" class="form-control"
                                                id="nama_kaprodi" value="<?= set_value('nama_kaprodi'); ?>"
                                                placeholder="Nama Kaprodi">
                                            <?= form_error('nama_kaprodi', '<small class="text-danger pl-3">', '</small>');?>
                                        </div>
                                        <div class="form-group">
                                            <label for="tahun_berdiri">Tahun Berdiri</label>
                                            <input type="text" name="tahun_berdiri" class="form-control"
                                                id="tahun_berdiri" value="<?= set_value('tahun_berdiri'); ?>"
                                                placeholder="Tahun Berdiri">
                                            <?= form_error('tahun_berdiri', '<small class="text-danger pl-3">', '</small>');?>
                                        </div>
                                        <div class="form-group">
                                            <label for="lulusan">Lulusan</label>
                                            <input type="text" name="output_lulusan" class="form-control"
                                                id="ouput_lulusan" value="<?= set_value('output_lulusan'); ?>"
                                                placeholder="Lulusan">
                                            <?= form_error('output_lulusan', '<small class="text-danger pl-3">', '</small>');?>
                                        </div>
                                        <div class="form-group">
                                        <label for="gambar">Gambar</label>
                                        <div class="custom-file">
                                            <input type="file" name="gambar" class="custom-file-input" id="gambar">
                                            <label for="gambar" class="custom-file-label">Choose File</label>
                                        </div>
                                </div>
                                <a href="<?=base_url('Prodi');?>" class="btn btn-danger">Tutup</a>
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