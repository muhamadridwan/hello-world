
function MealCategoryCtrl($scope, MealCategorySvc, DTOptionsBuilder, SweetAlert){
	$scope.mealCategory = {};
	$scope.editMode = false;
	$scope.dtOptions = DTOptionsBuilder.newOptions()
        .withDOM('<"html5buttons"B>lTfgitp')
        .withButtons([
            {extend: 'copy'},
            {extend: 'csv'},
            {extend: 'excel', title: 'ExampleFile'},
            {extend: 'pdf', title: 'ExampleFile'},

            {extend: 'print',
                customize: function (win){
                    $(win.document.body).addClass('white-bg');
                    $(win.document.body).css('font-size', '10px');

                    $(win.document.body).find('table')
                        .addClass('compact')
                        .css('font-size', 'inherit');
                }
            }
        ]);
	
	MealCategorySvc.getAllMealCategory(function(mealCategories){
		$scope.mealCategories = mealCategories;
		console.log(mealCategories);
		$scope.$apply;
		
	});
	
	$scope.cancelChanges = function(){
		$scope.editMode = false;
	};
	
	$scope.save = function(){
		MealCategorySvc.saveMealCategory($scope.mealCategory, function(mealCategory){
			if(!mealCategory){
				$scope.mealCategories.push(mealCategory);
			}
			$scope.editMode = false;
			$scope.apply;			
		});
	};
	
	$scope.addMealCategory = function(){
		$scope.mealCategory = {};
		$scope.editMode = true;
	};
	
	$scope.editMealCategory = function(mealCategory){
		$scope.mealCategory = mealCategory;
		$scope.editMode = true;
	};
	
	$scope.deleteMealCategory = function(mealCategory){
		SweetAlert.swal({
				title: "Are you sure?",
				text: "You will delete meal category: " + mealCategory+".",
				type: "warning",
				showCancelButton: true,
				confirmButtonColor: "#DD6B55",
				confirmButtonText: "Yes, delete it!",
				cancelButtonText: "No, cancel!",
				closeOnConfirm: false,
				closeOnCancel: false },
			function (isConfirm) {
				if (isConfirm) {
					MealCategorySvc.deleteMealCategory(mealCategory, function(mealCategory){
						if(!mealCategory){
							var index = $scope.mealCategories.indexOf(items);
							delete $scope.mealCategories[index];
							//$scope.mealCategories.push(mealCategory);
						}
						$scope.editMode = false;
						$scope.apply;			
					});
					SweetAlert.swal("Deleted!", "The meal category has been deleted.", "success");
				} else {
					$scope.editMode = false;
					$scope.apply;
				}
			});
	};
};

app.controller('MealCategoryCtrl', MealCategoryCtrl);