<x-layout>
<x-slot name="title"> Browse Jobs</x-slot>
<h1>
     available Jobs
    </h1>
    <ul>
    @if (count($jobs)==0)
        
        <h3>No Jobs available</h3>
        @else
          @foreach ($jobs as $job)
        <li>
        <a href="{{route('jobs.show',$job->id)}}">{{$job->title}}</a> - {{$job->description}}
       </li>  
        @endforeach
    
        
    @endif

    
       
    </ul>
</x-layout>