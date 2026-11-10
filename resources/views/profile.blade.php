@extends('layouts.app')
 
@section('title', 'Profile')

@section('content')
<div class="kartu max-w-md mx-auto p-8 text-center">
    <h1 class="text-2xl font-bold ">{{ $username }}</h1>
    <p class="text-gray-500 mb-6">Akun TugasKu</p>

    <dl class="text-left space-y-2">
        @foreach ($profile as $label => $isi)
            <div class="flex justify-between border-b pb-2">
                <dt class="text-blue-500 capitalize">{{ $label }}</dt>
                <dd class="font-medium">{{ $isi }}</dd>
            </div>
        @endforeach
    </dl>
</div>
@endsection
