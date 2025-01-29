<?php
;
use App\Models\User;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {

  $user = User::create([
    'name'=> 'Xaitali',
    'email'=> 'xaitali@gmail.com' . uniqid(),
    'password'=> bcrypt('password'),
  ]);
  $user->profile()->create([
    'address' => 'ufgt76',
    'phone' => 'gv6rydr56'
  ]) ;
  
  return $user->load('profile');
})->name('home');

