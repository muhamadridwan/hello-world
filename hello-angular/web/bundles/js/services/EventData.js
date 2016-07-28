app.factory('eventData', function($http, $log){
	return {
		getEvent : function(callback){
			$http({method: 'GET', url:'http://172.19.11.41:5001/angularGetEvent'})
			.success(function(data, status, headers, config){
				callback(data);
			})
			.error(function(data, status, headers, config){
				$log.warn(data, status, headers, config);
			});

		}
	};

});