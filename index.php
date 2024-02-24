<?php
$tweetsJSON = file_get_contents("files.json");
$tweets= json_decode("$tweetsJSON", true);


require_once "index.html";

