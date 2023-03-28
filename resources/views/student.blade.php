@extends('partials.main')
@section('content')
<div class="content mt-24 md:mt-28 px-4 md:px-20 lg:px-56 mx-auto">

  <div id="default-carousel" class="relative w-full" data-carousel="slide">
    <div class="relative h-56 overflow-hidden rounded-lg md:h-96">
        <!-- Item 1 -->
      <div class="hidden duration-700 ease-in-out" data-carousel-item>
          <img src="https://images.unsplash.com/photo-1615495504323-13bc487d9c9f?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1yZWxhdGVkfDJ8fHxlbnwwfHx8fA%3D%3D&auto=format&fit=crop&w=500&q=60" class="absolute rounded-lg block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
      </div>
      <!-- Item 2 -->
      <div class="hidden duration-700 ease-in-out" data-carousel-item>
          <img src="https://images.unsplash.com/photo-1586125674857-4eb86880905d?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1yZWxhdGVkfDF8fHxlbnwwfHx8fA%3D%3D&auto=format&fit=crop&w=500&q=60" class="absolute rounded-lg block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
      </div>
      <!-- Item 3 -->
      <div class="hidden duration-700 ease-in-out" data-carousel-item>
          <img src="https://images.unsplash.com/photo-1615494488088-43ac74d0c232?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1yZWxhdGVkfDN8fHxlbnwwfHx8fA%3D%3D&auto=format&fit=crop&w=500&q=60" class="absolute rounded-lg block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
      </div>
      <!-- Item 4 -->
      <div class="hidden duration-700 ease-in-out" data-carousel-item>
          <img src="https://images.unsplash.com/photo-1615494488038-6611f8296a58?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1yZWxhdGVkfDZ8fHxlbnwwfHx8fA%3D%3D&auto=format&fit=crop&w=500&q=60" class="absolute rounded-lg block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
      </div>
      <!-- Item 5 -->
      <div class="hidden duration-700 ease-in-out" data-carousel-item>
          <img src="https://images.unsplash.com/photo-1615494487949-f5f68968330e?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1yZWxhdGVkfDE5fHx8ZW58MHx8fHw%3D&auto=format&fit=crop&w=500&q=60" class="absolute rounded-lg block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
      </div>
    </div>
    <!-- Slider indicators -->
    <div class="absolute z-30 flex space-x-3 -translate-x-1/2 bottom-5 left-1/2">
      <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1" data-carousel-slide-to="0"></button>
      <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2" data-carousel-slide-to="1"></button>
      <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3" data-carousel-slide-to="2"></button>
      <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 4" data-carousel-slide-to="3"></button>
      <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 5" data-carousel-slide-to="4"></button>
    </div>
    <!-- Slider controls -->
    <button type="button" class="absolute top-0 left-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
      <span class="inline-flex items-center justify-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
        <svg aria-hidden="true" class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
        <span class="sr-only">Previous</span>
      </span>
    </button>
    <button type="button" class="absolute top-0 right-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
      <span class="inline-flex items-center justify-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
        <svg aria-hidden="true" class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
        <span class="sr-only">Next</span>
      </span>
    </button>
  </div>

  <div class="grid grid-cols-2 md:grid-cols-3 gap-4 mt-5">
    <div>
      <img class="h-auto max-w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image.jpg" alt="">
    </div>
    <div>
      <img class="h-auto max-w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-1.jpg" alt="">
    </div>
    <div>
      <img class="h-auto max-w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-2.jpg" alt="">
    </div>
    <div>
      <img class="h-auto max-w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-3.jpg" alt="">
    </div>
    <div>
      <img class="h-auto max-w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-4.jpg" alt="">
    </div>
    <div>
      <img class="h-auto max-w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-8.jpg" alt="">
    </div>
  </div>

  <div class="mt-20 h-52">
    <div class="text-center mx-auto">
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6 text-gray-300 dark:text-blue-600 text-center mx-auto">
        <path fill-rule="evenodd" d="M8.25 6.75a3.75 3.75 0 117.5 0 3.75 3.75 0 01-7.5 0zM15.75 9.75a3 3 0 116 0 3 3 0 01-6 0zM2.25 9.75a3 3 0 116 0 3 3 0 01-6 0zM6.31 15.117A6.745 6.745 0 0112 12a6.745 6.745 0 016.709 7.498.75.75 0 01-.372.568A12.696 12.696 0 0112 21.75c-2.305 0-4.47-.612-6.337-1.684a.75.75 0 01-.372-.568 6.787 6.787 0 011.019-4.38z" clip-rule="evenodd" />
        <path d="M5.082 14.254a8.287 8.287 0 00-1.308 5.135 9.687 9.687 0 01-1.764-.44l-.115-.04a.563.563 0 01-.373-.487l-.01-.121a3.75 3.75 0 013.57-4.047zM20.226 19.389a8.287 8.287 0 00-1.308-5.135 3.75 3.75 0 013.57 4.047l-.01.121a.563.563 0 01-.373.486l-.115.04c-.567.2-1.156.349-1.764.441z" />
      </svg>
      <h1 class="text-lg font-semibold text-gray-800 dark:text-gray-300"><span class="bg-blue-100 text-blue-800 text-base font-semibold px-2.5 py-0.5 rounded dark:bg-blue-200 dark:text-blue-800 ">RPL</span> Student</h1>
    </div>

    <form class="mt-1">
      <label for="search" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
      <div class="relative">
        <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
          <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
        </div>
        <input type="text" id="search" class="block w-full p-4 pl-10 text-sm text-gray-900 border border-white rounded-lg bg-white focus:outline-none focus:ring-0 focus:ring-bg-white focus:border-white dark:bg-gray-800 dark:border-gray-800 dark:placeholder-gray-400 dark:text-white" placeholder="Cari siswa..." autocomplete="off">
      </div>
    </form>

    <div id="detail-siswa" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] md:h-full">
      <div class="relative w-full h-full max-w-md md:h-auto">
        <div class="relative bg-white rounded-xl shadow dark:bg-gray-700">
          <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white" data-modal-hide="detail-siswa">
            <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>  
              <span class="sr-only">Close modal</span>
          </button>
          {{-- Modal body --}}
          <div class="p-6">
            {{-- <p class="mt-5 text-sm font-normal text-gray-500 dark:text-gray-400">Connect with one of our available wallet providers or create a new one.</p> --}}
            <img class="h-24 w-24 mt-8 rounded-full mx-auto p-0.5 ring-2 ring-gray-200" src="/img/profile.jpg" alt="">
            {{-- <h5 class="font-medium mt-4 text-base text-center">Andre Daniswara Putra</h5> --}}
            <div class="mt-7">
              <p class="text-sm leading-none font-semibold">Nama Siswa</p>
              <p class="text-sm mb-3 font-normal">Alfitka Haerul Kurniawan</p>
              <p class="text-sm leading-none font-semibold">Kelas</p>
              <p class="text-sm mb-3 font-normal">XII RPL 1</p>
              <div class="flex justify-between">
                <div>
                  <p class="text-sm leading-none font-semibold">Jenis Kelamin</p>
                  <p class="text-sm mb-3 font-normal">Laki-laki</p>
                </div>
                <div>
                  <svg fill="none" class="w-7 h-7" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6.633 10.5c.806 0 1.533-.446 2.031-1.08a9.041 9.041 0 012.861-2.4c.723-.384 1.35-.956 1.653-1.715a4.498 4.498 0 00.322-1.672V3a.75.75 0 01.75-.75A2.25 2.25 0 0116.5 4.5c0 1.152-.26 2.243-.723 3.218-.266.558.107 1.282.725 1.282h3.126c1.026 0 1.945.694 2.054 1.715.045.422.068.85.068 1.285a11.95 11.95 0 01-2.649 7.521c-.388.482-.987.729-1.605.729H13.48c-.483 0-.964-.078-1.423-.23l-3.114-1.04a4.501 4.501 0 00-1.423-.23H5.904M14.25 9h2.25M5.904 18.75c.083.205.173.405.27.602.197.4-.078.898-.523.898h-.908c-.889 0-1.713-.518-1.972-1.368a12 12 0 01-.521-3.507c0-1.553.295-3.036.831-4.398C3.387 10.203 4.167 9.75 5 9.75h1.053c.472 0 .745.556.5.96a8.958 8.958 0 00-1.302 4.665c0 1.194.232 2.333.654 3.375z"></path>
                  </svg>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-3 gap-4 mt-2 pb-10">
      <div class="w-full max-w-sm mx-auto bg-white hover:bg-gray-50 dark:hover:bg-gray-900 border border-gray-200 rounded-xl shadow dark:bg-gray-800 dark:border-gray-700">
        <a data-modal-target="detail-siswa" data-modal-toggle="detail-siswa">
          <div class="flex flex-col items-center pt-8 pb-6">
            {{-- <img class="w-16 md:w-20 h-16 md:h-20 mb-3 rounded-full shadow p-0.5 ring-1 ring-gray-200 dark:ring-gray-500" src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/karen-nelson.png" alt=""> --}}
            <svg class="w-16 md:w-20 h-16 md:h-20 mb-3 rounded-full shadow p-0.5 dark:text-gray-600 ring-1 ring-gray-200 dark:ring-gray-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"></path></svg>
            <h5 class="text-base font-semibold tracking-tight text-gray-900 dark:text-gray-300">Renal Ajrun</h5>
            <blockquote class="text-sm px-4 mt-2 text-center font-light text-gray-900 dark:text-gray-300">
              "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Cumque, unde?"
            </blockquote>
          </div>
        </a>
      </div>
      <div class="w-full max-w-sm mx-auto bg-white hover:bg-gray-50 dark:hover:bg-gray-900 border border-gray-200 rounded-xl shadow dark:bg-gray-800 dark:border-gray-700">
        <a href="#">
          <div class="flex flex-col items-center pt-8 pb-6">
            {{-- <img class="w-16 md:w-20 h-16 md:h-20 mb-3 rounded-full shadow p-0.5 ring-1 ring-gray-200 dark:ring-gray-500" src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/karen-nelson.png" alt=""> --}}
            <svg class="w-16 md:w-20 h-16 md:h-20 mb-3 rounded-full shadow p-0.5 dark:text-gray-600 ring-1 ring-gray-200 dark:ring-gray-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"></path></svg>
            <h5 class="text-base font-semibold tracking-tight text-gray-900 dark:text-gray-300">Rafli Al-Musyafa</h5>
            <blockquote class="text-sm px-4 mt-2 text-center font-light text-gray-900 dark:text-gray-300">
              "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Cumque, unde?"
            </blockquote>
          </div>
        </a>
      </div>
      <div class="w-full max-w-sm mx-auto bg-white hover:bg-gray-50 dark:hover:bg-gray-900 border border-gray-200 rounded-xl shadow dark:bg-gray-800 dark:border-gray-700">
        <a href="#">
          <div class="flex flex-col items-center pt-8 pb-6">
            <svg class="w-16 md:w-20 h-16 md:h-20 mb-3 rounded-full shadow p-0.5 dark:text-gray-600 ring-1 ring-gray-200 dark:ring-gray-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"></path></svg>
            <h5 class="text-base font-semibold tracking-tight text-gray-900 dark:text-gray-300">Andre Daniswara Putra</h5>
            <blockquote class="text-sm px-4 mt-2 text-center font-light text-gray-900 dark:text-gray-300">
              "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Cumque, unde? lorem10
            </blockquote>
          </div>
        </a>
      </div>
      <div class="w-full max-w-sm mx-auto bg-white hover:bg-gray-50 dark:hover:bg-gray-900 border border-gray-200 rounded-xl shadow dark:bg-gray-800 dark:border-gray-700">
        <a href="#">
          <div class="flex flex-col items-center pt-8 pb-6">
            <svg class="w-16 md:w-20 h-16 md:h-20 mb-3 rounded-full shadow p-0.5 dark:text-gray-600 ring-1 ring-gray-200 dark:ring-gray-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"></path></svg>
            <h5 class="text-base font-semibold tracking-tight text-gray-900 dark:text-gray-300">Atyla Azfa Al Harits</h5>
            <blockquote class="text-sm px-4 mt-2 text-center font-light text-gray-900 dark:text-gray-300">
              "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Cumque, unde? lorem10
            </blockquote>
          </div>
        </a>
      </div>
      <div class="w-full max-w-sm mx-auto bg-white hover:bg-gray-50 dark:hover:bg-gray-900 border border-gray-200 rounded-xl shadow dark:bg-gray-800 dark:border-gray-700">
        <a href="#">
          <div class="flex flex-col items-center pt-8 pb-6">
            <svg class="w-16 md:w-20 h-16 md:h-20 mb-3 rounded-full shadow p-0.5 dark:text-gray-600 ring-1 ring-gray-200 dark:ring-gray-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"></path></svg>
            <h5 class="text-base font-semibold tracking-tight text-gray-900 dark:text-gray-300">Dimas Adirawijaya</h5>
            <blockquote class="text-sm px-4 mt-2 text-center font-light text-gray-900 dark:text-gray-300">
              "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Cumque, unde? lorem10
            </blockquote>
          </div>
        </a>
      </div>
      <div class="w-full max-w-sm mx-auto bg-white hover:bg-gray-50 dark:hover:bg-gray-900 border border-gray-200 rounded-xl shadow dark:bg-gray-800 dark:border-gray-700">
        <a href="#">
          <div class="flex flex-col items-center pt-8 pb-6">
            <svg class="w-16 md:w-20 h-16 md:h-20 mb-3 rounded-full shadow p-0.5 dark:text-gray-600 ring-1 ring-gray-200 dark:ring-gray-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"></path></svg>
            <h5 class="text-base font-semibold tracking-tight text-gray-900 dark:text-gray-300">Trio Adi Permana</h5>
            <blockquote class="text-sm px-4 mt-2 text-center font-light text-gray-900 dark:text-gray-300">
              "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Cumque, unde? lorem10
            </blockquote>
          </div>
        </a>
      </div>
      <div class="w-full max-w-sm mx-auto bg-white hover:bg-gray-50 dark:hover:bg-gray-900 border border-gray-200 rounded-xl shadow dark:bg-gray-800 dark:border-gray-700">
        <a href="#">
          <div class="flex flex-col items-center pt-8 pb-6">
            <svg class="w-16 md:w-20 h-16 md:h-20 mb-3 rounded-full shadow p-0.5 dark:text-gray-600 ring-1 ring-gray-200 dark:ring-gray-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"></path></svg>
            <h5 class="text-base font-semibold tracking-tight text-gray-900 dark:text-gray-300">Alfitka Haerul Kurniawan</h5>
            <blockquote class="text-sm px-4 mt-2 text-center font-light text-gray-900 dark:text-gray-300">
              "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Cumque, unde? lorem10
            </blockquote>
          </div>
        </a>
      </div>
      <div class="w-full max-w-sm mx-auto bg-white hover:bg-gray-50 dark:hover:bg-gray-900 border border-gray-200 rounded-xl shadow dark:bg-gray-800 dark:border-gray-700">
        <a href="#">
          <div class="flex flex-col items-center pt-8 pb-6">
            <svg class="w-16 md:w-20 h-16 md:h-20 mb-3 rounded-full shadow p-0.5 dark:text-gray-600 ring-1 ring-gray-200 dark:ring-gray-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"></path></svg>
            <h5 class="text-base font-semibold tracking-tight text-gray-900 dark:text-gray-300">Teguh Afriansyah</h5>
            <blockquote class="text-sm px-4 mt-2 text-center font-light text-gray-900 dark:text-gray-300">
              "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Cumque, unde? lorem10
            </blockquote>
          </div>
        </a>
      </div>
      <div class="w-full max-w-sm mx-auto bg-white hover:bg-gray-50 dark:hover:bg-gray-900 border border-gray-200 rounded-xl shadow dark:bg-gray-800 dark:border-gray-700">
        <a href="#">
          <div class="flex flex-col items-center pt-8 pb-6">
            <svg class="w-16 md:w-20 h-16 md:h-20 mb-3 rounded-full shadow p-0.5 dark:text-gray-600 ring-1 ring-gray-200 dark:ring-gray-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"></path></svg>
            <h5 class="text-base font-semibold tracking-tight text-gray-900 dark:text-gray-300">Khikmal Kurniawan</h5>
            <blockquote class="text-sm px-4 mt-2 text-center font-light text-gray-900 dark:text-gray-300">
              "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Cumque, unde? lorem10
            </blockquote>
          </div>
        </a>
      </div>
      <div class="w-full max-w-sm mx-auto bg-white hover:bg-gray-50 dark:hover:bg-gray-900 border border-gray-200 rounded-xl shadow dark:bg-gray-800 dark:border-gray-700">
        <a href="#">
          <div class="flex flex-col items-center pt-8 pb-6">
            <svg class="w-16 md:w-20 h-16 md:h-20 mb-3 rounded-full shadow p-0.5 dark:text-gray-600 ring-1 ring-gray-200 dark:ring-gray-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"></path></svg>
            <h5 class="text-base font-semibold tracking-tight text-gray-900 dark:text-gray-300">Elfan Hari Saputra</h5>
            <blockquote class="text-sm px-4 mt-2 text-center font-light text-gray-900 dark:text-gray-300">
              "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Cumque, unde? lorem10
            </blockquote>
          </div>
        </a>
      </div>
      <div class="w-full max-w-sm mx-auto bg-white hover:bg-gray-50 dark:hover:bg-gray-900 border border-gray-200 rounded-xl shadow dark:bg-gray-800 dark:border-gray-700">
        <a href="#">
          <div class="flex flex-col items-center pt-8 pb-6">
            <svg class="w-16 md:w-20 h-16 md:h-20 mb-3 rounded-full shadow p-0.5 dark:text-gray-600 ring-1 ring-gray-200 dark:ring-gray-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"></path></svg>
            <h5 class="text-base font-semibold tracking-tight text-gray-900 dark:text-gray-300">Irvan Hakim</h5>
            <blockquote class="text-sm px-4 mt-2 text-center font-light text-gray-900 dark:text-gray-300">
              "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Cumque, unde? lorem10
            </blockquote>
          </div>
        </a>
      </div>
      <div class="w-full max-w-sm mx-auto bg-white hover:bg-gray-50 dark:hover:bg-gray-900 border border-gray-200 rounded-xl shadow dark:bg-gray-800 dark:border-gray-700">
        <a href="#">
          <div class="flex flex-col items-center pt-8 pb-6">
            <svg class="w-16 md:w-20 h-16 md:h-20 mb-3 rounded-full shadow p-0.5 dark:text-gray-600 ring-1 ring-gray-200 dark:ring-gray-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"></path></svg>
            <h5 class="text-base font-semibold tracking-tight text-gray-900 dark:text-gray-300">Khikmal Kurniawan</h5>
            <blockquote class="text-sm px-4 mt-2 text-center font-light text-gray-900 dark:text-gray-300">
              "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Cumque, unde? lorem10
            </blockquote>
          </div>
          </a>
      </div>
    </div>

  </div>

</div>
@endsection