<li>
    <a
      class="group relative flex items-center gap-2.5 rounded-sm py-2 px-4 font-medium text-bodydark1 duration-300 ease-in-out hover:bg-graydark dark:hover:bg-meta-4"
      href="#"
      @click.prevent="selected = (selected === 'Jobs' ? '':'Jobs')"
      :class="{ 'bg-graydark dark:bg-meta-4': (selected === 'Jobs') || (page === 'All Jobs' || page === 'Create New Job') }"
    >
      <x-icon.task></x-icon.task>

      Jobs

      <x-icon.togglearrow item="Jobs"></x-icon.togglearrow>
    </a>

    <!-- Dropdown Menu Start -->
    <div
      class="overflow-hidden"
      :class="(selected === 'Jobs') ? 'block' :'hidden'"
    >
      <ul class="mt-4 mb-5.5 flex flex-col gap-2.5 pl-6">
        <li>
          <a
            class="group relative flex items-center gap-2.5 rounded-md px-4 font-medium text-bodydark2 duration-300 ease-in-out hover:text-white"
            href="{{route('admin.job')}}"
            :class="page === 'All Jobs' && '!text-white'"
            >All Jobs</a
          >
        </li>
        <li>
          <a
            class="group relative flex items-center gap-2.5 rounded-md px-4 font-medium text-bodydark2 duration-300 ease-in-out hover:text-white"
            href="{{route('admin.job.create')}}"
            :class="page === 'Create New Job' && '!text-white'"
            >Create New Job</a
          >
        </li>
        <li>
          <a
            class="group relative flex items-center gap-2.5 rounded-md px-4 font-medium text-bodydark2 duration-300 ease-in-out hover:text-white"
            href="{{route('admin.item.all')}}"
            :class="page === 'Create New Job' && '!text-white'"
            >All Items</a
          >
        </li>
      </ul>
    </div>
    <!-- Dropdown Menu End -->
  </li>
  <!-- Menu Item Users -->