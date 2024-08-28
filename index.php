<?php

require_once('models\sessionModel.php');

//log out to test session off/on

// if (isset($_POST['logout'])) {
//     disconnectUser();
//     header('Location: index.php'); 
//     exit();
// } 

// Check if user is trying to access admin page
if (isset($_GET['admin']) && $_GET['admin'] == 'true') {
    if (connected()) {
        require('templates\admin.php');
        exit();
    } else {
    
        header('Location: index.php');
        exit();
    }
}

connectUser('leo'); //this normally is the result of a form


require('templates\home.php');

