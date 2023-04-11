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

  <div class="block sm:flex sm:justify-between mx-auto max-w-7xl px-4 pt-3 md:px-14 lg:px-28 gap-0 sm:gap-4">
    <div>
      <div class="pb-5">
        <p class="pb-1 max-w-2xl text-sm text-gray-500 dark:text-slate-400">Jum'at, 30 Februari 2022</p>
        <h3 class="text-2xl md:text-3xl max-w-xl font-semibold leading-8 tracking-tight text-gray-900 dark:text-slate-300">Selalu Mengingat Tuhan dengan Cara Beribadah</h3>
        <p class="pt-2 max-w-2xl text-sm font-medium text-indigo-500">RPL 1 Developer Team</p>
        <div class="py-4 lg:h-[21rem] rounded-xl overflow-hidden">
          {{-- <img class="max-w-full sm:max-w-xs md:max-w-sm lg:min-h-[300px] lg:max-w-xl rounded-xl" src="/img/img5.jpg" alt=""> --}}
          <img class="max-w-full sm:max-w-xs md:max-w-sm lg:max-w-xl rounded-lg sm:rounded-xl" src="/img/img5.jpg" alt="">
        </div>
        <blockquote class="max-w-xl py-3 lg:pt-6 space-y-4 text-gray-700 dark:text-slate-300">
          <p><span class="font-medium">Banjar, SMKN 3 Banjar</span> -- sit amet consectetur adipisicing elit. Beatae minima vel quibusdam cum rem. Soluta, earum. Vel animi amet magni.</p>
          <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Accusamus autem eos a praesentium consequatur? Cum id incidunt quia error ab! Ea quo praesentium atque quia, fugiat sequi, illo, quasi quidem doloremque ratione quaerat? Optio amet earum, voluptate aliquid quaerat voluptas.</p>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam minima, assumenda maxime blanditiis distinctio voluptatibus. Odio consequuntur beatae repudiandae aut officia soluta ducimus.</p>
        </blockquote>
        <div class="end pt-2 pb-5 text-sm font-semibold text-gray-800 dark:text-slate-400">
          (end of content)
        </div>
      </div>
    </div>
    <div>
      <ul class="sm:pt-8 space-y-6 md:space-y-7">
        <li class="title">
          <h5 class="text-lg font-semibold text-gray-900 dark:text-slate-400">Aktifitas Lainnya</h5>
          <span class="text-sm text-gray-700 dark:text-slate-300">Moment yang sulit tuk dilupakan with all of you guys.</span>
        </li>
        <li>
          <a href="#" class="flex gap-x-4">
            <img class="w-[110px] sm:w-[120px] lg:w-[120px] h-[4.6rem] sm:h-20 ring-1 dark:ring-slate-800 object-cover rounded-lg" src="/img/img2.jpg" alt="">
            <div class="py-0.5 sm:py-1">
              <h5 class="text-base md:max-w-[16rem] font-semibold leading-5 tracking-tight text-gray-900 dark:text-slate-200">UKK RPL 2023 Sukses Dilaksanakan</h5>
              <time datetime="2020-03-16" class="text-xs text-gray-500 dark:text-slate-400">Mar 13, 2023</time>
            </div>
          </a>
        </li>
        <li>
          <a href="#" class="flex gap-x-4">
            <img class="w-[110px] sm:w-[120px] lg:w-[120px] h-[4.6rem] sm:h-20 ring-1 dark:ring-slate-800 object-cover rounded-lg" src="/img/img10.jpg" alt="">
            <div class="py-0.5 sm:py-1">
              <h5 class="text-base md:max-w-[16rem] font-semibold leading-5 tracking-tight text-gray-900 dark:text-slate-200">Bulan Rajab #codingsyar'i</h5>
              <time datetime="2020-03-16" class="text-xs text-gray-500 dark:text-slate-400">Feb 21, 2023</time>
            </div>
          </a>
        </li>
        <li>
          <a href="#" class="flex gap-x-4">
            <img class="w-[110px] sm:w-[120px] lg:w-[120px] h-[4.6rem] sm:h-20 ring-1 dark:ring-slate-800 object-cover rounded-lg" src="/img/img11.jpg" alt="">
            <div class="py-0.5 sm:py-1">
              <h5 class="text-base md:max-w-[16rem] font-semibold leading-5 tracking-tight text-gray-900 dark:text-slate-200">Awal Tahun 2023! Tahun terakhir We Are</h5>
              <time datetime="2020-03-16" class="text-xs text-gray-500 dark:text-slate-400">Jan 10, 2023</time>
            </div>
          </a>
        </li>
        <li>
          <a href="#" class="flex gap-x-4">
            <img class="w-[110px] sm:w-[120px] lg:w-[120px] h-[4.6rem] sm:h-20 ring-1 dark:ring-slate-800 object-cover rounded-lg" src="/img/img3.jpg" alt="">
            <div class="py-0.5 sm:py-1">
              <h5 class="text-base md:max-w-[16rem] font-semibold leading-5 tracking-tight text-gray-900 dark:text-slate-200">Siswa Berprestasi! Kenali Teman Kita Satu ini, Renal</h5>
              <time datetime="2020-03-16" class="text-xs text-gray-500 dark:text-slate-400">Dec 23, 2022</time>
            </div>
          </a>
        </li>
        <li>
          <a href="#" class="flex gap-x-4">
            <img class="w-[110px] sm:w-[120px] lg:w-[120px] h-[4.6rem] sm:h-20 ring-1 dark:ring-slate-800 object-cover rounded-lg" src="/img/img12.jpg" alt="">
            <div class="py-0.5 sm:py-1">
              <h5 class="text-base md:max-w-[16rem] font-semibold leading-5 tracking-tight text-gray-900 dark:text-slate-200">Memperingati Hari Guru - SMKN 3 Banjar</h5>
              <time datetime="2020-03-16" class="text-xs text-gray-500 dark:text-slate-400">Nov 28, 2022</time>
            </div>
          </a>
        </li>
        <li>
          <a href="#" class="flex gap-x-4">
            <img class="w-[110px] sm:w-[120px] lg:w-[120px] h-[4.6rem] sm:h-20 ring-1 dark:ring-slate-800 object-cover rounded-lg" src="/img/img4.jpg" alt="">
            <div class="py-0.5 sm:py-1">
              <h5 class="text-base md:max-w-[16rem] font-semibold leading-5 tracking-tight text-gray-900 dark:text-slate-200">Kunjungan Industri ke Cimahi Techno Park & Telkom University</h5>
              <time datetime="2020-03-16" class="text-xs text-gray-500 dark:text-slate-400">Oct 27, 2022</time>
            </div>
          </a>
        </li>
        <li>
          <a href="#" class="flex gap-x-4">
            <img class="w-[110px] sm:w-[120px] lg:w-[120px] h-[4.6rem] sm:h-20 ring-1 dark:ring-slate-800 object-cover rounded-lg" src="/img/img13.jpg" alt="">
            <div class="py-0.5 sm:py-1">
              <h5 class="text-base md:max-w-[16rem] font-semibold leading-5 tracking-tight text-gray-900 dark:text-slate-200">Gabut Teu Ka Tulung</h5>
              <time datetime="2020-03-16" class="text-xs text-gray-500 dark:text-slate-400">Sep 9, 2022</time>
            </div>
          </a>
        </li>
        <li>
          <a href="#" class="flex gap-x-4">
            <img class="w-[110px] sm:w-[120px] lg:w-[120px] h-[4.6rem] sm:h-20 ring-1 dark:ring-slate-800 object-cover rounded-lg" src="/img/img6.jpg" alt="">
            <div class="py-0.5 sm:py-1">
              <h5 class="text-base md:max-w-[16rem] font-semibold leading-5 tracking-tight text-gray-900 dark:text-slate-200">Ajang Perlombaan Fashion Show</h5>
              <time datetime="2020-03-16" class="text-xs text-gray-500 dark:text-slate-400">Aug 19, 2022</time>
            </div>
          </a>
        </li>
        <li>
          <a href="#" class="flex gap-x-4">
            <img class="w-[110px] sm:w-[120px] lg:w-[120px] h-[4.6rem] sm:h-20 ring-1 dark:ring-slate-800 object-cover rounded-lg" src="/img/img7.jpg" alt="">
            <div class="py-0.5 sm:py-1">
              <h5 class="text-base md:max-w-[16rem] font-semibold leading-5 tracking-tight text-gray-900 dark:text-slate-200">Seorang Khikmal Berhasil Mendapatkan Hadiah Door Prize</h5>
              <time datetime="2020-03-16" class="text-xs text-gray-500 dark:text-slate-400">Aug 18, 2022</time>
            </div>
          </a>
        </li>
        <li>
          <a href="#" class="flex gap-x-4">
            <img class="w-[110px] sm:w-[120px] lg:w-[120px] h-[4.6rem] sm:h-20 ring-1 dark:ring-slate-800 object-cover rounded-lg" src="/img/img8.jpg" alt="">
            <div class="py-0.5 sm:py-1">
              <h5 class="text-base md:max-w-[16rem] font-semibold leading-5 tracking-tight text-gray-900 dark:text-slate-200">Bermain Game Anti-Mainstream Bersama Temannya! Rafli Kalah Telak</h5>
              <time datetime="2020-03-16" class="text-xs text-gray-500 dark:text-slate-400">Aug 18, 2022</time>
            </div>
          </a>
        </li>
        <li>
          <a href="#" class="flex gap-x-4">
            <img class="w-[110px] sm:w-[120px] lg:w-[120px] h-[4.6rem] sm:h-20 ring-1 dark:ring-slate-800 object-cover rounded-lg" src="/img/img9.jpg" alt="">
            <div class="py-0.5 sm:py-1">
              <h5 class="text-base md:max-w-[16rem] font-semibold leading-5 tracking-tight text-gray-900 dark:text-slate-200">Awal Pertemuan RPL 1 Tahun 2020</h5>
              <time datetime="2020-03-16" class="text-xs text-gray-500 dark:text-slate-400">July 22, 2020</time>
            </div>
          </a>
        </li>
      </ul>
    </div>
  </div>
</div>
<footer class="max-w-6xl mx-auto px-4 md:px-14 lg:px-20 border-t dark:border-slate-800">
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