<section class="bg-light py-15">
    <div class="container px-15">
        <div class="row gx-5 justify-content-center">
            <div class="col-xxl-12">
                <div class="text-center my-5">
                    <h2 class="display-5 fw-bolder"><span class="text-gradient d-inline"><?php echo $judul;?></span>
                    </h2>
                </div>
                <div class="card">
                    <div class="card-header justify-content-center">Form Tambah Data Mahasiswa</div>
                    <div class="card-body">
                        <form action="" method="POST">
                            <div class="form-group">
                                <input type="hidden" name="id" class="form-control" id="id" placeholder="Id"
                                    value="<?= $mahasiswa['id']; ?>">
                            </div>
                            <div class="form-group">
                                <label for="nama">Nama</label>
                                <input type="text" name="nama" class="form-control" id="nama" placeholder="Nama"
                                    value="<?= $mahasiswa['nama']; ?>">
                                    <?= form_error('nama', '<small class="text-danger pl-3">', '</small>');?>
                            </div>
                            <div class="form-group">
                                <label for="nim">NIM</label>
                                <input type="text" name="nim" class="form-control" id="nim" placeholder="NIM"
                                    value="<?= $mahasiswa['nim']; ?>">
                                    <?= form_error('nim', '<small class="text-danger pl-3">', '</small>');?>
                            </div>
                            <div class="form-group">
                                <label for="jenis_kelamin">Jenis Kelamin</label>
                                <select name="jenis_kelamin" id="jenis_kelamin" class="form-control"
                                    value="<?= $mahasiswa['jenis_kelamin']; ?>">
                                    <option value="Laki-laki" <?php if ($mahasiswa['jenis_kelamin'] == "Laki-laki"){
                                                    echo "selected";
                                                }?>>Laki-laki</option>
                                    <option value="Perempuan" <?php if ($mahasiswa['jenis_kelamin'] == "Perempuan"){
                                                    echo "selected";
                                                }?>>Perempuan</option>
                                </select>
                                <?= form_error('jenis_kelamin', '<small class="text-danger pl-3">', '</small>');?>
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" name="email" class="form-control" id="email" placeholder="Email"
                                    value="<?= $mahasiswa['email']; ?>">
                                    <?= form_error('email', '<small class="text-danger pl-3">', '</small>');?>
                            </div>
                            <div class="form-group">
                                <label for="prodi">Prodi</label>
                                <select name="prodi" id="prodi" class="form-control">
                                    <?php foreach ($prodi as $p): ?>
                                    <option value="<?= $p['id']; ?>" <?php if ($mahasiswa['prodi'] == $p['id']){
                                                    echo "selected";
                                                }?>><?= $p['nama']; ?></option>
                                    <?php endforeach; ?>
                                    <?= form_error('prodi', '<small class="text-danger pl-3">', '</small>');?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="asal_sekolah">Asal Sekolah</label>
                                <input type="text" name="asal_sekolah" class="form-control" id="asal_sekolah"
                                    placeholder="Asal Sekolah" value="<?= $mahasiswa['asal_sekolah']; ?>">
                                    <?= form_error('asal_sekolah', '<small class="text-danger pl-3">', '</small>');?>
                            </div>
                            <div class="form-group">
                                <label for="no_hp">No HP</label>
                                <input type="tel" name="no_hp" class="form-control" id="no_hp" placeholder="No HP"
                                    value="<?= $mahasiswa['no_hp']; ?>">
                                    <?= form_error('no_hp', '<small class="text-danger pl-3">', '</small>');?>
                            </div>
                            <div class="form-group">
                                <label for="alamat">Alamat</label>
                                <input type="text" name="alamat" class="form-control" id="alamat" placeholder="Alamat"
                                    value="<?= $mahasiswa['alamat']; ?>">
                                    <?= form_error('alamat', '<small class="text-danger pl-3">', '</small>');?>
                            </div>
                            <a href="<?=base_url('Mahasiswa')?>" class="btn btn-danger">Tutup</a>
                            <button type="submit" name="tambah" class="btn btn-primary float-right">Tambah
                                Mahasiswa</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
</main>