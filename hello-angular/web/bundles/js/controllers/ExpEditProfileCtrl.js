app.controller("ExpEditProfileCtrl",
function ExpEditProfileCtrl($scope, md5, gravatarUrlBuilder, evenData){
	host = "http://172.19.11.104:5001/bundles/images/";
	
	$scope.user = {
		picture : "13087640_10206194597528878_334803502942933110_n.jpg",
		emailAddress : "ridwan_jtk09@yahoo.com"
	};

	
	$scope.getGravatarUrl = function(user){
		return gravatarUrlBuilder.buildGravatarUrl(user);
	}
	$scope.getUserPictureUrl = function(user) {
		
		return host+ "user/" + user.picture;


	}

	$scope.saveUser = function(user, editProfileForm){
		if(editProfileForm.$valid)
		{
			eventData.save(user).$promise.then(
					function(response){console.log('success', response);},
					function(response){console.log('failure', response);}
				);
		}
	};

	$scope.cancelEditProfile = function(user, editProfileForm) {
		
	};
});