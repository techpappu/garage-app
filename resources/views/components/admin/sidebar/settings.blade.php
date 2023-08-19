<li>
    <a
      class="group relative flex items-center gap-2.5 rounded-sm py-2 px-4 font-medium text-bodydark1 duration-300 ease-in-out hover:bg-graydark dark:hover:bg-meta-4"
      href="settings.html"
      @click="selected = (selected === 'Settings' ? '':'Settings')"
      :class="{ 'bg-graydark dark:bg-meta-4': (selected === 'Settings') && (page === 'settings') }"
      :class="page === 'settings' && 'bg-graydark'"
    >
      <x-icon.settings></x-icon.settings>
      Settings
    </a>
</li>
  <!-- Menu Item Settings -->