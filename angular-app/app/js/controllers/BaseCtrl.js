app.controller('BaseCtrl', function () {
    $scope.action = function () {
        console.log('Override the second action provided by MyController controller');
    
	/* on child ctrl
	
	angular.extend(this, $controller('MyController', {$scope: $scope}));

    $scope.action = function () {
        console.log('Override the second action provided by MyController controller');
    };
	*/
});