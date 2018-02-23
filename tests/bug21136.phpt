--TEST--
Bug #21136  empty value headers
--SKIPIF--
--FILE--
<?php
error_reporting(E_ALL | E_NOTICE);
require_once 'Mail/mimeDecode.php';

$decoder = new Mail_mimeDecode('X-TestHeader:

Testbody');
$decoder->decode([]);

print_r($decoder);
?>
--EXPECT--
Mail_mimeDecode Object
(
    [_input] => X-TestHeader:

Testbody
    [_header] => X-TestHeader:
    [_body] => Testbody
    [_error] => 
    [_include_bodies] => 
    [_decode_bodies] => 
    [_decode_headers] => 
    [_rfc822_bodies] => 
    [_debug] => 
    [_default_error_mode] => 
    [_default_error_options] => 
    [_default_error_handler] => 
    [_error_class] => PEAR_Error
    [_expected_errors] => Array
        (
        )

)
