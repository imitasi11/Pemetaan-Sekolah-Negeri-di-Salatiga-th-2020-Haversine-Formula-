<!DOCTYPE html>
<html>
  <head>
    <title>Reverse Geocoding</title>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
    <script
      
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCCjviEPPRZvBG-PZnoFQ2JhVyTIlfXS4k&callback=initMap&libraries=&v=weekly"
      defer
    ></script>
 
    <style type="text/css">
      /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
      #map {
        height: 100%;
      }

      /* Optional: Makes the sample page fill the window. */
      html,
      body {
        height: 100%;
        margin: 0;
        padding: 0;
      }

      #floating-panel {
        position: absolute;
        top: 10px;
        left: 25%;
        z-index: 5;
        background-color: #fff;
        padding: 5px;
        border: 1px solid #999;
        text-align: center;
        font-family: "Roboto", "sans-serif";
        line-height: 30px;
        padding-left: 10px;
      }

      #floating-panel {
        position: absolute;
        top: 5px;
        left: 50%;
        margin-left: -180px;
        width: 350px;
        z-index: 5;
        background-color: #fff;
        padding: 5px;
        border: 1px solid #999;
      }

      #latlng {
        width: 225px;
      }
    </style>
    <script>
      "use strict";

      function initMap() {
        const map = new google.maps.Map(document.getElementById("map"), {
          zoom: 8,
          center: {
            lat: 40.731,
            lng: -73.997
          }
        });
        const geocoder = new google.maps.Geocoder();
        const infowindow = new google.maps.InfoWindow();
        document.getElementById("submit").addEventListener("click", () => {
          geocodeLatLng(geocoder, map, infowindow);
        });
      }

      function geocodeLatLng(geocoder, map, infowindow) {
        const input = document.getElementById("latlng").value;
        const latlngStr = input.split(",", 2);
        const latlng = {
          lat: parseFloat(latlngStr[0]),
          lng: parseFloat(latlngStr[1])
        };
        geocoder.geocode(
          {
            location: latlng
          },
          (results, status) => {
            if (status === "OK") {
              if (results[0]) {
                map.setZoom(11);
                const marker = new google.maps.Marker({
                  position: latlng,
                  map: map
                });
                location.replace('../divids.php?address='+results[0].formatted_address);
                infowindow.setContent(results[0].formatted_address);
                infowindow.open(map, marker);
              } else {
                window.alert("No results found");
              }
            } else {
              window.alert("Geocoder failed due to: " + status);
            }
          }
        );
      }
    </script>
  </head>
  <body>
    <div id="floating-panel">
      <input id="latlng" type="text" value="40.714224,-73.961452" />
      <input id="submit" type="button" value="Reverse Geocode" />
    </div>
    <div id="map"></div>
  </body>
</html>