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
			null,
			function(data, status, headers, config){
				Authorization.authToken = "";
				Authorization.authorized = false;
				console.log("it should be (false) : " + Authorization.authorized);
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