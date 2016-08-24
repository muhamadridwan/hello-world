<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        // homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'homepage');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\HomeController::indexAction',  '_route' => 'homepage',);
        }

        if (0 === strpos($pathinfo, '/angular')) {
            // angularEditProfile
            if ($pathinfo === '/angularEditProfile') {
                return array (  '_controller' => 'AppBundle\\Controller\\LearnAngularController::angularEditProfileAction',  '_route' => 'angularEditProfile',);
            }

            // angularGetEvent
            if (0 === strpos($pathinfo, '/angularGetEvent') && preg_match('#^/angularGetEvent(?:/(?P<idx>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'angularGetEvent')), array (  'idx' => 0,  '_controller' => 'AppBundle\\Controller\\LearnAngularController::angularGetEventAction',));
            }

        }

        if (0 === strpos($pathinfo, '/c')) {
            // angularCacheFactory
            if ($pathinfo === '/cacheFactory') {
                return array (  '_controller' => 'AppBundle\\Controller\\LearnAngularController::cacheFactoryAction',  '_route' => 'angularCacheFactory',);
            }

            // angularCompileService
            if ($pathinfo === '/compileService') {
                return array (  '_controller' => 'AppBundle\\Controller\\LearnAngularController::compileServiceAction',  '_route' => 'angularCompileService',);
            }

        }

        // angularLocaleService
        if ($pathinfo === '/localeService') {
            return array (  '_controller' => 'AppBundle\\Controller\\LearnAngularController::localeServiceAction',  '_route' => 'angularLocaleService',);
        }

        // angularTimeoutService
        if ($pathinfo === '/timeoutService') {
            return array (  '_controller' => 'AppBundle\\Controller\\LearnAngularController::timeoutServiceAction',  '_route' => 'angularTimeoutService',);
        }

        // angularFilterServiceSample
        if ($pathinfo === '/filterServiceSample') {
            return array (  '_controller' => 'AppBundle\\Controller\\LearnAngularController::filterSampleServiceAction',  '_route' => 'angularFilterServiceSample',);
        }

        // angularCookieServiceSample
        if ($pathinfo === '/cookieServiceSample') {
            return array (  '_controller' => 'AppBundle\\Controller\\LearnAngularController::cookieSampleService',  '_route' => 'angularCookieServiceSample',);
        }

        // newEventWithNGRoute
        if ($pathinfo === '/newEventWithNGRoute') {
            return array (  '_controller' => 'AppBundle\\Controller\\LearnAngularController::newEventWithNGRoute',  '_route' => 'newEventWithNGRoute',);
        }

        // getEventList
        if ($pathinfo === '/getEventList') {
            return array (  '_controller' => 'AppBundle\\Controller\\LearnAngularController::getEventListWithNGRouteAction',  '_route' => 'getEventList',);
        }

        if (0 === strpos($pathinfo, '/log')) {
            // login
            if (rtrim($pathinfo, '/') === '/login') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'login');
                }

                return array (  '_controller' => 'AppBundle\\Controller\\SecurityController::loginAction',  '_route' => 'login',);
            }

            // logout
            if ($pathinfo === '/logout') {
                return array('_route' => 'logout');
            }

        }

        if (0 === strpos($pathinfo, '/configuration')) {
            // configuration
            if (rtrim($pathinfo, '/') === '/configuration') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'configuration');
                }

                return array (  '_controller' => 'AppBundle\\Controller\\MealCategoryController::indexAction',  '_route' => 'configuration',);
            }

            if (0 === strpos($pathinfo, '/configuration/meal')) {
                if (0 === strpos($pathinfo, '/configuration/mealCategory')) {
                    // mealCategoryIndex
                    if (rtrim($pathinfo, '/') === '/configuration/mealCategory') {
                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'mealCategoryIndex');
                        }

                        return array (  '_controller' => 'AppBundle\\Controller\\MealCategoryController::indexAction',  '_route' => 'mealCategoryIndex',);
                    }

                    // addMealCategory
                    if (rtrim($pathinfo, '/') === '/configuration/mealCategory/add') {
                        if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                            goto not_addMealCategory;
                        }

                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'addMealCategory');
                        }

                        return array (  '_controller' => 'AppBundle\\Controller\\MealCategoryController::addAction',  '_route' => 'addMealCategory',);
                    }
                    not_addMealCategory:

                    // editMealCategory
                    if (0 === strpos($pathinfo, '/configuration/mealCategory/edit') && preg_match('#^/configuration/mealCategory/edit/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                            goto not_editMealCategory;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'editMealCategory')), array (  '_controller' => 'AppBundle\\Controller\\MealCategoryController::editAction',));
                    }
                    not_editMealCategory:

                    // deleteMealCategory
                    if (0 === strpos($pathinfo, '/configuration/mealCategory/del') && preg_match('#^/configuration/mealCategory/del/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'deleteMealCategory')), array (  '_controller' => 'AppBundle\\Controller\\MealCategoryController::deleteAction',));
                    }

                }

                // mealIndex
                if (rtrim($pathinfo, '/') === '/configuration/meal') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'mealIndex');
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\MealController::indexAction',  '_route' => 'mealIndex',);
                }

                // addMeal
                if (rtrim($pathinfo, '/') === '/configuration/meal/add') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_addMeal;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'addMeal');
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\MealController::addAction',  '_route' => 'addMeal',);
                }
                not_addMeal:

                // editMeal
                if (0 === strpos($pathinfo, '/configuration/meal/edit') && preg_match('#^/configuration/meal/edit/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_editMeal;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'editMeal')), array (  '_controller' => 'AppBundle\\Controller\\MealController::editAction',));
                }
                not_editMeal:

                // deleteMeal
                if (0 === strpos($pathinfo, '/configuration/meal/del') && preg_match('#^/configuration/meal/del/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'deleteMeal')), array (  '_controller' => 'AppBundle\\Controller\\MealController::deleteAction',));
                }

            }

            if (0 === strpos($pathinfo, '/configuration/restoTable')) {
                // restoTableIndex
                if (rtrim($pathinfo, '/') === '/configuration/restoTable') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'restoTableIndex');
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\RestoTableController::indexAction',  '_route' => 'restoTableIndex',);
                }

                // addRestoTable
                if (rtrim($pathinfo, '/') === '/configuration/restoTable/add') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_addRestoTable;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'addRestoTable');
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\RestoTableController::addAction',  '_route' => 'addRestoTable',);
                }
                not_addRestoTable:

            }

            if (0 === strpos($pathinfo, '/configuration/RestoTable')) {
                // editRestoTable
                if (0 === strpos($pathinfo, '/configuration/RestoTable/edit') && preg_match('#^/configuration/RestoTable/edit/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_editRestoTable;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'editRestoTable')), array (  '_controller' => 'AppBundle\\Controller\\RestoTableController::editAction',));
                }
                not_editRestoTable:

                // deleteRestoTable
                if (0 === strpos($pathinfo, '/configuration/RestoTable/del') && preg_match('#^/configuration/RestoTable/del/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'deleteRestoTable')), array (  '_controller' => 'AppBundle\\Controller\\RestoTableController::deleteAction',));
                }

            }

        }

        if (0 === strpos($pathinfo, '/administration')) {
            // administration
            if (rtrim($pathinfo, '/') === '/administration') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'administration');
                }

                return array (  '_controller' => 'AppBundle\\Controller\\AdministrationController::userIndexAction',  '_route' => 'administration',);
            }

            if (0 === strpos($pathinfo, '/administration/user')) {
                // userIndex
                if (rtrim($pathinfo, '/') === '/administration/user') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'userIndex');
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\UserController::indexAction',  '_route' => 'userIndex',);
                }

                // addUser
                if (rtrim($pathinfo, '/') === '/administration/user/add') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_addUser;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'addUser');
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\UserController::addAction',  '_route' => 'addUser',);
                }
                not_addUser:

                // editUser
                if (0 === strpos($pathinfo, '/administration/user/edit') && preg_match('#^/administration/user/edit/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_editUser;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'editUser')), array (  '_controller' => 'AppBundle\\Controller\\UserController::editAction',));
                }
                not_editUser:

                // deleteUser
                if (0 === strpos($pathinfo, '/administration/user/del') && preg_match('#^/administration/user/del/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'deleteUser')), array (  '_controller' => 'AppBundle\\Controller\\UserController::deleteAction',));
                }

            }

            if (0 === strpos($pathinfo, '/administration/customer')) {
                // customerIndex
                if (rtrim($pathinfo, '/') === '/administration/customer') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'customerIndex');
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\CustomerController::indexAction',  '_route' => 'customerIndex',);
                }

                // addCustomer
                if (rtrim($pathinfo, '/') === '/administration/customer/add') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_addCustomer;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'addCustomer');
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\CustomerController::addAction',  '_route' => 'addCustomer',);
                }
                not_addCustomer:

                // editCustomer
                if (0 === strpos($pathinfo, '/administration/customer/edit') && preg_match('#^/administration/customer/edit/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_editCustomer;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'editCustomer')), array (  '_controller' => 'AppBundle\\Controller\\CustomerController::editAction',));
                }
                not_editCustomer:

                // deleteCustomer
                if (0 === strpos($pathinfo, '/administration/customer/del') && preg_match('#^/administration/customer/del/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'deleteCustomer')), array (  '_controller' => 'AppBundle\\Controller\\CustomerController::deleteAction',));
                }

            }

            if (0 === strpos($pathinfo, '/administration/admin')) {
                // adminIndex
                if (rtrim($pathinfo, '/') === '/administration/admin') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'adminIndex');
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\AdministrationController::adminIndexAction',  '_route' => 'adminIndex',);
                }

                // addAdmin
                if (rtrim($pathinfo, '/') === '/administration/admin/add') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_addAdmin;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'addAdmin');
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\AdministrationController::addAdminAction',  '_route' => 'addAdmin',);
                }
                not_addAdmin:

                // deleteAdmin
                if (0 === strpos($pathinfo, '/administration/admin/del') && preg_match('#^/administration/admin/del/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'deleteAdmin')), array (  '_controller' => 'AppBundle\\Controller\\AdministrationController::deleteAdminAction',));
                }

            }

            if (0 === strpos($pathinfo, '/administration/employee')) {
                // employeeIndex
                if (rtrim($pathinfo, '/') === '/administration/employee') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'employeeIndex');
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\EmployeeController::indexAction',  '_route' => 'employeeIndex',);
                }

                // addEmployee
                if (rtrim($pathinfo, '/') === '/administration/employee/add') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_addEmployee;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'addEmployee');
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\EmployeeController::addAction',  '_route' => 'addEmployee',);
                }
                not_addEmployee:

                // editEmployee
                if (0 === strpos($pathinfo, '/administration/employee/edit') && preg_match('#^/administration/employee/edit/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_editEmployee;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'editEmployee')), array (  '_controller' => 'AppBundle\\Controller\\EmployeeController::editAction',));
                }
                not_editEmployee:

                // deleteEmployee
                if (0 === strpos($pathinfo, '/administration/employee/del') && preg_match('#^/administration/employee/del/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'deleteEmployee')), array (  '_controller' => 'AppBundle\\Controller\\EmployeeController::deleteAction',));
                }

            }

            if (0 === strpos($pathinfo, '/administration/user')) {
                if (0 === strpos($pathinfo, '/administration/usergroup')) {
                    // usergroupIndex
                    if (rtrim($pathinfo, '/') === '/administration/usergroup') {
                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'usergroupIndex');
                        }

                        return array (  '_controller' => 'AppBundle\\Controller\\UsergroupController::IndexAction',  '_route' => 'usergroupIndex',);
                    }

                    // addUsergroup
                    if (rtrim($pathinfo, '/') === '/administration/usergroup/add') {
                        if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                            goto not_addUsergroup;
                        }

                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'addUsergroup');
                        }

                        return array (  '_controller' => 'AppBundle\\Controller\\UsergroupController::addAction',  '_route' => 'addUsergroup',);
                    }
                    not_addUsergroup:

                    // editUsergroup
                    if (0 === strpos($pathinfo, '/administration/usergroup/edit') && preg_match('#^/administration/usergroup/edit/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                            goto not_editUsergroup;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'editUsergroup')), array (  '_controller' => 'AppBundle\\Controller\\UsergroupController::editAction',));
                    }
                    not_editUsergroup:

                    // deleteUsergroup
                    if (0 === strpos($pathinfo, '/administration/usergroup/del') && preg_match('#^/administration/usergroup/del/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'deleteUsergroup')), array (  '_controller' => 'AppBundle\\Controller\\UsergroupController::deleteAction',));
                    }

                }

                if (0 === strpos($pathinfo, '/administration/userprivilege')) {
                    // userPrivilegeIndex
                    if (preg_match('#^/administration/userprivilege(?:/(?P<user_group_id>[^/]++))?$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'userPrivilegeIndex')), array (  '_controller' => 'AppBundle\\Controller\\UserPrivilegeController::indexAction',  'user_group_id' => -1,));
                    }

                    // saveUserPrivilege
                    if (0 === strpos($pathinfo, '/administration/userprivilege/saveuserprivilege') && preg_match('#^/administration/userprivilege/saveuserprivilege/(?P<userGroupId>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'saveUserPrivilege')), array (  '_controller' => 'AppBundle\\Controller\\UserPrivilegeController::saveUserPrivilegeAction',));
                    }

                }

            }

        }

        if (0 === strpos($pathinfo, '/orders')) {
            // orders
            if (rtrim($pathinfo, '/') === '/orders') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'orders');
                }

                return array (  '_controller' => 'AppBundle\\Controller\\OrderController::orderIndexAction',  '_route' => 'orders',);
            }

            if (0 === strpos($pathinfo, '/orders/order')) {
                // orderIndex
                if (preg_match('#^/orders/order(?:/(?P<category_id>[^/]++))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'orderIndex')), array (  '_controller' => 'AppBundle\\Controller\\OrderController::orderIndexAction',  'category_id' => -1,));
                }

                // pickTheMeal
                if (0 === strpos($pathinfo, '/orders/order/pickTheMeal') && preg_match('#^/orders/order/pickTheMeal/(?P<category_id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'pickTheMeal')), array (  '_controller' => 'AppBundle\\Controller\\OrderController::pickTheMealAction',));
                }

                if (0 === strpos($pathinfo, '/orders/order/c')) {
                    // cancelPickTheMeal
                    if (0 === strpos($pathinfo, '/orders/order/cancelPickTheMeal') && preg_match('#^/orders/order/cancelPickTheMeal/(?P<meal_id>[^/]++)/(?P<category_id>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'cancelPickTheMeal')), array (  '_controller' => 'AppBundle\\Controller\\OrderController::cancelPickTheMealAction',));
                    }

                    // checkOutTheOrders
                    if (rtrim($pathinfo, '/') === '/orders/order/checkOutTheOrders') {
                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'checkOutTheOrders');
                        }

                        return array (  '_controller' => 'AppBundle\\Controller\\OrderController::checkOutTheOrdersAction',  '_route' => 'checkOutTheOrders',);
                    }

                }

            }

            // activeOrderIndex
            if (0 === strpos($pathinfo, '/orders/activeOrder') && preg_match('#^/orders/activeOrder(?:/(?P<order_status>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'activeOrderIndex')), array (  '_controller' => 'AppBundle\\Controller\\OrderController::activeOrderIndexAction',  'order_status' => 0,));
            }

            // cooksTheFood
            if (0 === strpos($pathinfo, '/orders/cooksTheFood') && preg_match('#^/orders/cooksTheFood/(?P<customer_order_id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'cooksTheFood')), array (  '_controller' => 'AppBundle\\Controller\\OrderController::cooksTheFoodAction',));
            }

            // servesTheFood
            if (0 === strpos($pathinfo, '/orders/servesTheFood') && preg_match('#^/orders/servesTheFood/(?P<customer_order_id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'servesTheFood')), array (  '_controller' => 'AppBundle\\Controller\\OrderController::servesTheFoodAction',));
            }

            // paymentIndex
            if (0 === strpos($pathinfo, '/orders/payment') && preg_match('#^/orders/payment/(?P<customer_order_id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'paymentIndex')), array (  '_controller' => 'AppBundle\\Controller\\OrderController::paymentAction',));
            }

            // confirmPayment
            if (0 === strpos($pathinfo, '/orders/confirmPayment') && preg_match('#^/orders/confirmPayment/(?P<customer_order_id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'confirmPayment')), array (  '_controller' => 'AppBundle\\Controller\\OrderController::confirmPaymentAction',));
            }

            if (0 === strpos($pathinfo, '/orders/history')) {
                // orderHistoryIndex
                if (rtrim($pathinfo, '/') === '/orders/history') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'orderHistoryIndex');
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\OrderController::historyIndexAction',  '_route' => 'orderHistoryIndex',);
                }

                // detailHistoryIndex
                if (0 === strpos($pathinfo, '/orders/history/detail') && preg_match('#^/orders/history/detail/(?P<customer_order_id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'detailHistoryIndex')), array (  '_controller' => 'AppBundle\\Controller\\OrderController::detailHistoryIndexAction',));
                }

            }

        }

        if (0 === strpos($pathinfo, '/my')) {
            // myProfileIndex
            if (rtrim($pathinfo, '/') === '/myprofile') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'myProfileIndex');
                }

                return array (  '_controller' => 'AppBundle\\Controller\\MyProfileController::indexAction',  '_route' => 'myProfileIndex',);
            }

            // changePasswordIndex
            if (rtrim($pathinfo, '/') === '/myProfile/changePassword') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'changePasswordIndex');
                }

                return array (  '_controller' => 'AppBundle\\Controller\\SecurityController::changePasswordIndexAction',  '_route' => 'changePasswordIndex',);
            }

        }

        // contactUsIndex
        if (rtrim($pathinfo, '/') === '/contactUs') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'contactUsIndex');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\HomeController::contactUsAction',  '_route' => 'contactUsIndex',);
        }

        // getAllEmployee
        if (rtrim($pathinfo, '/') === '/api/employee/getAllEmployee') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'getAllEmployee');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\API\\EmployeeAPIController::getAllEmployeeAction',  '_route' => 'getAllEmployee',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
