"use strict"

app.controller("EventListCtlr",
function EventListCtrl($scope, eventData){
	$scope.event = eventData.getEvent();
})