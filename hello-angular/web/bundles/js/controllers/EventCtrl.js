app.controller("EventCtrl",
function EventCtrl($scope, eventData){
	$scope.snippet = '<span style="color:red">hi there!</span>';
	$scope.eventStyle = {color:'#f00'};
	$scope.sortOrder = 'name';
	$scope.event = null;
	//$scope.event = {};
	//eventData.event;

	//ajax 
	/*eventData.getEvent(function(event){
		$scope.event = event;
		$scope.$apply;
		
	});*/


	//ajax with Q angular library
	/*eventData.getEventWithQ().then(
		function(event){$scope.event = event;},
		function(status){console.log(status);}

	);*/

	//ajax with resource lib
	eventData.getEventWithResource().$promise.then(
			function(event){$scope.event = event;console.log(event);},
			function(response){console.log(response);}
		);


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