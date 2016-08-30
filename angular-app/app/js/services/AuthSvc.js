app.factory('AuthSvc', function (SynchManager, Authorization) {
	return {
		login : function(user){
			SynchManager.post(
			"/api/authorization/getAuthorizationToken/", 
			user, 
			function(data, status, headers, config){
				Authorization.authToken = data["token"];
				Authorization.authorized = true;
				Authorization.go("configuration.meal_category");
				
			}, 
			function(data, status, headers, config){});
			
		}
	}
    
});