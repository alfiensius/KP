<?php
session_start();
include_once 'entity/Book.php';
include_once 'entity/User.php';
include_once 'entity/Server.php';
include_once 'entity/Available.php';
include_once 'controller/BookController.php';
include_once 'controller/UserController.php';
include_once 'controller/ServerController.php';
include_once 'controller/AvailableController.php';
include_once 'dao/BookDaoImpl.php';
include_once 'dao/UserDaoImpl.php';
include_once 'dao/ServerDaoImpl.php';
include_once 'dao/AvailableDaoImpl.php';
include_once 'util/PDOUtil.php';

if (!isset($_SESSION['my_session'])) {$_SESSION['my_session']=false;}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Library</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
    <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/datatables.css">

    <!-- =======================================================
    * Template Name: Groovin - v2.2.1
    * Template URL: https://bootstrapmade.com/groovin-free-bootstrap-theme/
    * Author: BootstrapMade.com
    * License: https://bootstrapmade.com/license/
    ======================================================== -->
    <script type="text/javascript" src="js/functional_js.js"></script>
    <script type="text/javascript" src="scripts/command_script.js"></script>


</head>

<body>

<!-- ======= Header ======= -->
<header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

        <h1 class="logo mr-auto"><a href="index.php">Library</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html" class="logo mr-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

        <nav class="nav-menu d-none d-lg-block">
            <ul>
                <?php
                if ($_SESSION['my_session']==false) {
                ?>
                    <li><a href="?navito=home">Home</a></li>
                    <li><a href="?navito=book">Book</a></li>
                    <?php
                }
                ?>
                <?php
                if ($_SESSION['my_session']) {
                    ?>
                    <li><a href="?navito=book">Book</a></li>
                        <?php
                        if ($_SESSION['user_Role']==0) {
                            ?>
                            <li><a href="?navito=server">Server</a></li>
                            <?php
                        }
                            ?>
                    <li><a href="?navito=logout">Logout</a></li>
                    <?php
                }
                ?>
            </ul>
        </nav><!-- .nav-menu -->
    </div>
</header><!-- End Header -->
<main id="main">
    <?php
    $nav = filter_input(INPUT_GET, "navito");

    echo 'GET: '; print_r($_GET); echo '<br/><br/>';
    echo 'POST: '; print_r($_POST); echo '<br/><br/>';
    echo 'SESSION: '; print_r($_SESSION); echo '<br/><br/>';

    echo '*** '. $nav . ' ***';

    switch ($nav) {
    case 'home':
        $userController=new UserController();
        $userController->index();
        break;
    case 'bookDetails':
        $bookController=new BookController();
        $bookController->viewBook();
        break;
    case 'book':
        $bookController=new BookController();
        $bookController->index();
        break;
    case 'bookMng':
        $bookController=new BookController();
        $bookController->addBook();
        $bookController->delete();
        break;
    case 'server':
        $serverController=new ServerController();
        $serverController->index();
        break;
    case 'serverMng':
        include_once 'view/serverManagement.php';
        break;
    case 'sinkronMng':
        include_once 'view/sinkronManagement.php';
        break;
    case 'logout':
        $userController=new UserController();
        $userController->logout();
        break;

    default:
        echo 'Error <br/><br/>';
    if ($_SESSION['my_session']) {
        include_once './index.php';
        break;
    }
    ?>
</main><!-- End #main -->
<?php
}
?>

<!-- ======= Footer ======= -->
<footer id="footer">
    <div class="footer-top mt-5">
        <div class="container">
            <div class="row">

                <div class="col-lg-3 col-md-6">
                    <div class="footer-info">
                        <h3>Library</h3>
                        <p>
                            Babakan jeruk <br>
                            no 11, Bandung<br><br>
                            <strong>Phone:</strong> 082232573814<br>
                            <strong>Email: </strong>1772051@maranatha.ac.id<br>
                        </p>
                        <div class="social-links mt-3">
                            <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                            <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                            <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                            <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                            <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-2 col-md-6 footer-links">
                    <h4>Useful Links</h4>
                    <ul>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Book</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
                    </ul>
                </div>

            </div>
        </div>

    <div class="container ">
        <div class="copyright">
            &copy; Copyright <strong><span>Groovin</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
            <!-- All the links in the footer should remain intact. -->
            <!-- You can delete the links only if you purchased the pro version. -->
            <!-- Licensing information: https://bootstrapmade.com/license/ -->
            <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/groovin-free-bootstrap-theme/ -->
            Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
        </div>
    </div>
</footer><!-- End Footer -->

<a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

<!-- Vendor JS Files -->
<script src="assets/vendor/jquery/jquery.min.js"></script>
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
<script src="assets/vendor/php-email-form/validate.js"></script>
<script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
<script src="assets/vendor/counterup/counterup.min.js"></script>
<script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="assets/vendor/venobox/venobox.min.js"></script>
<script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>

<!-- Template Main JS File -->
<script src="assets/js/main.js"></script>
<!-- Jquery JS-->
<script src="vendor/jquery/jquery.min.js"></script>
<!-- Vendor JS-->
<script src="vendor/select2/select2.min.js"></script>
<script src="vendor/datepicker/moment.min.js"></script>
<script src="vendor/datepicker/daterangepicker.js"></script>

<!-- Main JS-->
<script src="js/global.js"></script>
<!-- Datatable -->
<script type="text/javascript" src="js/datatables.js"></script>
<script type="text/javascript">
    $(document).ready(function () {
        $('#tableId').DataTable();
    });
</script>

</body>

</html>