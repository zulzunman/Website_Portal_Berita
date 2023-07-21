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
    <title>Sejarah Desa Kiarajangkung</title>
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

                <!-- sejarah desa -->
                <div class="row pt-2 pb-2">
                    <h2>Sejarah Desa Kiarajangkung</h2>
                    <p align="justify" class="fs-5">
                        Kiarajangkung adalah nama suatu daerah dilereng Gunung Talagabodas, berada di ketinggian ± 780
                        meter diatas permukaan air laut, konon menurut keterangan sesepuh (karuhun) di Kiarajangkung,
                        bahwa nama Kiarajangkung diambil dari nama Kiara (Pohon Tinggi Besar) dan menurutnya sisa Kiara
                        yang kini menjulang 23 meter berada di wilayah Rt 02 Rw 04 Desa Kiarajangkung ini merupakan
                        tunas / sirung ( Istilah Sunda ) dan kata jangkung ( Bhs. Sunda ) adalah tinggi atau menjulang
                        tinggi.
                    </p>
                    <p align="justify" class="fs-5">
                        Konon Desa Kiarajangkung berdiri sekitar pada tahun 1820 M atau abad ke 18 Masehi termasuk
                        wilayah Kecamatan Cisayong dengan Kepala Desa pertamanya adalah Bapak KATAR, seiring dengan
                        perjalanan waktu dan bertambahnya penduduk kemudian dimekarkan Kiarajangkung dimekarkan pada
                        tahun 1996 menjadi Desa Kiarajangkung dan Desa Sundakerta pada masa Pemerintahan Kepala Desa
                        A.Sukanda ( H.Nurjaman Almarhum ).
                    </p>
                </div>

                <!-- sejarah kepala desa -->
                <div class="row pt-2 pb-2">
                    <h2>Sejarah Pemimpin Kepala Desa Kiarajangkung</h2>
                    <h6>berikut nama nama Kepala Desa Kiarajangkung sejak tahun 1820 berdasarkan keterangan orang tua (
                        Sesepuh/Tokoh Desa Kiarajangkung ) :</h6>
                    <div class="container">
                        <div class="col-9">
                            <table class="table table-hover table-bordered table-sm">
                                <thead class="table-dark">
                                    <tr align="center">
                                        <th scope="col">No.</th>
                                        <th scope="col">Nama Kepala Desa</th>
                                        <th scope="col">Periode</th>
                                        <th scope="col">Alamat Asal </th>
                                    </tr>
                                </thead>
                                <tbody class="table-group-divider">
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>KATAR</td>
                                        <td>1820 - 1830</td>
                                        <td>Panyindangan</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">2</th>
                                        <td>EJOB ATMANATADIWANGSA</td>
                                        <td>1830 - 1870</td>
                                        <td>Cijobo</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">3</th>
                                        <td>SACA DIWANGSA</td>
                                        <td>1870 - 1890</td>
                                        <td>Cijobo</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">4</th>
                                        <td>SALYA DIWANGSA</td>
                                        <td>1890 - 1912</td>
                                        <td>Cijobo</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">5</th>
                                        <td>MARHASAN</td>
                                        <td>1912 - 1924</td>
                                        <td>Cijobo</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">6</th>
                                        <td>ABDUL ROJAK SURAWIKARTA</td>
                                        <td>1924 - 1936</td>
                                        <td>Celeput</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">7</th>
                                        <td>DAHLAN</td>
                                        <td>1936 - 1937</td>
                                        <td>Cijoho</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">8</th>
                                        <td>WIRANATA</td>
                                        <td>1937 - 1954</td>
                                        <td>Cijoho</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">9</th>
                                        <td>ADIWISASTRA</td>
                                        <td>1954 – 1965</td>
                                        <td>Buniruum</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">10</th>
                                        <td>E.RUSLI</td>
                                        <td>1965 – 1973</td>
                                        <td>Cijoho</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">11</th>
                                        <td>MAMAT SUDARYAT</td>
                                        <td>1973 – 1977</td>
                                        <td>Kiarajangkung</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">12</th>
                                        <td>E.KOSWARA ( Kartiker )</td>
                                        <td>1977 – 1978</td>
                                        <td>Cisayong</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">13</th>
                                        <td>A.SUKANDA (H. NURJAMAN)</td>
                                        <td>1978 – 1988</td>
                                        <td>Cilangen</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">14</th>
                                        <td>NANA SUPRIATNA (H.NURSOFA)</td>
                                        <td>1988 – 1995</td>
                                        <td>Cilangen</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">15</th>
                                        <td>AGUS WIHARYA (PJS)</td>
                                        <td>1988 – 1995</td>
                                        <td>Sirnamanah</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">16</th>
                                        <td>OYON SUDAYAT (PJS)</td>
                                        <td>1998 – 2000</td>
                                        <td>Sirnamanah</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">17</th>
                                        <td>H. EMPON SURYANA</td>
                                        <td>2000 – 2005</td>
                                        <td>Kiarajangkung</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">18</th>
                                        <td>ENDANG SAMBAS (PJS)</td>
                                        <td>2005 – 2005</td>
                                        <td>Kiarajangkung</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">19</th>
                                        <td>H. NURSOFA</td>
                                        <td>2005 – 2006</td>
                                        <td>Cilangen</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">20</th>
                                        <td>LILI B HADIAMAN (PJS)</td>
                                        <td>2006 – 2007</td>
                                        <td>Kiarajangkung</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">21</th>
                                        <td>ENDANG SAMBAS (PLT)</td>
                                        <td>2007 – 2007</td>
                                        <td>Kiarajangkung</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">22</th>
                                        <td>ASEP WAWAN, S.Sos</td>
                                        <td>2007 – 2013</td>
                                        <td>Cimulya</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">23</th>
                                        <td>ASEP WAWAN, S.Sos</td>
                                        <td>2013 – 2019</td>
                                        <td>Cimulya</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">24</th>
                                        <td>TUHAEDAH (PJS)</td>
                                        <td>2019 – 2019 </td>
                                        <td>Cisayong</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">25</th>
                                        <td>ASEP WAWAN, S.Sos</td>
                                        <td>2019 - 2025</td>
                                        <td>Cimulya</td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>
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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
        crossorigin="anonymous"></script>
</body>

</html>