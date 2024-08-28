<?php
 session_start();

function connected () {
   return isset($_SESSION['username']);  //check if user is connected
}

function getUsername () {
    return connected() ? $_SESSION['username'] : 'inconnu';   //if user connected get his username if not shows 'inconnu'
}

function connectUser($username) {
   $_SESSION['username'] = $username; // Set session variable to the username, normally this should be done by a form
}

function disconnectUser() {
    unset($_SESSION['username']);   //disconnet function to test the Session on/off
}  