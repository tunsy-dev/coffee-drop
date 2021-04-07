<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Coffee Drop</title>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
      
        <link rel="stylesheet" type="text/css" href="css/app.css" />
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
        <!-- mapBox -->
        <script src='https://api.tiles.mapbox.com/mapbox-gl-js/v2.2.0/mapbox-gl.js'></script>
        <link href='https://api.tiles.mapbox.com/mapbox-gl-js/v2.2.0/mapbox-gl.css' rel='stylesheet' /> 

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}}
        </style>

        <style>
          .mapboxgl-popup {
  max-width: 200px;
}

.mapboxgl-popup-content {
  text-align: center;
  font-family: 'Open Sans', sans-serif;
}
        </style>
    </head>

    <body class="antialiased">
    <div class="hero">
    <nav class="navbar navbar-expand-lg navbar-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="#"><div class="nav-logo"></div></a>
      <button
        class="navbar-toggler custom-toggler"
        type="button"
        data-bs-toggle="collapse"
        data-bs-target="#navbarNavAltMarkup"
        aria-controls="navbarNavAltMarkup"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
          <a class="nav-link" href="#">Login</a>
          <a class="nav-link" href="#">Download IOS App</a>
          <a class="nav-link" href="#">Download Android App</a>
        </div>
      </div>
    </div>
  </nav>

        <div class="hero-inner">
            <div class="tagline"><h1>Recycle your Nespresso in style! </h1></div>
            <div class="tagline2"><h4>We can recycle your coffee pods for cashback or free coffee!</h4></div>
            <div class="btn-container">
            <a href="#"><div class="app-button"></div></a>
            <a href="#"><div class="app-button google-play"></div></a>
          </div>
        </div>
        <img class="app-mock" src="/img/app-mockup.png" alt="">
    </div>

    <div class="how-it-works">
      <div class="title"><h4>How it works</h4></div>
      <div class="coloumns">
      <div class="item">
        <div class="icon"></div>
        <div class="text">
          <p>
          You can now save the planet in style, thanks to cashback for your nespresso pods at any of our sixteen locations nationwide.</div>
        </p>
        </div>
        <div class="arrow-container">
          <div class="arrow"></div>
        </div>
      <div class="item">
        <div class="icon second"></div>
        <div class="text">Simply bring in your used pods, place them in an approved CoffeeDrop bag and bring them into store. </div>
      </div>
      <div class="arrow-container">
        <div class="arrow"></div>
      </div>
      <div class="item">
        <div class="icon third"></div>
        <div class="text">Our trained staff will quickly calculate your cashback - or better still, you can do it yourself on our handy App available on iOS or Android</div>
      </div>
      </div>
    </div>

    <div class="prices">
      <div class="title"><h4>Prices</h4></div>
      <div class="coloumns">
      <div class="item">
        <div class="title-prices">The first 50 capsules:</div>
        <div class="price-table">
          <div class="row">Ristretto = 2p</div>
          <div class="row grey">Espresso = 4p</div>
          <div class="row">Lungo = 6p</div>
        </div>
        <div class="img-bean"></div>
        </div>
        <div class="item">
          <div class="title-prices">Capsules 50-500:</div>
          <div class="price-table">
            <div class="row">Ristretto = 3p</div>
            <div class="row grey">Espresso = 6p</div>
            <div class="row">Lungo = 9p</div>
          </div>
          <div class="img-bean"></div>
          </div>
          <div class="item">
            <div class="title-prices">Capsules 501+:</div>
            <div class="price-table">
              <div class="row">Ristretto = 5p</div>
              <div class="row grey">Espresso = 10p</div>
              <div class="row">Lungo = 15p</div>
            </div>
            <div class="img-bean"></div>
            </div>
          </div>
    </div>

    <div id='map' class='map'></div>
    <div class="footer">
      <div class="content">
        <p>This app is powered by</p>
        <div class="coffeeDrop"></div>
      </div>
    </div>

    <!-- consuming api -->
<?php
      $client = new \GuzzleHttp\Client();
      $response = $client->request('GET', 'http://coffeedrop.staging2.image-plus.co.uk/api/locations');
      $response->getStatusCode(); // 200
      $response->getHeaderLine('content-type'); // 'application/json; charset=utf8'
      $result= $response->getBody();
      $result; // '{"id": 1420053, "name": "guzzle", ...}'
      $someArray = json_decode($result);
      $geojson = array( 'type' => 'FeatureCollection', 'features' => array());

      //creating geojson for populating map 

      foreach ($someArray->data as $item) {
      $latitude = $item->coordinates->latitude;
      $longitude = $item->coordinates->longitude;
      $location = $item->location;
      $address = $item->address;
      $openings = $item->openings;
      $marker = array(
        'type' => 'Feature',
        'geometry' => array(
          'type' => 'Point',
          'coordinates' => array( 
            (float)$longitude,
            (float)$latitude
          )
          ),
          'properties' => array(
            'title' => $location,
            'description' => $address,
            'openings' => $openings
          )
        );
        array_push($geojson['features'], $marker); 
      } 
  ?>
      
<script>

mapboxgl.accessToken = 'pk.eyJ1IjoidHVuc3kiLCJhIjoiY2toeGloaGhpMGlzMjJzbGY3bGs4ZnVzMiJ9.0PbNQfIEWaNE35WSzlmIwA';
var map = new mapboxgl.Map({
  container: 'map',
  style: 'mapbox://styles/mapbox/light-v10',
  center: [-3.01, 53.64],
  zoom: 7
});
var marker = '<?php echo json_encode($geojson); ?>';
var geojson = JSON.parse(marker);
        
// add markers to map
geojson.features.forEach(function(marker) {

// create a HTML element for each feature
var el = document.createElement('div');
el.className = 'marker';

// make a marker for each feature and add to the map
new mapboxgl.Marker(el)
  .setLngLat(marker.geometry.coordinates)
  .setPopup(new mapboxgl.Popup({ offset: 25 }) // add popups
  .setHTML('<h5>' + marker.properties.title + '</h5>'))
  .addTo(map);
});
</script>
   
    </body>
</html>
