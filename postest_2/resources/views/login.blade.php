@extends('layouts.base')

@section('content')
    <div>
      <h1 class="text-center font-bold text-4xl">Login Admin</h1>
      
    <form action="/login" method="POST" class="flex flex-col  w-2/5 mx-auto">
      @csrf
      <label for="emailAdmin" class="mt-4">Email</label>
    <input type="email" name="emailAdmin" id="emailAdmin" class="border-2 rounded-md p-1">
    <label for="passwordAdmin" class="mt-4">Password</label>
    <input type="password" name="passwordAdmin" id="passwordAdmin" class="border-2 rounded-md p-1"> 
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