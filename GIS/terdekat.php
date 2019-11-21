<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Rute Universitas</title>
    <link rel="stylesheet" href="https://openlayers.org/en/v4.6.5/css/ol.css" type="text/css">
    <script src="https://cdn.polyfill.io/v2/polyfill.min.js?features=requestAnimationFrame,Element.prototype.classList,URL"></script>
    <script src="https://openlayers.org/en/v4.6.5/build/ol.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+695DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
  </head>
 <body background="1.jpg">
    <body style="background-color:  silver">
    <div class="container">
      <h1 class="lead display-3 " style="color: white"> <center> <strong>RUTE UNIVERSITAS DI SURABAYA </center></h1>
    </div>
    <div class="container">
       <nav class="navbar navbar-expand-lg navbar-light rounded">
            <div class="collapse navbar-collapse justify-content-md-center">
                <ul class="nav nav-tabs">
                  <li class="nav-item active"><a class="nav-link active" href="index.php"><i class="fa fa-route"></i> Cari Rute dan Jarak ke Universitas </a></li>
                 <li class="nav-item"><a class="nav-link active" href="terdekat.php" style="background-color: silver" ><i class="fa fa-university"></i> Cari Universitas Terdekat</a></li>
                   <li class="nav-item"><a class="nav-link active" href="antara.php"><i class="fa fa-arrows-alt-h"></i> Rute dan Jarak antar Universitas</a></li>
                </ul>
            </div>
        </nav>
        <main role="main">
          <div class="jumbotron" style="background-color: #ebebeb; margin-bottom: 0">
            <div class="col-sm-8">
                <div class="form-group row">
                    <div class="col-0">
                      <button class="col-12 btn btn-info" onclick="getLocation()">Posisi Anda Sekarang</button>
                    </div>
                    <div class="col-4">
                      <input type="text" class="btn btn-outline-dark" name="latitude" id="latitude" placeholder="koordinat x">
                    </div>
                    <div class="col-4">
                      <input type="text" class="btn btn-outline-dark" name="longitude" id="longitude" placeholder="koordinat y">
                    </div> 
                </div>
                     
                <div class="form-group row">
                  <div class="col-0">
                    <button onclick="return terdekat()" class="btn btn-success" id="buttonCariJarak">Cari Universitas Terdekat</button>
                  </div>
                </div>

                <div class="form-group row">
                  <div class="col-0">
                    <button id="namauniv" class="btn btn-dark">Universitas Paling Dekat dengan Posisi Anda: </button>
                  </div>   
                </div>
                <div class="form-group row">
                  <div class="col-0">
                    <button id="jarakGanti" class="btn btn-secondary">Jarak : </button>
                  </div>      
                </div>
                <form id="lembar">
                  <div class="form-group row">
                    
                        
              
                           </div> <!-- tambah ini kalo ingin map gede -->

                             </div> <!-- tambah ini kalo ingin map gede -->
                  </div>
                </form>
            </div>
              <div id="map" class="map" style="height: 400px"></div>
          </div>
        </main>
      </div>
            <!--<button onclick="getLocation()">Posisi anda</button>
            <p id="namamasjid"></p>
            <input type="text" class="form-control" name="pendekpol" id="pendekpol" >
          <form id="lembar">
              <button onclick="return execute()" class="btn btn-danger mb-2">Submit</button>
               <p id="jarakGanti">Jarak : </p>
            </form>
<!--         </main>
 -->
      </div>
    </div>
    <script>
                  var sigg = document.getElementById("demo");

                  function getLocation() {
                      if (navigator.geolocation) {
                          navigator.geolocation.getCurrentPosition(showPosition);

                      } else { 
                          sigg.innerHTML = "Geolocation is not supported by this browser.";
                      }
                  }

                  function showPosition(position) {
                      
                      var latitude = position.coords.latitude
                      var longitude = position.coords.longitude
                      console.log(latitude)
                      console.log(longitude)
                      $('#latitude').attr('value',latitude)
                      $('#longitude').attr('value',longitude)
                  }
    </script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="script.js"></script>
  </body>
</html>