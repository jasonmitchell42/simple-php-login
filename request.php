<?php
include_once 'inc/users.php';

$request_uri = ltrim($_SERVER['REQUEST_URI'], '/');
$args = explode('/', $request_uri);
$request = $args[0];
array_shift($args);

$users = new Users();
$states = $users->getStates();

switch ($request) {
    case 'logout' :
        unset($_SESSION['user']);
        Header('Location: /');
        break;
    case 'delete' :
        $page = 'delete';
        break;
    case 'register' :
        $page = 'register';
        // gets a list of states to put on the select dropdown
        if ($_POST['register']) {

        }

        break;
    case 'login' :
        $page = 'login';
//        if ($_POST['login']) {
//            $_SESSION['user'] = $users->getUser($_POST['username'], $_POST['password']);
//        }
        break;
    case 'update' :
        $page = 'update';
//        $update = $users->updateUser();
        break;
    default :
        $page = 'homepage';
}