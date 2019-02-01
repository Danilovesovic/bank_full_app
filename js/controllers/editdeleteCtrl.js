angular.module('bank')
  .controller('editdeleteCtrl',function ($scope,db,$location) {
    $scope.accounts = [];
    db.getAccounts().then(function (res) {
      $scope.accounts = res.data;
    })

    $scope.deleteAccount = function (id) {

      db.deleteAccount(id).then(function (res) {
        $location.path('#/');
      })
    }
  })
