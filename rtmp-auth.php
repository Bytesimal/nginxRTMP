<?php
$username = $_POST["name"]; # in our current example, this will be 'john'
$password = $_POST["psk"]; # in our current example, this will be 'supersecret'

$valid_users = array("robro" => "Independence158",
                     "amma" => "hellomydudes123",
					           "dada" => "microscopelad123");

if ($valid_users[$username] == $password) {
  http_response_code(201); # return 201 "Created"
} else {
  http_response_code(404); # return 404 "Not Found"
}
?>