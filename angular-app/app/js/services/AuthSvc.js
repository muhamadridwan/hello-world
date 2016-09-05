app.factory('AuthSvc', function (SynchManager, Authorization, $localStorage, $state) {
	return {
		login : function(user){
			SynchManager.post(
			"/api/authorization/getAuthorizationToken/", 
			user, 
			function(data, status, headers, config){
				Authorization.setAuth(true, authToken = data["token"]);
				console.log(data);
				$localStorage.auth = Authorization;
				$state.go("configuration.meal_category");
			}, 
			function(data, status, headers, config){});
			
		},
		logout: function(user){
			SynchManager.post("/api/authorization/removeAuthorizationToken/",
			null,
			function(data, status, headers, config){
				//console.log("auth before: ", Authorization);
				Authorization.clear();
				//console.log("auth after: ", Authorization);
				//console.log("localStorage before: ", $localStorage);
				//delete $localStorage.auth;
				$localStorage.$reset();
				//console.log("localStorage after: ", $localStorage);
				$state.go("login");
				
			},
			function(data, status, headers, config){
				
			}
			);
			
		}
		
	}
    
});