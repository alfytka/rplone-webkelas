@extends('partials.new')
@section('content')
<div class="content isolate bg-white pb-24 pt-16 sm:py-32 dark:bg-slate-900">
  <div class="absolute inset-0 -z-10 overflow-hidden">
    <svg class="absolute left-[max(50%,25rem)] top-0 h-[64rem] w-[128rem] -translate-x-1/2 stroke-gray-200 dark:stroke-slate-800 [mask-image:radial-gradient(64rem_64rem_at_top,white,transparent)]" aria-hidden="true">
      <defs>
        <pattern id="e813992c-7d03-4cc4-a2bd-151760b470a0" width="200" height="200" x="50%" y="-1" patternUnits="userSpaceOnUse">
          <path d="M100 200V.5M.5 .5H200" fill="none" />
        </pattern>
      </defs>
      <svg x="50%" y="-1" class="overflow-visible fill-gray-50 dark:fill-slate-800">
        <path d="M-100.5 0h201v201h-201Z M699.5 0h201v201h-201Z M499.5 400h201v201h-201Z M-300.5 600h201v201h-201Z" stroke-width="0" />
      </svg>
      <rect width="100%" height="100%" stroke-width="0" fill="url(#e813992c-7d03-4cc4-a2bd-151760b470a0)" />
    </svg>
  </div>
  <div class="mx-auto grid grid-cols-1 lg:grid-cols-6 max-w-7xl px-3 pt-3 md:pt-0 lg:pl-16 lg:pr-16">
    {{-- <div class="max-w-2xl pb-14">
      <h2 class="text-3xl font-bold tracking-tight text-gray-900 dark:text-slate-200 sm:text-4xl">Teachers</h2>
    </div> --}}
    <div class="border hidden lg:inline col-span-2 shadow-sm border-slate-200 dark:border-slate-800 rounded-xl bg-white/10 dark:bg-slate-800/30 backdrop-blur-sm">
      <ul class="px-5 pb-5 pt-2 my-5 h-[710px] overflow-y-scroll siswa-list">
        <li class="p-2 border-t bg-slate-50 dark:bg-slate-800/50 dark:border-slate-700/50">
          <h6 class="text-sm leading-none font-semibold text-gray-900 dark:text-slate-200">A</h6>
        </li>
        <li class="flex items-center justify-between border-y py-4 dark:border-slate-700/50">
          <div class="flex gap-4">
            <img class="w-9 h-9 object-cover rounded-full" src="/img/jokowi.jpg" alt="">
            <div>
              <h6 class="text-sm font-medium text-gray-900 dark:text-slate-200">Aas Parisah</h6>
              <p class="text-sm leading-4 text-slate-500 dark:text-slate-400">@aasparisah</p>
            </div>
          </div>
          <a href="#" class="px-2.5 py-1 text-xs font-semibold text-gray-900 dark:text-slate-300 rounded-2xl border border-gray-300 dark:border-slate-700 shadow-sm bg-white dark:bg-slate-800 focus:outline-none focus:ring-2 focus:ring-indigo-500">View</a>
        </li>
        <li class="flex items-center justify-between border-b py-4 dark:border-slate-700/50">
          <div class="flex gap-4">
            {{-- <img class="w-9 h-9 object-cover rounded-full" src="/img/jokowi.jpg" alt=""> --}}
            <svg class="w-9 h-9 text-indigo-700 dark:text-indigo-500" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" d="M17.982 18.725A7.488 7.488 0 0012 15.75a7.488 7.488 0 00-5.982 2.975m11.963 0a9 9 0 10-11.963 0m11.963 0A8.966 8.966 0 0112 21a8.966 8.966 0 01-5.982-2.275M15 9.75a3 3 0 11-6 0 3 3 0 016 0z"></path>
            </svg>
            <div>
              <h6 class="text-sm font-medium text-gray-900 dark:text-slate-200">alfitka Haerul Kurniawan</h6>
              <p class="text-sm leading-4 text-slate-500 dark:text-slate-400">@alfitka</p>
            </div>
          </div>
          <a href="#" class="px-2.5 py-1 text-xs font-semibold text-gray-900 dark:text-slate-300 rounded-2xl border border-gray-300 dark:border-slate-700 shadow-sm bg-white dark:bg-slate-800 focus:outline-none focus:ring-2 focus:ring-indigo-500">View</a>
        </li>
        <li class="flex items-center justify-between border-b py-4 dark:border-slate-700/50">
          <div class="flex gap-4">
            <img class="w-9 h-9 object-cover rounded-full" src="/img/jokowi.jpg" alt="">
            <div>
              <h6 class="text-sm font-medium text-gray-900 dark:text-slate-200">Ananda Bintang</h6>
              <p class="text-sm leading-4 text-slate-500 dark:text-slate-400">@bintang</p>
            </div>
          </div>
          <a href="#" class="px-2.5 py-1 text-xs font-semibold text-gray-900 dark:text-slate-300 rounded-2xl border border-gray-300 dark:border-slate-700 shadow-sm bg-white dark:bg-slate-800 focus:outline-none focus:ring-2 focus:ring-indigo-500">View</a>
        </li>
        <li class="flex items-center justify-between border-b py-4 dark:border-slate-700/50">
          <div class="flex gap-4">
            <img class="w-9 h-9 object-cover rounded-full" src="/img/jokowi.jpg" alt="">
            <div>
              <h6 class="text-sm font-medium text-gray-900 dark:text-slate-200">Andre Daniswra Putra</h6>
              <p class="text-sm leading-4 text-slate-500 dark:text-slate-400">@andre</p>
            </div>
          </div>
          <a href="#" class="px-2.5 py-1 text-xs font-semibold text-gray-900 dark:text-slate-300 rounded-2xl border border-gray-300 dark:border-slate-700 shadow-sm bg-white dark:bg-slate-800 focus:outline-none focus:ring-2 focus:ring-indigo-500">View</a>
        </li>
        <li class="flex items-center justify-between border-b py-4 dark:border-slate-700/50">
          <div class="flex gap-4">
            <img class="w-9 h-9 object-cover rounded-full" src="/img/jokowi.jpg" alt="">
            <div>
              <h6 class="text-sm font-medium text-gray-900 dark:text-slate-200">Aniyu Anisa</h6>
              <p class="text-sm leading-4 text-slate-500 dark:text-slate-400">@aniyu</p>
            </div>
          </div>
          <a href="#" class="px-2.5 py-1 text-xs font-semibold text-gray-900 dark:text-slate-300 rounded-2xl border border-gray-300 dark:border-slate-700 shadow-sm bg-white dark:bg-slate-800 focus:outline-none focus:ring-2 focus:ring-indigo-500">View</a>
        </li>
        <li class="flex items-center justify-between border-b py-4 dark:border-slate-700/50">
          <div class="flex gap-4">
            <img class="w-9 h-9 object-cover rounded-full" src="/img/jokowi.jpg" alt="">
            <div>
              <h6 class="text-sm font-medium text-gray-900 dark:text-slate-200">Atyla Azfa Al Harits</h6>
              <p class="text-sm leading-4 text-slate-500 dark:text-slate-400">@atyla</p>
            </div>
          </div>
          <a href="#" class="px-2.5 py-1 text-xs font-semibold text-gray-900 dark:text-slate-300 rounded-2xl border border-gray-300 dark:border-slate-700 shadow-sm bg-white dark:bg-slate-800 focus:outline-none focus:ring-2 focus:ring-indigo-500">View</a>
        </li>
        <li class="p-2 border-b bg-slate-50 dark:bg-slate-800/50 dark:border-slate-700/50">
          <h6 class="text-sm leading-none font-semibold text-gray-900 dark:text-slate-200">C</h6>
        </li>
        <li class="flex items-center justify-between border-b py-4 dark:border-slate-700/50">
          <div class="flex gap-4">
            <img class="w-9 h-9 object-cover rounded-full" src="/img/jokowi.jpg" alt="">
            <div>
              <h6 class="text-sm font-medium text-gray-900 dark:text-slate-200">Cantika Aurelia April</h6>
              <p class="text-sm leading-4 text-slate-500 dark:text-slate-400">@cantika</p>
            </div>
          </div>
          <a href="#" class="px-2.5 py-1 text-xs font-semibold text-gray-900 dark:text-slate-300 rounded-2xl border border-gray-300 dark:border-slate-700 shadow-sm bg-white dark:bg-slate-800 focus:outline-none focus:ring-2 focus:ring-indigo-500">View</a>
        </li>
        <li class="p-2 border-b bg-slate-50 dark:bg-slate-800/50 dark:border-slate-700/50">
          <h6 class="text-sm leading-none font-semibold text-gray-900 dark:text-slate-200">D</h6>
        </li>
        <li class="flex items-center justify-between border-b py-4 dark:border-slate-700/50">
          <div class="flex gap-4">
            <img class="w-9 h-9 object-cover rounded-full" src="/img/jokowi.jpg" alt="">
            <div>
              <h6 class="text-sm font-medium text-gray-900 dark:text-slate-200">Dea Aprilianti</h6>
              <p class="text-sm leading-4 text-slate-500 dark:text-slate-400">@dea</p>
            </div>
          </div>
          <a href="#" class="px-2.5 py-1 text-xs font-semibold text-gray-900 dark:text-slate-300 rounded-2xl border border-gray-300 dark:border-slate-700 shadow-sm bg-white dark:bg-slate-800 focus:outline-none focus:ring-2 focus:ring-indigo-500">View</a>
        </li>
        <li class="flex items-center justify-between border-b py-4 dark:border-slate-700/50">
          <div class="flex gap-4">
            <img class="w-9 h-9 object-cover rounded-full" src="/img/jokowi.jpg" alt="">
            <div>
              <h6 class="text-sm font-medium text-gray-900 dark:text-slate-200">Delia Aryanti</h6>
              <p class="text-sm leading-4 text-slate-500 dark:text-slate-400">@delia</p>
            </div>
          </div>
          <a href="#" class="px-2.5 py-1 text-xs font-semibold text-gray-900 dark:text-slate-300 rounded-2xl border border-gray-300 dark:border-slate-700 shadow-sm bg-white dark:bg-slate-800 focus:outline-none focus:ring-2 focus:ring-indigo-500">View</a>
        </li>
        <li class="flex items-center justify-between border-b py-4 dark:border-slate-700/50">
          <div class="flex gap-4">
            <img class="w-9 h-9 object-cover rounded-full" src="/img/jokowi.jpg" alt="">
            <div>
              <h6 class="text-sm font-medium text-gray-900 dark:text-slate-200">Dimas Adirawijaya</h6>
              <p class="text-sm leading-4 text-slate-500 dark:text-slate-400">@dimas</p>
            </div>
          </div>
          <a href="#" class="px-2.5 py-1 text-xs font-semibold text-gray-900 dark:text-slate-300 rounded-2xl border border-gray-300 dark:border-slate-700 shadow-sm bg-white dark:bg-slate-800 focus:outline-none focus:ring-2 focus:ring-indigo-500">View</a>
        </li>
        <li class="flex items-center justify-between border-b py-4 dark:border-slate-700/50">
          <div class="flex gap-4">
            <img class="w-9 h-9 object-cover rounded-full" src="/img/jokowi.jpg" alt="">
            <div>
              <h6 class="text-sm font-medium text-gray-900 dark:text-slate-200">Dwi Utami</h6>
              <p class="text-sm leading-4 text-slate-500 dark:text-slate-400">@dwiutami</p>
            </div>
          </div>
          <a href="#" class="px-2.5 py-1 text-xs font-semibold text-gray-900 dark:text-slate-300 rounded-2xl border border-gray-300 dark:border-slate-700 shadow-sm bg-white dark:bg-slate-800 focus:outline-none focus:ring-2 focus:ring-indigo-500">View</a>
        </li>
        <li class="p-2 border-b bg-slate-50 dark:bg-slate-800/50 dark:border-slate-700/50">
          <h6 class="text-sm leading-none font-semibold text-gray-900 dark:text-slate-200">E</h6>
        </li>
        <li class="flex items-center justify-between border-b py-4 dark:border-slate-700/50">
          <div class="flex gap-4">
            <img class="w-9 h-9 object-cover rounded-full" src="/img/jokowi.jpg" alt="">
            <div>
              <h6 class="text-sm font-medium text-gray-900 dark:text-slate-200">Efa Sri Rahayu</h6>
              <p class="text-sm leading-4 text-slate-500 dark:text-slate-400">@efa</p>
            </div>
          </div>
          <a href="#" class="px-2.5 py-1 text-xs font-semibold text-gray-900 dark:text-slate-300 rounded-2xl border border-gray-300 dark:border-slate-700 shadow-sm bg-white dark:bg-slate-800 focus:outline-none focus:ring-2 focus:ring-indigo-500">View</a>
        </li>
        <li class="flex items-center justify-between border-b py-4 dark:border-slate-700/50">
          <div class="flex gap-4">
            <img class="w-9 h-9 object-cover rounded-full" src="/img/jokowi.jpg" alt="">
            <div>
              <h6 class="text-sm font-medium text-gray-900 dark:text-slate-200">Elfan Hari Saputra</h6>
              <p class="text-sm leading-4 text-slate-500 dark:text-slate-400">@elfan</p>
            </div>
          </div>
          <a href="#" class="px-2.5 py-1 text-xs font-semibold text-gray-900 dark:text-slate-300 rounded-2xl border border-gray-300 dark:border-slate-700 shadow-sm bg-white dark:bg-slate-800 focus:outline-none focus:ring-2 focus:ring-indigo-500">View</a>
        </li>
        <li class="p-2 border-b bg-slate-50 dark:bg-slate-800/50 dark:border-slate-700/50">
          <h6 class="text-sm leading-none font-semibold text-gray-900 dark:text-slate-200">F</h6>
        </li>
        <li class="flex items-center justify-between border-b py-4 dark:border-slate-700/50">
          <div class="flex gap-4">
            <img class="w-9 h-9 object-cover rounded-full" src="/img/jokowi.jpg" alt="">
            <div>
              <h6 class="text-sm font-medium text-gray-900 dark:text-slate-200">Fahra Nayla Cahya Dini</h6>
              <p class="text-sm leading-4 text-slate-500 dark:text-slate-400">@fahra</p>
            </div>
          </div>
          <a href="#" class="px-2.5 py-1 text-xs font-semibold text-gray-900 dark:text-slate-300 rounded-2xl border border-gray-300 dark:border-slate-700 shadow-sm bg-white dark:bg-slate-800 focus:outline-none focus:ring-2 focus:ring-indigo-500">View</a>
        </li>
        <li class="p-2 border-b bg-slate-50 dark:bg-slate-800/50 dark:border-slate-700/50">
          <h6 class="text-sm leading-none font-semibold text-gray-900 dark:text-slate-200">I</h6>
        </li>
        <li class="flex items-center justify-between border-b py-4 dark:border-slate-700/50">
          <div class="flex gap-4">
            <img class="w-9 h-9 object-cover rounded-full" src="/img/jokowi.jpg" alt="">
            <div>
              <h6 class="text-sm font-medium text-gray-900 dark:text-slate-200">Irvan Maulana</h6>
              <p class="text-sm leading-4 text-slate-500 dark:text-slate-400">@irvan</p>
            </div>
          </div>
          <a href="#" class="px-2.5 py-1 text-xs font-semibold text-gray-900 dark:text-slate-300 rounded-2xl border border-gray-300 dark:border-slate-700 shadow-sm bg-white dark:bg-slate-800 focus:outline-none focus:ring-2 focus:ring-indigo-500">View</a>
        </li>
        <li class="p-2 border-b bg-slate-50 dark:bg-slate-800/50 dark:border-slate-700/50">
          <h6 class="text-sm leading-none font-semibold text-gray-900 dark:text-slate-200">K</h6>
        </li>
        <li class="flex items-center justify-between border-b py-4 dark:border-slate-700/50">
          <div class="flex gap-4">
            <img class="w-9 h-9 object-cover rounded-full" src="/img/jokowi.jpg" alt="">
            <div>
              <h6 class="text-sm font-medium text-gray-900 dark:text-slate-200">Khairunissa Meyla Agustri</h6>
              <p class="text-sm leading-4 text-slate-500 dark:text-slate-400">@khairunissa</p>
            </div>
          </div>
          <a href="#" class="px-2.5 py-1 text-xs font-semibold text-gray-900 dark:text-slate-300 rounded-2xl border border-gray-300 dark:border-slate-700 shadow-sm bg-white dark:bg-slate-800 focus:outline-none focus:ring-2 focus:ring-indigo-500">View</a>
        </li>
        <li class="flex items-center justify-between border-b py-4 dark:border-slate-700/50">
          <div class="flex gap-4">
            <img class="w-9 h-9 object-cover rounded-full" src="/img/jokowi.jpg" alt="">
            <div>
              <h6 class="text-sm font-medium text-gray-900 dark:text-slate-200">Khikmal Kurniawan</h6>
              <p class="text-sm leading-4 text-slate-500 dark:text-slate-400">@khikmal</p>
            </div>
          </div>
          <a href="#" class="px-2.5 py-1 text-xs font-semibold text-gray-900 dark:text-slate-300 rounded-2xl border border-gray-300 dark:border-slate-700 shadow-sm bg-white dark:bg-slate-800 focus:outline-none focus:ring-2 focus:ring-indigo-500">View</a>
        </li>
        <li class="p-2 border-b bg-slate-50 dark:bg-slate-800/50 dark:border-slate-700/50">
          <h6 class="text-sm leading-none font-semibold text-gray-900 dark:text-slate-200">L</h6>
        </li>
        <li class="flex items-center justify-between border-b py-4 dark:border-slate-700/50">
          <div class="flex gap-4">
            <img class="w-9 h-9 object-cover rounded-full" src="/img/jokowi.jpg" alt="">
            <div>
              <h6 class="text-sm font-medium text-gray-900 dark:text-slate-200">Lidya Nurfadilah</h6>
              <p class="text-sm leading-4 text-slate-500 dark:text-slate-400">@lidya</p>
            </div>
          </div>
          <a href="#" class="px-2.5 py-1 text-xs font-semibold text-gray-900 dark:text-slate-300 rounded-2xl border border-gray-300 dark:border-slate-700 shadow-sm bg-white dark:bg-slate-800 focus:outline-none focus:ring-2 focus:ring-indigo-500">View</a>
        </li>
        <li class="p-2 border-b bg-slate-50 dark:bg-slate-800/50 dark:border-slate-700/50">
          <h6 class="text-sm leading-none font-semibold text-gray-900 dark:text-slate-200">M</h6>
        </li>
        <li class="flex items-center justify-between border-b py-4 dark:border-slate-700/50">
          <div class="flex gap-4">
            <img class="w-9 h-9 object-cover rounded-full" src="/img/jokowi.jpg" alt="">
            <div>
              <h6 class="text-sm font-medium text-gray-900 dark:text-slate-200">Melisa Lestari</h6>
              <p class="text-sm leading-4 text-slate-500 dark:text-slate-400">@melisa</p>
            </div>
          </div>
          <a href="#" class="px-2.5 py-1 text-xs font-semibold text-gray-900 dark:text-slate-300 rounded-2xl border border-gray-300 dark:border-slate-700 shadow-sm bg-white dark:bg-slate-800 focus:outline-none focus:ring-2 focus:ring-indigo-500">View</a>
        </li>
        <li class="p-2 border-b bg-slate-50 dark:bg-slate-800/50 dark:border-slate-700/50">
          <h6 class="text-sm leading-none font-semibold text-gray-900 dark:text-slate-200">P</h6>
        </li>
        <li class="flex items-center justify-between border-b py-4 dark:border-slate-700/50">
          <div class="flex gap-4">
            <img class="w-9 h-9 object-cover rounded-full" src="/img/jokowi.jpg" alt="">
            <div>
              <h6 class="text-sm font-medium text-gray-900 dark:text-slate-200">Putri Nurintan Ayuni</h6>
              <p class="text-sm leading-4 text-slate-500 dark:text-slate-400">@putri</p>
            </div>
          </div>
          <a href="#" class="px-2.5 py-1 text-xs font-semibold text-gray-900 dark:text-slate-300 rounded-2xl border border-gray-300 dark:border-slate-700 shadow-sm bg-white dark:bg-slate-800 focus:outline-none focus:ring-2 focus:ring-indigo-500">View</a>
        </li>
        <li class="p-2 border-b bg-slate-50 dark:bg-slate-800/50 dark:border-slate-700/50">
          <h6 class="text-sm leading-none font-semibold text-gray-900 dark:text-slate-200">R</h6>
        </li>
        <li class="flex items-center justify-between border-b py-4 dark:border-slate-700/50">
          <div class="flex gap-4">
            <img class="w-9 h-9 object-cover rounded-full" src="/img/jokowi.jpg" alt="">
            <div>
              <h6 class="text-sm font-medium text-gray-900 dark:text-slate-200">Rafli Al-Musyafa</h6>
              <p class="text-sm leading-4 text-slate-500 dark:text-slate-400">@rafli</p>
            </div>
          </div>
          <a href="#" class="px-2.5 py-1 text-xs font-semibold text-gray-900 dark:text-slate-300 rounded-2xl border border-gray-300 dark:border-slate-700 shadow-sm bg-white dark:bg-slate-800 focus:outline-none focus:ring-2 focus:ring-indigo-500">View</a>
        </li>
        <li class="flex items-center justify-between border-b py-4 dark:border-slate-700/50">
          <div class="flex gap-4">
            <img class="w-9 h-9 object-cover rounded-full" src="/img/jokowi.jpg" alt="">
            <div>
              <h6 class="text-sm font-medium text-gray-900 dark:text-slate-200">Renal Ajrun Adhim Ramadhan</h6>
              <p class="text-sm leading-4 text-slate-500 dark:text-slate-400">@renal</p>
            </div>
          </div>
          <a href="#" class="px-2.5 py-1 text-xs font-semibold text-gray-900 dark:text-slate-300 rounded-2xl border border-gray-300 dark:border-slate-700 shadow-sm bg-white dark:bg-slate-800 focus:outline-none focus:ring-2 focus:ring-indigo-500">View</a>
        </li>
        <li class="flex items-center justify-between border-b py-4 dark:border-slate-700/50">
          <div class="flex gap-4">
            <img class="w-9 h-9 object-cover rounded-full" src="/img/jokowi.jpg" alt="">
            <div>
              <h6 class="text-sm font-medium text-gray-900 dark:text-slate-200">Rifaul Ni'Mah</h6>
              <p class="text-sm leading-4 text-slate-500 dark:text-slate-400">@rifaul</p>
            </div>
          </div>
          <a href="#" class="px-2.5 py-1 text-xs font-semibold text-gray-900 dark:text-slate-300 rounded-2xl border border-gray-300 dark:border-slate-700 shadow-sm bg-white dark:bg-slate-800 focus:outline-none focus:ring-2 focus:ring-indigo-500">View</a>
        </li>
        <li class="flex items-center justify-between border-b py-4 dark:border-slate-700/50">
          <div class="flex gap-4">
            <img class="w-9 h-9 object-cover rounded-full" src="/img/jokowi.jpg" alt="">
            <div>
              <h6 class="text-sm font-medium text-gray-900 dark:text-slate-200">Riska Fajaryanti</h6>
              <p class="text-sm leading-4 text-slate-500 dark:text-slate-400">@riska</p>
            </div>
          </div>
          <a href="#" class="px-2.5 py-1 text-xs font-semibold text-gray-900 dark:text-slate-300 rounded-2xl border border-gray-300 dark:border-slate-700 shadow-sm bg-white dark:bg-slate-800 focus:outline-none focus:ring-2 focus:ring-indigo-500">View</a>
        </li>
        <li class="p-2 border-b bg-slate-50 dark:bg-slate-800/50 dark:border-slate-700/50">
          <h6 class="text-sm leading-none font-semibold text-gray-900 dark:text-slate-200">S</h6>
        </li>
        <li class="flex items-center justify-between border-b py-4 dark:border-slate-700/50">
          <div class="flex gap-4">
            <img class="w-9 h-9 object-cover rounded-full" src="/img/jokowi.jpg" alt="">
            <div>
              <h6 class="text-sm font-medium text-gray-900 dark:text-slate-200">Santi</h6>
              <p class="text-sm leading-4 text-slate-500 dark:text-slate-400">@santi</p>
            </div>
          </div>
          <a href="#" class="px-2.5 py-1 text-xs font-semibold text-gray-900 dark:text-slate-300 rounded-2xl border border-gray-300 dark:border-slate-700 shadow-sm bg-white dark:bg-slate-800 focus:outline-none focus:ring-2 focus:ring-indigo-500">View</a>
        </li>
        <li class="flex items-center justify-between border-b py-4 dark:border-slate-700/50">
          <div class="flex gap-4">
            <img class="w-9 h-9 object-cover rounded-full" src="/img/jokowi.jpg" alt="">
            <div>
              <h6 class="text-sm font-medium text-gray-900 dark:text-slate-200">Septiani Wijianingsih</h6>
              <p class="text-sm leading-4 text-slate-500 dark:text-slate-400">@septi</p>
            </div>
          </div>
          <a href="#" class="px-2.5 py-1 text-xs font-semibold text-gray-900 dark:text-slate-300 rounded-2xl border border-gray-300 dark:border-slate-700 shadow-sm bg-white dark:bg-slate-800 focus:outline-none focus:ring-2 focus:ring-indigo-500">View</a>
        </li>
        <li class="flex items-center justify-between border-b py-4 dark:border-slate-700/50">
          <div class="flex gap-4">
            <img class="w-9 h-9 object-cover rounded-full" src="/img/jokowi.jpg" alt="">
            <div>
              <h6 class="text-sm font-medium text-gray-900 dark:text-slate-200">Siti Fatimatuz Zahro</h6>
              <p class="text-sm leading-4 text-slate-500 dark:text-slate-400">@zahro</p>
            </div>
          </div>
          <a href="#" class="px-2.5 py-1 text-xs font-semibold text-gray-900 dark:text-slate-300 rounded-2xl border border-gray-300 dark:border-slate-700 shadow-sm bg-white dark:bg-slate-800 focus:outline-none focus:ring-2 focus:ring-indigo-500">View</a>
        </li>
        <li class="flex items-center justify-between border-b py-4 dark:border-slate-700/50">
          <div class="flex gap-4">
            <img class="w-9 h-9 object-cover rounded-full" src="/img/jokowi.jpg" alt="">
            <div>
              <h6 class="text-sm font-medium text-gray-900 dark:text-slate-200">Siti Latifah</h6>
              <p class="text-sm leading-4 text-slate-500 dark:text-slate-400">@latifah</p>
            </div>
          </div>
          <a href="#" class="px-2.5 py-1 text-xs font-semibold text-gray-900 dark:text-slate-300 rounded-2xl border border-gray-300 dark:border-slate-700 shadow-sm bg-white dark:bg-slate-800 focus:outline-none focus:ring-2 focus:ring-indigo-500">View</a>
        </li>
        <li class="flex items-center justify-between border-b py-4 dark:border-slate-700/50">
          <div class="flex gap-4">
            <img class="w-9 h-9 object-cover rounded-full" src="/img/jokowi.jpg" alt="">
            <div>
              <h6 class="text-sm font-medium text-gray-900 dark:text-slate-200">Surti Yani</h6>
              <p class="text-sm leading-4 text-slate-500 dark:text-slate-400">@surtiyani</p>
            </div>
          </div>
          <a href="#" class="px-2.5 py-1 text-xs font-semibold text-gray-900 dark:text-slate-300 rounded-2xl border border-gray-300 dark:border-slate-700 shadow-sm bg-white dark:bg-slate-800 focus:outline-none focus:ring-2 focus:ring-indigo-500">View</a>
        </li>
        <li class="p-2 border-b bg-slate-50 dark:bg-slate-800/50 dark:border-slate-700/50">
          <h6 class="text-sm leading-none font-semibold text-gray-900 dark:text-slate-200">T</h6>
        </li>
        <li class="flex items-center justify-between border-b py-4 dark:border-slate-700/50">
          <div class="flex gap-4">
            <img class="w-9 h-9 object-cover rounded-full" src="/img/jokowi.jpg" alt="">
            <div>
              <h6 class="text-sm font-medium text-gray-900 dark:text-slate-200">Teguh Afriansyah</h6>
              <p class="text-sm leading-4 text-slate-500 dark:text-slate-400">@teguh</p>
            </div>
          </div>
          <a href="#" class="px-2.5 py-1 text-xs font-semibold text-gray-900 dark:text-slate-300 rounded-2xl border border-gray-300 dark:border-slate-700 shadow-sm bg-white dark:bg-slate-800 focus:outline-none focus:ring-2 focus:ring-indigo-500">View</a>
        </li>
        <li class="flex items-center justify-between border-b py-4 dark:border-slate-700/50">
          <div class="flex gap-4">
            <img class="w-9 h-9 object-cover rounded-full" src="/img/jokowi.jpg" alt="">
            <div>
              <h6 class="text-sm font-medium text-gray-900 dark:text-slate-200">Tri Yuliyani</h6>
              <p class="text-sm leading-4 text-slate-500 dark:text-slate-400">@tri</p>
            </div>
          </div>
          <a href="#" class="px-2.5 py-1 text-xs font-semibold text-gray-900 dark:text-slate-300 rounded-2xl border border-gray-300 dark:border-slate-700 shadow-sm bg-white dark:bg-slate-800 focus:outline-none focus:ring-2 focus:ring-indigo-500">View</a>
        </li>
        <li class="flex items-center justify-between border-b py-4 dark:border-slate-700/50">
          <div class="flex gap-4">
            <img class="w-9 h-9 object-cover rounded-full" src="/img/jokowi.jpg" alt="">
            <div>
              <h6 class="text-sm font-medium text-gray-900 dark:text-slate-200">Trio Adi Permana</h6>
              <p class="text-sm leading-4 text-slate-500 dark:text-slate-400">@trio</p>
            </div>
          </div>
          <a href="#" class="px-2.5 py-1 text-xs font-semibold text-gray-900 dark:text-slate-300 rounded-2xl border border-gray-300 dark:border-slate-700 shadow-sm bg-white dark:bg-slate-800 focus:outline-none focus:ring-2 focus:ring-indigo-500">View</a>
        </li>
        <li class="p-2 border-b bg-slate-50 dark:bg-slate-800/50 dark:border-slate-700/50">
          <h6 class="text-sm leading-none font-semibold text-gray-900 dark:text-slate-200">Y</h6>
        </li>
        <li class="flex items-center justify-between border-b py-4 dark:border-slate-700/50">
          <div class="flex gap-4">
            <img class="w-9 h-9 object-cover rounded-full" src="/img/jokowi.jpg" alt="">
            <div>
              <h6 class="text-sm font-medium text-gray-900 dark:text-slate-200">Yuni Arzeti</h6>
              <p class="text-sm leading-4 text-slate-500 dark:text-slate-400">@yuni</p>
            </div>
          </div>
          <a href="#" class="px-2.5 py-1 text-xs font-semibold text-gray-900 dark:text-slate-300 rounded-2xl border border-gray-300 dark:border-slate-700 shadow-sm bg-white dark:bg-slate-800 focus:outline-none focus:ring-2 focus:ring-indigo-500">View</a>
        </li>
        <li class="p-2 border-b bg-slate-50 dark:bg-slate-800/50 dark:border-slate-700/50">
          <h6 class="text-sm leading-none font-semibold text-gray-900 dark:text-slate-200">Z</h6>
        </li>
        <li class="flex items-center justify-between py-4">
          <div class="flex gap-4">
            <img class="w-9 h-9 object-cover rounded-full" src="/img/jokowi.jpg" alt="">
            <div>
              <h6 class="text-sm font-medium text-gray-900 dark:text-slate-200">Zaskia Kurnia Asih</h6>
              <p class="text-sm leading-4 text-slate-500 dark:text-slate-400">@zaskia</p>
            </div>
          </div>
          <a href="#" class="px-2.5 py-1 text-xs font-semibold text-gray-900 dark:text-slate-300 rounded-2xl border border-gray-300 dark:border-slate-700 shadow-sm bg-white dark:bg-slate-800 focus:outline-none focus:ring-2 focus:ring-indigo-500">View</a>
        </li>
      </ul>
    </div>
    <div class="flex lg:hidden pb-5">
      <button type="button" data-drawer-target="drawer" data-drawer-show="drawer" class="flex text-sm font-medium gap-2 items-center text-gray-600 dark:text-slate-400">
        <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
          <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 12h16.5m-16.5 3.75h16.5M3.75 19.5h16.5M5.625 4.5h12.75a1.875 1.875 0 010 3.75H5.625a1.875 1.875 0 010-3.75z"></path>
        </svg>
        List siswa
      </button>
    </div>
    <div class="col-span-4 lg:ml-12 lg:mt-5">
      <div class="pb-6 pl-3 sm:pl-2 flex items-center space-x-5">
        <img class="w-16 h-16 md:w-20 md:h-20 rounded-full object-cover ring-2 ring-indigo-500 dark:ring-slate-600 p-1" src="/img/jokowi.jpg" alt="">
        <div>
          <h5 class="text-xl md:text-2xl font-bold leading-7 text-gray-900 tracking-tight dark:text-slate-300">Khikmal Kurniawan</h5>
          <p class="text-base font-normal text-slate-500 dark:text-slate-400 tracking-tight">Software Engineer</p>
        </div>
      </div>
      <div class="overflow-hidden bg-white/10 dark:bg-slate-800/30 backdrop-blur-sm shadow-sm rounded-lg sm:rounded-xl border dark:border-slate-800">
        <div class="px-4 py-5 sm:px-6">
          <h3 class="text-lg font-semibold leading-6 text-gray-900 dark:text-slate-300">Informasi Siswa</h3>
          <p class="mt-1 max-w-2xl text-sm text-gray-500 dark:text-slate-400">Detail data pribadi siswa</p>
        </div>
        <div>
          <dl>
            <div class="border-y dark:border-slate-800 px-4 py-3 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
              <dt class="text-sm font-medium text-gray-500 dark:text-slate-400">Full name</dt>
              <dd class="mt-1 text-sm text-gray-900 dark:text-slate-300 sm:col-span-2 sm:mt-0">Khikmal Kurniawan</dd>
            </div>
            <div class="border-b dark:border-slate-800 px-4 py-3 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
              <dt class="text-sm font-medium text-gray-500 dark:text-slate-400">Jenis kelamin</dt>
              <dd class="mt-1 text-sm text-gray-900 dark:text-slate-300 sm:col-span-2 sm:mt-0">Laki-laki</dd>
            </div>
            <div class="border-b dark:border-slate-800 px-4 py-3 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
              <dt class="text-sm font-medium text-gray-500 dark:text-slate-400">Tempat, tanggal lahir</dt>
              <dd class="mt-1 text-sm text-gray-900 dark:text-slate-300 sm:col-span-2 sm:mt-0">DIY New York, 18 Agustus 2002</dd>
            </div>
            <div class="border-b dark:border-slate-800 px-4 py-3 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
              <dt class="text-sm font-medium text-gray-500 dark:text-slate-400">Hoby</dt>
              <dd class="mt-1 text-sm text-gray-900 dark:text-slate-300 sm:col-span-2 sm:mt-0">Badminton</dd>
            </div>
            <div class="border-b dark:border-slate-800 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
              <dt class="text-sm font-medium text-gray-500 dark:text-slate-400">Quotes</dt>
              <dd class="mt-1 text-sm text-gray-900 dark:text-slate-300 sm:col-span-2 sm:mt-0">Fugiat ipsum ipsum deserunt culpa aute sint do nostrud anim incididunt cillum culpa consequat. Excepteur qui ipsum aliquip consequat sint. Sit id mollit nulla mollit nostrud in ea officia proident. Irure nostrud pariatur mollit ad adipisicing reprehenderit deserunt qui eu.</dd>
            </div>
            <div class="px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
              <dt class="text-sm font-medium text-gray-500 dark:text-slate-400">Social media</dt>
              <ul class="mt-3 text-sm text-gray-900 dark:text-slate-300 sm:col-span-2 sm:mt-0 space-y-4">
                <li>
                  <a href="#" class="flex pl-2 sm:pl-1 gap-x-3 items-center">
                    <svg class="w-6 h-6 text-gray-400 dark:text-slate-400" class="" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path fill-rule="evenodd" d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z" clip-rule="evenodd" /></svg>
                      Instagram
                  </a>
                </li>
                <li>
                  <a href="#" class="flex pl-2 sm:pl-1 gap-x-3 items-center">
                    <svg class="w-6 h-6 text-gray-400 dark:text-slate-400" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" xml:space="preserve"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path d="M19.589 6.686a4.793 4.793 0 0 1-3.77-4.245V2h-3.445v13.672a2.896 2.896 0 0 1-5.201 1.743l-.002-.001.002.001a2.895 2.895 0 0 1 3.183-4.51v-3.5a6.329 6.329 0 0 0-5.394 10.692 6.33 6.33 0 0 0 10.857-4.424V8.687a8.182 8.182 0 0 0 4.773 1.526V6.79a4.831 4.831 0 0 1-1.003-.104z"></path></g></svg>
                      Tiktok
                  </a>
                </li>
                <li >
                  <a href="#" class="flex pl-2 sm:pl-1 gap-x-3 items-center">
                    <svg class="w-6 h-6 text-gray-400 dark:text-slate-400" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path fill-rule="evenodd" d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z" clip-rule="evenodd" /></svg>
                      Github
                  </a>
                </li>
              </ul>
            </div>
          </dl>
        </div>
      </div>
    </div>
  </div>
</div>

<div id="drawer" class="siswa-list fixed top-0 left-0 z-40 h-screen overflow-y-auto transition-transform -translate-x-full w-80 bg-white dark:bg-slate-800">
  <ul class="px-3 pb-5 pt-2 my-5 " id="siswa-list">
    <li class="p-2 border-t bg-slate-50 dark:bg-slate-800/50 dark:border-slate-700/50">
      <h6 class="text-sm leading-none font-semibold text-gray-900 dark:text-slate-200">A</h6>
    </li>
    <li class="flex items-center justify-between border-y py-4 dark:border-slate-700/50">
      <div class="flex gap-4">
        <img class="w-9 h-9 object-cover rounded-full" src="/img/jokowi.jpg" alt="">
        <div>
          <h6 class="text-sm font-medium text-gray-900 dark:text-slate-200">Aas Parisah</h6>
          <p class="text-sm leading-4 text-slate-500 dark:text-slate-400">@aasparisah</p>
        </div>
      </div>
      <a href="#" class="px-2.5 py-1 text-xs font-semibold text-gray-900 dark:text-slate-300 rounded-2xl border border-gray-300 dark:border-slate-700 shadow-sm bg-white dark:bg-slate-800 focus:outline-none focus:ring-2 focus:ring-indigo-500">View</a>
    </li>
    <li class="flex items-center justify-between border-b py-4 dark:border-slate-700/50">
      <div class="flex gap-4">
        {{-- <img class="w-9 h-9 object-cover rounded-full" src="/img/jokowi.jpg" alt=""> --}}
        <svg class="w-9 h-9 text-indigo-700 dark:text-indigo-500" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
          <path stroke-linecap="round" stroke-linejoin="round" d="M17.982 18.725A7.488 7.488 0 0012 15.75a7.488 7.488 0 00-5.982 2.975m11.963 0a9 9 0 10-11.963 0m11.963 0A8.966 8.966 0 0112 21a8.966 8.966 0 01-5.982-2.275M15 9.75a3 3 0 11-6 0 3 3 0 016 0z"></path>
        </svg>
        <div>
          <h6 class="text-sm font-medium text-gray-900 dark:text-slate-200">alfitka Haerul Kurniawan</h6>
          <p class="text-sm leading-4 text-slate-500 dark:text-slate-400">@alfitka</p>
        </div>
      </div>
      <a href="#" class="px-2.5 py-1 text-xs font-semibold text-gray-900 dark:text-slate-300 rounded-2xl border border-gray-300 dark:border-slate-700 shadow-sm bg-white dark:bg-slate-800 focus:outline-none focus:ring-2 focus:ring-indigo-500">View</a>
    </li>
    <li class="flex items-center justify-between border-b py-4 dark:border-slate-700/50">
      <div class="flex gap-4">
        <img class="w-9 h-9 object-cover rounded-full" src="/img/jokowi.jpg" alt="">
        <div>
          <h6 class="text-sm font-medium text-gray-900 dark:text-slate-200">Ananda Bintang</h6>
          <p class="text-sm leading-4 text-slate-500 dark:text-slate-400">@bintang</p>
        </div>
      </div>
      <a href="#" class="px-2.5 py-1 text-xs font-semibold text-gray-900 dark:text-slate-300 rounded-2xl border border-gray-300 dark:border-slate-700 shadow-sm bg-white dark:bg-slate-800 focus:outline-none focus:ring-2 focus:ring-indigo-500">View</a>
    </li>
    <li class="flex items-center justify-between border-b py-4 dark:border-slate-700/50">
      <div class="flex gap-4">
        <img class="w-9 h-9 object-cover rounded-full" src="/img/jokowi.jpg" alt="">
        <div>
          <h6 class="text-sm font-medium text-gray-900 dark:text-slate-200">Andre Daniswra Putra</h6>
          <p class="text-sm leading-4 text-slate-500 dark:text-slate-400">@andre</p>
        </div>
      </div>
      <a href="#" class="px-2.5 py-1 text-xs font-semibold text-gray-900 dark:text-slate-300 rounded-2xl border border-gray-300 dark:border-slate-700 shadow-sm bg-white dark:bg-slate-800 focus:outline-none focus:ring-2 focus:ring-indigo-500">View</a>
    </li>
    <li class="flex items-center justify-between border-b py-4 dark:border-slate-700/50">
      <div class="flex gap-4">
        <img class="w-9 h-9 object-cover rounded-full" src="/img/jokowi.jpg" alt="">
        <div>
          <h6 class="text-sm font-medium text-gray-900 dark:text-slate-200">Aniyu Anisa</h6>
          <p class="text-sm leading-4 text-slate-500 dark:text-slate-400">@aniyu</p>
        </div>
      </div>
      <a href="#" class="px-2.5 py-1 text-xs font-semibold text-gray-900 dark:text-slate-300 rounded-2xl border border-gray-300 dark:border-slate-700 shadow-sm bg-white dark:bg-slate-800 focus:outline-none focus:ring-2 focus:ring-indigo-500">View</a>
    </li>
    <li class="flex items-center justify-between border-b py-4 dark:border-slate-700/50">
      <div class="flex gap-4">
        <img class="w-9 h-9 object-cover rounded-full" src="/img/jokowi.jpg" alt="">
        <div>
          <h6 class="text-sm font-medium text-gray-900 dark:text-slate-200">Atyla Azfa Al Harits</h6>
          <p class="text-sm leading-4 text-slate-500 dark:text-slate-400">@atyla</p>
        </div>
      </div>
      <a href="#" class="px-2.5 py-1 text-xs font-semibold text-gray-900 dark:text-slate-300 rounded-2xl border border-gray-300 dark:border-slate-700 shadow-sm bg-white dark:bg-slate-800 focus:outline-none focus:ring-2 focus:ring-indigo-500">View</a>
    </li>
    <li class="p-2 border-b bg-slate-50 dark:bg-slate-800/50 dark:border-slate-700/50">
      <h6 class="text-sm leading-none font-semibold text-gray-900 dark:text-slate-200">C</h6>
    </li>
    <li class="flex items-center justify-between border-b py-4 dark:border-slate-700/50">
      <div class="flex gap-4">
        <img class="w-9 h-9 object-cover rounded-full" src="/img/jokowi.jpg" alt="">
        <div>
          <h6 class="text-sm font-medium text-gray-900 dark:text-slate-200">Cantika Aurelia April</h6>
          <p class="text-sm leading-4 text-slate-500 dark:text-slate-400">@cantika</p>
        </div>
      </div>
      <a href="#" class="px-2.5 py-1 text-xs font-semibold text-gray-900 dark:text-slate-300 rounded-2xl border border-gray-300 dark:border-slate-700 shadow-sm bg-white dark:bg-slate-800 focus:outline-none focus:ring-2 focus:ring-indigo-500">View</a>
    </li>
    <li class="p-2 border-b bg-slate-50 dark:bg-slate-800/50 dark:border-slate-700/50">
      <h6 class="text-sm leading-none font-semibold text-gray-900 dark:text-slate-200">D</h6>
    </li>
    <li class="flex items-center justify-between border-b py-4 dark:border-slate-700/50">
      <div class="flex gap-4">
        <img class="w-9 h-9 object-cover rounded-full" src="/img/jokowi.jpg" alt="">
        <div>
          <h6 class="text-sm font-medium text-gray-900 dark:text-slate-200">Dea Aprilianti</h6>
          <p class="text-sm leading-4 text-slate-500 dark:text-slate-400">@dea</p>
        </div>
      </div>
      <a href="#" class="px-2.5 py-1 text-xs font-semibold text-gray-900 dark:text-slate-300 rounded-2xl border border-gray-300 dark:border-slate-700 shadow-sm bg-white dark:bg-slate-800 focus:outline-none focus:ring-2 focus:ring-indigo-500">View</a>
    </li>
    <li class="flex items-center justify-between border-b py-4 dark:border-slate-700/50">
      <div class="flex gap-4">
        <img class="w-9 h-9 object-cover rounded-full" src="/img/jokowi.jpg" alt="">
        <div>
          <h6 class="text-sm font-medium text-gray-900 dark:text-slate-200">Delia Aryanti</h6>
          <p class="text-sm leading-4 text-slate-500 dark:text-slate-400">@delia</p>
        </div>
      </div>
      <a href="#" class="px-2.5 py-1 text-xs font-semibold text-gray-900 dark:text-slate-300 rounded-2xl border border-gray-300 dark:border-slate-700 shadow-sm bg-white dark:bg-slate-800 focus:outline-none focus:ring-2 focus:ring-indigo-500">View</a>
    </li>
    <li class="flex items-center justify-between border-b py-4 dark:border-slate-700/50">
      <div class="flex gap-4">
        <img class="w-9 h-9 object-cover rounded-full" src="/img/jokowi.jpg" alt="">
        <div>
          <h6 class="text-sm font-medium text-gray-900 dark:text-slate-200">Dimas Adirawijaya</h6>
          <p class="text-sm leading-4 text-slate-500 dark:text-slate-400">@dimas</p>
        </div>
      </div>
      <a href="#" class="px-2.5 py-1 text-xs font-semibold text-gray-900 dark:text-slate-300 rounded-2xl border border-gray-300 dark:border-slate-700 shadow-sm bg-white dark:bg-slate-800 focus:outline-none focus:ring-2 focus:ring-indigo-500">View</a>
    </li>
    <li class="flex items-center justify-between border-b py-4 dark:border-slate-700/50">
      <div class="flex gap-4">
        <img class="w-9 h-9 object-cover rounded-full" src="/img/jokowi.jpg" alt="">
        <div>
          <h6 class="text-sm font-medium text-gray-900 dark:text-slate-200">Dwi Utami</h6>
          <p class="text-sm leading-4 text-slate-500 dark:text-slate-400">@dwiutami</p>
        </div>
      </div>
      <a href="#" class="px-2.5 py-1 text-xs font-semibold text-gray-900 dark:text-slate-300 rounded-2xl border border-gray-300 dark:border-slate-700 shadow-sm bg-white dark:bg-slate-800 focus:outline-none focus:ring-2 focus:ring-indigo-500">View</a>
    </li>
    <li class="p-2 border-b bg-slate-50 dark:bg-slate-800/50 dark:border-slate-700/50">
      <h6 class="text-sm leading-none font-semibold text-gray-900 dark:text-slate-200">E</h6>
    </li>
    <li class="flex items-center justify-between border-b py-4 dark:border-slate-700/50">
      <div class="flex gap-4">
        <img class="w-9 h-9 object-cover rounded-full" src="/img/jokowi.jpg" alt="">
        <div>
          <h6 class="text-sm font-medium text-gray-900 dark:text-slate-200">Efa Sri Rahayu</h6>
          <p class="text-sm leading-4 text-slate-500 dark:text-slate-400">@efa</p>
        </div>
      </div>
      <a href="#" class="px-2.5 py-1 text-xs font-semibold text-gray-900 dark:text-slate-300 rounded-2xl border border-gray-300 dark:border-slate-700 shadow-sm bg-white dark:bg-slate-800 focus:outline-none focus:ring-2 focus:ring-indigo-500">View</a>
    </li>
    <li class="flex items-center justify-between border-b py-4 dark:border-slate-700/50">
      <div class="flex gap-4">
        <img class="w-9 h-9 object-cover rounded-full" src="/img/jokowi.jpg" alt="">
        <div>
          <h6 class="text-sm font-medium text-gray-900 dark:text-slate-200">Elfan Hari Saputra</h6>
          <p class="text-sm leading-4 text-slate-500 dark:text-slate-400">@elfan</p>
        </div>
      </div>
      <a href="#" class="px-2.5 py-1 text-xs font-semibold text-gray-900 dark:text-slate-300 rounded-2xl border border-gray-300 dark:border-slate-700 shadow-sm bg-white dark:bg-slate-800 focus:outline-none focus:ring-2 focus:ring-indigo-500">View</a>
    </li>
    <li class="p-2 border-b bg-slate-50 dark:bg-slate-800/50 dark:border-slate-700/50">
      <h6 class="text-sm leading-none font-semibold text-gray-900 dark:text-slate-200">F</h6>
    </li>
    <li class="flex items-center justify-between border-b py-4 dark:border-slate-700/50">
      <div class="flex gap-4">
        <img class="w-9 h-9 object-cover rounded-full" src="/img/jokowi.jpg" alt="">
        <div>
          <h6 class="text-sm font-medium text-gray-900 dark:text-slate-200">Fahra Nayla Cahya Dini</h6>
          <p class="text-sm leading-4 text-slate-500 dark:text-slate-400">@fahra</p>
        </div>
      </div>
      <a href="#" class="px-2.5 py-1 text-xs font-semibold text-gray-900 dark:text-slate-300 rounded-2xl border border-gray-300 dark:border-slate-700 shadow-sm bg-white dark:bg-slate-800 focus:outline-none focus:ring-2 focus:ring-indigo-500">View</a>
    </li>
    <li class="p-2 border-b bg-slate-50 dark:bg-slate-800/50 dark:border-slate-700/50">
      <h6 class="text-sm leading-none font-semibold text-gray-900 dark:text-slate-200">I</h6>
    </li>
    <li class="flex items-center justify-between border-b py-4 dark:border-slate-700/50">
      <div class="flex gap-4">
        <img class="w-9 h-9 object-cover rounded-full" src="/img/jokowi.jpg" alt="">
        <div>
          <h6 class="text-sm font-medium text-gray-900 dark:text-slate-200">Irvan Maulana</h6>
          <p class="text-sm leading-4 text-slate-500 dark:text-slate-400">@irvan</p>
        </div>
      </div>
      <a href="#" class="px-2.5 py-1 text-xs font-semibold text-gray-900 dark:text-slate-300 rounded-2xl border border-gray-300 dark:border-slate-700 shadow-sm bg-white dark:bg-slate-800 focus:outline-none focus:ring-2 focus:ring-indigo-500">View</a>
    </li>
    <li class="p-2 border-b bg-slate-50 dark:bg-slate-800/50 dark:border-slate-700/50">
      <h6 class="text-sm leading-none font-semibold text-gray-900 dark:text-slate-200">K</h6>
    </li>
    <li class="flex items-center justify-between border-b py-4 dark:border-slate-700/50">
      <div class="flex gap-4">
        <img class="w-9 h-9 object-cover rounded-full" src="/img/jokowi.jpg" alt="">
        <div>
          <h6 class="text-sm font-medium text-gray-900 dark:text-slate-200">Khairunissa Meyla Agustri</h6>
          <p class="text-sm leading-4 text-slate-500 dark:text-slate-400">@khairunissa</p>
        </div>
      </div>
      <a href="#" class="px-2.5 py-1 text-xs font-semibold text-gray-900 dark:text-slate-300 rounded-2xl border border-gray-300 dark:border-slate-700 shadow-sm bg-white dark:bg-slate-800 focus:outline-none focus:ring-2 focus:ring-indigo-500">View</a>
    </li>
    <li class="flex items-center justify-between border-b py-4 dark:border-slate-700/50">
      <div class="flex gap-4">
        <img class="w-9 h-9 object-cover rounded-full" src="/img/jokowi.jpg" alt="">
        <div>
          <h6 class="text-sm font-medium text-gray-900 dark:text-slate-200">Khikmal Kurniawan</h6>
          <p class="text-sm leading-4 text-slate-500 dark:text-slate-400">@khikmal</p>
        </div>
      </div>
      <a href="#" class="px-2.5 py-1 text-xs font-semibold text-gray-900 dark:text-slate-300 rounded-2xl border border-gray-300 dark:border-slate-700 shadow-sm bg-white dark:bg-slate-800 focus:outline-none focus:ring-2 focus:ring-indigo-500">View</a>
    </li>
    <li class="p-2 border-b bg-slate-50 dark:bg-slate-800/50 dark:border-slate-700/50">
      <h6 class="text-sm leading-none font-semibold text-gray-900 dark:text-slate-200">L</h6>
    </li>
    <li class="flex items-center justify-between border-b py-4 dark:border-slate-700/50">
      <div class="flex gap-4">
        <img class="w-9 h-9 object-cover rounded-full" src="/img/jokowi.jpg" alt="">
        <div>
          <h6 class="text-sm font-medium text-gray-900 dark:text-slate-200">Lidya Nurfadilah</h6>
          <p class="text-sm leading-4 text-slate-500 dark:text-slate-400">@lidya</p>
        </div>
      </div>
      <a href="#" class="px-2.5 py-1 text-xs font-semibold text-gray-900 dark:text-slate-300 rounded-2xl border border-gray-300 dark:border-slate-700 shadow-sm bg-white dark:bg-slate-800 focus:outline-none focus:ring-2 focus:ring-indigo-500">View</a>
    </li>
    <li class="p-2 border-b bg-slate-50 dark:bg-slate-800/50 dark:border-slate-700/50">
      <h6 class="text-sm leading-none font-semibold text-gray-900 dark:text-slate-200">M</h6>
    </li>
    <li class="flex items-center justify-between border-b py-4 dark:border-slate-700/50">
      <div class="flex gap-4">
        <img class="w-9 h-9 object-cover rounded-full" src="/img/jokowi.jpg" alt="">
        <div>
          <h6 class="text-sm font-medium text-gray-900 dark:text-slate-200">Melisa Lestari</h6>
          <p class="text-sm leading-4 text-slate-500 dark:text-slate-400">@melisa</p>
        </div>
      </div>
      <a href="#" class="px-2.5 py-1 text-xs font-semibold text-gray-900 dark:text-slate-300 rounded-2xl border border-gray-300 dark:border-slate-700 shadow-sm bg-white dark:bg-slate-800 focus:outline-none focus:ring-2 focus:ring-indigo-500">View</a>
    </li>
    <li class="p-2 border-b bg-slate-50 dark:bg-slate-800/50 dark:border-slate-700/50">
      <h6 class="text-sm leading-none font-semibold text-gray-900 dark:text-slate-200">P</h6>
    </li>
    <li class="flex items-center justify-between border-b py-4 dark:border-slate-700/50">
      <div class="flex gap-4">
        <img class="w-9 h-9 object-cover rounded-full" src="/img/jokowi.jpg" alt="">
        <div>
          <h6 class="text-sm font-medium text-gray-900 dark:text-slate-200">Putri Nurintan Ayuni</h6>
          <p class="text-sm leading-4 text-slate-500 dark:text-slate-400">@putri</p>
        </div>
      </div>
      <a href="#" class="px-2.5 py-1 text-xs font-semibold text-gray-900 dark:text-slate-300 rounded-2xl border border-gray-300 dark:border-slate-700 shadow-sm bg-white dark:bg-slate-800 focus:outline-none focus:ring-2 focus:ring-indigo-500">View</a>
    </li>
    <li class="p-2 border-b bg-slate-50 dark:bg-slate-800/50 dark:border-slate-700/50">
      <h6 class="text-sm leading-none font-semibold text-gray-900 dark:text-slate-200">R</h6>
    </li>
    <li class="flex items-center justify-between border-b py-4 dark:border-slate-700/50">
      <div class="flex gap-4">
        <img class="w-9 h-9 object-cover rounded-full" src="/img/jokowi.jpg" alt="">
        <div>
          <h6 class="text-sm font-medium text-gray-900 dark:text-slate-200">Rafli Al-Musyafa</h6>
          <p class="text-sm leading-4 text-slate-500 dark:text-slate-400">@rafli</p>
        </div>
      </div>
      <a href="#" class="px-2.5 py-1 text-xs font-semibold text-gray-900 dark:text-slate-300 rounded-2xl border border-gray-300 dark:border-slate-700 shadow-sm bg-white dark:bg-slate-800 focus:outline-none focus:ring-2 focus:ring-indigo-500">View</a>
    </li>
    <li class="flex items-center justify-between border-b py-4 dark:border-slate-700/50">
      <div class="flex gap-4">
        <img class="w-9 h-9 object-cover rounded-full" src="/img/jokowi.jpg" alt="">
        <div>
          <h6 class="text-sm font-medium text-gray-900 dark:text-slate-200">Renal Ajrun Adhim Ramadhan</h6>
          <p class="text-sm leading-4 text-slate-500 dark:text-slate-400">@renal</p>
        </div>
      </div>
      <a href="#" class="px-2.5 py-1 text-xs font-semibold text-gray-900 dark:text-slate-300 rounded-2xl border border-gray-300 dark:border-slate-700 shadow-sm bg-white dark:bg-slate-800 focus:outline-none focus:ring-2 focus:ring-indigo-500">View</a>
    </li>
    <li class="flex items-center justify-between border-b py-4 dark:border-slate-700/50">
      <div class="flex gap-4">
        <img class="w-9 h-9 object-cover rounded-full" src="/img/jokowi.jpg" alt="">
        <div>
          <h6 class="text-sm font-medium text-gray-900 dark:text-slate-200">Rifaul Ni'Mah</h6>
          <p class="text-sm leading-4 text-slate-500 dark:text-slate-400">@rifaul</p>
        </div>
      </div>
      <a href="#" class="px-2.5 py-1 text-xs font-semibold text-gray-900 dark:text-slate-300 rounded-2xl border border-gray-300 dark:border-slate-700 shadow-sm bg-white dark:bg-slate-800 focus:outline-none focus:ring-2 focus:ring-indigo-500">View</a>
    </li>
    <li class="flex items-center justify-between border-b py-4 dark:border-slate-700/50">
      <div class="flex gap-4">
        <img class="w-9 h-9 object-cover rounded-full" src="/img/jokowi.jpg" alt="">
        <div>
          <h6 class="text-sm font-medium text-gray-900 dark:text-slate-200">Riska Fajaryanti</h6>
          <p class="text-sm leading-4 text-slate-500 dark:text-slate-400">@riska</p>
        </div>
      </div>
      <a href="#" class="px-2.5 py-1 text-xs font-semibold text-gray-900 dark:text-slate-300 rounded-2xl border border-gray-300 dark:border-slate-700 shadow-sm bg-white dark:bg-slate-800 focus:outline-none focus:ring-2 focus:ring-indigo-500">View</a>
    </li>
    <li class="p-2 border-b bg-slate-50 dark:bg-slate-800/50 dark:border-slate-700/50">
      <h6 class="text-sm leading-none font-semibold text-gray-900 dark:text-slate-200">S</h6>
    </li>
    <li class="flex items-center justify-between border-b py-4 dark:border-slate-700/50">
      <div class="flex gap-4">
        <img class="w-9 h-9 object-cover rounded-full" src="/img/jokowi.jpg" alt="">
        <div>
          <h6 class="text-sm font-medium text-gray-900 dark:text-slate-200">Santi</h6>
          <p class="text-sm leading-4 text-slate-500 dark:text-slate-400">@santi</p>
        </div>
      </div>
      <a href="#" class="px-2.5 py-1 text-xs font-semibold text-gray-900 dark:text-slate-300 rounded-2xl border border-gray-300 dark:border-slate-700 shadow-sm bg-white dark:bg-slate-800 focus:outline-none focus:ring-2 focus:ring-indigo-500">View</a>
    </li>
    <li class="flex items-center justify-between border-b py-4 dark:border-slate-700/50">
      <div class="flex gap-4">
        <img class="w-9 h-9 object-cover rounded-full" src="/img/jokowi.jpg" alt="">
        <div>
          <h6 class="text-sm font-medium text-gray-900 dark:text-slate-200">Septiani Wijianingsih</h6>
          <p class="text-sm leading-4 text-slate-500 dark:text-slate-400">@septi</p>
        </div>
      </div>
      <a href="#" class="px-2.5 py-1 text-xs font-semibold text-gray-900 dark:text-slate-300 rounded-2xl border border-gray-300 dark:border-slate-700 shadow-sm bg-white dark:bg-slate-800 focus:outline-none focus:ring-2 focus:ring-indigo-500">View</a>
    </li>
    <li class="flex items-center justify-between border-b py-4 dark:border-slate-700/50">
      <div class="flex gap-4">
        <img class="w-9 h-9 object-cover rounded-full" src="/img/jokowi.jpg" alt="">
        <div>
          <h6 class="text-sm font-medium text-gray-900 dark:text-slate-200">Siti Fatimatuz Zahro</h6>
          <p class="text-sm leading-4 text-slate-500 dark:text-slate-400">@zahro</p>
        </div>
      </div>
      <a href="#" class="px-2.5 py-1 text-xs font-semibold text-gray-900 dark:text-slate-300 rounded-2xl border border-gray-300 dark:border-slate-700 shadow-sm bg-white dark:bg-slate-800 focus:outline-none focus:ring-2 focus:ring-indigo-500">View</a>
    </li>
    <li class="flex items-center justify-between border-b py-4 dark:border-slate-700/50">
      <div class="flex gap-4">
        <img class="w-9 h-9 object-cover rounded-full" src="/img/jokowi.jpg" alt="">
        <div>
          <h6 class="text-sm font-medium text-gray-900 dark:text-slate-200">Siti Latifah</h6>
          <p class="text-sm leading-4 text-slate-500 dark:text-slate-400">@latifah</p>
        </div>
      </div>
      <a href="#" class="px-2.5 py-1 text-xs font-semibold text-gray-900 dark:text-slate-300 rounded-2xl border border-gray-300 dark:border-slate-700 shadow-sm bg-white dark:bg-slate-800 focus:outline-none focus:ring-2 focus:ring-indigo-500">View</a>
    </li>
    <li class="flex items-center justify-between border-b py-4 dark:border-slate-700/50">
      <div class="flex gap-4">
        <img class="w-9 h-9 object-cover rounded-full" src="/img/jokowi.jpg" alt="">
        <div>
          <h6 class="text-sm font-medium text-gray-900 dark:text-slate-200">Surti Yani</h6>
          <p class="text-sm leading-4 text-slate-500 dark:text-slate-400">@surtiyani</p>
        </div>
      </div>
      <a href="#" class="px-2.5 py-1 text-xs font-semibold text-gray-900 dark:text-slate-300 rounded-2xl border border-gray-300 dark:border-slate-700 shadow-sm bg-white dark:bg-slate-800 focus:outline-none focus:ring-2 focus:ring-indigo-500">View</a>
    </li>
    <li class="p-2 border-b bg-slate-50 dark:bg-slate-800/50 dark:border-slate-700/50">
      <h6 class="text-sm leading-none font-semibold text-gray-900 dark:text-slate-200">T</h6>
    </li>
    <li class="flex items-center justify-between border-b py-4 dark:border-slate-700/50">
      <div class="flex gap-4">
        <img class="w-9 h-9 object-cover rounded-full" src="/img/jokowi.jpg" alt="">
        <div>
          <h6 class="text-sm font-medium text-gray-900 dark:text-slate-200">Teguh Afriansyah</h6>
          <p class="text-sm leading-4 text-slate-500 dark:text-slate-400">@teguh</p>
        </div>
      </div>
      <a href="#" class="px-2.5 py-1 text-xs font-semibold text-gray-900 dark:text-slate-300 rounded-2xl border border-gray-300 dark:border-slate-700 shadow-sm bg-white dark:bg-slate-800 focus:outline-none focus:ring-2 focus:ring-indigo-500">View</a>
    </li>
    <li class="flex items-center justify-between border-b py-4 dark:border-slate-700/50">
      <div class="flex gap-4">
        <img class="w-9 h-9 object-cover rounded-full" src="/img/jokowi.jpg" alt="">
        <div>
          <h6 class="text-sm font-medium text-gray-900 dark:text-slate-200">Tri Yuliyani</h6>
          <p class="text-sm leading-4 text-slate-500 dark:text-slate-400">@tri</p>
        </div>
      </div>
      <a href="#" class="px-2.5 py-1 text-xs font-semibold text-gray-900 dark:text-slate-300 rounded-2xl border border-gray-300 dark:border-slate-700 shadow-sm bg-white dark:bg-slate-800 focus:outline-none focus:ring-2 focus:ring-indigo-500">View</a>
    </li>
    <li class="flex items-center justify-between border-b py-4 dark:border-slate-700/50">
      <div class="flex gap-4">
        <img class="w-9 h-9 object-cover rounded-full" src="/img/jokowi.jpg" alt="">
        <div>
          <h6 class="text-sm font-medium text-gray-900 dark:text-slate-200">Trio Adi Permana</h6>
          <p class="text-sm leading-4 text-slate-500 dark:text-slate-400">@trio</p>
        </div>
      </div>
      <a href="#" class="px-2.5 py-1 text-xs font-semibold text-gray-900 dark:text-slate-300 rounded-2xl border border-gray-300 dark:border-slate-700 shadow-sm bg-white dark:bg-slate-800 focus:outline-none focus:ring-2 focus:ring-indigo-500">View</a>
    </li>
    <li class="p-2 border-b bg-slate-50 dark:bg-slate-800/50 dark:border-slate-700/50">
      <h6 class="text-sm leading-none font-semibold text-gray-900 dark:text-slate-200">Y</h6>
    </li>
    <li class="flex items-center justify-between border-b py-4 dark:border-slate-700/50">
      <div class="flex gap-4">
        <img class="w-9 h-9 object-cover rounded-full" src="/img/jokowi.jpg" alt="">
        <div>
          <h6 class="text-sm font-medium text-gray-900 dark:text-slate-200">Yuni Arzeti</h6>
          <p class="text-sm leading-4 text-slate-500 dark:text-slate-400">@yuni</p>
        </div>
      </div>
      <a href="#" class="px-2.5 py-1 text-xs font-semibold text-gray-900 dark:text-slate-300 rounded-2xl border border-gray-300 dark:border-slate-700 shadow-sm bg-white dark:bg-slate-800 focus:outline-none focus:ring-2 focus:ring-indigo-500">View</a>
    </li>
    <li class="p-2 border-b bg-slate-50 dark:bg-slate-800/50 dark:border-slate-700/50">
      <h6 class="text-sm leading-none font-semibold text-gray-900 dark:text-slate-200">Z</h6>
    </li>
    <li class="flex items-center justify-between py-4">
      <div class="flex gap-4">
        <img class="w-9 h-9 object-cover rounded-full" src="/img/jokowi.jpg" alt="">
        <div>
          <h6 class="text-sm font-medium text-gray-900 dark:text-slate-200">Zaskia Kurnia Asih</h6>
          <p class="text-sm leading-4 text-slate-500 dark:text-slate-400">@zaskia</p>
        </div>
      </div>
      <a href="#" class="px-2.5 py-1 text-xs font-semibold text-gray-900 dark:text-slate-300 rounded-2xl border border-gray-300 dark:border-slate-700 shadow-sm bg-white dark:bg-slate-800 focus:outline-none focus:ring-2 focus:ring-indigo-500">View</a>
    </li>
  </ul>
</div>
<footer class="max-w-6xl mx-auto px-4 md:px-14 lg:px-5 border-t dark:border-slate-800">
  <div class="flex items-center justify-between gap-x-3">
    <small class="dark:text-slate-400">&copy; 2023 RPL 1 Developer TEAM | SMKN 3 Banjar</small>
    <div class="flex items-center space-x-5 text-slate-500 dark:text-slate-300 justify-center py-9">
      <a href="#">
        <svg class="w-6 h-6" class="" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path fill-rule="evenodd" d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z" clip-rule="evenodd" /></svg>
      </a>
      <a href="#">
        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path fill-rule="evenodd" d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z" clip-rule="evenodd" /></svg>
      </a>
    </div>
  </div>
</footer>
@endsection