<?php
$pattern = '/^([0-9]{1,3}\.){3}([0-9]{1,3})$/';
if ( ! preg_match($pattern, '192.168.1.64')) {
    return 'Please enter a valid IPV4 Address';
}



