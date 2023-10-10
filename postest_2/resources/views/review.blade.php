@extends('layouts.base')

@section('content')
  <div>
    <div class="grid grid-cols-4 gap-x-8 py-5">
      <div class="text-center col-span-1">
        <img class="w-full h-3/6 bg-cover" src="/assets/product/product_1615881314_Somethinc__800x800.jpg" alt="">
        <div id="contentProduct" class="leading-8 " >
          <p class="font-bold">Somethinc Glow Maker</p>
          <p>Rp60.000</p>
          <p class="bg-amber-300 inline px-2 py-1 rounded-xl ">Rate: 10/10</p>
          <p class="text-sm p-1">Recommended banget untuk yang kulitnya berminyak. Udah pakai hampir 2 tahun. Muka jadi glowing dan blackhead hilang</p>
        </div>
      </div>
      <div class="text-center col-span-1">
        <img class="w-full h-3/6 bg-cover" src="/assets/product/toner_wardah.jpg" alt="">
        <div id="contentProduct" class="leading-8 " >
          <p class="font-bold">Wardah lightening Face Toner</p>
          <p>Rp26.500</p>
          <p class="bg-amber-300 inline px-2 py-1 rounded-xl ">Rate: 7/10</p>
          <p class="text-sm p-1">Claimnya sih 'whitening', tapi di aku gak ngefek apa-apa. Mungkin harus pake sama produk wardah yang lain yang sepaket sama toner ini. Tapi emang ini toner termasuk murah</p>
        </div>
      </div>
      <div class="text-center col-span-1">
        <img class="w-full h-3/6 bg-cover" src="/assets/product/toner wardah acnederm.jpg" alt="">
        <div id="contentProduct" class="leading-8 " >
          <p class="font-bold">Wardah Toner Acnederm</p>
          <p>Rp32.500</p>
          <p class="bg-amber-300 inline px-2 py-1 rounded-xl ">Rate: 6/10</p>
          <p class="text-sm p-1">Toner wardah kedua yang aku pakai. Tidak ada efek. Wanginya juga kurang enak. Karena ini untuk acnederm, makanya gak pakai fragrance. Biar aman untuk wajah sensitif.</p>
        </div>
      </div>
      <div class="text-center col-span-1">
        <img class="w-full h-3/6 bg-cover" src="/assets/product/toner_hadalabo.png" alt="">
        <div id="contentProduct" class="leading-8 " >
          <p  class="font-bold">Hada Labo Gokyujun Ultimate Moisturizing Lotion</p>
          <p>Rp40.000</p>
          <p class="bg-amber-300 inline px-2 py-1 rounded-xl ">Rate: 10/10</p>
          <p class="text-sm p-1">The best mosturizing toner. Udah aku pakai hampir 2 tahun. Pendampingnya Somethinc Glow Maker. </p>
        </div>
      </div>
    </div>
  </div>
  <div>
    <div class="grid grid-cols-4 gap-x-8 py-5">
      <div class="text-center col-span-1">
        <img class="w-full h-3/6 bg-cover" src="/assets/product/serum_emina.jpg" alt="">
        <div id="contentProduct" class="leading-8 " >
          <p class="font-bold">Emina Bright Stuff Face Serum</p>
          <p>Rp40.000</p>
          <p class="bg-amber-300 inline px-2 py-1 rounded-xl ">Rate: 3/10</p>
          <p class="text-sm p-1">Gak cocok huhuhu. Gak tau kenapa setelah pakai serum ini, besoknya pasti muncul jerawat. jadi gak dipakai lagi. Untuk serum sebanyak ini dan harga semurah ini, emang gabisa mengharap banyak</p>
        </div>
      </div>
      <div class="text-center col-span-1">
        <img class="w-full h-3/6 bg-cover" src="/assets/product/facewash_garnier.jpg" alt="">
        <div id="contentProduct" class="leading-8 " >
          <p class="font-bold">Garnier Sakura Glow Hyaluron Face Wash</p>
          <p>Rp40.000</p>
          <p class="bg-amber-300 inline px-2 py-1 rounded-xl ">Rate: 5/10</p>
          <p class="text-sm p-1">Gak ngefek apa-apa. Tidak bikin rusak dan tidak mengupgrade wajah. Wanginya enak sih</p>
        </div>
      </div>
      <div class="text-center col-span-1">
        <img class="w-full h-3/6 bg-cover" src="/assets/product/mosturizer_viva.jpg" alt="">
        <div id="contentProduct" class="leading-8 " >
          <p class="font-bold">Viva Waterdrop Sleepmask</p>
          <p>Rp24.000</p>
          <p class="bg-amber-300 inline px-2 py-1 rounded-xl ">Rate: 10/10</p>
          <p class="text-sm p-1">INI BAGUS BANGET. Gak bakal ganti-ganti mosturizer karena emang sebagus itu. Harga segitu dapat mosturizer yan emang work langka banget. Harus coba pakai sihh</p>
        </div>
      </div>
      <div class="text-center col-span-1">
        <img class="w-full h-3/6 bg-cover" src="/assets/product/serum_scarlett acne.jpg" alt="">
        <div id="contentProduct" class="leading-8 " >
          <p class="font-bold">Scarlett Acne Serum</p>
          <p>Rp50.000</p>
          <p class="bg-amber-300 inline px-2 py-1 rounded-xl ">Rate: 8/10</p>
          <p class="text-sm p-1">3 bulan pemakaian emang work banget. Keliatan hasilnya. Tapi setelah itu gak ada perkembangan lagi. Bahkan malah ga bekerja gitu serumnya. Mungkin karena wajah udah terbiasa makanya gak ngefek</p>
        </div>
      </div>
    </div>
  </div>
  <div>
    <h1 class="font-bold text-center text-3xl my-4">KOMENTAR</h1>
    <form action="">
      <label for="username"></label>
      <input type="text">
    </form>
  </div>

@endsection