<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Home</title>
  <link href="https://fonts.googleapis.com/css2?family=Figtree:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
  <link href="/css/app.css" rel="stylesheet">
  <style>
    .siswa-list::-webkit-scrollbar {
      width: 5px;
    }
    .siswa-list::-webkit-scrollbar-track {
      -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3);     
      background: #c9c9c9;
      border-radius: 10px;
    }
    .siswa-list::-webkit-scrollbar-thumb {
      background: rgb(88, 102, 224);
      border-radius: 10px;
    }
  </style>
</head>
<body class="dark:bg-slate-900">
  <nav class="bg-white/20 backdrop-blur-sm px-4 sm:px-10 py-2 dark:bg-slate-900/30 fixed w-full z-10 top-0 left-0 border-b border-gray-200/80   dark:border-slate-800">
    <div class="container flex flex-wrap items-center max-md:justify-between mx-auto">
      <a href="#" class="flex items-center">
        <span class="text-xl sm:ml-0 md:-ml-6 lg:ml-0 font-semibold whitespace-nowrap dark:text-white">rplone-webkelas</span>
      </a>
      <div class="flex md:order-2">
        <button data-tooltip-target="info" id="theme-toggle" type="button" class="mr-2 text-gray-500 dark:text-gray-400 md:hover:bg-gray-100 md:dark:hover:bg-gray-700 focus:outline-none md:focus:ring-4 md:focus:ring-gray-200 md:dark:focus:ring-gray-700 rounded-lg text-sm p-2">
          <svg id="theme-toggle-dark-icon" class="hidden w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"></path></svg>
          <svg id="theme-toggle-light-icon" class="hidden w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z" fill-rule="evenodd" clip-rule="evenodd"></path></svg>
        </button>
        <label for="" class="lg:mr-5 my-auto text-sm text-gray-900 dark:text-gray-300 hidden md:flex">Theme</label>
        <div id="info" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-xs font-medium transition-opacity duration-300 bg-white border border-gray-200 rounded-lg shadow-sm opacity-0 tooltip dark:border-none dark:text-slate-200 dark:bg-gray-700">
          Theme
          <div class="tooltip-arrow" data-popper-arrow></div>
        </div>
        <button id="nav-button" data-collapse-toggle="navbar-cta" type="button" class="inline-flex items-center p-2 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dar:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-cta" aria-expanded="false">
          <span class="sr-only">Open main menu</span>
          <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
        </button>
      </div>
      <div class="items-center mx-auto justify-between hidden w-full md:flex md:w-auto lg:pr-9" id="navbar-cta">
        <ul class="flex flex-col p-4 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium md:border-0 md:bg-transparent md:dark:bg-transparent dark:bg-slate-900 dark:border-slate-800">
          <li>
            <a href="/home" class="block py-2 pl-3 pr-4 {{ Request::is('home') ? 'text-white md:font-semibold md:text-blue-700 dark:text-white bg-blue-700' : 'text-gray-700 dark:text-gray-400 hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700' }} rounded md:bg-transparent md:p-0" aria-current="page">Home</a>
          </li>
          <li>
            <a href="/activities" class="block py-2 pl-3 pr-4 {{ Request::is('activities') ? 'text-white md:font-semibold md:text-blue-700 dark:text-white bg-blue-700' : 'text-gray-700 dark:text-gray-400 hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700' }} rounded md:bg-transparent md:p-0">Activities</a>
          </li>
          <li>
            <button id="dropdownNavbarLink" data-dropdown-toggle="dropdownNavbar" class="flex items-center justify-between w-full py-2 pl-3 pr-4 {{ Request::is('student') ? 'text-white md:font-semibold md:text-blue-700 dark:text-white md:bg-transparent bg-blue-700' : 'text-gray-700 hover:bg-gray-100 md:hover:bg-transparent dark:text-gray-400 dark:hover:text-white dark:focus:text-white dark:border-gray-700 dark:hover:bg-gray-700 md:dark:hover:bg-transparent md:hover:text-blue-700' }} rounded md:border-0 md:p-0 md:w-auto">Members <svg class="w-5 h-5 ml-1" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg></button>
            <div id="dropdownNavbar" class="z-10 hidden font-normal bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
              <ul class="py-2 text-sm text-gray-700 dark:text-gray-400" aria-labelledby="dropdownLargeButton">
                <li>
                  <a href="/teacher" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Teachers</a>
                </li>
                <li>
                  <a href="/student" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Students</a>
                </li>
                <li>
                  <a href="/quotes" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Quotes</a>
                </li>
              </ul>
            </div>
          </li>
          <li>
            <a href="/store" class="block py-2 pl-3 pr-4 {{ Request::is('store') ? 'text-white md:font-semibold md:text-blue-700 dark:text-white bg-blue-700' : 'text-gray-700 dark:text-gray-400 hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700' }} rounded md:bg-transparent md:p-0">Store</a>
          </li>
          <li>
            <a href="#" class="block py-2 pl-3 pr-4 {{ Request::is('rpl') ? 'text-white md:font-semibold md:text-blue-700 dark:text-white bg-blue-700' : 'text-gray-700 dark:text-gray-400 hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700' }} rounded md:bg-transparent md:p-0">About RPL's</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  @yield('content')

  <script src="/js/app.js"></script>
  <script src="/js/index.js"></script>
</body>
</html>