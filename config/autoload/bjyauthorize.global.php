<?php

return array(
    'bjyauthorize' => array(

        'default_role'          => 'visitor',        
        'authenticated_role'    => 'admin',
        
        'identity_provider'
            => 'BjyAuthorize\Provider\Identity\AuthenticationIdentityProvider',

        'role_providers' => array(
            'BjyAuthorize\Provider\Role\Config' => array(
                'visitor'   => array(),
                'admin'     => array(),
            ),
        ),
        
        'template' => 'error/unauthorized',
        
        'guards' => array(
            'BjyAuthorize\Guard\Route' => array(
                array('route' => 'home', 'roles' => array('visitor', 'admin')),
                array('route' => 'admin', 'roles' => array('admin')),
                
                array('route' => 'zfcuser', 'roles' => array('admin')),
                array('route' => 'zfcuser/logout', 'roles' => array('admin')),
                array('route' => 'zfcuser/login', 'roles' => array('visitor')),
                array('route' => 'zfcuser/register', 'roles' => array('visitor')),
            ),
        ),
    ),
);
