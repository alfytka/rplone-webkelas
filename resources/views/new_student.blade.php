@extends('partials.new')
@section('content')
<div class="content isolate bg-white py-24 sm:py-32 dark:bg-slate-900">
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
  <div class="mx-auto max-w-7xl px-6 lg:px-8">
    <div class="max-w-2xl pb-14">
      <div class="flex justify-between">
        <h2 class="text-3xl font-bold tracking-tight text-gray-900 dark:text-slate-200 sm:text-4xl">Member kelas</h2>
        <a href="/quotes" class="flex sm:hidden w-10 h-10 rounded-md shadow-md dark:shadow-indigo-800 bg-indigo-500/10 dark:bg-white/5 p-1.5 ring-2 ring-indigo-500 dark:ring-indigo-700">
          <svg class="w-7 h-7 text-indigo-500 dark:text-indigo-700" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" d="M7.5 8.25h9m-9 3H12m-9.75 1.51c0 1.6 1.123 2.994 2.707 3.227 1.129.166 2.27.293 3.423.379.35.026.67.21.865.501L12 21l2.755-4.133a1.14 1.14 0 01.865-.501 48.172 48.172 0 003.423-.379c1.584-.233 2.707-1.626 2.707-3.228V6.741c0-1.602-1.123-2.995-2.707-3.228A48.394 48.394 0 0012 3c-2.392 0-4.744.175-7.043.513C3.373 3.746 2.25 5.14 2.25 6.741v6.018z"></path>
          </svg>
        </a>
      </div>
      <p class="mt-6 text-lg leading-8 text-gray-600 dark:text-slate-300">Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis rem quod, commodi unde animi repellendus beatae praesentium culpa doloremque qui!</p>
    </div>
    <div class="absolute right-20 top-32 space-x-5 flex items-end justify-end">
      <a href="/quotes" class="hidden sm:flex text-lg font-semibold my-auto text-indigo-500">Quotes</a>
      <a href="/quotes" class="hidden sm:flex w-10 h-10 rounded-md shadow-md dark:shadow-indigo-800 bg-indigo-500/10 dark:bg-white/5 p-1.5 ring-2 ring-indigo-500 dark:ring-indigo-700">
        <svg class="w-7 h-7 text-indigo-500 dark:text-indigo-700" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
          <path stroke-linecap="round" stroke-linejoin="round" d="M7.5 8.25h9m-9 3H12m-9.75 1.51c0 1.6 1.123 2.994 2.707 3.227 1.129.166 2.27.293 3.423.379.35.026.67.21.865.501L12 21l2.755-4.133a1.14 1.14 0 01.865-.501 48.172 48.172 0 003.423-.379c1.584-.233 2.707-1.626 2.707-3.228V6.741c0-1.602-1.123-2.995-2.707-3.228A48.394 48.394 0 0012 3c-2.392 0-4.744.175-7.043.513C3.373 3.746 2.25 5.14 2.25 6.741v6.018z"></path>
        </svg>
      </a>
    </div>
    <ul class="grid gap-x-5 md:gap-x-8 gap-y-10 grid-cols-2 md:grid-cols-3 lg:grid-cols-6 xl:col-span-2">
      <li>
        <div class="items-center justify-center text-center gap-x-6">
          <a href="#">
            <img class="w-20 h-20 md:h-24 md:w-24 rounded-full mx-auto object-cover" src="https://images.unsplash.com/photo-1539571696357-5a69c17a67c6?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Nnx8cmFuZG9tJTIwcGVvcGxlfGVufDB8fDB8fA%3D%3D&auto=format&fit=crop&w=500&q=60" alt="">
          </a>
          <div class="py-5">
            <h3 class="text-base font-semibold leading-6 tracking-tight text-black dark:text-slate-300">Lorem, ipsum.</h3>
            <p class="text-sm leading-6 text-slate-600 dark:text-slate-400">Lorem</p>
          </div>
        </div>
      </li>
      <li>
        <div class="items-center justify-center text-center gap-x-6">
          <a href="#">
            <img class="w-20 h-20 md:h-24 md:w-24 rounded-full mx-auto object-cover" src="https://images.unsplash.com/photo-1530268729831-4b0b9e170218?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTB8fHJhbmRvbSUyMHBlb3BsZXxlbnwwfHwwfHw%3D&auto=format&fit=crop&w=500&q=60" alt="">
          </a>
          <div class="py-5">
            <h3 class="text-base font-semibold leading-6 tracking-tight text-black dark:text-slate-300">Lorem, ipsum dolor.</h3>
            <p class="text-sm leading-6 text-slate-600 dark:text-slate-400">lorem</p>
          </div>
        </div>
      </li>
      <li>
        <div class="items-center justify-center text-center gap-x-6">
          <a href="#">
            <img class="w-20 h-20 md:h-24 md:w-24 rounded-full mx-auto object-cover" src="https://images.unsplash.com/photo-1525134479668-1bee5c7c6845?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8OHx8cmFuZG9tJTIwcGVvcGxlfGVufDB8fDB8fA%3D%3D&auto=format&fit=crop&w=500&q=60" alt="">
          </a>
          <div class="py-5">
            <h3 class="text-base font-semibold leading-6 tracking-tight text-black dark:text-slate-300">Lorem, ipsum dolor.</h3>
            <p class="text-sm leading-6 text-slate-600 dark:text-slate-400">lorem</p>
          </div>
        </div>
      </li>
      <li>
        <div class="items-center justify-center text-center gap-x-6">
          <a href="#">
            <img class="w-20 h-20 md:h-24 md:w-24 rounded-full mx-auto object-cover" src="https://images.unsplash.com/photo-1517841905240-472988babdf9?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8OXx8cmFuZG9tJTIwcGVvcGxlfGVufDB8fDB8fA%3D%3D&auto=format&fit=crop&w=500&q=60" alt="">
          </a>
          <div class="py-5">
            <h3 class="text-base font-semibold leading-6 tracking-tight text-black dark:text-slate-300">Lorem, ipsum.</h3>
            <p class="text-sm leading-6 text-slate-600 dark:text-slate-400">Lorem, ipsum.</p>
          </div>
        </div>
      </li>
      <li>
        <div class="items-center justify-center text-center gap-x-6">
          <a href="#">
            <img class="w-20 h-20 md:h-24 md:w-24 rounded-full mx-auto object-cover" src="https://images.unsplash.com/photo-1485206412256-701ccc5b93ca?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTV8fHJhbmRvbSUyMHBlb3BsZXxlbnwwfHwwfHw%3D&auto=format&fit=crop&w=500&q=60" alt="">
          </a>
          <div class="py-5">
            <h3 class="text-base font-semibold leading-6 tracking-tight text-black dark:text-slate-300">Lorem ipsum dolor sit.</h3>
            <p class="text-sm leading-6 text-slate-600 dark:text-slate-400">lorem</p>
          </div>
        </div>
      </li>
      <li>
        <div class="items-center justify-center text-center gap-x-6">
          <a href="#">
            <img class="w-20 h-20 md:h-24 md:w-24 rounded-full mx-auto object-cover" src="https://images.unsplash.com/photo-1539571696357-5a69c17a67c6?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Nnx8cmFuZG9tJTIwcGVvcGxlfGVufDB8fDB8fA%3D%3D&auto=format&fit=crop&w=500&q=60" alt="">
          </a>
          <div class="py-5">
            <h3 class="text-base font-semibold leading-6 tracking-tight text-black dark:text-slate-300">Lorem, ipsum.</h3>
            <p class="text-sm leading-6 text-slate-600 dark:text-slate-400">Lorem</p>
          </div>
        </div>
      </li>
      <li>
        <div class="items-center justify-center text-center gap-x-6">
          <a href="#">
            <img class="w-20 h-20 md:h-24 md:w-24 rounded-full mx-auto object-cover" src="https://images.unsplash.com/photo-1539571696357-5a69c17a67c6?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Nnx8cmFuZG9tJTIwcGVvcGxlfGVufDB8fDB8fA%3D%3D&auto=format&fit=crop&w=500&q=60" alt="">
          </a>
          <div class="py-5">
            <h3 class="text-base font-semibold leading-6 tracking-tight text-black dark:text-slate-300">Lorem, ipsum.</h3>
            <p class="text-sm leading-6 text-slate-600 dark:text-slate-400">Lorem</p>
          </div>
        </div>
      </li>
      <li>
        <div class="items-center justify-center text-center gap-x-6">
          <a href="#">
            <img class="w-20 h-20 md:h-24 md:w-24 rounded-full mx-auto object-cover" src="https://images.unsplash.com/photo-1530268729831-4b0b9e170218?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTB8fHJhbmRvbSUyMHBlb3BsZXxlbnwwfHwwfHw%3D&auto=format&fit=crop&w=500&q=60" alt="">
          </a>
          <div class="py-5">
            <h3 class="text-base font-semibold leading-6 tracking-tight text-black dark:text-slate-300">Lorem, ipsum dolor.</h3>
            <p class="text-sm leading-6 text-slate-600 dark:text-slate-400">lorem</p>
          </div>
        </div>
      </li>
      <li>
        <div class="items-center justify-center text-center gap-x-6">
          <a href="#">
            <img class="w-20 h-20 md:h-24 md:w-24 rounded-full mx-auto object-cover" src="https://images.unsplash.com/photo-1525134479668-1bee5c7c6845?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8OHx8cmFuZG9tJTIwcGVvcGxlfGVufDB8fDB8fA%3D%3D&auto=format&fit=crop&w=500&q=60" alt="">
          </a>
          <div class="py-5">
            <h3 class="text-base font-semibold leading-6 tracking-tight text-black dark:text-slate-300">Lorem, ipsum dolor.</h3>
            <p class="text-sm leading-6 text-slate-600 dark:text-slate-400">lorem</p>
          </div>
        </div>
      </li>
      <li>
        <div class="items-center justify-center text-center gap-x-6">
          <a href="#">
            <img class="w-20 h-20 md:h-24 md:w-24 rounded-full mx-auto object-cover" src="https://images.unsplash.com/photo-1517841905240-472988babdf9?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8OXx8cmFuZG9tJTIwcGVvcGxlfGVufDB8fDB8fA%3D%3D&auto=format&fit=crop&w=500&q=60" alt="">
          </a>
          <div class="py-5">
            <h3 class="text-base font-semibold leading-6 tracking-tight text-black dark:text-slate-300">Lorem, ipsum.</h3>
            <p class="text-sm leading-6 text-slate-600 dark:text-slate-400">Lorem, ipsum.</p>
          </div>
        </div>
      </li>
      <li>
        <div class="items-center justify-center text-center gap-x-6">
          <a href="#">
            <img class="w-20 h-20 md:h-24 md:w-24 rounded-full mx-auto object-cover" src="https://images.unsplash.com/photo-1485206412256-701ccc5b93ca?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTV8fHJhbmRvbSUyMHBlb3BsZXxlbnwwfHwwfHw%3D&auto=format&fit=crop&w=500&q=60" alt="">
          </a>
          <div class="py-5">
            <h3 class="text-base font-semibold leading-6 tracking-tight text-black dark:text-slate-300">Lorem ipsum dolor sit.</h3>
            <p class="text-sm leading-6 text-slate-600 dark:text-slate-400">lorem</p>
          </div>
        </div>
      </li>
      <li>
        <div class="items-center justify-center text-center gap-x-6">
          <a href="#">
            <img class="w-20 h-20 md:h-24 md:w-24 rounded-full mx-auto object-cover" src="https://images.unsplash.com/photo-1539571696357-5a69c17a67c6?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Nnx8cmFuZG9tJTIwcGVvcGxlfGVufDB8fDB8fA%3D%3D&auto=format&fit=crop&w=500&q=60" alt="">
          </a>
          <div class="py-5">
            <h3 class="text-base font-semibold leading-6 tracking-tight text-black dark:text-slate-300">Lorem, ipsum.</h3>
            <p class="text-sm leading-6 text-slate-600 dark:text-slate-400">Lorem</p>
          </div>
        </div>
      </li>
      <li>
        <div class="items-center justify-center text-center gap-x-6">
          <a href="#">
            <img class="w-20 h-20 md:h-24 md:w-24 rounded-full mx-auto object-cover" src="https://images.unsplash.com/photo-1539571696357-5a69c17a67c6?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Nnx8cmFuZG9tJTIwcGVvcGxlfGVufDB8fDB8fA%3D%3D&auto=format&fit=crop&w=500&q=60" alt="">
          </a>
          <div class="py-5">
            <h3 class="text-base font-semibold leading-6 tracking-tight text-black dark:text-slate-300">Lorem, ipsum.</h3>
            <p class="text-sm leading-6 text-slate-600 dark:text-slate-400">Lorem</p>
          </div>
        </div>
      </li>
      <li>
        <div class="items-center justify-center text-center gap-x-6">
          <a href="#">
            <img class="w-20 h-20 md:h-24 md:w-24 rounded-full mx-auto object-cover" src="https://images.unsplash.com/photo-1530268729831-4b0b9e170218?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTB8fHJhbmRvbSUyMHBlb3BsZXxlbnwwfHwwfHw%3D&auto=format&fit=crop&w=500&q=60" alt="">
          </a>
          <div class="py-5">
            <h3 class="text-base font-semibold leading-6 tracking-tight text-black dark:text-slate-300">Lorem, ipsum dolor.</h3>
            <p class="text-sm leading-6 text-slate-600 dark:text-slate-400">lorem</p>
          </div>
        </div>
      </li>
      <li>
        <div class="items-center justify-center text-center gap-x-6">
          <a href="#">
            <img class="w-20 h-20 md:h-24 md:w-24 rounded-full mx-auto object-cover" src="https://images.unsplash.com/photo-1525134479668-1bee5c7c6845?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8OHx8cmFuZG9tJTIwcGVvcGxlfGVufDB8fDB8fA%3D%3D&auto=format&fit=crop&w=500&q=60" alt="">
          </a>
          <div class="py-5">
            <h3 class="text-base font-semibold leading-6 tracking-tight text-black dark:text-slate-300">Lorem, ipsum dolor.</h3>
            <p class="text-sm leading-6 text-slate-600 dark:text-slate-400">lorem</p>
          </div>
        </div>
      </li>
      <li>
        <div class="items-center justify-center text-center gap-x-6">
          <a href="#">
            <img class="w-20 h-20 md:h-24 md:w-24 rounded-full mx-auto object-cover" src="https://images.unsplash.com/photo-1517841905240-472988babdf9?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8OXx8cmFuZG9tJTIwcGVvcGxlfGVufDB8fDB8fA%3D%3D&auto=format&fit=crop&w=500&q=60" alt="">
          </a>
          <div class="py-5">
            <h3 class="text-base font-semibold leading-6 tracking-tight text-black dark:text-slate-300">Lorem, ipsum.</h3>
            <p class="text-sm leading-6 text-slate-600 dark:text-slate-400">Lorem, ipsum.</p>
          </div>
        </div>
      </li>
      <li>
        <div class="items-center justify-center text-center gap-x-6">
          <a href="#">
            <img class="w-20 h-20 md:h-24 md:w-24 rounded-full mx-auto object-cover" src="https://images.unsplash.com/photo-1517841905240-472988babdf9?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8OXx8cmFuZG9tJTIwcGVvcGxlfGVufDB8fDB8fA%3D%3D&auto=format&fit=crop&w=500&q=60" alt="">
          </a>
          <div class="py-5">
            <h3 class="text-base font-semibold leading-6 tracking-tight text-black dark:text-slate-300">Lorem, ipsum.</h3>
            <p class="text-sm leading-6 text-slate-600 dark:text-slate-400">Lorem, ipsum.</p>
          </div>
        </div>
      </li>
      <li>
        <div class="items-center justify-center text-center gap-x-6">
          <a href="#">
            <img class="w-20 h-20 md:h-24 md:w-24 rounded-full mx-auto object-cover" src="https://images.unsplash.com/photo-1517841905240-472988babdf9?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8OXx8cmFuZG9tJTIwcGVvcGxlfGVufDB8fDB8fA%3D%3D&auto=format&fit=crop&w=500&q=60" alt="">
          </a>
          <div class="py-5">
            <h3 class="text-base font-semibold leading-6 tracking-tight text-black dark:text-slate-300">Lorem, ipsum.</h3>
            <p class="text-sm leading-6 text-slate-600 dark:text-slate-400">Lorem, ipsum.</p>
          </div>
        </div>
      </li>
      <li>
        <div class="items-center justify-center text-center gap-x-6">
          <a href="#">
            <img class="w-20 h-20 md:h-24 md:w-24 rounded-full mx-auto object-cover" src="https://images.unsplash.com/photo-1517841905240-472988babdf9?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8OXx8cmFuZG9tJTIwcGVvcGxlfGVufDB8fDB8fA%3D%3D&auto=format&fit=crop&w=500&q=60" alt="">
          </a>
          <div class="py-5">
            <h3 class="text-base font-semibold leading-6 tracking-tight text-black dark:text-slate-300">Lorem, ipsum.</h3>
            <p class="text-sm leading-6 text-slate-600 dark:text-slate-400">Lorem, ipsum.</p>
          </div>
        </div>
      </li>
      <li>
        <div class="items-center justify-center text-center gap-x-6">
          <a href="#">
            <img class="w-20 h-20 md:h-24 md:w-24 rounded-full mx-auto object-cover" src="https://images.unsplash.com/photo-1517841905240-472988babdf9?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8OXx8cmFuZG9tJTIwcGVvcGxlfGVufDB8fDB8fA%3D%3D&auto=format&fit=crop&w=500&q=60" alt="">
          </a>
          <div class="py-5">
            <h3 class="text-base font-semibold leading-6 tracking-tight text-black dark:text-slate-300">Lorem, ipsum.</h3>
            <p class="text-sm leading-6 text-slate-600 dark:text-slate-400">Lorem, ipsum.</p>
          </div>
        </div>
      </li>
      <li>
        <div class="items-center justify-center text-center gap-x-6">
          <a href="#">
            <img class="w-20 h-20 md:h-24 md:w-24 rounded-full mx-auto object-cover" src="https://images.unsplash.com/photo-1485206412256-701ccc5b93ca?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTV8fHJhbmRvbSUyMHBlb3BsZXxlbnwwfHwwfHw%3D&auto=format&fit=crop&w=500&q=60" alt="">
          </a>
          <div class="py-5">
            <h3 class="text-base font-semibold leading-6 tracking-tight text-black dark:text-slate-300">Lorem ipsum dolor sit.</h3>
            <p class="text-sm leading-6 text-slate-600 dark:text-slate-400">lorem</p>
          </div>
        </div>
      </li>
      <li>
        <div class="items-center justify-center text-center gap-x-6">
          <a href="#">
            <img class="w-20 h-20 md:h-24 md:w-24 rounded-full mx-auto object-cover" src="https://images.unsplash.com/photo-1539571696357-5a69c17a67c6?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Nnx8cmFuZG9tJTIwcGVvcGxlfGVufDB8fDB8fA%3D%3D&auto=format&fit=crop&w=500&q=60" alt="">
          </a>
          <div class="py-5">
            <h3 class="text-base font-semibold leading-6 tracking-tight text-black dark:text-slate-300">Lorem, ipsum.</h3>
            <p class="text-sm leading-6 text-slate-600 dark:text-slate-400">Lorem</p>
          </div>
        </div>
      </li>
      <li>
        <div class="items-center justify-center text-center gap-x-6">
          <a href="#">
            <img class="w-20 h-20 md:h-24 md:w-24 rounded-full mx-auto object-cover" src="https://images.unsplash.com/photo-1539571696357-5a69c17a67c6?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Nnx8cmFuZG9tJTIwcGVvcGxlfGVufDB8fDB8fA%3D%3D&auto=format&fit=crop&w=500&q=60" alt="">
          </a>
          <div class="py-5">
            <h3 class="text-base font-semibold leading-6 tracking-tight text-black dark:text-slate-300">Lorem, ipsum.</h3>
            <p class="text-sm leading-6 text-slate-600 dark:text-slate-400">Lorem</p>
          </div>
        </div>
      </li>
      <li>
        <div class="items-center justify-center text-center gap-x-6">
          <a href="#">
            <img class="w-20 h-20 md:h-24 md:w-24 rounded-full mx-auto object-cover" src="https://images.unsplash.com/photo-1530268729831-4b0b9e170218?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTB8fHJhbmRvbSUyMHBlb3BsZXxlbnwwfHwwfHw%3D&auto=format&fit=crop&w=500&q=60" alt="">
          </a>
          <div class="py-5">
            <h3 class="text-base font-semibold leading-6 tracking-tight text-black dark:text-slate-300">Lorem, ipsum dolor.</h3>
            <p class="text-sm leading-6 text-slate-600 dark:text-slate-400">lorem</p>
          </div>
        </div>
      </li>
      <li>
        <div class="items-center justify-center text-center gap-x-6">
          <a href="#">
            <img class="w-20 h-20 md:h-24 md:w-24 rounded-full mx-auto object-cover" src="https://images.unsplash.com/photo-1525134479668-1bee5c7c6845?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8OHx8cmFuZG9tJTIwcGVvcGxlfGVufDB8fDB8fA%3D%3D&auto=format&fit=crop&w=500&q=60" alt="">
          </a>
          <div class="py-5">
            <h3 class="text-base font-semibold leading-6 tracking-tight text-black dark:text-slate-300">Lorem, ipsum dolor.</h3>
            <p class="text-sm leading-6 text-slate-600 dark:text-slate-400">lorem</p>
          </div>
        </div>
      </li>
      <li>
        <div class="items-center justify-center text-center gap-x-6">
          <a href="#">
            <img class="w-20 h-20 md:h-24 md:w-24 rounded-full mx-auto object-cover" src="https://images.unsplash.com/photo-1517841905240-472988babdf9?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8OXx8cmFuZG9tJTIwcGVvcGxlfGVufDB8fDB8fA%3D%3D&auto=format&fit=crop&w=500&q=60" alt="">
          </a>
          <div class="py-5">
            <h3 class="text-base font-semibold leading-6 tracking-tight text-black dark:text-slate-300">Lorem, ipsum.</h3>
            <p class="text-sm leading-6 text-slate-600 dark:text-slate-400">Lorem, ipsum.</p>
          </div>
        </div>
      </li>
      <li>
        <div class="items-center justify-center text-center gap-x-6">
          <a href="#">
            <img class="w-20 h-20 md:h-24 md:w-24 rounded-full mx-auto object-cover" src="https://images.unsplash.com/photo-1485206412256-701ccc5b93ca?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTV8fHJhbmRvbSUyMHBlb3BsZXxlbnwwfHwwfHw%3D&auto=format&fit=crop&w=500&q=60" alt="">
          </a>
          <div class="py-5">
            <h3 class="text-base font-semibold leading-6 tracking-tight text-black dark:text-slate-300">Lorem ipsum dolor sit.</h3>
            <p class="text-sm leading-6 text-slate-600 dark:text-slate-400">lorem</p>
          </div>
        </div>
      </li>
      <li>
        <div class="items-center justify-center text-center gap-x-6">
          <a href="#">
            <img class="w-20 h-20 md:h-24 md:w-24 rounded-full mx-auto object-cover" src="https://images.unsplash.com/photo-1539571696357-5a69c17a67c6?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Nnx8cmFuZG9tJTIwcGVvcGxlfGVufDB8fDB8fA%3D%3D&auto=format&fit=crop&w=500&q=60" alt="">
          </a>
          <div class="py-5">
            <h3 class="text-base font-semibold leading-6 tracking-tight text-black dark:text-slate-300">Lorem, ipsum.</h3>
            <p class="text-sm leading-6 text-slate-600 dark:text-slate-400">Lorem</p>
          </div>
        </div>
      </li>
      <li>
        <div class="items-center justify-center text-center gap-x-6">
          <a href="#">
            <img class="w-20 h-20 md:h-24 md:w-24 rounded-full mx-auto object-cover" src="https://images.unsplash.com/photo-1530268729831-4b0b9e170218?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTB8fHJhbmRvbSUyMHBlb3BsZXxlbnwwfHwwfHw%3D&auto=format&fit=crop&w=500&q=60" alt="">
          </a>
          <div class="py-5">
            <h3 class="text-base font-semibold leading-6 tracking-tight text-black dark:text-slate-300">Lorem, ipsum dolor.</h3>
            <p class="text-sm leading-6 text-slate-600 dark:text-slate-400">lorem</p>
          </div>
        </div>
      </li>
      <li>
        <div class="items-center justify-center text-center gap-x-6">
          <a href="#">
            <img class="w-20 h-20 md:h-24 md:w-24 rounded-full mx-auto object-cover" src="https://images.unsplash.com/photo-1525134479668-1bee5c7c6845?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8OHx8cmFuZG9tJTIwcGVvcGxlfGVufDB8fDB8fA%3D%3D&auto=format&fit=crop&w=500&q=60" alt="">
          </a>
          <div class="py-5">
            <h3 class="text-base font-semibold leading-6 tracking-tight text-black dark:text-slate-300">Lorem, ipsum dolor.</h3>
            <p class="text-sm leading-6 text-slate-600 dark:text-slate-400">lorem</p>
          </div>
        </div>
      </li>
      <li>
        <div class="items-center justify-center text-center gap-x-6">
          <a href="#">
            <img class="w-20 h-20 md:h-24 md:w-24 rounded-full mx-auto object-cover" src="https://images.unsplash.com/photo-1517841905240-472988babdf9?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8OXx8cmFuZG9tJTIwcGVvcGxlfGVufDB8fDB8fA%3D%3D&auto=format&fit=crop&w=500&q=60" alt="">
          </a>
          <div class="py-5">
            <h3 class="text-base font-semibold leading-6 tracking-tight text-black dark:text-slate-300">Lorem, ipsum.</h3>
            <p class="text-sm leading-6 text-slate-600 dark:text-slate-400">Lorem, ipsum.</p>
          </div>
        </div>
      </li>
      <li>
        <div class="items-center justify-center text-center gap-x-6">
          <a href="#">
            <img class="w-20 h-20 md:h-24 md:w-24 rounded-full mx-auto object-cover" src="https://images.unsplash.com/photo-1485206412256-701ccc5b93ca?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTV8fHJhbmRvbSUyMHBlb3BsZXxlbnwwfHwwfHw%3D&auto=format&fit=crop&w=500&q=60" alt="">
          </a>
          <div class="py-5">
            <h3 class="text-base font-semibold leading-6 tracking-tight text-black dark:text-slate-300">Lorem ipsum dolor sit.</h3>
            <p class="text-sm leading-6 text-slate-600 dark:text-slate-400">lorem</p>
          </div>
        </div>
      </li>
      <li>
        <div class="items-center justify-center text-center gap-x-6">
          <a href="#">
            <img class="w-20 h-20 md:h-24 md:w-24 rounded-full mx-auto object-cover" src="https://images.unsplash.com/photo-1496360166961-10a51d5f367a?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MjB8fHJhbmRvbSUyMHBlb3BsZXxlbnwwfHwwfHw%3D&auto=format&fit=crop&w=500&q=60" alt="">
          </a>
          <div class="py-5">
            <h3 class="text-base font-semibold leading-6 tracking-tight text-black dark:text-slate-300">Lorem, ipsum.</h3>
            <p class="text-sm leading-6 text-slate-600 dark:text-slate-400">Lorem, ipsum.</p>
          </div>
        </div>
      </li>
      <li>
        <div class="items-center justify-center text-center gap-x-6">
          <a href="#">
            <img class="w-20 h-20 md:h-24 md:w-24 rounded-full mx-auto object-cover" src="https://plus.unsplash.com/premium_photo-1661700093968-b538c5a9f539?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTl8fHJhbmRvbSUyMHBlb3BsZXxlbnwwfHwwfHw%3D&auto=format&fit=crop&w=500&q=60" alt="">
          </a>
          <div class="py-5">
            <h3 class="text-base font-semibold leading-6 tracking-tight text-black dark:text-slate-300">Lorem, ipsum dolor.</h3>
            <p class="text-sm leading-6 text-slate-600 dark:text-slate-400">Lorem, ipsum.</p>
          </div>
        </div>
      </li>
    </ul>
  </div>
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