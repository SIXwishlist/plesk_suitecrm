<?php
    $manifest = array(
        'acceptable_sugar_flavors' => array('CE','PRO','CORP','ENT','ULT'),
        'acceptable_sugar_versions' => array(
            'exact_matches' => array(),
            'regex_matches' => array('6\\.[0-9]\\.[0-9]$'),
        ),

        'author' => 'Glenn Hermans',
        'description' => 'Plesk provisioning within SuiteCRM',
        'icon' => '',
        'is_uninstallable' => true,
        'name' => 'Plesk Provisioning Installer',
        'published_date' => '2016-03-01 1:05:00',
        'type' => 'module',
        'version' => '1391608631',
    );
    $installdefs = array(
        'id' => 'package_1391608631',
        'copy' => array(
            0 => array(
                'from' => 'custom/Extension/modules/Administration/Ext/Administration/plesk.php',
                'to' => 'custom/Extension/modules/Administration/Ext/Administration/plesk.php',
            ),
            1 => array(
                'from' => 'custom/Extension/modules/Administration/Ext/Language/en_us.plesk',
                'to' => 'custom/Extension/modules/Administration/Ext/Language/en_us.plesk',
            ),
            2 => array(
                'from' => 'custom/Extension/modules/Schedulers/Ext/ScheduledTasks/plesk_customers.php',
                'to' => 'custom/Extension/modules/Schedulers/Ext/ScheduledTasks/plesk_customers.php',
            ),
            3 => array(
                'from' => 'custom/Extension/modules/Schedulers/Ext/Language/en_us.plesk.php',
                'to' => 'custom/Extension/modules/Schedulers/Ext/Language/en_us.plesk.php',
            ),
            4 => array(
                'from' => 'custom/modules/Administration/PleskAdmin.php',
                'to' => 'custom/modules/Administration/PleskAdmin.php',
            ),
            5 => array(
                'from' => 'custom/modules/Administration/PleskAdmin.tpl',
                'to' => 'custom/modules/Administration/PleskAdmin.tpl',
            ),
        ),
    );
