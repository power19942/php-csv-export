<?php

$f2 = fopen('data.csv','w');
fputs($f2, $bom =( chr(0xEF) . chr(0xBB) . chr(0xBF) ));
fputcsv($f2,['الاسم','عمر ']);
fputcsv($f2,['الاسم','عمر ']);
fputcsv($f2,['الاسم','عمر ']);
