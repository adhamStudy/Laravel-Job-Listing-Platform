@props(['id','name','placeholder','label'=>null,'type'=>'text','value'=>'','placeholder'=>''])


<div class="mb-4">
    @if ($label)
    <label class="block text-gray-700" for="{{$id}}"
    >{{$label}}</label>
    @endif
   
    <input
    value="{{old($name,$value)}}"    
        id="{{$id}}"
        type="{{$type}}"
        name="{{$name}}"
        class=" @error($name) border-red-500 @enderror  w-full px-4 py-2 border rounded focus:outline-none"
        placeholder="{{$placeholder}}"
    />

@error($name)
    <p class="text-red-500 text-sm mb-2">
        {{$message}}
    </p>

@enderror
</div>