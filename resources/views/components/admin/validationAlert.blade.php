@if($errors->any())
    <div
        class="flex w-full border-l-6 border-warning bg-warning bg-opacity-[15%] px-7 py-8 shadow-md dark:bg-[#1B1B24] dark:bg-opacity-30 md:p-9">
        <div class="mr-5 flex h-9 w-9 items-center justify-center rounded-lg bg-warning bg-opacity-30">
            <x-icon.attention></x-icon.attention>
        </div>
        <div class="w-full">
            <h5 class="mb-3 text-lg font-bold text-[#9D5425]">
                Attention needed
            </h5>
            <ul class="list-disc">
                @foreach($errors->all() as $error)
                    <li class="text-[#D0915C]">{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    </div>
@endif
