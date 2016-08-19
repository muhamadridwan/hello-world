"use strict"

app.directive("datekeys", function(){

	return {
		restrict: "A",
		link : function(scope, element, attrs, controller){
			element.on("keydown",function(event){
				if(isNumericKeyCode(event.keyCode) || isForwardSlashKeyCode(event.keyCode) || isNavigationKeyCode(event.keyCode)){
					return true;
				}
				return false;
			});
		}
	};

	function isNumericKeyCode(keyCode){
		return (keyCode >= 48 && keyCode <=57) ||
				(keyCode >= 96 && keyCode <= 105);
	}

	function isForwardSlashKeyCode(keyCode){
		return keyCode === 191;
	}

	function isNavigationKeyCode(keyCode){
		switch(keyCode){
			case 8:
			case 35:
			case 36:
			case 37:
			case 38:
			case 39:
			case 40:
			case 45:
			case 46:
				return true;
			default:
				return false;
		}
	}

});