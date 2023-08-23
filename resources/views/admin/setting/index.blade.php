<x-admin.app>
    @section('content')
    <div class="mb-6 flex flex-col gap-3 sm:flex-row sm:items-center sm:justify-between">
        <h2 class="text-title-md2 font-bold text-black dark:text-white">
            Settings
        </h2>

        <nav>
            <ol class="flex items-center gap-2">
                <li>
                    Settings /
                </li>
                <li class="font-medium text-primary">All Settings</li>
            </ol>
        </nav>
    </div>

    <div
        class="rounded-sm border border-stroke bg-white px-5 pt-6 pb-2.5 shadow-default dark:border-strokedark dark:bg-boxdark sm:px-7.5 xl:pb-1">
        <div class="max-w-full">
            <x-admin.message></x-admin.message>
            <h1 class="from-black font-satoshi text-5xl">Settings</h1>
        </div>
    </div>
    @endsection
</x-admin.app>
