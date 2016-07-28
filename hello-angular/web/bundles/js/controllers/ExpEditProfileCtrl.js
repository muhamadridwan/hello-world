app.controller("ExpEditProfileCtrl",
function ExpEditProfileCtrl($scope, md5, gravatarUrlBuilder){
	host = "http://192.168.56.102:5001/bundles/images/";
	
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

	};

	$scope.cancelEditProfile = function(user, editProfileForm) {
		
	};
});