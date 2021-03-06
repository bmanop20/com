<?php
use kartik\datecontrol\Module;
use kartik\grid\GridView;

$dateThai = array(
                    'shortDays'=>['จ','อ','พ','พฤ','ศ','ส','อ'],
                );

$config = [
    'components' => [
        'request' => [
            // !!! insert a secret key in the following (if it is empty) - this is required by cookie validation
            'cookieValidationKey' => 'A9aoj8R_Dt-KYTqCB58JcAgvfxiN7ZkW',
        ],
    ],
    'modules'=>[
        'datecontrol'=>[
            'class' => '\kartik\datecontrol\Module',
            'displaySettings'=>[
                    Module::FORMAT_DATE => 'dd-MM-yyyy',
                    Module::FORMAT_TIME => 'HH:mm:ss a',
                    Module::FORMAT_DATETIME => 'dd-MM-yyyy hh:mm:ss a', 
            ],
            'saveSettings'=>[
                Module::FORMAT_DATE => 'php:Y-m-d', // saves as unix timestamp
                Module::FORMAT_TIME => 'php:H:i:s',
                Module::FORMAT_DATETIME => 'php:Y-m-d H:i:s',
            ],
            //'saveTimezone' => 'UTC',
        
            'displayTimezone' => 'Asia/Bangkok',
            'autoWidget' => true,
            'autoWidgetSettings' => [
            Module::FORMAT_DATE => [
                                        'type'=>2, 
                                        'pluginOptions'=>[
                                                            'autoclose'=>true,
                                                            'todayHighlight' => true,
                                                            'dateSettins'=>$dateThai,
                                                        ]
                                    ], // FORMAT_DATE
            Module::FORMAT_DATETIME => [], // setup if needed
            Module::FORMAT_TIME => [], // setup if needed
            ],
        ],
        'gridview' =>  [
        'class' => '\kartik\grid\Module',
        // enter optional module parameters below - only if you need to  
        // use your own export download action or custom translation 
        // message source
        'downloadAction' => 'gridview/export/download',

        // 'i18n' => []
        ],

    ],
];

if (!YII_ENV_TEST) {
    // configuration adjustments for 'dev' environment
    $config['bootstrap'][] = 'debug';
    $config['modules']['debug'] = 'yii\debug\Module';

    $config['bootstrap'][] = 'gii';
    $config['modules']['gii'] = 'yii\gii\Module';
}

return $config;
