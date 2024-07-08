@props(['active' => false])

<a class="flex items-center px-6 py-2 {{ $active ? 'text-gray-100 bg-gray-700 bg-opacity-25' : 'text-gray-500 hover:bg-gray-700 hover:bg-opacity-25 hover:text-gray-100'}}" 
    {{ $attributes }}
>
    {{ $icon }}

    <span class="mx-3"> {{ $slot }} </span>
</a>
