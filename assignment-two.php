<?php

$tutionFee = 15000;

$commission = ( $tutionFee > 20000 ) ? "$" . 0.25 * $tutionFee : (  ( $tutionFee <= 20000 && $tutionFee > 10000 ) ? "$" . 0.20 * $tutionFee : (  ( $tutionFee <= 10000 && $tutionFee >= 7000 ) ? "$" . 0.15 * $tutionFee : "Invalid Number" ) );

echo $commission;