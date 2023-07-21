<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Style CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo base_url('style/style.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('style/berita.css'); ?>">
    <link rel="shortcut icon" href="<?php echo base_url('style/IMG_3889.PNG'); ?>">
    <title>Statistik Desa Kiarajangkung</title>
</head>

<body>

    <div class="container-fluid">

        <!-- Header -->
        <div class="row bg-body-tertiary sticky-top">
            <!-- Range -->
            <div class="col-md-1"></div>
            <!-- Navigation -->
            <div class="col">
                <nav class="navbar navbar-expand-lg bg-body-tertiary rounded-bottom-4">
                    <div class="container-fluid">

                        <!-- Logo -->
                        <a href="<?=base_url()?>" class="navbar-brand" ><img class="title" src="<?php echo base_url('style/IMG_3889.PNG'); ?>" alt="Kiarajangkung" width="30" class="d-inline-block align-text-top"></a>
                        <span><a class="navbar-brand" href="<?=base_url()?>">Kiarajangkung</a></span>
                        
                        <!-- Button Collapse -->
                        <button class="navbar-toggler float-end" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <!-- Collapse Item -->
                        <div class="collapse navbar-collapse " id="navbarScroll">
                            <div class="col">

                                <!-- Navbar Utama -->
                                <ul class="navbar-nav justify-content-end">
                                    <li class="nav-item">
                                        <a class="nav-link" aria-current="page" href="<?= base_url() ?>">Beranda</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" aria-current="page"
                                            href="<?= site_url('berita') ?>">Berita</a>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" role="button"
                                            data-bs-toggle="dropdown" aria-expanded="false">
                                            Profile Kiarajangkung
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="<?= site_url('ProfileD/profile') ?>">Profile</a></li>
                                            <li><a class="dropdown-item" href="<?= site_url('ProfileD/sejarah') ?>">Sejarah</a></li>
                                            <li><a class="dropdown-item" href="<?= site_url('ProfileD/wilayah') ?>">Wilayah</a></li>
                                            <li><a class="dropdown-item" href="<?= site_url('ProfileD/status_masyarakat') ?>">Status Masyarakat</a></li>
                                            <li><a class="dropdown-item" href="<?= site_url('ProfileD/statistik') ?>">Statistik</a></li>
                                        </ul>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" role="button"
                                            data-bs-toggle="dropdown" aria-expanded="false">
                                            Transparansi
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="<?= site_url('transparasi/anggaran') ?>">Anggaran</a></li>
                                            <li><a class="dropdown-item" href="<?= site_url('transparasi/keamanan') ?>">Produk Hukum</a></li>
                                        </ul>
                                    </li>
                                    <?php if( $type=$this->session->userdata('tipe')!='' ) { ?>
                                        <?php if( $type=$this->session->userdata('tipe')=='Admin' ) { ?>
                                        <li class="nav-item">
                                            <a class="nav-link" aria-current="page" href="<?= site_url('admin') ?>">Admin</a>
                                        </li>
                                        <?php } else if( $type=$this->session->userdata('tipe')=='Author' ) { ?>
                                        <li class="nav-item">
                                            <a class="nav-link" aria-current="page" href="<?= site_url('admin') ?>">Author</a>
                                        </li>
                                        <?php } ?>
                                        <span class="navbar-brand"><img  width="30" class="d-inline-block align-text-top float-end rounded-circle"  src="<?=base_url('uploads/users/'.$this->session->userdata('foto'))?>" alt=""></span>
                                    <?php } ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
            <!-- Range -->
            <div class="col-md-1"></div>
        </div>

        <!-- Main -->
        <div class="row pt-4 pb-4">
            <!-- Ads -->
            <div class="col-md-1"></div>
            <!-- Content -->
            <div class="col">

                <!-- Jumlah Penduduk -->
                <div class="row pt-2 pb-2">
                    <h2>Statistik</h2>
                    <h4>A. Kependudukan</h4>
                    <h6>a. Jumlah Penduduk : 3.895 orang</h6>
                    <div class="container">
                        <div class="col-9">
                            <table class="table table-hover table-bordered table-sm">
                                <thead class="table-dark">
                                    <tr align="center">
                                        <th scope="col">No.</th>
                                        <th scope="col">Nama Dusun</th>
                                        <th scope="col">Jumlah KK</th>
                                        <th scope="col">Laki Laki </th>
                                        <th scope="col">Perempuan </th>
                                        <th scope="col">Jumlah JIwa </th>

                                    </tr>
                                </thead>
                                <tbody class="table-group-divider">
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Cimulya</td>
                                        <td>321</td>
                                        <td>452</td>
                                        <td>471</td>
                                        <td>923</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">2</th>
                                        <td>Cilangen</td>
                                        <td>293</td>
                                        <td>364</td>
                                        <td>421</td>
                                        <td>785</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">3</th>
                                        <td>Kiarajangkung</td>
                                        <td>231</td>
                                        <td>326</td>
                                        <td>325</td>
                                        <td>651</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">4</th>
                                        <td>Sirnamanah</td>
                                        <td>209</td>
                                        <td>302</td>
                                        <td>326</td>
                                        <td>628</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">5</th>
                                        <td>Cipalegor</td>
                                        <td>329</td>
                                        <td>467</td>
                                        <td>441</td>
                                        <td>908</td>
                                    </tr>
                                </tbody>
                                <tfoot class="table-secondary">
                                    <tr>
                                        <th scope="col" colspan="2">jumlah</th>
                                        <th scope="col">1.383</th>
                                        <th scope="col">1.911</th>
                                        <th scope="col">1.984</th>
                                        <th scope="col">3.895</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- Jumlah Penduduk Berdasarkan Agama -->
                <div class="row pt-2 pb-2">
                    <h6>b. Jumlah Penduduk Berdasarkan Agama</h6>
                    <div class="container">
                        <div class="col-9">
                            <table class="table table-hover table-bordered table-sm">
                                <thead class="table-dark">
                                    <tr align="center">
                                        <th scope="col">No.</th>
                                        <th scope="col">Nama Dusun</th>
                                        <th scope="col">Islam</th>
                                        <th scope="col">Katholik</th>
                                        <th scope="col">Kristen/Protestan </th>
                                        <th scope="col">Hindu </th>
                                        <th scope="col">Budha </th>
                                        <th scope="col">Kepercayaan Terhadap Tuhan YME </th>

                                    </tr>
                                </thead>
                                <tbody class="table-group-divider">
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Cimulya</td>
                                        <td>923</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">2</th>
                                        <td>Cilangen</td>
                                        <td>785</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">3</th>
                                        <td>Kiarajangkung</td>
                                        <td>651</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">4</th>
                                        <td>Sirnamanah</td>
                                        <td>614</td>
                                        <td>14</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">5</th>
                                        <td>Cipalegor</td>
                                        <td>898</td>
                                        <td>6</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>4</td>
                                    </tr>
                                </tbody>
                                <tfoot class="table-secondary">
                                    <tr>
                                        <th scope="col" colspan="2">jumlah</th>
                                        <th scope="col">3.895</th>
                                        <th scope="col">20</th>
                                        <th scope="col">0</th>
                                        <th scope="col">0</th>
                                        <th scope="col">0</th>
                                        <th scope="col">4</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- Jumlah Penduduk Berdasarkan Pendidikan -->
                <div class="row pt-2 pb-2">
                    <h6>c. Jumlah Penduduk Berdasarkan Pendidikan</h6>
                    <div class="container">
                        <div class="col-9">
                            <table class="table table-hover table-bordered table-sm">
                                <thead class="table-dark">
                                    <tr align="center">
                                        <th scope="col">No.</th>
                                        <th scope="col">Tingkatan</th>
                                        <th scope="col">Jumlah</th>

                                    </tr>
                                </thead>
                                <tbody class="table-group-divider">
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Taman Kanak - kanak</td>
                                        <td>105 Orang</td>

                                    </tr>
                                    <tr>
                                        <th scope="row">2</th>
                                        <td>Sekolah Dasar</td>
                                        <td>2.340 Orang</td>

                                    </tr>
                                    <tr>
                                        <th scope="row">3</th>
                                        <td>SLTP / Sederajat</td>
                                        <td>653 orang</td>

                                    </tr>
                                    <tr>
                                        <th scope="row">4</th>
                                        <td>SLTA / Sederajat</td>
                                        <td>390 orang</td>

                                    </tr>
                                    <tr>
                                        <th scope="row">5</th>
                                        <td>D-1 / Sederajat</td>
                                        <td>1 orang</td>

                                    </tr>
                                    <tr>
                                        <th scope="row">6</th>
                                        <td>D-2 / Sederajat</td>
                                        <td>2 orang</td>

                                    </tr>
                                    <tr>
                                        <th scope="row">7</th>
                                        <td>D-3 / Sederajat</td>
                                        <td>7 orang</td>

                                    </tr>
                                    <tr>
                                        <th scope="row">8</th>
                                        <td>S-1 / Sederajat</td>
                                        <td>121 orang</td>

                                    </tr>
                                    <tr>
                                        <th scope="row">9</th>
                                        <td>S-2 / Sederajat</td>
                                        <td>3 orang</td>

                                    </tr>
                                    <tr>
                                        <th scope="row">10</th>
                                        <td>PNS</td>
                                        <td>19 orang</td>

                                    </tr>
                                    <tr>
                                        <th scope="row">11</th>
                                        <td>POLRI</td>
                                        <td>2 orang</td>
                                    </tr>

                                </tbody>

                            </table>
                        </div>
                    </div>
                </div>
                <!--Jumlah Penduduk Berdasarkan Mata Pencaharian-->
                <div class="row pt-2 pb-2">
                    <h6>d. Jumlah Penduduk Berdasarkan Mata Pencaharian</h6>
                    <div class="container">
                        <div class="col-9">
                            <table class="table table-hover table-bordered table-sm">
                                <thead class="table-dark">
                                    <tr align="center">
                                        <th scope="col">No.</th>
                                        <th scope="col">Mata Pencaharian</th>
                                        <th scope="col">Jumlah</th>

                                    </tr>
                                </thead>
                                <tbody class="table-group-divider">
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>PNS</td>
                                        <td>19 Orang</td>

                                    </tr>
                                    <tr>
                                        <th scope="row">2</th>
                                        <td>Polri</td>
                                        <td>2 Orang</td>

                                    </tr>
                                    <tr>
                                        <th scope="row">3</th>
                                        <td>petani</td>
                                        <td>169 orang</td>

                                    </tr>
                                    <tr>
                                        <th scope="row">4</th>
                                        <td>Buruh Tani</td>
                                        <td>57 orang</td>

                                    </tr>
                                    <tr>
                                        <th scope="row">5</th>
                                        <td>Buruh Harian Lepas</td>
                                        <td>638 orang</td>

                                    </tr>
                                    <tr>
                                        <th scope="row">6</th>
                                        <td>Pedagang</td>
                                        <td>69 orang</td>

                                    </tr>
                                    <tr>
                                        <th scope="row">7</th>
                                        <td>Peternak</td>
                                        <td>7 orang</td>

                                    </tr>


                                </tbody>

                            </table>
                        </div>
                    </div>
                </div>
                <!--Infrastruktur-->
                <div class="row pt-2 pb-2">
                    <h4>B. Infrastruktur</h4>
                    <p class="fs-5">a. Detail Jalan :

                        <li class="fs-7" style="text-indent: 0.3in;">Panjang Jalan Yang beraspal			: 2.300 m</li>
                        <li class="fs-7" style="text-indent: 0.3in;">Panjang Jalan Berbatu				: 1.700 m</li>
                        <li class="fs-7" style="text-indent: 0.3in;">Panjang Jalan Bertanah				: 2.500 m</li>
                        <li class="fs-7" style="text-indent: 0.3in;">Panjang Jalan Setapak				: -</li>
                    </p>
                </div>

                <!--Sarana dan Prasarana-->
                <div class="row pt-2 pb-2">
                    <p class="fs-5">b. Sarana & Prasarana :
                        <li class="fs-7" style="text-indent: 0.3in;">Mobil : 11 buah</li>
                        <li class="fs-7" style="text-indent: 0.3in;">Pik Up : 6 buah</li>
                        <li class="fs-7" style="text-indent: 0.3in;">Truk : 3 buah</li>
                        <li class="fs-7" style="text-indent: 0.3in;">Jembatan : 2 buah</li>
                        <li class="fs-7" style="text-indent: 0.3in;">Irigasi : 6 buah</li>
                        <li class="fs-7" style="text-indent: 0.3in;">Sarana Ibadah / Masjid : 7 buah</li>
                        <li class="fs-7" style="text-indent: 0.3in;">Lapangan : 1 buah</li>
                        <li class="fs-7" style="text-indent: 0.3in;">Balai Desa : 1 buah</li>
                        <li class="fs-7" style="text-indent: 0.3in;">Air Bersih dan Sanitasi : 5 buah</li>
                        <li class="fs-7" style="text-indent: 0.3in;">Sekolah Dasar : 3 buah</li>
                        <li class="fs-7" style="text-indent: 0.3in;">Sekolah Menengah Pertama : 1 buah</li>
                        <li class="fs-7" style="text-indent: 0.3in;">Sekolah Menengah Atas : 1 buah</li>
                    </p>
                </div>


                <div class="row pt-2 pb-2">
                    <p class="fs-5">c. Kondisi Sarana & Prasarana :
                        <li class="fs-6" style="text-indent: 0.3in;">Jalan Desa : </li>
                            <li class="fs-7" style="text-indent: 0.5in; list-style:none;">Total Panjang Jalan Desa : 2,5 km</li>
                            <li class="fs-7" style="text-indent: 0.7in; list-style:none;">-	Dalam kondisi baik / beraspal					:       -	Km</li>
                            <li class="fs-7" style="text-indent: 0.7in; list-style:none;">-	Beraspal tapi rusak						       :       - 	Km</li>
                            <li class="fs-7" style="text-indent: 0.7in; list-style:none;">-	Beraspal tapi rusak berat berlubang				:    1,5	Km</li>
                            <li class="fs-7" style="text-indent: 0.7in; list-style:none;">-	Pondasi batu belum beraspal					:       - 	Km</li>
                            <li class="fs-7" style="text-indent: 0.7in; list-style:none;">-	Tanah merah bisa dilalui kendaraan pada musim kemarau	:       -	Km</li>
                            <li class="fs-7" style="text-indent: 0.7in; list-style:none;">-	Jalan setapak (tidak bisa dilalui kendaraan sepeda motor)	:       -	Km</li>
                            <li class="fs-7" style="text-indent: 0.7in; list-style:none;">-	Jalan tidak bisa dipergunakan karena longsor / amblas	:       -	Km</li>
                        <li class="fs-6" style="text-indent: 0.3in;">Jembatan : </li>
                            <li class="fs-7" style="text-indent: 0.5in; list-style:none;">Jumlah Jembatan : 5 km</li>
                            <li class="fs-7" style="text-indent: 0.7in; list-style:none;">-	Kondisi baik							:       -	Buah</li>
                            <li class="fs-7" style="text-indent: 0.7in; list-style:none;">-	Kurang rusak tapi masih bisa dipergunakan			:       5	Buah</li>
                            <li class="fs-7" style="text-indent: 0.7in; list-style:none;">-	Rusak berat tidak bisa dipergunakan				:       -	Buah</li>
                            <li class="fs-7" style="text-indent: 0.7in; list-style:none;">-	Pembangunan jembatan baru					:       -	Buah</li>
                        <li class="fs-6" style="text-indent: 0.3in;">Bangunan Kantor Desa						:  80,5   m2</li>
                            <li class="fs-7" style="text-indent: 0.7in; list-style:none;">-	Bangunan kantor desa refresentatif				:      -	m2</li>
                            <li class="fs-7" style="text-indent: 0.7in; list-style:none;">-	Bangunan kantor desa rusak ringan				:   80,5 m2</li>
                            <li class="fs-7" style="text-indent: 0.7in; list-style:none;">-	Bantunan kantor desa rusak berat				:     - 	m2</li>
                            <li class="fs-7" style="text-indent: 0.7in; list-style:none;">-	Tidak mempunyai kantor desa					:     - 	m2</li>
                            <li class="fs-7" style="text-indent: 0.7in; list-style:none;">-	Kekurangan luas bangunan kantor desa			:     - 	m2</li>
                        <li class="fs-6" style="text-indent: 0.3in;">Bangunan Kantor Dusun						:    120	m2</li>
                            <li class="fs-7" style="text-indent: 0.5in; list-style:none;">Jumlah Jembatan : 5 km</li>
                            <li class="fs-7" style="text-indent: 0.7in; list-style:none;">-	RW								:     -	m2</li>
                            <li class="fs-7" style="text-indent: 0.7in; list-style:none;">-	RT								:     -	m2</li>
                        <li class="fs-6" style="text-indent: 0.3in;">Ketersediaan air bersih					:    120	m2</li>
                            <li class="fs-7" style="text-indent: 0.7in; list-style:none;">-	KK yang sudah mendapatkan air bersih			:  1.206 KK</li>
                            <li class="fs-7" style="text-indent: 0.7in; list-style:none;">-	KK yang membeli air bersih					:      -	 KK</li>
                            <li class="fs-7" style="text-indent: 0.7in; list-style:none;">-	KK yang kesulitan mendapatkan air bersih			:     202KK</li>
                            <li class="fs-7" style="text-indent: 0.7in; list-style:none;">-	KK yang tidak mendapatkan air bersih			:      -	 KK</li>
                            <li class="fs-7" style="text-indent: 0.5in; list-style:none;">Ada / tidak sarana air bersih</li>
                            <li class="fs-7" style="text-indent: 0.7in; list-style:none;">-	Bak penampungan						:          5         buah</li>
                            <li class="fs-7" style="text-indent: 0.7in; list-style:none;">-	Pipanisasi							:   2.500         m</li>
                        <li class="fs-6" style="text-indent: 0.3in;">Sarana Peribadatan</li>
                            <li class="fs-7" style="text-indent: 0.7in; list-style:none;">-	Masjid jami refresentatif (daya tampung jamaah 600 orang)	:         5	buah</li>
                            <li class="fs-7" style="text-indent: 0.7in; list-style:none;">-	Masjid jami tidak memadai (daya tampung kurang)		:       20	buah</li>
                        <li class="fs-6" style="text-indent: 0.3in;">Perumahan</li>
                            <li class="fs-7" style="text-indent: 0.7in; list-style:none;">-	Rumah layak huni						:      782	buah</li>
                            <li class="fs-7" style="text-indent: 0.7in; list-style:none;">-	Rumah tidak layak huni					:      200	buah</li>
                            <li class="fs-7" style="text-indent: 0.7in; list-style:none;">-	Rumah kondisi rusak berat (terancam roboh)			:        15	buah	</li>
                            <li class="fs-7" style="text-indent: 0.7in; list-style:none;">-	Rumah kondisi rusak berat (terancam roboh)			:        15	buah	</li>
                        <li class="fs-6" style="text-indent: 0.3in;">Irigasi</li>
                            <li class="fs-7" style="text-indent: 0.7in; list-style:none;">-	Panjang irigasi baik						:         -		m2</li>
                            <li class="fs-7" style="text-indent: 0.7in; list-style:none;">-	Panjang irigasi rusak ringan tapi masih berfungsi		:         -		m2</li>
                            <li class="fs-7" style="text-indent: 0.7in; list-style:none;">-	Panjang irigasi rusak berat tidak dapat berfungsi		:    20.000	m2</li>
                        <li class="fs-6" style="text-indent: 0.3in;">Sarana Ekonomi</li>
                            <li class="fs-7" style="text-indent: 0.7in; list-style:none;">-	Pasar Desa  							:	 1	Buah</li>
                            <li class="fs-7" style="text-indent: 0.7in; list-style:none;">-	Pertokoan							:            2	Buah</li>
                            <li class="fs-7" style="text-indent: 0.7in; list-style:none;">-	Warung    							:	 6	Buah</li>
                        <li class="fs-6" style="text-indent: 0.3in;">Sarana Pendidikan</li>
                            <li class="fs-7" style="text-indent: 0.7in; list-style:none;">-	Perguruan Tinggi						:	-	Buah</li>
                            <li class="fs-7" style="text-indent: 0.7in; list-style:none;">-	SLTA								:	1 	Buah</li>
                            <li class="fs-7" style="text-indent: 0.7in; list-style:none;">-	SLTP								:	1	Buah</li>
                            <li class="fs-7" style="text-indent: 0.7in; list-style:none;">-	SD   								:	3	Buah</li>
                        <li class="fs-6" style="text-indent: 0.3in;">Sarana Kesehatan</li>
                            <li class="fs-7" style="text-indent: 0.7in; list-style:none;">-	Rumah Sakit							:	-	Buah</li>
                            <li class="fs-7" style="text-indent: 0.7in; list-style:none;">-	Puskesmas							:	-	Buah</li>
                            <li class="fs-7" style="text-indent: 0.7in; list-style:none;">-	Pustu   						:	1	Buah</li>
                            <li class="fs-7" style="text-indent: 0.7in; list-style:none;">-	Posyandu							:	5	Buah</li>
                        <li class="fs-6" style="text-indent: 0.3in;">Sarana Keamanan</li>
                            <li class="fs-7" style="text-indent: 0.7in; list-style:none;">-	Pos Polisi							:	-	Buah</li>
                            <li class="fs-7" style="text-indent: 0.7in; list-style:none;">-	Pos Kamling 							:	7	Buah</li>
                            
                       
                        </p>

                </div>

                

            </div>
            <!-- Ads -->
            <div class="col-md-1"></div>
        </div>

        <!-- Footer -->
        <div class="row bg-dark text-white py-2">
            <!-- Range -->
            <div class="col-md-1"></div>
            <!-- Information -->
            <div class="col">
                <div class="container-fluid">
                    <div class="row pt-4">
                        <div class="col">
                            <h4>VISIT US</h4>
                            <div class="table-responsive">
                                <iframe
                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d46143.42911643599!2d108.10371530718493!3d-7.201987752989634!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6f4dad08935905%3A0x5dadefe8376ff751!2sKiarajangkung%2C%20Kec.%20Sukahening%2C%20Kabupaten%20Tasikmalaya%2C%20Jawa%20Barat!5e0!3m2!1sid!2sid!4v1688800172218!5m2!1sid!2sid"
                                    height="250" width="600" style="border:0;" allowfullscreen loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                                </iframe>
                            </div>
                        </div>
                        <div class="col text-end">
                            <h4>ABOUT US</h4>
                            <h5>Location</h5>
                            <p>Jl. Kiarajangkung No.1, RT.03/RW.05, Kiarajangkung <br>Kec. Sukahening, Kabupaten Tasikmalaya <br>Jawa Barat, 46154</p>
                            <h5>Contact</h5>
                            <p>TLP. 0265 7292010 <br>Email. desakiarajangkung@gmail.com</p>
                            <p>Made by: <br><img src="<?=base_url('style/sponsor.png')?>" height=75px alt=""></p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Range -->
            <div class="col-md-1"></div>
        </div>
    </div>

    <!-- Script JS -->
    <!-- <script>
      let docTitle = document.title;
      window.addEventListener("blur", () => {
        document.title = "Comeback dude!";
      });
      window.addEventListener("focus", () => {
        document.title = docTitle;
      });
    </script> -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
        crossorigin="anonymous"></script>
</body>

</html>