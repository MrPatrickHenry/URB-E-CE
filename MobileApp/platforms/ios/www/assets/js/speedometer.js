
//to move to ng Controller


// Wait for device API libraries to load
//
document.addEventListener("deviceready", onDeviceReady, false);

var watchID = null;

// device APIs are available
//
function onDeviceReady() {
    // Throw an error if no update is received every 30 seconds
    var options = { maximumAge: 3000, timeout: 5000, enableHighAccuracy: true };
    watchID = navigator.geolocation.watchPosition(onSuccess, onError, options);
}

// onSuccess Geolocation
// should use switch case MPH for now sorry metric :(
function onSuccess(position) {
    var element = document.getElementById('geolocation');
    var speedValueMPH = position.coords.speed * 2.2369362920544, 0;
    
    
    if(speedValueMPH <= 9){
        element.innerHTML =
        'Speed: '  + '<span class="slow">' position.coords.speed '</span>' +'<br />';
    }else if(speedValueMPH <10){
        element.innerHTML =
        'Speed: '+ '<span class="medium">' position.coords.speed '</span>' +'<br />';
    }else if(speedValueMPH >= 15){
        element.innerHTML =
        'Speed: '+ '<span class="fast">' position.coords.speed '</span>' + '<br />';
    }
    else
        element.innerHTML =
        'Speed: ' 0 +'<br />';
    
    
    
}

// onError Callback receives a PositionError object
//
function onError(error) {
    alert('code: '    + error.code    + '\n' +
          'message: ' + error.message + '\n');
}



//conversion based on profile options
function metersToMiles(mps) { //meters per second to MPH
    return round(mps * 2.2369362920544, 0);
}
function metersToKilometers(mps) {
    var mph = metersToMiles(mps);
    return round(mph * 1.60934, 0);
}
function metersToKnots(mps){
    return round(mps / .51, 0)
}
function milesToKilometers(mph) {
    return round(mph * 1.60934, 0);
}
function milesToKnots(miles) {
    return round(miles / 1.15078, 0)
}
function kilometersToMiles(kph) {
    return round(kph / 1.60934, 0);
}
function kilometersToKnots(kph){
    return round(kph / 1.852, 0)
}
function knotsToMiles(knots){
    return round(knots * 1.15078, 0)
}
function knotsToKilometers(knots){
    return round(knots * 1.852, 0)
}
