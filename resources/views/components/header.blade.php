

<header class="bg-blue-900 text-white p-4">
    <div class="container mx-auto flex justify-between items-center">
        <h1 class="text-3xl font-semibold">
            <a href="{{url('/')}}">Workopia</a>
        </h1>
        <nav class="hidden md:flex items-center space-x-4">

            <x-nav-link :active="request()->is('/')" url="/">Home</x-nav-link>

            <x-nav-link :active="request()->is('jobs')" url="/jobs">All Jobs</x-nav-link>
            <x-nav-link :active="request()->is('jobs/saved')" url="/jobs/saved">Saved Jobs</x-nav-link>
           
            <x-nav-link :active="request()->is('login')" url="/login" >Login</x-nav-link>

          
            <x-nav-link :active="request()->is('register')" url="/register">register</x-nav-link>

            <x-nav-link :active="request()->is('dashboard')" url="/dashboard" icon="gauge">
                Dashboard
            </x-nav-link>

            <x-button-link bgClass='bg-yellow-500' hoverClass='hover:bg-yellow-600' textClass="text-black" url="/jobs/create" icon="edit">Create a Job</x-button-link>
        </nav>
        <button
      
            id="hamburger"
            class="text-white md:hidden flex items-center"
        >
            <i class="fa fa-bars text-2xl"></i>
        </button>
    </div>
    <!-- Mobile Menu -->
    <nav 
        id="mobile-menu"
        x-if="hideNav"
        class=" hidden md:hidden bg-blue-900 text-white mt-5 pb-4 space-y-2"
    >
    <x-nav-link :mobile="true" :active="request()->is('jobs')" url="/jobs">All Jobs</x-nav-link>

    <x-nav-link :mobile="true" :active="request()->is('jobs/saved')" url="/jobs/saved">Saved Jobs</x-nav-link>

    <x-nav-link :mobile="true" :active="request()->is('login')" url="/login">Login</x-nav-link>
    
    <x-nav-link :mobile="true" :active="request()->is('register')" url="/register">Register</x-nav-link>

       
    <x-nav-link icon="gauge" :mobile="true" :active="request()->is('dashboard')" url="/dashboard">Dashboard</x-nav-link>

    <x-button-link block="block" bgClass='bg-yellow-500' hoverClass='hover:bg-yellow-600' textClass="text-black" url="/jobs/create" icon="edit">Create a Job</x-button-link>
  
        {{-- <a
            href="{{url('/jobs/create')}}"
            class="block px-4 py-2 bg-yellow-500 hover:bg-yellow-600 text-black"
        >
            <i class="fa fa-edit"></i> Create Job
        </a> --}}
    </nav>
</header>