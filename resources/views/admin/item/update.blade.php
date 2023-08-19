<x-admin.app>
    @section('content')
    <div class="mb-6 flex flex-col gap-3 sm:flex-row sm:items-center sm:justify-between">
        <h2 class="text-title-md2 font-bold text-black dark:text-white">
            Update Items <a href="{{route('admin.item',$data['row']->job->id)}}" class="text-sm text-primary">All item</a>
        </h2>

        <nav>
            <ol class="flex items-center gap-2">
                <li>
                    Items /
                </li>
                <li class="font-medium text-primary">Update Item</li>
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
                    Update Item
                </h3>
            </div>
            <form action="{{route('admin.item.post.update',$data['row']->id)}}" method="POST" id="form">
                @csrf
                <div class="p-6.5">
                    <div class="mb-4.5">
                        <label class="mb-2.5 block text-black dark:text-white">
                            Select A Job <span class="text-meta-1">*</span>
                        </label>
                        <div class="relative z-20 bg-transparent dark:bg-form-input">
                            <select name="job_id"
                                class="relative z-20 w-full appearance-none rounded border border-stroke bg-transparent py-3 px-5 outline-none transition focus:border-primary active:border-primary dark:border-form-strokedark dark:bg-form-input dark:focus:border-primary">
                                <option selected disabled hidden>Select A Vendor</option>
                                @foreach ($data['job'] as  $job)
                                    <option value="{{$job->id}}" {{$data['row']->job->id==$job->id ? 'selected' : ''}}>{{$job->title}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="mb-4.5">
                        <label class="mb-2.5 block text-black dark:text-white">
                            Description <span class="text-meta-1">*</span>
                        </label>
                        <textarea rows="4" name="description" placeholder="Enter Item Description Here..." class="w-full rounded-lg border-[1.5px] border-primary bg-transparent py-3 px-5 font-medium outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:bg-form-input" spellcheck="false">{{$data['row']->description}}</textarea>
                    </div>
                    <div class="mb-4.5">
                        <label class="mb-2.5 block text-black dark:text-white">
                            Status <span class="text-meta-1">*</span>
                        </label>
                        <select name="status" class="relative z-20 w-full appearance-none rounded border border-stroke bg-transparent py-3 px-5 outline-none transition focus:border-primary active:border-primary dark:border-form-strokedark dark:bg-form-input dark:focus:border-primary">
                            <option value="active" {{ $data['row']->status=='active' ? 'selected' : '' }}>Active</option>
                            <option value="inactive" {{ $data['row']->status=='inactive' ? 'selected' : '' }}>Inactive</option>
                          </select>
                    </div>


                    <button type="submit"
                        class="flex w-full justify-center rounded bg-primary p-3 font-medium text-white">
                        Update Item
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
                description: 'required',
                status: 'required',
            },
            messages: {
                description: 'Please enter a item description',
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
