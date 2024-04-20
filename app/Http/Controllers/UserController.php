<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function showProfile($id)
    {
        $user = User::findOrFail($id);

        if (Auth::user()->id === $user->id) {
            $communities = $user->communities;
            return view('main.profile', compact('user', 'communities'));
        } else {
            return back()->with('error', 'Forbidden Behavior');
        }
    }

    public function storeProfilePicture(Request $request, $id)
    {
        $validasi = $request->validate([
            'profilePicture' => 'required',
        ]);

        $filename = null;

        if ($request->file('profilePicture') != null) {
            $extension = $request->file('profilePicture')->getClientOriginalExtension();
            $originalName = pathinfo($request->file('profilePicture')->getClientOriginalName(), PATHINFO_FILENAME);
            $filename = $originalName . '_' . time() . '.' . $extension;
            $request->file('profilePicture')->storeAs('/public/profile', $filename);
        }

        User::findOrFail($id)->update([
            'profilePicture' => $filename,
        ]);

        return redirect('/profile/' . $id)->with('success', 'Profile Picture has been updated successfully!');
    }

    public function editProfile($id)
    {
        $user = User::findOrFail($id);

        return view('main.editProfile', compact('user'));
    }

    public function updateProfile(Request $request, $id) 
    {
        $user = User::findOrFail($id);

        $validasi = $request->validate([
            'fullName' => 'required',
            'username' => 'required',
            'phoneNumber' => 'required',
            'bio' => 'max:200'
        ]);

        $user->update([
            'fullName' => $request->fullName,
            'username' => $request->username,
            'phoneNumber' => $request->phoneNumber,
            'bio' => $request->bio
        ]);

        return redirect('/profile/'. $id)->with('success', 'Profile has been updated successfully');
    }
}