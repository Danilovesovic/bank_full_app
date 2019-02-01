angular.module('bank',['ngRoute'])
  .config(function ($routeProvider,$locationProvider) {
    $locationProvider.hashPrefix("");
    $routeProvider

    .when('/',{
      templateUrl : 'pages/accountsView.html',
      controller : 'accountsCtrl'
    })
    .when('/add',{
      templateUrl : 'pages/addView.html',
      controller : 'addCtrl'
    })
    .when('/editdelete',{
      templateUrl : 'pages/editdeleteView.html',
      controller : 'editdeleteCtrl'
    })
    .when('/editForm/:id',{
      templateUrl : 'pages/editForm.html',
      controller : 'editFormCtrl'
    })
  })
