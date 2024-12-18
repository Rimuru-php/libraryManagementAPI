<?php
/**
 * Define the routes for the application.
 *
 * This file returns an associative array where the keys are the URL paths
 * and the values are arrays containing the controller class and the method
 * to be called when the route is accessed.
 *
 * Routes:
 * - '/'                => HomeController::index
 * - '/login'           => UserController::login
 * - '/users'           => UserController::users
 * - '/register'        => UserController::register
 * - '/logout'          => UserController::logout
 * - '/changePicture'   => UserController::changePicture
 * - '/sample-api-request' => HomeController::sampleApiRequest
 *
 * API Routes:
 * - '/api/users'       => ApiController::users
 * - '/api/login'       => ApiController::login
 *
 * @return array The array of routes and their corresponding controllers and methods.
 */


use App\Controllers\ApiController;
use App\Controllers\HomeController;
use App\Controllers\UserController;


// List all routes or address that can be visited in your application
return [
    '/' => [HomeController::class, 'index'], //[Controller class, Controller method]
    '/login' => [UserController::class,'login'],
    '/users' => [UserController::class,'users'],
    '/register' => [UserController::class,'register'],
    '/logout' => [UserController::class,'logout'],
    '/changePicture' =>[UserController::class, 'changePicture'],
    '/sample-api-request' =>[HomeController::class, 'sampleApiRequest'],
    
    $router->get('/library/books', 'LibraryController@getBooks');
    $router->post('/library/books', 'LibraryController@addBook');
    $router->get('/library/members', 'LibraryController@getMembers');
    $router->post('/library/members', 'LibraryController@addMember');
    $router->get('/library/loans', 'LibraryController@getLoans');
    $router->post('/library/loans', 'LibraryController@issueLoan');

    //Api routes
    '/api/users' => [ApiController::class,'users'],
    '/api/login' => [ApiController::class,'login'],
    '/api/profile-update' => [ApiController::class, 'profileUpdate'],
];