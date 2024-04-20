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

    <div class="min-h-screen bg-customBg flex flex-col gap-14">

        {{-- Navbar Component --}}
        @include('components.navbarMember')

        <p class="text-center text-3xl font-semibold">Home Page</p>

        @include('components.alert')


        <div class="flex justify-center px-16 items-center">
            <div class="flex flex-col gap-3">
                <label class="input input-bordered flex items-center gap-2 w-[30rem]">
                    <input type="text" class="grow" placeholder="Search Anything Here" />
                    <kbd class="kbd kbd-xl"><i class="fa fa-search"></i></kbd>
                </label>


                <p class="text-sm font-medium text-center ">Can't find your community? Make one <a
                        href="/create-community" class="hover:underline text-customBrown font-semibold">here</a> </p>
            </div>
        </div>



        <div class="flex flex-col">
            <div class="flex flex-wrap justify-between px-16 gap-12">
                @if ($communities->count() > 0)
                    @foreach ($communities as $community)
                        <div class="card card-compact w-[22rem] bg-base-100 shadow-xl">
                            <figure><img class="w-[22rem] h-[16rem] object-fill"
                                    src="{{ asset('storage/images/' . $community->logo) }}" alt="Shoes" />
                            </figure>
                            <div class="card-body flex">

                                <h2 class="card-title">{{ ucwords($community->name) }}</h2>
                                <p class="text-sm"><i class="fa fa-user"></i> {{ $community->members->count() }} Members
                                </p>
                                <p class="text-sm"><i class="fa fa-map"></i> {{ ucwords($community->location) }}</p>
                                <p class="text-sm"><i class="fa fa-list-alt"></i> {{ ucwords($community->category) }}
                                </p>
                                <hr>

                                <div class="flex w-full justify-between items-center mt-2">
                                    <div class="flex flex-row gap-2 items-center">
                                        <div class="rating">
                                            <input type="" name="rating-2" class="mask mask-star-2 bg-orange-400"
                                                disabled />
                                            <input type="radio" name="rating-2" class="mask mask-star-2 bg-orange-400"
                                                disabled />
                                            <input type="radio" name="rating-2" class="mask mask-star-2 bg-orange-400"
                                                disabled />
                                            <input type="radio" name="rating-2" class="mask mask-star-2 bg-orange-400"
                                                disabled />
                                            <input type="radio" name="rating-2" class="mask mask-star-2 bg-orange-400"
                                                disabled />
                                        </div>
                                        <p class="text-xs font-semibold">2/5</p>
                                    </div>


                                    <div class="card-actions">
                                        <a href="/community/{{ $community->id }}"
                                            class="flex items-center justify-center w-24 font-semibold bg-customGreen border rounded-lg h-12 hover:brightness-95 text-white text-center">Details</a>
                                    </div>
                                </div>
                            </div>

                        </div>
                    @endforeach
                @else
                    <p class="w-full text-3xl text-center">No Communities Yet!</p>
                @endif

            </div>
        </div>





        {{-- Footer Component --}}
        <div class="mt-[10rem]">
            @include('components.footer')
        </div>


    </div>
</body>
<script src="https://cdn.tailwindcss.com"></script>
<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>

</html>
