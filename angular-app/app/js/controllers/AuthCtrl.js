app.controller('AuthCtrl', function AuthCtrl($scope, AuthSvc){
	$scope.user = {};
	$scope.forgetPassword = function(){};
	$scope.login = function(user){
		AuthSvc.login(user);
	};
});