app.factory('MealCategorySvc', function($http, $log, $q, $resource){
	
	return {
		getAllMealCategory : function(callback){
			$http({method: 'GET', url:APIUrl + "/api/configuration/mealCategory/getAllMealCategory/"})
			.success(function(data, status, headers, config){
				callback(data);
			})
			.error(function(data, status, headers, config){
				$log.warn(data, status, headers, config);
			});
			
		},
		saveMealCategory: function(mealCategory, callback){
			
			$http({
				method: 'POST', 
				url: APIUrl + "/api/configuration/mealCategory/save/",
				data: mealCategory,
				responseType: "json"
				})
			.success(function(data, status, headers, config){
				callback(data);
			})
			.error(function(data, status, headers, config){
				$log.warn(data, status, headers, config);
			});
		},
		deleteMealCategory: function(mealCategory, callback){
			$http({
				method: 'POST', 
				url: APIUrl + "/api/configuration/mealCategory/delete/",
				data: mealCategory,
				responseType: "json",
				headers: {
                    'Content-Type': 'application/json; charset=utf-8'
				}
				})
			.success(function(data, status, headers, config){
				callback(data);
			})
			.error(function(data, status, headers, config){
				$log.warn(data, status, headers, config);
			});
		},
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
			$http({method: "GET", url: 'http://172.19.11.100:5001/angularGetEvent'})
			.success(function(data, status, headers, config){
				deferred.resolve(data);
			})
			.error(function(data, status, headers, config){
				deferred.reject(status);
			});

			deferred.promise;

		},
		
		save : function(event){
			resource.save(event);

		}
	};

});