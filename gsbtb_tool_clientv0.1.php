<?php
/**

PHP platform agnostic client layer to the GSBTB API

*/

class gsbtbAPI() {

    private var $apiServerHost;
    private var $apiServerPort;
    private var $apiUsername;
    private var $apiPassword;

    function __construct($apiServerHost, $apiServerPort, $apiUsername, $apiPassword) {
        $this->apiServerHost = $apiServerHost;
        $this->apiServerPort = $apiServerPort;
        $this->apiUsername = $apiUsername;
        $this->apiPassword = $apiPassword;
    }

    function getPersons($pageStart, $pageLength) {
        return json_decode("""{
        [
            "guidPerson1" : [ "name" : "First Last", "bio" : "biography text", "skills" : [ "skill1", "skill2", "skill3" ] ],
            "guidPerson2" : [ "name" : "First2 Last2", "bio" : "biography text2", "skills" : [ "skill4", "skill5", "skill6" ] ]
        ]

    }""");

    }

    function getPerson($personId) {
            return json_decode("""{

            [ "name" : "First Last", "bio" : "biography text", "skills" : [ "skill1", "skill2", "skill3" ] ]

    }""");

    }

}

?>
