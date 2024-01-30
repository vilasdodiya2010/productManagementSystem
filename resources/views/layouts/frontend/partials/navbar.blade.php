        <header>
            <!-- Navbar -->
            <nav>
                <div class="header-navbar">
                    <div class="logo-section">
                        <!-- Your Logo -->
                        <img src="{{ asset('logo.png') }}" width="50px" height="50px" alt="Your Logo">
                    </div>
                    <div class="top-menu-section">
                        <ul>
                            <li><a href="#">Home</a></li>
                            <li><a href="{{ route('productsList')}}">Products</a></li>
                            @if (Route::has('login'))
                                <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                                    @auth
                                        <li>
                                            <a href="{{ url('/home') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Home</a>
                                        </li>
                                    @else
                                        <li>
                                            <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>
                                        </li>

                                        @if (Route::has('register'))
                                            <li>
                                                <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                                            </li>
                                        @endif
                                    @endauth
                                </div>
                            @endif
                            <!-- Add more navigation links as needed -->
                        </ul>
                    </div>
                </div>
            </nav>
        </header>