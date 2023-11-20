<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
</head>
<body>
    <div class="form">
        <form action="valid.php" method="POST">
        <p><b>Pendaftaran Siswa Baru</b></p>
        <hr>
        <p><b>Nama Lengkap</b><input type="text" placeholder="Nama Depan"><input type="text" placeholder="Nama Belakang"></p>
        <p><b>Nama Panggilan</b><input type="text"></p>
        <p><b>Jenis Kelamin</b>
            <div>
                <input type="radio" name="jk" id="laki-laki" value="laki-laki">
                <label for="laki-laki">laki-laki</label>
            </div>
            <br>
            <div>
                <input type="radio" name="jk" id="perempuan" value="perempuan">
                <label for="perempuan">perempuan</label>
            </div>
        </p>
        <p><b>Berasal dari SMA</b><input type="text"></p>
        <br>
        <p>Calon siswa yang dapat mendaftar maksimal <b>per 1 Juli 2020 berumur 20 tahun</b></p>
        <br>
        <p><b>Tempat Lahir</b><input type="text"></p>
        <p><b>Tanggal Lahir</b><input type="date" name="tglLahir" id="tglLahir"></p>
        <p><b>No. Akta Lahir</b><input type="text"></p>
        <p><b>NIK</b><input type="text"></p>
        <p><b>Anak Ke</b><input type="text" placeholder="sesuai akta"><input type="text" placeholder="sesuai KK"></p>
        <p><b>Status Anak</b>
            <select name="status" id="status">
                <option value="">Silahkan pilih</option>
                <option value="Anak kandung">Anak kandung</option>
                <option value="Anak tiri">Anak Tiri</option>
                <option value="Anak adopsi">Anak Adopsi</option>
        </select></p>
        <p><b>Jumlah Saudara Kandung</b><input type="text"></p>
        <p><b>Kewarganegaraan</b>
            <select name="warga" id="warga">
                <option value="">Silahkan pilih</option>
                <option value="WNI">WNI</option>
                <option value="WNA">WNA</option>
        </select></p>
        <p><b>Agama</b>
            <select name="agama" id="agama">
                <option value="">Silahkan pilih</option>
                <option value="Islam">Islam</option>
                <option value="Buddha">Buddha</option>
                <option value="Protestan">Protestan</option>
                <option value="Khatolik">Khatolik</option>
                <option value="Hindu">Hindu</option>
                <option value="Khong Hu Chu">Khong Hu Chu</option>
        </select></p>
        <p><b>Anak Berkebutuhan Khusus</b>
            <div>
                <input type="radio" name="keb" id="Ya" value="Ya">
                <label for="Ya">Ya</label>
            </div>
            <br>
            <div>
                <input type="radio" name="keb" id="Tidak" value="Tidak">
                <label for="Tidak">Tidak</label>
            </div>
        </p>
        <p><b>Keadaan Jasmani</b><input type="text" placeholder="Penyakit yag pernah diderita"><br>
        <input type="text" placeholder="Berat Badan"><input type="text" placeholder="Tinggi Badan"><br>
        <input type="text" placeholder="Golongan Darah">
        </p>
        <p><b>Alamat sesuai KK</b><input type="text" placeholder="Alamat (beserta RT/RW)"><br>
        <input type="text" placeholder="Kecamatan"><br>
        <input type="text" placeholder="Kelurahan"><input type="text" placeholder="Kota / Desa"><br>
        <input type="text" placeholder="Kode Pos">
        </p>
        <p><b>Alamat Domisili / Yang Ditinggali</b><input type="text" placeholder="Alamat (beserta RT/RW)"><br>
            <input type="text" placeholder="Kecamatan"><br>
            <input type="text" placeholder="Kelurahan"><input type="text" placeholder="Kota / Desa"><br>
            <input type="text" placeholder="Kode Pos">
        </p>
        <p><b>Tinggal Bersama</b>
            <select name="tinggal" id="tinggal">
                <option value="">Silahkan pilih</option>
                <option value="Orang tua">Orang tua</option>
                <option value="Wali">Wali</option>
            </select>    
        </p>
        <p><b>Jenis Tinggal</b>
            <select name="jenis" id="jenis">
                <option value="Rumah">Rumah</option>
                <option value="Apartemen">Apartemen</option>
                <option value="">Silahkan pilih</option>
                <option value="Kos">Kos</option>
                <option value="Kontrakan">Kontrakan</option>
            </select>    
        </p>
        <p><b>Jarak ke Sekolah</b>
            <input type="text" placeholder="meter / kilometer">
        </p>  
        <p><b>Alat Transportasi</b>
            <select name="trans" id="trans">
                <option value="">Silahkan pilih</option>
                <option value="Motor">Motor</option>
                <option value="Mobil">Mobil</option>
                <option value="Bus">Bus</option>
                <option value="Jalan Kaki">Jalan Kaki</option>
            </select>
        </p>
        <p><b>Penerima Bantuan</b>
            <div>
                <input type="radio" name="bantuan" id="Ya" value="Ya">
                <label for="Ya">Ya</label>
            </div>
            <br>
            <div>
                <input type="radio" name="bantuan" id="Tidak" value="Tidak">
                <label for="Tidak">Tidak</label>
            </div>
        </p>
        <p><b>Jenis Bantuan</b>
            <div>
                <input type="radio" name="bantu" id="BSM" value="BSM">
                <label for="BSM">BSM</label>
            </div>
            <br>
            <div>
                <input type="radio" name="bantu" id="Bidik Misi" value="Bidik Misi">
                <label for="Bidik Misi">Bidik Misi</label>
            </div>
            <br>
            <div>
                <input type="radio" name="bantu" id="PIP" value="PIP">
                <label for="PIP">PIP</label>
            </div>
            <br>
            <div>
                <input type="radio" name="bantu" id="KKS" value="KKS">
                <label for="KKS">KKS</label>
            </div>
            <br>
            <div>
                <input type="radio" name="bantu" id="PKH" value="PKH">
                <label for="PKH">PKH</label>
            </div>
            <br>
            <div>
                <input type="radio" name="bantu" id="other" value="other">
                <label for="other"><input type="text" placeholder="other"></label>
            </div>
        </p>
        <p><b>No Tanda Bantuan</b><input type="text"></p>
        <p><b>Data Ayah</b><input type="text" placeholder="Nama Lengkap Ayah"><br>
        <input type="text" placeholder="NIK"><br>
        <input type="date"><input type="text" placeholder="Pendidikan Akhir">
        </p>
        <p><b>No Telpon</b><input type="tel">
        </p>
        <p><b>Pekerjaan Ayah</b>
            <div>
                <input type="radio" name="ayah" id="Buruh" value="Buruh">
                <label for="Buruh">Buruh</label>
            </div>
            <br>
            <div>
                <input type="radio" name="ayah" id="Karyawan Swasta" value="Bidik Misi">
                <label for="Karyawan Swasta">Karyawan Swasta</label>
            </div>
            <br>
            <div>
                <input type="radio" name="ayah" id="Pedagang Kecil" value="Pedagang Kecil">
                <label for="Pedagang Kecil">Pedagang Kecil</label>
            </div>
            <br>
            <div>
                <input type="radio" name="ayah" id="Pedagang Besar" value="Pedagang Besar">
                <label for="Pedagang Besar">Pedagang Besar</label>
            </div>
            <br>
            <div>
                <input type="radio" name="ayah" id="Pensiunan" value="Pensiunan">
                <label for="Pensiunan">Pensiunan</label>
            </div>
            <br>
            <div>
                <input type="radio" name="ayah" id="PNS/TNI/Polri" value="PNS/TNI/Polri">
                <label for="PNS/TNI/Polri">PNS/TNI/Polri</label>
            </div>
            <br>
            <div>
                <input type="radio" name="ayah" id="Sudah Meninggal" value="Sudah Meninggal">
                <label for="Sudah Meninggal">Sudah Meninggal</label>
            </div>
            <br>
            <div>
                <input type="radio" name="ayah" id="Tidak Bekerja" value="Tidak Bekerja">
                <label for="Tidak Bekerja">Tidak Bekerja</label>
            </div>
            <br>
            <div>
                <input type="radio" name="ayah" id="Wiraswasta" value="Wiraswasta">
                <label for="Wiraswasta">Wiraswasta</label>
            </div>
            <br>
            <div>
                <input type="radio" name="ayah" id="other" value="other">
                <label for="other"><input type="text" placeholder="other"></label>
            </div>
        </p>
        <p><b>Penghasilan Ayah</b>
            <select name="hslAyah" id="hslAyah">
                <option value="">Silahkan pilih</option>
                <option value="0-5.000.000">0-5.000.000</option>
                <option value="5.000.001-20.000.000">5.000.001-20.000.000</option>
                <option value="20.000.001-30.000.000">20.000.001-30.000.000</option>
                <option value=">30.000.000">>30.000.000</option>
            </select>
        </p>
        <p><b>Data Ibu</b><input type="text" placeholder="Nama Lengkap Ibu"><br>
            <input type="text" placeholder="NIK"><br>
            <input type="date"><input type="text" placeholder="Pendidikan Akhir">
            </p>
            <p><b>No Telpon</b><input type="tel">
            </p>
            <p><b>Pekerjaan Ibu</b>
                <div>
                    <input type="radio" name="ibu" id="Buruh" value="Buruh">
                    <label for="Buruh">Buruh</label>
                </div>
                <br>
                <div>
                    <input type="radio" name="ibu" id="Karyawan Swasta" value="Bidik Misi">
                    <label for="Karyawan Swasta">Karyawan Swasta</label>
                </div>
                <br>
                <div>
                    <input type="radio" name="ibu" id="Pedagang Kecil" value="Pedagang Kecil">
                    <label for="Pedagang Kecil">Pedagang Kecil</label>
                </div>
                <br>
                <div>
                    <input type="radio" name="ibu" id="Pedagang Besar" value="Pedagang Besar">
                    <label for="Pedagang Besar">Pedagang Besar</label>
                </div>
                <br>
                <div>
                    <input type="radio" name="ibu" id="Pensiunan" value="Pensiunan">
                    <label for="Pensiunan">Pensiunan</label>
                </div>
                <br>
                <div>
                    <input type="radio" name="ibu" id="PNS/TNI/Polri" value="PNS/TNI/Polri">
                    <label for="PNS/TNI/Polri">PNS/TNI/Polri</label>
                </div>
                <br>
                <div>
                    <input type="radio" name="ibu" id="Sudah Meninggal" value="Sudah Meninggal">
                    <label for="Sudah Meninggal">Sudah Meninggal</label>
                </div>
                <br>
                <div>
                    <input type="radio" name="ibu" id="Tidak Bekerja" value="Tidak Bekerja">
                    <label for="Tidak Bekerja">Tidak Bekerja</label>
                </div>
                <br>
                <div>
                    <input type="radio" name="ibu" id="Wiraswasta" value="Wiraswasta">
                    <label for="Wiraswasta">Wiraswasta</label>
                </div>
                <br>
                <div>
                    <input type="radio" name="ibu" id="other" value="other">
                    <label for="other"><input type="text" placeholder="other"></label>
                </div>
            </p>
            <p><b>Penghasilan Ibu</b>
                <select name="hslIbu" id="hslIbu">
                    <option value="">Silahkan pilih</option>
                    <option value="0-5.000.000">0-5.000.000</option>
                    <option value="5.000.001-20.000.000">5.000.001-20.000.000</option>
                    <option value="20.000.001-30.000.000">20.000.001-30.000.000</option>
                    <option value=">30.000.000">>30.000.000</option>
                </select>
            </p>
            <p><b>Data Wali</b><input type="text" placeholder="Nama Lengkap Wali"><br>
                <input type="text" placeholder="NIK"><br>
                <input type="date"><input type="text" placeholder="Pendidikan Akhir">
                </p>
                <p><b>No Telpon</b><input type="tel">
                </p>
                <p><b>Pekerjaan Wali</b>
                    <div>
                        <input type="radio" name="wali" id="Buruh" value="Buruh">
                        <label for="Buruh">Buruh</label>
                    </div>
                    <br>
                    <div>
                        <input type="radio" name="wali" id="Karyawan Swasta" value="Bidik Misi">
                        <label for="Karyawan Swasta">Karyawan Swasta</label>
                    </div>
                    <br>
                    <div>
                        <input type="radio" name="wali" id="Pedagang Kecil" value="Pedagang Kecil">
                        <label for="Pedagang Kecil">Pedagang Kecil</label>
                    </div>
                    <br>
                    <div>
                        <input type="radio" name="wali" id="Pedagang Besar" value="Pedagang Besar">
                        <label for="Pedagang Besar">Pedagang Besar</label>
                    </div>
                    <br>
                    <div>
                        <input type="radio" name="wali" id="Pensiunan" value="Pensiunan">
                        <label for="Pensiunan">Pensiunan</label>
                    </div>
                    <br>
                    <div>
                        <input type="radio" name="wali" id="PNS/TNI/Polri" value="PNS/TNI/Polri">
                        <label for="PNS/TNI/Polri">PNS/TNI/Polri</label>
                    </div>
                    <br>
                    <div>
                        <input type="radio" name="wali" id="Sudah Meninggal" value="Sudah Meninggal">
                        <label for="Sudah Meninggal">Sudah Meninggal</label>
                    </div>
                    <br>
                    <div>
                        <input type="radio" name="wali" id="Tidak Bekerja" value="Tidak Bekerja">
                        <label for="Tidak Bekerja">Tidak Bekerja</label>
                    </div>
                    <br>
                    <div>
                        <input type="radio" name="wali" id="Wiraswasta" value="Wiraswasta">
                        <label for="Wiraswasta">Wiraswasta</label>
                    </div>
                    <br>
                    <div>
                        <input type="radio" name="wali" id="other" value="other">
                        <label for="other"><input type="text" placeholder="other"></label>
                    </div>
                </p>
                <p><b>Penghasilan Wali</b>
                    <select name="hslWali" id="hslWali">
                        <option value="">Silahkan pilih</option>
                        <option value="0-5.000.000">0-5.000.000</option>
                        <option value="5.000.001-20.000.000">5.000.001-20.000.000</option>
                        <option value="20.000.001-30.000.000">20.000.001-30.000.000</option>
                        <option value=">30.000.000">>30.000.000</option>
                    </select>
                </p>
                <p>Ketentuan File
                    <ul>File yang di upload atau di unggah adalah file asli (bukan fotocopy-an)</ul>
                </p>
                <p><b>Akta Kelahiran Calon Siswa</b>
                <input type="file" name="akta">
                </p>
                <p><b>Kaktu Susunan Keluarga (KSK)</b>
                <input type="file" name="ksk">
                </p>
                <p>Kartu Tanda Penduduk (KTP) Orang tua / Wali (KTP)
                <input type="file" name="ktp">    
                </p>
                <p>Surat Pemandian/Baptis bagi yang beragama Khatolik
                <input type="file" name="baptis">    
                </p>
        <input type="submit" value="Daftar"> 
        </form>
    </div>
</body>
</html>
<!-- <?php

?> -->