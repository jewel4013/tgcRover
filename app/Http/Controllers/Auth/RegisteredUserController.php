<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Bios;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Carbon\Carbon;
// use App\Rules\imageExtension;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
            'user_name' => ['required', 'string', 'lowercase', 'max:255', 'unique:'.User::class],
            'mobile' => ['required', 'string', 'min:11', 'max:11',],
            'avatar' => ['required', 'mimes:jpg,jpeg,png'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'user_type' => [],
            'status' => [],
        ]);

        if(request()->hasFile('avatar')){
            $avatar = $request->avatar;
            $ext = $avatar->extension();
            $currentTime = Carbon::now()->timestamp;
            $avatarName = $currentTime.'_'.uniqid().'.'.$ext;
            $avatar->move('img/profilePic', $avatarName);


            $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'user_name' => $request->user_name,
                'mobile' => $request->mobile,
                'avatar' => $avatarName,
                'password' => Hash::make($request->password),

            ]);
            Bios::create([
                'user_id' => $user->id,
                'created_at' => $user->created_at,
            ]);

            event(new Registered($user));
            Auth::login($user);


            return redirect('/profile'); // RouteServiceProvider::HOME


        }

    }
}
