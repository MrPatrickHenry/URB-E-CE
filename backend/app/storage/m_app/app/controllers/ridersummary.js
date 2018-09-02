
(function() {
	'use strict';

	angular
	.module('app')
	.controller('riderSummaryController', riderSummaryController);
	userid = localStorage.getItem("uidurbe");

	riderSummaryController.$injector = ['$scope'];

	function riderSummaryController($scope,$http){
		var url = 'http://urbe.patrickhenry.us/api/v1/ride/summary/profile/';
		$http.get(url+userid, )
		.then(function(response){
			$scope.ridersummary = response.data;
		})
		.catch(function(error){
			$scope.error = error;
		});

	}

	function riderMapsSummary($scope,$http,$request){
		var url = 'http://urbe.patrickhenry.us/api/v1/user/';
		var mapparm = '/ride/summary/map/'

		if (request === undefined) {
          request = 0;
    } 
    mapid = request.value;

		$http.get(url+userid+mapparm+mapid, )
		.then(function(response){
			$scope.ridersummary = response.data;
		})
		.catch(function(error){
			$scope.error = error;
		});

	}

})

();

