<?php
function percent($sale, $price){
    return round(($sale - $price)*100/$price);
    }
