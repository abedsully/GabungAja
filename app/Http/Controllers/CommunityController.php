<?php

namespace App\Http\Controllers;

use App\Models\Community;
use Illuminate\Http\Request;

class CommunityController extends Controller
{
    public function create()
    {
        return view('community.createCommunity');
    }
    public function store(Request $request)
    {
        $validasi = $request->validate([
            'name' => 'required',
            'motto' => 'required',
            'category' => 'required',
            'description' => 'required',
            'location' => 'required',
            'logo' => 'required',
        ]);

        $currentUid = auth()->id();

        if ($request->file('logo') != null) {
            $extension = $request->file('logo')->getClientOriginalExtension();
            $originalName = pathinfo($request->file('logo')->getClientOriginalName(), PATHINFO_FILENAME);
            $filename = $originalName . $currentUid . '_' . $extension;
            $request->file('logo')->storeAs('/public/images', $filename);
        }

        Community::create([
            'user_id' => $currentUid,
            'name' => $request->name,
            'motto' => $request->motto,
            'category' => $request->category,
            'description' => $request->name,
            'location' => $request->location,
            'logo' => $filename,
        ]);

        return redirect('/home')->with('success', 'Community has been created successfully!');
    }

    public function show()
    {
        $communities = Community::all();

        return view('main.home', compact('communities'));
    }
}
