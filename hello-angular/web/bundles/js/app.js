var app = angular.module('app',['ngSanitize','angular-md5']);
app.config(function($interpolateProvider){
	$interpolateProvider.startSymbol('{[{').endSymbol('}]}');
});