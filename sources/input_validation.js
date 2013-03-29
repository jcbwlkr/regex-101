// Javascript
var pattern = /^([0-9]{1,3}\.){3}([0-9]{1,3})$/;
if ( ! pattern.test('192.168.1.64') ) {
    return 'Please enter a valid IPV4 Address';
}



