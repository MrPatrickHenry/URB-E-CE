(function() {
    'use strict';

    angular.module('app',['ngRoute'])
    .config(function($routeProvider)
    {
        $routeProvider
        .when('/', {
            templateUrl  : 'app/views/home.html',
            controller   : 'HomeController',
            controllerAs : 'Home'
        })
            .when('/profile', {
                  templateUrl : 'app/views/profile.html',
                  controller   : 'ProfileController',
                  controllerAs : 'Profile'
                  })
            .when('/speedometer', {
                  templateUrl : 'app/views/speedometerDashboard.html',
                  controller   : 'riderSummaryController',
                  controllerAs : 'riderSumammary'
                  })
            .when('/yellowJackets', {
                  templateUrl : 'app/views/yellowJackets.html',
                  controller   : 'YellowController',
                  controllerAs : 'yellow'
                  })
            .when('/register', {
                  templateUrl : 'app/views/register.html'
                  })
            .when('/map', {
                  templateUrl : 'app/views/rides.html'
                  })
            .when('/settings', {
                  templateUrl : 'app/views/settings.html'
                  })
            .when('/gdpr', {
                  templateUrl : 'app/views/gdpr.html'
                  })
            .when('/pastrides', {
                  templateUrl : 'app/views/pastrides.html'
                  })
            .when('/shop', {
                  templateUrl : 'app/views/augmented.html'
                  })
            .when('/rides', {
                  templateUrl : 'app/views/rides.html'
                  })
        .otherwise ({ redirectTo: '/' });
    })
    .run(function(){
        document.addEventListener("deviceready", function () {
            console.info("Cordova initialized with success");
        }, false);
    });

})();
