"use strict";
function mRegister(){
    var data = new FormData();
    email = document.getElementById("email").value;
    var name = document.getElementById("name").value;
    password = document.getElementById("password").value;
    var password_confirmation = document.getElementById("password_confirmation").value;
    data.append("email", email);
    data.append("password", password);
    data.append("name", name);
    data.append("password_confirmation", password_confirmation);
    var xhr = new XMLHttpRequest();
    xhr.addEventListener("readystatechange", function () {
       if (this.readyState === 4) {
           console.log(this.responseText);
           postReg()
       }
   });
    xhr.open("POST", "http://urbe.patrickhenry.us/api/v1/mregister", true);
    xhr.send(data);
}

function postReg(){
    var xhr = new XMLHttpRequest();
    var url = "http://urbe.patrickhenry.us/api/v1/authenticate?email=";
    xhr.addEventListener("readystatechange",
       function () {
           if (this.readyState === 4)
           {
               var obj = JSON.parse(xhr.responseText);
               var userobj = obj;
               localStorage.setItem("uidurbe", userobj[0].id);

               authorised();

           }
       });
    var newurl = url+email+'&password='+password;
    xhr.open("POST", newurl, true);
    xhr.send();
}

function auth(){
    // Retrieve

    if("uidurbe" in localStorage){
        authorised();
    } else {
        console.log("Not Logged in");
    }
}

function logout(){
      localStorage.removeItem("uidurbe");

togglemap();

    M.toast({html: 'logged out'})
    location.href = "#!index";
    var x = document.getElementById("menu-button");
    x.style.display = "none";
    
    

}

function authorised() {
  var x = document.getElementById("menu-button");
  x.style.display = "block";
  location.href = "#!speedometer";
  
}

function loginAPI(){
    var xhr = new XMLHttpRequest();
    var url = "http://urbe.patrickhenry.us/api/v1/authenticate?email=";
    var email = document.getElementById("email").value;
    var password = document.getElementById("password").value;
    xhr.addEventListener("readystatechange",
       function () {
           if (this.readyState === 4)
           {
               var obj = JSON.parse(xhr.responseText);
               var userobj = obj;
               if(userobj.status != 401){
                console.log(userobj);
               localStorage.setItem("uidurbe", userobj.data.id);
               M.toast({html: 'logged in'});
               authorised();
             }else{
              M.toast({html: 'Not Valid, Try again'});
 }
             }
       });
    var newurl = url+email+'&password='+password;
    xhr.open("POST", newurl, true);
    xhr.send();
}
