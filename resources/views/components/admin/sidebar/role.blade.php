<li>
    <a
      class="group relative flex items-center gap-2.5 rounded-sm py-2 px-4 font-medium text-bodydark1 duration-300 ease-in-out hover:bg-graydark dark:hover:bg-meta-4"
      href="#"
      @click.prevent="selected = (selected === 'Roles' ? '':'Roles')"
      :class="{ 'bg-graydark dark:bg-meta-4': (selected === 'Roles') || (page === 'All Roles' || page === 'Create New Role') }"
    >
      <x-icon.user-gear></x-icon.user-gear>

      Roles

      <x-icon.togglearrow item="Roles"></x-icon.togglearrow>
    </a>

    <!-- Dropdown Menu Start -->
    <div
      class="overflow-hidden"
      :class="(selected === 'Roles') ? 'block' :'hidden'"
    >
      <ul class="mt-4 mb-5.5 flex flex-col gap-2.5 pl-6">
        <li>
          <a
            class="group relative flex items-center gap-2.5 rounded-md px-4 font-medium text-bodydark2 duration-300 ease-in-out hover:text-white"
            href="{{route('admin.role')}}"
            :class="page === 'All Roles' && '!text-white'"
            >All Roles</a
          >
        </li>
        <li>
          <a
            class="group relative flex items-center gap-2.5 rounded-md px-4 font-medium text-bodydark2 duration-300 ease-in-out hover:text-white"
            href="{{route('admin.role.create')}}"
            :class="page === 'Create New Role' && '!text-white'">
            Create New Role
          </a>
        </li>
      </ul>
    </div>
    <!-- Dropdown Menu End -->
  </li>