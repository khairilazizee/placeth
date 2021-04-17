<header class="text-gray-600 bg-gray-50 body-font sticky top-0">
    <div class="container mx-auto flex flex-wrap p-3 flex-col md:flex-row items-center">
      <a class="flex title-font font-medium items-center text-gray-900 mb-4 md:mb-0">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-10 h-10 text-white p-2 bg-indigo-500 rounded-full" viewBox="0 0 24 24">
          <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"></path>
        </svg>
        <span class="ml-3 text-xl">Dashboard <small class="text-xs">admin</small></span>
      </a>
      <nav class="md:ml-auto flex flex-wrap items-center text-base justify-center">
        <a class="mr-5 hover:text-gray-900"><i class="fas fa-bell"></i></a>
        <a class="mr-5 hover:text-gray-900"><i class="fas fa-envelope"></i></a>
        {{-- <a class="mr-5 hover:text-gray-900">Third Link</a> --}}
        {{-- <a class="mr-5 hover:text-gray-900">Fourth Link</a> --}}
      </nav>
      <button class="inline-flex items-center text-white bg-red-500 border-0 py-1 px-3 focus:outline-none hover:bg-gray-200 hover:text-black rounded text-base md:mt-0" onclick="location.href='{{ url('logout') }}'">Logout&nbsp;
        <i class="fas fa-power-off"></i>
      </button>
    </div>
  </header>