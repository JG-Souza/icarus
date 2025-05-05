@extends('layouts.app')

@section('content')
<div class="min-h-screen flex items-center justify-center bg-gray-100">
    <div class="w-full max-w-md p-6 bg-white rounded-lg shadow-md">
        <h2 class="text-2xl font-bold text-center mb-4">Forgot your password?</h2>
        <form method="POST" action="{{ route('password.email') }}">
            @csrf
            <div class="mb-4">
                <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                <input type="email" name="email" id="email" class="w-full px-4 py-2 mt-1 border rounded-lg" required autofocus>
            </div>

            <button type="submit" class="w-full py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700">Send Password Reset Link</button>
        </form>
    </div>
</div>
@endsection