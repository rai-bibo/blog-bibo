<?php

//define all paths first, this is in parallel with directory structure
define('API_PATH', 'api');
define('API_VERSION', '');
//index file, can be removed by htaccess, w/o trailing slash, add 'index.php' if no htaccess was defined
define('INDEX_FILE', '');
//build the basepath for file inclusions
define('BASEPATH', $_SERVER['DOCUMENT_ROOT'].'/'.API_PATH.'/'.API_VERSION.'/'.INDEX_FILE);
define('SITEPATH', 'http://'.$_SERVER['SERVER_NAME'].'/'.API_PATH.'/'.API_VERSION.'/'.INDEX_FILE);

/*
 * authentication type
 * 
 * available options:
 * 
 * BASIC
 * DIGEST
 * OAUTH - not yet implemented
 * SIGNED_REQUEST - not yet implemented
 * 
 */
define('AUTH_TYPE', 'BASIC');

//basic and digest authentication realm, changing it will affect how the passwords are hashed
define('AUTH_REALM', 'PHP REST API');

//this defines the label to use beside the token in authorization headers when requesting for resource
//format: Authorization: AUTH_HEADER_LABEL USER_ID USER_TOKEN
define('AUTH_HEADER_LABEL', 'RESTAPI');

//number of hours until session expires for resources with authorization check
define('EXPIRE_ACCESS_HOURS', 180);

//core php functions to check
$core['functions'] = array(
     'json_encode',
     'mysqli_real_escape_string',
);
//core php classes to check
$core['classes'] = array(
);
