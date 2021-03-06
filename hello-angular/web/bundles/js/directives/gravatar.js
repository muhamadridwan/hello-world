"use strict"

app.directive("gravatar", function(gravatarUrlBuilder){
	return {
		restrtict: "E",
		template: "<img />",
		replace: true,
		link: function(scope, element, attrs, controller){
			attrs.$observe("email", function(newValue, oldValue){
				if(newValue !== oldValue){
					attrs.$set('src', gravatarUrlBuilder.buildGravatarUrlFromEmail(newValue));
				}
			});
		}
	};
});