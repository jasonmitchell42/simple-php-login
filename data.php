<?php
session_start();
include_once 'inc/users.php';
$users = new Users();

switch ($_POST['action']) {

    case 'update' :
        $update = $users->updateDetails($_SESSION['user']);
        if($update) {
            $message = 'this worked';
        } else {
            $message = 'this did not work';
        }
        break;
    case 'delete' :
        if ($_POST['username'] !== $_POST['confirm-username']) {
            $message = "0##Username not found.  No action taken.";
            break;
        }
        if(!isset($_SESSION['user'])) {
            $message = '0##You must be logged in to delete the account';

            break;
        }
        if (isset($_SESSION['user'])) {
            unset($_SESSION['user']);
        }
        break;
    case 'login' :
        $_SESSION['user'] = $users->getUser($_POST['username'], md5($_POST['password']));
        if (isset($_SESSION['user'])) {
            $message = "Logged in, redirecting you to the homepage";
        } else {
            $message = 'login failed';
        }
        break;
    case 'register' :
        $results = $users->registerUser(
            $_POST['firstname'],
            $_POST['lastname'],
            $_POST['email'],
            $_POST['phone'],
            $_POST['address1'],
            $_POST['address2'],
            $_POST['city'],
            $_POST['postcode'],
            $_POST['state'],
            $_POST['username'],
            md5($_POST['password'])
        );
        if ($results == 1) {
            unset($_POST);
            $message = "User has been added.  Please login <a href='/login/'>here</a>";
        }
        break;
    default :
        $message = 'this is the default action';

}
echo $message;