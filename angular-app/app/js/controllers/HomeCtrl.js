app.controller('HomeCtrl', function ($scope, Authorization) {
    $scope.userData = Authorization.userData;
});