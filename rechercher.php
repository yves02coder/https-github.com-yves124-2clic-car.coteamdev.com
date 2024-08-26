<?php
global $dbh;
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
<title>Car Rental Portal | Car Listing</title>
<link rel="shortcut icon" href="assets/images/favicon-icon/favicon.png">
<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">
<link href="assets/css/font-awesome.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<link href="https://www.automobile.tn/public/jq-73154735193c7878c99c9937ea70883d.css" rel="stylesheet">
<link href="https://www.automobile.tn/public/npm-093e1045a52cff7e7481b2f499785575.css" rel="stylesheet">
<link href="https://www.automobile.tn/public/all-582b0e9b1874d6c864dd83701c1df992.css" rel="stylesheet">
<link href="https://www.automobile.tn/build/assets/automobile.tn.a4a6eb58.css" rel="stylesheet">
<link href="https://www.automobile.tn/build/assets/automobile.e0f3edc7.css" rel="stylesheet">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand m-3" href="#"><img src="./admin/img/logo.png" alt="" width="150" height="100"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link active" aria-current="page" href="index.php">ARGUS</a>
        <a class="nav-link" href="./personal-blog/">MAGAZINE</a>
        <span class="navbar-text">
       
            <img src="./admin/img/bg.png" alt="" idth="150" height="100" style="margin-left: 900px;">
        
</span>
        <!-- <a class="nav-link" href="#">Pricing</a> -->
        
      </div>
    </div>
  </div>
</nav>

<!-- Start Switcher -->

<!-- /Switcher -->  

<!--Header--> 

<!-- /Header --> 

<div class="wrapper">
    <div class="container">
        <div class="bloc-title">
            <h3>
                trouvez le prix
                <span>d'une voiture</span>
            </h3>
        </div>
        <form action="search.php" method="post">
            <input type="hidden" name="expand" value="1">
            <div class="row">
                <div class="col-md-6">
                    <div>
                        <div class="row">
                            <div class="col-6 mb-3">
                                <select class="form-control" name="brand">
                                    <option>Select Brand</option>

                                    <?php $sql = "SELECT * from  tblbrands ";
                                    $query = $dbh->prepare($sql);
                                    $query->execute();
                                    $results = $query->fetchAll(PDO::FETCH_OBJ);

                                    if ($results) {
                                        foreach ($results as $result) {       ?>
                                            <option value="<?php echo htmlentities($result->id); ?>"><?php echo htmlentities($result->BrandName); ?></option>
                                    <?php }
                                    } ?>

                                </select>
                                <div class="chosen-container chosen-container-single" title="" id="w0_chosen" style="width: 267px;">

                                    <div class="chosen-drop">
                                        <div class="chosen-search">
                                            <input class="chosen-search-input" type="text" autocomplete="off">
                                        </div>
                                        <ul class="chosen-results"></ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 mb-3">
                                <select class="form-select" aria-label="Default select example">
                                    <option selected>Modéles</option>
                                    <option value="1">Berline</option>
                                    <option value="2">Break</option>
                                    <option value="3">SUV</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6"></div>
            </div>
            <div class="row">
                <div class="mb-3  col-12">
                    <div class="text-uppercase fw-bolder mt-4 ">Carrosserie :</div>
                    <ul id="carrosserie" class="list-inline">
                        <li class="list-inline-item">
                            <input type="checkbox" id="cb_1_19" name="carrosserie[]" value="19">
                            <label for="cb_1_19" style="background-image:url(https://catalogue.automobile.tn/valeur/19.svg);">
                                Citadine
                            </label>
                        </li>
                        <li class="list-inline-item">
                            <input type="checkbox" id="cb_1_1" name="carrosserie[]" value="1">
                            <label for="cb_1_1" style="background-image:url(https://catalogue.automobile.tn/valeur/1.svg);">
                                Compacte
                            </label>
                        </li>
                        <li class="list-inline-item">
                            <input type="checkbox" id="cb_1_2" name="carrosserie[]" value="2">
                            <label for="cb_1_2" style="background-image:url(https://catalogue.automobile.tn/valeur/2.svg);">
                                Berline
                            </label>
                        </li>
                        <li class="list-inline-item">
                            <input type="checkbox" id="cb_1_3" name="carrosserie[]" value="3">
                            <label for="cb_1_3" style="background-image:url(https://catalogue.automobile.tn/valeur/3.svg);">
                                Coupé
                            </label>
                        </li>
                        <li class="list-inline-item">
                            <input type="checkbox" id="cb_1_20" name="carrosserie[]" value="20">
                            <label for="cb_1_20" style="background-image:url('https://catalogue.automobile.tn/valeur/20.svg'); height="87"
                            width="100px"">
                                Cabriolet
                            </label>
                        </li>
                        <li class="list-inline-item">
                            <input type="checkbox" id="cb_1_5" name="carrosserie[]" value="5">
                            <label for="cb_1_5" style="background-image:url(https://catalogue.automobile.tn/valeur/5.svg);">
                                SUV
                            </label>
                        </li>
                        <li class="list-inline-item">
                            <input type="checkbox" id="cb_1_39" name="carrosserie[]" value="39">
                            <label for="cb_1_39" style="background-image:url(https://catalogue.automobile.tn/valeur/39.svg);">
                                Monospace
                            </label>
                        </li>
                        <li class="list-inline-item">
                            <input type="checkbox" id="cb_1_4" name="carrosserie[]" value="4">
                            <label for="cb_1_4" style="background-image:url(https://catalogue.automobile.tn/valeur/4.svg);">
                                Utilitaire
                            </label>
                        </li>
                        <li class="list-inline-item">
                            <input type="checkbox" id="cb_1_6" name="carrosserie[]" value="6">
                            <label for="cb_1_6" style="background-image:url(https://catalogue.automobile.tn/valeur/6.svg);">
                                Pick up
                            </label>
                        </li>
                    </ul>
                </div>
                <div class="mb-3  col-12"></div>

                <div class="mb-3  col-6 col-md-3">

                    <select name="SeatingCapacity" class="form-select">
                        <option value="-1">Nombre de places</option>
                        <?php
                        $sql = "SELECT DISTINCT (SeatingCapacity) from  tblvehicles ";
                        $results = $dbh->query($sql);
                        foreach ($results as $row){

                            echo ' <option  value="' . $row['id'] . '">   ' . $row['SeatingCapacity'] . ' </option>';

                        }
                        ?>


                    </select>
                </div>
                <div class="mb-3  col-6 col-md-3">
                    <select name="nombre_de_portes[]" class="form-select">
                        <option value="-1">Nombre de portes</option>
                        <?php
                        $sql = "SELECT DISTINCT (nbr_portes) from  tblvehicles ";
                        $results = $dbh->query($sql);
                        foreach ($results as $row){

                            echo ' <option  value="' . $row['id'] . '">   ' . $row['nbr_portes'] . ' </option>';

                        }
                        ?>


                    </select>
                </div>
                <div class="mb-3  col-6 col-md-3">
                    <select name="nbr_cylindre" class="form-select">
                        <option value="">Nombre de cylindres</option>
                        <?php
                        $sql = "SELECT DISTINCT (nbr_cylindres)  from  tblvehicles ";
                        $results = $dbh->query($sql);
                        foreach ($results as $row){

                            echo ' <option  value="' . $row['id'] . '">   ' . $row['nbr_cylindres'] . ' </option>';

                        }
                        ?>


                    </select>
                </div>
                <div class="mb-3  col-6 col-md-3">
                    <select class="form-control" name="fueltype">
                  <option>Select Fuel Type</option>
                <option value="Petrol">Petrol</option>
                <option value="Diesel">Diesel</option>
                <option value="CNG">CNG</option>
                </select>
                </div>
                <div class="mb-3  col-6 col-md-3">
                    <select name="nbr_chevaux" class="form-select">
                        <option value="">Puissance fiscale</option>
                        <?php
                        $sql = "SELECT * from  tblvehicles ";
                        $results = $dbh->query($sql);
                        foreach ($results as $row){

                            echo ' <option  value="' . $row['id'] . '">   ' . $row['nbr_chevaux'] . ' </option>';

                        }
                        ?>


                    </select>
                </div>
                <div class="mb-3  col-6 col-md-3">
                    <select name="boite[]" class="form-select">
                        <?php
                        $sql = "SELECT DISTINCT(boite) from  tblvehicles ";
                        $results = $dbh->query($sql);
                        foreach ($results as $row){

                            echo ' <option  value="' . $row['id'] . '">   ' . $row['boite'] . ' </option>';

                        }
                        ?>


                    </select>
                </div>

                <div class="mb-3  col-6 col-md-3">
                    <select name="transmission[]" class="form-select">
                        <?php
                        $sql = "SELECT DISTINCT (transmission) from  tblvehicles ";
                        $results = $dbh->query($sql);
                        foreach ($results as $row){

                            echo ' <option  value="' . $row['id'] . '">   ' . $row['transmission'] . ' </option>';

                        }
                        ?>


                    </select>
                </div>
                <div class="mb-3  col-12"></div>
            </div>
<style>
  @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap');


#rangeValue {
  position: relative;
  display: block;
  text-align: center;
  font-size: 6em;
  color: #999;
  font-weight: 400;
}
.range {
  width: 400px;
  height: 15px;
  -webkit-appearance: none;
  background: #111;
  outline: none;
  border-radius: 15px;
  overflow: hidden;
  box-shadow: inset 0 0 5px rgba(0, 0, 0, 1);
}
.range::-webkit-slider-thumb {
  -webkit-appearance: none;
  width: 15px;
  height: 15px;
  border-radius: 50%;
  background: #00fd0a;
  cursor: pointer;
  border: 4px solid #333;
  box-shadow: -407px 0 0 400px #00fd0a;
}



</style>


            <div class="price-selector">
                <span class="text-uppercase fw-bolder mt-4">Prix :</span>
                <div class="slider-wrapper">
                <div class="container">
        <span id="rangeValue">0</span>
        <Input class="range" type="range" name="PricePerDay" value="0" min="0" max="1000000" onChange="rangeSlide(this.value)" onmousemove="rangeSlide(this.value)" style="width:100%"></Input>
        <input class="range" type="range" name="PricePerDay" value="0" min="0" max="1000000" onChange="rangeSlide(this.value)" onmousemove="rangeSlide(this.value)" style="width:100%"></Input>
    </div>
    <script type="text/javascript">
        function rangeSlide(value) {
            document.getElementById('rangeValue').innerHTML = value;
        }
    </script>
                    
                </div>
            </div>
            <input name="PricePerDay" type="number" value="" placeholder="prix min">
            <input name="PricePerDay" type="number" value="" placeholder="prix max">
            <div class="form-footer my-2">
                <input type="submit" class="btn btn-primary float-end" value="Lancer la recherche">
            </div>
        </form>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<!--Footer -->


</body>
</html>