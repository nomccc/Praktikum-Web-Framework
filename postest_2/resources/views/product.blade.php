@extends('layouts.base')

@section('content')
    <div class="">
      <h1 class="bg-amber-600 text-xl text-slate-100 py-2 px-5 rounded-xl">Facewash</h1>
      <div class="grid grid-cols-4 gap-x-8 my-12">
        <div class="text-center col-span-1">
          <img class="w-full h-4/6 bg-cover" src="/assets/product/facewash_garnier.jpg" alt="">
          <div id="contentProduct" class="leading-8 " >
            <p class="font-bold">Somethinc Glow Maker</p>
            <p>Rp40.000</p>
          </div>
      </div>
    </div>
    </div>
    <div class="">
      <h1 class="bg-amber-600 text-xl text-slate-100 py-2 px-5 rounded-xl">Toner</h1>
      <div class="grid grid-cols-4 gap-x-8 my-12">
        <div class="text-center col-span-1">
          <img class="w-full h-4/6 bg-cover" src="/assets/product/product_1615881314_Somethinc__800x800.jpg" alt="">
          <div id="contentProduct" class="leading-8 " >
            <p class="font-bold">Somethinc Glow Maker</p>
            <p>Rp60.000</p>
          </div>
      </div>
        <div class="text-center col-span-1">
          <img class="w-full h-4/6 bg-cover" src="/assets/product/toner_wardah.jpg" alt="">
          <div id="contentProduct" class="leading-8 " >
            <p class="font-bold">Wardah lightening Face Toner</p>
          <p>Rp26.500</p>
          </div>
      </div>
        <div class="text-center col-span-1">
          <img class="w-full h-4/6 bg-cover" src="/assets/product/toner wardah acnederm.jpg" alt="">
          <div id="contentProduct" class="leading-8 " >
            <p class="font-bold">Somethinc Glow Maker</p>
            <p>Rp32.500</p>
          </div>
      </div>
        <div class="text-center col-span-1">
          <img class="w-full h-4/6 bg-cover" src="/assets/product/toner_hadalabo.png" alt="">
          <div id="contentProduct" class="leading-8 " >
            <p  class="font-bold">Hada Labo Gokyujun Ultimate Moisturizing Lotion</p>
          <p>Rp40.000</p>
          </div>
      </div>
    </div>
    </div>
    <div class="">
      <h1 class="bg-amber-600 text-xl text-slate-100 py-2 px-5 rounded-xl">Serum</h1>
      <div class="grid grid-cols-4 gap-x-8 my-12">
        <div class="text-center col-span-1">
          <img class="w-full h-4/6 bg-cover" src="/assets/product/serum_emina.jpg" alt="">
          <div id="contentProduct" class="leading-8 " >
            <p class="font-bold">Emina Bright Stuff Face Serum</p>
            <p>Rp40.000</p>
          </div>
      </div>
        <div class="text-center col-span-1">
          <img class="w-full h-4/6 bg-cover" src="/assets/product/serum_scarlett acne.jpg" alt="">
          <div id="contentProduct" class="leading-8 " >
            <p class="font-bold">Scarlett Acne Serum</p>
            <p>Rp50.000</p>
          </div>
      </div>
    </div>
    </div>
    <div class="">
      <h1 class="bg-amber-600 text-xl text-slate-100 py-2 px-5 rounded-xl">Mosturizer</h1>
      <div class="grid grid-cols-4 gap-x-8 my-12">
        <div class="text-center col-span-1">
          <img class="w-full h-4/6 bg-cover" src="/assets/product/mosturizer_viva.jpg" alt="">
          <div id="contentProduct" class="leading-8 " >
            <p class="font-bold">Viva Waterdrop Sleepmask</p>
          <p>Rp24.000</p>
          </div>
      </div>
    </div>
    </div>
    <div class="">
      @foreach ($dataProduct as $item)
      <div class="grid grid-cols-4 gap-x-8 my-12">
        <div class="text-center col-span-1">
          <img src="{{ asset('storage/' . $item->image) }}" alt="">
          <div id="contentProduct" class="leading-8 " >
            <p class="font-bold">{{$item -> name}}</p>
          <p>{{$item -> harga}}</p>
          </div>
      </div>
    </div>
      @endforeach
    </div>

@endsection