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
                <li class="font-medium text-primary">All Roles</li>
            </ol>
        </nav>
    </div>

    <div
        class="rounded-sm border border-stroke bg-white px-5 pt-6 pb-2.5 shadow-default dark:border-strokedark dark:bg-boxdark sm:px-7.5 xl:pb-1">
        <div class="max-w-full overflow-x-auto">
            <div class="w-full overflow-hidden">
                <x-admin.message></x-admin.message>
            </div>
            <form
                action="{{ route('admin.role.permissions.post',$data['role']->id) }}"
                method="POST">
                @csrf
                <table class="w-full table-auto">
                    <thead>
                        <tr class="bg-gray text-left dark:bg-meta-4 border-[#eee] border">
                            <th class="min-w-[30px] py-5 px-2 font-semibold text-black dark:text-white">
                                Permission Name
                            </th>
                            <th
                                class="min-w-[150px] py-5 px-2 border-l border-[#eee] font-semibold text-black dark:text-white">
                                Allow
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($data['rows'] as $row)
                            <tr>
                                <td class="border-b border-l border-[#eee] p-2 dark:border-strokedark">
                                    {{ ucwords(str_replace("."," ",$row->name)); }}
                                </td>
                                <td class="border-b border-l border-[#eee] p-2 dark:border-strokedark">
                                    <input type="checkbox" name="permissions[]" value="{{ $row->id }}"
                                        @if(in_array($row->id,$data['allowedpermissions'])) checked="checked" @endif/>

                                </td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
                <button type="submit" class="flex w-full justify-center rounded bg-primary p-3 font-medium text-white">
                    Save
                </button>
            </form>
        </div>
    </div>
    @endsection
</x-admin.app>
