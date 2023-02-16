<?php

return [
    'mysql_host' => 'localhost',
    'mysql_user' =>'root',
    'mysql_password' => '',
    'mysql_db' => 'user-management-system',
    'recordPerPage' => 10,
    'recordPerPageOptions' => [5,10,20,30, 50,100],
    'orderByColums' => [
        'id','username','fiscalcode','email','age'
    ],
    'numLinkNavigator' => 5,
];