app.factory('SynchManager', function($http, $log, $q, $resource, SweetAlert, Authorization){
	
	return {
		post : function(url, data, onSuccess, onError){
			$http({
				method: 'POST', 
				url: APIUrl + url,
				data: data,
				responseType: "json",
				Authorization: "Bearer " //+ Authorization["authToken"]
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
				//SweetAlert.swal("Something Wrong!", data["message"], "error");
			});
			
		},
		get: function(url, onSuccess, onError){
			$http({
				method: 'GET', 
				url: APIUrl + url,
				Authorization: "Bearer "  //+ Authorization["authToken"]
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
				//SweetAlert.swal("Something Wrong!", data["message"], "error");
			});
		}
	};

});