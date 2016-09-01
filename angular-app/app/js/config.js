/**
 * INSPINIA - Responsive Admin Theme
 *
 * Inspinia theme use AngularUI Router to manage routing and views
 * Each view are defined as state.
 * Initial there are written state for all view in theme.
 *
 */
function config($stateProvider, $urlRouterProvider, $ocLazyLoadProvider, IdleProvider, KeepaliveProvider) {

    // Configure Idle settings
    IdleProvider.idle(5); // in seconds
    IdleProvider.timeout(120); // in seconds

    $urlRouterProvider.otherwise("/login");

    $ocLazyLoadProvider.config({
        // Set to true if you want to see what and when is dynamically loaded
        debug: false
    });

    $stateProvider
		.state('login', {
            url: "/login",
            templateUrl: "views/authorization/login.html",
			data: { pageTitle: 'Login', specialClass: 'gray-bg' },
			resolve: {
                loadPlugin: function ($ocLazyLoad) {
                    return $ocLazyLoad.load([
                        {
                            files: ['js/lib/plugins/sweetalert/sweetalert.min.js', 'css/plugins/sweetalert/sweetalert.css']
                        },
                        {
                            name: 'oitozero.ngSweetAlert',
                            files: ['js/lib/plugins/sweetalert/angular-sweetalert.min.js']
                        }
                    ]);
                }
            }
        })
		// .state('login', {
            // url: "/login",
            // templateUrl: "views/login.html",
            // data: { pageTitle: 'Login', specialClass: 'gray-bg' }
        // })
        .state('login_two_columns', {
            url: "/login_two_columns",
            templateUrl: "views/login_two_columns.html",
            data: { pageTitle: 'Login two columns', specialClass: 'gray-bg' }
        })
		.state('configuration', {
            abstract: true,
            url: "/configuration",
            templateUrl: "views/common/content.html",
			data: {
			  authorization: false,
			  redirectTo: 'login',
			  memory: true
			}
        })
        .state('configuration.meal_category', {
            url: "/meal_category",
			controller: MealCategoryCtrl,
            templateUrl: "views/configuration/meal_category/meal_category.html",
			data: {
			  authorization: true,
			  redirectTo: 'login',
			  memory: true
			},
			resolve: {
                loadPlugin: function ($ocLazyLoad) {
                    return $ocLazyLoad.load([
                        {
                            serie: true,
                            files: ['js/lib/plugins/dataTables/datatables.min.js','css/plugins/dataTables/datatables.min.css']
                        },
                        {
                            serie: true,
                            name: 'datatables',
                            files: ['js/lib/plugins/dataTables/angular-datatables.min.js']
                        },
                        {
                            serie: true,
                            name: 'datatables.buttons',
                            files: ['js/lib/plugins/dataTables/angular-datatables.buttons.min.js']
                        }
                    ]);
                }
            }
        })
        .state('dashboards', {
            abstract: true,
            url: "/dashboards",
            templateUrl: "views/common/content.html",
        })
        .state('dashboards.dashboard_1', {
            url: "/dashboard_1",
            templateUrl: "views/dashboard_1.html",
            resolve: {
                loadPlugin: function ($ocLazyLoad) {
                    return $ocLazyLoad.load([
                        {

                            serie: true,
                            name: 'angular-flot',
                            files: [ 'js/lib/plugins/flot/jquery.flot.js', 'js/lib/plugins/flot/jquery.flot.time.js', 'js/lib/plugins/flot/jquery.flot.tooltip.min.js', 'js/lib/plugins/flot/jquery.flot.spline.js', 'js/lib/plugins/flot/jquery.flot.resize.js', 'js/lib/plugins/flot/jquery.flot.pie.js', 'js/lib/plugins/flot/curvedLines.js', 'js/lib/plugins/flot/angular-flot.js', ]
                        },
                        {
                            name: 'angles',
                            files: ['js/lib/plugins/chartJs/angles.js', 'js/lib/plugins/chartJs/Chart.min.js']
                        },
                        {
                            name: 'angular-peity',
                            files: ['js/lib/plugins/peity/jquery.peity.min.js', 'js/lib/plugins/peity/angular-peity.js']
                        }
                    ]);
                }
            }
        })
        .state('dashboards.dashboard_2', {
            url: "/dashboard_2",
            templateUrl: "views/dashboard_2.html",
            data: { pageTitle: 'Dashboard 2' },
            resolve: {
                loadPlugin: function ($ocLazyLoad) {
                    return $ocLazyLoad.load([
                        {
                            serie: true,
                            name: 'angular-flot',
                            files: [ 'js/lib/plugins/flot/jquery.flot.js', 'js/lib/plugins/flot/jquery.flot.time.js', 'js/lib/plugins/flot/jquery.flot.tooltip.min.js', 'js/lib/plugins/flot/jquery.flot.spline.js', 'js/lib/plugins/flot/jquery.flot.resize.js', 'js/lib/plugins/flot/jquery.flot.pie.js', 'js/lib/plugins/flot/curvedLines.js', 'js/lib/plugins/flot/angular-flot.js', ]
                        },
                        {
                            serie: true,
                            files: ['js/lib/plugins/jvectormap/jquery-jvectormap-2.0.2.min.js', 'js/lib/plugins/jvectormap/jquery-jvectormap-2.0.2.css']
                        },
                        {
                            serie: true,
                            files: ['js/lib/plugins/jvectormap/jquery-jvectormap-world-mill-en.js']
                        },
                        {
                            name: 'ui.checkbox',
                            files: ['js/bootstrap/angular-bootstrap-checkbox.js']
                        }
                    ]);
                }
            }
        })
        .state('dashboards.dashboard_3', {
            url: "/dashboard_3",
            templateUrl: "views/dashboard_3.html",
            data: { pageTitle: 'Dashboard 3' },
            resolve: {
                loadPlugin: function ($ocLazyLoad) {
                    return $ocLazyLoad.load([
                        {
                            name: 'angles',
                            files: ['js/lib/plugins/chartJs/angles.js', 'js/lib/plugins/chartJs/Chart.min.js']
                        },
                        {
                            name: 'angular-peity',
                            files: ['js/lib/plugins/peity/jquery.peity.min.js', 'js/lib/plugins/peity/angular-peity.js']
                        },
                        {
                            name: 'ui.checkbox',
                            files: ['js/bootstrap/angular-bootstrap-checkbox.js']
                        }
                    ]);
                }
            }
        })
        .state('dashboards_top', {
            abstract: true,
            url: "/dashboards_top",
            templateUrl: "views/common/content_top_navigation.html",
        })
        .state('dashboards_top.dashboard_4', {
            url: "/dashboard_4",
            templateUrl: "views/dashboard_4.html",
            data: { pageTitle: 'Dashboard 4' },
            resolve: {
                loadPlugin: function ($ocLazyLoad) {
                    return $ocLazyLoad.load([
                        {
                            name: 'angles',
                            files: ['js/lib/plugins/chartJs/angles.js', 'js/lib/plugins/chartJs/Chart.min.js']
                        },
                        {
                            name: 'angular-peity',
                            files: ['js/lib/plugins/peity/jquery.peity.min.js', 'js/lib/plugins/peity/angular-peity.js']
                        },
                        {
                            serie: true,
                            name: 'angular-flot',
                            files: [ 'js/lib/plugins/flot/jquery.flot.js', 'js/lib/plugins/flot/jquery.flot.time.js', 'js/lib/plugins/flot/jquery.flot.tooltip.min.js', 'js/lib/plugins/flot/jquery.flot.spline.js', 'js/lib/plugins/flot/jquery.flot.resize.js', 'js/lib/plugins/flot/jquery.flot.pie.js', 'js/lib/plugins/flot/curvedLines.js', 'js/lib/plugins/flot/angular-flot.js', ]
                        }
                    ]);
                }
            }
        })
        .state('dashboards.dashboard_4_1', {
            url: "/dashboard_4_1",
            templateUrl: "views/dashboard_4_1.html",
            data: { pageTitle: 'Dashboard 4' },
            resolve: {
                loadPlugin: function ($ocLazyLoad) {
                    return $ocLazyLoad.load([
                        {
                            name: 'angles',
                            files: ['js/lib/plugins/chartJs/angles.js', 'js/lib/plugins/chartJs/Chart.min.js']
                        },
                        {
                            name: 'angular-peity',
                            files: ['js/lib/plugins/peity/jquery.peity.min.js', 'js/lib/plugins/peity/angular-peity.js']
                        },
                        {
                            serie: true,
                            name: 'angular-flot',
                            files: [ 'js/lib/plugins/flot/jquery.flot.js', 'js/lib/plugins/flot/jquery.flot.time.js', 'js/lib/plugins/flot/jquery.flot.tooltip.min.js', 'js/lib/plugins/flot/jquery.flot.spline.js', 'js/lib/plugins/flot/jquery.flot.resize.js', 'js/lib/plugins/flot/jquery.flot.pie.js', 'js/lib/plugins/flot/curvedLines.js', 'js/lib/plugins/flot/angular-flot.js', ]
                        }
                    ]);
                }
            }
        })
        .state('dashboards.dashboard_5', {
            url: "/dashboard_5",
            templateUrl: "views/dashboard_5.html",
            data: { pageTitle: 'Dashboard 5' },
            resolve: {
                loadPlugin: function ($ocLazyLoad) {
                    return $ocLazyLoad.load([
                        {
                            serie: true,
                            name: 'angular-flot',
                            files: [ 'js/lib/plugins/flot/jquery.flot.js', 'js/lib/plugins/flot/jquery.flot.time.js', 'js/lib/plugins/flot/jquery.flot.tooltip.min.js', 'js/lib/plugins/flot/jquery.flot.spline.js', 'js/lib/plugins/flot/jquery.flot.resize.js', 'js/lib/plugins/flot/jquery.flot.pie.js', 'js/lib/plugins/flot/curvedLines.js', 'js/lib/plugins/flot/angular-flot.js', ]
                        },
                        {
                            files: ['js/lib/plugins/sparkline/jquery.sparkline.min.js']
                        }
                    ]);
                }
            }
        })
        .state('layouts', {
            url: "/layouts",
            templateUrl: "views/layouts.html",
            data: { pageTitle: 'Layouts' },
        })
        .state('charts', {
            abstract: true,
            url: "/charts",
            templateUrl: "views/common/content.html",
        })
        .state('charts.flot_chart', {
            url: "/flot_chart",
            templateUrl: "views/graph_flot.html",
            data: { pageTitle: 'Flot chart' },
            resolve: {
                loadPlugin: function ($ocLazyLoad) {
                    return $ocLazyLoad.load([
                        {
                            serie: true,
                            name: 'angular-flot',
                            files: [ 'js/lib/plugins/flot/jquery.flot.js', 'js/lib/plugins/flot/jquery.flot.time.js', 'js/lib/plugins/flot/jquery.flot.tooltip.min.js', 'js/lib/plugins/flot/jquery.flot.spline.js', 'js/lib/plugins/flot/jquery.flot.resize.js', 'js/lib/plugins/flot/jquery.flot.pie.js', 'js/lib/plugins/flot/curvedLines.js', 'js/lib/plugins/flot/angular-flot.js', ]
                        }
                    ]);
                }
            }
        })
        .state('charts.rickshaw_chart', {
            url: "/rickshaw_chart",
            templateUrl: "views/graph_rickshaw.html",
            data: { pageTitle: 'Rickshaw chart' },
            resolve: {
                loadPlugin: function ($ocLazyLoad) {
                    return $ocLazyLoad.load([
                        {
                            reconfig: true,
                            serie: true,
                            files: ['js/lib/plugins/rickshaw/vendor/d3.v3.js','js/lib/plugins/rickshaw/rickshaw.min.js']
                        },
                        {
                            reconfig: true,
                            name: 'angular-rickshaw',
                            files: ['js/lib/plugins/rickshaw/angular-rickshaw.js']
                        }
                    ]);
                }
            }
        })
        .state('charts.peity_chart', {
            url: "/peity_chart",
            templateUrl: "views/graph_peity.html",
            data: { pageTitle: 'Peity graphs' },
            resolve: {
                loadPlugin: function ($ocLazyLoad) {
                    return $ocLazyLoad.load([
                        {
                            name: 'angular-peity',
                            files: ['js/lib/plugins/peity/jquery.peity.min.js', 'js/lib/plugins/peity/angular-peity.js']
                        }
                    ]);
                }
            }
        })
        .state('charts.sparkline_chart', {
            url: "/sparkline_chart",
            templateUrl: "views/graph_sparkline.html",
            data: { pageTitle: 'Sparkline chart' },
            resolve: {
                loadPlugin: function ($ocLazyLoad) {
                    return $ocLazyLoad.load([
                        {
                            files: ['js/lib/plugins/sparkline/jquery.sparkline.min.js']
                        }
                    ]);
                }
            }
        })
        .state('charts.chartjs_chart', {
            url: "/chartjs_chart",
            templateUrl: "views/chartjs.html",
            data: { pageTitle: 'Chart.js' },
            resolve: {
                loadPlugin: function ($ocLazyLoad) {
                    return $ocLazyLoad.load([
                        {
                            files: ['js/lib/plugins/chartJs/Chart.min.js']
                        },
                        {
                            name: 'angles',
                            files: ['js/lib/plugins/chartJs/angles.js']
                        }
                    ]);
                }
            }
        })
        .state('charts.chartist_chart', {
            url: "/chartist_chart",
            templateUrl: "views/chartist.html",
            data: { pageTitle: 'Chartist' },
            resolve: {
                loadPlugin: function ($ocLazyLoad) {
                    return $ocLazyLoad.load([
                        {
                            serie: true,
                            name: 'angular-chartist',
                            files: ['js/lib/plugins/chartist/chartist.min.js', 'css/plugins/chartist/chartist.min.css', 'js/lib/plugins/chartist/angular-chartist.min.js']
                        }
                    ]);
                }
            }
        })
        .state('charts.c3charts', {
            url: "/c3charts",
            templateUrl: "views/c3charts.html",
            data: { pageTitle: 'c3charts' },
            resolve: {
                loadPlugin: function ($ocLazyLoad) {
                    return $ocLazyLoad.load([
                        {
                            serie: true,
                            files: ['css/plugins/c3/c3.min.css', 'js/lib/plugins/d3/d3.min.js', 'js/lib/plugins/c3/c3.min.js']
                        },
                        {
                            serie: true,
                            name: 'gridshore.c3js.chart',
                            files: ['js/lib/plugins/c3/c3-angular.min.js']
                        }
                    ]);
                }
            }
        })
        .state('mailbox', {
            abstract: true,
            url: "/mailbox",
            templateUrl: "views/common/content.html",
        })
        .state('mailbox.inbox', {
            url: "/inbox",
            templateUrl: "views/mailbox.html",
            data: { pageTitle: 'Mail Inbox' },
            resolve: {
                loadPlugin: function ($ocLazyLoad) {
                    return $ocLazyLoad.load([
                        {
                            files: ['css/plugins/iCheck/custom.css','js/lib/plugins/iCheck/icheck.min.js']
                        }
                    ]);
                }
            }
        })
        .state('mailbox.email_view', {
            url: "/email_view",
            templateUrl: "views/mail_detail.html",
            data: { pageTitle: 'Mail detail' }
        })
        .state('mailbox.email_compose', {
            url: "/email_compose",
            templateUrl: "views/mail_compose.html",
            data: { pageTitle: 'Mail compose' },
            resolve: {
                loadPlugin: function ($ocLazyLoad) {
                    return $ocLazyLoad.load([
                        {
                            files: ['css/plugins/summernote/summernote.css','css/plugins/summernote/summernote-bs3.css','js/lib/plugins/summernote/summernote.min.js']
                        },
                        {
                            name: 'summernote',
                            files: ['css/plugins/summernote/summernote.css','css/plugins/summernote/summernote-bs3.css','js/lib/plugins/summernote/summernote.min.js','js/lib/plugins/summernote/angular-summernote.min.js']
                        }
                    ]);
                }
            }
        })
        .state('mailbox.email_template', {
            url: "/email_template",
            templateUrl: "views/email_template.html",
            data: { pageTitle: 'Mail compose' }
        })
        .state('widgets', {
            url: "/widgets",
            templateUrl: "views/widgets.html",
            data: { pageTitle: 'Widhets' },
            resolve: {
                loadPlugin: function ($ocLazyLoad) {
                    return $ocLazyLoad.load([
                        {
                            serie: true,
                            name: 'angular-flot',
                            files: [ 'js/lib/plugins/flot/jquery.flot.js', 'js/lib/plugins/flot/jquery.flot.time.js', 'js/lib/plugins/flot/jquery.flot.tooltip.min.js', 'js/lib/plugins/flot/jquery.flot.spline.js', 'js/lib/plugins/flot/jquery.flot.resize.js', 'js/lib/plugins/flot/jquery.flot.pie.js', 'js/lib/plugins/flot/curvedLines.js', 'js/lib/plugins/flot/angular-flot.js', ]
                        },
                        {
                            files: ['css/plugins/iCheck/custom.css','js/lib/plugins/iCheck/icheck.min.js']
                        },
                        {
                            serie: true,
                            files: ['js/lib/plugins/jvectormap/jquery-jvectormap-2.0.2.min.js', 'js/lib/plugins/jvectormap/jquery-jvectormap-2.0.2.css']
                        },
                        {
                            serie: true,
                            files: ['js/lib/plugins/jvectormap/jquery-jvectormap-world-mill-en.js']
                        },
                        {
                            name: 'ui.checkbox',
                            files: ['js/bootstrap/angular-bootstrap-checkbox.js']
                        }
                    ]);
                }
            }
        })
        .state('metrics', {
            url: "/metrics",
            templateUrl: "views/metrics.html",
            data: { pageTitle: 'Metrics' },
            resolve: {
                loadPlugin: function ($ocLazyLoad) {
                    return $ocLazyLoad.load([
                        {
                            files: ['js/lib/plugins/sparkline/jquery.sparkline.min.js']
                        }
                    ]);
                }
            }
        })
        .state('forms', {
            abstract: true,
            url: "/forms",
            templateUrl: "views/common/content.html",
        })
        .state('forms.basic_form', {
            url: "/basic_form",
            templateUrl: "views/form_basic.html",
            data: { pageTitle: 'Basic form' },
            resolve: {
                loadPlugin: function ($ocLazyLoad) {
                    return $ocLazyLoad.load([
                        {
                            files: ['css/plugins/iCheck/custom.css','js/lib/plugins/iCheck/icheck.min.js']
                        }
                    ]);
                }
            }
        })
        .state('forms.advanced_plugins', {
            url: "/advanced_plugins",
            templateUrl: "views/form_advanced.html",
            data: { pageTitle: 'Advanced form' },
            resolve: {
                loadPlugin: function ($ocLazyLoad) {
                    return $ocLazyLoad.load([
                        {
                            files: ['js/lib/plugins/moment/moment.min.js']
                        },
                        {
                            name: 'ui.knob',
                            files: ['js/lib/plugins/jsKnob/jquery.knob.js','js/lib/plugins/jsKnob/angular-knob.js']
                        },
                        {
                            files: ['css/plugins/ionRangeSlider/ion.rangeSlider.css','css/plugins/ionRangeSlider/ion.rangeSlider.skinFlat.css','js/lib/plugins/ionRangeSlider/ion.rangeSlider.min.js']
                        },
                        {
                            insertBefore: '#loadBefore',
                            name: 'localytics.directives',
                            files: ['css/plugins/chosen/chosen.css','js/lib/plugins/chosen/chosen.jquery.js','js/lib/plugins/chosen/chosen.js']
                        },
                        {
                            name: 'nouislider',
                            files: ['css/plugins/nouslider/jquery.nouislider.css','js/lib/plugins/nouslider/jquery.nouislider.min.js','js/lib/plugins/nouslider/angular-nouislider.js']
                        },
                        {
                            name: 'datePicker',
                            files: ['css/plugins/datapicker/angular-datapicker.css','js/lib/plugins/datapicker/angular-datepicker.js']
                        },
                        {
                            files: ['js/lib/plugins/jasny/jasny-bootstrap.min.js']
                        },
                        {
                            files: ['css/plugins/clockpicker/clockpicker.css', 'js/lib/plugins/clockpicker/clockpicker.js']
                        },
                        {
                            name: 'ui.switchery',
                            files: ['css/plugins/switchery/switchery.css','js/lib/plugins/switchery/switchery.js','js/lib/plugins/switchery/ng-switchery.js']
                        },
                        {
                            name: 'colorpicker.module',
                            files: ['css/plugins/colorpicker/colorpicker.css','js/lib/plugins/colorpicker/bootstrap-colorpicker-module.js']
                        },
                        {
                            name: 'ngImgCrop',
                            files: ['js/lib/plugins/ngImgCrop/ng-img-crop.js','css/plugins/ngImgCrop/ng-img-crop.css']
                        },
                        {
                            serie: true,
                            files: ['js/lib/plugins/daterangepicker/daterangepicker.js', 'css/plugins/daterangepicker/daterangepicker-bs3.css']
                        },
                        {
                            name: 'daterangepicker',
                            files: ['js/lib/plugins/daterangepicker/angular-daterangepicker.js']
                        },
                        {
                            files: ['css/plugins/awesome-bootstrap-checkbox/awesome-bootstrap-checkbox.css']
                        },
                        {
                            name: 'ui.select',
                            files: ['js/lib/plugins/ui-select/select.min.js', 'css/plugins/ui-select/select.min.css']
                        },
                        {
                            files: ['css/plugins/touchspin/jquery.bootstrap-touchspin.min.css', 'js/lib/plugins/touchspin/jquery.bootstrap-touchspin.min.js']
                        }

                    ]);
                }
            }
        })
        .state('forms.wizard', {
            url: "/wizard",
            templateUrl: "views/form_wizard.html",
            controller: wizardCtrl,
            data: { pageTitle: 'Wizard form' },
            resolve: {
                loadPlugin: function ($ocLazyLoad) {
                    return $ocLazyLoad.load([
                        {
                            files: ['css/plugins/steps/jquery.steps.css']
                        }
                    ]);
                }
            }
        })
        .state('forms.wizard.step_one', {
            url: '/step_one',
            templateUrl: 'views/wizard/step_one.html',
            data: { pageTitle: 'Wizard form' }
        })
        .state('forms.wizard.step_two', {
            url: '/step_two',
            templateUrl: 'views/wizard/step_two.html',
            data: { pageTitle: 'Wizard form' }
        })
        .state('forms.wizard.step_three', {
            url: '/step_three',
            templateUrl: 'views/wizard/step_three.html',
            data: { pageTitle: 'Wizard form' }
        })
        .state('forms.file_upload', {
            url: "/file_upload",
            templateUrl: "views/form_file_upload.html",
            data: { pageTitle: 'File upload' },
            resolve: {
                loadPlugin: function ($ocLazyLoad) {
                    return $ocLazyLoad.load([
                        {
                            files: ['css/plugins/dropzone/basic.css','css/plugins/dropzone/dropzone.css','js/lib/plugins/dropzone/dropzone.js']
                        }
                    ]);
                }
            }
        })
        .state('forms.text_editor', {
            url: "/text_editor",
            templateUrl: "views/form_editors.html",
            data: { pageTitle: 'Text editor' },
            resolve: {
                loadPlugin: function ($ocLazyLoad) {
                    return $ocLazyLoad.load([
                        {
                            name: 'summernote',
                            files: ['css/plugins/summernote/summernote.css','css/plugins/summernote/summernote-bs3.css','js/lib/plugins/summernote/summernote.min.js','js/lib/plugins/summernote/angular-summernote.min.js']
                        }
                    ]);
                }
            }
        })
        .state('forms.markdown', {
            url: "/markdown",
            templateUrl: "views/markdown.html",
            data: { pageTitle: 'Markdown' },
            resolve: {
                loadPlugin: function ($ocLazyLoad) {
                    return $ocLazyLoad.load([
                        {
                            serie: true,
                            files: ['js/lib/plugins/bootstrap-markdown/bootstrap-markdown.js','js/lib/plugins/bootstrap-markdown/markdown.js','css/plugins/bootstrap-markdown/bootstrap-markdown.min.css']
                        }
                    ]);
                }
            }
        })
        .state('app', {
            abstract: true,
            url: "/app",
            templateUrl: "views/common/content.html",
        })
        .state('app.contacts', {
            url: "/contacts",
            templateUrl: "views/contacts.html",
            data: { pageTitle: 'Contacts' }
        })
        .state('app.contacts_2', {
            url: "/contacts_2",
            templateUrl: "views/contacts_2.html",
            data: { pageTitle: 'Contacts 2' }
        })
        .state('app.profile', {
            url: "/profile",
            templateUrl: "views/profile.html",
            data: { pageTitle: 'Profile' }
        })
        .state('app.profile_2', {
            url: "/profile_2",
            templateUrl: "views/profile_2.html",
            data: { pageTitle: 'Profile_2'},
            resolve: {
                loadPlugin: function ($ocLazyLoad) {
                    return $ocLazyLoad.load([
                        {
                            files: ['js/lib/plugins/sparkline/jquery.sparkline.min.js']
                        }
                    ]);
                }
            }
        })
        .state('app.projects', {
            url: "/projects",
            templateUrl: "views/projects.html",
            data: { pageTitle: 'Projects' }
        })
        .state('app.project_detail', {
            url: "/project_detail",
            templateUrl: "views/project_detail.html",
            data: { pageTitle: 'Project detail' }
        })
        .state('app.file_manager', {
            url: "/file_manager",
            templateUrl: "views/file_manager.html",
            data: { pageTitle: 'File manager' }
        })
        .state('app.calendar', {
            url: "/calendar",
            templateUrl: "views/calendar.html",
            data: { pageTitle: 'Calendar' },
            resolve: {
                loadPlugin: function ($ocLazyLoad) {
                    return $ocLazyLoad.load([
                        {
                            insertBefore: '#loadBefore',
                            files: ['css/plugins/fullcalendar/fullcalendar.css','js/lib/plugins/fullcalendar/fullcalendar.min.js','js/lib/plugins/fullcalendar/gcal.js']
                        },
                        {
                            name: 'ui.calendar',
                            files: ['js/lib/plugins/fullcalendar/calendar.js']
                        }
                    ]);
                }
            }
        })
        .state('app.faq', {
            url: "/faq",
            templateUrl: "views/faq.html",
            data: { pageTitle: 'FAQ' }
        })
        .state('app.timeline', {
            url: "/timeline",
            templateUrl: "views/timeline.html",
            data: { pageTitle: 'Timeline' }
        })
        .state('app.pin_board', {
            url: "/pin_board",
            templateUrl: "views/pin_board.html",
            data: { pageTitle: 'Pin board' }
        })
        .state('app.invoice', {
            url: "/invoice",
            templateUrl: "views/invoice.html",
            data: { pageTitle: 'Invoice' }
        })
        .state('app.blog', {
            url: "/blog",
            templateUrl: "views/blog.html",
            data: { pageTitle: 'Blog' }
        })
        .state('app.article', {
            url: "/article",
            templateUrl: "views/article.html",
            data: { pageTitle: 'Article' }
        })
        .state('app.issue_tracker', {
            url: "/issue_tracker",
            templateUrl: "views/issue_tracker.html",
            data: { pageTitle: 'Issue Tracker' }
        })
        .state('app.clients', {
            url: "/clients",
            templateUrl: "views/clients.html",
            data: { pageTitle: 'Clients' }
        })
        .state('app.teams_board', {
            url: "/teams_board",
            templateUrl: "views/teams_board.html",
            data: { pageTitle: 'Teams board' }
        })
        .state('app.social_feed', {
            url: "/social_feed",
            templateUrl: "views/social_feed.html",
            data: { pageTitle: 'Social feed' }
        })
        .state('app.vote_list', {
            url: "/vote_list",
            templateUrl: "views/vote_list.html",
            data: { pageTitle: 'Vote list' }
        })
        .state('pages', {
            abstract: true,
            url: "/pages",
            templateUrl: "views/common/content.html"
        })
        .state('pages.search_results', {
            url: "/search_results",
            templateUrl: "views/search_results.html",
            data: { pageTitle: 'Search results' }
        })
        .state('pages.empy_page', {
            url: "/empy_page",
            templateUrl: "views/empty_page.html",
            data: { pageTitle: 'Empty page' }
        })
        
        .state('register', {
            url: "/register",
            templateUrl: "views/register.html",
            data: { pageTitle: 'Register', specialClass: 'gray-bg' }
        })
        .state('lockscreen', {
            url: "/lockscreen",
            templateUrl: "views/lockscreen.html",
            data: { pageTitle: 'Lockscreen', specialClass: 'gray-bg' }
        })
        .state('forgot_password', {
            url: "/forgot_password",
            templateUrl: "views/forgot_password.html",
            data: { pageTitle: 'Forgot password', specialClass: 'gray-bg' }
        })
        .state('errorOne', {
            url: "/errorOne",
            templateUrl: "views/errorOne.html",
            data: { pageTitle: '404', specialClass: 'gray-bg' }
        })
        .state('errorTwo', {
            url: "/errorTwo",
            templateUrl: "views/errorTwo.html",
            data: { pageTitle: '500', specialClass: 'gray-bg' }
        })
        .state('ui', {
            abstract: true,
            url: "/ui",
            templateUrl: "views/common/content.html",
        })
        .state('ui.typography', {
            url: "/typography",
            templateUrl: "views/typography.html",
            data: { pageTitle: 'Typography' }
        })
        .state('ui.icons', {
            url: "/icons",
            templateUrl: "views/icons.html",
            data: { pageTitle: 'Icons' }
        })
        .state('ui.buttons', {
            url: "/buttons",
            templateUrl: "views/buttons.html",
            data: { pageTitle: 'Buttons' }
        })
        .state('ui.tabs_panels', {
            url: "/tabs_panels",
            templateUrl: "views/tabs_panels.html",
            data: { pageTitle: 'Panels' }
        })
        .state('ui.tabs', {
            url: "/tabs",
            templateUrl: "views/tabs.html",
            data: { pageTitle: 'Tabs' }
        })
        .state('ui.notifications_tooltips', {
            url: "/notifications_tooltips",
            templateUrl: "views/notifications.html",
            data: { pageTitle: 'Notifications and tooltips' }
        })
        .state('ui.badges_labels', {
            url: "/badges_labels",
            templateUrl: "views/badges_labels.html",
            data: { pageTitle: 'Badges and labels and progress' }
        })
        .state('ui.video', {
            url: "/video",
            templateUrl: "views/video.html",
            data: { pageTitle: 'Responsible Video' }
        })
        .state('ui.draggable', {
            url: "/draggable",
            templateUrl: "views/draggable.html",
            data: { pageTitle: 'Draggable panels' },
            resolve: {
                loadPlugin: function ($ocLazyLoad) {
                    return $ocLazyLoad.load([
                        {
                            name: 'ui.sortable',
                            files: ['js/lib/plugins/ui-sortable/sortable.js']
                        }
                    ]);
                }
            }
        })
        .state('grid_options', {
            url: "/grid_options",
            templateUrl: "views/grid_options.html",
            data: { pageTitle: 'Grid options' }
        })
        .state('miscellaneous', {
            abstract: true,
            url: "/miscellaneous",
            templateUrl: "views/common/content.html",
        })
        .state('miscellaneous.google_maps', {
            url: "/google_maps",
            templateUrl: "views/google_maps.html",
            data: { pageTitle: 'Google maps' },
            resolve: {
                loadPlugin: function ($ocLazyLoad) {
                    return $ocLazyLoad.load([
                        {
                            name: 'ui.event',
                            files: ['js/lib/plugins/uievents/event.js']
                        },
                        {
                            name: 'ui.map',
                            files: ['js/lib/plugins/uimaps/ui-map.js']
                        },
                    ]);
                }
            }
        })
        .state('miscellaneous.code_editor', {
            url: "/code_editor",
            templateUrl: "views/code_editor.html",
            data: { pageTitle: 'Code Editor' },
            resolve: {
                loadPlugin: function ($ocLazyLoad) {
                    return $ocLazyLoad.load([
                        {
                            serie: true,
                            files: ['css/plugins/codemirror/codemirror.css','css/plugins/codemirror/ambiance.css','js/lib/plugins/codemirror/codemirror.js','js/lib/plugins/codemirror/mode/javascript/javascript.js']
                        },
                        {
                            name: 'ui.codemirror',
                            files: ['js/lib/plugins/ui-codemirror/ui-codemirror.min.js']
                        }
                    ]);
                }
            }
        })
        .state('miscellaneous.modal_window', {
            url: "/modal_window",
            templateUrl: "views/modal_window.html",
            data: { pageTitle: 'Modal window' }
        })
        .state('miscellaneous.chat_view', {
            url: "/chat_view",
            templateUrl: "views/chat_view.html",
            data: { pageTitle: 'Chat view' }
        })
        .state('miscellaneous.nestable_list', {
            url: "/nestable_list",
            templateUrl: "views/nestable_list.html",
            data: { pageTitle: 'Nestable List' },
            resolve: {
                loadPlugin: function ($ocLazyLoad) {
                    return $ocLazyLoad.load([
                        {
                            name: 'ui.tree',
                            files: ['css/plugins/uiTree/angular-ui-tree.min.css','js/lib/plugins/uiTree/angular-ui-tree.min.js']
                        },
                    ]);
                }
            }
        })
        .state('miscellaneous.notify', {
            url: "/notify",
            templateUrl: "views/notify.html",
            data: { pageTitle: 'Notifications for angularJS' },
            resolve: {
                loadPlugin: function ($ocLazyLoad) {
                    return $ocLazyLoad.load([
                        {
                            name: 'cgNotify',
                            files: ['css/plugins/angular-notify/angular-notify.min.css','js/lib/plugins/angular-notify/angular-notify.min.js']
                        }
                    ]);
                }
            }
        })
        .state('miscellaneous.timeline_2', {
            url: "/timeline_2",
            templateUrl: "views/timeline_2.html",
            data: { pageTitle: 'Timeline version 2' }
        })
        .state('miscellaneous.forum_view', {
            url: "/forum_view",
            templateUrl: "views/forum_view.html",
            data: { pageTitle: 'Forum - general view' }
        })
        .state('miscellaneous.forum_post_view', {
            url: "/forum_post_view",
            templateUrl: "views/forum_post_view.html",
            data: { pageTitle: 'Forum - post view' }
        })
        .state('miscellaneous.diff', {
            url: "/diff",
            templateUrl: "views/diff.html",
            data: { pageTitle: 'Text Diff' },
            resolve: {
                loadPlugin: function ($ocLazyLoad) {
                    return $ocLazyLoad.load([
                        {
                            files: ['js/lib/plugins/diff_match_patch/javascript/diff_match_patch.js']
                        },
                        {
                            name: 'diff-match-patch',
                            files: ['js/lib/plugins/angular-diff-match-patch/angular-diff-match-patch.js']
                        }
                    ]);
                }
            }
        })
        .state('miscellaneous.sweet_alert', {
            url: "/sweet_alert",
            templateUrl: "views/sweet_alert.html",
            data: { pageTitle: 'Sweet alert' },
            resolve: {
                loadPlugin: function ($ocLazyLoad) {
                    return $ocLazyLoad.load([
                        {
                            files: ['js/lib/plugins/sweetalert/sweetalert.min.js', 'css/plugins/sweetalert/sweetalert.css']
                        },
                        {
                            name: 'oitozero.ngSweetAlert',
                            files: ['js/lib/plugins/sweetalert/angular-sweetalert.min.js']
                        }
                    ]);
                }
            }
        })
        .state('miscellaneous.idle_timer', {
            url: "/idle_timer",
            templateUrl: "views/idle_timer.html",
            data: { pageTitle: 'Idle timer' },
            resolve: {
                loadPlugin: function ($ocLazyLoad) {
                    return $ocLazyLoad.load([
                        {
                            name: 'cgNotify',
                            files: ['css/plugins/angular-notify/angular-notify.min.css','js/lib/plugins/angular-notify/angular-notify.min.js']
                        }
                    ]);
                }
            }
        })
        .state('miscellaneous.live_favicon', {
            url: "/live_favicon",
            templateUrl: "views/live_favicon.html",
            data: { pageTitle: 'Live favicon' },
            resolve: {
                loadPlugin: function ($ocLazyLoad) {
                    return $ocLazyLoad.load([
                        {
                            files: ['js/lib/plugins/tinycon/tinycon.min.js']
                        }
                    ]);
                }
            }
        })
        .state('miscellaneous.spinners', {
            url: "/spinners",
            templateUrl: "views/spinners.html",
            data: { pageTitle: 'Spinners' }
        })
        .state('miscellaneous.validation', {
            url: "/validation",
            templateUrl: "views/validation.html",
            data: { pageTitle: 'Validation' }
        })
        .state('miscellaneous.agile_board', {
            url: "/agile_board",
            templateUrl: "views/agile_board.html",
            data: { pageTitle: 'Agile board' },
            resolve: {
                loadPlugin: function ($ocLazyLoad) {
                    return $ocLazyLoad.load([
                        {
                            name: 'ui.sortable',
                            files: ['js/lib/plugins/ui-sortable/sortable.js']
                        }
                    ]);
                }
            }
        })
        .state('miscellaneous.masonry', {
            url: "/masonry",
            templateUrl: "views/masonry.html",
            data: { pageTitle: 'Masonry' },
            resolve: {
                loadPlugin: function ($ocLazyLoad) {
                    return $ocLazyLoad.load([
                        {
                            files: ['js/lib/plugins/masonry/masonry.pkgd.min.js']
                        },
                        {
                            name: 'wu.masonry',
                            files: ['js/lib/plugins/masonry/angular-masonry.min.js']
                        }
                    ]);
                }
            }
        })
        .state('miscellaneous.toastr', {
            url: "/toastr",
            templateUrl: "views/toastr.html",
            data: { pageTitle: 'Toastr' },
            resolve: {
                loadPlugin: function ($ocLazyLoad) {
                    return $ocLazyLoad.load([
                        {
                            insertBefore: '#loadBefore',
                            name: 'toaster',
                            files: ['js/lib/plugins/toastr/toastr.min.js', 'css/plugins/toastr/toastr.min.css']
                        }
                    ]);
                }
            }
        })
        .state('miscellaneous.i18support', {
            url: "/i18support",
            templateUrl: "views/i18support.html",
            data: { pageTitle: 'i18support' },
            resolve: {
                loadPlugin: function ($ocLazyLoad) {
                    return $ocLazyLoad.load([
                        {
                            insertBefore: '#loadBefore',
                            name: 'toaster',
                            files: ['js/lib/plugins/toastr/toastr.min.js', 'css/plugins/toastr/toastr.min.css']
                        }
                    ]);
                }
            }
        })
        .state('miscellaneous.truncate', {
            url: "/truncate",
            templateUrl: "views/truncate.html",
            data: { pageTitle: 'Truncate' },
            resolve: {
                loadPlugin: function ($ocLazyLoad) {
                    return $ocLazyLoad.load([
                        {
                            files: ['js/lib/plugins/dotdotdot/jquery.dotdotdot.min.js']
                        }
                    ]);
                }
            }
        })
        .state('miscellaneous.clipboard', {
            url: "/clipboard",
            templateUrl: "views/clipboard.html",
            data: { pageTitle: 'Clipboard' },
            resolve: {
                loadPlugin: function ($ocLazyLoad) {
                    return $ocLazyLoad.load([
                        {
                            files: ['js/lib/plugins/ngclipboard/clipboard.min.js']
                        },
                        {
                            name: 'ngclipboard',
                            files: ['js/lib/plugins/ngclipboard/ngclipboard.min.js']
                        }
                    ]);
                }
            }
        })
        .state('miscellaneous.loading_buttons', {
            url: "/loading_buttons",
            templateUrl: "views/loading_buttons.html",
            data: { pageTitle: 'Loading buttons' },
            resolve: {
                loadPlugin: function ($ocLazyLoad) {
                    return $ocLazyLoad.load([
                        {
                            serie: true,
                            name: 'angular-ladda',
                            files: ['js/lib/plugins/ladda/spin.min.js', 'js/lib/plugins/ladda/ladda.min.js', 'css/plugins/ladda/ladda-themeless.min.css','js/lib/plugins/ladda/angular-ladda.min.js']
                        }
                    ]);
                }
            }
        })
        .state('miscellaneous.tour', {
            url: "/tour",
            templateUrl: "views/tour.html",
            data: { pageTitle: 'Tour' },
            resolve: {
                loadPlugin: function ($ocLazyLoad) {
                    return $ocLazyLoad.load([
                        {
                            insertBefore: '#loadBefore',
                            files: ['js/lib/plugins/bootstrap-tour/bootstrap-tour.min.js', 'css/plugins/bootstrap-tour/bootstrap-tour.min.css']
                        },
                        {
                            name: 'bm.bsTour',
                            files: ['js/lib/plugins/angular-bootstrap-tour/angular-bootstrap-tour.min.js']
                        }
                    ]);
                }
            }
        })
        .state('miscellaneous.tree_view', {
            url: "/tree_view",
            templateUrl: "views/tree_view.html",
            data: { pageTitle: 'Tree view' },
            resolve: {
                loadPlugin: function ($ocLazyLoad) {
                    return $ocLazyLoad.load([
                        {
                            files: ['css/plugins/jsTree/style.min.css','js/lib/plugins/jsTree/jstree.min.js']
                        },
                        {
                            name: 'ngJsTree',
                            files: ['js/lib/plugins/jsTree/ngJsTree.min.js']
                        }
                    ]);
                }
            }
        })
        .state('tables', {
            abstract: true,
            url: "/tables",
            templateUrl: "views/common/content.html"
        })
        .state('tables.static_table', {
            url: "/static_table",
            templateUrl: "views/table_basic.html",
            data: { pageTitle: 'Static table' },
            resolve: {
                loadPlugin: function ($ocLazyLoad) {
                    return $ocLazyLoad.load([
                        {
                            name: 'angular-peity',
                            files: ['js/lib/plugins/peity/jquery.peity.min.js', 'js/lib/plugins/peity/angular-peity.js']
                        },
                        {
                            files: ['css/plugins/iCheck/custom.css','js/lib/plugins/iCheck/icheck.min.js']
                        }
                    ]);
                }
            }
        })
        .state('tables.data_tables', {
            url: "/data_tables",
            templateUrl: "views/table_data_tables.html",
            data: { pageTitle: 'Data Tables' },
            resolve: {
                loadPlugin: function ($ocLazyLoad) {
                    return $ocLazyLoad.load([
                        {
                            serie: true,
                            files: ['js/lib/plugins/dataTables/datatables.min.js','css/plugins/dataTables/datatables.min.css']
                        },
                        {
                            serie: true,
                            name: 'datatables',
                            files: ['js/lib/plugins/dataTables/angular-datatables.min.js']
                        },
                        {
                            serie: true,
                            name: 'datatables.buttons',
                            files: ['js/lib/plugins/dataTables/angular-datatables.buttons.min.js']
                        }
                    ]);
                }
            }
        })
        .state('tables.foo_table', {
            url: "/foo_table",
            templateUrl: "views/foo_table.html",
            data: { pageTitle: 'Foo Table' },
            resolve: {
                loadPlugin: function ($ocLazyLoad) {
                    return $ocLazyLoad.load([
                        {
                            files: ['js/lib/plugins/footable/footable.all.min.js', 'css/plugins/footable/footable.core.css']
                        },
                        {
                            name: 'ui.footable',
                            files: ['js/lib/plugins/footable/angular-footable.js']
                        }
                    ]);
                }
            }
        })
        .state('tables.nggrid', {
            url: "/nggrid",
            templateUrl: "views/nggrid.html",
            data: { pageTitle: 'ng Grid' },
            resolve: {
                loadPlugin: function ($ocLazyLoad) {
                    return $ocLazyLoad.load([
                        {
                            name: 'ngGrid',
                            files: ['js/lib/plugins/nggrid/ng-grid-2.0.3.min.js']
                        },
                        {
                            insertBefore: '#loadBefore',
                            files: ['js/lib/plugins/nggrid/ng-grid.css']
                        }
                    ]);
                }
            }
        })
        .state('commerce', {
            abstract: true,
            url: "/commerce",
            templateUrl: "views/common/content.html",
            resolve: {
                loadPlugin: function ($ocLazyLoad) {
                    return $ocLazyLoad.load([
                        {
                            files: ['js/lib/plugins/footable/footable.all.min.js', 'css/plugins/footable/footable.core.css']
                        },
                        {
                            name: 'ui.footable',
                            files: ['js/lib/plugins/footable/angular-footable.js']
                        }
                    ]);
                }
            }
        })
        .state('commerce.products_grid', {
            url: "/products_grid",
            templateUrl: "views/ecommerce_products_grid.html",
            data: { pageTitle: 'E-commerce grid' }
        })
        .state('commerce.product_list', {
            url: "/product_list",
            templateUrl: "views/ecommerce_product_list.html",
            data: { pageTitle: 'E-commerce product list' }
        })
        .state('commerce.orders', {
            url: "/orders",
            templateUrl: "views/ecommerce_orders.html",
            data: { pageTitle: 'E-commerce orders' }
        })
        .state('commerce.product', {
            url: "/product",
            templateUrl: "views/ecommerce_product.html",
            data: { pageTitle: 'Product edit' },
            resolve: {
                loadPlugin: function ($ocLazyLoad) {
                    return $ocLazyLoad.load([
                        {
                            files: ['css/plugins/summernote/summernote.css','css/plugins/summernote/summernote-bs3.css','js/lib/plugins/summernote/summernote.min.js']
                        },
                        {
                            name: 'summernote',
                            files: ['css/plugins/summernote/summernote.css','css/plugins/summernote/summernote-bs3.css','js/lib/plugins/summernote/summernote.min.js','js/lib/plugins/summernote/angular-summernote.min.js']
                        }
                    ]);
                }
            }

        })
        .state('commerce.product_details', {
            url: "/product_details",
            templateUrl: "views/ecommerce_product_details.html",
            data: { pageTitle: 'E-commerce Product detail' },
            resolve: {
                loadPlugin: function ($ocLazyLoad) {
                    return $ocLazyLoad.load([
                        {
                            files: ['css/plugins/slick/slick.css','css/plugins/slick/slick-theme.css','js/lib/plugins/slick/slick.min.js']
                        },
                        {
                            name: 'slick',
                            files: ['js/lib/plugins/slick/angular-slick.min.js']
                        }
                    ]);
                }
            }
        })
        .state('commerce.payments', {
            url: "/payments",
            templateUrl: "views/ecommerce_payments.html",
            data: { pageTitle: 'E-commerce payments' }
        })
        .state('commerce.cart', {
            url: "/cart",
            templateUrl: "views/ecommerce_cart.html",
            data: { pageTitle: 'Shopping cart' }
        })
        .state('gallery', {
            abstract: true,
            url: "/gallery",
            templateUrl: "views/common/content.html"
        })
        .state('gallery.basic_gallery', {
            url: "/basic_gallery",
            templateUrl: "views/basic_gallery.html",
            data: { pageTitle: 'Lightbox Gallery' },
            resolve: {
                loadPlugin: function ($ocLazyLoad) {
                    return $ocLazyLoad.load([
                        {
                            files: ['js/lib/plugins/blueimp/jquery.blueimp-gallery.min.js','css/plugins/blueimp/css/blueimp-gallery.min.css']
                        }
                    ]);
                }
            }
        })
        .state('gallery.bootstrap_carousel', {
            url: "/bootstrap_carousel",
            templateUrl: "views/carousel.html",
            data: { pageTitle: 'Bootstrap carousel' }
        })
        .state('gallery.slick_gallery', {
            url: "/slick_gallery",
            templateUrl: "views/slick.html",
            data: { pageTitle: 'Slick carousel' },
            resolve: {
                loadPlugin: function ($ocLazyLoad) {
                    return $ocLazyLoad.load([
                        {
                            files: ['css/plugins/slick/slick.css','css/plugins/slick/slick-theme.css','js/lib/plugins/slick/slick.min.js']
                        },
                        {
                            name: 'slick',
                            files: ['js/lib/plugins/slick/angular-slick.min.js']
                        }
                    ]);
                }
            }
        })
        .state('css_animations', {
            url: "/css_animations",
            templateUrl: "views/css_animation.html",
            data: { pageTitle: 'CSS Animations' },
            resolve: {
                loadPlugin: function ($ocLazyLoad) {
                    return $ocLazyLoad.load([
                        {
                            reconfig: true,
                            serie: true,
                            files: ['js/lib/plugins/rickshaw/vendor/d3.v3.js','js/lib/plugins/rickshaw/rickshaw.min.js']
                        },
                        {
                            reconfig: true,
                            name: 'angular-rickshaw',
                            files: ['js/lib/plugins/rickshaw/angular-rickshaw.js']
                        }
                    ]);
                }
            }

        })
        .state('landing', {
            url: "/landing",
            templateUrl: "views/landing.html",
            data: { pageTitle: 'Landing page', specialClass: 'landing-page' },
            resolve: {
                loadPlugin: function ($ocLazyLoad) {
                    return $ocLazyLoad.load([
                        {
                            files: ['js/lib/plugins/wow/wow.min.js']
                        }
                    ]);
                }
            }
        })
        .state('outlook', {
            url: "/outlook",
            templateUrl: "views/outlook.html",
            data: { pageTitle: 'Outlook view', specialClass: 'fixed-sidebar' }
        })
        .state('off_canvas', {
            url: "/off_canvas",
            templateUrl: "views/off_canvas.html",
            data: { pageTitle: 'Off canvas menu', specialClass: 'canvas-menu' }
        });

}

app
    .config(config)
    .run(function(_, $rootScope, $state, Authorization) {
        $rootScope.$state = $state;
		$rootScope.$on('$stateChangeSuccess', function(event, toState, toParams, fromState, fromParams) {
			console.log("on state change success");
			console.log("Authorization: ");
			console.log(Authorization);
			console.log("fromState : ");
			console.log(fromState);
			console.log("toState : ");
			console.log(toState);
				
			if (!Authorization.authorized && !(toState.name == "login")) {
				console.log("Authorization.memorizedState && (!_.has(fromState, 'data.redirectTo') || toState.name !== fromState.data.redirectTo)");
				console.log("!_.has(fromState, 'data.redirectTo') : "+ !_.has(fromState, 'data.redirectTo')); 
				console.log("toState.name !== fromState.data.redirectTo : ");
				
				
			  if (Authorization.memorizedState && (!_.has(fromState, 'data.redirectTo') || toState.name !== fromState.data.redirectTo)) {
				console.log("Authorization: ");
				console.log(Authorization);
				Authorization.clear();
				console.log("Authorization: ");
				console.log(Authorization);
				console.log("clear auth");
			  }
			  if (_.has(toState, 'data.authorization') && _.has(toState, 'data.redirectTo')) {
				if (_.has(toState, 'data.memory') && toState.data.memory) {
				  Authorization.memorizedState = toState.name;
				}
				console.log("toState: ");
				console.log(toState);
				console.log("redirect");
				$state.go(toState.data.redirectTo);
			  }
			}

		  });
    });
