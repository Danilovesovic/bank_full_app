angular.module('bank')
  .controller('editFormCtrl',function ($scope,db,$location,$routeParams) {
    $scope.account = {};
    db.getOne($routeParams.id).then(function (res) {
      $scope.account = res.data;
    })
    $scope.editAccount = function () {
      db.editAccount($scope.account);
      $location.path('#/');
    }
  })
