"use strict"
app.directive("greeting", function(){
	return {
		restrict: "E",
		replace: true,
		template: "<button class='btn' ng-click='sayHello()'>Say Hello</button>",
		controller: function(){
			alert("hello");
		}
	};
});