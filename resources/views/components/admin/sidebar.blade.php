<aside
:class="sidebarToggle ? 'translate-x-0' : '-translate-x-full'"
class="absolute left-0 top-0 z-9999 flex h-screen w-72.5 flex-col overflow-y-hidden bg-black duration-300 ease-linear dark:bg-boxdark lg:static lg:translate-x-0"
@click.outside="sidebarToggle = false"
>
<!-- SIDEBAR HEADER -->
<div class="flex items-center justify-between bg-white dark:bg-gray-300">
  <a href="{{route('admin.dashboard')}}">
    <img src="{{asset('images/logo/dashboard.png')}}" alt="Logo" width="80%" />
  </a>

  <button class="block lg:hidden" @click.stop="sidebarToggle = !sidebarToggle">
    <x-icon.rightarrow></x-icon.rightarrow>
  </button>
</div>
<!-- SIDEBAR HEADER -->

<div
  class="no-scrollbar flex flex-col overflow-y-auto duration-300 ease-linear"
>
  <!-- Sidebar Menu -->
  <nav
    class="mt-5 py-4 px-4 lg:mt-9 lg:px-6"
    x-data="{selected: $persist('Dashboard')}"
  >
    <!-- Menu Group -->
    <div>
      <h3 class="mb-4 ml-4 text-sm font-medium text-bodydark2">MENU</h3>

      <ul class="mb-6 flex flex-col gap-1.5">
        <!-- Menu Item Dashboard -->
        <x-admin.sidebar.dashboard></x-admin.sidebar.dashboard>
        
        <!-- Menu Item vehicle -->
        <x-admin.sidebar.vehicle></x-admin.sidebar.vehicle>

        <!-- Menu Item Job -->
        <x-admin.sidebar.job></x-admin.sidebar.job>

        <!-- Menu Item vendor -->
        <x-admin.sidebar.vendor></x-admin.sidebar.vendor>


      </ul>

      <h3 class="mb-4 ml-4 text-sm font-medium text-bodydark2">Administrator</h3>
      <ul class="mb-6 flex flex-col gap-1.5">

        <!-- Menu Item Users -->
        <x-admin.sidebar.user></x-admin.sidebar.user>

        <!-- Menu Item Role -->
        <x-admin.sidebar.role></x-admin.sidebar.role>

        <!-- Menu Item Role -->
        <x-admin.sidebar.permission></x-admin.sidebar.permission>

        <!-- Menu Item Settings -->
        <x-admin.sidebar.settings></x-admin.sidebar.settings>

      </ul>
    </div>
  </nav>
  <!-- Sidebar Menu -->
</div>
</aside>