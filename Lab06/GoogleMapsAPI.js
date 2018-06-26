//Sharon Liu (2016)
//Web App Development at TJHSST
function initialize() {
	

	var x1 = parseFloat(document.getElementById('first').value,10);
	var y1 = parseFloat(document.getElementById('second').value,10);

	      // var loc = {lat: 42.345573, lng: -71.098326};
	        var loc = {lat: x1, lng: y1};
        var map = new google.maps.Map(document.getElementById('map'), {
          center: loc,
          zoom: 14
        });
        var panorama = new google.maps.StreetViewPanorama(
            document.getElementById('pano'), {
              position: loc,
              pov: {
                heading: 34,
                pitch: 10
              }
            });
        map.setStreetView(panorama);
      }
