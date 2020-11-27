<nav class="fixed w-full shadow-xl" style="z-index: 100">
    <div class="antialiased bg-navbar">
        <div class="w-full text-gray-700">
            <div x-data="{ open: false }" class="flex flex-col max-w-screen-xl px-4 mx-auto md:items-center md:justify-between md:flex-row md:px-6 lg:px-8">
                <div class="flex flex-row items-center justify-between p-4">

                    {{-- /* ---------------------------------- Logo ---------------------------------- */ --}}
                    <a href="/" class="text-lg font-pacifico tracking-widest text-primary-500 rounded-lg focus:outline-none transform hover:translate-x-2 dark-hover:text-primary-300 hover:text-primary-700 transition ease-in-out duration-200">Wedku</a>
                    {{-- /* -------------------------------------------------------------------------- */ --}}

                    <button data-turbolinks="false" class="rounded-lg md:hidden focus:outline-none focus:shadow-outline" @click="open = !open">
                        <svg fill="#667eea" viewBox="0 0 20 20" class="w-6 h-6">
                            <path x-show="!open" fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM9 15a1 1 0 011-1h6a1 1 0 110 2h-6a1 1 0 01-1-1z" clip-rule="evenodd"></path>
                            <path x-show="open" fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                        </svg>
                    </button>
                    
                </div>

                <nav :class="{'flex': open, 'hidden': !open}" class="flex-col flex-grow hidden pb-4 md:pb-0 md:flex md:justify-end md:flex-row">

                    
                    <x-navbar.nav-item name="Beranda" href="#home" data-turbolinks="false" />
                    <x-navbar.nav-item name="Fitur" href="#fitur" data-turbolinks="false" />
                    <x-navbar.nav-item name="Harga" href="#harga" data-turbolinks="false" />
                    <x-navbar.nav-item name="FAQ" href="#faq" data-turbolinks="false" />
                    <a class="px-4 py-2 mt-2 md:mr-3 text-sm text-white font-semibold bg-primary-500 rounded-lg dark:bg-primary-500 dark:text-gray-200 md:mt-0 md:ml-4 hover:text-gray-100 hover:bg-primary-400 dark-hover:bg-primary-400 focus:outline-none transition duration-200 ease-in-out" href="/login">Login &nbsp; <i class="ri-login-box-line align-middle"></i></a>

                    <x-btn-theme />
                </nav>
            </div>
        </div>
    </div>
</nav>
