<x-admin.app>
    @section('content')
    <div class="mb-6 flex flex-col gap-3 sm:flex-row sm:items-center sm:justify-between">
        <h2 class="text-title-md2 font-bold text-black dark:text-white">
            Vehicles
        </h2>

        <nav> 
            <ol class="flex items-center gap-2">
                <li>
                    Vehicles /
                </li>
                <li class="font-medium text-primary">Update Vehicle</li>
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
                    Update Vehicle
                </h3>
            </div>
            <form action="{{route('admin.vehicle.post.update',$data['row']->id)}}" method="POST" id="form">
                @csrf
                <div class="p-6.5">
                    <div class="mb-4.5 flex flex-col gap-6 xl:flex-row">
                        <div class="w-full xl:w-1/2">
                          <label class="mb-2.5 block text-black dark:text-white">
                            name <span class="text-meta-1">*</span>
                          </label>
                          <input type="text" value="{{$data['row']->name}}" placeholder="Enter vehicle name" name="name" class="w-full rounded border-[1.5px] border-stroke bg-transparent py-3 px-5 font-medium outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:focus:border-primary">
                        </div>

                        <div class="w-full xl:w-1/2">
                          <label class="mb-2.5 block text-black dark:text-white">
                            Chassis No <span class="text-meta-1">*</span>
                          </label>
                          <input type="text" value="{{$data['row']->chassis_no}}" placeholder="Enter Chassis No" name="chassis_no" class="w-full rounded border-[1.5px] border-stroke bg-transparent py-3 px-5 font-medium outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:focus:border-primary">
                        </div>
                    </div>
                    <div class="mb-4.5 flex flex-col gap-6 xl:flex-row">
                        <div class="w-full xl:w-1/2">
                          <label class="mb-2.5 block text-black dark:text-white">
                            Manufacturer Name <span class="text-meta-1">*</span>
                          </label>
                          <input type="text" value="{{$data['row']->manufacturer}}" placeholder="Enter Manufacturer Name" name="manufacturer" class="w-full rounded border-[1.5px] border-stroke bg-transparent py-3 px-5 font-medium outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:focus:border-primary">
                        </div>

                        <div class="w-full xl:w-1/2">
                          <label class="mb-2.5 block text-black dark:text-white">
                            capacity <span class="text-meta-1">*</span>
                          </label>
                          <input type="number" value="{{$data['row']->capacity}}" placeholder="Enter capacity" name="capacity" class="w-full rounded border-[1.5px] border-stroke bg-transparent py-3 px-5 font-medium outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:focus:border-primary">
                        </div>
                    </div>
                    <div class="mb-4.5 flex flex-col gap-6 xl:flex-row">
                        <div class="w-full xl:w-1/2">
                          <label class="mb-2.5 block text-black dark:text-white">
                            Engine Manufacturer <span class="text-meta-1">*</span>
                          </label>
                          <input type="text" value="{{$data['row']->engine_manufacturer}}" placeholder="Enter Engine Manufacturer" name="engine_manufacturer" class="w-full rounded border-[1.5px] border-stroke bg-transparent py-3 px-5 font-medium outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:focus:border-primary">
                        </div>

                        <div class="w-full xl:w-1/2">
                          <label class="mb-2.5 block text-black dark:text-white">
                            Engine Model <span class="text-meta-1">*</span>
                          </label>
                          <input type="text" value="{{$data['row']->engine_model}}" placeholder="Enter Engine Model" name="engine_model" class="w-full rounded border-[1.5px] border-stroke bg-transparent py-3 px-5 font-medium outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:focus:border-primary">
                        </div>
                    </div>
                    <div class="mb-4.5 flex flex-col gap-6 xl:flex-row">
                        <div class="w-full xl:w-1/3 [&>*]:!w-full">
                          <label class="mb-2.5 block text-black dark:text-white">
                            Start Date <span class="text-meta-1">*</span>
                          </label>
                          <input type="text" placeholder="DD-MM-YYYY" value="{{$data['row']->start_date}}" name="start_date" class="w-full datepicker rounded border-[1.5px] border-stroke bg-transparent py-3 px-5 font-medium outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:focus:border-primary">
                        </div>

                        <div class="w-full xl:w-1/3 [&>*]:!w-full">
                          <label class="mb-2.5 block text-black dark:text-white">
                            Next Maintenance Date <span class="text-meta-1">*</span>
                          </label>
                          <input type="text" placeholder="DD-MM-YYYY" value="{{$data['row']->next_maintenance_date}}" name="next_maintenance_date" class="w-full datepicker rounded border-[1.5px] border-stroke bg-transparent py-3 px-5 font-medium outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:focus:border-primary">
                        </div>

                        <div class="w-full xl:w-1/3">
                          <label class="mb-2.5 block text-black dark:text-white">
                            Status <span class="text-meta-1">*</span>
                          </label>
                          <select name="status" class="relative z-20 w-full appearance-none rounded border border-stroke bg-transparent py-3 px-5 outline-none transition focus:border-primary active:border-primary dark:border-form-strokedark dark:bg-form-input dark:focus:border-primary">
                            <option value="active" {{ $data['row']->status=='active' ? 'selected' : '' }}>Active</option>
                            <option value="inactive" {{ $data['row']->status=='inactive' ? 'selected' : '' }}>Inactive</option>
                          </select>
                        </div>
                    </div>


                    <button type="submit"
                        class="flex w-full justify-center rounded bg-primary p-3 font-medium text-white">
                        Update Vehicle
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
                chassis_no: 'required',
                manufacturer: 'required',
                capacity: 'required',
                engine_manufacturer: 'required',
                engine_model: 'required',
                start_date: 'required',
                next_maintenance_date: 'required',
                status: 'required',
            },
            messages: {
                name: 'Please enter a vehicle name',
                chassis_no: 'Please enter Chassis No',
                manufacturer: 'Please enter Manufacturer Name',
                capacity: 'Please enter Capacity',
                engine_manufacturer: 'Please enter Engine Manufacturer',
                engine_model: 'Please enter Engine Model',
                start_date: 'Please Select Start Date',
                next_maintenance_date: 'Please Select Next Maintenance Date',
                status: 'Please select a status',

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
