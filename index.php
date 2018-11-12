<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
	<link rel="icon" type="image/png" sizes="96x96" href="assets/img/favicon.png">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Kesehatan Bank Syariah</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="assets/css/animate.min.css" rel="stylesheet"/>

    <!--  Paper Dashboard core CSS    -->
    <link href="assets/css/paper-dashboard.css" rel="stylesheet"/>


    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="assets/css/demo.css" rel="stylesheet" />


    <!--  Fonts and icons     -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Muli:400,300' rel='stylesheet' type='text/css'>
    <link href="assets/css/themify-icons.css" rel="stylesheet">

</head>
<body>
<?php
$CAR = $_POST["CAR"];
$NPF = $_POST["NPF"];
$ROA = $_POST["ROA"];
$FDR = $_POST["FDR"];
$PDS = $_POST["PDS"];
$FR = $_POST["FR"];
$PBH = $_POST["PBH"];
$ZR = $_POST["ZR"];
$proses = $_POST["proses"];
//$nCAR = $CAR;
$nNPF = ((15.5 - $NPF)/0.15)*0.30;
$nROA = ($ROA/0.015)*0.30;
$nFDR = ((115 - $FDR)*4)*0.15;
$nPDS = ($PDS/0.05)*0.2;
//$nFR = $FR;
$nPBH = ($PBH/0.05)*0.3;
$nZR = ($ZR/0.01)*0.2;
$CAMEL = $CAR + $nNPF + $nROA + $nFDR;
$MQ = $nPDS + $FR + $nPBH + $nZR;
$TOTAL = $CAMEL + $MQ;
?>
<div class="wrapper">
    <div class="sidebar" data-background-color="white" data-active-color="danger">

    <!--
		Tip 1: you can change the color of the sidebar's background using: data-background-color="white | black"
		Tip 2: you can change the color of the active button using the data-active-color="primary | info | success | warning | danger"
	-->

    	<div class="sidebar-wrapper">
            <div class="logo">
                <a href="http://www.syntesa.co.id" class="simple-text">
                    Syntesa
                </a>
            </div>

            <ul class="nav">
                <li class="active">
                    <a href="index.html">
                        <i class="ti-panel"></i>
                        <p>Kalkulator</p>
                    </a>
                </li>
                <li>
                    <a href="typography.html">
                        <i class="ti-user"></i>
                        <p>User Profile</p>
                    </a>
                </li>
            </ul>
    	</div>
    </div>

    <div class="main-panel">
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar bar1"></span>
                        <span class="icon-bar bar2"></span>
                        <span class="icon-bar bar3"></span>
                    </button>
                    <a class="navbar-brand" href="#">Kalkulator</a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
									<p>Tentang Kami</p>
									<b class="caret"></b>
                              </a>
                              <ul class="dropdown-menu">
                                <li><a href="#">Software</a></li>
                                <li><a href="#">CAMEL</a></li>
                                <li><a href="#">MAQASID</a></li>
                              </ul>
                        </li>
                    </ul>

                </div>
            </div>
        </nav>
			<div class="content">
                        <div class="card">
                           <div class="content">
                                <form action="" method="post">
                                    <div class="row">
                                        <div class="col-md-3 ">
                                            <div class="form-group">
                                                <label>Capital Adequency</label>
                                                <input type="number" class="form-control border-input" name="CAR" min="0" max="100">
                                    <div class="stats">
                                        <b>Status Modal anda</b> <b><?php
                                        echo $sCAR;
                                        ?></b>
                                    </div>
                                </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Assets Quality</label>
                                                <input type="number" class="form-control border-input" name="NPF" min="0" max="100">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Earning Ability</label>
                                                <input type="number" class="form-control border-input" name="ROA" min="0" max="100">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Liquidity Sufficienty</label>
                                                <input type="number" class="form-control border-input" name="FDR" min="0" max="100">
                                            </div>
                                        </div>
                                    </div>

                                     <div class="row">
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Pendidikan dan Sosialisasi</label>
                                                <input type="number" class="form-control border-input" name="PDS" min="0" max="100">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Fair Return</label>
                                                <input type="number" class="form-control border-input" name="FR" min="0" max="100">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Produk Bagi Hasil</label>
                                                <input type="number" class="form-control border-input" name="PBH" min="0" max="100">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Kemasalahatan Umat</label>
                                                <input type="number" class="form-control border-input" name="ZR" min="0" max="100">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="text-center">
                                        <button type="submit" class="btn btn-info btn-fill btn-wd" name="proses">Hitung !!</button>
                                    </div>
                                </form>
                        </div>
                   </div>
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-4 col-sm-10">
                        <div class="card">
                            <div class="content">
                                <div class="row">
                                    <div class="col-xs-5">
                                        <div class="icon-big icon-warning text-center">
                                            <i class="ti-wallet"></i>
                                        </div>
                                    </div>
                                    <div class="col-xs-7">
                                        <div class="number">
                                        <h3>
                                            <?php
                                            if (isset ($proses))
                                            	{
                                            	if($CAMEL >= 81 and $CAMEL == 100 ) {
                                            		$predikat = "Sehat";
                                            	}
                                            	if($CAMEL >= 66 and $CAMEL < 81 ) {
                                            		$predikat = "Cukup Sehat";
                                            	}
                                            	if($CAMEL >= 51 and $CAMEL < 66) {
                                            		$predikat = "Kurang Sehat";
                                            		}
                                            		if($CAMEL < 51) {
                                            			$predikat = "Tidak Sehat";}
                                            		}
															 echo $CAMEL; 	
                                            ?>%</h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="footer">
                                    <hr />
                                    <div class="stats">
                                        <b>Penilaian CAMEL adalah</b> <b><?php
                                        echo $predikat;
                                        ?></b>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-10">
                        <div class="card">
                            <div class="content">
                                <div class="row">
                                    <div class="col-xs-5">
                                        <div class="icon-big icon-success text-center">
                                            <i class="ti-comments-smiley"></i>
                                        </div>
                                    </div>
                                    <div class="col-xs-7">
                                        <div class="number">
                                        <h3>
														<?php	                                            
                                            if (isset ($proses))
                                            	{
                                            	if($MQ >= 81 and $MQ == 100 ) {
                                            		$predikat = "Sehat";
                                            	}
                                            	if($MQ >= 66 and $MQ < 81 ) {
                                            		$predikat = "Cukup Sehat";
                                            	}
                                            	if($MQ >= 51 and $MQ < 66) {
                                            		$predikat = "Kurang Sehat";
                                            		}
                                            		if($MQ < 51) {
                                            			$predikat = "Tidak Sehat";}
                                            		}
															echo $MQ;										
															?>%</h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="footer">
                                    <hr />
                                    <div class="stats">
                                        <b>Penilaian Maqasid adalah</b> <b><?php
                                        echo $predikat;
                                        ?>
                                        </b>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-10">
                        <div class="card">
                            <div class="content">
                                <div class="row">
                                    <div class="col-xs-5">
                                        <div class="icon-big icon-danger text-center">
                                            <i class="ti-pulse"></i>
                                        </div>
                                    </div>
                                    <div class="col-xs-7">
                                        <div class="number">
                                        <h3> <b>
                                            <?php
                                            if (isset ($proses))
                                            	{
                                            	if($TOTAL >= 81 and $TOTAL == 100 ) {
                                            		$predikat = "Sehat";
                                            	}
                                            	if($TOTAL >= 66 and $TOTAL < 81 ) {
                                            		$predikat = "Cukup Sehat";
                                            	}
                                            	if($TOTAL >= 51 and $TOTAL < 66) {
                                            		$predikat = "Kurang Sehat";
                                            		}
                                            		if($TOTAL < 51) {
                                            			$predikat = "Tidak Sehat";}
                                            		}					
                                            echo $TOTAL;
                                             ?>% </b>
                                         </h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="footer">
                                    <hr />
                                    <div class="stats">
                                        <b>Status Bank adalah </b> <b><?php
                                        echo $predikat;
                                        ?></b>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
             </div>   
        <footer class="footer">
            <div class="container-fluid">
                <nav class="pull-left">
                    <ul>

                        <li>
                            <a href="http://www.syntesa.co.id">
                                Syntesa Technology
                            </a>
                        </li>
                        <li>
                            <a href="http://www.syntesa.co.id/license">
                                Licenses
                            </a>
                        </li>
                    </ul>
                </nav>
                <div class="copyright pull-right">
                    &copy; <script>document.write(new Date().getFullYear())</script>, made with <i class="fa fa-heart heart"></i> by <a href="http://www.syntesa.co.id">Syntesa Technology</a>
                </div>
            </div>
        </footer>

    </div>
</div>


</body>

    <!--   Core JS Files   -->
    <script src="assets/js/jquery.min.js" type="text/javascript"></script>
	<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>

	<!--  Checkbox, Radio & Switch Plugins -->
	<script src="assets/js/bootstrap-checkbox-radio.js"></script>

	<!--  Notifications Plugin    -->
    <script src="assets/js/bootstrap-notify.js"></script>

  <!-- Paper Dashboard Core javascript and methods for Demo purpose -->
	<script src="assets/js/paper-dashboard.js"></script>

	<!-- Paper Dashboard DEMO methods, don't include it in your project! -->
	<script src="assets/js/demo.js"></script>

	<script type="text/javascript">
    	$(document).ready(function(){

        	demo.initChartist();

        	$.notify({
            	icon: 'ti-gift',
            	message: "Selamat datang di <b>Kalkulator Bank Syariah</b> - silahkan pergunakan Kalkulator ini sebaik-baiknya."

            },{
                type: 'danger',
                timer: 4000
            });

    	});
	</script>

</html>
