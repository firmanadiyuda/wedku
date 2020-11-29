<div>

    <div id="home" class="relative bg-primary-500 pattern-1 pt-40">

        <section>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-y-16 px-10 md:px-10 lg:px-24">

                <div class="relative reveal-fade-right">
                    <div class="text-white text-center md:text-left text-6xl font-pacifico md:text-6xl lg:text-6xl lg:text-1xl ">
                        {{ env('APP_NAME') }}.id
                    </div>

                    <div class="reveal-fade-up text-white font-medium text-center md:text-left font-reguler text-lg">
                        Platform Undangan Digital Instan<br>
                    </div>
                </div>


                <div class="reveal-fade-up">
                    <x-card>
                        <form action="creator">
                            @csrf

                            <x-input-group id="namaPria" type="text" placeholder="Nama Pengantin Pria" required autofocus />
                            <x-input-group id="namaWanita" type="text" placeholder="Nama Pengantin Wanita" required />

                            <button class="btn bg-primary-500 w-full hover:bg-primary-400 focus:shadow-outline-blue py-5 tracking-widest font-bold transition duration-200 ease-in-out">
                                BUAT UNDANGANMU GRATIS
                            </button>
                        </form>
                        {{-- <button @click="window.livewire.emit('toast', {type:'info', title:'judul', message:'s', duration:5000})">qwerty</button> --}}
                        {{-- <button @click="window.livewire.emit('tes')">qwerty</button> --}}

                        <button wire:click="show">qwerty</button>

                    </x-card>
                </div>

                <div class="reveal-fade-up relative text-left -mt-24 md:-ml-20 lg:-ml-20 md:-mt-48 lg:-mt-56">
                    <img class="absolute text-left transform scale-90 md:scale-100" src="{{asset('assets/images/undraw_wedding_t1yl.svg')}}" alt="">
                </div>

            </div>

            <svg xmlns="http://www.w3.org/2000/svg" class="fill-current bg-svg sm:-mt-10 md:-mt-10 lg:-mt-28" viewBox="0 0 1440 320">
                <path fill-opacity="1" d="M0,32L48,48C96,64,192,96,288,117.3C384,139,480,149,576,154.7C672,160,768,160,864,144C960,128,1056,96,1152,101.3C1248,107,1344,149,1392,170.7L1440,192L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path>
            </svg>
        </section>



        <section id="fitur" class="bg pt-15 pb-60">
            @include('components.home.fitur')
        </section>

        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320" class="fill-current bg-svg">
            <path fill-opacity="1" d="M0,288L48,288C96,288,192,288,288,250.7C384,213,480,139,576,117.3C672,96,768,128,864,122.7C960,117,1056,75,1152,53.3C1248,32,1344,32,1392,32L1440,32L1440,0L1392,0C1344,0,1248,0,1152,0C1056,0,960,0,864,0C768,0,672,0,576,0C480,0,384,0,288,0C192,0,96,0,48,0L0,0Z"></path>
        </svg>

        <section id="harga" class=" -mt-96">
            @include('components.home.harga')
        </section>

        <svg xmlns="http://www.w3.org/2000/svg" class="fill-current bg-svg sm:-mt-10 md:-mt-10 lg:-mt-28" viewBox="0 0 1440 320">
            <path fill-opacity="1" d="M0,32L48,58.7C96,85,192,139,288,186.7C384,235,480,277,576,266.7C672,256,768,192,864,144C960,96,1056,64,1152,90.7C1248,117,1344,203,1392,245.3L1440,288L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path>
        </svg>

        <section id="tema" class="bg pt-15">
            @include('components.home.tema')
        </section>

    </div>

</div>
