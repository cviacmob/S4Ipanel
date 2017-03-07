<?php
function generatePIN($digits)
{
    $i   = 0;
    $otp = "";
    while ($i < $digits) {
        $otp .= mt_rand(0, 9);
        $i++;
    }
    
    return $otp;
}

?>