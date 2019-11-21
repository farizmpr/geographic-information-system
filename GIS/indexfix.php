<!DOCTYPE html>
<html lang="en">
<head>
	<title>Contact</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/favicon.png"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/themify/themify-icons.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/elegant-font/html-css/style.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/slick/slick.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->

 <link rel="stylesheet" href="https://openlayers.org/en/v4.6.5/css/ol.css" type="text/css">
    <!-- The line below is only needed for old environments like Internet Explorer and Android 4.x -->
    <script src="https://cdn.polyfill.io/v2/polyfill.min.js?features=requestAnimationFrame,Element.prototype.classList,URL"></script>
    <script src="https://openlayers.org/en/v4.6.5/build/ol.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
</head>
<body class="animsition">

	<!-- Header -->
	<header class="header1">
		<!-- Header desktop -->
		<div class="container-menu-header">	

			<div class="wrap_header">
				<!-- Logo -->
				<a href="index.html" class="logo">
					Cari Masjid
				</a>

				<!-- Menu -->

				<!-- Header Icon -->
		</div>

		<!-- Header Mobile -->
		<div class="wrap_header_mobile">
			
	</header>

	<!-- Title Page -->
	<section class="bg-title-page p-t-40 p-b-50 flex-col-c-m" style="background-image: url(images/masjid.jpg);">
		<h2 class="l-text2 t-center">
			Cari Masjid
		</h2>
		<h3 >
			Jangan Lupa Ibadah
		</h3>
	</section>

	<!-- content page -->
<div class="containter-fluid" style="position: center">
      <div class="row flex-xl-nowrap" style="position: center">
        <!-- <div class="col-12 col-md-3 col-xl-2 bd-sidebar">
          <div  style="margin-left: 10px; margin-top: 10px;" >
            <form id="lembar">
              <div class="form-group">
                <label for="exampleFormControlInput1">Koordinat Awal</label>
                <input type="text" class="form-control" id="X1" placeholder="masukkan X1">
                <input type="text" class="form-control" id="Y1" placeholder="masukkan Y1">
              </div>
              <div class="form-group">
                <label for="exampleFormControlInput1">Koordinat Tujuan</label>
                <input type="text" class="form-control" id="X2" placeholder="masukkan X2">
                <input type="text" class="form-control" id="Y2" placeholder="masukkan Y2">
              </div>
              <button onclick="return execute()" class="btn btn-danger mb-2">Submit</button>
            </form>
          </div>
        </div> -->
        <main class="col-12 col-md-9 col-xl-10 py-md-3 pl-md-5 bd-content" role="main">
          <form id="lembar">
              <div class="form-group">
                <label for="exampleFormControlInput1">Koordinat Awal</label>
                <input type="text" class="form" id="X1" placeholder="masukkan X1">
                <input type="text" class="form" id="Y1" placeholder="masukkan Y1">
              </div>
				  <div class="form-group">
				   <label for="exampleFormControlInput1">Masjid Yang dituju :</label>
				   <select id=masjidku name="product" width="100" style="width: 245px">
				  <option value="1">Masjid Manarul Ilmi</option>
				  <option value="2">Masjid As Saadah</option>
				  <option value="3">Masjid Nur-Hasan</option>
				  <option value="4">Masjid Al-Muklisin</option>
				</select>
              </div>
              <button onclick="return execute()" class="btn btn-danger mb-2">Submit</button>
            </form>
          <div id="map" class="map" style="position: center"></div>
        </main>


      </div>
    </div>
    <script src="script.js"></script>

	<!-- Footer -->
	<footer class="bg6 p-t-45 p-b-43 p-l-45 p-r-45">
		<div class="t-center s-text8 p-t-20">
				Jangan Lupa Sholat 5 waktu <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">MuslimSejati</a>
			</div>
	</footer>

	<!-- Back to top -->
	<div class="btn-back-to-top bg0-hov" id="myBtn">
		<span class="symbol-btn-back-to-top">
			<i class="fa fa-angle-double-up" aria-hidden="true"></i>
		</span>
	</div>

	<!-- Container Selection -->
	<div id="dropDownSelect1"></div>
	<div id="dropDownSelect2"></div>



<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/bootstrap/js/popper.js"></script>
	<script type="text/javascript" src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/select2/select2.min.js"></script>
	<script type="text/javascript">
		$(".selection-1").select2({
			minimumResultsForSearch: 20,
			dropdownParent: $('#dropDownSelect1')
		});

		$(".selection-2").select2({
			minimumResultsForSearch: 20,
			dropdownParent: $('#dropDownSelect2')
		});
	</script>
<!--===============================================================================================-->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAKFWBqlKAGCeS1rMVoaNlwyayu0e0YRes"></script>
	<script src="js/map-custom.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>
