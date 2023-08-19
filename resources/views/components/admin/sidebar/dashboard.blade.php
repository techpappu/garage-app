<li>
    <a
      class="group relative flex items-center gap-2.5 rounded-sm py-2 px-4 font-medium text-bodydark1 duration-300 ease-in-out hover:bg-graydark dark:hover:bg-meta-4"
      href="{{route('admin.dashboard')}}"
      @click="selected = (selected === 'Dashboard' ? '':'Dashboard')"
      :class="{ 'bg-graydark dark:bg-meta-4': (selected === 'Dashboard')}"
    >
      <x-icon.dash></x-icon.dash>

      Dashboard
    </a>
</li>
<!-- Menu Item Dashboard -->