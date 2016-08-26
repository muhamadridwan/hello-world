/**
 * INSPINIA - Responsive Admin Theme
 *
 */
 var APIUrl = "http://172.19.11.99:5001";
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
//(function () {
    
//})();

// Other libraries are loaded dynamically in the config.js file using the library ocLazyLoad