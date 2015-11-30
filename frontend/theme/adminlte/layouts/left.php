<aside class="main-sidebar">

    <section class="sidebar">

        

        <?= dmstr\widgets\Menu::widget(
            [
                'options' => ['class' => 'sidebar-menu'],
                'items' => [
                    ['label' => 'Main Menu', 'options' => ['class' => 'header']],
                    ['label'=>'ระบบครุภัณฑ์คอมพิวเตอร์','url'=>'#','options'=>['class'=>'active treeview'],
                      'items'=>[
                          ['label'=>' สรุปรายการ','icon'=>'fa fa-fw fa-desktop text-yellow','url'=>['com/']],
                          ['label'=>' ลงหมายเลขครุภัณฑ์','icon'=>'fa fa-edit text-red','url'=>['com/create']],
                          ['label'=>' รายการคอมพิวเตอร์แยกฝ่าย','icon'=>'fa fa-edit text-aqua','url'=>['com-dep/']],
                      ],
                    ],
                    
                    [   'label' => 'ข้อมูลการเงิน', 
                        //'url' => 'http://localhost/com/vendor/almasaeed2010/adminlte/index2.html',
                        'url'=>'#','options'=>['class'=>'active treeview'],
                        'items'=>[
                            ['label'=> 'ข้อมูล UnitCost ผู้ป่วยใน','url'=>['ipt/']],
                            ['label'=> 'ข้อมูล UnitCost ผู้ป่วยนอก','url'=>['vn-stat/']],
                            //['label'=> 'ข้อมูล UnitCost OPD','url'=>'#'],
                        ],
                    ],
                    [   'label' => 'ข้อมูลทันตกรรม', 
                        //'url' => 'http://localhost/com/vendor/almasaeed2010/adminlte/index2.html',
                        'url'=>'#','options'=>['class'=>'active treeview'],
                        'items'=>[
                            ['label'=> 'รายงานการมารับบริการ','url'=>['dtmain/']],
                            //['label'=> 'ข้อมูล UnitCost ผู้ป่วยนอก','url'=>['vn-stat/']],
                            //['label'=> 'ข้อมูล UnitCost OPD','url'=>'#'],
                        ],
                    ],
                    [   'label' => 'รายงานห้องฉุกเฉิน', 
                        //'url' => 'http://localhost/com/vendor/almasaeed2010/adminlte/index2.html',
                        'url'=>'#','options'=>['class'=>'active treeview'],
                        'items'=>[
                            ['label'=> 'P4P ระดับความฉุกเฉิน','url'=>['er/']],
                            ['label'=> 'P4P หัตถการ','url'=>['er/index2']],
                            //['label'=> 'ข้อมูล UnitCost ผู้ป่วยนอก','url'=>['vn-stat/']],
                            //['label'=> 'ข้อมูล UnitCost OPD','url'=>'#'],
                        ],
                    ],
                    //['label' => 'Gii', 'icon' => 'fa fa-file-code-o', 'url' => ['/gii']],
                    //['label' => 'Debug', 'icon' => 'fa fa-dashboard', 'url' => ['/debug']],
                    ['label' => 'Login', 'url' => ['site/login'], 'visible' => Yii::$app->user->isGuest],
                    
                    [   'label' => 'Theme', 
                        'url' => 'http://localhost/com/vendor/almasaeed2010/adminlte/index2.html',
                        
                    ]
//                    [
//                        'label' => 'Same tools',
//                        'icon' => 'fa fa-share',
//                        'url' => '#',
//                        'items' => [
//                            ['label' => 'Gii', 'icon' => 'fa fa-file-code-o', 'url' => ['/gii'],],
//                            ['label' => 'Debug', 'icon' => 'fa fa-dashboard', 'url' => ['/debug'],],
//                            [
//                                'label' => 'Level One',
//                                'icon' => 'fa fa-circle-o',
//                                'url' => '#',
//                                'items' => [
//                                    ['label' => 'Level Two', 'icon' => 'fa fa-circle-o', 'url' => '#',],
//                                    [
//                                        'label' => 'Level Two',
//                                        'icon' => 'fa fa-circle-o',
//                                        'url' => '#',
//                                        'items' => [
//                                            ['label' => 'Level Three', 'icon' => 'fa fa-circle-o', 'url' => '#',],
//                                            ['label' => 'Level Three', 'icon' => 'fa fa-circle-o', 'url' => '#',],
//                                        ],
//                                    ],
//                                ],
//                            ],
//                        ],
//                    ],
                
                ],
                //'encodeLabels'=>false,
                
            ]
        ) ?>

    </section>

</aside>
