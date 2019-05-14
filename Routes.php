<?php
    return [
        App\Core\Route::get('|^slatkis/([0-9]+)/delete/?$|', 'Slatkis', 'delete'),
        App\Core\Route::get('|^slatkis/([0-9]+)/edit/?$|', 'Slatkis', 'edit'),
        App\Core\Route::get('|^slatkis/add?$|', 'Slatkis', 'add'),
        App\Core\Route::get('|^slatkis/([0-9]+)/?$|', 'Slatkis', 'show'),
        App\Core\Route::any('|^.*$|', 'Main', 'home')
    ];