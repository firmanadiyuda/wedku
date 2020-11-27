{{-- /* ------------------------- Button Dark/Light Mode ------------------------- */ --}}
<div>
    <div class="relative mt-5 text-center sm:-m-2">
        <button data-turbolinks="false" x-data id="buttonDarkMode" @click="$store.theme.change()" class="my-auto transform scale-50" style="outline: none;">
            <div class="my-auto transition duration-300 ease-in-out bg-primary-600 hover:bg-primary-400 rounded-full h-13 w-13 flex">
                <i id="iconDarkMode" x-data class="transition duration-500 ease-in-out text-2xl m-auto text-white dark:text-gray-900" :class="{ 'ri-moon-fill': $store.theme.isDarkMode == true , 'ri-sun-line': $store.theme.isDarkMode == false }"></i>
            </div>
        </button>
    </div>
</div>
{{-- /* -------------------------------------------------------------------------- */ --}}
