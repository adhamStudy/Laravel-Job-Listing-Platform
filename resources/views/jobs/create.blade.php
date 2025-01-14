<x-layout>
<h1>Create a new Job</h1>
   
<form class="p-2 mt-5" action="{{route('jobs.store')}}" method="POST">
 @csrf
 <div class="mb-1">
    <input class="p-2" type="text" name="title" placeholder="title" value={{old('title')}}>
    @error('title')
    <p style="color: red;">{{$message}}</p>
    @enderror

 </div>
<div class="mt-4">
    <input class="p-2" type="text" name="description" placeholder="description" value={{old('description')}}>
    @error('description')
    <p style="color: red;">{{$message}}</p>
    @enderror
</div>
 <button type="submit">Submit</button>

</form>
</x-layout>