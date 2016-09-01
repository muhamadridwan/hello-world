app.factory('AuthSvc', function (SynchManager, Authorization, AppCache, $localStorage, $state) {
	return {
		login : function(user){
			SynchManager.post(
			"/api/authorization/getAuthorizationToken/", 
			user, 
			function(data, status, headers, config){
				Authorization.setAuth(true, authToken = data["token"]);
				$localStorage.auth = Authorization;
				$state.go("configuration.meal_category");
				
			}, 
			function(data, status, headers, config){});
			
		},
		logout: function(user){
			SynchManager.post("/api/authorization/removeAuthorizationToken/",
			null,
			function(data, status, headers, config){
				console.log("Authorization before set to false: ");
				console.log(Authorization);
				Authorization.clear();
				console.log("Authorization after set to false: ");
				console.log(Authorization);
				delete $localStorage.auth;
				$localStorage.$reset();
				$state.go("login");
				
			},
			function(data, status, headers, config){
				
			}
			);
			
		}
		
	}
    
});