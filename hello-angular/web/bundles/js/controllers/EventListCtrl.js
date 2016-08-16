"use strict"

app.controller("EventListCtrl",
function EventListCtrl($scope, eventData){
	$scope.event = eventData.getEvent();
})