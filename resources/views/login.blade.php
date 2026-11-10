@extends('layouts.app')
 
@section('title', 'Login')

@section('content')
<form action="/dashboard" method="GET" class="kartu max-w-sm mx-auto p-6 rounded-lg">
    <h1 class="text-2xl font-bold mb-4">"TugasKu"</h1>
    <input type="text" name="username" placeholder="Username" class="w-full border rounded p-2 mb-4 ">
    <button type="submit" class="w-full bg-blue-500 text-white rounded p-2">Masuk</button>
</form>
@endsection
