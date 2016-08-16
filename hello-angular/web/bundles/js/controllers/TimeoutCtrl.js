app.controller("TimeoutCtrl",
	function TimeoutCtrl($scope, $timeout){
		/*var promise = $timeout(function(){
			$scope.name = "John Doe";
		}, 3000);*/

		setTimeout(function(){
			$scope.name = "John Doe";
		}, 3000);
		$scope.cancel = function(){
			$timeout.cancel(promise);
		};


	});