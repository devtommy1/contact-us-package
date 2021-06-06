<?php

use Tal7aouy\Contact\Http\Controllers\ContactUsController;
Route::group(['namespace'=>'Tal7aouy\Contact\Http\Controllers'],function(){
    Route::get('contact-us',[ContactUsController::class,'index'])->name('contact-us');
    Route::post('contact-us',[ContactUsController::class,'sendTo'])->name('send');
});

