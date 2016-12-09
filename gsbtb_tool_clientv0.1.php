<?php
/**

PHP platform agnostic client layer to the GSBTB API

*/

function gsbtbApiGetPersons($pageStart, $pageLength) {
	return json_decode("""{
	[
		"guidPerson1" : [ "name" : "First Last", "bio" : "biography text", "skills" : [ "skill1", "skill2", "skill3" ] ],
		"guidPerson2" : [ "name" : "First2 Last2", "bio" : "biography text2", "skills" : [ "skill4", "skill5", "skill6" ] ]
	]

}""");

}

function gsbtbApiGetPerson($personId) {
        return json_decode("""{

        [ "name" : "First Last", "bio" : "biography text", "skills" : [ "skill1", "skill2", "skill3" ] ]

}""");

}



?>
