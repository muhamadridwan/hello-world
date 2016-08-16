app.factory('eventData', function($http, $log, $q, $resource){
	var resource = $resource('http://172.19.11.100:5001/angularGetEvent/:idx',{idx : '@idx'});
	return {
		getEvent : function(callback){
			$http({method: 'GET', url:'http://172.19.11.100:5001/angularGetEvent'})
			.success(function(data, status, headers, config){
				callback(data);
			})
			.error(function(data, status, headers, config){
				$log.warn(data, status, headers, config);
			});

		},
		getEventWithQ : function(){
			var deferred = $q.difer();
			$http({method: "GET", url: 'http://172.19.11.100:5001/angularGetEvent'})
			.success(function(data, status, headers, config){
				deferred.resolve(data);
			})
			.error(function(data, status, headers, config){
				deferred.reject(status);
			});

			deferred.promise;

		},
		getEventWithResource : function(){
			return $resource('http://172.19.11.100:5001/angularGetEvent/:idx',{idx : '@idx'}).get({idx:1});
		},
		save : function(event){
			resource.save(event);

		}
	};

});