(function() {
 'use strict';
 
 angular
 .module('app')
 .controller('YellowController', YellowController);
 
 YellowController.$injector = ['$scope'];
 
 function YellowController($scope,$http){
 var url = 'http://urbe.patrickhenry.us/api/v1/ride/yellowjacket';
 $http.get(url)
 .then(function(response){
       $scope.yellowjackets = response.data;
       })
 .catch(function(error){
        $scope.error = error;
        });
 
 }  })();
