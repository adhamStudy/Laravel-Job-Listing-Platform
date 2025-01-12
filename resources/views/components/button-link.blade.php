@props([
    'url'=>'/',
    'icon'=>null,
    'bgClass'=>'bg-yellow-500',
    'hoverClass'=>'hover:bg-yellow-600',
    'textClass'=>'text-black',
    'block'=>''
    
    ])
@if ($block=='block')
<a href="{{$url}}" class="block {{$bgClass}} {{$hoverClass}} {{$textClass}} px-4 py-2 rounded hover:shadow-md transition duration-300">
    @if($icon)
    <i class="fa fa-{{$icon}} mr-1"></i>
    @endif
    {{$slot}}
    </a> 
@else


<a href="{{$url}}" class="{{$bgClass}} {{$hoverClass}} {{$textClass}} px-4 py-2 rounded hover:shadow-md transition duration-300">
    @if($icon)
    <i class="fa fa-{{$icon}} mr-1"></i>
    @endif
    {{$slot}}
    </a>

    @endif