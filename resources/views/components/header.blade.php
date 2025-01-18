<header class="bg-blue-900 text-white p-4" x-data="{ open: false }">
    <div class="container mx-auto flex justify-between items-center">
        <h1 class="text-3xl font-semibold">
            <a href="{{ url('/') }}">Workopia</a>
        </h1>
        <!-- Desktop Navigation -->
        <nav class="hidden md:flex items-center space-x-4">
            <x-nav-link :active="request()->is('/')" url="/">Home</x-nav-link>
            <x-nav-link :active="request()->is('jobs')" url="/jobs">All Jobs</x-nav-link>
            @auth
            <x-nav-link :active="request()->is('jobs/saved')" url="/jobs/saved">Saved Jobs</x-nav-link>
            <x-nav-link :active="request()->is('dashboard')" url="/dashboard" icon="gauge">Dashboard</x-nav-link>
            <x-logout></x-logout>
            <x-button-link block="block" bgClass='bg-yellow-500' hoverClass='hover:bg-yellow-600' textClass="text-black" url="/jobs/create"  icon="edit">Create a Job</x-button-link>
            @else
            <x-nav-link :active="request()->is('login')" url="/login">Login</x-nav-link>
            <x-nav-link :active="request()->is('register')" url="/register">Register</x-nav-link>
            @endauth
 
           
        </nav>
        <!-- Mobile Menu Button -->
        <button
            @click="open = !open"
            id="hamburger"
            class="text-white md:hidden flex items-center"
        >
            <i class="fa fa-bars text-2xl"></i>
        </button>
    </div>
    <!-- Mobile Menu -->
    <nav 
        x-show="open"
        @click.away="open = false"
        x-transition:enter="transition ease-out duration-300"
        x-transition:enter-start="opacity-0 transform translate-y-4"
        x-transition:enter-end="opacity-100 transform translate-y-0"
        x-transition:leave="transition ease-in duration-300"
        x-transition:leave-start="opacity-100 transform translate-y-0"
        x-transition:leave-end="opacity-0 transform translate-y-4"
        class="md:hidden bg-blue-900 text-white mt-5 pb-4 space-y-2"
    >
        <x-nav-link :mobile="true" :active="request()->is('jobs')" url="/jobs">All Jobs</x-nav-link>
        <x-nav-link :mobile="true" :active="request()->is('jobs/saved')" url="/jobs/saved">Saved Jobs</x-nav-link>
        <x-nav-link :mobile="true" :active="request()->is('login')" url="/login">Login</x-nav-link>
        <x-nav-link :mobile="true" :active="request()->is('register')" url="/register">Register</x-nav-link>
        <x-nav-link icon="gauge" :mobile="true" :active="request()->is('dashboard')" url="/dashboard">Dashboard</x-nav-link>
        <x-button-link block="block" bgClass='bg-yellow-500' hoverClass='hover:bg-yellow-600' textClass="text-black" url="/jobs/create" icon="edit">Create a Job</x-button-link>
    </nav>
</header>