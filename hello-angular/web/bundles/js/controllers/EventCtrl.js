app.controller("EventCtrl",
function EventCtrl($scope, eventData){
	$scope.snippet = '<span style="color:red">hi there!</span>';
	$scope.eventStyle = {color:'#f00'};
	$scope.sortOrder = 'name';
	$scope.event = null;
	//$scope.event = {};
	eventData.getEvent(function(event){
		$scope.event = event;
		$scope.$apply;
		//console.log(event);
	});//eventData.event;

	$scope.upVoteSession = function(session){
		session.upVoteCount++;
	}

	$scope.downVoteSession = function(session){
		session.upVoteCount--;
	}

	$scope.saveEvent = function(event, newEventForm){
		if(newEventForm.$valid){
			window.alert('event '+event.name+' saved!');
		}
	};

	$scope.saveEvent = function(event, newEventForm){
		window.alert('back!');
	};
});