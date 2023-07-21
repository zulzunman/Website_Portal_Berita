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

    <title>Form Berita</title>
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
                <form action="" method="post" onSubmit="return validate()" enctype="multipart/form-data">
                    <?php 
                    $author='';
                    $judul='';
                    $gambar='';
                    $kate='';
                    $konten='';
                    if(isset($berita)){
                        $author=$berita->author;
                        $judul=$berita->judul;
                        $kate=$berita->kategori;
                        $gambar=$berita->gambar;
                        $kateg= explode(",",$kate);
                        $konten=$berita->konten;
                    }
                    ?>
                    <div class="row">
                        <div class="col">
                            <div class="row my-2 py-2">
                                <label for="author"><h4>Author</h4></label>
                                <div class="col">
                                    <input type="text" name="author" id="author validationDefault01" value="<?=$author?>" class="form-control" required>
                                </div>
                            </div>
                            <div class="row my-2 py-2">
                                <label for="judul"><h4>Judul</h4></label>
                                <div class="col">
                                    <input type="text" name="judul" id="judul validationDefault01" value="<?=$judul?>" class="form-control" required>
                                </div>
                            </div>
                            <div class="row my-2 py-2">
                                <label for="gambar"><h4>Gambar</h4></label>
                                <div class="col">
                                    <?php 
                                    if ($judul) {
                                        echo '<input type="file" name="gambar" id="gambar"   class="form-control">';
                                    } else {
                                        echo '<input type="file" name="gambar" id="gambar"   class="form-control" required>';
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="row kategori my-2 py-2">
                                <div class="col">
                                    <label for="kategori"><h4>Kategori</h4></label>
                                    <div class="col kat">
                                        <?php foreach($kategori as $data) {
                                            $pecah = "$data->nama";
                                            $kat = explode(",",$pecah);
                                            foreach ($kat as $key => $value) { 
                                                if ($judul) {
                                                    if(in_array($value,$kateg)){
                                                        $st="checked";
                                                    }
                                                    else{
                                                        $st="";
                                                    }
                                                    echo '<div class="form-check">
                                                    <input class="form-check-input" name="kategori[]" type="checkbox" value="'.$value.'" id="validationFormCheck1" '.$st.'>
                                                    <label class="form-check-label" for="validationFormCheck1">
                                                        '.$value.'
                                                    </label><div class="invalid-feedback">Pilih kategori</div>
                                                    </div>';
                                                } else {
                                                    echo '<div class="form-check">
                                                    <input class="form-check-input" name="kategori[]" type="checkbox" value="'.$value.'" id="validationFormCheck1">
                                                    <label class="form-check-label" for="validationFormCheck1">
                                                        '.$value.'
                                                    </label><div class="invalid-feedback">Pilih kategori</div>
                                                    </div>';
                                                }
                                            }
                                        } ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="row konten my-2 py-2">
                            <label for="editor1"><h4>Konten</h4></label>
                            <div class="col ko">
                                <textarea id="editor1" name="konten" rows="4" required><?=$konten?></textarea>
                            </div>
                        </div>
                    </div>
                    <br>
                    <input type="submit" name="submit" class="btn btn-primary" value="Submit">
                    <a href="<?=site_url('admin/readb')?>"><input type="button" class="btn btn-primary" value="Batal"></a>
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

    <script language="javascript">
    function validate()
    {
    var chks = document.getElementsByName('kategori[]');
    var hasChecked = false;
    for (var i = 0; i < chks.length; i++)
    {
        if (chks[i].checked)
        {
        hasChecked = true;
        break;
        }
    }

    if (hasChecked == false)
        {
        alert("Pilih kategori");
        return false;
        }

    return true;
    }
    </script>
    <script>
        $(document).ready(function(){
            var img = $('#gambar').val();
        });
    </script>
    <script src="//cdn.ckeditor.com/4.22.1/full/ckeditor.js"></script>
    <script>
        CKEDITOR.replace( 'editor1' );
    </script>
    <script src="https://kit.fontawesome.com/50d0739a45.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
</html>
