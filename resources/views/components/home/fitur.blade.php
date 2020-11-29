<div class="grid grid-cols-12 gap-x-5 gap-y-10 px-10 md:px-10 lg:px-24 pt-20 text-center">

    <div class="col-span-12 reveal-fade-up relative mx-auto font-montserrat">
        <div class="pb-10 text text-center md:text-left text-6xl font-thin md:text-6xl lg:text-6xl lg:text-1xl tracking-widest hover:text-primary-500 dark-hover:text-primary-500 transform hover:-translate-y-5">
            FITUR
            <hr>
        </div>
    </div>

    <div class="col-span-12 lg:col-span-8 reveal-fade-up">
        <div class="card h-full w-full mx-auto tracking-widest font-medium text lg:-ml-28">
            <div class="grid grid-cols-12 gap-x-5 gap-y-10 lg:pl-16">

                <x-home.fitur.item>
                <x-slot name="icon">ri-flashlight-line</x-slot>
                <x-slot name="title">INSTAN</x-slot>
                <x-slot name="description">
                Tanpa menunggu dan tanpa ragu, undangan digitalmu jadi dalam hitungan menit!
                </x-slot>
                </x-home-fitur-item>

                <x-home.fitur.item>
                <x-slot name="icon">ri-link</x-slot>
                <x-slot name="title">UNIQUE URL</x-slot>
                <x-slot name="description">
                URL undangan digital unik sesuai yang kamu mau. Misal: http://wedku.id/pria-dan-wanita.
                </x-slot>
                </x-home-fitur-item>

                <x-home.fitur.item>
                <x-slot name="icon">ri-map-pin-line</x-slot>
                <x-slot name="title">GOOGLE MAPS</x-slot>
                <x-slot name="description">
                    Dapatkan URL unik sesuai yang kamu mau! Misal: http://wedku.id/pria-dan-wanita.
                </x-slot>
                </x-home-fitur-item>

                <x-home.fitur.item>
                <x-slot name="icon">ri-chat-heart-line</x-slot>
                <x-slot name="title">GREETINGS</x-slot>
                <x-slot name="description">
                    Pengunjung yang diundang dapat meninggalkan ucapan selamat untuk kamu.
                </x-slot>
                </x-home-fitur-item>

                <x-home.fitur.item>
                <x-slot name="icon">ri-dashboard-line</x-slot>
                <x-slot name="title">DASHBOARD</x-slot>
                <x-slot name="description">
                    Atur undangan digital kamu di dalam dashboard sesuai preferensi kamu sendiri.
                </x-slot>
                </x-home-fitur-item>

                <x-home.fitur.item>
                <x-slot name="icon">ri-gift-line</x-slot>
                <x-slot name="title">AND MORE!</x-slot>
                <x-slot name="description">
                    Dan masih banyak lagi fitur menarik lainnya yang ada di Wedku! <a href="" class="a-link"> Lihat disini. </a>
                </x-slot>
                </x-home-fitur-item>
            </div>

        </div>


    </div>

    <div class="col-span-12 lg:col-span-4 pl-5">
        <div class="reveal-fade-up relative mx-0 sm:mx-20 md:mx-44 lg:mx-0 mb-96">
            <svg class="absolute fill-current text-primary-500 transform scale-100 lg:scale-150" viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
                <path d="M60.4,-48.9C74.7,-30.2,80.2,-5.3,75.4,17.8C70.6,40.9,55.4,62.1,35.4,70.7C15.4,79.2,-9.3,75,-32.2,64.8C-55,54.6,-76,38.3,-78.7,19.9C-81.4,1.4,-65.8,-19.3,-49.7,-38.5C-33.5,-57.6,-16.8,-75.1,3.1,-77.6C23,-80.1,46.1,-67.6,60.4,-48.9Z" transform="translate(100 100)" filter="url(#shadow-filter)" />
            </svg>
            <svg class="absolute fill-current text-primary-400 transform scale-90 lg:scale-125" viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
                <path d="M64.4,-51.1C76.7,-35.9,75.3,-9.5,68.1,12.8C60.8,35.2,47.7,53.5,30.1,61.6C12.5,69.6,-9.5,67.5,-23.6,57.5C-37.7,47.4,-43.9,29.4,-48,11C-52.2,-7.4,-54.3,-26.2,-46,-40.5C-37.6,-54.9,-18.8,-64.7,3.6,-67.6C26,-70.5,52,-66.3,64.4,-51.1Z" transform="translate(100 100)" filter="url(#shadow-filter)" />
            </svg>
            <svg class="absolute fill-current text-primary-300 transform scale-75 lg:scale-110" viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
                <path d="M57.8,-48.5C70.8,-29.7,74.7,-5.9,69.9,16.4C65.1,38.6,51.8,59.3,31.7,71C11.5,82.7,-15.5,85.5,-36,75.4C-56.6,65.3,-70.6,42.3,-70.3,22.2C-70.1,2,-55.4,-15.3,-41.3,-34.3C-27.2,-53.4,-13.6,-74.3,4.4,-77.8C22.3,-81.2,44.7,-67.4,57.8,-48.5Z" transform="translate(100 100)" filter="url(#shadow-filter)" />
                <defs>
                    <filter x="-50%" y="-50%" width="200%" height="200%" filterUnits="objectBoundingBox" id="shadow-filter">
                        <feOffset dx="0" dy="4" in="SourceAlpha" result="shadowOffsetOuter1" />
                        <feGaussianBlur stdDeviation="10" in="shadowOffsetOuter1" result="shadowBlurOuter1" />
                        <feColorMatrix values="0 0 0 0 0   0 0 0 0 0   0 0 0 0 0  0 0 0 0.2 0" in="shadowBlurOuter1" type="matrix" result="shadowMatrixOuter1" />
                        <feMerge>
                            <feMergeNode in="shadowMatrixOuter1" />
                            <feMergeNode in="SourceGraphic" />
                        </feMerge>
                    </filter>
                </defs>
            </svg>
            <img class="absolute mt-15 transform lg:scale-150" src="{{asset('assets/images/undraw_spread_love_r9jb.svg')}}" alt="">
        </div>
    </div>




    {{--

<div class="reveal-fade-up col-span-12 sm:col-span-3">
    <div class="card hover:bg-primary-600 hover:text-gray-100 dark-hover:bg-primary-700 h-full md:w-50 mx-auto tracking-widest font-medium text tooltip transform hover:-translate-y-5">
        <div class="bottom">
            <p class="text-center">Dolor sit amet, consectetur adipiscing elit.</p>
        </div>
        <div class="grid grid-cols-12 text-center">
            <div class="col-span-12">
                <p class="uppercase py-5 text-sm sm:text-xl">KALENDER</p>
            </div>
            <div class="col-span-12">
                <img src="{{asset('assets/images/undraw_calendar_dutt.svg')}}" class="transform scale-75" alt="">
</div>
</div>
</div>
</div>

<div class="reveal-fade-up col-span-12 sm:col-span-3">
    <div class="card hover:bg-primary-600 hover:text-gray-100 dark-hover:bg-primary-700 h-full md:w-50 mx-auto tracking-widest font-medium text tooltip transform hover:-translate-y-5">
        <div class="bottom">
            <p class="text-center">Dolor sit amet, consectetur adipiscing elit.</p>
        </div>
        <div class="grid grid-cols-12 text-center">
            <div class="col-span-12">
                <p class="uppercase py-5 text-sm sm:text-xl">GREETINGS</p>
            </div>
            <div class="col-span-12">
                <img src="{{asset('assets/images/undraw_Post_online_re_1b82.svg')}}" class="transform scale-50 -my-24" alt="">
            </div>
        </div>
    </div>
</div>

<div class="reveal-fade-up col-span-12 sm:col-span-3">
    <div class="card hover:bg-primary-600 hover:text-gray-100 dark-hover:bg-primary-700 h-full md:w-50 mx-auto tracking-widest font-medium text tooltip transform hover:-translate-y-5">
        <div class="bottom">
            <p class="text-center">Dolor sit amet, consectetur adipiscing elit.</p>
        </div>
        <div class="grid grid-cols-12 text-center">
            <div class="col-span-12">
                <p class="uppercase py-5 text-sm sm:text-xl">1 TAHUN TAYANG</p>
            </div>
            <div class="col-span-12">
                <img src="{{asset('assets/images/undraw_time_management_30iu.svg')}}" class="transform scale-75" alt="">
            </div>
        </div>
    </div>
</div>

<div class="reveal-fade-up col-span-12 sm:col-span-3">
    <div class="card hover:bg-primary-600 hover:text-gray-100 dark-hover:bg-primary-700 h-full md:w-50 mx-auto tracking-widest font-medium text tooltip transform hover:-translate-y-5">
        <div class="bottom">
            <p class="text-center">Dolor sit amet, consectetur adipiscing elit.</p>
        </div>
        <div class="grid grid-cols-12 text-center">
            <div class="col-span-12">
                <p class="uppercase py-5 text-sm sm:text-xl">ECO-FRIENDLY</p>
            </div>
            <div class="col-span-12">
                <img src="{{asset('assets/images/undraw_environment_iaus.svg')}}" class="transform scale-75" alt="">
            </div>
        </div>
    </div>
</div> --}}


</div>
