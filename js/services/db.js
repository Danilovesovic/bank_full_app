angular.module('bank')
  .factory('db',function ($http) {
    return {
      getAccounts : function () {
        return $http({
          url : 'php/phpLogic.php?fun=getall',
          method : 'get'
        })
      },
      addAccount : function (account) {
        return $http({
          url : 'php/phpLogic.php',
          method : 'post',
          data : account
        })
      },
      deleteAccount : function (id) {
        return $http({
          url : 'php/delete.php',
          method : 'post',
          data : {id:id}
        })
      },
      getOne : function (id) {
        return $http({
          url : 'php/phpOne.php?id='+id,
          method : 'get'
        })
      },
      editAccount : function (account) {
        return $http({
          url : 'php/editAccount.php',
          method : 'post',
          data : account
        })
      }

    }
  })
