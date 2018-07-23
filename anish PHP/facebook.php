<?php
$ribeshemail="ribesh@hotmail.com";
$ribeshpass="hhh";
$anishemail="anish@hotmail.com";
$anishpass="jjj";
$email=$_POST["email"];
$pass= $_POST["pass"];
switch ($email)
{
    case $ribeshemail:
        if($pass==$ribeshpass)
        {
            echo "hello ribesh";
        }
        else
        {
            echo "invalid password";
        }
        break;
    case $anishemail:
        if($pass==$anishpass)
        {
            echo "hello anish";
        }
        else
        {
            echo "invalid password";
        }
        break;
    default:
        echo "invalid email";
        break;
}

?>