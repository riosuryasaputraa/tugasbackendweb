<?php

include 'action/connection/koneksi.php';
include 'action/function.php';
// session_start();

if (isset($_SESSION['isLoginUser'])) {
    $user = $_SESSION['user'];
} else {
    $user = '';
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>Laundry App - Dashboard</title>

    <!-- Custom fonts for this template-->
    <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="assets/css/style.css" />
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />
    <link rel="stylesheet" href="assets/css/style.css">

    <!-- Custom styles for this template-->
    <link href="assets/css/sb-admin-2.min.css" rel="stylesheet" />
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow-sm">
        <div class="container">
            <a class="navbar-brand" href="#">Bali Laundry</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse " id="navbarNavDropdown">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link mr-3 active" href="#">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mr-3 active" href="#sectionServices">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mr-3 active" href="#sectionContact">Contact Us</a>
                    </li>
                    <li class="nav-item mr-2">
                        <?php if ($user != '') { ?>
                        <div class="dropdown no-arrow">
                            <a class="dropdown-toggle nav-item nav-link active" data-toggle="dropdown" href="#"><img width="20px" src="assets/img/cart.png"></a>
                            <div class="dropdown-menu mt-2">
                                <a class="dropdown-item" href="view/user/daftarPesanan.php">Daftar Pesanan</a>
                                <a class="dropdown-item" href="view/user/daftarPesanan.php">Buat Pesanan</a>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item ">
                        <div class="dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline "><?= $user['nama'] ?></span>
                                <img class="img-profile rounded-circle" width="27px" src="assets/img/undraw_profile.svg" />
                            </a>
                             <!-- Dropdown - User Information -->
                        <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                            <a class="dropdown-item" href="view/user/viewProfile.php">
                                <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                Profile
                            </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                Logout
                            </a>
                        </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
                <?php  } else { ?>
                    <a href="action/auth/login.php" class="btn btn-block btn-light">Login</a>
                <?php  } ?>        
    </nav>

    <div class="container my-5" id="sectionMain">
        <?php if (isset($_SESSION['pesan'])) {
            echo $_SESSION['pesan'];
            unset($_SESSION['pesan']);
        } ?>
        <div class="row">
            <div class="col-lg-6 textMain">
                <h3 class="blackFont"><b>Bali Laundry</b></h3>
                <p>Kami Bergerak Dibidang Usaha Jasa Binatu / Laundry Di Wilayah Denpasar Bali Dan Sekitarnya, Yang Melayani Permintaan Jasa Laundry Baik Personal, Keluarga Serta Wisatawan. Kami Menawarkan Jasa Laundry Kiloan, Untuk Mempermudah Konsumen Serta Lebih Berhemat Dengan Kuantitas Pekerjaan Borongan.</p>
                <?php if ($user == '') { ?>
                    <h5 class="my-3"><i><b>Anda Dapat Login / Daftar Dahulu untuk membuat Pesanan</b></i></h6>
                    <?php } ?>
            </div>
            <div class="col-lg-6">
                <img src="assets/img/loginImg.jpg" class="boxShadowImg" width="450px" height="350px" alt="">
            </div>
        </div>
    </div>
    <div class="container" id="sectionServices">
        <center>
            <h3 class="mb-5">Layanan Paket Bali Laundry</h3>
        </center>
        <div class="row d-flex justify-content-between">
            <div class="col-lg-3">
                <div class="card boxShadowCard1">
                    <img class="card-img-top rounded" src="assets/img/bannerReguler.png" alt="Card image cap">
                    <div class="card-body p-4 blackFont">
                        <center>
                            <!-- <img src="assets/img/bannerReguler.png" class="img-fluid mt-2 mb-4 w-50 h-50" alt=""> -->
                            <h5 class="mt-2 mb-4 font-weight-bold">Reguler</h5>
                            <h5 class="mb-3">Cuci - Setrika - Lipat</h5>

                        </center>
                        <p class="spaceLine">
                            Jasa layanan laundry dengan kisaran harga Rp. 7.000 / kg untuk pengerjaan 2 hari wilayah Denpasar Bali dan sekitarnya, jasa terkait proses cuci, setrika, lipat hingga packing.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="card boxShadowCard2 ">
                    <img class="card-img-top rounded" src="assets/img/bannerSpecial.jpg" alt="Card image cap">
                    <div class="card-body p-4 blackFont">
                        <center>
                            <!-- <img src="assets/img/bannerReguler.png" class="img-fluid mt-2 mb-4 font-weight-bold w-50 h-50" alt=""> -->
                            <h5 class="mt-2 mb-4 font-weight-bold">Special</h5>
                            <h5 class="mb-3">Cuci - Setrika - Lipat - Pewangi</h5>

                        </center>
                        <p class="spaceLine">
                            Jasa layanan laundry dengan kisaran harga Rp. 20.000 / kg untuk pengerjaan 3 jam wilayah Denpasar Bali dan sekitarnya, jasa terkait proses cuci, setrika, lipat, pewangi hingga packing.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="card boxShadowCard3">
                    <img class="card-img-top rounded" src="assets/img/bannerExpress.jpg" alt="Card image cap">
                    <div class="card-body p-4 blackFont">
                        <center>
                            <!-- <img src="assets/img/bannerReguler.png" class="img-fluid mt-2 mb-4 font-weight-bold w-50 h-50" alt=""> -->
                            <h5 class="mt-2 mb-4 font-weight-bold">Express</h5>
                            <h5 class="mb-3">Cuci - Setrika - Lipat</h5>

                        </center>
                        <p class="spaceLine">
                            Jasa layanan laundry dengan kisaran harga Rp. 10.000 / kg untuk pengerjaan 1 hari atau 24 jam wilayah Denpasar Bali dan sekitarnya, jasa terkait proses cuci, setrika, lipat, hingga packing.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container mt-5" id="sectionContact">
        <div class="row">
            <div class="col-lg-6">
                <h4 class="text-center">Kontak Bali Laundry</h4>
                <hr>
                <div class="d-flex text-center justify-content-center">
                    <div class="mr-3">
                        <p><i class="fab fa-whatsapp fa-2x"></i></p>
                        <p><i class="fab fa-whatsapp fa-2x"></i></p>
                    </div>
                    <div class="" style="line-height: 35px;">
                        <p>081-xxx-xxxx - Admin Jono</p>
                        <p>082-xxx-xxxx - Admin Supri</p>
                    </div>
                </div>
                <hr>
                <div class="text-center">
                    <h4 class="jamBukaContact" style="margin-left: -30px;">Jam Operasional</h4>
                    <hr>
                    <table class="table table-borderless text-center   ">
                        <tbody class="font-weight-normal">
                            <tr>
                                <td>Sen - Kam:</td>
                                <td>7.30 - 22.00</td>
                            </tr>
                            <tr>
                                <td>Jum - Sab:</td>
                                <td>08.00 - 21.00</td>
                            </tr>
                            <tr>
                                <td>Minggu:</td>
                                <td>09.00 - 18.00</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col-lg-6 ">
                <h5 class="ml-5 text-center"><b>Temukan Lokasi Kami di Google Maps</b></h5>
                <div class="mapouter">
                    <div class="gmap_canvas me-5">
                        <iframe width="550" height="450" id="gmap_canvas" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15776.06023704589!2d115.2113933224918!3d-8.690117000507183!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd241af518fed0f%3A0xe3ba1546c3d4d66b!2sRewash%20Smart%20Laundry%20Bali!5e0!3m2!1sid!2sid!4v1674141930467!5m2!1sid!2sid" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                        <a href="https://www.whatismyip-address.com"></a><br>

                    </div>
                </div>
            </div>
        </div>
    </div>



    <footer>
        <div class="container-fluid marginFooter  ">
            <div class=" row shadow-lg">
                <div class="col-lg-12">
                    <div class="fs-5 py-3 text-center footerText">&#169 2022 Bali Laundry </div>
                </div>
            </div>
        </div>
    </footer>

    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Anda Yakin Ingin Logout ?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    Silahkan Klik Logout Jika Anda Ingin Keluar
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">
                        Batal
                    </button>
                    <a class="btn btn-primary" href="action/function.php?logout=1">Logout</a>
                </div>
            </div>
        </div>
    </div>








    <!-- Bootstrap core JavaScript-->
    <script src="assets/vendor/jquery/jquery.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!-- Core plugin JavaScript-->
    <script src="assets/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="assets/js/sb-admin-2.min.js"></script>
</body>

</html>