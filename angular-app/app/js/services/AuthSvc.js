app.factory('AuthSvc', function (SynchManager, Authorization, AppCache, $localStorage) {
	return {
		login : function(user){
			SynchManager.post(
			"/api/authorization/getAuthorizationToken/", 
			user, 
			function(data, status, headers, config){
				Authorization.authToken = data["token"];
				Authorization.authorized = true;
				$localStorage.auth = Authorization;
				Authorization.go("configuration.meal_category");
				
			}, 
			function(data, status, headers, config){});
			
		},
		logout: function(user){
			SynchManager.post("/api/authorization/removeAuthorizationToken/",
			user,
			function(data, status, headers, config){
				Authorization.authToken = "";
				Authorization.authorized = false;
				delete $localStorage.auth;
				$localStorage.$reset();
				Authorization.go("login");
				
			},
			function(data, status, headers, config){
				
			}
			);
			
		}
		
	}
    
});