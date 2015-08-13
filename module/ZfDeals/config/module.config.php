<?php

return [
    'router' => [
        'routes' => [
            'zf-deals\admin\home' => [
                'type' => 'Zend\Mvc\Router\Http\Literal',
                'options' => [
                    'route' => '/deals/admin',
                    'defaults' => [
                        'controller' => 'ZfDeals\Controller\Admin',
                        'action'     => 'index',
                    ],
                ],
            ],
        ],
    ],
    'controllers' => [
        'invokables' => [
            'ZfDeals\Controller\Admin' => 'ZfDeals\Controller\AdminController',
        ],
    ],
    'view_manager' => [
        'template_map' => [
            'zf-deals/layout/admin' => __DIR__ . '/../view/layout/admin.phtml',
        ],
        'template_path_stack' => [
            __DIR__ . '/../view',
        ],
    ],
];
