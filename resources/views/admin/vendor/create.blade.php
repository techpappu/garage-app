<x-admin.app>
    @section('content')
    <div class="mb-6 flex flex-col gap-3 sm:flex-row sm:items-center sm:justify-between">
        <h2 class="text-title-md2 font-bold text-black dark:text-white">
            Vendor
        </h2>

        <nav> 
            <ol class="flex items-center gap-2">
                <li>
                    Vendor /
                </li>
                <li class="font-medium text-primary">Create New Vendor</li>
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
                    Create New Vendor
                </h3>
            </div>
            <form action="{{route('admin.vendor.create')}}" method="POST" id="form">
                @csrf
                <div class="p-6.5">
                    <div class="mb-4.5 flex flex-col gap-6 xl:flex-row">
                        <div class="w-full xl:w-1/2">
                          <label class="mb-2.5 block text-black dark:text-white">
                            name <span class="text-meta-1">*</span>
                          </label>
                          <input type="text" placeholder="Enter vehicle name" name="name" class="w-full rounded border-[1.5px] border-stroke bg-transparent py-3 px-5 font-medium outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:focus:border-primary">
                        </div>

                        
                        <div class="w-full xl:w-1/2">
                          <label class="mb-2.5 block text-black dark:text-white">
                            Phone <span class="text-meta-1">*</span>
                          </label>
                          <input type="number" placeholder="Enter Vendor Phone" name="phone" class="w-full rounded border-[1.5px] border-stroke bg-transparent py-3 px-5 font-medium outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:focus:border-primary">
                        </div>
                    </div>
                    <div class="w-full mb-4.5">
                      <label class="mb-2.5 block text-black dark:text-white">
                        Address <span class="text-meta-1">*</span>
                      </label>
                      <input type="text" placeholder="Enter Vednor Address" name="address" class="w-full rounded border-[1.5px] border-stroke bg-transparent py-3 px-5 font-medium outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:focus:border-primary">
                    </div>
                    <div class="mb-4.5 flex flex-col gap-6 xl:flex-row">
                        <div class="w-full xl:w-1/2">
                          <label class="mb-2.5 block text-black dark:text-white">
                            Email
                          </label>
                          <input type="email" placeholder="Enter Vendor Email" name="email" class="w-full rounded border-[1.5px] border-stroke bg-transparent py-3 px-5 font-medium outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:focus:border-primary">
                        </div>

                        <div class="w-full xl:w-1/2">
                          <label class="mb-2.5 block text-black dark:text-white">
                            Contact Name <span class="text-meta-1">*</span>
                          </label>
                          <input type="text" placeholder="Enter Contact Name" name="contact_name" class="w-full rounded border-[1.5px] border-stroke bg-transparent py-3 px-5 font-medium outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:focus:border-primary">
                        </div>
                    </div>
                    <div class="mb-4.5 flex flex-col gap-6 xl:flex-row">
                        <div class="w-full xl:w-1/2">
                          <label class="mb-2.5 block text-black dark:text-white">
                            Contact Phone <span class="text-meta-1">*</span>
                          </label>
                          <input type="text" placeholder="Enter Contact Phone" name="contact_phone" class="w-full rounded border-[1.5px] border-stroke bg-transparent py-3 px-5 font-medium outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:focus:border-primary">
                        </div>

                        <div class="w-full xl:w-1/2">
                          <label class="mb-2.5 block text-black dark:text-white">
                            Contact Email
                          </label>
                          <input type="text" placeholder="Enter Contact Email" name="contact_email" class="w-full rounded border-[1.5px] border-stroke bg-transparent py-3 px-5 font-medium outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:focus:border-primary">
                        </div>
                    </div>


                    <button type="submit"
                        class="flex w-full justify-center rounded bg-primary p-3 font-medium text-white">
                        Create Vendor
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
                address: 'required',
                phone: 'required',
                contact_name: 'required',
                contact_phone: 'required',
            },
            messages: {
                name: 'Please enter a Vendor name',
                address: 'Please enter Vendor Address',
                phone: 'Please enter Phone',
                contact_name: 'Please enter Contact Name',
                contact_phone: 'Please enter Contact Name',

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
