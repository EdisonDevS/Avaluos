@php
    $navClasses = Request::routeIs($menu['route'])
            ? 'group flex items-center px-2 py-2 text-sm leading-5 font-medium text-gray-900 rounded-md bg-gray-100 hover:text-gray-900 hover:bg-gray-100 focus:outline-none focus:bg-gray-200 transition ease-in-out duration-150'
            : 'group flex items-center px-2 py-2 text-sm leading-5 font-medium text-gray-600 rounded-md hover:text-gray-900 hover:bg-gray-50 focus:outline-none focus:bg-gray-100 transition ease-in-out duration-150';
    $iconClasses = Request::routeIs($menu['route'])
        ? 'mr-3 h-6 w-6 text-gray-400 group-hover:text-gray-500 group-focus:text-gray-600 transition ease-in-out duration-150'
        : 'mr-3 h-6 w-6 text-gray-400 group-hover:text-gray-500 group-focus:text-gray-500 transition ease-in-out duration-150';
@endphp

<a href="{{route($menu['route'])}}"
   class="{{$navClasses}}"
   >
    <x-icon icon="{{$menu['icon']}}" class="{{$iconClasses}}">
    </x-icon>
    {{ $menu['name'] }}
</a>
