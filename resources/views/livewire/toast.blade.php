<div>

    <div x-data class="fixed top-20 right-0 left-0 sm:top-20 sm:right-5 sm:left-auto z-50">
        <template x-for="[id, value] in Object.entries($store.toast.toasts)" :key="id">
            <div id="" x-show="value.show" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 transform scale-90" x-transition:enter-end="opacity-100 transform scale-100" x-transition:leave="transition ease-in duration-300" x-transition:leave-start="opacity-100 transform scale-100" x-transition:leave-end="opacity-0 transform translate-x-72">
                <div :class="value.type" class=" shadow-xl rounded-lg bg-white dark:bg-gray-800 border-l-4 mx-auto m-3 p-4 notification-box flex transition duration-500 ease-in-out">
                    <div class="pr-2">
                        <i :class="value.icon" class=" text-lg"></i>
                    </div>
                    <div>
                        <div class="text-sm text pb-2 font-bold">
                            <span x-text="value.title"></span>

                            <span class="absolute ml-52">
                                <button @click="$store.toast.close(id)">
                                    <i class="ri-close-line fill-current text-red-500"></i>
                                </button>
                            </span>

                        </div>
                        <div class="text-sm text  tracking-tight ">
                            <span x-text="value.message"></span>
                        </div>
                    </div>
                </div>
            </div>
        </template>
    </div>

    <script>
        Livewire.on('toast', data => {
            console.log(data);
            Spruce.store('toast').add(data['type'], data['title'], data['message'], data['duration']);
        });
    </script>

</div>
