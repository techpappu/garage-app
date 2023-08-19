<li>
    <a
      class="group relative flex items-center gap-2.5 rounded-sm py-2 px-4 font-medium text-bodydark1 duration-300 ease-in-out hover:bg-graydark dark:hover:bg-meta-4"
      href="#"
      @click.prevent="selected = (selected === 'Vehicles' ? '':'Vehicles')"
      :class="{ 'bg-graydark dark:bg-meta-4': (selected === 'Vehicles') || (page === 'All Vehicles' || page === 'Create New Vehicle') }"
    >
      <x-icon.car></x-icon.car>

      Vehicles

      <x-icon.togglearrow item="Vehicles"></x-icon.togglearrow>
    </a>

    <!-- Dropdown Menu Start -->
    <div
      class="overflow-hidden"
      :class="(selected === 'Vehicles') ? 'block' :'hidden'"
    >
      <ul class="mt-4 mb-5.5 flex flex-col gap-2.5 pl-6">
        <li>
          <a
            class="group relative flex items-center gap-2.5 rounded-md px-4 font-medium text-bodydark2 duration-300 ease-in-out hover:text-white"
            href="{{route('admin.vehicle')}}"
            :class="page === 'All Vehicles' && '!text-white'"
            >All Vehicles</a
          >
        </li>
        <li>
          <a
            class="group relative flex items-center gap-2.5 rounded-md px-4 font-medium text-bodydark2 duration-300 ease-in-out hover:text-white"
            href="{{route('admin.vehicle.create')}}"
            :class="page === 'Create New Vehicle' && '!text-white'"
            >Create New Vehicle</a
          >
        </li>
      </ul>
    </div>
    <!-- Dropdown Menu End -->
  </li>
  <!-- Menu Item Users -->