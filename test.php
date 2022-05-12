<?php
function validateEmail($email) {
    if(filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "{$email}: A valid email"."<br>";
    }
    else {
        echo "{$email}: Not a valid email"."<br>";
    }
}
validateEmail('peter.piper@iana.org');
validateEmail('first.last@example.123');

function phone_number_format($number="")
{
    if(preg_match( '/(\d{3})(\d{4})(\d{4})$/', $number,  $matches))
    {
        return "{$matches[1]}-{$matches[2]}-{$matches[3]}";
    }
    else
    {
        return $number;
    }
}

 $number='01012341234';
 echo phone_number_format($number);
