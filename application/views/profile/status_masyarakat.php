<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Style CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo base_url('style/style.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('style/berita.css'); ?>">
    <link rel="shortcut icon" href="<?php echo base_url('style/IMG_3889.PNG'); ?>">
    <title>Status Masyarakat Desa Kiarajangkung</title>
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

                <!-- Status Masyarakan -->
                <div class="row py-2">
                    <h3>Status Masyarakat</h3>
                    <div class="table-responsive">
                        <table>
                            <thead>
                                <tr>
                                    <th colspan="5"><br><h4>Pekerjaan</h4></th>
                                </tr>
                                <tr>
                                    <th colspan="5"><hr></th>
                                </tr>
                                <tr>
                                    <th>Pekerjaan</th>
                                    <th>Kelompok Umur</th>
                                    <th>Laki-Laki</th>
                                    <th>Perempuan</th>
                                    <th>Jumlah</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td colspan="5"><hr></td>
                                </tr>
                                <tr>
                                    <th rowspan="6">Petani</th>
                                </tr>
                                <tr>
                                    <td>Usia 30 - 40 Thn</td>
                                    <td>9</td>
                                    <td>0</td>
                                    <td>9</td>
                                </tr>
                                <tr>
                                    <td>Usia 40 - 56 Thn</td>
                                    <td>61</td>
                                    <td>1</td>
                                    <td>61</td>
                                </tr>
                                <tr>
                                    <td>Usia 56 - 65 Thn</td>
                                    <td>49</td>
                                    <td>6</td>
                                    <td>55</td>
                                </tr>
                                <tr>
                                    <td>Usia 65 - 75 Thn</td>
                                    <td>60</td>
                                    <td>0</td>
                                    <td>60</td>
                                </tr>
                                <tr>
                                    <td>Usia > 75 Thn</td>
                                    <td>31</td>
                                    <td>1</td>
                                    <td>32</td>
                                </tr>
                                <tr>
                                    <td colspan="5"><hr></td>
                                </tr>
                                <tr>
                                    <th rowspan="7">Buruh Tani</th>
                                </tr>
                                <tr>
                                    <td>Usia 23 - 30 Thn</td>
                                    <td>1</td>
                                    <td>1</td>
                                    <td>2</td>
                                </tr>
                                <tr>
                                    <td>Usia 30 - 40 Thn</td>
                                    <td>4</td>
                                    <td>3</td>
                                    <td>7</td>
                                </tr>
                                <tr>
                                    <td>Usia 40 - 56 Thn</td>
                                    <td>20</td>
                                    <td>16</td>
                                    <td>36</td>
                                </tr>
                                <tr>
                                    <td>Usia 56 - 65 Thn</td>
                                    <td>8</td>
                                    <td>5</td>
                                    <td>13</td>
                                </tr>
                                <tr>
                                    <td>Usia 65 - 75 Thn</td>
                                    <td>5</td>
                                    <td>2</td>
                                    <td>7</td>
                                </tr>
                                <tr>
                                    <td>Usia > 75 Thn</td>
                                    <td>4</td>
                                    <td>2</td>
                                    <td>6</td>
                                </tr>
                                <tr>
                                    <td colspan="5"><hr></td>
                                </tr>
                                <tr>
                                    <th rowspan="4">Buruh Migran</th>
                                </tr>
                                <tr>
                                    <td>Usia 23 - 30 Thn</td>
                                    <td>1</td>
                                    <td>0</td>
                                    <td>1</td>
                                </tr>
                                <tr>
                                    <td>Usia 30 - 40 Thn</td>
                                    <td>1</td>
                                    <td>1</td>
                                    <td>2</td>
                                </tr>
                                <tr>
                                    <td>Usia 40 - 56 Thn</td>
                                    <td>0</td>
                                    <td>1</td>
                                    <td>1</td>
                                </tr>
                                <tr>
                                    <td colspan="5"><hr></td>
                                </tr>
                                <tr>
                                    <th rowspan="4">PNS</th>
                                </tr>
                                <tr>
                                    <td>Usia 30 - 40 Thn</td>
                                    <td>3</td>
                                    <td>5</td>
                                    <td>8</td>
                                </tr>
                                <tr>
                                    <td>Usia 40 - 56 Thn</td>
                                    <td>6</td>
                                    <td>6</td>
                                    <td>12</td>
                                </tr>
                                <tr>
                                    <td>Usia 56 - 65 Thn</td>
                                    <td>2</td>
                                    <td>1</td>
                                    <td>3</td>
                                </tr>
                                <tr>
                                    <td colspan="5"><hr></td>
                                </tr>
                                <tr>
                                    <th rowspan="6">Pedagang Barang Kelontong</th>
                                </tr>
                                <tr>
                                    <td>Usia 23 - 30 Thn</td>
                                    <td>1</td>
                                    <td>0</td>
                                    <td>1</td>
                                </tr>
                                <tr>
                                    <td>Usia 30 - 40 Thn</td>
                                    <td>2</td>
                                    <td>1</td>
                                    <td>3</td>
                                </tr>
                                <tr>
                                    <td>Usia 40 - 56 Thn</td>
                                    <td>14</td>
                                    <td>7</td>
                                    <td>21</td>
                                </tr>
                                <tr>
                                    <td>Usia 56 - 65 Thn</td>
                                    <td>1</td>
                                    <td>0</td>
                                    <td>1</td>
                                </tr>
                                <tr>
                                    <td>Usia > 75 Thn</td>
                                    <td>0</td>
                                    <td>1</td>
                                    <td>1</td>
                                </tr>
                                <tr>
                                    <td colspan="5"><hr></td>
                                </tr>
                                <tr>
                                    <th rowspan="4">Peternak</th>
                                </tr>
                                <tr>
                                    <td>Usia 23 - 30 Thn</td>
                                    <td>1</td>
                                    <td>0</td>
                                    <td>1</td>
                                </tr>
                                <tr>
                                    <td>Usia 40 - 56 Thn</td>
                                    <td>3</td>
                                    <td>0</td>
                                    <td>3</td>
                                </tr>
                                <tr>
                                    <td>Usia 56 - 65 Thn</td>
                                    <td>1</td>
                                    <td>0</td>
                                    <td>1</td>
                                </tr>
                                <tr>
                                    <td colspan="5"><hr></td>
                                </tr>
                                <tr>
                                    <th rowspan="3">Montir</th>
                                </tr>
                                <tr>
                                    <td>Usia 23 - 30 Thn</td>
                                    <td>1</td>
                                    <td>0</td>
                                    <td>1</td>
                                </tr>
                                <tr>
                                    <td>Usia 40 - 56 Thn</td>
                                    <td>1</td>
                                    <td>0</td>
                                    <td>1</td>
                                </tr>
                                <tr>
                                    <td colspan="5"><hr></td>
                                </tr>
                                <tr>
                                    <th rowspan="3">Bidan Swasta</th>
                                </tr>
                                <tr>
                                    <td>Usia 23 - 30 Thn</td>
                                    <td>0</td>
                                    <td>2</td>
                                    <td>2</td>
                                </tr>
                                <tr>
                                    <td>Usia 40 - 56 Thn</td>
                                    <td>0</td>
                                    <td>1</td>
                                    <td>1</td>
                                </tr>
                                <tr>
                                    <td colspan="5"><hr></td>
                                </tr>
                                <tr>
                                    <th rowspan="2">Ahli Pengobatan Alternatif</th>
                                </tr>
                                <tr>
                                    <td>Usia 23 - 30 Thn</td>
                                    <td>0</td>
                                    <td>1</td>
                                    <td>1</td>
                                </tr>
                                <tr>
                                    <td colspan="5"><hr></td>
                                </tr>
                                <tr>
                                    <th rowspan="3">POLRI</th>
                                </tr>
                                <tr>
                                    <td>Usia 23 - 30 Thn</td>
                                    <td>1</td>
                                    <td>0</td>
                                    <td>1</td>
                                </tr>
                                <tr>
                                    <td>Usia 30 - 40 Thn</td>
                                    <td>1</td>
                                    <td>0</td>
                                    <td>1</td>
                                </tr>
                                <tr>
                                    <td colspan="5"><hr></td>
                                </tr>
                                <tr>
                                    <th rowspan="4">Guru swasta</th>
                                </tr>
                                <tr>
                                    <td>Usia 23 - 30 Thn</td>
                                    <td>0</td>
                                    <td>4</td>
                                    <td>4</td>
                                </tr>
                                <tr>
                                    <td>Usia 40 - 56 Thn</td>
                                    <td>4</td>
                                    <td>5</td>
                                    <td>9</td>
                                </tr>
                                <tr>
                                    <td>Usia 40 - 56 Th</td>
                                    <td>0</td>
                                    <td>2</td>
                                    <td>2</td>
                                </tr>
                                <tr>
                                    <td colspan="5"><hr></td>
                                </tr>
                                <tr>
                                    <th rowspan="7">Pedagang Keliling</th>
                                </tr>
                                <tr>
                                    <td>Usia 23 - 30 Thn</td>
                                    <td>3</td>
                                    <td>1</td>
                                    <td>4</td>
                                </tr>
                                <tr>
                                    <td>Usia 30 - 40 Thn</td>
                                    <td>8</td>
                                    <td>4</td>
                                    <td>12</td>
                                </tr>
                                <tr>
                                    <td>Usia 40 - 56 Thn</td>
                                    <td>20</td>
                                    <td>3</td>
                                    <td>23</td>
                                </tr>
                                <tr>
                                    <td>Usia 56 - 65 Thn</td>
                                    <td>5</td>
                                    <td>1</td>
                                    <td>6</td>
                                </tr>
                                <tr>
                                    <td>Usia 65 - 75 Thn</td>
                                    <td>0</td>
                                    <td>1</td>
                                    <td>1</td>
                                </tr>
                                <tr>
                                    <td>Usia > 75 Thn</td>
                                    <td>0</td>
                                    <td>1</td>
                                    <td>1</td>
                                </tr>
                                <tr>
                                    <td colspan="5"><hr></td>
                                </tr>
                                <tr>
                                    <th rowspan="2">Tukang Kayu</th>
                                </tr>
                                <tr>
                                    <td>Usia 40 - 56 Thn</td>
                                    <td>1</td>
                                    <td>0</td>
                                    <td>1</td>
                                </tr>
                                <tr>
                                    <td colspan="5"><hr></td>
                                </tr>
                                <tr>
                                    <th rowspan="2">Tukang Batu</th>
                                </tr>
                                <tr>
                                    <td>Usia 40 - 56 Thn</td>
                                    <td>1</td>
                                    <td>0</td>
                                    <td>1</td>
                                </tr>
                                <tr>
                                    <td colspan="5"><hr></td>
                                </tr>
                                <tr>
                                    <th rowspan="5">Pembantu Rumah Tangga</th>
                                </tr>
                                <tr>
                                    <td>Usia 19 - 23 Thn</td>
                                    <td>0</td>
                                    <td>2</td>
                                    <td>2</td>
                                </tr>
                                <tr>
                                    <td>Usia 23 - 30 Thn</td>
                                    <td>0</td>
                                    <td>1</td>
                                    <td>1</td>
                                </tr>
                                <tr>
                                    <td>Usia 30 - 40 Thn</td>
                                    <td>0</td>
                                    <td>1</td>
                                    <td>1</td>
                                </tr>
                                <tr>
                                    <td>Usia 40 - 56 Thn</td>
                                    <td>0</td>
                                    <td>3</td>
                                    <td>3</td>
                                </tr>
                                <tr>
                                    <td colspan="5"><hr></td>
                                </tr>
                                <tr>
                                    <th rowspan="4">Karyawan Perusahaan Swasta</th>
                                </tr>
                                <tr>
                                    <td>Usia 19 - 23 Thn</td>
                                    <td>3</td>
                                    <td>6</td>
                                    <td>9</td>
                                </tr>
                                <tr>
                                    <td>Usia 23 - 30 Thn</td>
                                    <td>7</td>
                                    <td>3</td>
                                    <td>10</td>
                                </tr>
                                <tr>
                                    <td>Usia 30 - 40 Thn</td>
                                    <td>6</td>
                                    <td>2</td>
                                    <td>8</td>
                                </tr>
                                <tr>
                                    <td colspan="5"><hr></td>
                                </tr>
                                <tr>
                                    <th rowspan="3">Karyawan Perusahaan Pemerintah</th>
                                </tr>
                                <tr>
                                    <td>Usia 23 - 30 Thn</td>
                                    <td>0</td>
                                    <td>1</td>
                                    <td>1</td>
                                </tr>
                                <tr>
                                    <td>Usia 40 - 56 Thn</td>
                                    <td>1</td>
                                    <td>0</td>
                                    <td>1</td>
                                </tr>
                                <tr>
                                    <td colspan="5"><hr></td>
                                </tr>
                                <tr>
                                    <th rowspan="7">Wiraswata</th>
                                </tr>
                                <tr>
                                    <td>Usia 19 - 23 Thn</td>
                                    <td>2</td>
                                    <td>0</td>
                                    <td>2</td>
                                </tr>
                                <tr>
                                    <td>Usia 23 - 30 Thn</td>
                                    <td>16</td>
                                    <td>1</td>
                                    <td>17</td>
                                </tr>
                                <tr>
                                    <td>Usia 30 - 40 Thn</td>
                                    <td>48</td>
                                    <td>0</td>
                                    <td>48</td>
                                </tr>
                                <tr>
                                    <td>Usia 40 - 56 Thn</td>
                                    <td>60</td>
                                    <td>0</td>
                                    <td>60</td>
                                </tr>
                                <tr>
                                    <td>Usia 56 - 65 Thn</td>
                                    <td>19</td>
                                    <td>0</td>
                                    <td>19</td>
                                </tr>
                                <tr>
                                    <td>Usia 65 - 75 Thn</td>
                                    <td>5</td>
                                    <td>0</td>
                                    <td>5</td>
                                </tr>
                                <tr>
                                    <td colspan="5"><hr></td>
                                </tr>
                                <tr>
                                    <th rowspan="8">Tidak Mempunyai Pekerjaan Tetap</th>
                                </tr>
                                <tr>
                                    <td>Usia 16 - 19 Thn</td>
                                    <td>1</td>
                                    <td>0</td>
                                    <td>1</td>
                                </tr>
                                <tr>
                                    <td>Usia 23 - 30 Thn</td>
                                    <td>1</td>
                                    <td>0</td>
                                    <td>1</td>
                                </tr>
                                <tr>
                                    <td>Usia 30 - 40 Thn</td>
                                    <td>6</td>
                                    <td>2</td>
                                    <td>8</td>
                                </tr>
                                <tr>
                                    <td>Usia 40 - 56 Thn</td>
                                    <td>8</td>
                                    <td>5</td>
                                    <td>13</td>
                                </tr>
                                <tr>
                                    <td>Usia 56 - 65 Thn</td>
                                    <td>9</td>
                                    <td>3</td>
                                    <td>12</td>
                                </tr>
                                <tr>
                                    <td>Usia 65 - 75 Thn</td>
                                    <td>5</td>
                                    <td>8</td>
                                    <td>13</td>
                                </tr>
                                <tr>
                                    <td>Usia > 75 Thn</td>
                                    <td>3</td>
                                    <td>6</td>
                                    <td>9</td>
                                </tr>
                                <tr>
                                    <td colspan="5"><hr></td>
                                </tr>
                                <tr>
                                    <th rowspan="13">Belum Bekerja</th>
                                </tr>
                                <tr>
                                    <td>Usia 0 - 5 Thn</td>
                                    <td>114</td>
                                    <td>118</td>
                                    <td>232</td>
                                </tr>
                                <tr>
                                    <td>Usia 5 - 7 Thn</td>
                                    <td>30</td>
                                    <td>35</td>
                                    <td>65</td>
                                </tr>
                                <tr>
                                    <td>Usia 7 - 13 Thn</td>
                                    <td>12</td>
                                    <td>1</td>
                                    <td>13</td>
                                </tr>
                                <tr>
                                    <td>Usia 13 - 16 Thn</td>
                                    <td>9</td>
                                    <td>4</td>
                                    <td>13</td>
                                </tr>
                                <tr>
                                    <td>Usia 16 - 19 Thn</td>
                                    <td>24</td>
                                    <td>32</td>
                                    <td>56</td>
                                </tr>
                                <tr>
                                    <td>Usia 19 - 23 Thn</td>
                                    <td>36</td>
                                    <td>25</td>
                                    <td>61</td>
                                </tr>
                                <tr>
                                    <td>Usia 23 - 30 Thn</td>
                                    <td>13</td>
                                    <td>6</td>
                                    <td>19</td>
                                </tr>
                                <tr>
                                    <td>Usia 30 - 40 Thn</td>
                                    <td>6</td>
                                    <td>4</td>
                                    <td>10</td>
                                </tr>
                                <tr>
                                    <td>Usia 40 - 56 Thn</td>
                                    <td>3</td>
                                    <td>0</td>
                                    <td>3</td>
                                </tr>
                                <tr>
                                    <td>Usia 56 - 65 Thn</td>
                                    <td>1</td>
                                    <td>0</td>
                                    <td>1</td>
                                </tr>
                                <tr>
                                    <td>Usia 65 - 75 Thn</td>
                                    <td>5</td>
                                    <td>0</td>
                                    <td>5</td>
                                </tr>
                                <tr>
                                    <td>Usia > 75 Thn</td>
                                    <td>6</td>
                                    <td>4</td>
                                    <td>10</td>
                                </tr>
                                <tr>
                                    <td colspan="5"><hr></td>
                                </tr>
                                <tr>
                                    <th rowspan="9">Pelajar</th>
                                </tr>
                                <tr>
                                    <td>Usia 0 - 5 Thn</td>
                                    <td>10</td>
                                    <td>16</td>
                                    <td>26</td>
                                </tr>
                                <tr>
                                    <td>Usia 5 - 7 Thn</td>
                                    <td>35</td>
                                    <td>43</td>
                                    <td>78</td>
                                </tr>
                                <tr>
                                    <td>Usia 7 - 13 Thn</td>
                                    <td>194</td>
                                    <td>192</td>
                                    <td>386</td>
                                </tr>
                                <tr>
                                    <td>Usia 13 - 16 Thn</td>
                                    <td>94</td>
                                    <td>111</td>
                                    <td>205</td>
                                </tr>
                                <tr>
                                    <td>Usia 16 - 19 Thn</td>
                                    <td>40</td>
                                    <td>41</td>
                                    <td>81</td>
                                </tr>
                                <tr>
                                    <td>Usia 19 - 23 Thn</td>
                                    <td>11</td>
                                    <td>29</td>
                                    <td>40</td>
                                </tr>
                                <tr>
                                    <td>Usia 23 - 30 Thn</td>
                                    <td>5</td>
                                    <td>6</td>
                                    <td>11</td>
                                </tr>
                                <tr>
                                    <td>Usia 30 - 40 Thn</td>
                                    <td>0</td>
                                    <td>2</td>
                                    <td>2</td>
                                </tr>
                                <tr>
                                    <td colspan="5"><hr></td>
                                </tr>
                                <tr>
                                    <th rowspan="9">Ibu Rumah Tangga</th>
                                </tr>
                                <tr>
                                    <td>Usia 16 - 19 Thn</td>
                                    <td>0</td>
                                    <td>13</td>
                                    <td>13</td>
                                </tr>
                                <tr>
                                    <td>Usia 19 - 23 Thn</td>
                                    <td>0</td>
                                    <td>56</td>
                                    <td>56</td>
                                </tr>
                                <tr>
                                    <td>Usia 23 - 30 Thn</td>
                                    <td>0</td>
                                    <td>154</td>
                                    <td>154</td>
                                </tr>
                                <tr>
                                    <td>Usia 30 - 40 Thn</td>
                                    <td>0</td>
                                    <td>246</td>
                                    <td>246</td>
                                </tr>
                                <tr>
                                    <td>Usia 40 - 56 Thn</td>
                                    <td>1</td>
                                    <td>356</td>
                                    <td>357</td>
                                </tr>
                                <tr>
                                    <td>Usia 56 - 65 Thn</td>
                                    <td>0</td>
                                    <td>116</td>
                                    <td>116</td>
                                </tr>
                                <tr>
                                    <td>Usia 65 - 75 Thn</td>
                                    <td>0</td>
                                    <td>90</td>
                                    <td>90</td>
                                </tr>
                                <tr>
                                    <td>Usia > 75 Thn</td>
                                    <td>0</td>
                                    <td>71</td>
                                    <td>71</td>
                                </tr>
                                <tr>
                                    <td colspan="5"><hr></td>
                                </tr>
                                <tr>
                                    <th rowspan="3">Purnawirawan / Pensiunan</th>
                                </tr>
                                <tr>
                                    <td>Usia 56 - 65 Thn</td>
                                    <td>2</td>
                                    <td>1</td>
                                    <td>3</td>
                                </tr>
                                <tr>
                                    <td>Usia > 75 Thn</td>
                                    <td>1</td>
                                    <td>1</td>
                                    <td>2</td>
                                </tr>
                                <tr>
                                    <td colspan="5"><hr></td>
                                </tr>
                                <tr>
                                    <th rowspan="6">Perangkat Desa</th>
                                </tr>
                                <tr>
                                    <td>Usia 19 - 23 Thn</td>
                                    <td>1</td>
                                    <td>0</td>
                                    <td>1</td>
                                </tr>
                                <tr>
                                    <td>Usia 23 - 30 Thn</td>
                                    <td>1</td>
                                    <td>2</td>
                                    <td>3</td>
                                </tr>
                                <tr>
                                    <td>Usia 30 - 40 Thn</td>
                                    <td>1</td>
                                    <td>0</td>
                                    <td>1</td>
                                </tr>
                                <tr>
                                    <td>Usia 40 - 56 Thn</td>
                                    <td>1</td>
                                    <td>0</td>
                                    <td>1</td>
                                </tr>
                                <tr>
                                    <td>Usia 65 - 75 Thn</td>
                                    <td>2</td>
                                    <td>0</td>
                                    <td>2</td>
                                </tr>
                                <tr>
                                    <td colspan="5"><hr></td>
                                </tr>
                                <tr>
                                    <th rowspan="10">Buruh Harian Lepas</th>
                                </tr>
                                <tr>
                                    <td>Usia 13 - 16 Thn</td>
                                    <td>7</td>
                                    <td>0</td>
                                    <td>7</td>
                                </tr>
                                <tr>
                                    <td>Usia 16 - 19 Thn</td>
                                    <td>16</td>
                                    <td>1</td>
                                    <td>17</td>
                                </tr>
                                <tr>
                                    <td>Usia 19 - 23 Thn</td>
                                    <td>67</td>
                                    <td>5</td>
                                    <td>72</td>
                                </tr>
                                <tr>
                                    <td>Usia 23 - 30 Thn</td>
                                    <td>133</td>
                                    <td>2</td>
                                    <td>135</td>
                                </tr>
                                <tr>
                                    <td>Usia 30 - 40 Thn</td>
                                    <td>194</td>
                                    <td>14</td>
                                    <td>208</td>
                                </tr>
                                <tr>
                                    <td>Usia 40 - 56 Thn</td>
                                    <td>218</td>
                                    <td>25</td>
                                    <td>243</td>
                                </tr>
                                <tr>
                                    <td>Usia 56 - 65 Thn</td>
                                    <td>50</td>
                                    <td>1</td>
                                    <td>51</td>
                                </tr>
                                <tr>
                                    <td>Usia 65 - 75 Thn</td>
                                    <td>13</td>
                                    <td>3</td>
                                    <td>16</td>
                                </tr>
                                <tr>
                                    <td>Usia > 75 Thn</td>
                                    <td>3</td>
                                    <td>1</td>
                                    <td>4</td>
                                </tr>
                                <tr>
                                    <td colspan="5"><hr></td>
                                </tr>
                                <tr>
                                    <th rowspan="3">Pengusaha Perdagangan Hasil Bumi</th>
                                </tr>
                                <tr>
                                    <td>Usia 30 - 40 Thn</td>
                                    <td>1</td>
                                    <td>0</td>
                                    <td>1</td>
                                </tr>
                                <tr>
                                    <td>Usia 40 - 56 Thn</td>
                                    <td>1</td>
                                    <td>0</td>
                                    <td>1</td>
                                </tr>
                                <tr>
                                    <td colspan="5"><hr></td>
                                </tr>
                                <tr>
                                    <th rowspan="3">Buruh Usaha jasa Transportasi dan Perhubungan</th>
                                </tr>
                                <tr>
                                    <td>Usia 23 - 30 Thn</td>
                                    <td>2</td>
                                    <td>0</td>
                                    <td>2</td>
                                </tr>
                                <tr>
                                    <td>Usia 30 - 40 Thn</td>
                                    <td>2</td>
                                    <td>0</td>
                                    <td>2</td>
                                </tr>
                                <tr>
                                    <td colspan="5"><hr></td>
                                </tr>
                                <tr>
                                    <th rowspan="2">Pemilik Usaha Warung, Rumah Makan dan Restoran</th>
                                </tr>
                                <tr>
                                    <td>Usia 40 - 56 Thn</td>
                                    <td>1</td>
                                    <td>1</td>
                                    <td>2</td>
                                </tr>
                                <tr>
                                    <td colspan="5"><hr></td>
                                </tr>
                                <tr>
                                    <th rowspan="3">Sopir</th>
                                </tr>
                                <tr>
                                    <td>Usia 30 - 40 Thn</td>
                                    <td>2</td>
                                    <td>0</td>
                                    <td>2</td>
                                </tr>
                                <tr>
                                    <td>Usia 40 - 56 Thn</td>
                                    <td>1</td>
                                    <td>1</td>
                                    <td>2</td>
                                </tr>
                                <tr>
                                    <td colspan="5"><hr></td>
                                </tr>
                                <tr>
                                    <th rowspan="2">Pengrajin Industri Rumah Tangga Lainnya</th>
                                </tr>
                                <tr>
                                    <td>Usia 40 - 56 Thn</td>
                                    <td>0</td>
                                    <td>1</td>
                                    <td>1</td>
                                </tr>
                                <tr>
                                    <td colspan="5"><hr></td>
                                </tr>
                                <tr>
                                    <th rowspan="3">Tukang Jahit</th>
                                </tr>
                                <tr>
                                    <td>Usia 30 - 40 Thn</td>
                                    <td>0</td>
                                    <td>1</td>
                                    <td>1</td>
                                </tr>
                                <tr>
                                    <td>Usia 40 - 56 Thn</td>
                                    <td>2</td>
                                    <td>1</td>
                                    <td>3</td>
                                </tr>
                                <tr>
                                    <td colspan="5"><hr></td>
                                </tr>
                                <tr>
                                    <th rowspan="2">Tukang Rias</th>
                                </tr>
                                <tr>
                                    <td>Usia 40 - 56 Thn</td>
                                    <td>1</td>
                                    <td>0</td>
                                    <td>1</td>
                                </tr>
                                <tr>
                                    <td colspan="5"><hr></td>
                                </tr>
                                <tr>
                                    <th rowspan="2">Tukang Sumur</th>
                                </tr>
                                <tr>
                                    <td>Usia 40 - 56 Thn</td>
                                    <td>1</td>
                                    <td>0</td>
                                    <td>1</td>
                                </tr>
                                <tr>
                                    <td colspan="5"><hr></td>
                                </tr>
                                <tr>
                                    <th rowspan="3">Juru Masak</th>
                                </tr>
                                <tr>
                                    <td>Usia 30 - 40 Thn</td>
                                    <td>0</td>
                                    <td>1</td>
                                    <td>1</td>
                                </tr>
                                <tr>
                                    <td>Usia 56 - 65 Thn</td>
                                    <td>0</td>
                                    <td>1</td>
                                    <td>1</td>
                                </tr>
                                <tr>
                                    <td colspan="5"><hr></td>
                                </tr>
                                <tr>
                                    <th rowspan="5">Karyawan Honorer</th>
                                </tr>
                                <tr>
                                    <td>Usia 19 - 23 Thn</td>
                                    <td>1</td>
                                    <td>1</td>
                                    <td>2</td>
                                </tr>
                                <tr>
                                    <td>Usia 23 - 30 Thn</td>
                                    <td>3</td>
                                    <td>8</td>
                                    <td>11</td>
                                </tr>
                                <tr>
                                    <td>Usia 30 - 40 Thn</td>
                                    <td>3</td>
                                    <td>8</td>
                                    <td>11</td>
                                </tr>
                                <tr>
                                    <td>Usia 40 - 56 Thn</td>
                                    <td>0</td>
                                    <td>2</td>
                                    <td>2</td>
                                </tr>
                                <tr>
                                    <td colspan="5"><hr></td>
                                </tr>
                                <tr>
                                    <th rowspan="2">Pemuka Agama</th>
                                </tr>
                                <tr>
                                    <td>Usia 40 - 56 Thn</td>
                                    <td>3</td>
                                    <td>0</td>
                                    <td>3</td>
                                </tr>
                                <tr>
                                    <td colspan="5"><hr></td>
                                </tr>
                            </tbody>
                        </table>
                        <table>
                            <thead>
                                <tr>
                                    <th colspan="5"><br><h4>Pendidikan</h4></th>
                                </tr>
                                <tr>
                                    <th colspan="5"><hr></th>
                                </tr>
                                <tr>
                                    <th>Pendidikan</th>
                                    <th>Kelompok Umur</th>
                                    <th>Laki-Laki</th>
                                    <th>Perempuan</th>
                                    <th>Jumlah</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td colspan="5"><hr></td>
                                </tr>
                                <tr>
                                    <th rowspan="4">Belum Masuk TK</th>
                                </tr>
                                <tr>
                                    <td>Usia 0 - 5 Thn</td>
                                    <td>115</td>
                                    <td>118</td>
                                    <td>233</td>
                                </tr>
                                <tr>
                                    <td>Usia 5 - 7 Thn</td>
                                    <td>28</td>
                                    <td>34</td>
                                    <td>62</td>
                                </tr>
                                <tr>
                                    <td>Usia 7 - 13 Thn</td>
                                    <td>1</td>
                                    <td>1</td>
                                    <td>2</td>
                                </tr>
                                <tr>
                                    <td colspan="5"><hr></td>
                                </tr>
                                <tr>
                                    <th rowspan="4">Sedang TK</th>
                                </tr>
                                <tr>
                                    <td>Usia 0 - 5 Thn</td>
                                    <td>9</td>
                                    <td>16</td>
                                    <td>25</td>
                                </tr>
                                <tr>
                                    <td>Usia 5 - 7 Thn</td>
                                    <td>27</td>
                                    <td>30</td>
                                    <td>57</td>
                                </tr>
                                <tr>
                                    <td>Usia 7 - 13 Thn</td>
                                    <td>4</td>
                                    <td>0</td>
                                    <td>4</td>
                                </tr>
                                <tr>
                                    <td colspan="5"><hr></td>
                                </tr>
                                <tr>
                                    <th rowspan="7">Tidak Pernah Sekolah</th>
                                </tr>
                                <tr>
                                    <td>Usia 7 - 13 Thn</td>
                                    <td>1</td>
                                    <td>0</td>
                                    <td>1</td>
                                </tr>
                                <tr>
                                    <td>Usia 19 - 23 Thn</td>
                                    <td>1</td>
                                    <td>2</td>
                                    <td>3</td>
                                </tr>
                                <tr>
                                    <td>Usia 30 - 40 Thn</td>
                                    <td>2</td>
                                    <td>1</td>
                                    <td>3</td>
                                </tr>
                                <tr>
                                    <td>Usia 56 - 65 Thn</td>
                                    <td>2</td>
                                    <td>5</td>
                                    <td>7</td>
                                </tr>
                                <tr>
                                    <td>Usia 65 - 75 Thn</td>
                                    <td>0</td>
                                    <td>12</td>
                                    <td>12</td>
                                </tr>
                                <tr>
                                    <td>Usia > 75 Thn</td>
                                    <td>3</td>
                                    <td>9</td>
                                    <td>12</td>
                                </tr>
                                <tr>
                                    <td colspan="5"><hr></td>
                                </tr>
                                <tr>
                                    <th rowspan="4">Sedang SD/Sederajat</th>
                                </tr>
                                <tr>
                                    <td>Usia 5 - 7 Thn</td>
                                    <td>10</td>
                                    <td>13</td>
                                    <td>23</td>
                                </tr>
                                <tr>
                                    <td>Usia 7 - 13 Thn</td>
                                    <td>190</td>
                                    <td>190</td>
                                    <td>380</td>
                                </tr>
                                <tr>
                                    <td>Usia 13 - 16 Thn</td>
                                    <td>23</td>
                                    <td>18</td>
                                    <td>41</td>
                                </tr>
                                <tr>
                                    <td colspan="5"><hr></td>
                                </tr>
                                <tr>
                                    <th rowspan="12">Tamat SD/Sederajat</th>
                                </tr>
                                <tr>
                                    <td>Usia 5 - 7 Thn</td>
                                    <td>0</td>
                                    <td>1</td>
                                    <td>1</td>
                                </tr>
                                <tr>
                                    <td>Usia 7 - 13 Thn</td>
                                    <td>1</td>
                                    <td>0</td>
                                    <td>1</td>
                                </tr>
                                <tr>
                                    <td>Usia 13 - 16 Thn</td>
                                    <td>8</td>
                                    <td>2</td>
                                    <td>10</td>
                                </tr>
                                <tr>
                                    <td>Usia 16 - 19 Thn</td>
                                    <td>19</td>
                                    <td>20</td>
                                    <td>39</td>
                                </tr>
                                <tr>
                                    <td>Usia 19 - 23 Thn</td>
                                    <td>31</td>
                                    <td>25</td>
                                    <td>56</td>
                                </tr>
                                <tr>
                                    <td>Usia 23 - 30 Thn</td>
                                    <td>88</td>
                                    <td>77</td>
                                    <td>165</td>
                                </tr>
                                <tr>
                                    <td>Usia 30 - 40 Thn</td>
                                    <td>194</td>
                                    <td>194</td>
                                    <td>388</td>
                                </tr>
                                <tr>
                                    <td>Usia 40 - 56 Thn</td>
                                    <td>380</td>
                                    <td>394</td>
                                    <td>774</td>
                                </tr>
                                <tr>
                                    <td>Usia 56 - 65 Thn</td>
                                    <td>132</td>
                                    <td>121</td>
                                    <td>253</td>
                                </tr>
                                <tr>
                                    <td>Usia 65 - 75 Thn</td>
                                    <td>90</td>
                                    <td>89</td>
                                    <td>179</td>
                                </tr>
                                <tr>
                                    <td>Usia > 75 Thn</td>
                                    <td>42</td>
                                    <td>75</td>
                                    <td>117</td>
                                </tr>
                                <tr>
                                    <td colspan="5"><hr></td>
                                </tr>
                                <tr>
                                    <th rowspan="5">Tidak Tamat SD/Sederajat</th>
                                </tr>
                                <tr>
                                    <td>Usia 13 - 16 Thn</td>
                                    <td>1</td>
                                    <td>0</td>
                                    <td>1</td>
                                </tr>
                                <tr>
                                    <td>Usia 30 - 40 Thn</td>
                                    <td>1</td>
                                    <td>0</td>
                                    <td>1</td>
                                </tr>
                                <tr>
                                    <td>Usia 65 - 75 Thn</td>
                                    <td>0</td>
                                    <td>3</td>
                                    <td>3</td>
                                </tr>
                                <tr>
                                    <td>Usia > 75 Thn</td>
                                    <td>2</td>
                                    <td>2</td>
                                    <td>4</td>
                                </tr>
                                <tr>
                                    <td colspan="5"><hr></td>
                                </tr>
                                <tr>
                                    <th rowspan="5">Sedang SLTP/Sederajat</th>
                                </tr>
                                <tr>
                                    <td>Usia 7 - 13 Thn</td>
                                    <td>4</td>
                                    <td>2</td>
                                    <td>6</td>
                                </tr>
                                <tr>
                                    <td>Usia 13 - 16 Thn</td>
                                    <td>68</td>
                                    <td>93</td>
                                    <td>161</td>
                                </tr>
                                <tr>
                                    <td>Usia 16 - 19 Thn</td>
                                    <td>6</td>
                                    <td>7</td>
                                    <td>13</td>
                                </tr>
                                <tr>
                                    <td>Usia 30 - 40 Thn</td>
                                    <td>0</td>
                                    <td>1</td>
                                    <td>1</td>
                                </tr>
                                <tr>
                                    <td colspan="5"><hr></td>
                                </tr>
                                <tr>
                                    <th rowspan="11">Tamat SLTP/Sederajat</th>
                                </tr>
                                <tr>
                                    <td>Usia 7 - 13 Thn</td>
                                    <td>3</td>
                                    <td>0</td>
                                    <td>3</td>
                                </tr>
                                <tr>
                                    <td>Usia 13 - 16 Thn</td>
                                    <td>6</td>
                                    <td>0</td>
                                    <td>6</td>
                                </tr>
                                <tr>
                                    <td>Usia 16 - 19 Thn</td>
                                    <td>22</td>
                                    <td>24</td>
                                    <td>26</td>
                                </tr>
                                <tr>
                                    <td>Usia 19 - 23 Thn</td>
                                    <td>55</td>
                                    <td>48</td>
                                    <td>103</td>
                                </tr>
                                <tr>
                                    <td>Usia 23 - 30 Thn</td>
                                    <td>64</td>
                                    <td>71</td>
                                    <td>135</td>
                                </tr>
                                <tr>
                                    <td>Usia 30 - 40 Thn</td>
                                    <td>61</td>
                                    <td>57</td>
                                    <td>118</td>
                                </tr>
                                <tr>
                                    <td>Usia 40 - 56 Thn</td>
                                    <td>21</td>
                                    <td>14</td>
                                    <td>35</td>
                                </tr>
                                <tr>
                                    <td>Usia 56 - 65 Thn</td>
                                    <td>7</td>
                                    <td>3</td>
                                    <td>10</td>
                                </tr>
                                <tr>
                                    <td>Usia 65 - 75 Thn</td>
                                    <td>2</td>
                                    <td>0</td>
                                    <td>2</td>
                                </tr>
                                <tr>
                                    <td>Usia > 75 Thn</td>
                                    <td>1</td>
                                    <td>1</td>
                                    <td>2</td>
                                </tr>
                                <tr>
                                    <td colspan="5"><hr></td>
                                </tr>
                                <tr>
                                    <th rowspan="6">Sedang SLTA/Sederajat</th>
                                </tr>
                                <tr>
                                    <td>Usia 13 - 16 Thn</td>
                                    <td>2</td>
                                    <td>2</td>
                                    <td>4</td>
                                </tr>
                                <tr>
                                    <td>Usia 16 - 19 Thn</td>
                                    <td>34</td>
                                    <td>34</td>
                                    <td>68</td>
                                </tr>
                                <tr>
                                    <td>Usia 19 - 23 Thn</td>
                                    <td>3</td>
                                    <td>7</td>
                                    <td>10</td>
                                </tr>
                                <tr>
                                    <td>Usia 23 - 30 Thn</td>
                                    <td>0</td>
                                    <td>1</td>
                                    <td>1</td>
                                </tr>
                                <tr>
                                    <td>Usia 30 - 40 Thn</td>
                                    <td>0</td>
                                    <td>1</td>
                                    <td>1</td>
                                </tr>
                                <tr>
                                    <td colspan="5"><hr></td>
                                </tr>
                                <tr>
                                    <th rowspan="10">Tamat SLTA/Sederajat</th>
                                </tr>
                                <tr>
                                    <td>Usia 13 - 16 Thn</td>
                                    <td>2</td>
                                    <td>0</td>
                                    <td>2</td>
                                </tr>
                                <tr>
                                    <td>Usia 16 - 19 Thn</td>
                                    <td>0</td>
                                    <td>2</td>
                                    <td>2</td>
                                </tr>
                                <tr>
                                    <td>Usia 19 - 23 Thn</td>
                                    <td>23</td>
                                    <td>19</td>
                                    <td>42</td>
                                </tr>
                                <tr>
                                    <td>Usia 23 - 30 Thn</td>
                                    <td>23</td>
                                    <td>21</td>
                                    <td>44</td>
                                </tr>
                                <tr>
                                    <td>Usia 30 - 40 Thn</td>
                                    <td>28</td>
                                    <td>28</td>
                                    <td>56</td>
                                </tr>
                                <tr>
                                    <td>Usia 40 - 56 Thn</td>
                                    <td>16</td>
                                    <td>13</td>
                                    <td>29</td>
                                </tr>
                                <tr>
                                    <td>Usia 56 - 65 Thn</td>
                                    <td>3</td>
                                    <td>2</td>
                                    <td>5</td>
                                </tr>
                                <tr>
                                    <td>Usia 65 - 75 Thn</td>
                                    <td>1</td>
                                    <td>0</td>
                                    <td>1</td>
                                </tr>
                                <tr>
                                    <td>Usia > 75 Thn</td>
                                    <td>0</td>
                                    <td>1</td>
                                    <td>1</td>
                                </tr>
                                <tr>
                                    <td colspan="5"><hr></td>
                                </tr>
                                <tr>
                                    <th rowspan="2">Sedang D-1/Sederajat</th>
                                </tr>
                                <tr>
                                    <td>Usia 30 - 40 Thn</td>
                                    <td>0</td>
                                    <td>1</td>
                                    <td>1</td>
                                </tr>
                                <tr>
                                    <td colspan="5"><hr></td>
                                </tr>
                                <tr>
                                    <th rowspan="5">Tamat D-1/Sederajat</th>
                                </tr>
                                <tr>
                                    <td>Usia 23 - 30 Thn</td>
                                    <td>0</td>
                                    <td>1</td>
                                    <td>1</td>
                                </tr>
                                <tr>
                                    <td>Usia 30 - 40 Thn</td>
                                    <td>0</td>
                                    <td>1</td>
                                    <td>1</td>
                                </tr>
                                <tr>
                                    <td>Usia 40 - 56 Thn</td>
                                    <td>0</td>
                                    <td>1</td>
                                    <td>1</td>
                                </tr>
                                <tr>
                                    <td>Usia 56 - 65 Thn</td>
                                    <td>0</td>
                                    <td>1</td>
                                    <td>1</td>
                                </tr>
                                <tr>
                                    <td colspan="5"><hr></td>
                                </tr>
                                <tr>
                                    <th rowspan="6">Tamat D-2/Sederajat</th>
                                </tr>
                                <tr>
                                    <td>Usia 13 - 16 Thn</td>
                                    <td>1</td>
                                    <td>0</td>
                                    <td>1</td>
                                </tr>
                                <tr>
                                    <td>Usia 23 - 30 Thn</td>
                                    <td>0</td>
                                    <td>1</td>
                                    <td>1</td>
                                </tr>
                                <tr>
                                    <td>Usia 30 - 40 Thn</td>
                                    <td>0</td>
                                    <td>1</td>
                                    <td>1</td>
                                </tr>
                                <tr>
                                    <td>Usia 40 - 56 Thn</td>
                                    <td>0</td>
                                    <td>1</td>
                                    <td>1</td>
                                </tr>
                                <tr>
                                    <td>Usia 56 - 65 Thn</td>
                                    <td>0</td>
                                    <td>1</td>
                                    <td>1</td>
                                </tr>
                                <tr>
                                    <td colspan="5"><hr></td>
                                </tr>
                                <tr>
                                    <th rowspan="2">Sedang D-3/Sederajat</th>
                                </tr>
                                <tr>
                                    <td>Usia 19 - 23 Thn</td>
                                    <td>0</td>
                                    <td>3</td>
                                    <td>3</td>
                                </tr>
                                <tr>
                                    <td colspan="5"><hr></td>
                                </tr>
                                <tr>
                                    <th rowspan="5">Sedang S-1/Sederajat</th>
                                </tr>
                                <tr>
                                    <td>Usia 19 - 23 Thn</td>
                                    <td>8</td>
                                    <td>19</td>
                                    <td>27</td>
                                </tr>
                                <tr>
                                    <td>Usia 23 - 30 Thn</td>
                                    <td>4</td>
                                    <td>6</td>
                                    <td>10</td>
                                </tr>
                                <tr>
                                    <td>Usia 30 - 40 Thn</td>
                                    <td>1</td>
                                    <td>0</td>
                                    <td>1</td>
                                </tr>
                                <tr>
                                    <td>Usia 40 - 56 Thn</td>
                                    <td>0</td>
                                    <td>1</td>
                                    <td>1</td>
                                </tr>
                                <tr>
                                    <td colspan="5"><hr></td>
                                </tr>
                                <tr>
                                    <th rowspan="7">Tamat S-1/Sederajat</th>
                                </tr>
                                <tr>
                                    <td>Usia 19 - 23 Thn</td>
                                    <td>0</td>
                                    <td>1</td>
                                    <td>1</td>
                                </tr>
                                <tr>
                                    <td>Usia 23 - 30 Thn</td>
                                    <td>8</td>
                                    <td>14</td>
                                    <td>22</td>
                                </tr>
                                <tr>
                                    <td>Usia 30 - 40 Thn</td>
                                    <td>0</td>
                                    <td>1</td>
                                    <td>1</td>
                                </tr>
                                <tr>
                                    <td>Usia 40 - 56 Thn</td>
                                    <td>11</td>
                                    <td>7</td>
                                    <td>18</td>
                                </tr>
                                <tr>
                                    <td>Usia 56 - 65 Thn</td>
                                    <td>2</td>
                                    <td>2</td>
                                    <td>4</td>
                                </tr>
                                <tr>
                                    <td>Usia 65 - 75 Thn</td>
                                    <td>1</td>
                                    <td>0</td>
                                    <td>1</td>
                                </tr>
                                <tr>
                                    <td colspan="5"><hr></td>
                                </tr>
                                <tr>
                                    <th rowspan="5">Tamat D-1/Sederajat</th>
                                </tr>
                                <tr>
                                    <td>Usia 23 - 30 Thn</td>
                                    <td>0</td>
                                    <td>1</td>
                                    <td>1</td>
                                </tr>
                                <tr>
                                    <td>Usia 30 - 40 Thn</td>
                                    <td>0</td>
                                    <td>1</td>
                                    <td>1</td>
                                </tr>
                                <tr>
                                    <td>Usia 40 - 56 Thn</td>
                                    <td>0</td>
                                    <td>1</td>
                                    <td>1</td>
                                </tr>
                                <tr>
                                    <td>Usia 56 - 65 Thn</td>
                                    <td>0</td>
                                    <td>1</td>
                                    <td>1</td>
                                </tr>
                                <tr>
                                    <td colspan="5"><hr></td>
                                </tr>
                                <tr>
                                    <th rowspan="3">Tamat S-2/Sederajat</th>
                                </tr>
                                <tr>
                                    <td>Usia 23 - 30 Thn</td>
                                    <td>1</td>
                                    <td>0</td>
                                    <td>1</td>
                                </tr>
                                <tr>
                                    <td>Usia 56 - 65 Thn</td>
                                    <td>1</td>
                                    <td>0</td>
                                    <td>1</td>
                                </tr>
                                <tr>
                                    <td colspan="5"><hr></td>
                                </tr>
                                <tr>
                                    <th rowspan="2">Sedang SLBA/Sederajat</th>
                                </tr>
                                <tr>
                                    <td>Usia 13 - 16 Thn</td>
                                    <td>1</td>
                                    <td>0</td>
                                    <td>1</td>
                                </tr>
                                <tr>
                                    <td colspan="5"><hr></td>
                                </tr>
                                <tr>
                                    <th rowspan="6">Tamat D-3/Sederajat</th>
                                </tr>
                                <tr>
                                    <td>Usia 23 - 30 Thn</td>
                                    <td>1</td>
                                    <td>1</td>
                                    <td>2</td>
                                </tr>
                                <tr>
                                    <td>Usia 30 - 40 Thn</td>
                                    <td>1</td>
                                    <td>3</td>
                                    <td>4</td>
                                </tr>
                                <tr>
                                    <td>Usia 40 - 56 Thn</td>
                                    <td>0</td>
                                    <td>1</td>
                                    <td>1</td>
                                </tr>
                                <tr>
                                    <td>Usia 56 - 65 Thn</td>
                                    <td>1</td>
                                    <td>1</td>
                                    <td>2</td>
                                    </tr>
                                <tr>
                                    <td>Usia 65 - 75 Thn</td>
                                    <td>1</td>
                                    <td>0</td>
                                    <td>1</td>
                                </tr>
                            </tbody>
                        </table>
                        <br>
                    </div>
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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
</html>
