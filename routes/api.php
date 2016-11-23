<?php

use Illuminate\Http\Request;

Route::get('/', 'StoreController@index');

Route::get('/get_by_payment_method/{payment_method}', 'StoreController@get_by_payment_method');

Route::get('/get_by_customer/{customer}', 'StoreController@get_by_customer');

Route::get('/get_by_company/{company}', 'StoreController@get_by_company');

Route::get('/get_between_date_of_purchase/{date1}/{date2}', 'StoreController@get_between_date_of_purchase');
