<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2014 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

return array(
    'router' => array(
        'routes' => array(
            'lanterna' => array(
                'type' => 'segment',
                'options' => array(
                    'route' => '/lanterna[/:action][/:key][page/:page]',
                    'defaults' => array(
                        'controller' => 'Tropa\Controller\Lanterna',
                        'action'     => 'index',
                        'key'     => null,
                        'page'       => 1
                    )
                )
            ),
            'setor' => array(
                'type'      => 'segment',
                'options'   => array(
                    'route'     => '/setor[/:action][/:key][page/:page]',
                    'defaults'  => array(
                        'controller' => 'Tropa\Controller\Setor',
                        'action'     => 'index',
                        'key'     => null,
                        'page'       => 1
                    )
                )
            )
        ),
    ),
    'service_manager' => array(
        'abstract_factories' => array(
            'Zend\Cache\Service\StorageCacheAbstractServiceFactory',
            'Zend\Log\LoggerAbstractServiceFactory',
        ),
        'aliases' => array(
            'translator' => 'MvcTranslator',
        ),
    ),
    'translator' => array(
        'locale' => 'en_US',
        'translation_file_patterns' => array(
            array(
                'type'     => 'gettext',
                'base_dir' => __DIR__ . '/../language',
                'pattern'  => '%s.mo',
            ),
        ),
    ),
    'controllers' => array(
        'invokables' => array(
            'Tropa\Controller\Lanterna' => 'Tropa\Controller\LanternaController',
            'Tropa\Controller\Setor'    => 'Tropa\Controller\SetorController'
        ),
    ),
    'view_manager' => array(
        'display_not_found_reason' => true,
        'display_exceptions'       => true,
        'doctype'                  => 'HTML5',
        'not_found_template'       => 'error/404',
        'exception_template'       => 'error/index',
        'template_map' => array(
            'layout/layout'           => __DIR__ . '/../view/layout/layout.phtml',
            'tropa/setor/index' => __DIR__ . '/../view/tropa/setor/index.phtml',
            'error/404'               => __DIR__ . '/../view/error/404.phtml',
            'error/index'             => __DIR__ . '/../view/error/index.phtml',
        ),
        'template_path_stack' => array(
            'Tropa' => __DIR__ . '/../view',
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
