@php
    $buttons = [
        [
            'route' => 'home',
            'icon' => 'iconoir-menu',
            'active' => request()->routeIs('home'),
            'type' => 'link',
        ],
        [
            'route' => 'profile',
            'icon' => 'iconoir-profile-circle',
            'active' => request()->routeIs('profile'),
            'type' => 'link',
        ],
        [
            'route' => 'logout',
            'icon' => 'iconoir-log-out',
            'type' => 'logout',
        ],
    ];
@endphp

<div
    class="text-white border border-border-primary w-fit p-2 rounded-4xl gap-2 flex fixed left-1/2 -translate-1/2 bottom-2 bg-background-primary">

    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
        @csrf
    </form>

    @foreach ($buttons as $button)
        @php
            $baseClass = 'size-10 flex items-center justify-center hover:brightness-90 hover:cursor-pointer text-lg';
            $activeClass =
                !empty($button['active']) && $button['active'] ? 'bg-accent-orange text-black rounded-full' : '';
        @endphp

        @if ($button['type'] === 'logout')
            <button onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                class="{{ $baseClass }} {{ $activeClass }}">
                <i class="{{ $button['icon'] }}"></i>
            </button>
        @else
            <button onclick="window.location.href='{{ route($button['route']) }}'"
                class="{{ $baseClass }} {{ $activeClass }}">
                <i class="{{ $button['icon'] }}"></i>
            </button>
        @endif
    @endforeach

</div>
