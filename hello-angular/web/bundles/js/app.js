var app = angular.module('app',['ngSanitize','angular-md5','ngResource', "ngCookies","ngRoute"]);
app.config(function($interpolateProvider, $routeProvider){

	$interpolateProvider.startSymbol('{[{').endSymbol('}]}');
	$routeProvider.when("/newEvent",
		{
			templateUrl: "/newEventWithNGRoute",
			controller: "EditEventCtlr"
		});
	$routeProvider.when("/eventList",
	{
		templateUrl: "/getEventList",
		controller: "EventListCtrl"
	});
});