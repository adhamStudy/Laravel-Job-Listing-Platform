<x-layout>
    <div class="bg-white rounded-lg md:max-w-xl shadow-md w-full mx-auto mt-12 p-8 py-12">

        <h2 class="text-4xl text-center font-bold mb-4">Register</h2>

        <form method="POST" action="{{route('register')}}">

         @csrf
        <x-inputs.text id="name" name="name" placeholder="Full Name" label="Full Name" />
        <x-inputs.text id="email" name="email" type="email" placeholder="example: joun@ex.com"  label="email"/>
        <x-inputs.text id="password" name="password" type="password" placeholder="type Strong password" label="password" />
        <x-inputs.text id="password_confirmation" name="password_confirmation" type="password" placeholder="confirm your password" label="confirm password" />

        <button type="submit" class="w-full bg-blue-500 py-2 px-4 font-bold hover:bg-blue-700 focus:outline-none     text-white rounded shadow-sm">Register</button>

        <p> already have an account ? <a href="/login">Login</a></p>


        </form>
        
        </div>
</x-layout>