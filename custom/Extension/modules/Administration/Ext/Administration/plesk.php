<?php

$admin_option_defs = array();
$admin_option_defs['Administration']['config'] = array(
        //Icon name. Available icons are located in ./themes/default/images
        'Administration',
        
        //Link name label 
        'Configure',
        
        //Link description label
        'Change te settings for making a connection to Plesk',
        
        //Link URL
        './index.php?module=Administration&action=PleskAdmin',
);
$admin_group_header[] = array(
        //Section header label
        'Plesk API',
        
        //$other_text parameter for get_form_header()
        '',
        
        //$show_help parameter for get_form_header()
        false,
        
        //Section links
        $admin_option_defs,
        
        //Section description label
        ''
    );
