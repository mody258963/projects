<?php
namespace App\Http\Controllers;

use App\Models\User;
use Exception;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Laravel\Socialite\Facades\Socialite;
class SocialiteController extends Controller {

    public function redirectToGoogle(){

        return Socialite::driver('google')->redirect();
    }


public function handleGoogleCallback() {

try {

$user = Socialite::driver('google')->user();
$finduser = User::where('social_id', $user->id)->first();

if ($finduser){

Auth::login($finduser);
return redirect('dashboard');

}else{

$newUser = User::create([
'name' => $user->name,
'email' => $user->email,
'social_id'=> $user->id,
'social_type'=> 'google',
'password' => Hash::make('my-google')

]);

Auth::login($newUser);

return redirect('dashboard');
}

}catch(Exception $e){
    dd($e->getMessage());
}

}
}
