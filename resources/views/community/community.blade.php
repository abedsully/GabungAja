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
                    </div>

                </div>
            </div>

            <!-- Content -->

            <div class="flex-1">
                <div class="p-12 flex flex-col gap-12">
                    <div class="card w-full bg-customLightGreen shadow-md">
                        <div class="card-body">
                            <h2 class="text-2xl font-bold">{{ $community->motto }}</h2>
                            <div class="divider font-semibold">Community Description</div>
                            <p class="text-justify">{{ $community->description }} Lorem ipsum dolor sit amet consectetur, adipisicing elit. Labore, fugit aut unde beatae ab asperiores aliquid cum aliquam illo natus placeat totam voluptates eius magni nam quos? Repellendus officiis voluptatem possimus, aut ducimus ipsam. Eligendi accusamus pariatur reprehenderit reiciendis assumenda nihil delectus, nesciunt, sint at, id perferendis facere debitis exercitationem!</p>
                        </div>
                    </div>

                    <div class="card w-full bg-customLightGreen shadow-md">
                        <div class="card-body">
                            <h2 class="text-2xl font-bold">Member</h2>
                            <div class="divider font-semibold">120 Members</div>
                            <div class="avatar w-full flex justify-between mt-2">
                                <div class="w-32 h-32 rounded-full bg-white">
                                    <img src="{{ asset('storage/images/' . $community->logo) }}" />
                                </div>

                                <div class="w-32 h-32 rounded-full">
                                    <img src="{{ asset('storage/images/' . $community->logo) }}" />
                                </div>

                                <div class="w-32 h-32 rounded-full">
                                    <img src="{{ asset('storage/images/' . $community->logo) }}" />
                                </div>

                                <div class="w-32 h-32 rounded-full">
                                    <img src="{{ asset('storage/images/' . $community->logo) }}" />
                                </div>

                                <div class="w-32 h-32 rounded-full">
                                    <img src="{{ asset('storage/images/' . $community->logo) }}" />
                                </div>

                                                                
                                <div class="w-32 h-32 rounded-full">
                                    <img src="{{ asset('storage/images/' . $community->logo) }}" />
                                </div>

                            </div>

                            <a class="text-center cursor-pointer text-customBrown mt-8 font-semibold hover:underline">View All</a>
                        </div>
                    </div>

                    <div class="card w-full bg-customLightGreen shadow-md">
                        <div class="card-body">
                            <h2 class="text-2xl font-bold">Community Posts</h2>
                            <div class="divider font-semibold">5 Posts</div>
                            <div class="flex flex-wrap justify-between px-16 gap-12">
                                <div class="flex flex-col gap-2">
                                    <img class="card w-[24rem]" src="{{ asset('storage/images/' . $community->logo) }}" />
                                    <a href="" class="text-center cursor-pointer text-customBrown font-semibold hover:underline">View Details</a>
                                </div>

                                <div class="flex flex-col gap-2">
                                    <img class="card w-[24rem]" src="{{ asset('storage/images/' . $community->logo) }}" />
                                    <a href="" class="text-center cursor-pointer text-customBrown font-semibold hover:underline">View Details</a>
                                </div>

                                <div class="flex flex-col gap-2">
                                    <img class="card w-[24rem]" src="{{ asset('storage/images/' . $community->logo) }}" />
                                    <a href="" class="text-center cursor-pointer text-customBrown font-semibold hover:underline">View Details</a>
                                </div>

                                <div class="flex flex-col gap-2">
                                    <img class="card w-[24rem]" src="{{ asset('storage/images/' . $community->logo) }}" />
                                    <a href="" class="text-center cursor-pointer text-customBrown font-semibold hover:underline">View Details</a>
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
