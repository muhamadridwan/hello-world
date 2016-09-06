
function MealCtrl($scope, MealSvc, DTOptionsBuilder, SweetAlert){
	$scope.mealTemp = {};
	$scope.meals = [];
	$scope.editMode = false;
	$scope.addMode = false;
	
	MealCategorySvc.getAllMealCategory(function(data, status, headers, config){
		$scope.mealCategories = data;
		$scope.$apply;
		
	});
	
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

app.controller('MealCtrl', MealCtrl);