@extends('layouts.app')
 
@section('title', 'Dashboard')

@section('content')
<div class="kartu max-w-md mx-auto mt-6 rounded-3xl shadow p-8 text-center">
<div class="kartu rounded-2xI p-5">
    <h1 class="text-3xl font-bold" >Halo, {{ $username }}!</h1>
    <p class="text-gray-600 mt-2">TugasKu, pasti selesai!</p>
    <a href="/pengelolaan?username={{ $username }}" 
    class="inline-block mt-6 bg-indigo-500 text-white px-4 py-2 rounded hover:bg-blue-600">
    Lihat Tugas</a>
</div>
</div>
@endsection
