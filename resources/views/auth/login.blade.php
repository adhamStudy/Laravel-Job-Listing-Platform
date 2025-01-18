<x-layout>
    <div class="bg-white rounded-lg md:max-w-xl shadow-md w-full mx-auto mt-12 p-8 py-12">

        <h2 class="text-4xl text-center font-bold mb-4">Login</h2>

        <form method="POST" action="{{route('login')}}">

         @csrf
        <x-inputs.text id="email" name="email" type="email" placeholder="example: joun@ex.com"  label="email"/>
        <x-inputs.text id="password" name="password" type="password" placeholder="type Strong password" label="password" />

        <button type="submit" class="w-full bg-blue-500 py-2 px-4 font-bold hover:bg-blue-700 focus:outline-none     text-white rounded shadow-sm">Login</button>

        <p> Don't have an account ? <a href="/login">Register</a></p>


        </form>
        
        </div>
</x-layout>