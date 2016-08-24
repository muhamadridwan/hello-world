<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * appProdUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    private static $declaredRoutes;

    /**
     * Constructor.
     */
    public function __construct(RequestContext $context, LoggerInterface $logger = null)
    {
        $this->context = $context;
        $this->logger = $logger;
        if (null === self::$declaredRoutes) {
            self::$declaredRoutes = array(
        'homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\HomeController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'angularEditProfile' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\LearnAngularController::angularEditProfileAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/angularEditProfile',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'angularGetEvent' => array (  0 =>   array (    0 => 'idx',  ),  1 =>   array (    'idx' => 0,    '_controller' => 'AppBundle\\Controller\\LearnAngularController::angularGetEventAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'idx',    ),    1 =>     array (      0 => 'text',      1 => '/angularGetEvent',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'angularCacheFactory' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\LearnAngularController::cacheFactoryAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/cacheFactory',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'angularCompileService' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\LearnAngularController::compileServiceAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/compileService',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'angularLocaleService' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\LearnAngularController::localeServiceAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/localeService',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'angularTimeoutService' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\LearnAngularController::timeoutServiceAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/timeoutService',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'angularFilterServiceSample' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\LearnAngularController::filterSampleServiceAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/filterServiceSample',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'angularCookieServiceSample' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\LearnAngularController::cookieSampleService',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/cookieServiceSample',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'newEventWithNGRoute' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\LearnAngularController::newEventWithNGRoute',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/newEventWithNGRoute',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'getEventList' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\LearnAngularController::getEventListWithNGRouteAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/getEventList',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'login' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\SecurityController::loginAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/login/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'logout' => array (  0 =>   array (  ),  1 =>   array (  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/logout',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'configuration' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\MealCategoryController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/configuration/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'mealCategoryIndex' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\MealCategoryController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/configuration/mealCategory/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'addMealCategory' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\MealCategoryController::addAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/configuration/mealCategory/add/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'editMealCategory' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\MealCategoryController::editAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/configuration/mealCategory/edit',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'deleteMealCategory' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\MealCategoryController::deleteAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/configuration/mealCategory/del',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'mealIndex' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\MealController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/configuration/meal/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'addMeal' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\MealController::addAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/configuration/meal/add/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'editMeal' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\MealController::editAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/configuration/meal/edit',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'deleteMeal' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\MealController::deleteAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/configuration/meal/del',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'restoTableIndex' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\RestoTableController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/configuration/restoTable/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'addRestoTable' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\RestoTableController::addAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/configuration/restoTable/add/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'editRestoTable' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\RestoTableController::editAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/configuration/RestoTable/edit',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'deleteRestoTable' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\RestoTableController::deleteAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/configuration/RestoTable/del',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'administration' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\AdministrationController::userIndexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/administration/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'userIndex' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\UserController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/administration/user/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'addUser' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\UserController::addAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/administration/user/add/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'editUser' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\UserController::editAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/administration/user/edit',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'deleteUser' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\UserController::deleteAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/administration/user/del',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'customerIndex' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\CustomerController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/administration/customer/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'addCustomer' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\CustomerController::addAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/administration/customer/add/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'editCustomer' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\CustomerController::editAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/administration/customer/edit',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'deleteCustomer' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\CustomerController::deleteAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/administration/customer/del',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'adminIndex' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\AdministrationController::adminIndexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/administration/admin/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'addAdmin' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\AdministrationController::addAdminAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/administration/admin/add/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'deleteAdmin' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\AdministrationController::deleteAdminAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/administration/admin/del',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'employeeIndex' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\EmployeeController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/administration/employee/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'addEmployee' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\EmployeeController::addAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/administration/employee/add/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'editEmployee' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\EmployeeController::editAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/administration/employee/edit',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'deleteEmployee' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\EmployeeController::deleteAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/administration/employee/del',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'usergroupIndex' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\UsergroupController::IndexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/administration/usergroup/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'addUsergroup' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\UsergroupController::addAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/administration/usergroup/add/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'editUsergroup' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\UsergroupController::editAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/administration/usergroup/edit',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'deleteUsergroup' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\UsergroupController::deleteAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/administration/usergroup/del',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'userPrivilegeIndex' => array (  0 =>   array (    0 => 'user_group_id',  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\UserPrivilegeController::indexAction',    'user_group_id' => -1,  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'user_group_id',    ),    1 =>     array (      0 => 'text',      1 => '/administration/userprivilege',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'saveUserPrivilege' => array (  0 =>   array (    0 => 'userGroupId',  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\UserPrivilegeController::saveUserPrivilegeAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'userGroupId',    ),    1 =>     array (      0 => 'text',      1 => '/administration/userprivilege/saveuserprivilege',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'orders' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\OrderController::orderIndexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/orders/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'orderIndex' => array (  0 =>   array (    0 => 'category_id',  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\OrderController::orderIndexAction',    'category_id' => -1,  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'category_id',    ),    1 =>     array (      0 => 'text',      1 => '/orders/order',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'pickTheMeal' => array (  0 =>   array (    0 => 'category_id',  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\OrderController::pickTheMealAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'category_id',    ),    1 =>     array (      0 => 'text',      1 => '/orders/order/pickTheMeal',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'cancelPickTheMeal' => array (  0 =>   array (    0 => 'meal_id',    1 => 'category_id',  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\OrderController::cancelPickTheMealAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'category_id',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'meal_id',    ),    2 =>     array (      0 => 'text',      1 => '/orders/order/cancelPickTheMeal',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'checkOutTheOrders' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\OrderController::checkOutTheOrdersAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/orders/order/checkOutTheOrders/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'activeOrderIndex' => array (  0 =>   array (    0 => 'order_status',  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\OrderController::activeOrderIndexAction',    'order_status' => 0,  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'order_status',    ),    1 =>     array (      0 => 'text',      1 => '/orders/activeOrder',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'cooksTheFood' => array (  0 =>   array (    0 => 'customer_order_id',  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\OrderController::cooksTheFoodAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'customer_order_id',    ),    1 =>     array (      0 => 'text',      1 => '/orders/cooksTheFood',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'servesTheFood' => array (  0 =>   array (    0 => 'customer_order_id',  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\OrderController::servesTheFoodAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'customer_order_id',    ),    1 =>     array (      0 => 'text',      1 => '/orders/servesTheFood',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'paymentIndex' => array (  0 =>   array (    0 => 'customer_order_id',  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\OrderController::paymentAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'customer_order_id',    ),    1 =>     array (      0 => 'text',      1 => '/orders/payment',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'confirmPayment' => array (  0 =>   array (    0 => 'customer_order_id',  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\OrderController::confirmPaymentAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'customer_order_id',    ),    1 =>     array (      0 => 'text',      1 => '/orders/confirmPayment',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'orderHistoryIndex' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\OrderController::historyIndexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/orders/history/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'detailHistoryIndex' => array (  0 =>   array (    0 => 'customer_order_id',  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\OrderController::detailHistoryIndexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'customer_order_id',    ),    1 =>     array (      0 => 'text',      1 => '/orders/history/detail',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'myProfileIndex' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\MyProfileController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/myprofile/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'changePasswordIndex' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\SecurityController::changePasswordIndexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/myProfile/changePassword/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'contactUsIndex' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\HomeController::contactUsAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/contactUs/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
    );
        }
    }

    public function generate($name, $parameters = array(), $referenceType = self::ABSOLUTE_PATH)
    {
        if (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens, $requiredSchemes) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens, $requiredSchemes);
    }
}
