<?php
require_once 'interfaces/SerializableInterface.php';
require_once 'interfaces/IBar.php';
require_once 'interfaces/ArrayAccess.php';
require_once 'interfaces/AuthInterface.php';
require_once 'interfaces/RoleInterface.php';
require_once 'classes/Auth.php';

$auth = new Auth();
var_dump($auth->login());

// print_r( $auth::_MSG_TEMPLATE);