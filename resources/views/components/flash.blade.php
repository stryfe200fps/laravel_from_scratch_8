@if (session()->has('success'))
    <div x-data="{ show: true}"
        x-init="setTimeout(() => show = false, 4000)"
        x-show="show"
        class="fixed text-white bg-blue-500 py-2.5 px-2.5 rounded-xl right-3.5 bottom-3.5">
        <p>{{ session()->get('success') }}</p>
    </div> 
@endif