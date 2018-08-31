"use strict";
function settingsupdate(){
    var userid = localStorage.getItem("uidurbe");
    var url ="http://urbe.patrickhenry.us/api/v1/profile/";

    var data = new FormData();
    var emailupdate = document.getElementById("email").value;
    var nameupdate = document.getElementById("name").value;
    var password = document.getElementById("password").value
    // var profilepic = document.getElementById("profilepic").value;
    var fileupload = document.getElementById('profilepic');
    var profilepic = fileupload.files[0];
    // var profilepic = document.getElementById("profilepic").files[0].name; 
    var gender = document.getElementById("gender").value
    var weightupdate = document.getElementById("weight").value
    var heightupdate = document.getElementById("height").value
    var device = document.getElementById("device").value
    var publicShare = document.getElementById("publicShare").value
    var metric = document.getElementById("metric").value


    data.append("id", userid);
    data.append("name", nameupdate);
    data.append("email", emailupdate);
    data.append("profilepic", profilepic);
    data.append("gender", gender);
    data.append("height", heightupdate);
    data.append("weight", weightupdate);
    data.append("publicShare", profilepic);
    data.append("metric", metric);
    data.append("devices", device);

    var xhr = new XMLHttpRequest();
    xhr.addEventListener("readystatechange", function () {
                         if (this.readyState === 4)
                         if(userobj.status != 200){
                         console.log(userobj);
                         localStorage.setItem("uidurbe", userobj.data.id);
                         M.toast({html: 'logged in'});
                         authorised();
                         }else{
                         M.toast({html: 'Profile Not updated'});
                         }
 });
    xhr.open("POST", url+userid, true);
    xhr.send(data);
}

function gdpr(){
    var userid = localStorage.getItem("uidurbe");
    var url = "http://urbe.patrickhenry.us/api/v1/user/gdpr/"
    var data = new FormData();
    var GDPRUpdate = 1;

    var xhr = new XMLHttpRequest();
    xhr.addEventListener("readystatechange", function () {
       if (this.readyState === 4) {
        M.toast({html: 'GDPR Updated'})

           postReg()

       }
   });
    xhr.open("POST", url+userid, true);
    xhr.send(data);
}


function updatePassword(){
    var userid = localStorage.getItem("uidurbe");
    var url = "http://urbe.patrickhenry.us/api/v1/user/password/update/"
    var data = new FormData();
    password = document.getElementById("password").value;
    var password_confirmation = document.getElementById("password_confirmation").value;
    data.append("password_confirmation", password_confirmation);
    var xhr = new XMLHttpRequest();
    xhr.addEventListener("readystatechange", function () {
       if (this.readyState === 4) {
        M.toast({html: 'Password is updated, please log back in'})

           logout()

       }
   });
    xhr.open("POST", url+userid, true);
    xhr.send(data);
}
