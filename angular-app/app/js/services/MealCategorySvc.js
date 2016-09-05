app.factory('MealCategorySvc', function($http, $log, $q, $resource, SynchManager){
	
	return {
		getAllMealCategory : function(onSuccess){
			
			SynchManager.get(
			"/api/configuration/mealCategory/getAllMealCategory/", 
			onSuccess, null);
			
			// $http({method: 'GET', url:APIUrl + "/api/configuration/mealCategory/getAllMealCategory/"})
			// .success(function(data, status, headers, config){
				// callback(data);
			// })
			// .error(function(data, status, headers, config){
				// $log.warn(data, status, headers, config);
			// });
			
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
		}
	};

});