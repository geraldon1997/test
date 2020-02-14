<?php
$url            = 'http://sourcesms.com/api/api-function.php';
$fields_string  = null;

$fields = [
    'from' => 'MOSCO',
    'to' => '09036924798',
    'message' => 'hello world',
    'username' => '',
    'pword' => '',
    'hash' => '',
    'formcountry' => '234',
    'sourceinfo' => '1'
];

print_r($fields);
