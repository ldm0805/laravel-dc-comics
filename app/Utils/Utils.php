<?php

namespace App\Utils;


class Utils
{
    function changeDate($saleDate)
{
    if (!$saleDate) {
        return 'Data non disponibile in questo momento';
    }
    else{
        return \Carbon\Carbon::createFromFormat('Y-m-d', $saleDate)->format('M d Y');
    }
}
}
