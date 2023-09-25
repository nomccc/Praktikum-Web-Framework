@extends('layouts.base')

@section('content')
    <div>
        <div class=" grid grid-cols-2 gap-x-10 text-center font-serif items-center">
            <div >
                {{-- <img src="/assets/Skincare spa products set for beauty of skin and hair.jpg" alt=""> --}}
                <img class="rounded-full" src="/assets/20230925095859_[fpdl.in]_mockup-perfume-skin-care-bottle-cosmetic-tube-beauty-makeup-facial-treatment-cleanser-face-foam-beauty-healthcare-branding-packaging_42100-2585_large.jpg" alt="">
            </div>
            <div class="px-8">
                <p class="text-end py-5">-Review Website</p>
                <h1 class="font-bold text-6xl text-amber-600">Review Product Skincare</h1>
                <p class=" text-xl py-5 text-gray-500">Ketahui lebih dalam tentang skincare yang akan kamu beli lewat website ini! </p>
                <button class=" border-2 border-amber-600 py-3 px-5 text-amber-600 hover:text-slate-100 hover:bg-amber-600 font-bold text-xl rounded-full">Lihat Review</button>
            </div>
          </div>
    </div>
@endsection