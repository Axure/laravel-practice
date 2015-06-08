<?php namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class UserController extends Controller {


    /**
     * Show the profile for the given user.
     *
     * @param  int  $id
     * @return Response
     */
    public function showProfile($id)
    {
        try {
            $userProfile = view('user.profile', ['user' => User::findOrFail($id)]);
        } catch (ModelNotFoundException $e){
            $userProfile = view('home');
        }
        return  $userProfile;
    }

    public function showAllProfile() {
        $userProfile = view('user.all_profiles', ['users' => User::all()]);
        return $userProfile;
    }
}

