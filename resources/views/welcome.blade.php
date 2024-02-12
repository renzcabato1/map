<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Map Calculator</title>
        <meta content="" name="description">
        <meta content="" name="keywords">
      
        <!-- Favicons -->
        <link href="{{asset('assets/img/favicon.png')}}" rel="icon">
      
        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
      
        <!-- Vendor CSS Files -->
        <link href="{{asset('assets/vendor/aos/aos.css')}}" rel="stylesheet">
        <link href="{{asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
        <link href="{{asset('assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
        <link href="{{asset('assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
        <link href="{{asset('assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
        <link href="{{asset('assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">
      
        <!-- Template Main CSS File -->
        <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
            #map,
html,
body {
  padding: 0;
  margin: 0;
  height: 100%;
}

#panel {
  width: 200px;
  font-family: Arial, sans-serif;
  font-size: 13px;
  margin: 10px;
}

#color-palette {
  clear: both;
}

.color-button {
  width: 14px;
  height: 14px;
  font-size: 0;
  margin: 2px;
  float: left;
  cursor: pointer;
}

#delete-button {
  margin-top: 5px;
}

        </style>
    </head>
    <body>
        
  <!-- ======= Top Bar ======= -->
  <section id="topbar" class="d-flex align-items-center">
    <div class="container d-flex justify-content-center justify-content-md-between">
      <div class="contact-info d-flex align-items-center">
        <i class="bi bi-envelope d-flex align-items-center"><a href="mailto:contact@example.com">contact@example.com</a></i>
        <i class="bi bi-phone d-flex align-items-center ms-4"><span>+1 5589 55488 55</span></i>
      </div>
      <div class="social-links d-none d-md-flex align-items-center">
        <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
        <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></i></a>
      </div>
    </div>
  </section>
    <!-- ======= Header ======= -->
    <header id="header" class="d-flex align-items-center">
        <div class="container d-flex align-items-center justify-content-between">
    
          <h1 class="logo"><a href="index.html">BizLand<span>.</span></a></h1>
          <!-- Uncomment below if you prefer to use an image logo -->
          <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt=""></a>-->
    
          <nav id="navbar" class="navbar">
            <ul>
              <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
              <li><a class="nav-link scrollto" href="#about">About</a></li>
              <li><a class="nav-link scrollto" href="#services">Services</a></li>
              <li><a class="nav-link scrollto " href="#portfolio">Portfolio</a></li>
              <li><a class="nav-link scrollto" href="#team">Team</a></li>
              <li class="dropdown"><a href="#"><span>Drop Down</span> <i class="bi bi-chevron-down"></i></a>
                <ul>
                  <li><a href="#">Drop Down 1</a></li>
                  <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>
                    <ul>
                      <li><a href="#">Deep Drop Down 1</a></li>
                      <li><a href="#">Deep Drop Down 2</a></li>
                      <li><a href="#">Deep Drop Down 3</a></li>
                      <li><a href="#">Deep Drop Down 4</a></li>
                      <li><a href="#">Deep Drop Down 5</a></li>
                    </ul>
                  </li>
                  <li><a href="#">Drop Down 2</a></li>
                  <li><a href="#">Drop Down 3</a></li>
                  <li><a href="#">Drop Down 4</a></li>
                </ul>
              </li>
              <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
          </nav><!-- .navbar -->
    
        </div>
      </header><!-- End Header -->
      <section id="mapa" class="contact">
        <div class="container" data-aos="fade-up">
  
          <div class="section-title">
            {{-- <h2>Contact</h2> --}}
            <h3><span>Area Calculator</span></h3>
            {{-- <p>Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita at voluptas atque vitae autem.</p> --}}
          </div>
  
          
          <hr>
          <div class=" form-group row">
            <div class="col-md-12 text-center">
              <form>
              
                <h2>AREA in Sq. Meteers: <span id="area" class='text-left'> </span> </h2> 
                <h2>AREA in Sq. Feet: <span id="area-foot" class='text-left'> </span> </h2> 
                <h2>Recommended bottles of Cal Flo Lime: <span id="bottle-of-lime" class='text-left'>0</span> oz</h2> 
               </form>
            </div>
                    
            
          </div>
          <hr>
          <div class="row" data-aos="fade-up" data-aos-delay="100">
            <div class="col-lg-5 ">
              <button class='btn btn-danger btn-sm '  id="delete-button">Delete Selected Shape</button> <br>
              <button class='btn btn-success btn-sm' id="calculate" onClick="calcar()" >Calculate Area</button>
            </div>
            <div class='col-lg-7 text-right'>
              <div class=" form-group row">
                <div class="col-sm-10">
                  <input type="text" name="address" class="form-control col-sm-8" id="address" placeholder="Search Address" required>
                </div>
                <div class="col-sm-2">
                  <button class='btn btn-info btn-sm col-lg-4 btn-block w-100' onclick='get_map();'  id="search">Search</button> 
                </div>
                  
              </div>
            </div>
            <div class="col-lg-12 ">
           
              
              <div id="color-palette"></div>
                  <div  class="mb-4 mb-lg-0"  id="map" frameborder="0" style="border:0; width: 100%; height: 650px;"></div>
           </div>
  
  
          </div>
  
        </div>
      </section><!-- End Contact Section -->
  
        {{-- <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

        </div> --}}
        <div id="preloader"></div>
        <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
      
        <!-- Vendor JS Files -->
        <script src="{{asset('assets/vendor/purecounter/purecounter_vanilla.js')}}"></script>
        <script src="{{asset('assets/vendor/aos/aos.js')}}"></script>
        <script src="{{asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
        <script src="{{asset('assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
        <script src="{{asset('assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
        <script src="{{asset('assets/vendor/swiper/swiper-bundle.min.js')}}"></script>
        <script src="{{asset('assets/vendor/waypoints/noframework.waypoints.js')}}"></script>
        <script src="{{asset('assets/vendor/php-email-form/validate.js')}}"></script>
      
        <!-- Template Main JS File -->
        <script src="{{asset('assets/js/main.js')}}"></script>

        <script src="https://maps.googleapis.com/maps/api/js?sensor=false&libraries=drawing&key=AIzaSyDeSpk2-I61V7TFFomaxqOWv-Ir2ZeYkQM&callback=" type="text/javascript"></script>

        <script type="text/javascript">
        var drawingManager;
        var selectedShape;
        var colors = ['#1E90FF', '#FF1493', '#32CD32', '#FF8C00', '#4B0082'];
        var selectedColor;
        var colorButtons = {};
        var map; 

        function clearSelection() {
          if (selectedShape) {
            selectedShape.setEditable(false);
            selectedShape = null;
          }
        }

        function setSelection(shape) {
          clearSelection();
          selectedShape = shape;
          shape.setEditable(true);
          selectColor(shape.get('fillColor') || shape.get('strokeColor'));
          google.maps.event.addListener(shape.getPath(), 'set_at', calcar);
          google.maps.event.addListener(shape.getPath(), 'insert_at', calcar);
        }

        function calcar() {
            var area = google.maps.geometry.spherical.computeArea(selectedShape.getPath());
            document.getElementById("area").innerHTML = area.toFixed(2);
            document.getElementById("area-foot").innerHTML = (area*10.7639).toFixed(2);
            document.getElementById("bottle-of-lime").innerHTML = (area*10.7639*.008).toFixed(2) + " oz";
          // console.log(area);
        }

        function deleteSelectedShape() {
          if (selectedShape) {
            selectedShape.setMap(null);
          }
        }

        function selectColor(color) {
          selectedColor = color;
          for (var i = 0; i < colors.length; ++i) {
            var currColor = colors[i];
            colorButtons[currColor].style.border = currColor == color ? '2px solid #789' : '2px solid #fff';
          }

          // Retrieves the current options from the drawing manager and replaces the
          // stroke or fill color as appropriate.
          var polylineOptions = drawingManager.get('polylineOptions');
          polylineOptions.strokeColor = color;
          drawingManager.set('polylineOptions', polylineOptions);

          var rectangleOptions = drawingManager.get('rectangleOptions');
          rectangleOptions.fillColor = color;
          drawingManager.set('rectangleOptions', rectangleOptions);

          var circleOptions = drawingManager.get('circleOptions');
          circleOptions.fillColor = color;
          drawingManager.set('circleOptions', circleOptions);

          var polygonOptions = drawingManager.get('polygonOptions');
          polygonOptions.fillColor = color;
          drawingManager.set('polygonOptions', polygonOptions);
        }

        function setSelectedShapeColor(color) {
          if (selectedShape) {
            if (selectedShape.type == google.maps.drawing.OverlayType.POLYLINE) {
              selectedShape.set('strokeColor', color);
            } else {
              selectedShape.set('fillColor', color);
            }
          }
        }

        function makeColorButton(color) {
          var button = document.createElement('span');
          button.className = 'color-button btn-sm btn';
          button.style.backgroundColor = color;
          google.maps.event.addDomListener(button, 'click', function() {
            selectColor(color);
            setSelectedShapeColor(color);
          });

          return button;
        }

        function buildColorPalette() {
          var colorPalette = document.getElementById('color-palette');
          for (var i = 0; i < colors.length; ++i) {
            var currColor = colors[i];
            var colorButton = makeColorButton(currColor);
            colorPalette.appendChild(colorButton);
            colorButtons[currColor] = colorButton;
          }
          selectColor(colors[0]);
        }

        function initialize(lat,long) {
          
          var map = new google.maps.Map(document.getElementById('map'), {
            zoom: 18,
            center: new google.maps.LatLng(lat,long),
            mapTypeId: google.maps.MapTypeId.HYBRID,
            disableDefaultUI: true,
            zoomControl: true,
            heading: 90,
            tilt: 0
          });


          var polyOptions = {
            strokeWeight: 0,
            fillOpacity: 0.45,
            editable: true
          };
          
          drawingManager = new google.maps.drawing.DrawingManager({
            drawingMode: google.maps.drawing.OverlayType.POLYGON,
            markerOptions: {
              draggable: true
            },
            polylineOptions: {
              editable: true
            },
            rectangleOptions: polyOptions,
            circleOptions: polyOptions,
            polygonOptions: polyOptions,
            map: map
          });

          google.maps.event.addListener(drawingManager, 'overlaycomplete', function(e) {
            if (e.type != google.maps.drawing.OverlayType.MARKER) {
              // Switch back to non-drawing mode after drawing a shape.
              drawingManager.setDrawingMode(null);

              // Add an event listener that selects the newly-drawn shape when the user
              // mouses down on it.
              var newShape = e.overlay;
              newShape.type = e.type;
              google.maps.event.addListener(newShape, 'click', function() {
                setSelection(newShape);
              });
              var area = google.maps.geometry.spherical.computeArea(newShape.getPath());
              document.getElementById("area").innerHTML = area.toLocaleString(undefined, {
                minimumFractionDigits: 2,
                maximumFractionDigits: 2
              });
            document.getElementById("area-foot").innerHTML = (area*10.7639).toLocaleString(undefined, {
            minimumFractionDigits: 2,
            maximumFractionDigits: 2
          });
          document.getElementById("bottle-of-lime").innerHTML = (area*10.7639*.008).toLocaleString(undefined, {
            minimumFractionDigits: 2,
            maximumFractionDigits: 2
          }); + " oz";
              
              setSelection(newShape);
            }
          });

          // Clear the current selection when the drawing mode is changed, or when the
          // map is clicked.
          google.maps.event.addListener(drawingManager, 'drawingmode_changed', clearSelection);
          google.maps.event.addListener(map, 'click', clearSelection);
          google.maps.event.addDomListener(document.getElementById('delete-button'), 'click', deleteSelectedShape);
          
         
        }
        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(function(position) {
              const latitude = position.coords.latitude;
              const longitude = position.coords.longitude;
              google.maps.event.addDomListener(window, 'load', initialize(latitude,longitude));
            });
        } 
     
        buildColorPalette();
        function get_map()
        {
         var address =  document.getElementById("address").value;
          console.log(address);
          const api_url =   "https://maps.googleapis.com/maps/api/geocode/json?address="+address+"&key=AIzaSyDeSpk2-I61V7TFFomaxqOWv-Ir2ZeYkQM&callback=myMap"; 
          fetch(api_url)
          .then(res => res.json())
          .then((data) => {
          
            initialize(data.results[0].geometry.location.lat,data.results[0].geometry.location.lng);
            
            
          })
          .catch(err => { throw err });
            
        }
        function initMapD(lat,lng) {
          map = new google.maps.Map(document.getElementById("map"), {
              center: { lat:lat, lng: lng },
              zoom: 50,
              tilt:0,
              mapTypeId: google.maps.MapTypeId.HYBRID,
            zoom: 6,
            heading: 90,
            tilt: 45
            });
          }
        </script>
    </body>
   
</html>
