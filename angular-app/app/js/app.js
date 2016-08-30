/**
 * INSPINIA - Responsive Admin Theme
 *
 */
 //var APIUrl = "http://172.19.11.97:5001";
 var AuthToken = "";
 
 
 var APIUrl = "http://localhost:8000";
 var app = angular.module('inspinia', [
        'ui.router',                    // Routing
        'oc.lazyLoad',                  // ocLazyLoad
        'ui.bootstrap',                 // Ui Bootstrap
        'pascalprecht.translate',       // Angular Translate
        'ngIdle',                       // Idle timer
        'ngSanitize',                   // ngSanitize
		'ngResource',
		'ngRoute'
    ]);

	
function LodashFactory($window) {  
  if(!$window._){
    // If lodash is not available you can now provide a
    // mock service, try to load it from somewhere else,
    // redirect the user to a dedicated error page, ...
  }
  return $window._;
}

// Define dependencies
LodashFactory.$inject = ['$window'];

// Register factory
app.factory('_', LodashFactory);  
//(function () {
    
//})();

// Other libraries are loaded dynamically in the config.js file using the library ocLazyLoad