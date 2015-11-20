<?php
return [
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'aliases'=> [
        '@common'=>dirname(__DIR__),
        '@static'=>dirname(__DIR__).'/../static'
    ],
    'components' => [
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
    ]
];
