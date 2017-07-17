<?php

include_once("../services/DUKService.php");

$dukService = new DUKService();

var_dump($dukService->getDukForUser(123));

?>