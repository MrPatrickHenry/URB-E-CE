// old code above
 (function() {
  'use strict';
  
  angular
  .module('app')
  .controller('HomeController', HomeController);
  
  HomeController.$injector = ['$scope'];
  
  function HomeController($scope,$http){
  // $scope.msg = "Rides";
  userid = localStorage.getItem("uidurbe");
  var url = 'http://urbe.patrickhenry.us/api/v1/featureservice';
  $http.post(url)
  .then(function(response){
        $scope.featureService = response.data;
        // $scope.metric = response.data.metric;
        })
  .catch(function(error){
         alert(error);
         $scope.error = error;
         });
  
  }  })();

