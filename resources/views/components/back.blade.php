
<a href="{{ url()->previous(); }}" 
    class="px-5 py-2 my-5 mx-3 bg-sky-900 rounded-lg shadow-md text-white font-bold {{ $attributes->get('class') }}" 
    {{ $attributes }}
    > 
    {{ $slot }} 
</a>
