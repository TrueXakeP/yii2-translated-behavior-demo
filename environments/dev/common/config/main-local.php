<?php
return [
    'components' => [
        'db' => [
            'class' => 'yii\db\Connection',
            'dsn' => 'sqlite:@common/data/db.sqlite',
            'charset' => 'utf8',

            'enableSchemaCache' => true,

            'attributes' => [
                PDO::ATTR_PERSISTENT => true
            ]
        ],
        'mailer' => [
            'useFileTransport' => true,
        ],
    ],
];
