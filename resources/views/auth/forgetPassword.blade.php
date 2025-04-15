@extends('layout.master')

@section('title' , 'بازیابی رمز')

@section('contact')
<section class="min-h-screen flex items-center justify-center bg-gradient-to-br from-indigo-100 to-purple-100 py-20 px-4">
    <div class="bg-white shadow-2xl rounded-xl p-10 w-full max-w-md">
        <h2 class="text-3xl font-bold text-center text-indigo-600 mb-8">بازیابی رمز عبور</h2>
        @if(session()->has('error'))
            <div class="text-white px-4 py-1 bg-red-400">{{ session('error') }}</div>
        @endif
        @if(session()->has('success'))
            <div class="text-white bg-green-700 py-1 px-3">{{ session('success') }}</div>
        @endif
        <form  action="{{ route('forget.password.post') }}" method="POST" class="space-y-5">
            @csrf

            <div>
                <label for="email" class="block text-gray-700 font-semibold mb-1">ایمیل</label>
                <input type="email" name="email" id="email" value="{{ old('email') }}" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-300">
                @error('email')
                    <p class="text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <button type="submit" class="w-full bg-indigo-600 text-white py-2 rounded-lg hover:bg-indigo-700 transition duration-300 font-bold">
                تایید
            </button>
        </form>

        <p class="text-center text-sm text-gray-500 mt-6">
            حساب دارید؟ <a href="{{ route('login') }}" class="text-indigo-600 hover:underline font-semibold">ورود</a>
        </p>
    </div>
</section>
@endsection