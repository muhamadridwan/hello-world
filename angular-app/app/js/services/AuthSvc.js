app.factory('AuthSvc', function ($window, SynchManager, Authorization, AppCache) {
	return {
		login : function(user){
			SynchManager.post(
			"/api/authorization/getAuthorizationToken/", 
			user, 
			function(data, status, headers, config){
				Authorization.authToken = data["token"];
				Authorization.authorized = true;
				$window.localStorage['Auth'] = Authorization;
				Authorization.go("configuration.meal_category");
				
			}, 
			function(data, status, headers, config){});
			
		}
	}
    
});