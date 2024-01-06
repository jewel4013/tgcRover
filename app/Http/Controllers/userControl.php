<?php

namespace App\Http\Controllers;

use App\Mail\UserApprovedMail;
use App\Mail\UserDeleteMail;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Mail;

class userControl extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function members(){
        return view('profile.admin.members',[
            'alluser' => User::where('status', 1)->latest()->get(),
            'pandingUserCount' => count(User::where('status', 0)->get()),
            'susUserCount' => count(User::where('status', 2)->get()),
        ]);
    }
    public function pendingMembers(){
        return view('profile.admin.pendingMember', [
            'pandingUser' => User::where('status', 0)->latest()->get(),
            'pandingUserCount' => count(User::where('status', 0)->get()),
            'susUserCount' => count(User::where('status', 2)->get()),
        ]);
    }
    public function pendingMemberApproved(Request $request){
        $user = User::where('id', $request->id);
        $user->update([
            'status' => 1,
        ]);

        return  response()->json([
            'state' => 'success',
        ]);
    }

    public function pendingMemberApprovedMail(Request $request){
        $mailData = [
            'title' => 'Approval confirmation.',
            'body' => 'Lorem Lunch on Day 1 and this has been a good, balanced session of Test cricket. An overcast morning and plenty of wobbly movement for the bowlers. Rabada hit the right lengths and surprised Rohit with a short ball. Then, debutant Nandre Burger skittled out Jaiswal and Gill by getting some lovely away shape.'
        ];
        return Mail::to($request->email)->send(new UserApprovedMail($mailData));
    }

    public function pendingMemberDelete(Request $request){
        $user = User::find($request->id);
        $image_path = 'img/profilePic/'.$user->avatar;
         if(File::exists($image_path)) {
            File::delete($image_path);
        }

        $user->bios()->delete();
        $user->delete();

        return response()->json([
            'state' => 'delete',
        ]);
    }

    public function pendingMemberDeleteMail(Request $request){
        $mailData = [
            'title' => 'Request for membership is denied',
            'body' => 'Lorem Lunch on Day 1 and this has been a good, balanced session of Test cricket. An overcast morning and plenty of wobbly movement for the bowlers. Rabada hit the right lengths and surprised Rohit with a short ball. Then, debutant Nandre Burger skittled out Jaiswal and Gill by getting some lovely away shape.'
        ];
        return Mail::to($request->email)->send(new UserDeleteMail($mailData));
    }


    public function suspendedMember(){
        return view('profile.admin.suspendedMembers', [
            'pandingUserCount' => count(User::where('status', 0)->get()),
            'suspendedMemebers' => User::where('status', 2)->latest()->get(),
        ]);
    }
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
