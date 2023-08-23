<x-admin.app>
    @section('content')
    <div class="mb-6 flex flex-col gap-3 sm:flex-row sm:items-center sm:justify-between">
        <h2 class="text-title-md2 font-bold text-black dark:text-white">
            Update Profile
        </h2>

        <nav>
            <ol class="flex items-center gap-2">
                <li>
                    Users /
                </li>
                <li class="font-medium text-primary">Update Profile</li>
            </ol>
        </nav>
    </div>

    
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
        <x-admin.message></x-admin.message>
        <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
            <div class="max-w-xl">
                @include('profile.partials.update-profile-information-form')
            </div>
        </div>

        <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
            <div class="max-w-xl">
                @include('profile.partials.update-password-form')
            </div>
        </div>

        <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
            <div class="max-w-xl">
                @include('profile.partials.delete-user-form')
            </div>
        </div>
    </div>
    @endsection
</x-admin.app>
