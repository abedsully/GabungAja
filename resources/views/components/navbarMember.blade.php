        {{-- Navbar --}}
        <div class="px-3 bg-customGreen">
            <div class="navbar">
                <img src="{{ asset('assets/logo.png') }}" class="w-20 h-20" alt="logo">
                <div class="flex justify-end flex-1 px-2">
                    <div class="flex items-stretch">
                        <a class="btn btn-ghost rounded-btn">Button</a>
                        <div class="dropdown dropdown-end">
                            <div tabindex="0" role="button" class="btn btn-ghost rounded-btn"><i
                                    class="fa fa-user-circle text-4xl text-white"></i></div>
                            <ul tabindex="0"
                                class="menu dropdown-content z-[1] p-2 shadow bg-base-100 rounded-box w-52 mt-4">
                                <form action="/logout" method="POST">
                                    @csrf
                                    <li><button type="submit" class="hover:bg-red-400 hover:text-white">Logout</button>
                                    </li>
                                </form>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
