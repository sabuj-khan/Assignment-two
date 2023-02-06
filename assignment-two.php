<?php

$tuitionFee = 25000;

$commission = ( $tuitionFee > 20000 ) ? "$" . ( 25 / 100 ) * $tuitionFee : (  ( $tuitionFee <= 20000 && $tuitionFee > 10000 ) ? "$" . ( 20 / 100 ) * $tuitionFee : (  ( $tuitionFee <= 10000 && $tuitionFee >= 7000 ) ? "$" . ( 15 / 100 ) * $tuitionFee : "Commission does not suit this tuition fee." ) );

echo $commission;