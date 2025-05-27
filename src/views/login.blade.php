@extends('layouts.app')

@section('content')
<div class="bg-white p-8 rounded-xl shadow-lg w-full max-w-md mx-auto mt-24">
    <h2 class="text-2xl font-bold text-center mb-6 text-gray-800">Login</h2>

    <form action="{{ route('login') }}" method="POST" class="space-y-4">
        @csrf
        <div>
            <label for="email" class="block text-sm font-medium text-gray-700">Email:</label>
            <input type="email" name="email" id="email" required
                class="mt-1 w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring focus:ring-blue-200 focus:outline-none" />
        </div>

        <div>
            <label for="password" class="block text-sm font-medium text-gray-700">Senha:</label>
            <input type="password" name="password" id="password" required
                class="mt-1 w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring focus:ring-blue-200 focus:outline-none" />
        </div>

        <button type="submit"
            class="w-full bg-blue-600 text-white py-2 rounded-lg hover:bg-blue-700 transition duration-200">
            Entrar
        </button>
    </form>
</div>
@endsection

