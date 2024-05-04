<?php

namespace App\Http\Controllers;

use App\Models\Community;
use App\Models\Member;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class CommunityController extends Controller {
    public function index($id) {
        $community = Community::findOrFail($id);
        $members = Member::where('community_id', $id)->with('user')->get();
    
        
        $isMember = Member::where('community_id', $id)->where('user_id', auth()->id())->exists();
    
        return view('community.community', compact('community', 'members', 'isMember'));
    }
    

    public function create() {
        return view( 'community.createCommunity' );
    }

    public function store( Request $request ) {
        $validasi = $request->validate( [
            'name' => 'required',
            'motto' => 'required',
            'category' => 'required',
            'description' => 'required',
            'location' => 'required',
            'logo' => 'required|image',
        ] );

        $currentUid = auth()->id();

        $filename = null;

        if ( $request->file( 'logo' ) ) {
            $extension = $request->file( 'logo' )->getClientOriginalExtension();
            $originalName = pathinfo( $request->file( 'logo' )->getClientOriginalName(), PATHINFO_FILENAME );
            $filename = $originalName . '_' . time() . '.' . $extension;
            $request->file( 'logo' )->storeAs( 'public/images', $filename );
        }

        $community = Community::create( [
            'user_id' => $currentUid,
            'name' => $request->name,
            'motto' => $request->motto,
            'category' => $request->category,
            'description' => $request->description,
            'location' => $request->location,
            'logo' => $filename,
        ] );

        Member::create( [
            'community_id' => $community->id,
            'user_id' => $currentUid,
        ] );

        return redirect( '/home' )->with( 'success', 'Community has been created successfully!' );
    }

    public function search(Request $request)
    {
        $communities = Community::query();

        if ($request->has('search')) {
            $searchTerm = $request->search;
    
            $communities->where(function ($query) use ($searchTerm) {
                $query->where('title', 'LIKE', '%' . $searchTerm . '%')
                      ->orWhereHas('user', function ($userQuery) use ($searchTerm) {
                          $userQuery->where('username', 'LIKE', '%' . $searchTerm . '%');
                      });
            });
        }
    
        $communities = $communities->paginate();
    
        return view('main.home', compact('communities'));
    }

    public function show() 
    {
        $communities = Community::all();

        return view( 'main.home', compact( 'communities' ) );
    }

    public function leave()
    {
        
    }
}
