<x-layout>
<h1>Create a new Job</h1>
   
<form action="{{route('jobs.store')}}" method="POST">
 @csrf
 <div class="my-5">
    <input class="p-1" type="text" name="title" placeholder="title" value="{{old('title')}}">
    @error('title')
    <div class="text-red-500 mt2-2 text-sm font-bold">{{$message}}</div>
    @enderror
 </div>

 <div class="mb-5">
    <input class="p-1" type="text" name="description" placeholder="description" value="{{old('description')}}">
    @error('description')
    <div class="text-red-500 mt2-2 text-sm font-bold">{{$message}}</div>
    @enderror
 </div>

 <button type="submit">Submit</button>

</form>
</x-layout>