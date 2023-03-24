<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Image;
use File;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:'.User::class],
            'username' => ['required', 'string','max:255', 'unique:'.User::class],
            'phone_number' => ['required', 'string','max:20'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'image' => ['required'],
        ]);

        // image part starts

        if($request->image){
            $picture = $request->file('image');
            $scustomName = rand().".".$picture->getClientOriginalExtension();
            $location = public_path("backend/imageStore/signup/".$scustomName);
            Image::make($picture)->save($location);
            $user = new User;
            $user->name = $request->name;
            $user->email = $request->email;
            $user->username = $request->username;
            $user->phone_number = $request->phone_number;
            $user->password = Hash::make($request->password);
            $user->image = $scustomName;
            $user->role = $request->role;
            $user->save();
        }


        event(new Registered($user));

        Auth::login($user);

        return redirect(RouteServiceProvider::HOMEPAGE);

        // image part ends

        
    }
}
