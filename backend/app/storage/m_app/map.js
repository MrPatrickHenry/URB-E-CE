
    function initMap(latitude,longitude) {

// zoom = zoom;
lats = latitude;
lngs = longitude;

var mapShow = document.getElementById("map");
mapShow.style.display = "block";

var map = new google.maps.Map(document.getElementById('map'), {
  zoom: 16,
  disableDefaultUI: true,

  center: {lat: lats, lng: lngs},
  mapTypeId: google.maps.MapTypeId.ROADMAP,
  styles: [
  {elementType: 'geometry', stylers: [{color: '#242f3e'}]},
  {elementType: 'labels.text.stroke', stylers: [{color: '#242f3e'}]},
  {elementType: 'labels.text.fill', stylers: [{color: '#746855'}]},
  {
    featureType: 'administrative.locality',
    elementType: 'labels.text.fill',
    stylers: [{color: '#d59563'}]
  },
  {
    featureType: 'poi',
    elementType: 'labels.text.fill',
    stylers: [{color: '#d59563'}]
  },
  {
    featureType: 'poi.park',
    elementType: 'geometry',
    stylers: [{color: '#263c3f'}]
  },
  {
    featureType: 'poi.park',
    elementType: 'labels.text.fill',
    stylers: [{color: '#6b9a76'}]
  },
  {
    featureType: 'road',
    elementType: 'geometry',
    stylers: [{color: '#38414e'}]
  },
  {
    featureType: 'road',
    elementType: 'geometry.stroke',
    stylers: [{color: '#212a37'}]
  },
  {
    featureType: 'road',
    elementType: 'labels.text.fill',
    stylers: [{color: '#9ca5b3'}]
  },
  {
    featureType: 'road.highway',
    elementType: 'geometry',
    stylers: [{color: '#746855'}]
  },
  {
    featureType: 'road.highway',
    elementType: 'geometry.stroke',
    stylers: [{color: '#1f2835'}]
  },
  {
    featureType: 'road.bicycle',
    elementType: 'geometry.stroke',
    stylers: [{color: '#FFE83C'}]
  },
  {
    featureType: 'road.highway',
    elementType: 'labels.text.fill',
    stylers: [{color: '#f3d19c'}]
  },
  {
    featureType: 'transit',
    elementType: 'geometry',
    stylers: [{color: '#2f3948'}]
  },
  {
    featureType: 'transit.station',
    elementType: 'labels.text.fill',
    stylers: [{color: '#d59563'}]
  },
  {
    featureType: 'water',
    elementType: 'geometry',
    stylers: [{color: '#17263c'}]
  },
  {
    featureType: 'water',
    elementType: 'labels.text.fill',
    stylers: [{color: '#515c6d'}]
  },
  {
    featureType: 'water',
    elementType: 'labels.text.stroke',
    stylers: [{color: '#17263c'}]
  }
  ]



});


        // var myLatLng = {lat: latitude, lng: longitude};

        var bikeLayer = new google.maps.BicyclingLayer();
        bikeLayer.setMap(map);


        var latLng = new google.maps.LatLng(latitude, longitude),
        marker = new google.maps.Marker({ position: latLng , map: map });

// marker.setMap(map);

// var newPosition = new google.maps.LatLng(latitude, longitude);
// marker.setPosition(newPosition);


}


// document.addEventListener('DOMContentLoaded', function() {
//   var elems = document.querySelectorAll('.sidenav');
//   var instances = M.Sidenav.init(elems);
// });

$(document).ready(function(){
  $('.sidenav').sidenav();
});

function togglemap(){
  var mapShow = document.getElementById("map");
  mapShow.style.display = "none";  }

  function NavShow(){
    togglemap();
    resetbackground();
  }