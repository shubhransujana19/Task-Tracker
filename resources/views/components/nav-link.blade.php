@props(['active' => false ])

<a
    class="{{ $active ? ' bg-gray-900 text-white' : 'text-white ' }} px-3 py-2 rounded-md text-m font-medium "
    area-current =" {{ $active ? 'Page' : 'false' }} "

    {{ $attributes }}

> {{ $slot }} </a>
