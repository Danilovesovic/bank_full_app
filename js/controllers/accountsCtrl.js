angular.module('bank')
  .controller('accountsCtrl',function ($scope,db) {
    $scope.accounts = [];
    db.getAccounts().then(function (res) {
      console.log(res.data);
      $scope.accounts = res.data;
    })
  })
