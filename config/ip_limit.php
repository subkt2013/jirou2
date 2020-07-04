<?php
return [
    'enable'   => env('IP_LIMIT_ENABLE', false),
    'isProxy'  => env('IP_LIMIT_PROXY',  false),
    'allowIps' => [
        env('LOCALHOST_IP', '127.0.0.1'),
	    env('IP_LIMIT_ENABLE_ADDRESS_01', false) ,
	    env('IP_LIMIT_ENABLE_ADDRESS_02', false) ,
	    env('IP_LIMIT_ENABLE_ADDRESS_03', false) ,
	    env('IP_LIMIT_ENABLE_ADDRESS_04', false) ,
	    env('IP_LIMIT_ENABLE_ADDRESS_05', false) ,
    ],
];