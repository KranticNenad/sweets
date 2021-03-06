<?php
    return [
        #Login Routes
        App\Core\Route::get('|^admin/login/?$|', 'Main', 'getLogin'),
        App\Core\Route::post('|^admin/login/?$|', 'Main', 'postLogin'),

        #Main Routes
        App\Core\Route::get('|^slatkis/([0-9]+)/?$|', 'Slatkis', 'show'),
        App\Core\Route::get('|^onama/?$|', 'Main', 'onama'),
        App\Core\Route::get('|^kontakt/?$|', 'Main', 'kontakt'),
        App\Core\Route::post('|^filter/?$|', 'Slatkis', 'filter'),
        App\Core\Route::get('|^korpa/?$|', 'Porudzbina', 'korpa'),
        App\Core\Route::post('|^korpa/?$|', 'Porudzbina', 'korpaPost'),
        
        #API Routes
        App\Core\Route::get('|^api/slatkis/([0-9]+)/?$|', 'ApiSlatkis', 'show'),
        App\Core\Route::get('|^api/cart/?$|', 'ApiCart', 'getItems'),
        App\Core\Route::get('|^api/cart/add/([0-9]+)/?$|', 'ApiCart', 'addItem'),
        App\Core\Route::get('|^api/cart/clear/?$|', 'ApiCart', 'clear'),

        #Admin Role Routes
        App\Core\Route::get('|^admin/profile/?$|', 'AdminDashboard', 'index'),
        App\Core\Route::get('|^admin/slatkisi?$|', 'AdminSlatkisManagement', 'slatkisi'),
        App\Core\Route::get('|^admin/slatkisi/delete/([0-9]+)/?$|', 'AdminSlatkisManagement', 'delete'),
        App\Core\Route::get('|^admin/slatkisi/edit/([0-9]+)/?$|', 'AdminSlatkisManagement', 'getEdit'),
        App\Core\Route::post('|^admin/slatkisi/edit/([0-9]+)/?$|', 'AdminSlatkisManagement', 'postEdit'),
        App\Core\Route::get('|^admin/slatkisi/add/?$|', 'AdminSlatkisManagement', 'getAdd'),
        App\Core\Route::post('|^admin/slatkisi/add/?$|', 'AdminSlatkisManagement', 'postAdd'),
        App\Core\Route::get('|^admin/porudzbine/?$|', 'AdminPorudzbinaManagement', 'porudzbine'),
        App\Core\Route::get('|^admin/porudzbine/show/([0-9]+)/?$|', 'AdminPorudzbinaManagement', 'show'),
        App\Core\Route::post('|^admin/porudzbine/show/([0-9]+)/?$|', 'AdminPorudzbinaManagement', 'showPost'),

        #Fallback Routes
        App\Core\Route::any('|^.*$|', 'Main', 'home')
    ];