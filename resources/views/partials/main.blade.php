<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Home</title>
  <link href="https://fonts.googleapis.com/css2?family=Figtree:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
  <link href="/css/app.css" rel="stylesheet">
</head>
<body class="dark:bg-gray-900">
  <nav class="bg-white/90 backdrop-blur px-2 sm:px-4 py-2.5 dark:bg-gray-900/90 fixed w-full z-10 top-0 left-0 border-b border-gray-200 dark:border-gray-600">
    <div class="container flex flex-wrap items-center justify-between mx-auto">
      <a href="#" class="flex items-center">
        <img class="h-6 mr-3 sm:h-9" src="https://flowbite.com/docs/images/logo.svg" alt="Logo">
        <span class="self-center text-xl font-semibold whitespace-nowrap dark:text-white">RPLone</span>
      </a>
      <div class="flex md:order-2">
        <label class="relative inline-flex items-center cursor-pointer mr-3">
          <input type="checkbox" id="toggle" value="" class="sr-only peer">
          <div class="w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 dark:peer-focus:ring-blue-800 rounded-full peer dark:bg-gray-700 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute md:after:top-[2px] after:top-[10px] md:after:left-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-blue-600"></div>
          <span class="ml-3 text-sm text-gray-900 dark:text-gray-300 hidden md:flex">Theme</span>
        </label>
        <button id="nav-button" data-collapse-toggle="navbar-cta" type="button" class="inline-flex items-center p-2 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dar:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-cta" aria-expanded="false">
          <span class="sr-only">Open main menu</span>
          <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
        </button>
      </div>
      <div class="items-center justify-between hidden w-full md:flex md:w-auto" id="navbar-cta">
        <ul class="flex flex-col p-4 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium md:border-0 md:bg-transparent md:dark:bg-transparent dark:bg-gray-900 dark:border-gray-700">
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
                  <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Teachers</a>
                </li>
                <li>
                  <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Students</a>
                </li>
              </ul>
            </div>
          </li>
          <li>
            <a href="#" class="block py-2 pl-3 pr-4 {{ Request::is('store') ? 'text-white md:font-semibold md:text-blue-700 dark:text-white bg-blue-700' : 'text-gray-700 dark:text-gray-400 hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700' }} rounded md:bg-transparent md:p-0">Store</a>
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
  <script>
    const checkbox = document.querySelector('#toggle');
    const html = document.querySelector('html');
    checkbox.addEventListener('click', function() 
    {
      checkbox.checked ? html.classList.add('dark') : html.classList.remove('dark');
    });
  </script>
</body>
</html>