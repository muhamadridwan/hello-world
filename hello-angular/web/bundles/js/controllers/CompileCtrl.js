app.controller("CompileCtrl",
function CompileCtrl($scope,$compile){
	$scope.appendDivToElement = function(markup){
		return $compile(markup)($scope).appendTo(angular.element("#appendHere"));
	};
});
