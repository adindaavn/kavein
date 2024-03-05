<header>
  <nav class="bg-transparent">
    <div class="mx-auto max-w-7xl px-2 md:px-6 lg:px-8">
      <div class="relative flex h-16 items-center justify-around">
        <div class="absolute inset-y-0 left-0 flex items-center md:hidden">
          <button type="button" class="relative inline-flex items-center justify-center rounded-md p-2 hover:bg-gray-700 hover:text-white focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white" aria-controls="mobile-menu" aria-expanded="false">
            <span class="absolute -inset-0.5"></span>
            <span class="sr-only">Open main menu</span>

            <svg class="block h-6 w-6" id="menu-open" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
            </svg>

            <svg class="hidden h-6 w-6" id="menu-closed" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
            </svg>
          </button>
        </div>

        <div class="flex flex-1 md:flex-none items-center justify-center md:justify-start">
          <div class="flex flex-shrink-0 items-center">
            <a href="{{ route('home') }}" class="font-bold text-secondary">
              kave<span class="text-primary">in</span>
            </a>
            <!-- <img
                  class="h-8 w-auto"
                  src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=500"
                  alt="Your Company" /> -->
          </div>
        </div>

        <div class="flex md:flex-1 items-center justify-center md:items-stretch text-sm font-medium">
          <div class="hidden md:ml-6 md:block">
            <div class="flex space-x-4 bg-slate-200 rounded-full">
              <a href="#" class="active bg-secondary text-white rounded-full px-3 py-1" aria-current="page">dashboard</a>
              <a class="hover:bg-slate-300 rounded-full px-3 py-1 transition" href="#products">products</a>
              <a class="hover:bg-slate-300 rounded-full px-3 py-1 transition" href="#about">about</a>
              <a class="hover:bg-slate-300 rounded-full px-3 py-1 transition" href="#contact">contact</a>
            </div>
          </div>
        </div>

        <div class="absolute inset-y-0 right-0 flex items-center pr-2 md:static md:inset-auto md:pr-0 font-medium">

          @if (Auth::check())
          <i class="fa-solid fa-bag-shopping fa-lg"></i>
          <div class="relative ml-3">
            <div>
              <button type="button" class="relative flex rounded-full bg-gray-800 text-sm focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800 border-primary border" id="user-menu-button" aria-expanded="false" aria-haspopup="true">
                <span class="absolute -inset-1.5"></span>
                <span class="sr-only">Open user menu</span>
                <img class="h-8 w-8 rounded-full" src="{{ asset('assets') }}/img/minjeonga.jpg" alt="">
              </button>
            </div>

            <div class="absolute right-0 z-10 mt-2 w-32 origin-top-right rounded-md bg-white py-1 shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none hidden" role="menu" id="user-menu" aria-orientation="vertical" aria-labelledby="user-menu-button" tabindex="-1">
              <a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1" id="user-menu-item-0">Your Profile</a>
              <a href="{{ route('logout') }}" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1" id="user-menu-item-1">Sign out</a>
            </div>
          </div>
          @else
          <div class="rounded-full border bg-slate-200">
            <a href="{{ route('login') }}" class="py-1 pl-4 pr-1 hidden md:inline text-sm">Log In</a>
            <a href="{{ route('register') }}" class="py-1 bg-secondary rounded-full px-3 text-sm text-white">Sign Up</a>
          </div>
          @endif

        </div>
      </div>
    </div>

    <div class="hidden" id="mobile-menu">
      <div class="space-x-6 px-2 pb-2 flex justify-center items-center text-md text-base font-medium">
        <a href="#" aria-current="page">dashboard</a>
        <a href="#products">products</a>
        <a href="#about">about</a>
        <a href="#contact">contact</a>
      </div>
    </div>
  </nav>
</header>

@yield('content')
@include('template.footer')