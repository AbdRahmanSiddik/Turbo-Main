<div
  class="side-menu__content h-full box border-transparent rounded-none xl:rounded-xl bg-gradient-to-b from-theme-1 to-theme-2 z-20 relative w-[275px] duration-300 transition-[width] group-[.side-menu--collapsed]:xl:w-[91px] group-[.side-menu--collapsed.side-menu--on-hover]:xl:shadow-[6px_0_12px_-4px_#0000000f] group-[.side-menu--collapsed.side-menu--on-hover]:xl:w-[275px] overflow-hidden flex flex-col after:content-[''] after:absolute after:inset-0 after:-mr-4 after:bg-texture-white after:bg-contain after:bg-fixed after:bg-[center_-20rem] after:bg-no-repeat">
  <div
    class="flex-none hidden xl:flex items-center z-10 px-5 h-[65px] xl:w-[275px] overflow-hidden relative duration-300 group-[.side-menu--collapsed]:xl:w-[91px] group-[.side-menu--collapsed.side-menu--on-hover]:xl:w-[275px] before:content-[''] before:absolute before:right-0 before:border-r before:border-dashed before:border-white/[0.15] before:h-4/6 before:group-[.side-menu--collapsed.side-menu--on-hover]:xl:hidden">
    <a class="flex items-center transition-[margin] duration-300 group-[.side-menu--collapsed.side-menu--on-hover]:xl:ml-0 group-[.side-menu--collapsed]:xl:ml-4"
      href="#">
      <div class="">
        <img src="{{ asset('landing/assets/img/logo/fav2.png') }}" alt="Turbo">
      </div>
      <div
        class="ml-3.5 font-medium text-white transition-opacity group-[.side-menu--collapsed.side-menu--on-hover]:xl:opacity-100 group-[.side-menu--collapsed]:xl:opacity-0">
        Turbo-Main
      </div>
    </a>
    <a class="toggle-compact-menu ml-auto hidden h-[20px] w-[20px] items-center justify-center rounded-full border border-white/40 text-white transition-[opacity,transform] hover:bg-white/5 group-[.side-menu--collapsed]:xl:rotate-180 group-[.side-menu--collapsed.side-menu--on-hover]:xl:opacity-100 group-[.side-menu--collapsed]:xl:opacity-0 3xl:flex"
      href="#">
      <i data-tw-merge="" data-lucide="arrow-left" class="h-3.5 w-3.5 stroke-[1.3]"></i>
    </a>
  </div>
  <div
    class="scrollable-ref w-full h-full z-20 px-5 overflow-y-auto overflow-x-hidden pb-3 [-webkit-mask-image:-webkit-linear-gradient(top,rgba(0,0,0,0),black_30px)] [&:-webkit-scrollbar]:w-0 [&:-webkit-scrollbar]:bg-transparent [&_.simplebar-content]:p-0 [&_.simplebar-track.simplebar-vertical]:w-[10px] [&_.simplebar-track.simplebar-vertical]:mr-0.5 [&_.simplebar-track.simplebar-vertical_.simplebar-scrollbar]:before:bg-slate-400/30">
    <ul class="scrollable">
      <!-- BEGIN: First Child -->

      @can('view dashboard')
        <li class="side-menu__divider">
          DASHBOARDS
        </li>
        <li>
          <a href="/" class="side-menu__link">
            <i data-tw-merge="" data-lucide="home" class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
            <div class="side-menu__link__title">Dashboard</div>
          </a>
        </li>
      @endcan

      <li class="side-menu__divider">
        DATA MASTER
      </li>
      @can('view kegiatan')
        <li>
          <a href="{{ route('kegiatan.index') }}" class="side-menu__link">
            <i data-tw-merge="" data-lucide="calendar" class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
            <div class="side-menu__link__title">Kegiatan</div>
            {{-- <div class="side-menu__link__badge">
              {{ total_kegiatan() }}
            </div> --}}
          </a>
        </li>
      @endcan
      @can('view team')
        <li>
          <a href="{{ route('team.index') }}" class="side-menu__link">
            <i data-tw-merge="" data-lucide="calendar" class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
            <div class="side-menu__link__title">Team</div>
            {{-- <div class="side-menu__link__badge">
            </div> --}}
          </a>
        </li>
      @endcan

      @canany(['view roles', 'view permissions'])
        <li class="side-menu__divider">
          USERS MANAGEMENT
        </li>
      @endcanany

      @can('view roles')
        <li>
          <a href="/roles" class="side-menu__link">
            <i data-tw-merge="" data-lucide="users" class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
            <div class="side-menu__link__title">Roles</div>
          </a>
        </li>
      @endcan

      @can('view permissions')
        <li>
          <a href="/permissions" class="side-menu__link">
            <i data-tw-merge="" data-lucide="shield" class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
            <div class="side-menu__link__title">Permissions</div>
          </a>
        </li>
      @endcan

      <li>
        <a href="javascript:void(0);" class="side-menu__link">
          <i data-tw-merge="" data-lucide="user-plus" class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
          <div class="side-menu__link__title">Add User</div>
        </a>
      </li>

      <li class="side-menu__divider">
        AUTHENTICATIONS
      </li>
      <li>
        <a href="/logout" class="side-menu__link">
          <i data-tw-merge="" data-lucide="log-out" class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
          <div class="side-menu__link__title">Logout</div>
        </a>
      </li>
    </ul>


    </ul>
  </div>

</div>
