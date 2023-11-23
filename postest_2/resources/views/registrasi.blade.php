@extends('layouts.base')

@section('content')
    <div>
      <h1 class="text-center font-bold text-4xl">Login Admin</h1>
      
      @if ($errors->any())
      <div class="alert alert-danger" role="alert">
          @foreach ($errors->all() as $error)
          {{ $error }}</li>
          @endforeach
      </div>
      @endif
    <form action="" method="POST" class="flex flex-col  w-2/5 mx-auto">
      @csrf
      <label for="name" class="mt-4">name</label>
    <input type="text" name="name" id="nama" class="border-2 rounded-md p-1">
      <label for="email" class="mt-4">Email</label>
    <input type="email" name="email" id="email" class="border-2 rounded-md p-1">
    <label for="password" class="mt-4">Password</label>
    <input type="password" name="password" id="password" class="border-2 rounded-md p-1"> 
    <button class="mt-8 bg-amber-400 rounded-md p-1 shadow-md hover:bg-amber-200">Log In!</button> 
    </form>  
    {{-- @if (session()->has('error'))
        <script>
          console.log('gagal')
            Swal.fire({
                title: "{{ session('error') }}",
                icon: 'error',
                showConfirmButton: false,
                timer: 2000
            })
        </script>
    
    @endif --}}
    </div>    

@endsection