<?php
    Route::get('news', 'Nvt1904\Qltt\TintucController@GetAll');

    Route::get('package', function(){
        echo 'Hello from the Qltt package!';
    });
?>