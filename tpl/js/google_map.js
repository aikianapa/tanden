function initMap() {
        var uluru = {lat: 40.718961, lng: -74.002794};
        var map = new google.maps.Map(document.getElementById('googleMap'), {
          zoom: 6,
          center: uluru,
		  scrollwheel:  false
        });
        var marker = new google.maps.Marker({
          position: uluru,
          map: map
        });
}