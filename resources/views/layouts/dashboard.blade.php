<!doctype html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>M-Connect</title>
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <script src="{{ asset('js/app.js')}}"></script>
  <script src='https://cdn.jsdelivr.net/npm/fullcalendar@6.1.8/index.global.min.js'></script>
</head>

<body class="">
  <header
    class="sticky top-0 inset-x-0 flex flex-wrap sm:justify-start sm:flex-nowrap z-[48] w-full bg-color-blue-3 border-b text-sm py-2.5 sm:py-4 lg:pl-64">
    <nav class="flex basis-full items-center w-full mx-auto px-4 sm:px-6 md:px-8" aria-label="Global">
      <div class="mr-5 lg:mr-0 lg:hidden">
        <a class="flex-none text-xl font-semibold" href="#" aria-label="Brand">Brand</a>
      </div>

      <div class="w-full flex items-center justify-end ml-auto sm:justify-between sm:gap-x-3 sm:order-3">
        <div class="sm:hidden">
          <button type="button"
            class="inline-flex flex-shrink-0 justify-center items-center gap-2 h-[2.375rem] w-[2.375rem] rounded-full font-medium bg-white text-gray-700 align-middle hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-gray-400 focus:ring-offset-2 focus:ring-offset-white transition-all text-xs">
            <svg class="w-3.5 h-3.5" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
              viewBox="0 0 16 16">
              <path
                d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
            </svg>
          </button>
        </div>

        <div class="hidden sm:block">
          <h1 class="text-white font-semibold text-2xl">Welcome</h1>
        </div>

        <div class="flex flex-row items-center justify-end gap-2">
          <div class="hs-dropdown relative inline-flex [--placement:bottom-right]">
            <button id="hs-dropdown-with-header" type="button"
              class="hs-dropdown-toggle inline-flex flex-shrink-0 justify-center items-center gap-2 h-[2.375rem] w-[2.375rem] rounded-full font-medium bg-white text-gray-700 align-middle hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-gray-400 focus:ring-offset-2 focus:ring-offset-white transition-all text-xs">
              <img class="inline-block h-[2.375rem] w-[2.375rem] rounded-full ring-2 ring-white "
                src="https://images.unsplash.com/photo-1568602471122-7832951cc4c5?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=facearea&facepad=2&w=320&h=320&q=80"
                alt="Image Description">
            </button>

            <div
              class="hs-dropdown-menu transition-[opacity,margin] duration hs-dropdown-open:opacity-100 opacity-0 hidden min-w-[15rem] bg-white shadow-md rounded-lg p-2"
              aria-labelledby="hs-dropdown-with-header">
              <div class="py-3 px-5 -m-2 bg-gray-100 rounded-t-lg">
                <p class="text-sm text-gray-500">Signed in as</p>
                <p class="text-sm font-medium text-gray-800">{{ Auth::user()->email }}</p>
              </div>
              <div class="mt-2 py-2 first:pt-0 last:pb-0">
                <form action="/logout" method="POST">
                  @csrf
                  <button type="submit"
                    class="w-full flex items-center gap-x-3.5 py-2 px-3 rounded-md text-sm text-gray-800 hover:bg-gray-100 focus:ring-2 focus:ring-blue-500">Logout</button>
                </form>


              </div>
            </div>
          </div>
        </div>
      </div>
    </nav>
  </header>
  <div class="sticky top-0 inset-x-0 z-20 bg-white border-y px-4 sm:px-6 md:px-8 lg:hidden">
    <div class="flex items-center py-4">
      <!-- Navigation Toggle -->
      <button type="button" class="text-gray-500 hover:text-gray-600" data-hs-overlay="#application-sidebar"
        aria-controls="application-sidebar" aria-label="Toggle navigation">
        <span class="sr-only">Toggle Navigation</span>
        <svg class="w-5 h-5" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
          <path fill-rule="evenodd"
            d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z" />
        </svg>
      </button>
      <!-- End Navigation Toggle -->

      <!-- Breadcrumb -->
      <ol class="ml-3 flex items-center whitespace-nowrap min-w-0" aria-label="Breadcrumb">
        <li class="flex items-center text-sm text-gray-800">
          Application Layout
          <svg class="flex-shrink-0 mx-3 overflow-visible h-2.5 w-2.5 text-gray-400" width="16" height="16"
            viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M5 1L10.6869 7.16086C10.8637 7.35239 10.8637 7.64761 10.6869 7.83914L5 14" stroke="currentColor"
              stroke-width="2" stroke-linecap="round" />
          </svg>
        </li>
        <li class="text-sm font-semibold text-gray-800 truncate" aria-current="page">
          Dashboard
        </li>
      </ol>
      <!-- End Breadcrumb -->
    </div>
  </div>
  <!-- End Sidebar Toggle -->

  <!-- Sidebar -->
  <div id="application-sidebar"
    class="hs-overlay hs-overlay-open:translate-x-0 -translate-x-full transition-all duration-300 transform hidden fixed top-0 left-0 bottom-0 z-[60] w-64 bg-white border-r border-gray-200 pt-7 pb-10 overflow-y-auto scrollbar-y lg:block lg:translate-x-0 lg:right-auto lg:bottom-0 shadow-lg">
    <div class="px-6 pt-6 pb-3">
      <img class="w-full h-auto" src="{{ asset('/images/header-logo.png')}}" alt="">
    </div>

    <nav class="hs-accordion-group p-6 w-full flex flex-col flex-wrap" data-hs-accordion-always-open>
      <ul class="space-y-1.5">
        {{-- active class if is route --}}
        @php
          $navbarLinks = [
            ['title' => 'Dashboard', 'icons' => 'radix-icons:dashboard', 'link' => route('dashboard')],
            ['title' => 'Jadwal Meeting', 'icons' => 'radix-icons:calendar', 'link' => route('jadwal.meeting')],
          ];
        @endphp
        
        @foreach ($navbarLinks as $item)
          <li>
            <a class="flex items-center gap-x-3.5 py-2 px-2.5 text-base rounded-md hover:bg-color-blue-4 hover:text-white {{ Request::url() == $item['link'] ? 'bg-color-blue-4 text-white' : '' }}"
              href="{{ $item['link'] }}">
              <iconify-icon icon="{{ $item['icons'] }}" class="text-lg"></iconify-icon>
              {{ $item['title']}}
            </a>
          </li>
        @endforeach

        </li>
      </ul>
    </nav>
  </div>
  <!-- End Sidebar -->

  <!-- Content -->
  <div class="w-full pt-10 px-4 sm:px-6 md:px-8 lg:pl-72">
    @yield('content')
  </div>
  @yield('script')
  
  <script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>
</body>

</html>