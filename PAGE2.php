<html>
  <head>
    <meta name="viewport" content="initial-scale=1.0, width=device-width" />
    <script src="https://js.api.here.com/v3/3.1/mapsjs-core.js"
    type="text/javascript" charset="utf-8"></script>
    <script src="https://js.api.here.com/v3/3.1/mapsjs-service.js"
    type="text/javascript" charset="utf-8"></script>
    <script src="https://js.api.here.com/v3/3.1/mapsjs-mapevents.js"
       type="text/javascript" charset="utf-8"></script>
  </head>
  <body>



<button onclick="getLocation()">Allow Access to location</button>
<p id="demo"></p>
    <div style="width: 1000px; height: 1000px" id="mapContainer"></div>
 <script>
// var x = document.getElementById("demo");
function getLocation() {
  if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(showPosition);
  } else {
    x.innerHTML = "Geolocation is not supported by this browser.";
  }
}

function showPosition(position) {
  var latitude = position.coords.latitude;
  var longitude = position.coords.longitude;
  console.log("latitude: " + latitude);
  console.log("longitude: " + longitude);

        // Initialize the platform object:
      var platform = new H.service.Platform({
        'apikey': 'Xs4mTPFgTjQAmpUZAHXq5uBlfWXdjiPmO7Y-xKsqN1I'
      });

      // Obtain the default map types from the platform object
      var maptypes = platform.createDefaultLayers();

      var obj = { lng:latitude , lat:latitude };
      // Instantiate (and display) a map object:
      var map = new H.Map(
        document.getElementById('mapContainer'),
        maptypes.vector.normal.map,
        {
          zoom: 17,
          center: { lng:longitude , lat:latitude }
        });
      // Enable the event system on the map instance:
var mapEvents = new H.mapevents.MapEvents(map);

// Add event listener:
map.addEventListener('tap', function(evt) {
    // Log 'tap' and 'mouse' events:
    console.log(evt.type, evt.currentPointer.type); 
});

var behavior = new H.mapevents.Behavior(mapEvents);

}

</script>






  </body>
</html>