<x-admin.app>
    @section('content')
    <div class="mb-6 flex flex-col gap-3 sm:flex-row sm:items-center sm:justify-between">
        <h2 class="text-title-md2 font-bold text-black dark:text-white">
            Jobs
        </h2>

        <nav>
            <ol class="flex items-center gap-2">
                <li>
                    Jobs /
                </li>
                <li class="font-medium text-primary">Create New Job</li>
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
                    Create New Job
                </h3>
            </div>
            <form action="{{route('admin.job.post.create')}}" method="POST" id="form">
                @csrf
                <div class="p-6.5">
                    <div class="flex flex-col gap-6 xl:flex-row">
                        <div class="mb-4.5  lg:w-1/2">
                            <label class="mb-2.5 block text-black dark:text-white">
                                Select A Vendor <span class="text-meta-1">*</span>
                            </label>
                            <div class="relative z-20 bg-transparent dark:bg-form-input">
                                <select name="vendor_id"
                                    class="relative z-20 w-full appearance-none rounded border border-stroke bg-transparent py-3 px-5 outline-none transition focus:border-primary active:border-primary dark:border-form-strokedark dark:bg-form-input dark:focus:border-primary">
                                    <option selected disabled hidden>Select A Vendor</option>
                                    @foreach ($data['vendors'] as  $vendor)
                                        <option value="{{$vendor->id}}">{{$vendor->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="mb-4.5  lg:w-1/2">
                            <label class="mb-2.5 block text-black dark:text-white">
                                Select A Vehicle <span class="text-meta-1">*</span>
                            </label>
                            <div class="relative z-20 bg-transparent dark:bg-form-input">
                                <select name="vehicle_id"
                                    class="relative z-20 w-full appearance-none rounded border border-stroke bg-transparent py-3 px-5 outline-none transition focus:border-primary active:border-primary dark:border-form-strokedark dark:bg-form-input dark:focus:border-primary">
                                    <option selected disabled hidden>Select A Vehicle</option>
                                    @foreach ($data['vehicles'] as  $vehicle)
                                        <option value="{{$vehicle->id}}">{{$vehicle->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    
                    <div class="mb-4.5 flex flex-col gap-4 xl:flex-row">

                        <div class="w-full lg:w-2/4">
                            <label class="mb-2.5 block text-black dark:text-white">
                                Title <span class="text-meta-1">*</span>
                            </label>
                            <input type="text" placeholder="Enter Job Title" name="title"
                                class="w-full rounded border-[1.5px] border-stroke bg-transparent py-3 px-5 font-medium outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:focus:border-primary">
                        </div>
                        <div class="w-full lg:w-1/4">
                            <label class="mb-2.5 block text-black dark:text-white">
                                Work Order No <span class="text-meta-1">*</span>
                            </label>
                            <input type="text" placeholder="Enter Work Order No" name="work_order_no"
                                class="w-full rounded border-[1.5px] border-stroke bg-transparent py-3 px-5 font-medium outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:focus:border-primary">
                        </div>
                        <div class="w-full lg:w-1/4 [&>*]:!w-full">
                            <label class="mb-2.5 block text-black dark:text-white">
                                Work Order Date <span class="text-meta-1">*</span>
                            </label>
                            <input type="date" placeholder="DD-MM-YYYY" name="work_order_date" class="w-full datepicker rounded border-[1.5px] border-stroke bg-transparent py-3 px-5 font-medium outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:focus:border-primary">
                        </div>
                    </div>

                    <div class="mb-4.5">
                        <label class="mb-2.5 block text-black dark:text-white">
                            Description
                        </label>
                        <textarea rows="6" name="description" placeholder="Enter Job Description Here..." class="w-full rounded-lg border-[1.5px] border-primary bg-transparent py-3 px-5 font-medium outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:bg-form-input" spellcheck="false"></textarea>
                    </div>
                    <div class="mb-4.5">
                        <label class="mb-2.5 block text-black dark:text-white">
                            Comments
                        </label>
                        <input type="text" placeholder="Enter Job Title" name="comments"
                                class="w-full rounded border-[1.5px] border-stroke bg-transparent py-3 px-5 font-medium outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:focus:border-primary">
                    </div>
                    <div class="mb-4.5">
                        <label class="mb-2.5 block text-black dark:text-white">
                            Status <span class="text-meta-1">*</span>
                        </label>
                        <select name="status" class="relative z-20 w-full appearance-none rounded border border-stroke bg-transparent py-3 px-5 outline-none transition focus:border-primary active:border-primary dark:border-form-strokedark dark:bg-form-input dark:focus:border-primary">
                            <option value="active">Active</option>
                            <option value="inactive">Inactive</option>
                          </select>
                    </div>


                    <button type="submit"
                        class="flex w-full justify-center rounded bg-primary p-3 font-medium text-white">
                        Create Job
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
                title: 'required',
                vendor_id: 'required',
                vehicle_id: 'required',
                work_order_no: 'required',
                work_order_date: 'required',
                status: 'required',
            },
            messages: {
                title: 'Please enter a job title',
                vendor_id: 'Please select a Vendor',
                vehicle_id: 'Please select a Vehicle',
                work_order_no: 'Please create unique a Work Order No',
                work_order_date: 'Please Enter Work Order Date',
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
