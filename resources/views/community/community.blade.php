<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    {{-- Website Icon --}}
    <link rel="icon" href="{{ asset('assets/logo.png') }}">
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

                        <h1 class="text-lg font-bold">{{ $community->name }}</h1>

                        <form action="/join/{{ $community->id }}" method="POST">
                            @csrf
                            <button class="bg-customBrown text-white w-20 h-8 rounded-xl">Join</button>
                        </form>
                    </div>

                </div>
            </div>

            <!-- Content -->
            <div class="flex-1">
                
                <div class="w-full px-[3rem] text-lg breadcrumbs mt-[3rem]">
                    <ul>
                        <li><a href="/home">Home</a></li>
                        <li><a href="/community/{{ $community->id }}" class="font-semibold">Community</a></li>
                    </ul>
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
                        </div>
                    </div>

                    <div class="card w-full bg-customLightGreen shadow-md">
                        <div class="card-body">
                            <h2 class="text-2xl font-bold">Member</h2>
                            <div class="divider font-semibold">{{ $members->count() }} Members</div>
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
                            <a class="text-center cursor-pointer text-customBrown mt-8 font-semibold hover:underline">View
                                All</a>
                        </div>
                    </div>






                    <div class="card w-full bg-customLightGreen shadow-md">
                        <div class="card-body">
                            <h2 class="text-2xl font-bold">Community Posts</h2>
                            <div class="divider font-semibold">5 Posts</div>
                            <div class="flex flex-wrap justify-between px-16 gap-12">
                                <div class="flex flex-col gap-2">
                                    <img class="card w-[20rem] h-[20rem] object-fill"
                                        src="{{ asset('storage/images/' . $community->logo) }}" />
                                    <a href=""
                                        class="text-center cursor-pointer text-customBrown font-semibold hover:underline">View
                                        Details</a>
                                </div>

                                <div class="flex flex-col gap-2">
                                    <img class="card w-[20rem] h-[20rem] object-fill bg-white"
                                        src="{{ asset('assets/logo.png') }}" />
                                    <a href=""
                                        class="text-center cursor-pointer text-customBrown font-semibold hover:underline">View
                                        Details</a>
                                </div>

                                <div class="flex flex-col gap-2">
                                    <img class="card w-[20rem] h-[20rem] object-fill"
                                        src="{{ asset('storage/images/' . $community->logo) }}" />
                                    <a href=""
                                        class="text-center cursor-pointer text-customBrown font-semibold hover:underline">View
                                        Details</a>
                                </div>

                                <div class="flex flex-col gap-2">
                                    <img class="card w-[20rem] h-[20rem] object-fill bg-white"
                                        src="{{ asset('assets/logo.png') }}" />
                                    <a href=""
                                        class="text-center cursor-pointer text-customBrown font-semibold hover:underline">View
                                        Details</a>
                                </div>


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

</html>
