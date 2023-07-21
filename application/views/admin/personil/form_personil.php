<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Style CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="<?=base_url('style/style.css')?>">
    <link rel="stylesheet" href="<?=base_url('style/berita.css')?>">
    <link rel="shortcut icon" href="<?php echo base_url('style/IMG_3889.PNG'); ?>">
    <style>
            #container {
                width: 1000px;
                margin: 20px auto;
            }
            .ck-editor__editable[role="textbox"] {
                /* editing area */
                min-height: 200px;
            }
            .ck-content .image {
                /* block images */
                max-width: 80%;
                margin: 20px auto;
            }
        </style>

    <title>Form Personil</title>
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
        <div class="row py-4">
            <!-- Ads -->
            <div class="col-md-1"></div>
            <!-- Content -->
            <div class="col">
                <!-- Article -->
                <form action="" method="post" enctype="multipart/form-data">
                <?php
                $jabatan = '';
                $nama = '';
                $pangkat = '';
                $nip = '';
                $pendidikan_terakhir = '';
                $jenis_kelamin = '';
                if(isset($personil)) {
                    $jabatan = $personil->jabatan;
                    $nama = $personil->nama;
                    $pangkat = $personil->pangkat;
                    $nip = $personil->nip;
                    $pendidikan_terakhir = $personil->pendidikan_terakhir;
                    $jenis_kelamin = $personil->jenis_kelamin;
                }
                ?>
                    <div class="container">
                        <div class="row">
                            <div class="col"></div>
                            <div class="col-6 justify-content-center">
                                <h3 class="text-center">Form Personil</h3>
                                <hr>
                                <div class="row py-1">
                                    <div class="col-md-3">
                                        <label for="jabatan"><h4>Jabatan</h4></label>
                                    </div>
                                    <div class="col">
                                        <input class="form-control" type="text" name="jabatan" id="jabatan validationDefault01" value="<?=$jabatan?>" required>
                                    </div>
                                </div>
                                <div class="row py-1">
                                    <div class="col-md-3">
                                        <label for="nama"><h4>Nama</h4></label>
                                    </div>
                                    <div class="col">
                                        <input class="form-control" type="text" name="nama" id="nama validationDefault01" value="<?=$nama?>" required>
                                    </div>
                                </div>
                                <div class="row py-1">
                                    <div class="col-md-3">
                                        <label for="pangkat"><h4>Pangkat</h4></label>
                                    </div>
                                    <div class="col">
                                        <input class="form-control" type="text" name="pangkat" id="pangkat validationDefault01" value="<?=$pangkat?>" required>
                                    </div>
                                </div>
                                <div class="row py-1">
                                    <div class="col-md-3">
                                        <label for="nip"><h4>NIP</h4></label>
                                    </div>
                                    <div class="col">
                                        <input class="form-control" type="number" name="nip" id="nip validationDefault01" value="<?=$nip?>" required>
                                    </div>
                                </div>
                                <div class="row py-1">
                                    <div class="col-md-3">
                                        <label for="pendidikan_terakhir"><h4>Pendidikan Terakhir</h4></label>
                                    </div>
                                    <div class="col">
                                        <input class="form-control" type="text" name="pendidikan_terakhir" id="pendidikan_terakhir validationDefault01" value="<?=$pendidikan_terakhir?>" required>
                                    </div>
                                </div>
                                <div class="row py-1">
                                    <div class="col-md-3">
                                        <label for="jenis_kelamin"><h4>Jenis Kelamin</h4></label>
                                    </div>
                                    <div class="col">
                                        <input type="radio" class="form-check-input" name="jenis_kelamin" id="jenis_kelamin" value="Laki-Laki" <?= $jenis_kelamin=='Laki-Laki'? 'checked':'';  ?> required> Laki-Laki 
                                        <input type="radio" class="form-check-input" name="jenis_kelamin" id="jenis_kelamin" value="Perempuan" <?= $jenis_kelamin=='Perempuan'? 'checked':'';  ?> required> Perempuan
                                    </div>
                                </div>
                                <br>
                                <a href="<?=site_url('admin/readp')?>" style="color: #ffffff"><button type="button" class="btn btn-primary float-end mx-1">Back</button></a>
                                <input type="submit" name="submit" class="btn btn-primary float-end mx-1" value="Submit">
                            </div>
                            <div class="col">
                            </div>
                        </div>
                    </div>
                </form>
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
    <script src="https://kit.fontawesome.com/50d0739a45.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
</html>
