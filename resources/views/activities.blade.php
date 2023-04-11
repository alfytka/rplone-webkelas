@extends('partials.new')
@section('content')
<div class="content isolate bg-white pb-24 pt-24 sm:py-32 dark:bg-slate-900">
  <div class="absolute inset-0 -z-10 overflow-hidden">
    <svg class="absolute left-[max(50%,25rem)] top-0 h-[64rem] w-[128rem] -translate-x-1/2 stroke-gray-200 dark:stroke-slate-800 [mask-image:radial-gradient(64rem_64rem_at_top,white,transparent)]" aria-hidden="true">
      <defs>
        <pattern id="e813992c-7d03-4cc4-a2bd-151760b470a0" width="200" height="200" x="50%" y="-1" patternUnits="userSpaceOnUse">
          <path d="M100 200V.5M.5 .5H200" fill="none" />
        </pattern>
      </defs>
      <svg x="50%" y="-1" class="overflow-visible fill-white dark:fill-slate-800">
        <path d="M-100.5 0h201v201h-201Z M699.5 0h201v201h-201Z M499.5 400h201v201h-201Z M-300.5 600h201v201h-201Z" stroke-width="0" />
      </svg>
      <rect width="100%" height="100%" stroke-width="0" fill="url(#e813992c-7d03-4cc4-a2bd-151760b470a0)" />
    </svg>
  </div>
  <div class="mx-auto max-w-5xl px-4 pt-3 pb-5 md:px-8 lg:px-16 flex items-center justify-between">
    <div class="block gap-y-10">
      <h4 class="text-2xl pb-1 sm:text-3xl font-semibold tracking-tight text-indigo-500/80 dark:text-indigo-500/70">Activitas Gueh</h4>
      <span class="text-sm sm:text-base font-normal text-slate-800 dark:text-slate-200/50">Kegiatan sekolah, random, prestasi dan many things</span>
    </div>
    <div class="hidden sm:flex">
      <svg class="w-10 h-10 text-indigo-500 dark:text-indigo-500/50" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" d="M10.34 15.84c-.688-.06-1.386-.09-2.09-.09H7.5a4.5 4.5 0 110-9h.75c.704 0 1.402-.03 2.09-.09m0 9.18c.253.962.584 1.892.985 2.783.247.55.06 1.21-.463 1.511l-.657.38c-.551.318-1.26.117-1.527-.461a20.845 20.845 0 01-1.44-4.282m3.102.069a18.03 18.03 0 01-.59-4.59c0-1.586.205-3.124.59-4.59m0 9.18a23.848 23.848 0 018.835 2.535M10.34 6.66a23.847 23.847 0 008.835-2.535m0 0A23.74 23.74 0 0018.795 3m.38 1.125a23.91 23.91 0 011.014 5.395m-1.014 8.855c-.118.38-.245.754-.38 1.125m.38-1.125a23.91 23.91 0 001.014-5.395m0-3.46c.495.413.811 1.035.811 1.73 0 .695-.316 1.317-.811 1.73m0-3.46a24.347 24.347 0 010 3.46" />
      </svg>
    </div>
  </div>
  <div class="mx-auto max-w-5xl px-4 pt-3 md:px-8 lg:px-16 space-y-12 sm:space-y-16">
    <article class="block sm:flex gap-x-8">
      <div class="sm:min-w-[230px] md:min-w-[255px]">
        <img class="w-full sm:max-w-lg object-cover max-h-56 sm:max-h-full md:min-h-[240px] lg:min-h-[255px] rounded-xl sm:rounded-2xl border border-slate-300 dark:border-slate-600" src="/img/img2.jpg" alt="">
      </div>
      <div>
        <div class="flex items-center gap-x-4 pt-3 sm:pt-0 text-xs">
          <time datetime="2020-03-16" class="text-gray-500 dark:text-slate-400">Mar 13, 2023</time>
          <a href="#" class="relative rounded-full bg-gray-50 dark:bg-slate-700 px-3 py-1.5 font-medium text-gray-600 dark:text-slate-200 hover:bg-gray-100">Ujian Sekolah</a>
        </div>
        <div class="group sm:border-b sm:dark:border-slate-700 pb-4 sm:pb-6">
          <h3 class="mt-1 md:mt-3 text-lg font-semibold leading-6 text-gray-900 dark:text-slate-300 group-hover:text-gray-600 dark:group-hover:text-slate-200">
            <a href="#">
              <span class="inset-0"></span>
              UKK RPL 2023 Sukses dilaksanakan!
            </a>
          </h3>
          <p class="mt-3 md:mt-5 text-sm leading-6 text-gray-600 dark:text-slate-300">Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat molestias at et impedit labore culpa aliquid tenetur, expedita rem consequatur. Vitae at saepe voluptate odio eos accusantium rerum temporibus minus possimus est earum dicta sed, repellat. <a class="font-semibold text-gray-900 dark:text-slate-400" href="#">...more</a></p>
        </div>
        <div class="flex gap-2 sm:pt-4 items-center">
          <svg class="w-8 h-8 text-indigo-700 dark:text-indigo-500" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" d="M17.982 18.725A7.488 7.488 0 0012 15.75a7.488 7.488 0 00-5.982 2.975m11.963 0a9 9 0 10-11.963 0m11.963 0A8.966 8.966 0 0112 21a8.966 8.966 0 01-5.982-2.275M15 9.75a3 3 0 11-6 0 3 3 0 016 0z"></path>
          </svg>
          <div>
            <h6 class="select-none text-sm font-medium text-gray-900 dark:text-slate-200">Written by RPL TEAM</h6>
          </div>
        </div>
      </div>
    </article>
    <article class="block sm:flex gap-x-8">
      <div class="sm:min-w-[230px] md:min-w-[255px]">
        <img class="w-full sm:max-w-lg object-cover max-h-56 sm:max-h-full md:min-h-[240px] lg:min-h-[255px] rounded-xl sm:rounded-2xl border border-slate-300 dark:border-slate-600" src="/img/img10.jpg" alt="">
      </div>
      <div>
        <div class="flex items-center gap-x-4 pt-3 sm:pt-0 text-xs">
          <time datetime="2020-03-16" class="text-gray-500 dark:text-slate-400">Feb 21, 2023</time>
          <a href="#" class="relative rounded-full bg-gray-50 dark:bg-slate-700 px-3 py-1.5 font-medium text-gray-600 dark:text-slate-200 hover:bg-gray-100">Kegiatan Sekolah</a>
        </div>
        <div class="group sm:border-b sm:dark:border-slate-700 pb-4 sm:pb-6">
          <h3 class="mt-1 md:mt-3 text-lg font-semibold leading-6 text-gray-900 dark:text-slate-300 group-hover:text-gray-600 dark:group-hover:text-slate-200">
            <a href="#">
              <span class="inset-0"></span>
              RPL Syar'i
            </a>
          </h3>
          <p class="mt-3 md:mt-5 text-sm leading-6 text-gray-600 dark:text-slate-300">Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat molestias at et impedit labore culpa aliquid tenetur, expedita rem consequatur. Vitae at saepe voluptate odio eos accusantium rerum temporibus minus possimus est earum dicta sed, repellat. <a class="font-semibold text-gray-900 dark:text-slate-400" href="#">...more</a></p>
        </div>
        <div class="flex gap-2 sm:pt-4 items-center">
          <svg class="w-8 h-8 text-indigo-700 dark:text-indigo-500" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" d="M17.982 18.725A7.488 7.488 0 0012 15.75a7.488 7.488 0 00-5.982 2.975m11.963 0a9 9 0 10-11.963 0m11.963 0A8.966 8.966 0 0112 21a8.966 8.966 0 01-5.982-2.275M15 9.75a3 3 0 11-6 0 3 3 0 016 0z"></path>
          </svg>
          <div>
            <h6 class="select-none text-sm font-medium text-gray-900 dark:text-slate-200">Written by RPL TEAM</h6>
          </div>
        </div>
      </div>
    </article>
    <article class="block sm:flex gap-x-8">
      <div class="sm:min-w-[230px] md:min-w-[255px]">
        <img class="w-full sm:max-w-lg object-cover max-h-56 sm:max-h-full md:min-h-[240px] lg:min-h-[255px] rounded-xl sm:rounded-2xl border border-slate-300 dark:border-slate-600" src="/img/img11.jpg" alt="">
      </div>
      <div>
        <div class="flex items-center gap-x-4 pt-3 sm:pt-0 text-xs">
          <time datetime="2020-03-16" class="text-gray-500 dark:text-slate-400">Jan 10, 2023</time>
          <a href="#" class="relative rounded-full bg-gray-50 dark:bg-slate-700 px-3 py-1.5 font-medium text-gray-600 dark:text-slate-200 hover:bg-gray-100">Kegiatan Random</a>
        </div>
        <div class="group sm:border-b sm:dark:border-slate-700 pb-4 sm:pb-6">
          <h3 class="mt-1 md:mt-3 text-lg font-semibold leading-6 text-gray-900 dark:text-slate-300 group-hover:text-gray-600 dark:group-hover:text-slate-200">
            <a href="#">
              <span class="inset-0"></span>
              Awal Tahun 2023! Happy New Year &#x1F973;
            </a>
          </h3>
          <p class="mt-3 md:mt-5 text-sm leading-6 text-gray-600 dark:text-slate-300">Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat molestias at et impedit labore culpa aliquid tenetur, expedita rem consequatur. Vitae at saepe voluptate odio eos accusantium rerum temporibus minus possimus est earum dicta sed, repellat. <a class="font-semibold text-gray-900 dark:text-slate-400" href="#">...more</a></p>
        </div>
        <div class="flex gap-2 sm:pt-4 items-center">
          <svg class="w-8 h-8 text-indigo-700 dark:text-indigo-500" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" d="M17.982 18.725A7.488 7.488 0 0012 15.75a7.488 7.488 0 00-5.982 2.975m11.963 0a9 9 0 10-11.963 0m11.963 0A8.966 8.966 0 0112 21a8.966 8.966 0 01-5.982-2.275M15 9.75a3 3 0 11-6 0 3 3 0 016 0z"></path>
          </svg>
          <div>
            <h6 class="select-none text-sm font-medium text-gray-900 dark:text-slate-200">Written by RPL TEAM</h6>
          </div>
        </div>
      </div>
    </article>
    <article class="block sm:flex gap-x-8">
      <div class="sm:min-w-[230px] md:min-w-[255px]">
        <img class="w-full sm:max-w-lg object-cover max-h-56 sm:max-h-full md:min-h-[240px] lg:min-h-[255px] rounded-xl sm:rounded-2xl border border-slate-300 dark:border-slate-600" src="/img/img3.jpg" alt="">
      </div>
      <div>
        <div class="flex items-center gap-x-4 pt-3 sm:pt-0 text-xs">
          <time datetime="2020-03-16" class="text-gray-500 dark:text-slate-400">Dec 23, 2022</time>
          <a href="#" class="relative rounded-full bg-gray-50 dark:bg-slate-700 px-3 py-1.5 font-medium text-gray-600 dark:text-slate-200 hover:bg-gray-100">Prestasi</a>
        </div>
        <div class="group sm:border-b sm:dark:border-slate-700 pb-4 sm:pb-6">
          <h3 class="mt-1 md:mt-3 text-lg font-semibold leading-6 text-gray-900 dark:text-slate-300 group-hover:text-gray-600 dark:group-hover:text-slate-200">
            <a href="#">
              <span class="inset-0"></span>
              Siswa Berprestasi! Kenali Teman Kita Satu ini, Renal
            </a>
          </h3>
          <p class="mt-3 md:mt-5 text-sm leading-6 text-gray-600 dark:text-slate-300">Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat molestias at et impedit labore culpa aliquid tenetur, expedita rem consequatur. Vitae at saepe voluptate odio eos accusantium rerum temporibus minus possimus est earum dicta sed, repellat. <a class="font-semibold text-gray-900 dark:text-slate-400" href="#">...more</a></p>
        </div>
        <div class="flex gap-2 sm:pt-4 items-center">
          <svg class="w-8 h-8 text-indigo-700 dark:text-indigo-500" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" d="M17.982 18.725A7.488 7.488 0 0012 15.75a7.488 7.488 0 00-5.982 2.975m11.963 0a9 9 0 10-11.963 0m11.963 0A8.966 8.966 0 0112 21a8.966 8.966 0 01-5.982-2.275M15 9.75a3 3 0 11-6 0 3 3 0 016 0z"></path>
          </svg>
          <div>
            <h6 class="select-none text-sm font-medium text-gray-900 dark:text-slate-200">Written by RPL TEAM</h6>
          </div>
        </div>
      </div>
    </article>
    <article class="block sm:flex gap-x-8">
      <div class="sm:min-w-[230px] md:min-w-[255px]">
        <img class="w-full sm:max-w-lg object-cover max-h-56 sm:max-h-full md:min-h-[240px] lg:min-h-[255px] rounded-xl sm:rounded-2xl border border-slate-300 dark:border-slate-600" src="/img/img12.jpg" alt="">
      </div>
      <div>
        <div class="flex items-center gap-x-4 pt-3 sm:pt-0 text-xs">
          <time datetime="2020-03-16" class="text-gray-500 dark:text-slate-400">Nov 28, 2022</time>
          <a href="#" class="relative rounded-full bg-gray-50 dark:bg-slate-700 px-3 py-1.5 font-medium text-gray-600 dark:text-slate-200 hover:bg-gray-100">Kegiatan Sekolah</a>
        </div>
        <div class="group sm:border-b sm:dark:border-slate-700 pb-4 sm:pb-6">
          <h3 class="mt-1 md:mt-3 text-lg font-semibold leading-6 text-gray-900 dark:text-slate-300 group-hover:text-gray-600 dark:group-hover:text-slate-200">
            <a href="#">
              <span class="inset-0"></span>
              Memperingati Hari Guru. Khususnya Pa Maman
            </a>
          </h3>
          <p class="mt-3 md:mt-5 text-sm leading-6 text-gray-600 dark:text-slate-300">Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat molestias at et impedit labore culpa aliquid tenetur, expedita rem consequatur. Vitae at saepe voluptate odio eos accusantium rerum temporibus minus possimus est earum dicta sed, repellat. <a class="font-semibold text-gray-900 dark:text-slate-400" href="#">...more</a></p>
        </div>
        <div class="flex gap-2 sm:pt-4 items-center">
          <svg class="w-8 h-8 text-indigo-700 dark:text-indigo-500" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" d="M17.982 18.725A7.488 7.488 0 0012 15.75a7.488 7.488 0 00-5.982 2.975m11.963 0a9 9 0 10-11.963 0m11.963 0A8.966 8.966 0 0112 21a8.966 8.966 0 01-5.982-2.275M15 9.75a3 3 0 11-6 0 3 3 0 016 0z"></path>
          </svg>
          <div>
            <h6 class="select-none text-sm font-medium text-gray-900 dark:text-slate-200">Written by RPL TEAM</h6>
          </div>
        </div>
      </div>
    </article>
    <article class="block sm:flex gap-x-8">
      <div class="sm:min-w-[230px] md:min-w-[255px]">
        <img class="w-full sm:max-w-lg object-cover min-h-[14rem] sm:max-h-full md:min-h-[240px] lg:min-h-[255px] rounded-xl sm:rounded-2xl border border-slate-300 dark:border-slate-600" src="/img/img4.jpg" alt="">
      </div>
      <div>
        <div class="flex items-center gap-x-4 pt-3  sm:pt-0 text-xs">
          <time datetime="2020-03-16" class="text-gray-500 dark:text-slate-400">Oct 27, 2022</time>
          <a href="#" class="relative rounded-full bg-gray-50 dark:bg-slate-700 px-3 py-1.5 font-medium text-gray-600 dark:text-slate-200 hover:bg-gray-100">Kunjungan Industri</a>
        </div>
        <div class="group sm:border-b sm:dark:border-slate-700 pb-4 sm:pb-6">
          <h3 class="mt-1 md:mt-3 text-lg font-semibold leading-6 text-gray-900 dark:text-slate-300 group-hover:text-gray-600 dark:group-hover:text-slate-200">
            <a href="#">
              <span class="inset-0"></span>
              Kunjungan Industri ke Cimahi Techno Park & Telkom University
            </a>
          </h3>
          <p class="mt-3 md:mt-5 text-sm leading-6 text-gray-600 dark:text-slate-300">Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat molestias at et impedit labore culpa aliquid tenetur, expedita rem consequatur. Vitae at saepe voluptate odio eos accusantium rerum temporibus minus possimus est earum dicta sed, repellat. <a class="font-semibold text-gray-900 dark:text-slate-400" href="#">...more</a></p>
        </div>
        <div class="flex gap-2 sm:pt-4 items-center">
          <svg class="w-8 h-8 text-indigo-700 dark:text-indigo-500" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" d="M17.982 18.725A7.488 7.488 0 0012 15.75a7.488 7.488 0 00-5.982 2.975m11.963 0a9 9 0 10-11.963 0m11.963 0A8.966 8.966 0 0112 21a8.966 8.966 0 01-5.982-2.275M15 9.75a3 3 0 11-6 0 3 3 0 016 0z"></path>
          </svg>
          <div>
            <h6 class="select-none text-sm font-medium text-gray-900 dark:text-slate-200">Written by RPL TEAM</h6>
          </div>
        </div>
      </div>
    </article>
    <article class="block sm:flex gap-x-8">
      <div class="sm:min-w-[230px] md:min-w-[255px]">
        <img class="w-full sm:max-w-lg object-cover min-h-[14rem] sm:max-h-full md:min-h-[240px] lg:min-h-[255px] rounded-xl sm:rounded-2xl border border-slate-300 dark:border-slate-600" src="/img/img5.jpg" alt="">
      </div>
      <div>
        <div class="flex items-center gap-x-4 pt-3  sm:pt-0 text-xs">
          <time datetime="2020-03-16" class="text-gray-500 dark:text-slate-400">Sep 23, 2022</time>
          <a href="#" class="relative rounded-full bg-gray-50 dark:bg-slate-700 px-3 py-1.5 font-medium text-gray-600 dark:text-slate-200 hover:bg-gray-100">Kegiatan Sekolah</a>
        </div>
        <div class="group sm:border-b sm:dark:border-slate-700 pb-4 sm:pb-6">
          <h3 class="mt-1 md:mt-3 text-lg font-semibold leading-6 text-gray-900 dark:text-slate-300 group-hover:text-gray-600 dark:group-hover:text-slate-200">
            <a href="#">
              <span class="inset-0"></span>
              Selalu Mengingat Tuhan dengan Cara Beribadah
            </a>
          </h3>
          <p class="mt-3 md:mt-5 text-sm leading-6 text-gray-600 dark:text-slate-300">Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat molestias at et impedit labore culpa aliquid tenetur, expedita rem consequatur. Vitae at saepe voluptate odio eos accusantium rerum temporibus minus possimus est earum dicta sed, repellat. <a class="font-semibold text-gray-900 dark:text-slate-400" href="#">...more</a></p>
        </div>
        <div class="flex gap-2 sm:pt-4 items-center">
          <svg class="w-8 h-8 text-indigo-700 dark:text-indigo-500" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" d="M17.982 18.725A7.488 7.488 0 0012 15.75a7.488 7.488 0 00-5.982 2.975m11.963 0a9 9 0 10-11.963 0m11.963 0A8.966 8.966 0 0112 21a8.966 8.966 0 01-5.982-2.275M15 9.75a3 3 0 11-6 0 3 3 0 016 0z"></path>
          </svg>
          <div>
            <h6 class="select-none text-sm font-medium text-gray-900 dark:text-slate-200">Written by RPL TEAM</h6>
          </div>
        </div>
      </div>
    </article>
    <article class="block sm:flex gap-x-8">
      <div class="sm:min-w-[230px] md:min-w-[255px]">
        <img class="w-full sm:max-w-lg object-cover h-[14rem] sm:max-h-full md:min-h-[240px] lg:min-h-[255px] rounded-xl sm:rounded-2xl border border-slate-300 dark:border-slate-600" src="/img/img13.jpg" alt="">
      </div>
      <div>
        <div class="flex items-center gap-x-4 pt-3  sm:pt-0 text-xs">
          <time datetime="2020-03-16" class="text-gray-500 dark:text-slate-400">Sep 9, 2022</time>
          <a href="#" class="relative rounded-full bg-gray-50 dark:bg-slate-700 px-3 py-1.5 font-medium text-gray-600 dark:text-slate-200 hover:bg-gray-100">Kegiatan Random</a>
        </div>
        <div class="group sm:border-b sm:dark:border-slate-700 pb-4 sm:pb-6">
          <h3 class="mt-1 md:mt-3 text-lg font-semibold leading-6 text-gray-900 dark:text-slate-300 group-hover:text-gray-600 dark:group-hover:text-slate-200">
            <a href="#">
              <span class="inset-0"></span>
              Gabut Teu Ka Tulung
            </a>
          </h3>
          <p class="mt-3 md:mt-5 text-sm leading-6 text-gray-600 dark:text-slate-300">Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat molestias at et impedit labore culpa aliquid tenetur, expedita rem consequatur. Vitae at saepe voluptate odio eos accusantium rerum temporibus minus possimus est earum dicta sed, repellat. <a class="font-semibold text-gray-900 dark:text-slate-400" href="#">...more</a></p>
        </div>
        <div class="flex gap-2 sm:pt-4 items-center">
          <svg class="w-8 h-8 text-indigo-700 dark:text-indigo-500" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" d="M17.982 18.725A7.488 7.488 0 0012 15.75a7.488 7.488 0 00-5.982 2.975m11.963 0a9 9 0 10-11.963 0m11.963 0A8.966 8.966 0 0112 21a8.966 8.966 0 01-5.982-2.275M15 9.75a3 3 0 11-6 0 3 3 0 016 0z"></path>
          </svg>
          <div>
            <h6 class="select-none text-sm font-medium text-gray-900 dark:text-slate-200">Written by RPL TEAM</h6>
          </div>
        </div>
      </div>
    </article>
    <article class="block sm:flex gap-x-8">
      <div class="sm:min-w-[230px] md:min-w-[255px]">
        <img class="w-full sm:max-w-lg object-cover h-[14rem] sm:max-h-full md:min-h-[240px] lg:min-h-[255px] rounded-xl sm:rounded-2xl border border-slate-300 dark:border-slate-600" src="/img/img6.jpg" alt="">
      </div>
      <div>
        <div class="flex items-center gap-x-4 pt-3 sm:pt-0 text-xs">
          <time datetime="2020-03-16" class="text-gray-500 dark:text-slate-400">Aug 19, 2022</time>
          <a href="#" class="relative rounded-full bg-gray-50 dark:bg-slate-700 px-3 py-1.5 font-medium text-gray-600 dark:text-slate-200 hover:bg-gray-100">Kegiatan Sekolah</a>
        </div>
        <div class="group sm:border-b sm:dark:border-slate-700 pb-4 sm:pb-6">
          <h3 class="mt-1 md:mt-3 text-lg font-semibold leading-6 text-gray-900 dark:text-slate-300 group-hover:text-gray-600 dark:group-hover:text-slate-200">
            <a href="#">
              <span class="inset-0"></span>
              Ajang Perlombaan Fashion Show
            </a>
          </h3>
          <p class="mt-3 md:mt-5 text-sm leading-6 text-gray-600 dark:text-slate-300">Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat molestias at et impedit labore culpa aliquid tenetur, expedita rem consequatur. Vitae at saepe voluptate odio eos accusantium rerum temporibus minus possimus est earum dicta sed, repellat. <a class="font-semibold text-gray-900 dark:text-slate-400" href="#">...more</a></p>
        </div>
        <div class="flex gap-2 sm:pt-4 items-center">
          <svg class="w-8 h-8 text-indigo-700 dark:text-indigo-500" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" d="M17.982 18.725A7.488 7.488 0 0012 15.75a7.488 7.488 0 00-5.982 2.975m11.963 0a9 9 0 10-11.963 0m11.963 0A8.966 8.966 0 0112 21a8.966 8.966 0 01-5.982-2.275M15 9.75a3 3 0 11-6 0 3 3 0 016 0z"></path>
          </svg>
          <div>
            <h6 class="select-none text-sm font-medium text-gray-900 dark:text-slate-200">Written by RPL TEAM</h6>
          </div>
        </div>
      </div>
    </article>
    <article class="block sm:flex gap-x-8">
      <div class="sm:min-w-[230px] md:min-w-[255px]">
        <img class="w-full sm:max-w-lg object-cover max-h-56 sm:max-h-full md:min-h-[240px] lg:min-h-[255px] rounded-xl sm:rounded-2xl border border-slate-300 dark:border-slate-600" src="/img/img7.jpg" alt="">
      </div>
      <div>
        <div class="flex items-center gap-x-4 pt-3 sm:pt-0 text-xs">
          <time datetime="2020-03-16" class="text-gray-500 dark:text-slate-400">Aug 18, 2022</time>
          <a href="#" class="relative rounded-full bg-gray-50 dark:bg-slate-700 px-3 py-1.5 font-medium text-gray-600 dark:text-slate-200 hover:bg-gray-100">Kegiatan Sekolah</a>
        </div>
        <div class="group sm:border-b sm:dark:border-slate-700 pb-4 sm:pb-6">
          <h3 class="mt-1 md:mt-3 text-lg font-semibold leading-6 text-gray-900 dark:text-slate-300 group-hover:text-gray-600 dark:group-hover:text-slate-200">
            <a href="#">
              <span class="inset-0"></span>
              Khikmal! Siswa RPL yang Berhasil Mendapat Hadiah Door Prize
            </a>
          </h3>
          <p class="mt-3 md:mt-5 text-sm leading-6 text-gray-600 dark:text-slate-300">Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat molestias at et impedit labore culpa aliquid tenetur, expedita rem consequatur. Vitae at saepe voluptate odio eos accusantium rerum temporibus minus possimus est earum dicta sed, repellat. <a class="font-semibold text-gray-900 dark:text-slate-400" href="#">...more</a></p>
        </div>
        <div class="flex gap-2 sm:pt-4 items-center">
          <svg class="w-8 h-8 text-indigo-700 dark:text-indigo-500" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" d="M17.982 18.725A7.488 7.488 0 0012 15.75a7.488 7.488 0 00-5.982 2.975m11.963 0a9 9 0 10-11.963 0m11.963 0A8.966 8.966 0 0112 21a8.966 8.966 0 01-5.982-2.275M15 9.75a3 3 0 11-6 0 3 3 0 016 0z"></path>
          </svg>
          <div>
            <h6 class="select-none text-sm font-medium text-gray-900 dark:text-slate-200">Written by RPL TEAM</h6>
          </div>
        </div>
      </div>
    </article>
    <article class="block sm:flex gap-x-8">
      <div class="sm:min-w-[230px] md:min-w-[255px]">
        <img class="w-full sm:max-w-lg object-cover h-[14rem] sm:max-h-full md:min-h-[240px] lg:min-h-[255px] rounded-xl sm:rounded-2xl border border-slate-300 dark:border-slate-600" src="/img/img8.jpg" alt="">
      </div>
      <div>
        <div class="flex items-center gap-x-4 pt-3 sm:pt-0 text-xs">
          <time datetime="2020-03-16" class="text-gray-500 dark:text-slate-400">Sep 13, 2022</time>
          <a href="#" class="relative rounded-full bg-gray-50 dark:bg-slate-700 px-3 py-1.5 font-medium text-gray-600 dark:text-slate-200 hover:bg-gray-100">Kegiatan Random</a>
        </div>
        <div class="group sm:border-b sm:dark:border-slate-700 pb-4 sm:pb-6">
          <h3 class="mt-1 md:mt-3 text-lg font-semibold leading-6 text-gray-900 dark:text-slate-300 group-hover:text-gray-600 dark:group-hover:text-slate-200">
            <a href="#">
              <span class="inset-0"></span>
              Rafli Mengakui Kekalahan
            </a>
          </h3>
          <p class="mt-3 md:mt-5 text-sm leading-6 text-gray-600 dark:text-slate-300">Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat molestias at et impedit labore culpa aliquid tenetur, expedita rem consequatur. Vitae at saepe voluptate odio eos accusantium rerum temporibus minus possimus est earum dicta sed, repellat. <a class="font-semibold text-gray-900 dark:text-slate-400" href="#">...more</a></p>
        </div>
        <div class="flex gap-2 sm:pt-4 items-center">
          <svg class="w-8 h-8 text-indigo-700 dark:text-indigo-500" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" d="M17.982 18.725A7.488 7.488 0 0012 15.75a7.488 7.488 0 00-5.982 2.975m11.963 0a9 9 0 10-11.963 0m11.963 0A8.966 8.966 0 0112 21a8.966 8.966 0 01-5.982-2.275M15 9.75a3 3 0 11-6 0 3 3 0 016 0z"></path>
          </svg>
          <div>
            <h6 class="select-none text-sm font-medium text-gray-900 dark:text-slate-200">Written by RPL TEAM</h6>
          </div>
        </div>
      </div>
    </article>
    <article class="block sm:flex gap-x-8">
      <div class="sm:min-w-[230px] md:min-w-[255px]">
        <img class="w-full sm:max-w-lg object-cover h-[14rem] sm:max-h-full md:min-h-[240px] lg:min-h-[255px] rounded-xl sm:rounded-2xl border border-slate-300 dark:border-slate-600" src="/img/img9.jpg" alt="">
      </div>
      <div>
        <div class="flex items-center gap-x-4 pt-3 sm:pt-0 text-xs">
          <time datetime="2020-03-16" class="text-gray-500 dark:text-slate-400">July 22, 2020</time>
          <a href="#" class="relative rounded-full bg-gray-50 dark:bg-slate-700 px-3 py-1.5 font-medium text-gray-600 dark:text-slate-200 hover:bg-gray-100">Kegiatan Random</a>
        </div>
        <div class="group sm:border-b sm:dark:border-slate-700 pb-4 sm:pb-6">
          <h3 class="mt-1 md:mt-3 text-lg font-semibold leading-6 text-gray-900 dark:text-slate-300 group-hover:text-gray-600 dark:group-hover:text-slate-200">
            <a href="#">
              <span class="inset-0"></span>
              Awal Pertemuan (RPL 1)
            </a>
          </h3>
          <p class="mt-3 md:mt-5 text-sm leading-6 text-gray-600 dark:text-slate-300">Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat molestias at et impedit labore culpa aliquid tenetur, expedita rem consequatur. Vitae at saepe voluptate odio eos accusantium rerum temporibus minus possimus est earum dicta sed, repellat. <a class="font-semibold text-gray-900 dark:text-slate-400" href="#">...more</a></p>
        </div>
        <div class="flex gap-2 sm:pt-4 items-center">
          <svg class="w-8 h-8 text-indigo-700 dark:text-indigo-500" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" d="M17.982 18.725A7.488 7.488 0 0012 15.75a7.488 7.488 0 00-5.982 2.975m11.963 0a9 9 0 10-11.963 0m11.963 0A8.966 8.966 0 0112 21a8.966 8.966 0 01-5.982-2.275M15 9.75a3 3 0 11-6 0 3 3 0 016 0z"></path>
          </svg>
          <div>
            <h6 class="select-none text-sm font-medium text-gray-900 dark:text-slate-200">Written by RPL TEAM</h6>
          </div>
        </div>
      </div>
    </article>
  </div>
</div>

<footer class="max-w-5xl mx-auto px-4 md:px-8 lg:px-16 border-t dark:border-slate-800">
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