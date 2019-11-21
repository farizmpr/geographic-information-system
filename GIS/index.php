<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>RUTE UNIVERSITAS</title>
    <link rel="stylesheet" href="https://openlayers.org/en/v4.6.5/css/ol.css" type="text/css">
    <script src="https://cdn.polyfill.io/v2/polyfill.min.js?features=requestAnimationFrame,Element.prototype.classList,URL"></script>
    <script src="https://openlayers.org/en/v4.6.5/build/ol.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
  </head>
  <body>
    <body background="1.jpg">
    <body style="background-color:  silver">
    <div class="container">
      <h1 class="lead display-3 " style="color: white"> <center><strong> RUTE UNIVERSITAS DI SURABAYA </center></h1>
    </div>
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light rounded">
            <div class="collapse navbar-collapse justify-content-md-center">
                <ul class="nav nav-tabs">
                  <li class="nav-item active"><a class="nav-link active" style="background-color: silver" href="index.php"><i class="fa fa-route"></i> Cari Rute ke Universitas </a></li>
                 <li class="nav-item"><a class="nav-link active" href="terdekat.php"><i class="fa fa-university"></i> Cari Universitas Terdekat</a></li>
                   <li class="nav-item"><a class="nav-link active" href="antara.php"><i class="fa fa-arrows-alt-h"></i> Rute dan Jarak antar Universitas</a></li>
                </ul>
            </div>
        </nav>
        <main role="main">
          <!-- <div class="jumbotron" style="margin-bottom: 0"> -->
        <div class="jumbotron" style="background-color:   #ebebeb; margin-bottom: 0">
            <div class="col-sm-12">
              <div class="form-group row">
                <div class="col-0">
                  <button class="col-0 btn btn-info" onclick="getLocation()">Posisi Anda Sekarang</button>
                </div>
                <div class="col-2">
                  <input type="text" class="btn btn-outline-dark" name="latitude" id="latitude" placeholder="koordinat x">

                  <input type="text" class="btn btn-outline-dark" name="longitude" id="longitude" placeholder="koordinat y">
                </div> 
                </div>

                <div class="col-20"> <!-- apus untuk membuat di tengah -->

                </div>
                 <div class="col-12">
                  
                </div>
                 <div class="col-12">
                  
                </div>
              </div>

              <div class="form-group row">
                <div class="col-0">
                <label class="col-12 btn btn-dark" for="exampleFormControlInput1">Pilih Universitas Tujuan</label>
                </div>
                <div class="col-3">
                  <select class="col-200 btn btn-secondary btn-block mb-2" id=listuniv name="product" width="10000" style="width: 350px">
                              <option value="1">Institut Teknologi Sepuluh Nopember</option> 
                              <option value="2">Universitas Airlangga Kampus A</option>                           
                              <option value="3">Universitas Airlangga Kampus C</option>
                              <option value="4">Universitas Surabaya</option>
                              <option value="5">Universitas Kristen Petra</option>
                              <option value="6">Universitas Negeri Surabaya</option>
                              <option value="7">UIN Sunan Ampel Surabaya</option>
                              <option value="8">UPN Veteran Jawa Timur  </option>
                              <option value="9">Politeknik Elektronika Negeri Surabaya</option>
                             <!-- <option value="-7.33360,112.78873">UPN Veteran Jawa Timur</option> -->        
                  </select>
                </div>
              </div>

              
              <form id="lembar">
                <div class="row justify-content-md-left">
                  <div class="col align-self-left"">
                  </div>
                  <div class="container">
                    <div class="row">
                      <div class="col">
                        <!-- bikin di tengah -->
                      </div>
                      <div class="col">
                        <button onclick="return execute()" class="btn btn-success mb-2 btn-block">Cari Rute</button>
                         <button id="jarakGanti" class="btn btn-primary disabled">Jarak ke Universitas: </button> 
                      </div>
               
                    </div>
                   <div class="col-1">
                  </div>             
              </div>                    
            </div> <!-- tambah ini kalo ingin map gede --></div> <!-- tambah ini kalo ingin map gede -->  </div>
            </form>
        </main>
        <div id="map" class="map" style="height: 400px"></div>
      </div>
            <!--<button onclick="getLocation()">Posisi anda</button>
            <button onclick="return terdekat()" class="btn btn-danger mb-2" id="buttonCariJarak">Jarak Terdekat</button>
            <p id="namamasjid"></p>
            <input type="text" class="form-control" name="pendekpol" id="pendekpol" >
          <form id="lembar">
              <button onclick="return execute()" class="btn btn-danger mb-2">Submit</button>
<!--                <p id="jarakGanti">Jarak : </p>
 -->            </form>
        </main>

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