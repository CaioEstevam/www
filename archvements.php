<?php

Route::get('/rota2', function($numb1 = 1, $numb2 = 2){
    $result = $numb1 + $numb2;
    if ($result == 4) echo 'Rota 02';

    else
   return redirect()->route('site.rota1');
})->Name('site.rota2');

?>