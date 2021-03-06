(function() {
    'use strict';

    angular
        .module('app')
        .controller('ProfileController', ProfileController);

    ProfileController.$injector = ['$scope'];

    function ProfileController($scope){
        $http.get('https://urbe.patrickhenry.us/api/v1/profile/1',)
  .then(function(response){
    $scope.profileuser = response.data;
  })
  .catch(function(error){
    $scope.error = error;
  });
    }
})();
