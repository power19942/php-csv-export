<?php

fputs($file,$bom=(chr(0xEF).chr(0xBB).chr(0xBF)));
fputcsv($file,['الاسم','السعر','الصنف','متوسط']);

foreach($productResult as $row){
    // var_dump($row);
    fputcsv($file,[$row['name'],$row['price'],$row['category'],$row['average_rating']]);
}