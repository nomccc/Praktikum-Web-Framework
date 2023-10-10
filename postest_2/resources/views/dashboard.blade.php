@extends('layouts.base')

@section('content')
    <div>
      <h1 class="font-bold text-2xl  text-center">Tambah Product</h1>
      <form action="" class="flex flex-col w-1/5 mx-auto py-8">
        <label for="productName" >Nama Product</label>
        <input type="text" name="productName" id="productName" class="mb-5 border-2">
        <label for="productPrice">Harga Product</label>
        <input class="mb-5 border-2" type="number" name="productPrice" id="productPrice" placeholder="100">
        <button class="bg-amber-400 rounded-md">Tambah Produk</button>
      </form>
    </div>
@endsection