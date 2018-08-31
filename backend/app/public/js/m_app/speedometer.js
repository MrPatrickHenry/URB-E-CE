var watchID = null;
// device APIs are available
userid = localStorage.getItem("uidurbe");

function newRideID() {
    // Retrieve new rid 
    var userid = localStorage.getItem("uidurbe");
    var xhr = new XMLHttpRequest();
    var url = "http://urbe.patrickhenry.us/api/v1/newRiderID/";
    xhr.addEventListener("readystatechange",
        function() {
            if (this.readyState === 4) {
                var obj = JSON.parse(xhr.responseText);
                NEWRideID = obj;
                localStorage.setItem("rid", NEWRideID);
            }
        });
    var newurl = url + userid;
    xhr.open("POST", newurl, true);
    xhr.send();
}

function onReadyspeed(){
    var options = {
        maximumAge: 30000,
        timeout: 30000,
        enableHighAccuracy: true,
        desiredAccuracy: 0,
        frequency: 30000
    };

    watchID = navigator.geolocation.watchPosition(onSuccess, onError, options);
    console.log('Patrick');
    
}

function startandSaveRide() {
   newRideID();


//move to function
var startRideButton = document.getElementById("startRide");
startRideButton.style.display = "none";
var stopRidebutton = document.getElementById("stopRide");
stopRidebutton.style.display = "inline";
    document.body.style.backgroundColor = "#242f3e"; // red
}


function recordToDb(){
    // todo
}

function onSuccess(position) {
    gyro.startTracking(function(o) {
        x = o.x;
        y = o.y;
        z = o.z;
    });

    speedy = Math.round(position.coords.speed * 2.23, 0);

    Latitude = position.coords.latitude;
    Longitude = position.coords.longitude;
    Altitude = position.coords.altitude;
    Accuracy = position.coords.accuracy;
    AltitudeAccuracy = position.coords.altitudeAccuracy;
    Heading = position.coords.heading;

// this looks horrid and should be global on line 59
window.lat = Latitude;
window.lng = Longitude;
speedNsave();
lat = Latitude;
lng = Longitude;
initMap(lat,lng);

}




function speedNsave(){

    var element = document.getElementById('geolocation');

    
    
    if (speedy <= 9) {
        element.innerHTML =  '<h2 class="slow">' + speedy + '</h2>';
    } else if (speedy < 10) {
        element.innerHTML =  '<h2 class="med">' + speedy + '</h2>';
    } else if (speedy >= 15) {
        element.innerHTML = '<h2 class="fast">' + speedy + '</h2>';
    } else {
        element.innerHTML = '<h2 class="stop">' + 0 + '</h2>';
    }

    // post to db
    timestamped = new Date();

    var userid = localStorage.getItem("uidurbe");
    var data = new FormData();
    data.append("rid", NEWRideID);
    data.append("USERID", userid);
    data.append("Longitude", lat);
    data.append("Latitude", lng);
    data.append("Altitude", Altitude);
    data.append("Accuracy", Accuracy);
    data.append("AltitudeAccuracy", AltitudeAccuracy);
    data.append("Heading", Heading);
    data.append("Speed", speedy);
    data.append("timestamp", timestamped);
    data.append("xvalue", x);
    data.append("yvalue", y);
    data.append("zvalue", z);
    //
    var xhr = new XMLHttpRequest();

    xhr.addEventListener("readystatechange", function() {
        if (this.readyState === 4) {
//nothing needed to return
}
});

    xhr.open("POST", "http://urbe.patrickhenry.us/api/v1/ride", true);
    xhr.send(data);

}
function stoprecording() {
    navigator.geolocation.clearWatch(watchID);

    watchID = null;
    NEWRideID = null;
    createSummary();

    var startButton = document.getElementById("startRide");
    startButton.style.display = "inline";
    var stopRidebutton = document.getElementById("stopRide");
    stopRidebutton.style.display = "none";
        document.body.style.backgroundColor = "#FAFAFC"; // red
    }

    function resetbackground(){
        document.body.style.backgroundColor = "#FAFAFC"; // red
    }

    function createSummary() {
    // Retrieve
    var userid = localStorage.getItem("uidurbe");
    var rideID = localStorage.getItem("rid");
    var stringa = "/ride/";
    var stringb = "/sumamrydistance";
    var xhr = new XMLHttpRequest();
    var url = "http://urbe.patrickhenry.us/api/v1/profile/";
    xhr.addEventListener("readystatechange",
        function() {
            if (this.readyState === 4) {
                LastRide();
      }
  });
    var newurl = url + userid + stringa + rideID + stringb;
    xhr.open("POST", newurl, true);
    xhr.send();
}

function LastRide() {
    // Retrieve
    var userid = localStorage.getItem("uidurbe");
    var rideID = localStorage.getItem("rid");
    var xhr = new XMLHttpRequest();
    var url = "http://urbe.patrickhenry.us/api/v1/ride/sumamry/last/ride/user/";
    xhr.addEventListener("readystatechange",
        function() {
            if (this.readyState === 4) {
                var obj = JSON.parse(xhr.responseText);
                var userobj = obj;
                M.toast({html: 
                'Ride Details: ' + userobj.data.summary[0].created_at +
                "<br> City: " + userobj.data.summary[0].city +
                "<br> Distance: " + userobj.data.summary[0].distance +
                "<br> Avg Speed: " + userobj.data.summary[0].avgSpeed +
                "<br> Max Speed: " + userobj.data.summary[0].maxSpeed +
                "<br> eCO2: " + userobj.data.summary[0].eCO2 +
                "<br> cCO2: " + userobj.data.summary[0].cCO2                     
            })
            }
        });
    var newurl = url + userid;
    xhr.open("POST", newurl, true);
    xhr.send();
}



function odometer() {
    // Retrieve
    var userid = localStorage.getItem("uidurbe");
    var stringa = "/odometer";
    var xhr = new XMLHttpRequest();
    var url = "http://urbe.patrickhenry.us/api/v1/profile/";
    xhr.addEventListener("readystatechange",
        function() {
            if (this.readyState === 4) {}
        });
    var newurl = url + userid + stringa;
    xhr.open("POST", newurl, true);
    xhr.send();
}

// onError Callback receives a PositionError object
//
function onError(error) {
    M.toast({html: 'code: ' + error.code + '\n' +
            'message: ' + error.message + '\n'})
}




//weather
function getWeather(latitude, longitude) {

    // Get a free key at http://openweathermap.org/. Replace the "Your_Key_Here" string with that key.
    var OpenWeatherAppKey = "42926655b001bf443d3b7d75e8f60d0e";

    var queryString =
    'http://api.openweathermap.org/data/2.5/weather?lat='
    + lat + '&lon=' + lng + '&appid=' + OpenWeatherAppKey + '&units=imperial';

    $.getJSON(queryString, function (results) {

        if (results.weather.length) {

            $.getJSON(queryString, function (results) {

                if (results.weather.length) {
                  M.toast({html: 'Weather is to be: ' + results.weather[0].main})
                    // document.getElementById("visability").innerHTML = (results.weather[0].main);
                }

            });
        }
    }).fail(function () {
        console.log("error getting location");
    });
}

// Error callback

function onWeatherError(error) {
    M.toast({html: 'code: ' + error.code + '\n' +
            'message: ' + error.message + '\n'})
}

