<?php
session_start();
include('includes/config.php');

error_reporting(0);
?>
<!DOCTYPE HTML>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <title>Car Rental Port | Vehicle Details</title>
    <!--Bootstrap -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" type="text/css">
    <!--Custome Style -->
    <link rel="stylesheet" href="assets/css/style.css" type="text/css">
    <!--OWL Carousel slider-->
    <link rel="stylesheet" href="assets/css/owl.carousel.css" type="text/css">
    <link rel="stylesheet" href="assets/css/owl.transitions.css" type="text/css">
    <!--slick-slider -->
    <link href="assets/css/slick.css" rel="stylesheet">
    <!--bootstrap-slider -->
    <link href="assets/css/bootstrap-slider.min.css" rel="stylesheet">
    <!--FontAwesome Font Style -->
    <link href="assets/css/font-awesome.min.css" rel="stylesheet">

    <!-- SWITCHER -->
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
</head>
<body>

<!-- Start Switcher -->
<?php include('includes/colorswitcher.php');?>
<!-- /Switcher -->

<!--Header-->
<?php include('includes/header.php');?>
<!-- /Header -->

<!--Listing-Image-Slider-->
<div class="mb-3  col-12" style="margin-left: 200px">
    <div class="text-uppercase fw-bolder mt-4 " >Carrosserie :</div>
    <form action="" method="post">
        <div class="mb-3  col-12">

            <ul id="carrosserie" class="list-inline">
                <div class="home" style="width:100px;height:100px;background:url('https://catalogue.automobile.tn/valeur/19.svg');background-position: center;background-size: contain;background-repeat: no-repeat;display:flex;justify-content: space-between;">
                <li class="list-inline-item">

                    <input type="checkbox" id="cb_1_19" name="carrosserie[]" value="19">

                    <label for="cb_1_19" >
                        Citadine
                    </label>
                </li>
                </div>
                <div style="width:100px;height:100px;background:url('https://catalogue.automobile.tn/valeur/1.svg');background-position: center;background-size: contain;background-repeat: no-repeat;display:flex;justify-content: space-between;">
                <li class="list-inline-item">
                    <input type="checkbox" id="cb_1_1" name="carrosserie[]" value="1">
                    <label for="cb_1_1" style="background-image:url();">
                        Compacte
                    </label>
                </li></div>
                <div style="width:100px;height:100px;background:url('https://catalogue.automobile.tn/valeur/2.svg');background-position: center;background-size: contain;background-repeat: no-repeat;display:flex;justify-content: space-between;">
                <li class="list-inline-item">
                    <input type="checkbox" id="cb_1_2" name="carrosserie[]" value="2">
                    <label for="cb_1_2" style="background-image:url();">
                        Berline
                    </label>
                </li></div>
                <div style="width:100px;height:100px;background:url('https://catalogue.automobile.tn/valeur/3.svg');background-position: center;background-size: contain;background-repeat: no-repeat;display:flex;justify-content: space-between;">
                <li class="list-inline-item">
                    <input type="checkbox" id="cb_1_3" name="carrosserie[]" value="3">
                    <label for="cb_1_3" style="background-image:url();">
                        Coupé
                    </label>
                </li></div>
                <div style="width:100px;height:100px;background:url('https://catalogue.automobile.tn/valeur/1.svg');background-position: center;background-size: contain;background-repeat: no-repeat;display:flex;justify-content: space-between;">
                <li class="list-inline-item">
                    <input type="checkbox" id="cb_1_20" name="carrosserie[]" value="20">
                    <label for="cb_1_20" style="background-image:url('https://catalogue.automobile.tn/valeur/20.svg'); height="87"
                    width="100px"">
                    Cabriolet
                    </label>
                </li></div>
                <div style="width:100px;height:100px;background:url('https://catalogue.automobile.tn/valeur/5.svg');background-position: center;background-size: contain;background-repeat: no-repeat;display:flex;justify-content: space-between;">
                <li class="list-inline-item">
                    <input type="checkbox" id="cb_1_5" name="carrosserie[]" value="5">
                    <label for="cb_1_5" style="background-image:url();">
                        SUV
                    </label>
                </li>
                </div>
                <div style="width:100px;height:100px;background:url('https://catalogue.automobile.tn/valeur/39.svg');background-position: center;background-size: contain;background-repeat: no-repeat;display:flex;justify-content: space-between;">
                <li class="list-inline-item">
                    <input type="checkbox" id="cb_1_39" name="carrosserie[]" value="39">
                    <label for="cb_1_39" style="background-image:url();">
                        Monospace
                    </label>
                </li></div>
                <div style="width:100px;height:100px;background:url('https://catalogue.automobile.tn/valeur/4.svg');background-position: center;background-size: contain;background-repeat: no-repeat;display:flex;justify-content: space-between;">
                <li class="list-inline-item">
                    <input type="checkbox" id="cb_1_4" name="carrosserie[]" value="4">
                    <label for="cb_1_4" style="background-image:url();">
                        Utilitaire
                    </label>
                </li></div>
                <div style="width:100px;height:100px;background:url('https://catalogue.automobile.tn/valeur/6.svg');background-position: center;background-size: contain;background-repeat: no-repeat;display:flex;justify-content: space-between;">
                <li class="list-inline-item">
                    <input type="checkbox" id="cb_1_6" name="carrosserie[]" value="6">
                    <label for="cb_1_6" style="background-image:url();">
                        Pick up
                    </label>
                </li>
                </div>
            </ul>
        </div>
        <input type="submit" value="submit" name="submit">
    </form>
</div>
<div class="tab-content">
    <div role="tabpanel" class="tab-pane active" id="resentnewcar">

        <?php
        global $dbh;
$carrosserie = $_POST['carrosserie'];
        $id=$_GET['id'];
        if (isset($_POST['submit'])){
            if (!empty($carrosserie)){


            foreach ($_POST['carrosserie'] as $result=>$value){

                $sql="SELECT tblvehicles.VehiclesTitle,tblvehicles.carrosserie,tblvehicles.boite,tblvehicles.type_vehicles,tblbrands.BrandName,tblvehicles.PricePerDay,tblvehicles.FuelType,tblvehicles.ModelYear,tblvehicles.id,tblvehicles.SeatingCapacity,tblvehicles.VehiclesOverview,tblvehicles.Vimage1 from tblvehicles join tblbrands on tblbrands.id=tblvehicles.VehiclesBrand WHERE carrosserie='".$carrosserie."'";
                $response = $dbh -> query($sql);

                $results=$response->fetchAll();

        ?>

                <div class="col-list-3"data-aos="fade-left" data-aos-duration="3000">
                    <div class="recent-car-list">

                        <div class="car-info-box" style="height: 311px;"> <a href="vehical-details.php?vhid=<?php echo htmlentities($value->id);?>"><img src="<?php echo htmlentities($value->Vimage1);?>" class="img-responsive" alt="image" style="object-fit: cover;height: 195px;width: 356px"></a>
                            <ul>
                                <li><i class="fa fa-car" aria-hidden="true"></i><?php echo htmlentities($value->FuelType);?></li>
                                <li><i class="fa fa-calendar" aria-hidden="true"></i><?php echo htmlentities($value->ModelYear);?> Model</li>
                                <li><i class="fa fa-user" aria-hidden="true"></i><?php echo htmlentities($value->SeatingCapacity);?> seats</li>
                                <li><i class="fa fa-car" aria-hidden="true"></i><?php echo htmlentities($value->carrosserie);?></li>
                                <li><i class="fa fa-steam" aria-hidden="true"></i><?php echo htmlentities($value->boite);?></li>
                                <li><i class="fa fa-car" aria-hidden="true"></i><?php echo htmlentities($value->type_vehicles);?></li>
                            </ul>
                        </div>
                        <div class="car-title-m">
                            <h6><a href="vehical-details.php?vhid=<?php echo htmlentities($value->id);?>"><?php echo htmlentities($value->BrandName);?> , <?php echo htmlentities($value->VehiclesTitle);?></a></h6>
                            <span class="price">$<?php echo htmlentities($value->PricePerDay);?> Price</span>
                        </div>
                        <div class="inventory_info_m">
                            <p><?php echo substr($value->VehiclesOverview,0,20);?></p>
                        </div>
                    </div>
                </div>
            <?php
            }
            }
        }
        ?>

    </div>
</div>


<!--/Listing-Image-Slider-->


<!--Listing-detail-->
<section class="listing-detail">
    <div class="container">
        <div class="listing_detail_head row">
            <div class="col-md-9">
                <h2><?php echo htmlentities($result->BrandName);?> , <?php echo htmlentities($result->VehiclesTitle);?></h2>
            </div>
            <div class="col-md-3">
                <div class="price_info">
                    <p>$<?php echo htmlentities($result->PricePerDay);?> </p>Price

                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-9">
                <div class="main_features">
                    <ul>

                        <li> <i class="fa fa-calendar" aria-hidden="true"></i>
                            <h5><?php echo htmlentities($result->ModelYear);?></h5>
                            <p>Reg.Year</p>
                        </li>
                        <li> <i class="fa fa-cogs" aria-hidden="true"></i>
                            <h5><?php echo htmlentities($result->FuelType);?></h5>
                            <p>Fuel Type</p>
                        </li>

                        <li> <i class="fa fa-user-plus" aria-hidden="true"></i>
                            <h5><?php echo htmlentities($result->SeatingCapacity);?></h5>
                            <p>Seats</p>
                        </li>
                        <li> <i class="fa fa-flash" aria-hidden="true"></i>
                            <h5><?php echo htmlentities($result->nbr_chevaux);?></h5>
                            <p>Puissance fiscale</p>
                        </li>
                        <li> <i class="fa fa-refresh" aria-hidden="true"></i>
                            <h5><?php echo htmlentities($result->type_vehicles);?></h5>
                            <p><?php echo htmlentities($result->type_vehicles);?></p>
                        </li>
                        <li> <i class="fa fa-steam" aria-hidden="true"></i>
                            <h5><?php echo htmlentities($result->boite);?></h5>
                        </li>
                        <li style="margin-top: 4px"> <i class="fa fa-car" aria-hidden="true"></i>

                            <h5><?php echo htmlentities($result->carrosserie);?></h5>
                        </li>
                        <li  style="margin-top: 4px"> <i class="fa fa-cogs" aria-hidden="true"></i>
                            <h5><?php echo htmlentities($result->transmission);?></h5>
                        </li>
                    </ul>
                </div>
                <div class="listing_more_info">
                    <div class="listing_detail_wrap">
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs gray-bg" role="tablist">
                            <li role="presentation" class="active"><a href="#vehicle-overview " aria-controls="vehicle-overview" role="tab" data-toggle="tab">Vehicle Overview </a></li>

                            <li role="presentation"><a href="#accessories" aria-controls="accessories" role="tab" data-toggle="tab">Accessories</a></li>
                        </ul>

                        <!-- Tab panes -->
                        <div class="tab-content">
                            <!-- vehicle-overview -->
                            <div role="tabpanel" class="tab-pane active" id="vehicle-overview">

                                <p><?php echo htmlentities($result->VehiclesOverview);?></p>
                            </div>


                            <!-- Accessories -->
                            <div role="tabpanel" class="tab-pane" id="accessories">
                                <!--Accessories-->
                                <table>
                                    <thead>
                                    <tr>
                                        <th colspan="2">Accessories</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>Air Conditioner</td>
                                        <?php if($result->AirConditioner==1)
                                        {
                                            ?>
                                            <td><i class="fa fa-check" aria-hidden="true"></i></td>
                                        <?php } else { ?>
                                            <td><i class="fa fa-close" aria-hidden="true"></i></td>
                                        <?php } ?> </tr>

                                    <tr>
                                        <td>AntiLock Braking System</td>
                                        <?php if($result->AntiLockBrakingSystem==1)
                                        {
                                            ?>
                                            <td><i class="fa fa-check" aria-hidden="true"></i></td>
                                        <?php } else {?>
                                            <td><i class="fa fa-close" aria-hidden="true"></i></td>
                                        <?php } ?>
                                    </tr>

                                    <tr>
                                        <td>Power Steering</td>
                                        <?php if($result->PowerSteering==1)
                                        {
                                            ?>
                                            <td><i class="fa fa-check" aria-hidden="true"></i></td>
                                        <?php } else { ?>
                                            <td><i class="fa fa-close" aria-hidden="true"></i></td>
                                        <?php } ?>
                                    </tr>


                                    <tr>

                                        <td>Power Windows</td>

                                        <?php if($result->PowerWindows==1)
                                        {
                                            ?>
                                            <td><i class="fa fa-check" aria-hidden="true"></i></td>
                                        <?php } else { ?>
                                            <td><i class="fa fa-close" aria-hidden="true"></i></td>
                                        <?php } ?>
                                    </tr>

                                    <tr>
                                        <td>CD Player</td>
                                        <?php if($result->CDPlayer==1)
                                        {
                                            ?>
                                            <td><i class="fa fa-check" aria-hidden="true"></i></td>
                                        <?php } else { ?>
                                            <td><i class="fa fa-close" aria-hidden="true"></i></td>
                                        <?php } ?>
                                    </tr>

                                    <tr>
                                        <td>Leather Seats</td>
                                        <?php if($result->LeatherSeats==1)
                                        {
                                            ?>
                                            <td><i class="fa fa-check" aria-hidden="true"></i></td>
                                        <?php } else { ?>
                                            <td><i class="fa fa-close" aria-hidden="true"></i></td>
                                        <?php } ?>
                                    </tr>

                                    <tr>
                                        <td>Central Locking</td>
                                        <?php if($result->CentralLocking==1)
                                        {
                                            ?>
                                            <td><i class="fa fa-check" aria-hidden="true"></i></td>
                                        <?php } else { ?>
                                            <td><i class="fa fa-close" aria-hidden="true"></i></td>
                                        <?php } ?>
                                    </tr>

                                    <tr>
                                        <td>Power Door Locks</td>
                                        <?php if($result->PowerDoorLocks==1)
                                        {
                                            ?>
                                            <td><i class="fa fa-check" aria-hidden="true"></i></td>
                                        <?php } else { ?>
                                            <td><i class="fa fa-close" aria-hidden="true"></i></td>
                                        <?php } ?>
                                    </tr>
                                    <tr>
                                        <td>Brake Assist</td>
                                        <?php if($result->BrakeAssist==1)
                                        {
                                            ?>
                                            <td><i class="fa fa-check" aria-hidden="true"></i></td>
                                        <?php  } else { ?>
                                            <td><i class="fa fa-close" aria-hidden="true"></i></td>
                                        <?php } ?>
                                    </tr>

                                    <tr>
                                        <td>Driver Airbag</td>
                                        <?php if($result->DriverAirbag==1)
                                        {
                                            ?>
                                            <td><i class="fa fa-check" aria-hidden="true"></i></td>
                                        <?php } else { ?>
                                            <td><i class="fa fa-close" aria-hidden="true"></i></td>
                                        <?php } ?>
                                    </tr>

                                    <tr>
                                        <td>Passenger Airbag</td>
                                        <?php if($result->PassengerAirbag==1)
                                        {
                                            ?>
                                            <td><i class="fa fa-check" aria-hidden="true"></i></td>
                                        <?php } else {?>
                                            <td><i class="fa fa-close" aria-hidden="true"></i></td>
                                        <?php } ?>
                                    </tr>

                                    <tr>
                                        <td>Crash Sensor</td>
                                        <?php if($result->CrashSensor==1)
                                        {
                                            ?>
                                            <td><i class="fa fa-check" aria-hidden="true"></i></td>
                                        <?php } else { ?>
                                            <td><i class="fa fa-close" aria-hidden="true"></i></td>
                                        <?php } ?>
                                    </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>


            </div>

            <!--Side-Bar-->
            <aside class="col-md-3">

                <div class="share_vehicle">
                    <p>Share: <a href="#"><i class="fa fa-facebook-square" aria-hidden="true"></i></a> <a href="#"><i class="fa fa-twitter-square" aria-hidden="true"></i></a> <a href="#"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a> <a href="#"><i class="fa fa-google-plus-square" aria-hidden="true"></i></a> </p>
                </div>
                <div class="sidebar_widget">
                    <div class="widget_heading">
                        <h5><i class="fa fa-envelope" aria-hidden="true"></i>Book Now</h5>
                    </div>
                    <form method="post">
                        <div class="form-group">
                            <input type="date" class="form-control" name="fromdate" placeholder="From Date(dd/mm/yyyy)" required>
                        </div>
                        <div class="form-group">
                            <input type="date" class="form-control" name="todate" placeholder="To Date(dd/mm/yyyy)" required>
                        </div>
                        <div class="form-group">
                            <textarea rows="4" class="form-control" name="message" placeholder="Message" required></textarea>
                        </div>
                        <?php if($_SESSION['login'])
                        {?>
                            <div class="form-group">
                                <input type="submit" class="btn"  name="submit" value="Book Now">
                            </div>
                        <?php } else { ?>
                            <a href="#loginform" class="btn btn-xs uppercase" data-toggle="modal" data-dismiss="modal">Login For Book</a>

                        <?php } ?>
                    </form>
                </div>
            </aside>
            <!--/Side-Bar-->
        </div>

        <div class="space-20"></div>
        <div class="divider"></div>

        <!--Similar-Cars-->
        <div class="similar_cars">
            <h3>Similar Cars</h3>
            <div class="row">
                <?php
                $bid=$_SESSION['brndid'];
                $sql="SELECT tblvehicles.VehiclesTitle,tblvehicles.nbr_chevaux,tblvehicles.type_vehicles,tblbrands.BrandName,tblvehicles.PricePerDay,tblvehicles.FuelType,tblvehicles.ModelYear,tblvehicles.id,tblvehicles.SeatingCapacity,tblvehicles.VehiclesOverview,tblvehicles.Vimage1 from tblvehicles join tblbrands on tblbrands.id=tblvehicles.VehiclesBrand where tblvehicles.VehiclesBrand=:bid";
                $query = $dbh -> prepare($sql);
                $query->bindParam(':bid',$bid, PDO::PARAM_STR);
                $query->execute();
                $results=$query->fetchAll(PDO::FETCH_OBJ);
                $cnt=1;
                if($query->rowCount() > 0)
                {
                    foreach($results as $result)
                    { ?>
                        <div class="col-md-3 grid_listing">
                            <div class="product-listing-m gray-bg">
                                <div class="product-listing-img"> <a href="vehical-details.php?vhid=<?php echo htmlentities($result->id);?>"><img src="admin/img/vehicleimages/<?php echo htmlentities($result->Vimage1);?>" class="img-responsive" alt="image" /> </a>
                                </div>
                                <div class="product-listing-content">
                                    <h5><a href="vehical-details.php?vhid=<?php echo htmlentities($result->id);?>"><?php echo htmlentities($result->BrandName);?> , <?php echo htmlentities($result->VehiclesTitle);?></a></h5>
                                    <p class="list-price">$<?php echo htmlentities($result->PricePerDay);?></p>

                                    <ul class="features_list">

                                        <li><i class="fa fa-user" aria-hidden="true"></i><?php echo htmlentities($result->SeatingCapacity);?> seats</li>
                                        <li><i class="fa fa-calendar" aria-hidden="true"></i><?php echo htmlentities($result->ModelYear);?> model</li>
                                        <li><i class="fa fa-car" aria-hidden="true"></i><?php echo htmlentities($result->FuelType);?></li>
                                        <li><i class="fa fa-flash" aria-hidden="true"></i><?php echo htmlentities($result->nbr_chevaux);?></li>
                                        <li><i class="fa fa-refresh" aria-hidden="true"></i><?php echo htmlentities($result->type_vehicles);?></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    <?php }} ?>

            </div>
        </div>
        <!--/Similar-Cars-->

    </div>
</section>
<!--/Listing-detail-->

<!--Footer -->
<?php include('includes/footer.php');?>
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

<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/interface.js"></script>
<script src="assets/switcher/js/switcher.js"></script>
<script src="assets/js/bootstrap-slider.min.js"></script>
<script src="assets/js/slick.min.js"></script>
<script src="assets/js/owl.carousel.min.js"></script>

</body>


</html>