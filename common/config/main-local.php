<?php
ini_set('max_execution_time', 3000);
//ini_set("memory_limit","100000M");
return [
    'components' => [
        'db' => [
            
            'class' => 'yii\db\Connection',
            'dsn' => 'mysql:host=192.168.1.12;dbname=databases',
            'username' => 'maewang',
            'password' => '1113850360',
            'charset' => 'utf8',
        ],
        'db2' =>
        [
            'class' => 'yii\db\Connection',
            'dsn' => 'mysql:host=192.168.1.11;dbname=hosxpdb2',
            'username' => 'maewang',
            'password' => '1113850360',
            'charset' => 'utf8',
        ],
        'mailer' => [
            'class' => 'yii\swiftmailer\Mailer',
            'viewPath' => '@common/mail',
            // send all mails to a file by default. You have to set
            // 'useFileTransport' to false and configure a transport
            // for the mailer to send real emails.
            'useFileTransport' => true,
        ],
    ],
];
