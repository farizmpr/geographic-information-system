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
    <script src="https://cdn.polyfill.io/v2/polyfill.min.js?features=requestAnimationFrame,Element.prototype.classList,URL"></script>
    <script src="https://openlayers.org/en/v4.6.5/build/ol.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
  </head>
 <body background="1.jpg">
    <body style="background-color:  silver">
    <div class="container">
      <h1 class="lead display-3 " style="color: white"> <center><strong> RUTE UNIVERSITAS DI SURABAYA </center></h1>
    </div>
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light rounded">
            <div class="collapse navbar-collapse justify-content-md-center">
                <ul class="nav nav-tabs">
                  <li class="nav-item active"><a class="nav-link active" href="index.php"><i class="fa fa-route"></i> Cari Rute dan Jarak ke Universitas </a></li>
                 <li class="nav-item"><a class="nav-link active" href="terdekat.php"><i class="fa fa-university"></i> Cari Universitas Terdekat</a></li>
                   <li class="nav-item"><a class="nav-link active"style="background-color: silver" href="antara.php"><i class="fa fa-arrows-alt-h"></i> Rute dan Jarak antar Universitas</a></li>
                </ul>
            </div>
        </nav>
        <main role="main">
         <div class="jumbotron" style="background-color: #ebebeb; margin-bottom: 0">
            <div class="col-sm-12 mx-auto">
              <div class="form-group row">
                <label class="col-2 col-form-label btn btn-danger" for="exampleFormControlInput1">Universitas Asal</label>
                <div class="col-4">
                  
                  <select class="custom-select; col-200 btn btn-outline-danger btn-block mb-2" id=koor0 name="product" width="100" style="width: 350px">
                            <option disabled value="Option">Option</option>
                            <option value="-7.2795,112.7901">Institut Teknologi Sepuluh Nopember</option>
                            <option value="-7.26479,112.75879">Universitas Airlangga Kampus A</option>
                            <option value="-7.2692,112.7895">Universitas Airlangga Kampus C</option>
                            <option value="-7.33950,112.73831">Universitas Kristen Petra</option>
                            <option value="-7.31821,112.76770">Universitas Surabaya</option>
                            <option value="-7.32218,112.73424">UIN Sunan Ampel</option>
                            <option value="-7.3016,112.6708">Universitas Negeri Surabaya</option>
                            <option value="-7.27583,112.79315">Politeknik Elektronika Negeri Surabaya</option>
                            <option value="-7.31152,112.78242">STIKOM Surabaya</option>
                            <option value="-7.33360,112.78873">UPN Veteran Jawa Timur</option>    
                  </select>
                </div>  
                   </div>  

                 <div class="form-group row">
                <label class="col-2 col-form-label btn btn-info" for="exampleFormControlInput1">Universitas Tujuan</label>
                <div class="col-4">
                  <select class="custom-select; col-200 btn btn-outline-info btn-block mb-2" id=koor1 name="product" width="100" style="width: 350px">
                              <option class="btn-dark" disabled value="Option">Option</option>
                            <option value="-7.26479,112.75879">Universitas Airlangga Kampus A</option>                      
                            <option value="-7.2692,112.7895">Universitas Airlangga Kampus C</option>
                            <option value="-7.33950,112.73831">Universitas Kristen Petra</option>
                            <option value="-7.31821,112.76770">Universitas Surabaya</option>
                            <option value="-7.32218,112.73424">UIN Sunan Ampel</option>
                            <option value="-7.3016,112.6708">Universitas Negeri Surabaya</option>
                            <option value="-7.27583,112.79315">Politeknik Elektronika Negeri Surabaya</option>
                            <option value="-7.31152,112.78242">STIKOM Surabaya</option>
                            <option value="-7.33360,112.78873">UPN Veteran Jawa Timur</option>    
                            <option value="-7.2795,112.7901">Institut Teknologi Sepuluh Nopember</option>     
                  </select>
              </div>
               </div>  

              <div class="form-group row">
                
                </div>
              </div>
              <form id="lembar">
                  <button onclick="return execute()" style="float: center;" class="btn btn-success mb-2 mr-3" id="buttonCariJarak">Cari Rute dan Jarak</button>
                  <button id="jarakGanti" style="float: center;" class="btn btn-outline-danger">Jarak antar Universitas : </button>
                  
              </form>
              
              <br><br>
             
                           </div> <!-- tambah ini kalo ingin map gede -->

                           </div> <!-- tambah ini kalo ingin map gede -->
          </div>
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
    <script src="script3.js"> </script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
  </body>
</html>