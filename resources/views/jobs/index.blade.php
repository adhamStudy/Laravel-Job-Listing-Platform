@extends('layout')
    
@section('content')
    


<h1>
     available Jobs
    </h1>
    <ul>
    @if (count($jobs)==0)
        
        <h3>No Jobs available</h3>
        @else
          @foreach ($jobs as $job)
        <li>
        {{$job}}
       </li>  
        @endforeach
    
        
    @endif

    
       
    </ul>
    @endsection