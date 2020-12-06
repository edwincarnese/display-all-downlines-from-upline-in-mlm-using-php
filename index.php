<?php
require_once(__DIR__."/Model/Sponsor.php");

function pyramid($upline_id, $delimiter = '') {
    $sponsors = (new Sponsor())->getSponsorById($upline_id);
    
    foreach($sponsors as $sponsor) {
        $downline_id = $sponsor->downline_id;

        echo nl2br("{$delimiter}{$downline_id}\n");
        
        pyramid($downline_id, $delimiter.'---');
    }
}

pyramid(109); 
?>