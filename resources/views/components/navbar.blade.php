<header class="flex flex-wrap sm:justify-start sm:flex-nowrap z-50 w-full bg-white text-sm py-4 shadow-lg">
  <nav class="max-w-[85rem] w-full mx-auto px-5 md:px-10 lg:px-20 2xl:px-0 sm:flex sm:items-center sm:justify-between" aria-label="Global">
    <div class="flex items-center justify-between">
      <a class="flex-none" href="#">
        <img class="w-20 h-auto" src="{{ asset('/images/header-logo.png')}}" alt="Logo">
      </a>
      <div class="sm:hidden">
        <button type="button" class="hs-collapse-toggle p-2 inline-flex justify-center items-center gap-2 rounded-md border font-medium bg-white text-gray-700 shadow-sm align-middle hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-white focus:ring-blue-600 transition-all text-sm " data-hs-collapse="#navbar-image-2" aria-controls="navbar-image-2" aria-label="Toggle navigation">
          <svg class="hs-collapse-open:hidden w-4 h-4" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/>
          </svg>
          <svg class="hs-collapse-open:block hidden w-4 h-4" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
            <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
          </svg>
        </button>
      </div>
    </div>
    <div id="navbar-image-2" class="hs-collapse hidden overflow-hidden transition-all duration-300 basis-full grow sm:block">
      <div class="flex flex-col gap-5 mt-5 sm:flex-row sm:items-center sm:justify-end sm:mt-0 sm:pl-5">
        <a class="text-color-blue-3 font-bold text-lg hover:underline " href="#">Home</a>
        <a class="text-color-blue-3 font-bold text-lg hover:underline " href="/about">About</a>
      </div>
    </div>
  </nav>
</header>