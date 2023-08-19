<li>
    <a
      class="group relative flex items-center gap-2.5 rounded-sm py-2 px-4 font-medium text-bodydark1 duration-300 ease-in-out hover:bg-graydark dark:hover:bg-meta-4"
      href="#"
      @click.prevent="selected = (selected === 'Permissions' ? '':'Permissions')"
      :class="{ 'bg-graydark dark:bg-meta-4': (selected === 'Permissions') || (page === 'All Permissions' || page === 'Create New Permission') }"
    >
      <x-icon.user-lock></x-icon.user-lock>

      Permissions

      <x-icon.togglearrow item="Permissions"></x-icon.togglearrow>
    </a>

    <!-- Dropdown Menu Start -->
    <div
      class="overflow-hidden"
      :class="(selected === 'Permissions') ? 'block' :'hidden'"
    >
      <ul class="mt-4 mb-5.5 flex flex-col gap-2.5 pl-6">
        <li>
          <a
            class="group relative flex items-center gap-2.5 rounded-md px-4 font-medium text-bodydark2 duration-300 ease-in-out hover:text-white"
            href="{{route('admin.permission')}}"
            :class="page === 'All Permissions' && '!text-white'"
            >All Permissions</a
          >
        </li>
        <li>
          <a
            class="group relative flex items-center gap-2.5 rounded-md px-4 font-medium text-bodydark2 duration-300 ease-in-out hover:text-white"
            href="{{route('admin.permission.create')}}"
            :class="page === 'Create New Permission' && '!text-white'">
            Create New Permission
          </a>
        </li>
      </ul>
    </div>
    <!-- Dropdown Menu End -->
  </li>