<!DOCTYPE html>
<html lang="en" data-theme="light">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    {{-- Website Icon --}}
    <link rel="icon" href="{{ asset('assets/grey.png') }}">
    {{-- Tailwind CSS --}}
    @vite('resources/css/app.css')
    {{-- Daisy UI CDN --}}
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.10.2/dist/full.min.css" rel="stylesheet" type="text/css" />
    {{-- Font Awesome CDN --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>

    <div class="min-h-screen bg-customBg flex flex-col">

        {{-- Navbar Component --}}
        @include('components.navbarMember')


        <div class="flex">
            <!-- Sidebar -->
            <div class="bg-customLightGreen text-black w-64 flex-shrink-0">
                <div class="p-5">

                    <div class="avatar w-full flex flex-col items-center gap-5 pt-6">
                        <div class="w-40 h-40 rounded-full">
                            <img src="{{ asset('storage/images/' . $community->logo) }}" />
                        </div>

                        <h1 class="text-lg font-bold">{{ucwords($community->name)}}</h1>


                @if(!$isMember)
                    <form action="/join/{{ $community->id }}" method="POST">
                        @csrf
                        <button class="bg-customBrown text-white w-20 h-8 rounded-xl">Join</button>
                    </form>
                @endif


                @if(Auth::user()->id == $community->user_id)
                    <a href="/create-post/{{ $community->id }}" class="mt-5 bg-customBrown p-3 text-white rounded-lg hover:opacity-90">Create Post</a>
                @endif

                    </div>

                </div>
            </div>

            <!-- Content -->
            <div class="flex-1">
                
                <div class="w-full flex justify-between px-[3rem] text-lg breadcrumbs mt-[3rem]">
                    <ul>
                        <li><a href="/home">Home</a></li>
                        <li><a href="/community/{{ $community->id }}" class="font-semibold">{{ucwords($community->name)}}</a></li>
                    </ul>


                    @if($isMember && !(Auth::user()->id == $community->user_id))
                    <form action="/leave/{{ $community->id }}" method="POST" id="formLeave{{ $community->id }}">
                        @csrf
                        <button type="button" onclick="confirmLeave({{ $community->id}})"><i class="fa fa-sign-out text-red-500"></i></button>
                    </form>
                    @endif

                    @if(Auth::user()->id == $community->user_id)
                        <form action="/delete-community/{{ $community->id }}" method="POST" id="formDelete{{ $community->id }}">
                            @csrf
                            @method('delete')
                            <button type="button" onclick="confirmDelete({{ $community->id }})"><i class="fa fa-trash text-red-500"></i></button>
                        </form>
                    @endif
                    
                </div>

                <div class="flex justify-center">
                    @include('components.alert')
                </div>

                <div class="p-12 flex flex-col gap-12">
                    <div class="card w-full bg-customLightGreen shadow-md">
                        <div class="card-body">
                            <h2 class="text-2xl font-bold">{{ $community->motto }}</h2>
                            <div class="divider font-semibold">Community Description</div>
                            <p class="text-justify">{{ $community->description }}</p>
                            @if (Auth::user()->id == $community->user_id)
                            <div class="font-medium hover:underline text-lg text-end">
                            <a href="/edit-description/{{ $community->id }}"><i class="fa fa-pencil"></i> Edit Description</a>
                            </div>
                            @endif
                        </div>
                    </div>

                    <div class="card w-full bg-customLightGreen shadow-md">
                        <div class="card-body">
                            <h2 class="text-2xl font-bold">Member</h2>
                            <div class="divider font-semibold">{{ $membersCount->count() }} Members</div>
                            <div class="grid grid-cols-3 gap-4 mt-4">
                                @foreach ($members as $member)
                                    <div class="flex flex-col items-center">
                                        <div class="avatar">
                                            <div class="w-[8rem] h-[8rem] rounded-full bg-white">
                                                <img
                                                    src="{{ asset('storage/profile/' . $member->user->profilePicture) }}">
                                            </div>
                                        </div>
                                        <p class="text-center mt-2">{{ $member->user->username }}</p>


                                    </div>
                                @endforeach
                            </div>

                            @if ($isMember)
                                <a class="text-center cursor-pointer text-customBrown mt-8 font-semibold hover:underline" href="/showMember/{{$community->id}}">View All</a>
                            @endif
                            
                        </div>
                    </div>
                    
                    <div class="card w-full bg-customLightGreen shadow-md">
                        <div class="card-body">
                            <h2 class="text-2xl font-bold">Community Posts</h2>
                            <div class="divider font-semibold">{{ $posts->count() }} Posts</div>
                    
                            <div class="grid grid-cols-2 gap-12">
                                @if ($posts->count() > 0 && $posts->first()->community_id == $community->id)
                                    @foreach ($posts as $post)
                                    <div class="max-w-[24rem] max-h-[34rem] rounded-lg overflow-hidden shadow-lg bg-white">
                                        <img src="{{ asset('storage/images/' . $post->image) }}" class="w-[24rem] h-[20rem]"/>
                                        <div class="px-6 py-4">
                                          <div class="font-bold text-xl mb-2">{{ ucwords($post->title) }}</div>
                                          <p class="text-gray-700 text-base h-[5rem]">
                                            {{ Str::limit($post->content, 180, '...') }} 
                                          </p>

                                          <p class="font-semibold mt-[3rem] text-end">Posted: {{$post->created_at->format('d/m/Y')}}</p>
                                        </div>
                                      </div>
                                    @endforeach
                                @endif
                            </div>
                        </div>
                    </div>
                    
                </div>

            </div>
        </div>


        {{-- Footer Component --}}
        @include('components.specialFooter')


    </div>
</body>
<script src="https://cdn.tailwindcss.com"></script>
<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>

<script>
    const textarea = document.getElementById('communityDescription');
    const characterCount = document.getElementById('characterCount');

    textarea.addEventListener('input', function() {
        const textLength = textarea.value.length;
        characterCount.textContent = `${textLength}/500 characters`;
    });
</script>

<script>
    function confirmDelete(communityId) {
        var confirmation = confirm("Do you really wish to delete this community?");
        if (confirmation) {
            document.getElementById('formDelete' + communityId).submit();
        } else {
            return false;  // Prevent form submission
        }
    }

    function confirmLeave(communityId) {
        var confirmation = confirm("Do you really wish to leave this community?");
        if (confirmation) {
            document.getElementById('formLeave' + communityId).submit();
        } else {
            return false;  // Prevent form submission
        }
    }
</script>


</html>
