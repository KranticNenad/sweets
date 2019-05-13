<?php
    return [
        App\Core\Route::get('|^slatkis/([0-9]+)/delete/?$|', 'Slatkis', 'delete'),
        App\Core\Route::get('|^slatkis/([0-9]+)/?$|', 'Slatkis', 'show'),
        App\Core\Route::any('|^.*$|', 'Main', 'home')
    ];