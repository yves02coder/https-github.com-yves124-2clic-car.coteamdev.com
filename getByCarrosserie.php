<?php

session_start();
include('includes/config.php');

error_reporting(0);
global $dbh;
$sql = "SELECT DISTINCT (carrosserie) FROM tblvehicles ";
$res = $dbh->query($sql);
$req = $res->fetchAll();
$vhid=intval($_GET['vhid']);

?>
<!DOCTYPE HTML>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <title>Car Rental Portal</title>
    <!--Bootstrap -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="assets/css/style.css" type="text/css">
    <link rel="stylesheet" href="assets/css/owl.carousel.css" type="text/css">
    <link rel="stylesheet" href="assets/css/owl.transitions.css" type="text/css">
    <link href="assets/css/slick.css" rel="stylesheet">
    <link href="assets/css/bootstrap-slider.min.css" rel="stylesheet">
    <link href="assets/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" id="switcher-css" type="text/css" href="assets/switcher/css/switcher.css" media="all" />
    <link rel="alternate stylesheet" type="text/css" href="assets/switcher/css/red.css" title="red" media="all" data-default-color="true" />
    <link rel="alternate stylesheet" type="text/css" href="assets/switcher/css/orange.css" title="orange" media="all" />
    <link rel="alternate stylesheet" type="text/css" href="assets/switcher/css/blue.css" title="blue" media="all" />
    <link rel="alternate stylesheet" type="text/css" href="assets/switcher/css/pink.css" title="pink" media="all" />
    <link rel="alternate stylesheet" type="text/css" href="assets/switcher/css/green.css" title="green" media="all" />
    <link rel="alternate stylesheet" type="text/css" href="assets/switcher/css/purple.css" title="purple" media="all" />
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/images/favicon-icon/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/images/favicon-icon/apple-touch-icon-114-precomposed.html">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/images/favicon-icon/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="assets/images/favicon-icon/apple-touch-icon-57-precomposed.png">
    <link rel="shortcut icon" href="assets/images/favicon-icon/favicon.png">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body style="background-repeat: no-repeat;background-size: cover;background-position: center;background-image: url('https://images.fineartamerica.com/images/artworkimages/mediumlarge/2/3d-car-background-gualtiero-boffi.jpg');margin-bottom: 100px">
<header>
    <nav class="navbar navbar-light bg-dark my-5" style="height: 100px">
        <li>
            <a href="index.php" style="font-size: 20px">Accueil</a>
        </li>
        <div class="container">

            <a class="navbar-brand" href="index.php">
                <img src="https://media.tenor.com/ydLN6cT0i3gAAAAC/vaporwave-car.gif" alt="" width="100" >
            </a>

        </div>
    </nav>
</header>
<div class="container">
    <div class="mb-3  col-12" style="margin-top: 50px">
        <ul id="carrosserie" class="list-inline" style="justify-content: space-around;display: flex">
          <?php
            foreach ($req as $result) {
            $carrosserie = $result['carrosserie'];
             $VehiclesTitle = $result['VehiclesTitle'];
            ?>

            <div class="home" style="width:100px;height:100px;background:url('https://catalogue.automobile.tn/valeur/19.svg');background-position: center;background-size: contain;background-repeat: no-repeat;display:flex;justify-content: space-between;margin-bottom: 100px">
                <li class="list-inline-item" style="max-width: 100px">




                        <a href="getByCarrosserie.php?carrosserie=<?= $carrosserie ?>"> <input type="checkbox" id="carrosserie" name="carrosserie" ><?= $carrosserie ?></a>

                </li>
            </div>


        <?php
        }
        ?>
        </ul>
    </div>

<?php
$carrosserie = $_GET['carrosserie'];

$sql = "SELECT  id ,  VehiclesTitle ,  VehiclesBrand ,  VehiclesOverview ,  PricePerDay ,  FuelType ,  ModelYear ,  SeatingCapacity ,  type_vehicles ,  nbr_chevaux ,  Vimage1 ,  Vimage2 ,  Vimage3 ,  Vimage4 ,  Vimage5 ,  AirConditioner ,  PowerDoorLocks ,  AntiLockBrakingSystem ,  BrakeAssist ,  PowerSteering ,  DriverAirbag ,  PassengerAirbag ,  PowerWindows ,  CDPlayer ,  CentralLocking ,  CrashSensor ,  LeatherSeats ,  RegDate ,  UpdationDate ,  nbr_portes ,  nbr_cylindres ,  boite ,  transmission ,  carrosserie  FROM  tblvehicles  WHERE carrosserie = '".$carrosserie."'";
$response = $dbh->query($sql);
$request = $response->fetchAll();
 //print_r($request);
?>
<div class="row row-cols-1 row-cols-md-2 g-4" >
<?php
 foreach ($request as $value ){
     //echo $value['VehiclesTitle'];
     //echo $value['carrosserie'];

     ?>

     <div class="card mb-3 " style="max-width: 540px;margin: 10px;margin-left: 15px">
         <div class="row g-0">
             <div class="col-md-9">
                 <a href="vehical-details.php?vhid=<?= $value['id']?>" class="btn"> <img src="admin/img/vehicleimages/<?= $value['Vimage1'] ?>" class="card-img-top" alt="..."  style="margin-left: -15px;height:300px;width: 300px"></a>
             </div>
             <div class="col-md-3">
                 <div class="card-body">
                     <h5 class="card-title"><?= $value['VehiclesTitle'] ?></h5>
                     <p class="card-text"><i class="fa fa-user" aria-hidden="true"></i>: <?= $value['SeatingCapacity'] ?></p>
                     <p class="card-text"><i class="fa fa-car" aria-hidden="true"></i>: <?= $value['carrosserie'] ?></p>
                     <p class="card-text"><i class="fa fa-money" aria-hidden="true"></i>: <?= $value['PricePerDay'] ?>Fcfa/jour</p>
                     <p class="card-text"><small class="text-muted"><i class="fa fa-steam" aria-hidden="true"></i>: <?= $value['boite']  ?></small></p>
                 </div>
             </div>
         </div>
     </div>

<?php
 }
?>
</div>
  </div>
<?php
if(isset($_POST['emailsubscibe']))
{
    $subscriberemail=$_POST['subscriberemail'];
    global $dbh;
    $sql ="SELECT SubscriberEmail FROM tblsubscribers WHERE SubscriberEmail=:subscriberemail";
    $query= $dbh -> prepare($sql);
    $query-> bindParam(':subscriberemail', $subscriberemail, PDO::PARAM_STR);
    $query-> execute();
    $results = $query -> fetchAll(PDO::FETCH_OBJ);
    $cnt=1;
    if($query -> rowCount() > 0)
    {
        echo "<script>alert('Already Subscribed.');</script>";
    }
    else{
        $sql="INSERT INTO  tblsubscribers(SubscriberEmail) VALUES(:subscriberemail)";
        $query = $dbh->prepare($sql);
        $query->bindParam(':subscriberemail',$subscriberemail,PDO::PARAM_STR);
        $query->execute();
        $lastInsertId = $dbh->lastInsertId();
        if($lastInsertId)
        {
            echo "<script>alert('Subscribed successfully.');</script>";
        }
        else
        {
            echo "<script>alert('Something went wrong. Please try again');</script>";
        }
    }
}
?>


        <!-- /Footer-->

        <!--Back to top-->
    <div id="back-top" class="back-top"> <a href="#top"><i class="fa fa-angle-up" aria-hidden="true"></i> </a> </div>
    <!--/Back to top-->

    <!--Login-Form -->
    <?php include('includes/login.php');?>
    <!--/Login-Form -->

    <!--Register-Form -->
    <?php include('includes/registration.php');?>

    <!--/Register-Form -->

    <!--Forgot-password-Form -->
    <?php include('includes/forgotpassword.php');?>
    <!--/Forgot-password-Form -->

    <!-- Scripts -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/interface.js"></script>
    <!--Switcher-->
    <script src="assets/switcher/js/switcher.js"></script>
    <!--bootstrap-slider-JS-->
    <script src="assets/js/bootstrap-slider.min.js"></script>
    <!--Slider-JS-->
    <script src="assets/js/slick.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>

    </body>

    <!-- Mirrored from themes.webmasterdriver.net/carforyou/demo/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 16 Jun 2017 07:22:11 GMT -->
    </html>

