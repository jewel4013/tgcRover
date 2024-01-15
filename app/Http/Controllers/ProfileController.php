<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class ProfileController extends Controller
{
    /**
     * Display the user's profile form.
     */
    public function index(Request $request){
        return view('profile.profile');
    }

    public function contribution(){
        return view('profile.contribution');
    }

    public function edit(Request $request): View
    {
        return view('profile.edit', [
            'user' => $request->user(),
        ]);
    }

    public function bios(Request $request): View
    {
        return view('profile.bios', [
            'user' => $request->user(),
        ]);
    }

    public function boisEdit(Request $request){
        $request->validate([
            'father' => ['required', 'max:150'],
            'fmobile' => ['required', 'min:11',  'max:11'],
            'mother' => ['required', 'max:150'],
            'mmobile' => ['required', 'min:11', 'max:11'],
            'date_of_birth' => ['required', 'max:150'],
            'nid_dob' => ['required',],
            'height' => ['required', 'max:5'],
            'weight' => ['required', 'max:5'],
            'blood' => ['required', 'max:25'],
            'religion' => ['required', 'max:25'],
            'emergency' => ['required', 'max:150'],
            'emobile' => ['required', 'min:11', 'max:11'],
            'pe_division' => ['required', 'max:150'],
            'pe_distric' => ['required', 'max:150'],
            'pe_thana' => ['required', 'max:150'],
            'pe_postoffice' => ['required','max:150'],
            'pe_village' => ['required', 'max:255'],
            'pa_division' => ['required', 'max:150'],
            'pa_distric' => ['required', 'max:150'],
            'pa_thana' => ['required', 'max:150'],
            'pa_postoffice' => ['required','max:150'],
            'pa_village' => ['required', 'max:255'],
        ]);

        Auth::user()->bios->update([
            'father' => request('father'),
            'fmobile' => request('fmobile'),
            'mother' => request('mother'),
            'mmobile' => request('mmobile'),
            'date_of_birth' => request('date_of_birth'),
            'nid_dob' => request('nid_dob'),
            'height' => request('height'),
            'weight' => request('weight'),
            'blood' => request('blood'),
            'religion' => request('religion'),
            'emergency' => request('emergency'),
            'emobile' => request('emobile'),
            'pe_division' => request('pe_division'),
            'pe_distric' => request('pe_distric'),
            'pe_thana' => request('pe_thana'),
            'pe_postoffice' => request('pe_postoffice'),
            'pe_village' => request('pe_village'),
            'pa_division' => request('pa_division'),
            'pa_distric' => request('pa_distric'),
            'pa_thana' => request('pa_thana'),
            'pa_postoffice' => request('pa_postoffice'),
            'pa_village' => request('pa_village'),
        ]);

        return back()->with('biosUpdate', 'Upur Bios are updated.');
    }

    /**
     * Update the user's profile information.
     */
    public function update(ProfileUpdateRequest $request): RedirectResponse
    {
        $request->user()->fill($request->validated());

        if ($request->user()->isDirty('email')) {
            $request->user()->email_verified_at = null;
        }

        $request->user()->save();

        return Redirect::route('profile.edit')->with('status', 'profile-updated');
    }

    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current_password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }
}
