@php
    $isActive = request()->is(trim($href, '/'));
@endphp

<li>
    <a href="{{ $href }}"
        @class([
            'flex items-center p-2 text-base font-medium rounded-lg group',
            'bg-gray-100 text-gray-900 dark:bg-gray-700 dark:text-white' => $isActive,
            'text-gray-900 dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700' => !$isActive,
        ])>

        {!! $icon !!}

        <span class="ml-3">{{ $label }}</span>
    </a>
</li>
