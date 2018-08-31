(function() {
 'use strict';
 
 angular
 .module('app')
 .controller('ProfileController', ProfileController);
 
 ProfileController.$injector = ['$scope'];
 
 function ProfileController($scope,$http){
 // $scope.msg = "Rides";
  userid = localStorage.getItem("uidurbe");
var url = 'http://urbe.patrickhenry.us/api/v1/profile/';
 $http.get(url+userid, )
 .then(function(response){
       $scope.profileuser = response.data;
       	// $scope.metric = response.data.metric;
       })
 .catch(function(error){
        alert(error);
        $scope.error = error;
        });
 
 }  })();
