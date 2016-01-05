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

        if (0 === strpos($pathinfo, '/hello')) {
            // soccer_team_homepage
            if (preg_match('#^/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'soccer_team_homepage')), array (  '_controller' => 'Soccer\\TeamBundle\\Controller\\DefaultController::indexAction',));
            }

            // soccer_landing_test
            if (preg_match('#^/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'soccer_landing_test')), array (  '_controller' => 'Soccer\\LandingBundle\\Controller\\DefaultController::indexAction',));
            }

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

        // subwaybuddy_user_notification_getnotifications
        if (rtrim($pathinfo, '/') === '') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_subwaybuddy_user_notification_getnotifications;
            }

            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'subwaybuddy_user_notification_getnotifications');
            }

            return array (  '_controller' => 'SubwayBuddy\\UserBundle\\Controller\\NotificationController::getNotificationsAction',  '_route' => 'subwaybuddy_user_notification_getnotifications',);
        }
        not_subwaybuddy_user_notification_getnotifications:

        // subwaybuddy_user_profil_getprofils
        if (rtrim($pathinfo, '/') === '') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_subwaybuddy_user_profil_getprofils;
            }

            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'subwaybuddy_user_profil_getprofils');
            }

            return array (  '_controller' => 'SubwayBuddy\\UserBundle\\Controller\\ProfilController::getProfilsAction',  '_route' => 'subwaybuddy_user_profil_getprofils',);
        }
        not_subwaybuddy_user_profil_getprofils:

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
                if (0 === strpos($pathinfo, '/api/user')) {
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

                    // put_user
                    if (preg_match('#^/api/user(?:\\.(?P<_format>xml|json|html))?$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'PUT') {
                            $allow[] = 'PUT';
                            goto not_put_user;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'put_user')), array (  '_controller' => 'SubwayBuddy\\UserBundle\\Controller\\UserController::putUserAction',  '_format' => 'json',));
                    }
                    not_put_user:

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

                // get_friends
                if (0 === strpos($pathinfo, '/api/friends') && preg_match('#^/api/friends/(?P<user>[^/\\.]++)(?:\\.(?P<_format>xml|json|html))?$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_get_friends;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'get_friends')), array (  '_controller' => 'SubwayBuddy\\UserBundle\\Controller\\FriendsController::getFriendsAction',  '_format' => 'json',));
                }
                not_get_friends:

                // post_recherche_pas_ami
                if (0 === strpos($pathinfo, '/api/recherches/pas/amis') && preg_match('#^/api/recherches/pas/amis(?:\\.(?P<_format>xml|json|html))?$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_post_recherche_pas_ami;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'post_recherche_pas_ami')), array (  '_controller' => 'SubwayBuddy\\UserBundle\\Controller\\FriendsController::postRecherchePasAmiAction',  '_format' => 'json',));
                }
                not_post_recherche_pas_ami:

                if (0 === strpos($pathinfo, '/api/demandes')) {
                    // post_demande_ami
                    if (0 === strpos($pathinfo, '/api/demandes/amis') && preg_match('#^/api/demandes/amis(?:\\.(?P<_format>xml|json|html))?$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_post_demande_ami;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'post_demande_ami')), array (  '_controller' => 'SubwayBuddy\\UserBundle\\Controller\\FriendsController::postDemandeAmiAction',  '_format' => 'json',));
                    }
                    not_post_demande_ami:

                    // post_demande_liste_ami
                    if (0 === strpos($pathinfo, '/api/demandes/listes/amis') && preg_match('#^/api/demandes/listes/amis(?:\\.(?P<_format>xml|json|html))?$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_post_demande_liste_ami;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'post_demande_liste_ami')), array (  '_controller' => 'SubwayBuddy\\UserBundle\\Controller\\FriendsController::postDemandeListeAmiAction',  '_format' => 'json',));
                    }
                    not_post_demande_liste_ami:

                }

                if (0 === strpos($pathinfo, '/api/notification')) {
                    if (0 === strpos($pathinfo, '/api/notifications')) {
                        // get_notifications
                        if (preg_match('#^/api/notifications(?:\\.(?P<_format>xml|json|html))?$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_get_notifications;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'get_notifications')), array (  '_controller' => 'SubwayBuddy\\UserBundle\\Controller\\NotificationController::getNotificationsAction',  '_format' => 'json',));
                        }
                        not_get_notifications:

                        // get_notification
                        if (preg_match('#^/api/notifications/(?P<notification>[^/\\.]++)(?:\\.(?P<_format>xml|json|html))?$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_get_notification;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'get_notification')), array (  '_controller' => 'SubwayBuddy\\UserBundle\\Controller\\NotificationController::getNotificationAction',  '_format' => 'json',));
                        }
                        not_get_notification:

                        // post_notification_user
                        if (0 === strpos($pathinfo, '/api/notifications/users') && preg_match('#^/api/notifications/users(?:\\.(?P<_format>xml|json|html))?$#s', $pathinfo, $matches)) {
                            if ($this->context->getMethod() != 'POST') {
                                $allow[] = 'POST';
                                goto not_post_notification_user;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'post_notification_user')), array (  '_controller' => 'SubwayBuddy\\UserBundle\\Controller\\NotificationController::postNotificationUserAction',  '_format' => 'json',));
                        }
                        not_post_notification_user:

                    }

                    // put_notification
                    if (preg_match('#^/api/notification(?:\\.(?P<_format>xml|json|html))?$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'PUT') {
                            $allow[] = 'PUT';
                            goto not_put_notification;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'put_notification')), array (  '_controller' => 'SubwayBuddy\\UserBundle\\Controller\\NotificationController::putNotificationAction',  '_format' => 'json',));
                    }
                    not_put_notification:

                }

                // website_test
                if (0 === strpos($pathinfo, '/api/test') && preg_match('#^/api/test(?:\\.(?P<_format>xml|json|html))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'website_test')), array (  '_controller' => 'SubwayBuddy\\UserBundle\\Controller\\DefaultController::indexAction',  '_format' => 'json',));
                }

                if (0 === strpos($pathinfo, '/api/event')) {
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

                        // post_event_created
                        if (0 === strpos($pathinfo, '/api/events/createds') && preg_match('#^/api/events/createds(?:\\.(?P<_format>xml|json|html))?$#s', $pathinfo, $matches)) {
                            if ($this->context->getMethod() != 'POST') {
                                $allow[] = 'POST';
                                goto not_post_event_created;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'post_event_created')), array (  '_controller' => 'Soccer\\EventBundle\\Controller\\EventController::postEventCreatedAction',  '_format' => 'json',));
                        }
                        not_post_event_created:

                        // post_event_participate
                        if (0 === strpos($pathinfo, '/api/events/participates') && preg_match('#^/api/events/participates(?:\\.(?P<_format>xml|json|html))?$#s', $pathinfo, $matches)) {
                            if ($this->context->getMethod() != 'POST') {
                                $allow[] = 'POST';
                                goto not_post_event_participate;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'post_event_participate')), array (  '_controller' => 'Soccer\\EventBundle\\Controller\\EventController::postEventParticipateAction',  '_format' => 'json',));
                        }
                        not_post_event_participate:

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

                    // put_event
                    if (preg_match('#^/api/event(?:\\.(?P<_format>xml|json|html))?$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'PUT') {
                            $allow[] = 'PUT';
                            goto not_put_event;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'put_event')), array (  '_controller' => 'Soccer\\EventBundle\\Controller\\EventController::putEventAction',  '_format' => 'json',));
                    }
                    not_put_event:

                    if (0 === strpos($pathinfo, '/api/events')) {
                        if (0 === strpos($pathinfo, '/api/events/users')) {
                            // post_event_user
                            if (preg_match('#^/api/events/users(?:\\.(?P<_format>xml|json|html))?$#s', $pathinfo, $matches)) {
                                if ($this->context->getMethod() != 'POST') {
                                    $allow[] = 'POST';
                                    goto not_post_event_user;
                                }

                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'post_event_user')), array (  '_controller' => 'Soccer\\EventBundle\\Controller\\EventController::postEventUserAction',  '_format' => 'json',));
                            }
                            not_post_event_user:

                            // post_event_user_attente
                            if (0 === strpos($pathinfo, '/api/events/users/attentes') && preg_match('#^/api/events/users/attentes(?:\\.(?P<_format>xml|json|html))?$#s', $pathinfo, $matches)) {
                                if ($this->context->getMethod() != 'POST') {
                                    $allow[] = 'POST';
                                    goto not_post_event_user_attente;
                                }

                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'post_event_user_attente')), array (  '_controller' => 'Soccer\\EventBundle\\Controller\\EventController::postEventUserAttenteAction',  '_format' => 'json',));
                            }
                            not_post_event_user_attente:

                        }

                        // post_event_team
                        if (0 === strpos($pathinfo, '/api/events/teams') && preg_match('#^/api/events/teams(?:\\.(?P<_format>xml|json|html))?$#s', $pathinfo, $matches)) {
                            if ($this->context->getMethod() != 'POST') {
                                $allow[] = 'POST';
                                goto not_post_event_team;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'post_event_team')), array (  '_controller' => 'Soccer\\EventBundle\\Controller\\EventController::postEventTeamAction',  '_format' => 'json',));
                        }
                        not_post_event_team:

                    }

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

                // put_update_assigner_event
                if (0 === strpos($pathinfo, '/api/update/assigner/event') && preg_match('#^/api/update/assigner/event(?:\\.(?P<_format>xml|json|html))?$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'PUT') {
                        $allow[] = 'PUT';
                        goto not_put_update_assigner_event;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'put_update_assigner_event')), array (  '_controller' => 'Soccer\\EventBundle\\Controller\\AssignerEventController::putUpdateAssignerEventAction',  '_format' => 'json',));
                }
                not_put_update_assigner_event:

                if (0 === strpos($pathinfo, '/api/assigner/event')) {
                    // put_assigner_event_list
                    if (0 === strpos($pathinfo, '/api/assigner/event/list') && preg_match('#^/api/assigner/event/list(?:\\.(?P<_format>xml|json|html))?$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'PUT') {
                            $allow[] = 'PUT';
                            goto not_put_assigner_event_list;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'put_assigner_event_list')), array (  '_controller' => 'Soccer\\EventBundle\\Controller\\AssignerEventController::putAssignerEventListAction',  '_format' => 'json',));
                    }
                    not_put_assigner_event_list:

                    // delete_assigner_event
                    if (preg_match('#^/api/assigner/event(?:\\.(?P<_format>xml|json|html))?$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'DELETE') {
                            $allow[] = 'DELETE';
                            goto not_delete_assigner_event;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'delete_assigner_event')), array (  '_controller' => 'Soccer\\EventBundle\\Controller\\AssignerEventController::deleteAssignerEventAction',  '_format' => 'json',));
                    }
                    not_delete_assigner_event:

                }

                if (0 === strpos($pathinfo, '/api/te')) {
                    if (0 === strpos($pathinfo, '/api/terrains')) {
                        // get_terrains
                        if (preg_match('#^/api/terrains(?:\\.(?P<_format>xml|json|html))?$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_get_terrains;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'get_terrains')), array (  '_controller' => 'Soccer\\EventBundle\\Controller\\TerrainController::getTerrainsAction',  '_format' => 'json',));
                        }
                        not_get_terrains:

                        // get_terrain
                        if (preg_match('#^/api/terrains/(?P<terrain>[^/\\.]++)(?:\\.(?P<_format>xml|json|html))?$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_get_terrain;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'get_terrain')), array (  '_controller' => 'Soccer\\EventBundle\\Controller\\TerrainController::getTerrainAction',  '_format' => 'json',));
                        }
                        not_get_terrain:

                        // post_terrain
                        if (preg_match('#^/api/terrains(?:\\.(?P<_format>xml|json|html))?$#s', $pathinfo, $matches)) {
                            if ($this->context->getMethod() != 'POST') {
                                $allow[] = 'POST';
                                goto not_post_terrain;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'post_terrain')), array (  '_controller' => 'Soccer\\EventBundle\\Controller\\TerrainController::postTerrainAction',  '_format' => 'json',));
                        }
                        not_post_terrain:

                    }

                    if (0 === strpos($pathinfo, '/api/teams')) {
                        // get_teams
                        if (preg_match('#^/api/teams(?:\\.(?P<_format>xml|json|html))?$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_get_teams;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'get_teams')), array (  '_controller' => 'Soccer\\TeamBundle\\Controller\\TeamController::getTeamsAction',  '_format' => 'json',));
                        }
                        not_get_teams:

                        // get_team
                        if (preg_match('#^/api/teams/(?P<team>[^/\\.]++)(?:\\.(?P<_format>xml|json|html))?$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_get_team;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'get_team')), array (  '_controller' => 'Soccer\\TeamBundle\\Controller\\TeamController::getTeamAction',  '_format' => 'json',));
                        }
                        not_get_team:

                        // post_team_event
                        if (0 === strpos($pathinfo, '/api/teams/events') && preg_match('#^/api/teams/events(?:\\.(?P<_format>xml|json|html))?$#s', $pathinfo, $matches)) {
                            if ($this->context->getMethod() != 'POST') {
                                $allow[] = 'POST';
                                goto not_post_team_event;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'post_team_event')), array (  '_controller' => 'Soccer\\TeamBundle\\Controller\\TeamController::postTeamEventAction',  '_format' => 'json',));
                        }
                        not_post_team_event:

                        // post_team
                        if (preg_match('#^/api/teams(?:\\.(?P<_format>xml|json|html))?$#s', $pathinfo, $matches)) {
                            if ($this->context->getMethod() != 'POST') {
                                $allow[] = 'POST';
                                goto not_post_team;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'post_team')), array (  '_controller' => 'Soccer\\TeamBundle\\Controller\\TeamController::postTeamAction',  '_format' => 'json',));
                        }
                        not_post_team:

                    }

                }

                // post_generate_team
                if (0 === strpos($pathinfo, '/api/generates/teams') && preg_match('#^/api/generates/teams(?:\\.(?P<_format>xml|json|html))?$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_post_generate_team;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'post_generate_team')), array (  '_controller' => 'Soccer\\TeamBundle\\Controller\\TeamController::postGenerateTeamAction',  '_format' => 'json',));
                }
                not_post_generate_team:

                if (0 === strpos($pathinfo, '/api/match')) {
                    // get_matchs
                    if (0 === strpos($pathinfo, '/api/matchs') && preg_match('#^/api/matchs(?:\\.(?P<_format>xml|json|html))?$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_get_matchs;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'get_matchs')), array (  '_controller' => 'Soccer\\TeamBundle\\Controller\\MatchController::getMatchsAction',  '_format' => 'json',));
                    }
                    not_get_matchs:

                    // get_match
                    if (0 === strpos($pathinfo, '/api/matches') && preg_match('#^/api/matches/(?P<match>[^/\\.]++)(?:\\.(?P<_format>xml|json|html))?$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_get_match;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'get_match')), array (  '_controller' => 'Soccer\\TeamBundle\\Controller\\MatchController::getMatchAction',  '_format' => 'json',));
                    }
                    not_get_match:

                    // get_matchuser
                    if (0 === strpos($pathinfo, '/api/matchusers') && preg_match('#^/api/matchusers/(?P<match>[^/\\.]++)(?:\\.(?P<_format>xml|json|html))?$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_get_matchuser;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'get_matchuser')), array (  '_controller' => 'Soccer\\TeamBundle\\Controller\\MatchController::getMatchuserAction',  '_format' => 'json',));
                    }
                    not_get_matchuser:

                    // get_matchevent
                    if (0 === strpos($pathinfo, '/api/matchevents') && preg_match('#^/api/matchevents/(?P<event>[^/\\.]++)(?:\\.(?P<_format>xml|json|html))?$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_get_matchevent;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'get_matchevent')), array (  '_controller' => 'Soccer\\TeamBundle\\Controller\\MatchController::getMatcheventAction',  '_format' => 'json',));
                    }
                    not_get_matchevent:

                }

                if (0 === strpos($pathinfo, '/api/add/but')) {
                    // put_add_but
                    if (preg_match('#^/api/add/but(?:\\.(?P<_format>xml|json|html))?$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'PUT') {
                            $allow[] = 'PUT';
                            goto not_put_add_but;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'put_add_but')), array (  '_controller' => 'Soccer\\TeamBundle\\Controller\\MatchController::putAddButAction',  '_format' => 'json',));
                    }
                    not_put_add_but:

                    // put_add_buts
                    if (0 === strpos($pathinfo, '/api/add/buts') && preg_match('#^/api/add/buts(?:\\.(?P<_format>xml|json|html))?$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'PUT') {
                            $allow[] = 'PUT';
                            goto not_put_add_buts;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'put_add_buts')), array (  '_controller' => 'Soccer\\TeamBundle\\Controller\\MatchController::putAddButsAction',  '_format' => 'json',));
                    }
                    not_put_add_buts:

                }

                // post_match
                if (0 === strpos($pathinfo, '/api/matches') && preg_match('#^/api/matches(?:\\.(?P<_format>xml|json|html))?$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_post_match;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'post_match')), array (  '_controller' => 'Soccer\\TeamBundle\\Controller\\MatchController::postMatchAction',  '_format' => 'json',));
                }
                not_post_match:

            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
