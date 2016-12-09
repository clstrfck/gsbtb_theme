<?php

/**

Functions to include from a Wordpress functions.php file that will provide interface from Wordpress theme to the GSBTB API

*/

require_once('gsbtb_tool_clientv0.1.php');

function gsbtb_getPersons($pageStart, $pageLength) {
	return gsbtbApiGetPersons($pageStart, $pageLength);
}

function gsbtb_getPerson($personId) {
	return gsbtbApiGetPerson($personId);
}


?>
