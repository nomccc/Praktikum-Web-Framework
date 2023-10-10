@extends('layouts.base')

@section('content')
    <div>
      <h1 class="font-bold text-2xl  text-center">Tambah Product</h1>
      <form action="/dashboard" method="post" class="flex flex-col w-1/5 mx-auto py-8" enctype="multipart/form-data">
        @csrf
        <label for="image" >Gambar Product</label>
        <img class="img-preview img-fluid mb-3 col-sm-5">
        <input type="file" name="image" id="image" class="mb-5" onchange="previewImage()">
        <label for="name" >Nama Product</label>
        <input type="text" name="name" id="name" class="mb-5 border-2">
        <label for="harga">Harga Product</label>
        <input class="mb-5 border-2" type="number" name="harga" id="harga" placeholder="100">
        <button class="bg-amber-400 rounded-md" type="submit">Tambah Produk</button>
      </form>
    </div>

    <script>
      function previewImage(){
        const image = document.querySelector('#image');
        const imgPreview = document.querySelector('.img-preview');

        imgPreview.style.display = 'block';

        const oFReader = new FileReader();
        oFReader.readAsDataURL(image.files[0]);

        oFReader.onload = function(oFREvent){
            imgPreview.src = oFREvent.target.result;
        }
    }
    </script>
@endsection