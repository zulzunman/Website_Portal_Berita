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
    <style>
        td {
            text-align: end;
        }
        th {
            padding-left: 5px;
            padding-right: 5px;
        }
        table.table th{
            text-align: center;
        }
        table.table td{
            text-align: center;
        }
    </style>

    <title>Profile Desa Kiarajangkung</title>
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

                <!-- Personil -->
                <div class="row pt-2 pb-2">
                    <div class="col table-responsive">
                        <h3>Personil</h3>
                        <table>
                            <?php $i=1; foreach($personil as $data) { ?>
                            <thead>
                                <tr>
                                    <th colspan="2"><hr></th>
                                </tr>
                                <tr>
                                    <th>Jabatan</th>
                                    <th><?=$data->jabatan?></th>
                                </tr>
                                <tr>
                                    <th colspan="2"><hr></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th>Nama</th>
                                    <td><?=$data->nama?></td>
                                </tr>
                                <tr>
                                    <th>Pangkat/Golongan</th>
                                    <td><?=$data->pangkat?></td>
                                </tr>
                                <tr>
                                    <th>NIP</th>
                                    <td><?=$data->nip?></td>
                                </tr>
                                <tr>
                                    <th>Pendidikan Terakhir</th>
                                    <td><?=$data->pendidikan_terakhir?></td>
                                </tr>
                                <tr>
                                    <th>Jenis Kelamin</th>
                                    <td><?=$data->jenis_kelamin?></td>
                                </tr>
                            </tbody>
                            <?php } ?>
                        </table>
                    </div>
                    <div class="col table-resposive">
                        <h3>Pendidikan & Kesehatan</h3>
                        <table class="table">
                            <thead>
                                <th>Kategori</th>
                                <th>Tingkatan</th>
                                <th>Jumlah Pengajar</th>
                                <th>Jumlah Siswa</th>
                                <th>Rasio</th>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Sekolah Formal</td>
                                    <td>SD</td>
                                    <td>27</td>
                                    <td>447</td>
                                    <td>16</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>SMP</td>
                                    <td>16</td>
                                    <td>77</td>
                                    <td>4</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>TK</td>
                                    <td>27</td>
                                    <td>152</td>
                                    <td>5</td>
                                </tr>
                                <tr>
                                    <th colspan="2">Jumlah Total</th>
                                    <td>70</td>
                                    <td>676</td>
                                    <td></td>
                                </tr>
                            </tbody>
                        </table>
                        <br>
                        <table class="table">
                            <thead>
                                <th>Jenis Sarana Kesehatan</th>
                                <th>Jumlah (Unit/Orang)</th>
                            </thead>
                            <tbody>
                                <tr>
                                    <th>Dukun Bersalin Terlatih</th>
                                    <td>1</td>
                                </tr>
                                <tr>
                                    <th>Bidan</th>
                                    <td>2</td>
                                </tr>
                            </tbody>
                        </table>
                        <br>
                    </div>
                </div>
                <br>
                <!-- Bencana -->
                <div class="row py-2">
                    <h3>Bencana</h3>
                    <div class="table-responsive">
                        <table>
                            <thead>
                                <tr>
                                    <th colspan="2"><hr>Rawan Bencana</th>
                                </tr>
                                <tr>
                                    <th colspan="2"><hr></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th>Desa/Kelurahan Rawan Banjir (Ha)</th>
                                    <td>-</td>
                                </tr>
                                <tr>
                                    <th>Desa/Kelurahan Potensial Tsunami (Ha)</th>
                                    <td>-</td>
                                </tr>
                                <tr>
                                    <th>Desa/Kelurahan Rawan Jalur Gempa (Ha)</th>
                                    <td>-</td>
                                </tr>
                            </tbody>
                        </table>
                        <br>
                        <table>
                            <thead>
                                <tr>
                                    <th colspan="2"><h4>Orbitasi</h4><hr></th>
                                </tr>
                                <tr>
                                    <th colspan="2">Berdasarkan Kecamatan</th>
                                </tr>
                                <tr>
                                    <th colspan="2"><hr></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th>Jarak Ke Ibu Kota Kecamatan (Km)</th>
                                    <td class="text-end">3,2500</td>
                                </tr>
                                <tr>
                                    <th>Waktu Tempuh dengan Kendaraan Bermotor (Jam)</th>
                                    <td class="text-end">0,50</td>
                                </tr>
                                <tr>
                                    <th>Waktu Tempuh dengan Berjalan Kaki/Kendaraan Non Bermotor (Jam)</th>
                                    <td class="text-end">0,33</td>
                                </tr>
                                <tr>
                                    <th>Kendaraan Umum Ke Ibu Kota Kecamatan (Unit)</th>
                                    <td class="text-end">30</td>
                                </tr>
                            </tbody>
                        </table>
                        <br>
                        <table>
                            <thead>
                                <tr>
                                    <th colspan="2"><hr>Berdasarkan Kabupaten/Kota</th>
                                </tr>
                                <tr>
                                    <th colspan="2"><hr></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th>Jarak Ke Ibu Kota Kabupaten/Kota (Km)</th>
                                    <td class="text-end">32,8000</td>
                                </tr>
                                <tr>
                                    <th>Waktu Tempuh dengan Kendaraan Bermotor (Jam)</th>
                                    <td class="text-end">1,00</td>
                                </tr>
                                <tr>
                                    <th>Waktu Tempuh dengan Berjalan Kaki/Kendaraan Non Bermotor (Jam)</th>
                                    <td class="text-end">4,16</td>
                                </tr>
                                <tr>
                                    <th>Kendaraan Umum Ke Ibu Kota Kabupaten/Kota (Unit)</th>
                                    <td class="text-end">-</td>
                                </tr>
                            </tbody>
                        </table>
                        <br>
                        <table>
                            <thead>
                                <tr>
                                    <th colspan="2"><hr>Berdasarkan Provinsi</th>
                                </tr>
                                <tr>
                                    <th colspan="2"><hr></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th>Jarak Ke Ibu Kota Provinsi (Km)</th>
                                    <td class="text-end">96,800</td>
                                </tr>
                                <tr>
                                    <th>Waktu Tempuh dengan Kendaraan Bermotor (Jam)</th>
                                    <td class="text-end">3,00</td>
                                </tr>
                                <tr>
                                    <th>Waktu Tempuh dengan Berjalan Kaki/Kendaraan Non Bermotor (Jam)</th>
                                    <td class="text-end">18,00</td>
                                </tr>
                                <tr>
                                    <th>Kendaraan Umum Ke Ibu Kota Provinsi (Unit)</th>
                                    <td class="text-end">-</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <br>
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