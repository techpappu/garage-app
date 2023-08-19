<li>
    <a
      class="group relative flex items-center gap-2.5 rounded-sm py-2 px-4 font-medium text-bodydark1 duration-300 ease-in-out hover:bg-graydark dark:hover:bg-meta-4"
      href="#"
      @click.prevent="selected = (selected === 'Users' ? '':'Users')"
      :class="{ 'bg-graydark dark:bg-meta-4': (selected === 'Users') || (page === 'All Users' || page === 'Create New User') }"
    >
      <x-icon.person></x-icon.form>

      Users

      <x-icon.togglearrow item="Users"></x-icon.togglearrow>
    </a>

    <!-- Dropdown Menu Start -->
    <div
      class="overflow-hidden"
      :class="(selected === 'Users') ? 'block' :'hidden'"
    >
      <ul class="mt-4 mb-5.5 flex flex-col gap-2.5 pl-6">
        <li>
          <a
            class="group relative flex items-center gap-2.5 rounded-md px-4 font-medium text-bodydark2 duration-300 ease-in-out hover:text-white"
            href="{{route('admin.user')}}"
            :class="page === 'All Users' && '!text-white'"
            >All Users</a
          >
        </li>
        <li>
          <a
            class="group relative flex items-center gap-2.5 rounded-md px-4 font-medium text-bodydark2 duration-300 ease-in-out hover:text-white"
            href="{{route('admin.user.create')}}"
            :class="page === 'Create New User' && '!text-white'"
            >Create New User</a
          >
        </li>
      </ul>
    </div>
    <!-- Dropdown Menu End -->
  </li>
  <!-- Menu Item Users -->