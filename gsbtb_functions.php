<?php

/**
* Functions to include from a Wordpress functions.php file that will provide interface from Wordpress theme to the GSBTB API
*
* Instantiate a single globally available instance of the API class, and provide calls into it.
*/

require_once('gsbtb_tool_clientv0.1.php');

global $gsbtb_api;
$gsbtb_api = new gsbtbAPI('host', 'port', 'username', 'password');


function gsbtb_getPersons($pageStart, $pageLength) {
    global $gsbtb_api;
	return $gsbtb_api->getPersons($pageStart, $pageLength);
}

function gsbtb_getPerson($personId) {
    global $gsbtb_api;
	return $gbbtb_api->getPerson($personId);
}


?>
