<?php
/**
 * @access protected
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 */

namespace MSBios\Content\Article\Doctrine;

use Doctrine\ORM\Mapping\Driver\AnnotationDriver;

return [

    'doctrine' => [
        'driver' => [
             ArticleInterface::class => [
                 'class' => AnnotationDriver::class,
                 'cache' => 'array',
                 'paths' => [
                     __DIR__ . '/../src'
                 ]
             ],
             'orm_default' => [
                 'drivers' => [
                     Entity::class =>
                         ArticleInterface::class
                 ]
             ]
        ],

        'entity_resolver' => [
            'orm_default' => [
                'resolvers' => [
                    ArticleInterface::class =>
                        Entity::class,
                ],
            ],
        ],
    ],
];
