<!DOCTYPE html>
<html lang="en">
<head>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
     integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
     crossorigin="anonymous" referrerpolicy="no-referrer" />
     <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{$title ?? 'Workopia'}}</title>
</head>
<body class="bg-gray-100">
   <x-header/>
    @if(request()->is('/'))
    <x-hero title="Find Your Dream Job" />
    <x-top-banner></x-top-banner>
    @endif
    <main class="container mx-auto my-6">  

        {{-- Display alert Messages --}}
  
        @if(session('success'))
        <x-alert type="success" message="{{session('success')}}"></x-alert>
        @endif

        @if(session('error'))
        <x-alert type="error" message="{{session('error')}}"></x-alert>
        @endif

       {{$slot}}
       @if(request()->is('/'))
   <x-bottom-banner/>
    @endif
    </main>
    <script src="{{asset('/js/script.js')}}"></script>
</body>
</html>