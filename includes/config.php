<?php

$siteKey = "6LdLIjsaAAAAAIptc806REeHd9uCIa11UyPXQjIp";
$secretKey = "6LdLIjsaAAAAAFeyjHmo895xWVEahZ8lioQr6n5X";

//this helps us avoid PHP date errors:
date_default_timezone_set('America/Los_Angeles'); #sets default date/timezone for this website
$server = 'github.com';

$logo_color = ''; //make logo_color an empty string by default

/*
portal-config.php

Used to store all of our WEB120 configuration information

*/

//prevents data from being sent early
ob_start();

//echo basename($_SERVER['PHP_SELF']);

define('THIS_PAGE',basename($_SERVER['PHP_SELF']));

//echo THIS_PAGE;

//die;

switch(THIS_PAGE){

    case 'index.php':
        $title = "Seattle Communities Home Page";
        $logo = 'fa-teeth';
        $PageID = 'Welcome to Seattle Communities';
    break;
    
    case 'about.php':
        $title = "Seattle Communities About Page";
        $logo = 'fa-cube';
        $logo_color = ' style="color:#0f0"';
        $PageID = 'Meet our team';
    break;

    case 'communities.php':
        $title = "Communities";
        $logo = "fa-camera-retro";
        $logo_color = ' style="color:#00f"';
        $PageID = 'Communities near you';
    break;

    case 'login.php':
        $title = "Login Page";
        $logo = "fa-calendar";
        $logo_color = ' style="color:#00f"';
        $PageID = 'Login Page';
    break;

    case 'register.php':
        $title = "Google Map Page";
        $logo = "fa-map-o";
        $logo_color = ' style="color:#00f"';
        $PageID = 'Register Page';
    break;

    default:
        $title = THIS_PAGE;
        $logo = '';//no icon by default  
        $PageID = '';
   }
?>

