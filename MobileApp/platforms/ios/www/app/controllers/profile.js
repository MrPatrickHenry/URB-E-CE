(function() {
    'use strict';

    angular
        .module('app')
        .controller('ProfileController', ProfileController);

    ProfileController.$injector = ['$scope'];

    function ProfileController($scope){
        $scope.msg = "Angular active!";
    }
})();
