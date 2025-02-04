    <!-- Navigation Bar -->
    <nav class="bg-blue-600 text-white py-4 shadow-lg">
        <div class="container mx-auto flex items-center justify-between px-4">
            <!-- Logo -->
            <div class="flex items-center">
                <a href="#" class="font-bold text-lg">Entry Sheet Manager</a>
            </div>
            
            <!-- Hamburger Menu Button -->
            <button id="menu-toggle" class="block md:hidden focus:outline-none ml-auto">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
                </svg>
            </button>

            <!-- Navigation Links -->
            <nav id="menu" class="hidden md:flex flex-col md:flex-row md:items-center md:space-x-4 absolute md:static top-14 md:top-0 right-0 w-full md:w-auto bg-blue-600 md:bg-transparent z-10 shadow-md md:shadow-none md:justify-end">
                <!-- <a href="#" class="block px-4 py-2 md:py-0 hover:text-gray-300">ホーム</a> -->
                <!-- <a href="#" class="block px-4 py-2 md:py-0 hover:text-gray-300">概要</a> -->
                @if (Route::has('login'))
                    @auth
                        <a href="{{ url('/dashboard') }}" class="block px-4 py-2 md:py-0 hover:text-gray-300">ダッシュボード</a>
                    @else
                        <a href="{{ route('login') }}" class="block px-4 py-2 md:py-0 hover:text-gray-300">ログイン</a>
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="block px-4 py-2 md:py-0 hover:text-gray-300">登録</a>
                        @endif
                    @endauth
                @endif
            </nav>
        </div>
    </nav>