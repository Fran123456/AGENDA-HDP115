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
Route::get('changeGroup/{id}', 'group\GroupController@defaultGroup')->name('changeGroup');
Route::get('changeGroupBegin/{id}', 'group\GroupController@defaultGroupBegin')->name('changeGroupBegin');
Route::post('Busca-grupos', 'group\GroupController@LookingGroups')->name('Busca-grupos');
Route::get('askingInvitation/{id}', 'group\GroupController@InvitationUser')->name('askingInvitation');
Route::get('Joins', 'group\GroupController@joins')->name('Joins');
Route::get('acepting/{id}', 'group\GroupController@AceptingJoin')->name('acepting');



Route::get('Loading', 'group\GroupController@loadDefaultGroup')->name('Loading');

//RUTAS DE INVITACION
Route::get('Send-Invitations/{id}', 'Invitations\InvitationsController@SendInvitacions')->name('Send-Invitations');
Route::get('Looking-Users/{id}', 'Invitations\InvitationsController@LookForUser')->name('Looking-Users');
Route::get('sendingInvitation/{id}/{id2}', 'Invitations\InvitationsController@sendInvitation')->name('sendingInvitation');
Route::resource('invitations', 'Invitations\InvitationsController');
Route::get('aceptarSoli/{id}', 'Invitations\InvitationsController@accepted')->name('aceptarSoli');
Route::get('rechazarSoli/{id}', 'Invitations\InvitationsController@denegate')->name('rechazarSoli');


