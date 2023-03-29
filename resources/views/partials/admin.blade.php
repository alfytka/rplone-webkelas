<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Admin</title>
  <link href="https://fonts.googleapis.com/css2?family=Figtree:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
  <link href="/css/app.css" rel="stylesheet">
</head>
<body class="dark:bg-slate-900">
  <nav class="fixed top-0 z-[32] w-full bg-white/90 backdrop-blur border-b border-gray-200 dark:bg-slate-900/75 dark:border-slate-700">
    <div class="px-3 py-2.5 md:py-3 lg:px-5 lg:pl-3">
      <div class="flex items-center justify-between">
        <div class="flex items-center justify-start">
          <button data-drawer-target="logo-sidebar" data-drawer-toggle="logo-sidebar" aria-controls="logo-sidebar" type="button" class="inline-flex items-center p-2 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600">
            <span class="sr-only">Open sidebar</span>
            <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
               <path clip-rule="evenodd" fill-rule="evenodd" d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z"></path>
            </svg>
          </button>
          <a href="#" class="flex ml-2 md:mr-24 ">
            <img src="https://flowbite.com/docs/images/logo.svg" class="h-8 mr-3" alt="FlowBite Logo" />
            <span class="self-center text-xl font-semibold whitespace-nowrap dark:text-white">RPLone</span>
          </a>
        </div>
        <div class="flex items-center divide-x dark:divide-slate-600">
          <div>
            <button data-tooltip-target="info" id="theme-toggle" type="button" class="text-gray-500 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-700 focus:outline-none focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 rounded-lg text-sm p-2">
              <svg id="theme-toggle-dark-icon" class="hidden w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"></path></svg>
              <svg id="theme-toggle-light-icon" class="hidden w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z" fill-rule="evenodd" clip-rule="evenodd"></path></svg>
            </button>
            <div id="info" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-xs font-medium transition-opacity duration-300 bg-white border border-gray-200 rounded-lg shadow-sm opacity-0 tooltip dark:border-none dark:text-slate-200 dark:bg-gray-700">
              Theme
              <div class="tooltip-arrow" data-popper-arrow></div>
            </div>
          </div>
          <div class="flex items-center pl-2 md:pl-5 ml-3">
            <div class="flex space-x-3">
              <label for="profile" class="hidden md:flex text-gray-700 dark:text-slate-300 text-sm my-auto cursor-pointer">Alfitka</label>
              <button id="profile" type="button" class="flex text-sm bg-gray-800 rounded-full focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600" aria-expanded="false" data-dropdown-toggle="dropdown-user">
                <span class="sr-only">Open user menu</span>
                <img class="w-[26px] h-[26px] rounded-full" src="/img/profile.jpg" alt="user photo">
              </button>
            </div>
            <div class="z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded shadow dark:bg-gray-700 dark:divide-gray-600" id="dropdown-user">
              <div class="px-4 py-3" role="none">
                <p class="text-sm text-gray-900 dark:text-white" role="none">
                  Alfitka
                </p>
                <p class="text-sm font-medium text-gray-900 truncate dark:text-gray-300" role="none">
                  alfitka@gmail.com
                </p>
              </div>
              <ul class="py-1" role="none">
                <li>
                  <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-600 dark:hover:text-white" role="menuitem">Profile</a>
                </li>
                <li>
                  <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-600 dark:hover:text-white" role="menuitem">Logout</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </nav>
  
  <aside id="logo-sidebar" class="fixed top-0 left-0 z-[31] w-64 h-screen pt-20 transition-transform -translate-x-full bg-white border-r border-gray-200 sm:translate-x-0 dark:bg-slate-900/75 dark:border-gray-700" aria-label="Sidebar">
    <div class="h-full px-5 pb-4 overflow-y-auto bg-white dark:bg-slate-900/75">
      <ul>
        <li>
          <a href="/dashboard" class="group flex items-center p-2 text-[15px] font-medium text-gray-900 rounded-lg dark:text-white">
            <div class="rounded-md ring-1 ring-slate-900/5 shadow-sm group-hover:shadow group-hover:ring-slate-900/10 dark:shadow-none dark:group-hover:shadow-none group-hover:shadow-purple-200 {{ Request::is('dashboard') ? 'dark:bg-purple-500' : 'dark:group-hover:bg-purple-500 dark:bg-slate-800 dark:ring-slate-700' }}">
              <svg aria-hidden="true" class="h-6 w-6" viewBox="0 0 24 24" fill="none"><path d="M6 8a2 2 0 0 1 2-2h1a2 2 0 0 1 2 2v1a2 2 0 0 1-2 2H8a2 2 0 0 1-2-2V8ZM6 15a2 2 0 0 1 2-2h1a2 2 0 0 1 2 2v1a2 2 0 0 1-2 2H8a2 2 0 0 1-2-2v-1Z" class="fill-purple-400 group-hover:fill-purple-500 {{ Request::is('dashboard') ? 'dark:fill-purple-300 dark:group-hover:fill-purple-300' : 'dark:group-hover:fill-purple-300 dark:fill-slate-600' }}"></path><path d="M13 8a2 2 0 0 1 2-2h1a2 2 0 0 1 2 2v1a2 2 0 0 1-2 2h-1a2 2 0 0 1-2-2V8Z" class="fill-purple-200 group-hover:fill-purple-300 {{ Request::is('dashboard') ? 'dark:fill-white dark:group-hover:fill-white' : 'dark:group-hover:fill-white dark:fill-slate-400' }}"></path><path d="M13 15a2 2 0 0 1 2-2h1a2 2 0 0 1 2 2v1a2 2 0 0 1-2 2h-1a2 2 0 0 1-2-2v-1Z" class="fill-purple-400 group-hover:fill-purple-500 {{ Request::is('dashboard') ? 'dark:fill-purple-300 dark:group-hover:fill-purple-300' : 'dark:group-hover:fill-purple-300 dark:fill-slate-600' }} "></path></svg>
            </div>
            <span class="flex-1 ml-3.5 whitespace-nowrap {{ Request::is('dashboard') ? 'text-blue-500 dark:text-white' : 'text-slate-700 group-hover:text-slate-900 dark:text-slate-400 dark:group-hover:text-slate-300' }}">Dashboard</span>
            <span class="{{ Request::is('dashboard') ? 'inline-flex w-1 h-1 p-1 bg-blue-300 rounded-full' : '' }} dark:hidden"></span>
          </a>
        </li>
        <li>
          <a href="/post" class="group flex items-center p-2 text-[15px] font-medium text-gray-900 rounded-lg dark:text-white">
            <div class="rounded-md ring-1 ring-slate-900/5 shadow-sm group-hover:shadow group-hover:ring-slate-900/10 dark:shadow-none dark:group-hover:shadow-none group-hover:shadow-blue-200 {{ Request::is('post') ? 'dark:bg-blue-500' : 'dark:group-hover:bg-blue-500 dark:ring-slate-700 dark:bg-slate-800' }}">
              <svg class="h-6 w-6 p-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                <path d="M12 9a3.75 3.75 0 100 7.5A3.75 3.75 0 0012 9z" class="fill-blue-500 {{ Request::is('post') ? 'dark:fill-blue-300' : 'dark:group-hover:fill-blue-300 dark:fill-slate-500' }}"/>
                <path class="fill-blue-400 {{ Request::is('post') ? 'dark:fill-blue-200 dark:group-hover:fill-blue-200' : 'dark:group-hover:fill-blue-200 dark:fill-slate-400' }} group-hover:fill-blue-500" fill-rule="evenodd" d="M9.344 3.071a49.52 49.52 0 015.312 0c.967.052 1.83.585 2.332 1.39l.821 1.317c.24.383.645.643 1.11.71.386.054.77.113 1.152.177 1.432.239 2.429 1.493 2.429 2.909V18a3 3 0 01-3 3h-15a3 3 0 01-3-3V9.574c0-1.416.997-2.67 2.429-2.909.382-.064.766-.123 1.151-.178a1.56 1.56 0 001.11-.71l.822-1.315a2.942 2.942 0 012.332-1.39zM6.75 12.75a5.25 5.25 0 1110.5 0 5.25 5.25 0 01-10.5 0zm12-1.5a.75.75 0 100-1.5.75.75 0 000 1.5z" clip-rule="evenodd" />
              </svg>
            </div>
            <span class="flex-1 ml-3.5 whitespace-nowrap {{ Request::is('post') ? 'text-blue-500 dark:text-white' : 'text-slate-700 group-hover:text-slate-900 dark:text-slate-400 dark:group-hover:text-slate-300' }}">Post</span>
            <span class="{{ Request::is('post') ? 'inline-flex w-1 h-1 p-1 bg-blue-300 rounded-full' : '' }} dark:hidden"></span>
          </a>
        </li>
        <li>
          <a href="/user" class="group flex items-center p-2 text-[15px] font-medium text-gray-900 rounded-lg dark:text-white">
            <div class="rounded-md ring-1 ring-slate-900/5 shadow-sm group-hover:shadow group-hover:ring-slate-900/10 dark:shadow-none dark:group-hover:shadow-none group-hover:shadow-purple-200 {{ Request::is('user') ? 'dark:bg-purple-800' : 'dark:group-hover:bg-purple-800 dark:bg-slate-800 dark:ring-slate-700' }}">
              <svg aria-hidden="true" class="p-[3px] w-6 h-6 text-purple-400 {{ Request::is('user') ? 'dark:text-slate-200 dark:group-hover:text-slate-200' : 'dark:group-hover:text-slate-200' }} group-hover:text-purple-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path class="fill-red" fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"></path></svg>
            </div>
            <span class="flex-1 ml-3.5 whitespace-nowrap {{ Request::is('user') ? 'text-blue-500 dark:text-white' : 'text-slate-700 group-hover:text-slate-900 dark:text-slate-400 dark:group-hover:text-slate-300' }}">User</span>
            <span class="{{ Request::is('user') ? 'inline-flex w-1 h-1 p-1 bg-blue-300 rounded-full' : '' }} dark:hidden"></span>
          </a>
        </li>
        <li>
          <a href="#" class="group flex items-center p-2 text-[15px] font-medium text-gray-900 rounded-lg dark:text-white">
            <div class="rounded-md ring-1 ring-slate-900/5 shadow-sm group-hover:shadow group-hover:ring-slate-900/10 dark:ring-slate-700 dark:shadow-none dark:group-hover:shadow-none group-hover:shadow-red-200 dark:group-hover:bg-red-600/80 dark:bg-slate-800">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="p-1 w-6 h-6 text-red-600 dark:text-gray-400 group-hover:text-red-700 dark:group-hover:text-white">
                <path stroke-linecap="round" stroke-linejoin="round" d="M9 15L3 9m0 0l6-6M3 9h12a6 6 0 010 12h-3" />
              </svg>
            </div>
            <span class="flex-1 ml-3.5 text-slate-700 group-hover:text-slate-900 dark:text-slate-400 dark:group-hover:text-slate-300 whitespace-nowrap">Logout</span>
          </a>
        </li>
      </ul>
      <div id="beta" class="p-4 mt-6 rounded-lg bg-blue-50 dark:bg-blue-900" role="alert">
        <div class="flex items-center mb-3">
          <span class="bg-orange-100 text-orange-800 text-sm font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-orange-200 dark:text-orange-900">Beta</span>
          <button type="button" class="ml-auto -mx-1.5 -my-1.5 bg-blue-50 text-blue-900 rounded-lg focus:ring-2 focus:ring-blue-400 p-1 hover:bg-blue-200 inline-flex h-6 w-6 dark:bg-blue-900 dark:text-blue-400 dark:hover:bg-blue-800" data-dismiss-target="#beta" aria-label="Close">
            <span class="sr-only">Close</span>
            <svg aria-hidden="true" class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
          </button>
        </div>
        <p class="mb-3 text-sm text-blue-800 dark:text-blue-400">Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim, doloribus voluptas nemo culpa praesentium suscipit. Quasi nihil quis earum quas.</p>
        <a href="#" class="text-sm text-blue-800 underline hover:text-blue-900 dark:text-blue-400 dark:hover:text-blue-300">ah yang benerrrr!!!</a>
      </div>
    </div>
  </aside>

  @yield('content')

  <script src="/js/app.js"></script>
  @yield('js')
  <script src="/js/index.js"></script>
</body>
</html>