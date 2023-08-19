<x-admin.app>
    @section('content')
    <div class="mb-6 flex flex-col gap-3 sm:flex-row sm:items-center sm:justify-between">
        <h2 class="text-title-md2 font-bold text-black dark:text-white">
            Vendors
        </h2>

        <nav>
            <ol class="flex items-center gap-2">
                <li>
                    Vendors /
                </li>
                <li class="font-medium text-primary">All Vendors</li>
            </ol>
        </nav>
    </div>

    <div
        class="rounded-sm border border-stroke bg-white px-5 pt-6 pb-2.5 shadow-default dark:border-strokedark dark:bg-boxdark sm:px-7.5 xl:pb-1">
        <div class="max-w-full overflow-x-auto">
            <x-admin.message></x-admin.message>
            <table class="w-full table-auto">
                <thead>
                    <tr class="bg-gray text-left dark:bg-meta-4 border-[#eee] border">
                        <th class="min-w-[30px] py-5 px-2 font-semibold text-black dark:text-white">
                            ID
                        </th>
                        <th class="min-w-[30px] py-5 px-2 font-semibold text-black dark:text-white">
                            Name
                        </th>
                        <th
                            class="min-w-[120px] py-5 px-2 border-l border-[#eee] font-semibold text-black dark:text-white">
                            Address
                        </th>
                        <th class="py-5 px-2 border-l border-[#eee] font-semibold text-black dark:text-white">
                            Phone
                        </th>
                        <th class="py-5 px-2 border-l border-[#eee] font-semibold text-black dark:text-white">
                            Contact Name
                        </th>
                        <th class="py-5 px-2 border-l border-[#eee] font-semibold text-black dark:text-white">
                            Contact Phone
                        </th>
                        <th class="py-5 px-2 border-l border-[#eee] font-semibold text-black dark:text-white">
                            Created At
                        </th>
                        <th class="py-5 px-2 border-l border-[#eee] font-semibold text-black dark:text-white">
                            Actions
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($data['rows'] as $row)
                        <tr class=" border border-[#eee] hover:bg-[#fcfafa] dark:hover:bg-current dark:border-strokedark">
                            <td class="border-b border-l border-[#eee] p-2 dark:border-strokedark">
                                <h5 class="font-medium text-black dark:text-white">{{ $row->id }}</h5>
                            </td>
                            <td class="border-b border-l border-[#eee] p-2 dark:border-strokedark">
                                <h5 class="font-medium text-black dark:text-white">{{ $row->name }}</h5>
                            </td>
                            <td class="border-b border-l border-[#eee] p-2 dark:border-strokedark">
                                <h5 class="font-medium text-black dark:text-white">{{ $row->address }}</h5>
                            </td>
                            <td class="border-b border-l border-[#eee] p-2 dark:border-strokedark">
                                <h5 class="font-medium text-black dark:text-white">{{ $row->phone }}</h5>
                            </td>
                            <td class="border-b border-l border-[#eee] p-2 dark:border-strokedark">
                                <h5 class="font-medium text-black dark:text-white">{{ $row->contact_name }}</h5>
                            </td>
                            <td class="border-b border-l border-[#eee] p-2 dark:border-strokedark">
                                <h5 class="font-medium text-black dark:text-white">{{ $row->contact_phone }}</h5>
                            </td>
                            <td class="border-b border-l border-[#eee] p-2 dark:border-strokedark">
                                <p class="text-black dark:text-white">{{ $row->created_at->diffForHumans() }}</p>
                            </td>
                            <td class="border-b border-l border-[#eee] p-2 dark:border-strokedark">
                                <div class="flex items-center space-x-3.5">
                                    <a href="{{route('admin.vendor.post.update',$row->id)}}"
                                        class="block p-2 bg-gray-300 text-black  rounded border hover:bg-gray-400 flex border-bodydark1">
                                        <x-icon.edit></x-icon.edit> <span class="ml-1">Edit</span>
                                    </a>
                                    <x-admin.button.delete :row="$row" :action="route('admin.vendor.delete',$row->id)">
                                    </x-admin.button.delete>
                                </div>
                            </td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
            <div class="mt-5 mb-5">
                {{ $data['rows']->links() }}
            </div>
        </div>
    </div>
    @endsection

    @section('script')
    <script type="module">
        $('.show_confirm').click(function (event) {
            var form = $(this).closest("form");
            var name = $(this).data("name");
            event.preventDefault();
            Swal.fire({
                title: '<span class="leading-10">Are you sure, You want to delete this Vendor?</span>',
                text: "You won't be able to revert this!",
                type: 'warning',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#DD3333',
                cancelButtonColor: '#3085D6',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.value) {

                    Swal.fire(
                        'Deleted!',
                        'Your Vendor has been deleted.',
                        'success'
                    )
                    form.submit();
                }
            })
        });

    </script>
    @endsection
</x-admin.app>
