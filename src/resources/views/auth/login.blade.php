@extends('layouts.app')

@section('content')
<div class="min-h-screen flex items-center justify-center bg-gray-100">
    <div class="w-full max-w-md p-6 bg-white rounded-lg shadow-md">
        <h2 class="text-2xl font-bold text-center mb-4">Login</h2>
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="mb-4">
                <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                <input type="email" name="email" id="email" class="w-full px-4 py-2 mt-1 border rounded-lg" required autofocus>
            </div>

            <div class="mb-6">
                <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                <input type="password" name="password" id="password" class="w-full px-4 py-2 mt-1 border rounded-lg" required>
            </div>

            <div class="flex items-center justify-between mb-6">
                <label for="remember" class="inline-flex items-center">
                    <input type="checkbox" name="remember" id="remember" class="form-checkbox text-blue-600">
                    <span class="ml-2 text-sm">Remember me</span>
                </label>
                <a href="{{ route('password.request') }}" class="text-sm text-blue-600 hover:text-blue-800">Forgot your password?</a>
            </div>

            <button type="submit" class="w-full py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700">Login</button>
        </form>
    </div>
</div>
@endsection