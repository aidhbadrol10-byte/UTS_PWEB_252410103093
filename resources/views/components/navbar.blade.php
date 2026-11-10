@props(['username' => ''])

@php
    $menu = ['dashboard' => 'Dashboard', 'pengelolaan' => 'Pengelolaan', 'profile' => 'Profile'];
@endphp

<header class="sticky top-0 z-50 px-4 pt-4">
    <nav class="max-w-4xl mx-auto flex items-center justify-between bg-white/70 backdrop-blur-md shadow-lg shadow-indigo-100 rounded-full px-5 py-2">
        <span class="font-bold text-lg text-indigo-600">TugasKu</span>

        <div class="flex gap-1 text-sm font-medium">
            @foreach ($menu as $url => $label)
                <a href="/{{ $url }}?username={{ $username }}"
                   class="px-3 py-1.5 rounded-full {{ request()->is($url) ? 'bg-indigo-100 text-indigo-700' : 'text-gray-500 hover:bg-gray-100' }}">
                    {{ $label }}
                </a>
            @endforeach
        </div>

        <a href="/login" class="text-sm bg-indigo-600 text-white px-4 py-1.5 rounded-full hover:bg-indigo-700">Keluar</a>
    </nav>
</header>