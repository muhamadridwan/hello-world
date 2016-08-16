app.controller("LocaleCtrl", 
	function LocaleCtrl($scope, $locale){
		$scope.myDate = Date.now();
		$scope.myFormat = $locale.DATETIME_FORMATS.fullDate;

		throw{message: 'error message'};
	}); 