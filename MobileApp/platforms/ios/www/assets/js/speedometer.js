var watchID = null;
// device APIs are available

function onDeviceReady() {
    // Throw an error if no update is received every 30 seconds
    var options = { maximumAge: 30000, timeout: 30000, enableHighAccuracy: true };
    watchID = navigator.geolocation.watchPosition(onSuccess, onError, options);
    startWatch();
    dblocal();
    //mysqlite for speed
}



// onSuccess Callback
//   This method accepts a `Position` object, which contains
//   the current GPS coordinates
//
function onSuccess(position) {
    var element = document.getElementById('geolocation');
    speedy = Math.round(position.coords.speed * 2.23,0);
    // timestamp = position.timestamp;
    Latitude = position.coords.latitude;
    Longitude = position.coords.longitude;
    Altitude = position.coords.altitude;
    Accuracy = position.coords.accuracy;
    AltitudeAccuracy = position.coords.altitudeAccuracy;
    Heading = position.coords.heading;
    timestamped = new Date();
    
    if(speedy <= 9){
        element.innerHTML = '<h2>Speed:</h2> '  + '<h1 class="slow">' + speedy + '</h1>';
    }   else if(speedy <10)     {
        element.innerHTML = '<h2>Speed:</h2> '  + '<h1 class="medium">' + speedy + '</h1>';
    }   else if(speedy >= 15)   {
        element.innerHTML = '<h2>Speed:</h2> '  + '<h1 class="fast">' + speedy + '</h1>';
    }   else                    {
        element.innerHTML = '<h2>Speed:</h2> '  + '<h1 class="stop">' + 0 + '</h1>';
    }
    
    var data = new FormData();
    data.append("rid", "1");
    data.append("USERID", "2");
    data.append("Longitude", Latitude);
    data.append("Latitude", Longitude);
    data.append("Altitude", Altitude);
    data.append("Accuracy", Accuracy);
    data.append("AltitudeAccuracy", AltitudeAccuracy);
    data.append("Heading", Heading);
    data.append("Speed", speedy);
    data.append("timestamp",timestamped);
    <!--                data.append("xvalue",o.x);-->
    <!--                data.append("yvalue"o.y);-->
    <!--                data.append("zvalue",o.z);-->
    
    var xhr = new XMLHttpRequest();
    
    xhr.addEventListener("readystatechange", function () {
                         if (this.readyState === 4) {
                         console.log(this.responseText);
                         }
                         });
    
    xhr.open("POST", "http://urbe.patrickhenry.us/api/v1/ride", true);
    // xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    // xhr.setRequestHeader("Access-Control-Allow-Origin", "*");
    // xhr.setRequestHeader("Access-Control-Allow-Methods", "GET, POST, PUT,DELETE, OPTIONS");
    xhr.send(data);
}


// onError: Failed to get the acceleration
//
function onError() {
    alert('onError!');
}
// onError Callback receives a PositionError object
//
function onError(error) {
    alert('code: '    + error.code    + '\n' +
          'message: ' + error.message + '\n');
}

// Options: throw an error if no update is received every 30 seconds.
//
var watchID = navigator.geolocation.watchPosition(onSuccess, onError, { timeout: 30000 });

// onError Callback receives a PositionError object
//
function onError(error) {
    alert('code: '    + error.code    + '\n' +
          'message: ' + error.message + '\n');
}


//need to intergrat in to the onSuccess(position) function to pass to the db
//gyro.startTracking(function(o) {
//                   var b = document.getElementById('example'),
//                   f = document.getElementById('features');
//                   f.innerHTML = gyro.getFeatures();
//                   b.innerHTML = "<p> x = " + o.x + "</p>" +
//                   "<p> y = " + o.y + "</p>" +
//                   "<p> z = " + o.z + "</p>" +
//                   "<p> alpha = " + o.alpha + "</p>" +
//                   "<p> beta = " + o.beta + "</p>" +
//                   "<p> gamma = " + o.gamma + "</p>";
//                   });

