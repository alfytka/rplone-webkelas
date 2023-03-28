@extends('partials.admin')
@section('content')
<div class="p-4 sm:ml-64 dark:bg-slate-900/75">
  <div class="py-4 md:px-3 border-gray-200 dark:bg-slate-900/75 rounded-lg mt-12">
    <h5 class="text-base md:text-[17px] mb-3 font-semibold text-gray-700 dark:text-gray-200">Data Siswa</h5>

    <div id="alert-1" class="flex p-4 mb-4 text-blue-800 rounded-xl bg-blue-50 dark:bg-gray-800 dark:text-blue-400" role="alert">
      <svg aria-hidden="true" class="flex-shrink-0 w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path></svg>
      <span class="sr-only">Info</span>
      <div class="ml-3 text-sm font-medium">
        A simple info alert with an <a href="#" class="font-semibold underline hover:no-underline">example link</a>. Give it a click if you like.
      </div>
      <button type="button" class="ml-auto -mx-1.5 -my-1.5 bg-blue-50 text-blue-500 rounded-lg focus:ring-2 focus:ring-blue-400 p-1.5 hover:bg-blue-200 inline-flex h-8 w-8 dark:bg-gray-800 dark:text-blue-400 dark:hover:bg-gray-700" data-dismiss-target="#alert-1" id="closebtn" aria-label="Close">
        <span class="sr-only">Close</span>
        <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
      </button>
    </div>

    <div class="pb-4 bg-white flex items-center md:justify-between dark:bg-gray-900/75">
      <div>
        <button type="button" class="mt-1 text-white bg-blue-600 hover:bg-blue-700 focus:ring-2 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2 text-center hidden md:inline-flex items-center dark:focus:ring-blue-800">
          Add <span class="md:hidden lg:flex lg:pl-1">siswa</span>
          <svg fill="none" class="w-5 h-5 p-0.5 text-blue-600 bg-blue-200 rounded-full ml-2 -mr-1" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15"></path>
          </svg>
        </button>
      </div>
      <form id="search" class="pr-[1px]">
        <label for="search-table" class="sr-only">Search</label>
        <div class="relative mt-1">
          <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
            <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path></svg>
          </div>
          <input type="text" id="search-table"  name="search" class="block p-2 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg w-80 bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-800/40 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Cari siswa..." autocomplete="off">
        </div>
      </form>
    </div>
    <div class="relative overflow-x-auto rounded-md md:rounded-lg">
      <table id="tabless" class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-100/70 dark:bg-gray-800 dark:text-gray-400">
          <tr>
            <th scope="col" class="px-6 py-3">
              Nama Siswa
            </th>
            <th scope="col" class="px-6 py-3">
              Kelas
            </th>
            <th scope="col" class="px-6 py-3">
              NIS
            </th>
            <th scope="col" class="px-6 py-3">
              Hoby
            </th>
            <th scope="col" class="px-6 py-3"></th>
          </tr>
        </thead>
        <tbody id="result">
          @foreach ($users as $user)
          <tr class="bg-slate-50/50 border-b dark:bg-gray-800/40 dark:border-gray-700 hover:bg-gray-100/70 dark:hover:bg-gray-900">
            <th scope="row" class="flex items-center px-6 py-4 text-gray-900 whitespace-nowrap dark:text-white">
              <img class="w-8 h-8 rounded-full" src="/img/profile.jpg" alt="Jese image">
              <div class="pl-3">
                <div class="text-sm font-medium">{{ $user->name }}</div>
                <div class="font-normal leading-none text-gray-500">neil.sims@flowbite.com</div>
              </div>  
            </th>
            <td class="px-6 py-4">
              {{ $user->quotes }}
            </td>
            <td class="px-6 py-4">
              {{ $user->nis }}
            </td>
            <td class="px-6 py-4">
              {{ $user->hoby }}
            </td>
            <td class="px-1">
              <button id="dropdownnn" data-dropdown-toggle="dropdown" class="px-1.5 py-1 text-sm font-medium text-slate-600 bg-transparent rounded-lg focus:outline-none hover:text-gray-900 focus:z-10 dark:text-slate-300 dark:hover:text-white dark:focus:text-white" type="button">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                  <path fill-rule="evenodd" d="M10.5 6a1.5 1.5 0 113 0 1.5 1.5 0 01-3 0zm0 6a1.5 1.5 0 113 0 1.5 1.5 0 01-3 0zm0 6a1.5 1.5 0 113 0 1.5 1.5 0 01-3 0z" clip-rule="evenodd" />
                </svg>
              </button>
              <div id="dropdown" class="z-10 hidden border border-gray-200 dark:border-gray-600 bg-white divide-y divide-gray-100 dark:divide-gray-700 rounded-lg shadow-sm w-44 dark:bg-gray-700/80 backdrop-blur-sm">
                <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownnn">
                  <li>
                    <a href="#" class="flex px-4 py-2 hover:bg-gray-100/70 dark:hover:bg-gray-700">
                      <svg class="w-[18px] h-[18px] mr-3 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                        <path d="M21.731 2.269a2.625 2.625 0 00-3.712 0l-1.157 1.157 3.712 3.712 1.157-1.157a2.625 2.625 0 000-3.712zM19.513 8.199l-3.712-3.712-12.15 12.15a5.25 5.25 0 00-1.32 2.214l-.8 2.685a.75.75 0 00.933.933l2.685-.8a5.25 5.25 0 002.214-1.32L19.513 8.2z" />
                      </svg> Edit</a>
                  </li>
                  <li>
                    <a href="#" class="flex px-4 py-2 hover:bg-gray-100/70 dark:hover:bg-gray-700">
                      <svg class="w-[18px] h-[18px] mr-3 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                      <path fill-rule="evenodd" d="M7.5 6a4.5 4.5 0 119 0 4.5 4.5 0 01-9 0zM3.751 20.105a8.25 8.25 0 0116.498 0 .75.75 0 01-.437.695A18.683 18.683 0 0112 22.5c-2.786 0-5.433-.608-7.812-1.7a.75.75 0 01-.437-.695z" clip-rule="evenodd" />
                    </svg> Detail</a>
                  </li>
                </ul>
                <div class="py-2">
                  <a data-modal-target="delete-modal" data-modal-toggle="delete-modal" class="flex px-4 py-2 text-gray-700 dark:text-gray-200 hover:bg-gray-100/70 dark:hover:bg-gray-700 cursor-pointer">
                    <svg class="w-[18px] h-[18px] mr-3 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                    <path fill-rule="evenodd" d="M16.5 4.478v.227a48.816 48.816 0 013.878.512.75.75 0 11-.256 1.478l-.209-.035-1.005 13.07a3 3 0 01-2.991 2.77H8.084a3 3 0 01-2.991-2.77L4.087 6.66l-.209.035a.75.75 0 01-.256-1.478A48.567 48.567 0 017.5 4.705v-.227c0-1.564 1.213-2.9 2.816-2.951a52.662 52.662 0 013.369 0c1.603.051 2.815 1.387 2.815 2.951zm-6.136-1.452a51.196 51.196 0 013.273 0C14.39 3.05 15 3.684 15 4.478v.113a49.488 49.488 0 00-6 0v-.113c0-.794.609-1.428 1.364-1.452zm-.355 5.945a.75.75 0 10-1.5.058l.347 9a.75.75 0 101.499-.058l-.346-9zm5.48.058a.75.75 0 10-1.498-.058l-.347 9a.75.75 0 001.5.058l.345-9z" clip-rule="evenodd" />
                  </svg> Remove</a>
                </div>
              </div>
            </td>
            <div id="delete-modal" tabindex="-1" class="fixed top-0 left-0 right-0 z-[42] hidden p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] md:h-full transform transition-all">
              <div class="relative w-full h-full max-w-md md:h-auto transform transition-all">
                <div class="relative bg-white rounded-lg shadow dark:bg-gray-700 transform transition-all">
                  <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white" data-modal-hide="delete-modal">
                    <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                    <span class="sr-only">Close modal</span>
                  </button>
                  <div class="p-6 text-center">
                    <svg aria-hidden="true" class="mx-auto mb-4 text-gray-400 w-14 h-14 dark:text-gray-200" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                    <p class="mb-5 text-base font-normal text-gray-500 dark:text-gray-400">Are you sure you want to delete this product?</p>
                    <form action="">
                      <button data-modal-hide="delete-modal" type="button" class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center mr-2">
                        Yes, I'm sure
                      </button>
                    </form>
                    <button data-modal-hide="delete-modal" type="button" class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">No, cancel</button>
                  </div>
                </div>
              </div>
            </div>
          </tr>
          @endforeach
        </tbody>
      </table>
      <div class="datanotfound">
        <p id="notFound" class="hidden text-sm text-center m-5 dark:text-slate-400">Maaf, data tidak ditemukan.</p>
      </div>
    </div>
  </div>
</div>
<div class="fixed right-6 bottom-6 group flex md:hidden">
  <button data-tooltip-target="btninfo" data-tooltip-placement="left" type="button" class="flex items-center justify-center text-white bg-blue-700 rounded-full w-12 h-12 hover:bg-blue-800 dark:bg-blue-600 dark:hover:bg-blue-700 focus:ring-4 focus:ring-blue-300 focus:outline-none dark:focus:ring-blue-800">
    <svg aria-hidden="true" class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path></svg>
    <span class="sr-only">Open actions menu</span>
  </button>
  <div id="btninfo" role="tooltip" class="absolute z-10 invisible inline-block whitespace-nowrap px-3 py-2 text-xs font-medium transition-opacity duration-300 bg-white border border-gray-200 rounded-lg shadow-sm opacity-0 tooltip dark:border-none dark:text-slate-200 dark:bg-gray-700">
    Tambah data siswa
    <div class="tooltip-arrow" data-popper-arrow></div>
  </div>
</div>
@endsection
@section('js')
<script>
  var table = document.getElementById("result");
  var search = document.getElementById("search-table");
  var notFound = document.getElementById("notFound");
  search.addEventListener("keyup", function() {
    var filter = search.value.toLowerCase();
    var found = false;
    for (var i = 0; i < table.rows.length; i++) {
      var row = table.rows[i];
      var cells = row.cells;
      var rowFound = false;
      for (j = 0; j < cells.length; j++) {
        var cell = cells[j];
        if (cell.innerHTML.toLowerCase().indexOf(filter) > -1) {
          rowFound = true;
          break;
        }
      }
      if (rowFound) {
        row.style.display = "";
        found = true;
      } else {
        row.style.display = "none";
      }
    }
    if (!found) {
      notFound.classList.remove('hidden')
    } else {
      notFound.classList.add('hidden');
    }
    // if (!found) {
    //   notFound.style.display = "";
    // } else {
    //   notFound.style.display = "none";
    // }
  });
</script>
@endsection