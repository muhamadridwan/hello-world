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

        if (0 === strpos($pathinfo, '/hell')) {
            // hello
            if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'hello')), array (  '_controller' => 'AppBundle\\Controller\\HelloController::indexAction',));
            }

            // hellohello
            if (rtrim($pathinfo, '/') === '/hell/tes') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'hellohello');
                }

                return array (  '_controller' => 'AppBundle\\Controller\\HelloController::tesAction',  '_route' => 'hellohello',);
            }

        }

        // homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'homepage');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\HomeController::indexAction',  '_route' => 'homepage',);
        }

        if (0 === strpos($pathinfo, '/lucky')) {
            // number
            if ($pathinfo === '/lucky/number') {
                return array (  '_controller' => 'AppBundle\\Controller\\LuckyController::numberAction',  '_route' => 'number',);
            }

            // app_lucky_apinumber
            if ($pathinfo === '/lucky/api/number') {
                return array (  '_controller' => 'AppBundle\\Controller\\LuckyController::apiNumberAction',  '_route' => 'app_lucky_apinumber',);
            }

            // app_lucky_numbers
            if (0 === strpos($pathinfo, '/lucky/numbers') && preg_match('#^/lucky/numbers/(?P<count>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'app_lucky_numbers')), array (  '_controller' => 'AppBundle\\Controller\\LuckyController::numbersAction',));
            }

            // app_lucky_tes
            if (rtrim($pathinfo, '/') === '/lucky/tes') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'app_lucky_tes');
                }

                return array (  '_controller' => 'AppBundle\\Controller\\LuckyController::tesAction',  '_route' => 'app_lucky_tes',);
            }

        }

        if (0 === strpos($pathinfo, '/user')) {
            // addUser
            if (rtrim($pathinfo, '/') === '/user/add') {
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
            if (0 === strpos($pathinfo, '/user/edit') && preg_match('#^/user/edit/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_editUser;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'editUser')), array (  '_controller' => 'AppBundle\\Controller\\UserController::editAction',));
            }
            not_editUser:

            // deleteUser
            if (0 === strpos($pathinfo, '/user/del') && preg_match('#^/user/del/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'deleteUser')), array (  '_controller' => 'AppBundle\\Controller\\UserController::delAction',));
            }

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

        if (0 === strpos($pathinfo, '/administration')) {
            // userIndex
            if (rtrim($pathinfo, '/') === '/administration/user') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'userIndex');
                }

                return array (  '_controller' => 'AppBundle\\Controller\\AdministrationController::userIndexAction',  '_route' => 'userIndex',);
            }

            // customerIndex
            if (rtrim($pathinfo, '/') === '/administration/customer') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'customerIndex');
                }

                return array (  '_controller' => 'AppBundle\\Controller\\AdministrationController::customerIndexAction',  '_route' => 'customerIndex',);
            }

        }

        if (0 === strpos($pathinfo, '/order')) {
            // orderIndex
            if (rtrim($pathinfo, '/') === '/order/order') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'orderIndex');
                }

                return array (  '_controller' => 'AppBundle\\Controller\\OrderController::orderIndexAction',  '_route' => 'orderIndex',);
            }

            // activeOrderIndex
            if (rtrim($pathinfo, '/') === '/order/activeOrder') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'activeOrderIndex');
                }

                return array (  '_controller' => 'AppBundle\\Controller\\OrderController::activeOrderIndexAction',  '_route' => 'activeOrderIndex',);
            }

            // historyIndex
            if (rtrim($pathinfo, '/') === '/order/history') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'historyIndex');
                }

                return array (  '_controller' => 'AppBundle\\Controller\\OrderController::historyIndexAction',  '_route' => 'historyIndex',);
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
