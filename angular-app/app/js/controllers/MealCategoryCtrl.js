
function MealCategoryCtrl($scope, MealCategorySvc){
	MealCategorySvc.getAllMealCategory(function(mealCategories){
		$scope.mealCategories = mealCategories;
		console.log(mealCategories);
		$scope.$apply;
		
	});
};

app.controller('MealCategoryCtrl', MealCategoryCtrl);