
<a href="{{ url()->previous(); }}" 
    class="px-5 py-2 max-w-md mx-auto mt-5 bg-sky-900 rounded-lg shadow-md text-white font-bold {{ $attributes->get('class') }}" 
    {{ $attributes }}
    > 
    {{ $slot }} 
</a>
