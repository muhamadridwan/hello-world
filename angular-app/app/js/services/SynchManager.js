app.factory('SynchManager', function($http, $log, $q, $resource, $localStorage, NotificationSvc){
	
	return {
		post : function(url, data, onSuccess, onError){
			$http({
				method: 'POST', 
				url: APIUrl + url,
				data: data,
				responseType: "json",
				headers: {
					Authorization: 'Bearer ' +  ($localStorage.auth ? $localStorage.auth["authToken"] : "")
					}
				})
			.success(function(data, status, headers, config){
				if(typeof(onSuccess) == "function")
				{
					onSuccess(data, status, headers, config);
				}
			})
			.error(function(data, status, headers, config){
				if(typeof(onError) == "function")
				{
					onError(data, status, headers, config);
				}
				$log.warn(data, status, headers, config);
				
				if(status==401)
				{
					NotificationSvc.notifyUnauthorizedUser();
				}
			});
			
		},
		get: function(url, onSuccess, onError){
			$http({
				method: 'GET', 
				url: APIUrl + url,
				headers: {
					Authorization: 'Bearer ' +  ($localStorage.auth ? $localStorage.auth["authToken"] : "")
					}
				})
			.success(function(data, status, headers, config){
				if(typeof(onSuccess) == "function")
				{
					onSuccess(data, status, headers, config);
				}
			})
			.error(function(data, status, headers, config){
				if(typeof(onError) == "function")
				{
					onError(data, status, headers, config);
				}
				$log.warn(data, status, headers, config);
				if(status==401)
				{
					NotificationSvc.notifyUnauthorizedUser();
				}
			});
		}
	};

});