<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
  //  return view('welcome');
    return redirect('/login');
});


Auth::routes();

//ruta para registrar usuario con codigo
Route::get('/Validate-code', 'Auth\RegisterController@showValidateCode')->name('Validate-code');
Route::get('/Register-code/{id}', 'Auth\RegisterController@showRegistrationFormCode')->name('Register-code');
Route::post('/validarCode', 'Auth\RegisterController@validarCode')->name('validarCode');

//rutas para mantenimiento de usuarios de un grupo
Route::resource('Users', 'Users\UsersController');


//rutas para gestion de avatars
Route::resource('Avatars', 'Avatars\AvatarsController');


//rutas para home
Route::get('/home', 'HomeController@index')->name('home');

//rutas para perfil
Route::resource('Profile', 'Profile\ProfileController');
route::get('Update-avatar/{id}','Profile\ProfileController@set_avatar')->name('Update-avatar');

//rutas para gestion de tareas
Route::resource('Tasks', 'Task\TaskController');
Route::get('changeFinish/{id}', 'Task\TaskController@Finish_Task')->name('changeFinish');
Route::get('changeProcess/{id}', 'Task\TaskController@Process_Task')->name('changeProcess');
Route::get('changeStart/{id}', 'Task\TaskController@Start_Task')->name('changeStart');
Route::get('My-Tasks', 'Task\TaskController@show_All_My_Task')->name('My-Tasks');
Route::get('My-Tasks/{id}', 'Task\TaskController@show_All_My_Task_status')->name('My-TasksA');
Route::get('Admin-Task', 'Task\TaskController@adminTask')->name('Admin-Task');
Route::get('My-Admin-Task', 'Task\TaskController@MyadminTask')->name('My-Admin-Task');


//RUTAS PARA LAS NOTIFICACIONES
Route::resource('Notifications', 'Notification\NotificationController');
Route::get('deleteNoty/{id}','Notification\NotificationController@delete_noty')->name('deleteNoty');
Route::get('Notifications-Sent','Notification\NotificationController@sended')->name('Notifications-Sent');

//RUTAS PARA GRUPOS
Route::resource('Groups', 'group\GroupController');