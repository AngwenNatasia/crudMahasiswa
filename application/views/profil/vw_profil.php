            <!-- About Section-->
            <section class="bg-light py-15">
                <div class="container px-15">
                    <div class="row gx-5 justify-content-center">
                        <div class="col-xxl-8">
                            <div class="text-center my-5">
                                <h2 class="display-5 fw-bolder"><span class="text-gradient d-inline"><?php echo $judul;?></span></h2>                                
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="card">
                                        <div class="col-md-4">
                                            <img src="<?= base_url('assets2/img/profile/') . $user['gambar']?>" class="card-img">
                                        </div>
                                        <div class="card-body">
                                            <h2 class="card-title"><?= $user['nama']?></h2>
                                            <h6 class="card-subtitle mb-2 text-muted"><?= $user['email']?></h6>
                                            <div class="row">
                                                <div class="col-md-6">Anggota Sejak <?= date('d F Y', $user['date_created']); ?></div>
                                            </div>
                                        </div>
                                        <div class="card-footer justify-content-center">

                                        <a href="<?=base_url('Mahasiswa')?>" class="btn btn-danger">Tutup</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>
        
