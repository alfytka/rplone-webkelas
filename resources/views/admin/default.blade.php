@extends('partials.admin')
@section('content')
<div class="p-4 sm:ml-64 dark:bg-slate-900/75">
  <div class="py-4 md:px-3 border-gray-200 dark:bg-slate-900/75 rounded-lg mt-12">
    <h5 class="text- md:text-lg mb-2 font-semibold text-gray-700 dark:text-gray-200">Data Siswa</h5>

    <nav class="flex mb-5">
      <ol class="inline-flex items-center space-x-1 md:space-x-3">
        <li class="inline-flex items-center">
          <a href="#" class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-blue-600 dark:text-gray-400 dark:hover:text-whtie">
            <svg aria-hidden="true" class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z"></path></svg>
            Home
          </a>
        </li>
        <li>
          <div class="flex items-center">
            <svg aria-hidden="true" class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>
            <a href="#" class="ml-1 text-sm font-medium text-gray-700 hover:text-blue-600 md:ml-2 dark:text-gray-400 dark:hover:text-white">Projects</a>
          </div>
        </li>
        <li aria-current="page">
          <div class="flex items-center">
            <svg aria-hidden="true" class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>
            <span class="ml-1 text-sm font-medium text-gray-500 md:ml-2 dark:text-gray-400">Flowbite</span>
          </div>
        </li>
      </ol>
    </nav>

    <div class="grid grid-cols-1 lg:grid-cols-3 gap-0 lg:gap-5">
      <div class="hidden md:inline">
        <div class="dark:bg-[#0f172a] border dark:border-gray-800 rounded-[10px] p-5">
          <div class="card-title mb-3">
            <h5 class="text-base font-medium dark:text-slate-300 leading-none">Input Data</h5>
          </div>
          <div class="input-group mb-3.5">
            <label for="first_name" class="block mb-1 text-sm font-medium text-gray-900 dark:text-slate-300">First name</label>
            <input type="text" id="first_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-md focus:ring-indigo-600 focus:border-indigo-600 block w-full py-1.5 dark:bg-gray-800 dark:border-gray-700 dark:placeholder-gray-400 dark:text-white dark:focus:ring-indigo-600 dark:focus:border-indigo-600" placeholder="John" required>
          </div>
          <div class="input-group mb-3.5">
            <label for="first_name" class="block mb-1 text-sm font-medium text-gray-900 dark:text-slate-300">First name</label>
            <input type="text" id="first_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-md focus:ring-indigo-600 focus:border-indigo-600 block w-full py-1.5 dark:bg-gray-800 dark:border-gray-700 dark:placeholder-gray-400 dark:text-white dark:focus:ring-indigo-600 dark:focus:border-indigo-600" placeholder="John" required>
          </div>
          <div class="input-group mb-3.5">
            <label for="first_name" class="block mb-1 text-sm font-medium text-gray-900 dark:text-slate-300">First name</label>
            <input type="text" id="first_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-md focus:ring-indigo-600 focus:border-indigo-600 block w-full py-1.5 dark:bg-gray-800 dark:border-gray-700 dark:placeholder-gray-400 dark:text-white dark:focus:ring-indigo-600 dark:focus:border-indigo-600" placeholder="John" required>
          </div>
          <div class="flex items-center justify-end gap-x-6 mb-3">
            <button type="button" class="text-sm font-medium leading-6 text-gray-900 dark:text-slate-300">Cancel</button>
            <button type="submit" class="rounded-md flex bg-indigo-600 py-[7px] pl-4 text-sm font-medium text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
              Save 
              <svg class="w-[18px] h-[18px] ml-1 mr-3" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"></path>
              </svg>
            </button>
          </div>
        </div>
      </div>
      <div class="col-span-2">
        <div class="pb-4 md:space-x-3 bg-white flex items-center md:justify-between dark:bg-gray-900/75">
          <div>
            <div id="alert-1" class="hidden lg:flex p-3.5 text-green-800 rounded-xl bg-blue-50 dark:bg-gray-800 dark:text-green-400" role="alert">
              <svg class="flex-shrink-0 w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"></path>
              </svg>
              <span class="sr-only">Info</span>
              <div class="ml-3 text-sm font-medium">
                Data berhasil diubahhhhhhh.
              </div>
              <button type="button" class="ml-auto -mx-1.5 -my-1.5 text-green-500 rounded-lg focus:outline-none p-1.5 inline-flex h-7 w-7 dark:text-green-400" data-dismiss-target="#alert-1" id="closebtn" aria-label="Close">
                <span class="sr-only">Close</span>
                <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
              </button>
            </div>
          </div>
          <form id="search" class="pr-[1px]">
            <label for="search-table" class="sr-only">Search</label>
            <div class="relative md:mt-5 lg:mt-1">
              <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path></svg>
              </div>
              <input type="text" id="search-table"  name="search" class="block p-2 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg w-80 md:w-64 bg-gray-50 focus:ring-indigo-600 focus:border-indigo-600 dark:bg-gray-800/40 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-indigo-600 dark:focus:border-indigo-600" placeholder="Cari siswa..." autocomplete="off">
            </div>
          </form>
        </div>
        <div class="relative overflow-x-auto rounded-md md:rounded-lg border dark:border-gray-800">
          <table id="tabless" class="w-full text-sm text-left text-gray-700 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-100/70 dark:bg-gray-800 dark:text-gray-400">
              <tr>
                <th scope="col" class="px-6 py-3">
                  Nama Siswa
                </th>
                <th scope="col" class="px-6 py-3">
                  Kelas
                </th>
                <th scope="col" class="px-6 py-3">
                  Hoby
                </th>
                <th scope="col" class="px-6 py-3"></th>
              </tr>
            </thead>
            <tbody id="result">
              @foreach ($users as $user)
              <tr class="bg-white border-b dark:bg-gray-800/40 dark:border-gray-700 hover:bg-gray-100/70 dark:hover:bg-gray-900">
                <td class="px-6 py-3 whitespace-nowrap">
                  {{ $user->name }}
                </td>
                <td class="px-6 py-3">
                  {{ $user->quotes }}
                </td>
                <td class="px-6 py-3">
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

  </div>
</div>
<div class="fixed right-6 bottom-6 group flex md:hidden">
  <button data-tooltip-target="btninfo" data-tooltip-placement="left" type="button" class="flex items-center justify-center text-white bg-indigo-600 rounded-full w-12 h-12 hover:bg-indigo-500 dark:bg-indigo-600 dark:hover:bg-indigo-500 focus:ring-4 focus:ring-indigo-300 focus:outline-none dark:focus:ring-indigo-800">
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