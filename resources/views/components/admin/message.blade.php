@if(session()->has('success'))
    <div id="alert-3"
        class="flex items-center p-4 mb-4 text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400"
        role="alert">
        <x-icon.alert></x-icon.alert>
        <span class="sr-only">Info</span>
        <div class="ml-3 text-sm font-medium">
            {{ session('success') }}
        </div>
        <button type="button"
            class="ml-auto -mx-1.5 -my-1.5 bg-green-50 text-green-500 rounded-lg focus:ring-2 focus:ring-green-400 p-1.5 hover:bg-green-200 inline-flex items-center justify-center h-8 w-8 dark:bg-gray-800 dark:text-green-400 dark:hover:bg-gray-700"
            data-dismiss-target="#alert-3" aria-label="Close">
            <span class="sr-only">Close</span>
            <x-icon.cross></x-icon.cross>
        </button>
    </div>
@endif
@if(session()->has('warning'))
    <div id="alert-4"
        class="flex items-center p-4 mb-4 text-yellow-800 rounded-lg bg-yellow-50 dark:bg-gray-800 dark:text-yellow-300"
        role="alert">
        <x-icon.alert></x-icon.alert>
        <span class="sr-only">Info</span>
        <div class="ml-3 text-sm font-medium">
            {{ session('warning') }}
        </div>
        <button type="button"
            class="ml-auto -mx-1.5 -my-1.5 bg-yellow-50 text-yellow-500 rounded-lg focus:ring-2 focus:ring-yellow-400 p-1.5 hover:bg-yellow-200 inline-flex items-center justify-center h-8 w-8 dark:bg-gray-800 dark:text-yellow-300 dark:hover:bg-gray-700"
            data-dismiss-target="#alert-4" aria-label="Close">
            <span class="sr-only">Close</span>
            <x-icon.cross></x-icon.cross>
        </button>
    </div>
@endif
@if(session()->has('danger'))
    <div id="alert-2"
        class="flex items-center p-4 mb-4 text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400"
        role="alert">
        <x-icon.alert></x-icon.alert>
        <span class="sr-only">Info</span>
        <div class="ml-3 text-sm font-medium">
            {{ session('danger') }}
        </div>
        <button type="button"
            class="ml-auto -mx-1.5 -my-1.5 bg-red-50 text-red-500 rounded-lg focus:ring-2 focus:ring-red-400 p-1.5 hover:bg-red-200 inline-flex items-center justify-center h-8 w-8 dark:bg-gray-800 dark:text-red-400 dark:hover:bg-gray-700"
            data-dismiss-target="#alert-2" aria-label="Close">
            <span class="sr-only">Close</span>
            <x-icon.cross></x-icon.cross>
        </button>
    </div>
@endif
