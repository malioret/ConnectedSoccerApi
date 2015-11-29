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

        // soccer_landing_test
        if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'soccer_landing_test')), array (  '_controller' => 'Soccer\\LandingBundle\\Controller\\DefaultController::indexAction',));
        }

        // soccer_landing_home
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'soccer_landing_home');
            }

            return array (  '_controller' => 'Soccer\\LandingBundle\\Controller\\HomeController::indexAction',  '_route' => 'soccer_landing_home',);
        }

        // soccer_event_homepage
        if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'soccer_event_homepage')), array (  '_controller' => 'Soccer\\EventBundle\\Controller\\DefaultController::indexAction',));
        }

        // subwaybuddy_user_recherche_getusers
        if (rtrim($pathinfo, '/') === '') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_subwaybuddy_user_recherche_getusers;
            }

            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'subwaybuddy_user_recherche_getusers');
            }

            return array (  '_controller' => 'SubwayBuddy\\UserBundle\\Controller\\RechercheController::getUsersAction',  '_route' => 'subwaybuddy_user_recherche_getusers',);
        }
        not_subwaybuddy_user_recherche_getusers:

        // subwaybuddy_user_user_getusers
        if (rtrim($pathinfo, '/') === '') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_subwaybuddy_user_user_getusers;
            }

            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'subwaybuddy_user_user_getusers');
            }

            return array (  '_controller' => 'SubwayBuddy\\UserBundle\\Controller\\UserController::getUsersAction',  '_route' => 'subwaybuddy_user_user_getusers',);
        }
        not_subwaybuddy_user_user_getusers:

        if (0 === strpos($pathinfo, '/log')) {
            if (0 === strpos($pathinfo, '/login')) {
                // fos_user_security_login
                if ($pathinfo === '/login') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_security_login;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::loginAction',  '_route' => 'fos_user_security_login',);
                }
                not_fos_user_security_login:

                // fos_user_security_check
                if ($pathinfo === '/login_check') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_user_security_check;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::checkAction',  '_route' => 'fos_user_security_check',);
                }
                not_fos_user_security_check:

            }

            // fos_user_security_logout
            if ($pathinfo === '/logout') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_security_logout;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::logoutAction',  '_route' => 'fos_user_security_logout',);
            }
            not_fos_user_security_logout:

        }

        if (0 === strpos($pathinfo, '/profile')) {
            // fos_user_profile_show
            if (rtrim($pathinfo, '/') === '/profile') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_profile_show;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'fos_user_profile_show');
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::showAction',  '_route' => 'fos_user_profile_show',);
            }
            not_fos_user_profile_show:

            // fos_user_profile_edit
            if ($pathinfo === '/profile/edit') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_fos_user_profile_edit;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::editAction',  '_route' => 'fos_user_profile_edit',);
            }
            not_fos_user_profile_edit:

        }

        if (0 === strpos($pathinfo, '/re')) {
            if (0 === strpos($pathinfo, '/register')) {
                // fos_user_registration_register
                if (rtrim($pathinfo, '/') === '/register') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_registration_register;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'fos_user_registration_register');
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::registerAction',  '_route' => 'fos_user_registration_register',);
                }
                not_fos_user_registration_register:

                if (0 === strpos($pathinfo, '/register/c')) {
                    // fos_user_registration_check_email
                    if ($pathinfo === '/register/check-email') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_fos_user_registration_check_email;
                        }

                        return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::checkEmailAction',  '_route' => 'fos_user_registration_check_email',);
                    }
                    not_fos_user_registration_check_email:

                    if (0 === strpos($pathinfo, '/register/confirm')) {
                        // fos_user_registration_confirm
                        if (preg_match('#^/register/confirm/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_registration_confirm;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_registration_confirm')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmAction',));
                        }
                        not_fos_user_registration_confirm:

                        // fos_user_registration_confirmed
                        if ($pathinfo === '/register/confirmed') {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_registration_confirmed;
                            }

                            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmedAction',  '_route' => 'fos_user_registration_confirmed',);
                        }
                        not_fos_user_registration_confirmed:

                    }

                }

            }

            if (0 === strpos($pathinfo, '/resetting')) {
                // fos_user_resetting_request
                if ($pathinfo === '/resetting/request') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_resetting_request;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::requestAction',  '_route' => 'fos_user_resetting_request',);
                }
                not_fos_user_resetting_request:

                // fos_user_resetting_send_email
                if ($pathinfo === '/resetting/send-email') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_user_resetting_send_email;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::sendEmailAction',  '_route' => 'fos_user_resetting_send_email',);
                }
                not_fos_user_resetting_send_email:

                // fos_user_resetting_check_email
                if ($pathinfo === '/resetting/check-email') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_resetting_check_email;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::checkEmailAction',  '_route' => 'fos_user_resetting_check_email',);
                }
                not_fos_user_resetting_check_email:

                // fos_user_resetting_reset
                if (0 === strpos($pathinfo, '/resetting/reset') && preg_match('#^/resetting/reset/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_resetting_reset;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_resetting_reset')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::resetAction',));
                }
                not_fos_user_resetting_reset:

            }

        }

        // fos_user_change_password
        if ($pathinfo === '/profile/change-password') {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_fos_user_change_password;
            }

            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ChangePasswordController::changePasswordAction',  '_route' => 'fos_user_change_password',);
        }
        not_fos_user_change_password:

        if (0 === strpos($pathinfo, '/a')) {
            if (0 === strpos($pathinfo, '/admin')) {
                // sonata_admin_redirect
                if (rtrim($pathinfo, '/') === '/admin') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'sonata_admin_redirect');
                    }

                    return array (  '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController::redirectAction',  'route' => 'sonata_admin_dashboard',  'permanent' => 'true',  '_route' => 'sonata_admin_redirect',);
                }

                // sonata_admin_dashboard
                if ($pathinfo === '/admin/dashboard') {
                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CoreController::dashboardAction',  '_route' => 'sonata_admin_dashboard',);
                }

                if (0 === strpos($pathinfo, '/admin/core')) {
                    // sonata_admin_retrieve_form_element
                    if ($pathinfo === '/admin/core/get-form-field-element') {
                        return array (  '_controller' => 'sonata.admin.controller.admin:retrieveFormFieldElementAction',  '_route' => 'sonata_admin_retrieve_form_element',);
                    }

                    // sonata_admin_append_form_element
                    if ($pathinfo === '/admin/core/append-form-field-element') {
                        return array (  '_controller' => 'sonata.admin.controller.admin:appendFormFieldElementAction',  '_route' => 'sonata_admin_append_form_element',);
                    }

                    // sonata_admin_short_object_information
                    if (0 === strpos($pathinfo, '/admin/core/get-short-object-description') && preg_match('#^/admin/core/get\\-short\\-object\\-description(?:\\.(?P<_format>html|json))?$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'sonata_admin_short_object_information')), array (  '_controller' => 'sonata.admin.controller.admin:getShortObjectDescriptionAction',  '_format' => 'html',));
                    }

                    // sonata_admin_set_object_field_value
                    if ($pathinfo === '/admin/core/set-object-field-value') {
                        return array (  '_controller' => 'sonata.admin.controller.admin:setObjectFieldValueAction',  '_route' => 'sonata_admin_set_object_field_value',);
                    }

                }

                // sonata_admin_search
                if ($pathinfo === '/admin/search') {
                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CoreController::searchAction',  '_route' => 'sonata_admin_search',);
                }

                // sonata_admin_retrieve_autocomplete_items
                if ($pathinfo === '/admin/core/get-autocomplete-items') {
                    return array (  '_controller' => 'sonata.admin.controller.admin:retrieveAutocompleteItemsAction',  '_route' => 'sonata_admin_retrieve_autocomplete_items',);
                }

                if (0 === strpos($pathinfo, '/admin/subwaybuddy/user/user')) {
                    // admin_subwaybuddy_user_user_list
                    if ($pathinfo === '/admin/subwaybuddy/user/user/list') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'admin.customer',  '_sonata_name' => 'admin_subwaybuddy_user_user_list',  '_route' => 'admin_subwaybuddy_user_user_list',);
                    }

                    // admin_subwaybuddy_user_user_create
                    if ($pathinfo === '/admin/subwaybuddy/user/user/create') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'admin.customer',  '_sonata_name' => 'admin_subwaybuddy_user_user_create',  '_route' => 'admin_subwaybuddy_user_user_create',);
                    }

                    // admin_subwaybuddy_user_user_batch
                    if ($pathinfo === '/admin/subwaybuddy/user/user/batch') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'admin.customer',  '_sonata_name' => 'admin_subwaybuddy_user_user_batch',  '_route' => 'admin_subwaybuddy_user_user_batch',);
                    }

                    // admin_subwaybuddy_user_user_edit
                    if (preg_match('#^/admin/subwaybuddy/user/user/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_subwaybuddy_user_user_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'admin.customer',  '_sonata_name' => 'admin_subwaybuddy_user_user_edit',));
                    }

                    // admin_subwaybuddy_user_user_delete
                    if (preg_match('#^/admin/subwaybuddy/user/user/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_subwaybuddy_user_user_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'admin.customer',  '_sonata_name' => 'admin_subwaybuddy_user_user_delete',));
                    }

                    // admin_subwaybuddy_user_user_show
                    if (preg_match('#^/admin/subwaybuddy/user/user/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_subwaybuddy_user_user_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'admin.customer',  '_sonata_name' => 'admin_subwaybuddy_user_user_show',));
                    }

                    // admin_subwaybuddy_user_user_export
                    if ($pathinfo === '/admin/subwaybuddy/user/user/export') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'admin.customer',  '_sonata_name' => 'admin_subwaybuddy_user_user_export',  '_route' => 'admin_subwaybuddy_user_user_export',);
                    }

                }

            }

            if (0 === strpos($pathinfo, '/api')) {
                if (0 === strpos($pathinfo, '/api/users')) {
                    // get_user
                    if (preg_match('#^/api/users/(?P<user>[^/\\.]++)(?:\\.(?P<_format>xml|json|html))?$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_get_user;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'get_user')), array (  '_controller' => 'SubwayBuddy\\UserBundle\\Controller\\UserController::getUserAction',  '_format' => 'json',));
                    }
                    not_get_user:

                    // post_user
                    if (preg_match('#^/api/users(?:\\.(?P<_format>xml|json|html))?$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_post_user;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'post_user')), array (  '_controller' => 'SubwayBuddy\\UserBundle\\Controller\\UserController::postUserAction',  '_format' => 'json',));
                    }
                    not_post_user:

                }

                // post_connect
                if (0 === strpos($pathinfo, '/api/connects') && preg_match('#^/api/connects(?:\\.(?P<_format>xml|json|html))?$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_post_connect;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'post_connect')), array (  '_controller' => 'SubwayBuddy\\UserBundle\\Controller\\UserController::postConnectAction',  '_format' => 'json',));
                }
                not_post_connect:

                // get_users
                if (0 === strpos($pathinfo, '/api/users') && preg_match('#^/api/users(?:\\.(?P<_format>xml|json|html))?$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_get_users;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'get_users')), array (  '_controller' => 'SubwayBuddy\\UserBundle\\Controller\\RechercheController::getUsersAction',  '_format' => 'json',));
                }
                not_get_users:

                // post_recherche_username
                if (0 === strpos($pathinfo, '/api/recherches/usernames') && preg_match('#^/api/recherches/usernames(?:\\.(?P<_format>xml|json|html))?$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_post_recherche_username;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'post_recherche_username')), array (  '_controller' => 'SubwayBuddy\\UserBundle\\Controller\\RechercheController::postRechercheUsernameAction',  '_format' => 'json',));
                }
                not_post_recherche_username:

                // website_test
                if (0 === strpos($pathinfo, '/api/test') && preg_match('#^/api/test(?:\\.(?P<_format>xml|json|html))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'website_test')), array (  '_controller' => 'SubwayBuddy\\UserBundle\\Controller\\DefaultController::indexAction',  '_format' => 'json',));
                }

                if (0 === strpos($pathinfo, '/api/events')) {
                    // get_events
                    if (preg_match('#^/api/events(?:\\.(?P<_format>xml|json|html))?$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_get_events;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'get_events')), array (  '_controller' => 'Soccer\\EventBundle\\Controller\\EventController::getEventsAction',  '_format' => 'json',));
                    }
                    not_get_events:

                    // get_event
                    if (preg_match('#^/api/events/(?P<event>[^/\\.]++)(?:\\.(?P<_format>xml|json|html))?$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_get_event;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'get_event')), array (  '_controller' => 'Soccer\\EventBundle\\Controller\\EventController::getEventAction',  '_format' => 'json',));
                    }
                    not_get_event:

                    // post_event
                    if (preg_match('#^/api/events(?:\\.(?P<_format>xml|json|html))?$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_post_event;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'post_event')), array (  '_controller' => 'Soccer\\EventBundle\\Controller\\EventController::postEventAction',  '_format' => 'json',));
                    }
                    not_post_event:

                }

                // put_assigner_event
                if (0 === strpos($pathinfo, '/api/assigner/event') && preg_match('#^/api/assigner/event(?:\\.(?P<_format>xml|json|html))?$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'PUT') {
                        $allow[] = 'PUT';
                        goto not_put_assigner_event;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'put_assigner_event')), array (  '_controller' => 'Soccer\\EventBundle\\Controller\\AssignerEventController::putAssignerEventAction',  '_format' => 'json',));
                }
                not_put_assigner_event:

            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
