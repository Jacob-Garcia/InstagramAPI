<?php 
 //Config for php server
 set_time_limit(0);
 ini_set('default_socket_timeout', 300);
 session_start();

 // Make constants using define
 define('client_id', 'bf028b58e523453e82670f4c7edd5e84');
 define('client_secret', 'a49658873abd41f8830fcf6c61bc1a98');
 define('redirectURI', 'http://localhost/AppAcademyAPI/index.php');
 define('ImageDirectory', 'pictures/');

?>



<!-- CLIENT ID bf028b58e523453e82670f4c7edd5e84
CLIENT SECRET	a49658873abd41f8830fcf6c61bc1a98
WEBSITE URL	http://localhost/AppAcademyAPI/index.php
REDIRECT URI	http://localhost/AppAcademyAPI/index.php -->