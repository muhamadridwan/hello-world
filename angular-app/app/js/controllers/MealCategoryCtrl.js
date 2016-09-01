
function MealCategoryCtrl($scope, MealCategorySvc, DTOptionsBuilder, SweetAlert){
	$scope.mealCategory = {};
	$scope.mealCategories = [];
	$scope.editMode = false;
	$scope.addMode = false;
	
	MealCategorySvc.getAllMealCategory(function(mealCategories){
		$scope.mealCategories = mealCategories;
		console.log(mealCategories);
		$scope.$apply;
		
	});
	
	$scope.dtOptions = DTOptionsBuilder.newOptions()
        .withDOM('<"html5buttons"B>lTfgitp')
        .withButtons([]);
	
	
	$scope.cancelChanges = function(){
		$scope.editMode = false;
	};
	
	$scope.save = function(){
		MealCategorySvc.saveMealCategory($scope.mealCategory, function(mealCategory){
			if($scope.addMode)
			{
				if(mealCategory){
					$scope.mealCategories.push(mealCategory);
				}
			}
			
			$scope.editMode = false;
			$scope.addMode = false;
			
			$scope.apply;			
		});
	};
	
	$scope.addMealCategory = function(){
		$scope.mealCategory = {};
		$scope.editMode = true;
		$scope.addMode = true;
	};
	
	$scope.editMealCategory = function(mealCategory){
		$scope.mealCategory = mealCategory;
		$scope.editMode = true;
	};
	
	$scope.deleteMealCategory = function(mealCategory){
		$scope.mealCategory = mealCategory;
		SweetAlert.swal({
				title: "Are you sure?",
				text: "You will delete meal category: " + mealCategory+".",
				type: "warning",
				showCancelButton: true,
				confirmButtonColor: "#DD6B55",
				confirmButtonText: "Yes, delete it!",
				cancelButtonText: "No, cancel!",
				closeOnConfirm: false,
				closeOnCancel: true },
			function ( isConfirm) {
				if (isConfirm) {
					MealCategorySvc.deleteMealCategory(mealCategory, function(mealCategory){
						if(mealCategory){
							var index = $scope.mealCategories.indexOf($scope.mealCategory);
							$scope.mealCategories.splice(index, 1);
						}
						$scope.mealCategory = {};
						$scope.editMode = false;
						$scope.apply;
						SweetAlert.swal("Deleted!", "The meal category has been deleted.", "success");						
					});
					
				} else {
					$scope.mealCategory = {};
					$scope.editMode = false;
					$scope.apply;
				}
			});
	};
};

app.controller('MealCategoryCtrl', MealCategoryCtrl);