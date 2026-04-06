<?php  use Illuminate\Support\Facades\Route; use App\Http\Controllers\HomeController; 
 
//Route::get('/', function () { 
  //  return view('welcome'); 
//}); 
 
Route::get('/', [HomeController::class, 'index']); 
Route::get('/contact', [HomeController::class, 'contact']); 

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/user/{id}', function ($id) {
    return 'user dengan ID ' . $id;
});

Route::prefix('admin')->group(function () {

    Route::get('/dashboard', function () {
        return 'Admin Dashboard';
    });

    Route::get('/users', function () {
        return 'Admin Users';
    });

});