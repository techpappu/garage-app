<x-admin.app>
    @section('content')
    <div class="mb-6 flex flex-col gap-3 sm:flex-row sm:items-center sm:justify-between">
        <h2 class="text-title-md2 font-bold text-black dark:text-white">
            Users
        </h2>

        <nav>
            <ol class="flex items-center gap-2">
                <li>
                    Users /
                </li>
                <li class="font-medium text-primary">Create New User</li>
            </ol>
        </nav>
    </div>

    <div class="col-grid-12 bg-white rounded shadow-2 p-4 dark:bg-boxdark">
        <div class="mb-5 mt-3">
          <x-admin.validationAlert></x-admin.validationAlert>
        </div>
        <div class="rounded-sm border border-stroke bg-white shadow-default dark:border-strokedark dark:bg-boxdark">
            <div class="border-b border-stroke py-4 px-6.5 dark:border-strokedark">
                <h3 class="font-semibold text-black dark:text-white">
                    Create New User
                </h3>
            </div>
            <form action="{{route('admin.user.post.create')}}" method="POST">
                @csrf
                <div class="p-6.5">
                    <div class="mb-4.5">
                        <label class="mb-2.5 block text-black dark:text-white">
                            Select A Role <span class="text-meta-1">*</span>
                        </label>
                        <div class="relative z-20 bg-transparent dark:bg-form-input">
                            <select name="role"
                                class="relative z-20 w-full appearance-none rounded border border-stroke bg-transparent py-3 px-5 outline-none transition focus:border-primary active:border-primary dark:border-form-strokedark dark:bg-form-input dark:focus:border-primary">
                                <option selected disabled hidden>Select A Role</option>
                                @foreach ($data['roles'] as  $role)
                                    <option value="{{$role}}">{{$role}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="mb-4.5 flex flex-col gap-6 xl:flex-row">

                        <div class="w-full">
                            <label class="mb-2.5 block text-black dark:text-white">
                                Name <span class="text-meta-1">*</span>
                            </label>
                            <input type="text" placeholder="Enter your first name" name="name"
                                class="w-full rounded border-[1.5px] border-stroke bg-transparent py-3 px-5 font-medium outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:focus:border-primary">
                        </div>
                    </div>

                    <div class="mb-4.5">
                        <label class="mb-2.5 block text-black dark:text-white">
                            Email <span class="text-meta-1">*</span>
                        </label>
                        <input type="email" placeholder="Enter your email address" name="email"
                            class="w-full rounded border-[1.5px] border-stroke bg-transparent py-3 px-5 font-medium outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:focus:border-primary">
                    </div>
                    <div class="mb-4.5">
                        <label class="mb-2.5 block text-black dark:text-white">
                            Password <span class="text-meta-1">*</span>
                        </label>
                        <input type="password" placeholder="Enter password" name="password"
                            class="w-full rounded border-[1.5px] border-stroke bg-transparent py-3 px-5 font-medium outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:focus:border-primary">
                    </div>
                    <div class="mb-5.5">
                        <label class="mb-2.5 block text-black dark:text-white">
                            Re-type Password <span class="text-meta-1">*</span>
                        </label>
                        <input type="password" placeholder="Re-enter password" name="password_confirmation"
                            class="w-full rounded border-[1.5px] border-stroke bg-transparent py-3 px-5 font-medium outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:focus:border-primary">
                    </div>


                    <button type="submit"
                        class="flex w-full justify-center rounded bg-primary p-3 font-medium text-white">
                        Create User
                    </button>
                </div>
            </form>
        </div>
    </div>
    @endsection
</x-admin.app>
