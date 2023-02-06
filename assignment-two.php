<?php

$tutionFee = 2500;

$commission = ( $tutionFee > 20000 ) ? "$" . ( 25 / 100 ) * $tutionFee : (  ( $tutionFee <= 20000 && $tutionFee > 10000 ) ? "$" . ( 20 / 100 ) * $tutionFee : (  ( $tutionFee <= 10000 && $tutionFee >= 7000 ) ? "$" . ( 15 / 100 ) * $tutionFee : "Commission does not suit this tuition fee." ) );

echo $commission;