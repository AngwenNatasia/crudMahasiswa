            <!-- About Section-->
            <section class="bg-light py-15">
                <div class="container px-15">
                    <div class="row gx-5 justify-content-center">
                        <div class="col-xxl-8">
                            <div class="text-center my-5">
                                <h2 class="display-5 fw-bolder"><span class="text-gradient d-inline"><?php echo $judul;?></span></h2>                                
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <a href="<?=base_url()?>Mahasiswa/tambah" class="btn btn-info mb-2">Tambah Mahasiswa</a>
                                </div>
                                <?= $this->session->flashdata('message'); ?>
                                <div class="col-md-12">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <td>No</td>
                                                <td>Nama</td>
                                                <td>NIM</td>
                                                <td>Email</td>
                                                <td>Aksi</td>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $i=1;?>
                                            <?php foreach($mahasiswa as $us):?>
                                            <tr>
                                                <td><?= $i;?></td>
                                                <td><?= $us['nama']?></td>
                                                <td><?= $us['nim']?></td>
                                                <td><?= $us['email']?></td>
                                                <td>
                                                    <a href="<?=base_url('Mahasiswa/hapus/') .$us['id'];?>" class="btn btn-danger">Hapus</a>
                                                    <a href="<?=base_url('Mahasiswa/edit/') .$us['id'];?>" class="btn btn-warning">Edit</a>
                                                    <a href="<?=base_url('Mahasiswa/detail/') .$us['id'];?>" class="btn btn-info">Detail</a>
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
        
