//REPORTING
app.controller('reportingController' , function($scope, $http) {
  $http.get('https://r.20-twenty.online/reporting/4', )
  .then(function(response){
    $scope.earnings = response.data;
  })
  .catch(function(error){
    $scope.error = error;
  });
});


//STATEMENTS
app.controller('statementController' , function($scope, $http) {
  $http.get('https://invoices.20-twenty.online/invoices/1', )
  .then(function(response){
    $scope.invoices = response.data;
  })
  .catch(function(error){
    $scope.error = error;
  });
});



// Orders
app.controller('ViewordersControler' , function($scope, $http) {
  $http.get('/6/orders/view/', )
  .then(function(response){
    $scope.ordersView = response.data;
  })
  .catch(function(error){
    $scope.error = error;
  });
});

//PROFILE
app.controller('profileViewController', function($scope, $http) {
  $http.get('https://20-twenty.online/profile/show/6', )
  .then(function(response){
    $scope.profileuser = response.data;
    $scope.firstName = "John";
  })
  .catch(function(error){
    $scope.error = error;
  });
});


//REPORTING
app.controller('reportingControllerType' , function($scope, $http) {
  $http.get('https://r.20-twenty.online/reporting/earnings/4', )
  .then(function(response){
    $scope.viewType = response.data.type;
  })
  .catch(function(error){
    $scope.error = error;
  });
});

// Assetview
app.controller('assetViewController' , function($scope, $http) {
  $http.get('https://resources.20-twenty.online/asset/management/show/user/23', )
  .then(function(response){
    $scope.assets = response.data;
  })
  .catch(function(error){
    $scope.error = error;
  });
});
    

//GeographicREPORTING
app.controller('reportingController' , function($scope, $http) {
  $http.get('https://r.20-twenty.online/reporting/4', )
  .then(function(response){
    $scope.earnings = response.data;
  })
  .catch(function(error){
    $scope.error = error;
  });
});

