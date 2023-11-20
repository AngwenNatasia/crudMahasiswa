            <!-- About Section-->
            <section class="bg-light py-15">
                <div class="container px-15">
                    <div class="row gx-5 justify-content-center">
                        <div class="col-xxl-12">
                            <div class="text-center my-5">
                                <h2 class="display-5 fw-bolder"><span class="text-gradient d-inline"><?php echo $judul;?></span></h2>                                
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <a href="<?=base_url()?>Prodi/tambah" class="btn btn-info mb-2">Tambah Prodi</a>
                                </div>
                                <?= $this->session->flashdata('message'); ?>
                                <div class="col-md-12">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <td>No</td>
                                                <td>Nama Prodi</td>
                                                <td>Ruangan</td>
                                                <td>Jurusan</td>
                                                <td>Akreditasi</td>
                                                <td>Nama Kaprodi</td>
                                                <td>Tahun Berdiri</td>
                                                <td>Output Lulusan</td>
                                                <td>Gambar</td>
                                                <td>Aksi</td>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php $i=1;?>
                                            <?php foreach($prodi as $us):?>
                                            <tr>
                                                <td><?= $i;?></td>
                                                <td><?= $us['nama']?></td>
                                                <td><?= $us['ruangan']?></td>
                                                <td><?= $us['jurusan']?></td>
                                                <td><?= $us['akreditasi']?></td>
                                                <td><?= $us['nama_kaprodi']?></td>
                                                <td><?= $us['tahun_berdiri']?></td>
                                                <td><?= $us['output_lulusan']?></td>
                                                <td><img src="<?= base_url('assets2/img/prodi/'). $us['gambar']; ?>" 
                                                style="width: 100px;" class="img-thumbnail"></td>
                                                <td>
                                                    <a href="<?=base_url('Prodi/hapus/') .$us['id'];?>" class="btn btn-danger">Hapus</a>
                                                    <a href="<?=base_url('Prodi/edit/') .$us['id'];?>" class="btn btn-warning">Edit</a>
                                                </td>
                                            </tr>
                                            <?php $i++;?>
                                            <?php endforeach;?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>