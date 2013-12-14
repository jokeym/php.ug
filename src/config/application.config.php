<?php
return array(
    'modules'=>array(
        'ZendDeveloperTools',
        'DoctrineModule',
        'DoctrineORMModule',
        'Phpug',
        'OrgHeiglMailproxy',
        'OrgHeiglContact',
        'OrgHeiglHybridAuth',
        'OrgHeiglGeolocation',
    ),
    'module_listener_options'=>array(
    	'config_glob_paths'    => array(
    		'config/autoload/{,*.}{global,local}.php',
    		'config/autoload/{,*.}' . (getenv('APPLICATION_ENV') ?: 'production') . '.php',
    	),
    	'config_cache_enabled'=>false,
        'cache_dir'=>'data/cache',
        'module_paths'=>array(
            './module',
        	'../vendor',
        ),
    ),
);
