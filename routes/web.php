<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\TouristPackageController;
use App\Http\Controllers\DestinationController;
use App\Http\Controllers\CommentRatingController;
use App\Http\Controllers\BillingController;
use App\Http\Controllers\PaymentMethodController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;

// Ruta principal que carga la vista welcome (por defecto)
Route::get('/', function () {
    return view('welcome');
});

Route::resource('users', UserController::class);// Rutas para los usuarios (CRUD)
Route::get('/users-list', [UserController::class, 'index'])->name('users.index');// Ruta personalizada para ver todos los usuarios registrados
Route::resource('reservations', ReservationController::class);// Rutas para las reservas (CRUD)
Route::resource('tourist-packages', TouristPackageController::class);// Rutas para los paquetes turísticos (CRUD)
Route::resource('destinations', DestinationController::class);// Rutas para los destinos (CRUD)
Route::resource('comments-ratings', CommentRatingController::class);// Rutas para los comentarios y valoraciones (CRUD)
Route::resource('billings', BillingController::class);// Rutas para la facturación (CRUD)
Route::resource('payment-methods', PaymentMethodController::class);// Rutas para los métodos de pago (CRUD)
Route::get('/login', [LoginController::class, 'index'])->name('login.index');  // Formulario de login
Route::post('/login', [LoginController::class, 'login'])->name('login');  // Procesar login
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');// Ruta para cerrar sesión (POST)
Route::get('/register', [RegisterController::class, 'index'])->name('register.index'); // Mostrar el formulario
Route::post('/register', [RegisterController::class, 'store'])->name('register.store'); // Procesar el formulario 


