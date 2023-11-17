<x-admin.app>
    @section('content')
    <div class="mb-6 flex flex-col gap-3 sm:flex-row sm:items-center sm:justify-between">
        <h2 class="text-title-md2 font-bold text-black dark:text-white">
            Vehicles Reports
        </h2>

        <nav>
            <ol class="flex items-center gap-2">
                <li>
                    Vehicles /
                </li>
                <li class="font-medium text-primary">All Vehicles</li>
            </ol>
        </nav>
    </div>

    <div
        class="rounded-sm border border-stroke bg-white px-5 pt-6 pb-2.5 shadow-default dark:border-strokedark dark:bg-boxdark sm:px-7.5 xl:pb-1">
        <div class="max-w-full overflow-x-auto">
            <x-admin.message></x-admin.message>
            <h1 class="text-lg">Report: <span class="text-[#2472C8] font-bold">{{ $data['row']->name }}</span></h1>
            @if($data['row']->jobs->count()>0)
            <table class="w-full table-auto my-10">
                <thead>
                    <tr class="bg-gray text-center dark:bg-meta-4 border-[#eee] border">
                        <th class="min-w-[30px] py-5 px-2 font-semibold text-black dark:text-white">
                            #
                        </th>
                        <th class="min-w-[30px] py-5 px-2 border-l font-semibold text-black dark:text-white">
                            Work Order No
                        </th>
                        <th
                            class="min-w-[120px] py-5 px-2 border-l border-[#eee] font-semibold text-black dark:text-white">
                            Work Order Date
                        </th>
                        <th class="py-5 px-2 border-l border-[#eee] font-semibold text-black dark:text-white">
                            Vendor
                        </th>
                        <th class="py-5 px-2 border-l border-[#eee] font-semibold text-black dark:text-white">
                            Total
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($data['row']->jobs as $key => $row)
                    <tr
                        class=" border border-[#eee] text-center hover:bg-[#fcfafa] dark:hover:bg-current dark:border-strokedark">
                        <td class="border-b border-l border-[#eee] p-2 dark:border-strokedark">
                            <h5 class="font-medium text-black dark:text-white">{{$key+1}}</h5>
                        </td>
                        <td class="border-b border-l border-[#eee] p-2 dark:border-strokedark">
                            <h5 class="font-medium text-black dark:text-white">{{ $row->work_order_no }}</h5>
                        </td>
                        <td class="border-b border-l border-[#eee] p-2 dark:border-strokedark">
                            <h5 class="font-medium text-black dark:text-white">{{ $row->work_order_date }}
                            </h5>
                        </td>
                        <td class="border-b border-l border-[#eee] p-2 dark:border-strokedark">
                            <h5 class="font-medium text-black dark:text-white">{{ $row->vendor->name }}</h5>
                        </td>
                        <td class="border-b border-l border-[#eee] p-2 dark:border-strokedark">
                            <h5 class="font-medium text-black dark:text-white">
                                {{ $row->items->pluck('amount')->sum() }}</h5>
                        </td>
                    </tr>
                    @if ($row->items->count()>0)
                    <tr
                        class=" border border-[#eee] bg-gray-100 text-center dark:hover:bg-current dark:border-strokedark">
                        <td colspan="5" class="w-full  border-b border-l border-[#eee] p-5 dark:border-strokedark">
                            <table class="w-full table-auto">
                                <tr
                                    class=" border border-gray-300  text-center p-5 hover:bg-[#fcfafa] dark:hover:bg-current dark:border-strokedark">
                                    <td class=" border-gray-300 border-l p-2 dark:border-strokedark">
                                        <h5 class="font-medium text-black dark:text-white">#</h5>
                                    </td>
                                    <td class=" border-l border-gray-300 p-2 dark:border-strokedark">
                                        <h5 class="font-medium text-black dark:text-white">Item</h5>
                                    </td>
                                    <td class="border-l border-gray-300 p-2 dark:border-strokedark">
                                        <h5 class="font-medium text-black dark:text-white">Spares</h5>
                                    </td>
                                    <td class="border-l border-gray-300 p-2 dark:border-strokedark">
                                        <h5 class="font-medium text-black dark:text-white">Warrenty</h5>
                                    </td>
                                </tr>
                                @foreach($row->items as $key => $item)
                                <tr
                                    class=" border  border-gray-300 text-center p-5 hover:bg-[#fcfafa] dark:hover:bg-current dark:border-strokedark">
                                    <td class="border-l border-gray-300 p-2 dark:border-strokedark">
                                        <h5 class="font-medium text-black dark:text-white">{{$key+1}}</h5>
                                    </td>
                                    <td class="border-l border-gray-300 p-2 dark:border-strokedark">
                                        <h5 class="font-medium text-black dark:text-white">
                                            {{ $item->title }}</h5>
                                    </td>
                                    <td class="border-l border-gray-300 p-2 dark:border-strokedark">
                                        <h5 class="font-medium text-black dark:text-white">
                                            {{ $item->list_of_spares }}</h5>
                                    </td>
                                    <td class="border-l border-gray-300 p-2 dark:border-strokedark">
                                        <h5 class="font-medium text-black dark:text-white">
                                            {{ $item->warranty }}</h5>
                                    </td>
                                </tr>
                                @endforeach
                            </table>
                        </td>
                    </tr>
                    @endif

                    @endforeach

                </tbody>
            </table>
            @else
            <div class="py-5">
                <h1 class="text-center text-xl">There is No Jobs For this Vehicle</h1>
            </div>
            @endif

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
                title: '<span class="leading-10">Are you sure, You want to delete this Vhicle?</span>',
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
                        'Your file has been deleted.',
                        'success'
                    )
                    form.submit();
                }
            })
        });

    </script>
    @endsection
</x-admin.app>
