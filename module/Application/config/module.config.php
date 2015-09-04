<?php

/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2014 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */
return array(
    'static_salt' => 'aFGQ475SDsdfsaf2342',
    'router' => array(
        'routes' => array(
            'home' => array(
                'type' => 'Zend\Mvc\Router\Http\Literal',
                'options' => array(
                    'route' => '/',
                    'defaults' => array(
                        'controller' => 'Application\Controller\Index',
                        'action' => 'index',
                    ),
                ),
            ),
            'about' => array(
                'type' => 'Literal',
                'options' => array(
                    'route' => '/about',
                    'defaults' => array(
                        'controller' => 'Application\Controller\Index',
                        'action' => 'about',
                    ),
                ),
            ),
           
            'service' => array(
                'type' => 'Zend\Mvc\Router\Http\Literal',
                'options' => array(
                    'route' => '/service',
                    'defaults' => array(
                        'controller' => 'Application\Controller\Index',
                        'action' => 'service',
                    ),
                ),
            ),
            
            'howtoknow' => array(
                'type' => 'Zend\Mvc\Router\Http\Literal',
                'options' => array(
                    'route' => '/howtoknow',
                    'defaults' => array(
                        'controller' => 'Application\Controller\Index',
                        'action' => 'howtoknow',
                    ),
                ),
            ),
            
            'comingout' => array(
                'type' => 'Zend\Mvc\Router\Http\Literal',
                'options' => array(
                    'route' => '/comingout',
                    'defaults' => array(
                        'controller' => 'Application\Controller\Index',
                        'action' => 'comingout',
                    ),
                ),
            ),
            
            'behappy' => array(
                'type' => 'Zend\Mvc\Router\Http\Literal',
                'options' => array(
                    'route' => '/behappy',
                    'defaults' => array(
                        'controller' => 'Application\Controller\Index',
                        'action' => 'behappy',
                    ),
                ),
            ),
            
            'respect' => array(
                'type' => 'Zend\Mvc\Router\Http\Literal',
                'options' => array(
                    'route' => '/repsect',
                    'defaults' => array(
                        'controller' => 'Application\Controller\Index',
                        'action' => 'respect',
                    ),
                ),
            ),
            
            'transition' => array(
                'type' => 'Zend\Mvc\Router\Http\Literal',
                'options' => array(
                    'route' => '/transition',
                    'defaults' => array(
                        'controller' => 'Application\Controller\Index',
                        'action' => 'transition',
                    ),
                ),
            ),
            
            'bootstrap' => array(
                'type' => 'Zend\Mvc\Router\Http\Literal',
                'options' => array(
                    'route' => '/bootstrap',
                    'defaults' => array(
                        'controller' => 'Application\Controller\Index',
                        'action' => 'bootstrap',
                    ),
                ),
            ),
            
            
            'members' => array(
                'type' => 'Zend\Mvc\Router\Http\Literal',
                'options' => array(
                    'route' => '/members',
                    'defaults' => array(
                        'controller' => 'Application\Controller\Index',
                        'action' => 'members',
                    ),
                ),
            ),
            
            'resources' => array(
                'type' => 'Zend\Mvc\Router\Http\Literal',
                'options' => array(
                    'route' => '/resources',
                    'defaults' => array(
                        'controller' => 'Application\Controller\Index',
                        'action' => 'resources',
                    ),
                ),
            ),
            
            'contact' => array(
                'type' => 'Zend\Mvc\Router\Http\Literal',
                'options' => array(
                    'route' => '/contact',
                    'defaults' => array(
                        'controller' => 'Application\Controller\Index',
                        'action' => 'contact',
                    ),
                ),
            ),
            'register' => array(
                'type' => 'Literal',
                'options' => array(
                    'route' => '/application/register',
                    'defaults' => array(
                        'controller' => 'Application\Controller\register',
                        'action' => 'index',
                    ),
                ),
            ),
            'login' => array(
                'type' => 'Literal',
                'options' => array(
                    'route' => '/application/login',
                    'defaults' => array(
                        'controller' => 'Application\Controller\login',
                        'action' => 'index',
                    ),
                ),
            ),
            // The following is a route to simplify getting started creating
            // new controllers and actions without needing to create a new
            // module. Simply drop new controllers in, and you can access them
            // using the path /application/:controller/:action
            'application' => array(
                'type' => 'Literal',
                'options' => array(
                    'route' => '/application',
                    'defaults' => array(
                        '__NAMESPACE__' => 'Application\Controller',
                        'controller' => 'Index',
                        'action' => 'index',
                    ),
                ),
                'may_terminate' => true,
                'child_routes' => array(
                    'default' => array(
                        'type' => 'Segment',
                        'options' => array(
                            'route' => '/[:controller[/:action]]',
                            'constraints' => array(
                                'controller' => '[a-zA-Z][a-zA-Z]*',
                                'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
                            ),
                            'defaults' => array(
                            ),
                        ),
                    ),
                ),
            ),
        ),
    ),
    //all routes registered here should be literal routes
    'navigation' => array(
        'default' => array(
            array(
                'label' => 'HOME',
                'route' => 'home',
            ),
            array(
                'label' => 'ABOUT US',
                'route' => 'about',
                'action' => 'about',
            ),
            array(
                'label' => 'GALLERY',
                'route' => 'gallery',
                'pages' => array(
                    array(
                        'label' => 'PHOTOS',
                        'route' => 'photos',
                        'action' => 'photos',
                    ),
                    array(
                        'label' => 'Videos',
                        'route' => 'videos',
                        'action' => 'videos',
                    )
                ),
            ),
            array(
                'label' => 'OUR PROJECTS',
                'route' => 'projects',
                'action' => 'projects',
            ),
            array(
                'label' => 'VOLUNTEERING',
                'route' => 'volunteering',
                'action' => 'volunteering',
            ),
            array(
                'label' => 'DONATE',
                'route' => 'donate',
                'action' => 'donate',
            ),
            array(
                'label' => 'CONTACT',
                'route' => 'contact',
                'action' => 'contact',
            ),
        ),
    ),
    'service_manager' => array(
        'abstract_factories' => array(
            'Zend\Cache\Service\StorageCacheAbstractServiceFactory',
            'Zend\Log\LoggerAbstractServiceFactory',
        ),
        'factories' => array(
            'navigation' => 'Zend\Navigation\Service\DefaultNavigationFactory',
        ),
        'aliases' => array(
            'translator' => 'MvcTranslator',
            'Zend\Authentication\AuthenticationService' => 'my_auth_service',
        ),
        'invokables' => array(
            'my_auth_service' => 'Zend\Authentication\AuthenticationService',
        ),
    ),
    'translator' => array(
        'locale' => 'en_US',
        'translation_file_patterns' => array(
            array(
                'type' => 'gettext',
                'base_dir' => __DIR__ . '/../language',
                'pattern' => '%s.mo',
            ),
        ),
    ),
    'controllers' => array(
        'invokables' => array(
            'Application\Controller\Index' => 'Application\Controller\IndexController',
            'Application\Controller\Registration' => 'Application\Controller\RegistrationController',
             'Application\Controller\Register' => 'Application\Controller\RegisterController',
            'Application\Controller\Login' => 'Application\Controller\LoginController',    
        ),
    ),
    'view_manager' => array(
        'display_not_found_reason' => true,
        'display_exceptions' => true,
        'doctype' => 'HTML5',
        'not_found_template' => 'error/404',
        'exception_template' => 'error/index',
        'template_map' => array(
            'layout/layout' => __DIR__ . '/../view/layout/layout.phtml',
            'application/index/index' => __DIR__ . '/../view/application/index/index.phtml',
            'error/404' => __DIR__ . '/../view/error/404.phtml',
            'error/index' => __DIR__ . '/../view/error/index.phtml',
        ),
        'template_path_stack' => array(
            __DIR__ . '/../view',
        ),
    ),
    // Placeholder for console routes
    'console' => array(
        'router' => array(
            'routes' => array(
            ),
        ),
    ),
);
