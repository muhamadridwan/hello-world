app.factory('eventData', function($http, $log){
	return {
		getEvent : function(callback){
			$http({method: 'GET', url:'http://192.168.56.102:5001/angularGetEvent'})
			.success(function(data, status, headers, config){
				callback(data);
			})
			.error(function(data, status, headers, config){
				$log.warn($data, status, headers, config);
			});

		}
	};

});