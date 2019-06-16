<?php
    return [
        App\Core\Route::get('|^admin/login/?$|', 'Main', 'getLogin'),
        App\Core\Route::post('|^admin/login/?$|', 'Main', 'postLogin'),

        App\Core\Route::get('|^slatkis/([0-9]+)/delete/?$|', 'Slatkis', 'delete'),
        App\Core\Route::get('|^slatkis/([0-9]+)/edit/?$|', 'Slatkis', 'getEdit'),
        App\Core\Route::post('|^slatkis/([0-9]+)/edit/?$|', 'Slatkis', 'postEdit'),
        App\Core\Route::get('|^slatkis/add/?$|', 'Slatkis', 'getAdd'),
        App\Core\Route::post('|^slatkis/add/?$|', 'Slatkis', 'postAdd'),
        App\Core\Route::get('|^slatkis/([0-9]+)/?$|', 'Slatkis', 'show'),
        
        #API routes:
        App\Core\Route::get('|^api/slatkis/([0-9]+)/?$|', 'ApiSlatkis', 'show'),
        App\Core\Route::get('|^api/cart/?$|', 'ApiCart', 'getItems'),
        App\Core\Route::get('|^api/cart/add/([0-9]+)/?$|', 'ApiCart', 'addItem'),
        App\Core\Route::get('|^api/cart/clear/?$|', 'ApiCart', 'clear'),

        #Admin Role Routes
        App\Core\Route::get('|^admin/profile/?$|', 'AdminDashboard', 'index'),

        App\Core\Route::any('|^.*$|', 'Main', 'home')
    ];