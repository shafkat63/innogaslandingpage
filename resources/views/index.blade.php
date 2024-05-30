<x-layout>
  
        @if(session('message'))
        <p
        class="text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2"
    >
        {{ session("message") }}
    </p>
        @endif
 
    @include('partial.navbar')
    @include('partial.hero')
    @include('partial.about')
    @include('partial.contact')
    @auth

    <form action="/logout" method="POST">
        @csrf
        <button
            type="submit"
            class="text-white bg-gradient-to-r from-red-400 via-red-500 to-red-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2"
        >
            logout
        </button>
    </form>
    @else
    <p


    @endauth
</x-layout>
