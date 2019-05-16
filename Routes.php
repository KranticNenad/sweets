<?php
    return [
        App\Core\Route::get('|^slatkis/([0-9]+)/delete/?$|', 'Slatkis', 'delete'),
        App\Core\Route::get('|^slatkis/([0-9]+)/edit/?$|', 'Slatkis', 'getEdit'),
        App\Core\Route::post('|^slatkis/([0-9]+)/edit/?$|', 'Slatkis', 'postEdit'),
        App\Core\Route::get('|^slatkis/add/?$|', 'Slatkis', 'getAdd'),
        App\Core\Route::post('|^slatkis/add/?$|', 'Slatkis', 'postAdd'),
        App\Core\Route::get('|^slatkis/([0-9]+)/?$|', 'Slatkis', 'show'),
        
        #API routes:
        App\Core\Route::get('|^api/slatkis/([0-9]+)/?$|', 'ApiSlatkis', 'show'),

        App\Core\Route::any('|^.*$|', 'Main', 'home')
    ];