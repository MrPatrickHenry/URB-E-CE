//REPORTING
app.controller('adminController' , function($scope, $http) {
  $http.get('http://urbe.patrickhenry.us/api/v1/admin/users', )
  .then(function(response){
    $scope.userDetails = response.data.userDetails;
        $scope.usage = response.data.usage;

  })
  .catch(function(error){
    $scope.error = error;
  });
});



