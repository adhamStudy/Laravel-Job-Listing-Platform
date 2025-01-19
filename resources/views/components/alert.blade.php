@props(['type', 'message','timeout'=>'5000'])

@if(session()->has($type))
    <div 
        x-data="{ show: false }" 
        x-init="setTimeout(() => { show = true; setTimeout(() => show = false, {{$timeout}}) }, 500)" 
        x-show="show" 
        x-transition:enter="transition ease-out duration-300"
        x-transition:enter-start="opacity-0 transform translate-y-4"
        x-transition:enter-end="opacity-100 transform translate-y-0"
        x-transition:leave="transition ease-in duration-300"
        x-transition:leave-start="opacity-100 transform translate-y-0"
        x-transition:leave-end="opacity-0 transform translate-y-4"
        class="p-4 mb-4 text-sm text-white rounded {{ $type == 'success' ? 'bg-green-500' : 'bg-red-500' }} m-10"
    >
        {{ $message }}
    </div>
@endif