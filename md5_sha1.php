<?php
/**
md5() Message Digestive Algorithm
the function is used to encrypt the password when saving in database. the function is very useful to protect password from hackers.
md5(string,raw)
raw will be true/false, if true then it will encrypt the password into 16 characters binary format, if false then it will encrypt password into 32 characters hex format. by defatult raw is false

sha1() US Secure Hash Algorithm
it is more secure than md5, this function is also used to encrypt password while saving into database
sha1(string, raw)
raw will be true/false, if true then it will encrypt the password into 20 characters binary format, if false then it will encrypt password into 40 characters hex format. by defatult raw is false
*/

$pswrd = "admin123";

echo "MD5 binary ". md5($pswrd,true)."<br>";
echo "MD5 Hex ". md5($pswrd)."<br>";

echo "SHA1 binary". sha1($pswrd,true)."<br>";
echo "SHA1 Hex". sha1($pswrd)."<br>";