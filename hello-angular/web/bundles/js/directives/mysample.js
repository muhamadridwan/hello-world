
app.directive("mysample", function(){
	return {
		restrict: "E",
		template: "<label>directive test: </label><input type='text' name='directive-test'/>"
	}
});