@extends('layout')
    
@section('content')
    
<h1>Create a new Job</h1>
   
<form action="{{route('jobs.store')}}" method="POST">
 @csrf
 <input type="text" name="title" placeholder="title">
 <input type="text" name="description" placeholder="description">
 <button type="submit">Submit</button>

</form>

@endsection