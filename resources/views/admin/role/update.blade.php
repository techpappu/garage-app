<x-admin.app>
    @section('content')
    <div class="mb-6 flex flex-col gap-3 sm:flex-row sm:items-center sm:justify-between">
        <h2 class="text-title-md2 font-bold text-black dark:text-white">
            Roles
        </h2>

        <nav>
            <ol class="flex items-center gap-2">
                <li>
                    Roles /
                </li>
                <li class="font-medium text-primary">Create New Role</li>
            </ol>
        </nav>
    </div>

    <div class="col-grid-12 bg-white rounded shadow-2 p-4 dark:bg-boxdark">
        <div class="mb-5 mt-3">
            <x-admin.validationAlert></x-admin.validationAlert>
        </div>
        <x-admin.message></x-admin.message>
        <div class="rounded-sm border border-stroke bg-white shadow-default dark:border-strokedark dark:bg-boxdark">
            <div class="border-b border-stroke py-4 px-6.5 dark:border-strokedark">
                <h3 class="font-semibold text-black dark:text-white">
                    Create New Role
                </h3>
            </div>
            <form action="{{ route('admin.role.post.update',$data['row']->id) }}" method="POST" id="form">
                @csrf
                <div class="p-6.5">
                    <div class="mb-4.5 flex flex-col gap-6 xl:flex-row">

                        <div class="w-full">
                            <label class="mb-2.5 block text-black dark:text-white">
                                Role Name <span class="text-meta-1">*</span>
                            </label>
                            <input type="text" value="{{$data['row']->name}}" placeholder="Enter role name" name="name"
                                class="w-full rounded border-[1.5px] border-stroke bg-transparent py-3 px-5 font-medium outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:focus:border-primary">
                        </div>
                    </div>


                    <button type="submit"
                        class="flex w-full justify-center rounded bg-primary p-3 font-medium text-white">
                        Create Role
                    </button>
                </div>
            </form>
        </div>
    </div>
    @endsection

    @section('script')
    <script type="module">
        $("#form").validate({
                    rules: {
                        name: 'required',
                    },
                    messages: {
                        name: 'Please enter a role name',
        
                    }
                });
              </script>
    @endsection
    @section('css')
    <style>
        .error {
            color: #ff0001;
        }

    </style>
    @endsection
</x-admin.app>
