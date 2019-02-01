angular.module('bank')
  .controller('addCtrl',function ($scope,db,$location) {
    $scope.addAccount = function () {
      db.addAccount($scope.account).then(function (res) {
        $location.path("#/");
      })
    }
  })
